module.exports = {
    purge: [
        '../**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#22292f',
                'secondary': '#606f7b',
                'tertiary': '#8795a1',

                'primary-inverse': '#ffffff',
                'secondary-inverse': '#f1f5f8',
                'tertiary-inverse': '#dae1e7',
            },
        },
        container: false,
        fontFamily: {
            sans: [
                '"Inter"',
                'system-ui',
                '-apple-system',
                'BlinkMacSystemFont',
                '"Segoe UI"',
                '"Helvetica Neue"',
                'Arial',
                '"Noto Sans"',
                'sans-serif',
                '"Apple Color Emoji"',
                '"Segoe UI Emoji"',
                '"Segoe UI Symbol"',
                '"Noto Color Emoji"',
            ],
        },
    },
    variants: {},
    plugins: [],
}
