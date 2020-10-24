@extends('base')

@section('content')
    <div class="px-2 content">
        <h2>KHG Tanzkreis - Anmeldeportal</h2>
    </div>


    @forelse($events as $event)
        <div class="bg-white border rounded shadow-md px-2 py-4 content mb-8">
            <div class="">
                <div class="mb-4">
                    <h2 class="mb-0">{{ $event->name }}</h2>
                    <span class="text-secondary text-sm">{{ $event->begins_at->format('l, d. F - H:i') }}</span>
                    <p>{{ $event->description }}</p>
                </div>
                <div class="mb-8">
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-thin">Teilnehmer</span>
                        <span class="ml-4 text-sm text-secondary">
                        Freie Plätze: {{ $event->available_slots - count($event->registrations) }}
                    </span>
                    </div>
                    <div class="px-2">
                        @foreach($event->registrations as $registration)
                            <div>
                                <span>{{ $registration['leader'] }} & {{ $registration['follower'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h4>Anmeldung:</h4>
                    <div>
                        @if($event->hasFreeSlots())
                            <form method="POST" action="/">
                                @csrf
                                <input class="hidden" type="number" id="event" name="event" value="{{ $event->id }}">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="">
                                        <input class="block w-full border rounded bg-gray-100 px-3 py-2 "
                                               type="text"
                                               id="leader"
                                               name="leader"
                                               placeholder="Leader"/>
                                        @error('leader')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <input class="block w-full border rounded bg-gray-100 px-3 py-2 "
                                               type="text"
                                               id="follower"
                                               name="follower"
                                               placeholder="Follower"/>
                                        @error('follower')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <button class="inline-block rounded px-5 py-2 bg-blue-500 text-white"
                                                type="submit">
                                            Anmelden
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @else
                            <p>
                                Es sind bereits alle Plätze belegt.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="bg-white border rounded shadow-md px-2 py-4 content">
            <h2>Keine Veranstaltung gefunden :(</h2>
        </div>
    @endforelse
@endsection
