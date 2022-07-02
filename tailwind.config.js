module.exports = {
    content: require("fast-glob").sync([
        "source/**/*.blade.php",
        "source/**/*.md",
        "source/**/*.html",
    ]),
    theme: {
        extend: {
            fontFamily: {
                raleway: ["Raleway", "sans-serif"],
                merriweather: ["Merriweather Sans", "sans-serif"],
                "yeseva-one": ["Yeseva One", "cursive"],
            },
            colors: {
                "bloodmyst-isle": {
                    100: "#fccece",
                    200: "#f99e9e",
                    300: "#f66e6e",
                    DEFAULT: "#F22929",
                    600: "#f00e0e",
                    700: "#c00b0b",
                    800: "#900808",
                    900: "#600505",
                },
                "firecracker-salmon": {
                    100: "#fbcfcf",
                    DEFAULT: "#F26363",
                    900: "#5e0707",
                },
                "frozen-blue": {
                    100: "#f6f9fb",
                    DEFAULT: "#A3C4D9",
                    800: "#2c536c",
                    900: "#1d3748",
                },
                nero: {
                    DEFAULT: "#262626",
                },
                "white-smoke": {
                    DEFAULT: "#F2F2F2",
                },
            },
            backgroundImage: {
                "hero-image": "url('/assets/images/hero-bg.jpg')",
                "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
