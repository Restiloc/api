import { defineConfig } from "vitepress";

export default defineConfig({
    base: "/docs/",
    outDir: "../public/docs",
    title: "Restiloc",
    lastUpdated: true,
    cleanUrls: true,
    head: [["meta", { name: "theme-color", content: "#3c8772" }]],
    markdown: {
        headers: {
            level: [0, 0],
        },
    },
    themeConfig: {
        logo: "https://github.com/Restiloc.png",
        nav: nav(),
        sidebar: {
            "/guide/": sidebarGuide(),
        },
        editLink: {
            pattern:
                "https://github.com/Restiloc/api/docs/edit/master/docs/:path",
            text: "Edit this page on GitHub",
        },
        socialLinks: [{ icon: "github", link: "https://github.com/Restiloc" }],
        footer: {
            message: "MIT Licensed",
            copyright: "Copyright © 2023-present Restiloc",
        },
    },
});

function nav() {
    return [
        {
            text: "Repositories",
            collapsed: false,
            items: [
                {
                    text: "Restiloc",
                    link: "https://github.com/Restiloc/restiloc",
                },
                { text: "Api", link: "https://github.com/Restiloc/api" },
                { text: "Figma", link: "https://github.com/Restiloc/ux" },
                { text: "Docs", link: "https://github.com/Restiloc/docs" },
            ],
        },
    ];
}

function sidebarGuide() {
    return [
        {
            text: "API References",
            collapsed: false,
            items: [
                {
                    text: "Authentication",
                    collapsed: true,
                    items: [
                        { text: "Login", link: "/guide/auth/login" },
                        { text: "Register", link: "/guide/auth/register" },
                    ],
                },
                { text: "Models", link: "/guide/models" },
                { text: "Experts", link: "/guide/experts" },
                { text: "Clients", link: "/guide/clients" },
                { text: "Garages", link: "/guide/garages" },
                { text: "Reasons", link: "/guide/reasons" },
                { text: "Vehicles", link: "/guide/vehicles" },
                { text: "Missions", link: "/guide/missions" },
                { text: "Expertises", link: "/guide/expertises" },
                { text: "Prestations", link: "/guide/prestations" },
                { text: "Unavailabilities", link: "/guide/unavailabilities" },
            ],
        },
    ];
}
