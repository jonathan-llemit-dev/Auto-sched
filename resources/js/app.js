import "./bootstrap";
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})

.use(SpladePlugin, {
    "max_keep_alive": 10,
    "transform_anchors": false,
    "progress_bar": {
        delay: 250,
        color: "linear-gradient(90deg, rgba(0,215,255,1) 0%, rgba(0,186,221,1) 25%, rgba(0,164,194,1) 50%, rgba(0,125,148,1) 75%, rgba(0,79,94,1) 100%)",
        css: true,
        spinner: false,
    }
})

.mount(el);