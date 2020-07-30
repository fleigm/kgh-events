<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $event = Event::query()
            ->whereDate('begins_at', '>=', Carbon::today()->toDateString())
            ->first();

        return view('index', ['event' => $event]);
    }

    public function create(Request $request)
    {

        $event = Event::query()->findOrFail($request->get('event'));

        $registration = $request->validate([
            'leader' => ['required', 'string', 'max:25'],
            'follower' => ['required', 'string', 'max:25'],
        ]);

        if (!$event->hasFreeSlots()) {
            return redirect('/');
        }

        $registrations = $event->registrations;
        $registrations[] = $registration;
        $event->registrations = $registrations;

        $event->save();

        return redirect('success');

    }
}
