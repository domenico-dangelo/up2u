/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'up2u-primary-green': '#0CC691',
                'up2u-disabled-green': '#85E2C8',
                'up2u-border': '#BFC2CD',
                'up2u-fill-hover': '#EFF0F2',
                'up2u-fill-selected': '#EAEBEF',
                'up2u-error-red': '#CA2530',
            }
        },
    },
    plugins: []
}
