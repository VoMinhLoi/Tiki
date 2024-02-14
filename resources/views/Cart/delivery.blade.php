<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
<style>
.grid {
    width: 100%;
    display: block;
    padding: 0;
}


.grid.wide {
    max-width: 1200px;
    margin: 0 auto;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-left: -4px;
    margin-right: -4px;
}

.row.no-gutters {
    margin-left: 0;
    margin-right: 0;
}

.row + .row {
    margin-top: 8px;
}

.col {
    padding-left: 4px;
    padding-right: 4px;
}

.row.no-gutters .col {
    padding-left: 0;
    padding-right: 0;
}

.c-0 {
    display: none;
}

.c-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
}

.c-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}

.c-3 {
    flex: 0 0 25%;
    max-width: 25%;
}

.c-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}

.c-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
}

.c-6 {
    flex: 0 0 50%;
    max-width: 50%;
}

.c-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
}

.c-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}

.c-9 {
    flex: 0 0 75%;
    max-width: 75%;
}

.c-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
}

.c-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
}

.c-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

.c-o-1 {
    margin-left: 8.33333%;
}

.c-o-2 {
    margin-left: 16.66667%;
}

.c-o-3 {
    margin-left: 25%;
}

.c-o-4 {
    margin-left: 33.33333%;
}

.c-o-5 {
    margin-left: 41.66667%;
}

.c-o-6 {
    margin-left: 50%;
}

.c-o-7 {
    margin-left: 58.33333%;
}

.c-o-8 {
    margin-left: 66.66667%;
}

.c-o-9 {
    margin-left: 75%;
}

.c-o-10 {
    margin-left: 83.33333%;
}

.c-o-11 {
    margin-left: 91.66667%;
}

/* >= Tablet */
@media (min-width: 740px) {
    .row {
        margin-left: -8px;
        margin-right: -8px;
    }

    .col {
        padding-left: 8px;
        padding-right: 8px;
    }

    .m-0 {
        display: none;
    }

    .m-1,
    .m-2,
    .m-3,
    .m-4,
    .m-5,
    .m-6,
    .m-7,
    .m-8,
    .m-9,
    .m-10,
    .m-11,
    .m-12 {
        display: block;
    }

    .m-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .m-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .m-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .m-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .m-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .m-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .m-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .m-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .m-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .m-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .m-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .m-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .m-o-1 {
        margin-left: 8.33333%;
    }

    .m-o-2 {
        margin-left: 16.66667%;
    }

    .m-o-3 {
        margin-left: 25%;
    }

    .m-o-4 {
        margin-left: 33.33333%;
    }

    .m-o-5 {
        margin-left: 41.66667%;
    }

    .m-o-6 {
        margin-left: 50%;
    }

    .m-o-7 {
        margin-left: 58.33333%;
    }

    .m-o-8 {
        margin-left: 66.66667%;
    }

    .m-o-9 {
        margin-left: 75%;
    }

    .m-o-10 {
        margin-left: 83.33333%;
    }

    .m-o-11 {
        margin-left: 91.66667%;
    }
}

/* PC medium resolution > */
@media (min-width: 1113px) {
    .row {
        margin-left: -4px;
        margin-right: -4px;
    }

    .row.sm-gutter {
        margin-left: -5px;
        margin-right: -5px;
    }

    .col {
        padding-left: 4px;
        padding-right: 4px;
    }

    .row.sm-gutter .col {
        padding-left: 5px;
        padding-right: 5px;
    }

    .l-0 {
        display: none;
    }

    .l-1,
    .l-2,
    .l-2-4,
    .l-3,
    .l-4,
    .l-5,
    .l-6,
    .l-7,
    .l-8,
    .l-9,
    .l-10,
    .l-11,
    .l-12 {
        display: block;
    }

    .l-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .l-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .l-2-4 {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .l-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .l-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .l-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .l-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .l-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .l-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .l-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .l-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .l-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .l-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .l-o-1 {
        margin-left: 8.33333%;
    }

    .l-o-2 {
        margin-left: 16.66667%;
    }

    .l-o-3 {
        margin-left: 25%;
    }

    .l-o-4 {
        margin-left: 33.33333%;
    }

    .l-o-5 {
        margin-left: 41.66667%;
    }

    .l-o-6 {
        margin-left: 50%;
    }

    .l-o-7 {
        margin-left: 58.33333%;
    }

    .l-o-8 {
        margin-left: 66.66667%;
    }

    .l-o-9 {
        margin-left: 75%;
    }

    .l-o-10 {
        margin-left: 83.33333%;
    }

    .l-o-11 {
        margin-left: 91.66667%;
    }
}

/* Tablet - PC low resolution */
@media (min-width: 740px) and (max-width: 1023px) {
    .wide {
        /* width: 644px; */
    }
}

/* PC normal */
/* @media (min-width: 1240px) and (max-width: 1439px) {
    .wide {
        width: 1200px;
    }
} */

/* PC high resolution */ 
/* @media (min-width: 1440px) {
    .wide {
        width: 1392px;
    }
} */


/* > PC low resolution */
@media (min-width: 1024px) and (max-width: 1239px) {
    .wide {
        width: 984px;
    }

    .wide .row {
        margin-left: -4px;
        margin-right: -4px;
    }

    .wide .row.sm-gutter {
        margin-left: -5px;
        margin-right: -5px;
    }

    .wide .col {
        padding-left: 4px;
        padding-right: 4px;
    }

    .wide .row.sm-gutter .col {
        padding-left: 5px;
        padding-right: 5px;
    }

    .wide .l-0 {
        display: none;
    }

    .wide .l-1,
    .wide .l-2,
    .wide .l-2-4,
    .wide .l-3,
    .wide .l-4,
    .wide .l-5,
    .wide .l-6,
    .wide .l-7,
    .wide .l-8,
    .wide .l-9,
    .wide .l-10,
    .wide .l-11,
    .wide .l-12 {
        display: block;
    }

    .wide .l-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .wide .l-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .wide .l-2-4 {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .wide .l-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .wide .l-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .wide .l-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .wide .l-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .wide .l-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .wide .l-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .wide .l-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .wide .l-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .wide .l-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .wide .l-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .wide .l-o-1 {
        margin-left: 8.33333%;
    }

    .wide .l-o-2 {
        margin-left: 16.66667%;
    }

    .wide .l-o-3 {
        margin-left: 25%;
    }

    .wide .l-o-4 {
        margin-left: 33.33333%;
    }

    .wide .l-o-5 {
        margin-left: 41.66667%;
    }

    .wide .l-o-6 {
        margin-left: 50%;
    }

    .wide .l-o-7 {
        margin-left: 58.33333%;
    }

    .wide .l-o-8 {
        margin-left: 66.66667%;
    }

    .wide .l-o-9 {
        margin-left: 75%;
    }

    .wide .l-o-10 {
        margin-left: 83.33333%;
    }

    .wide .l-o-11 {
        margin-left: 91.66667%;
    }
}

</style>

<style>
    /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

    .header {
    height: 96px;
    padding: 8px 64px;
    box-shadow: 0px 0px 1px black;
    background-color: white;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 2;
    display: flex;
    justify-content: space-between;
  }
  .header .header-link__img {
    min-width: 72px;
    max-width: 72px;
  }
  .header .header__search {
    margin: 0 48px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    flex: 1;
  }
  .header .header__search .header-search__bar {
    height: 40px;
    border: 1px solid #dddde3;
    border-radius: 8px;
    position: relative;
    display: flex;
    align-items: center;
  }
  .header .header__search .header-search__bar .header-search-bar__icon {
    max-width: 40px;
    height: 20px;
    padding: 0 10px;
  }
  .header .header__search .header-search__bar .header-search-bar__input {
    outline: none;
    height: 40px;
    border-top: 1px solid #dddde3;
    border-bottom: 1px solid #dddde3;
    flex: 1;
  }
  .header .header__search .header-search__bar .header-search-bar__input::placeholder {
    font-size: 14px;
    color: #8f8f97;
    text-transform: capitalize;
    line-height: 40px;
    font-weight: 400;
  }
  .header .header__search .header-search__bar .header-search-bar__button::before {
    content: "";
    height: 50%;
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    border: 1px solid #ebebf0;
  }
  .header .header__search .header-search__bar .header-search-bar__button {
    font-size: 14px;
    color: #5993ff;
    height: 100%;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    padding: 0 18px;
    position: relative;
  }
  .header .header__search .header-search__bar .header-search-bar__button:hover {
    background-color: #0060ff1f;
  }
  .header .header__search .header-search__bar .search {
    display: none;
    position: absolute;
    background-color: white;
    top: 40px;
    right: 0;
    left: 0;
    height: fit-content;
    box-shadow: rgba(0, 0, 0, 0.28) 0px 6px 12px 0px;
    border-radius: 4px;
    padding: 16px 0;
    z-index: 1;
  }
  .header .header__search .header-search__bar .search .search__header {
    margin-bottom: 16px;
    font-weight: bold;
    margin-left: 16px;
  }
  .header .header__search .header-search__bar .search .search-item__link {
    display: block;
    padding: 8px 16px;
  }
  .header .header__search .header-search__bar .search .search-item__link:hover {
    background-color: rgba(39, 39, 42, 0.12);
  }
  .header .header__search .header-search__bar .header-search-bar__input:focus ~ .search {
    display: block !important;
  }
  .header .header__search .header__nav .header-nav__list {
    display: flex;
    height: 24px;
  }
  .header .header__search .header__nav .header-nav__list .header-nav__item .header-nav-item__link {
    color: #9c9ca3;
    font-size: 14px;
  }
  .header .header__search .header__nav .header-nav__list .header-nav__item + .header-nav__item {
    margin-left: 12px;
  }
  .header .header__private {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-end;
  }
  .header .header__private .header-private__list {
    display: flex;
  }
  .header .header__private .header-private__list .header-private__item {
    width: fit-content;
  }
  .header .header__private .header-private__list .header-private__item .header-private-item__link {
    display: flex;
    font-size: 14px;
    padding: 8px 16px;
    color: #81818a;
    position: relative;
    border-radius: 8px;
    margin-right: 24px;
  }
  .header .header__private .header-private__list .header-private__item .header-private-item__link .header-private-item-link__icon {
    font-size: 20px;
    margin-right: 8px;
  }
  .header .header__private .header-private__list .header-private__item .header-private-item__link--blue {
    color: #0062ff;
  }
  .header .header__private .header-private__list .header-private__item .header-private-item__link-quantity::before {
    content: "";
    height: 20px;
    border-left: 2px solid #ebebf0;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: -16px;
  }
  .header .header__private .header-private__address .header-private-address__detail {
    font-size: 14px;
    color: #9c9ca3;
  }
  .header .header__private .header-private__address .header-private-address__detail .header-private-address-detail__link {
    text-decoration: underline;
    color: black;
  }
  
  .header-private__item:hover .header-private-item__link {
    border-radius: 8px;
    background-color: #0060ff1f;
  }
  
  .over-layer-menu-mobile {
    position: absolute;
    top: 100%;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.5);
    animation: FadeIn linear 0.1s;
    display: none;
    transition: all linear 0.1s;
  }
  
  .menu-mobile {
    position: absolute;
    top: calc(100% + 1px);
    right: 0;
    width: 300px;
    height: 100vh;
    background-color: white;
    font-size: 14px;
    animation: SlideFromRight linear 0.2s;
    display: none;
    transition: all linear 0.1s;
  }
  
  @keyframes SlideFromRight {
    from {
      transform: translateX(100%);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }
  .menu-mobile__item + .menu-mobile__item {
    border-top: 1px solid rgba(0, 96, 255, 0.1215686275);
  }
  
  .menu-mobile-item__link {
    padding: 12px;
    display: block;
  }
  
  .menu-mobile-item__link:hover {
    background-color: rgba(0, 96, 255, 0.1215686275);
  }
  
  #show-menu-mobile:checked ~ .over-layer-menu-mobile {
    display: block;
  }
  
  #show-menu-mobile:checked ~ .menu-mobile {
    display: block;
  }
  
  .header-private__item-has-menu-user:hover .menu-user {
    display: block;
  }
  
  .menu-user {
    position: absolute;
    background-color: white;
    box-shadow: 0 0 1px 0px black;
    border-radius: 8px;
    overflow: hidden;
    display: none;
  }
  
  .menu-user__item-link {
    display: block;
    padding: 12px 16px;
  }
  
  .menu-user__item-link:hover {
    background-color: #e2e2e2;
  }
  .footer .footer__list {
    padding: 16px;
  }
  .footer .footer__list .footer__item {
    display: flex;
    align-items: center;
  }
  .footer .footer__list .footer__item .footer-item__header {
    font-weight: bold;
    font-size: 16px;
    color: #38383D;
    margin-bottom: 12px;
  }
  .footer .footer__list .footer__item .footer-item__link {
    font-weight: 500;
    font-size: 12px;
    color: #a0a0a7;
    margin-bottom: 8px;
    display: flex;
  }
  .footer .footer__list .footer__item .footer-item__link .footer-item-link__img {
    width: 32px;
  }
  .footer .footer__list .footer__item .footer-item__link-svg {
    margin: 0 8px 8px 0;
  }
  .footer .footer__list .footer__item .footer-item__link:hover {
    text-decoration: underline;
  }
  .footer .footer__list .footer__item .footer-item__link--disable:hover {
    text-decoration: none;
  }
  
  .footer-item__header--mt-3, .footer__item--mt-3 {
    margin-top: 16px;
  }
  
  .footer-item__link-img--me-2 {
    margin-right: 8px;
  }
  
  .footer-item-link-download__img {
    object-fit: contain;
  }
  
  .footer-item-link-download__img--mb-2 {
    margin-bottom: 8px;
  }
  
  .item {
    background-color: orange;
    height: 100%;
  }

    .breadcrumb {
        height: 40px;
        margin-top: 96px;   
    }
    .breadcrumb__title {
        height: 100%;
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #808089;
        font-weight: 300;
    }
    .contain__title {
        font-weight: bold;
    }
    .contain__form {
        margin-top: 16px;
    }

    .contain__form-input {
        border: 1px solid black;
    }
    
</style>
@include('Home/header')
<div class="grid wide" style="background: #9ca3af">
    <div class="breadcrumb">
        <h1 class="breadcrumb__title">Thông tin giao hàng</h1>
    </div>
    <div class="row" style="background: white; padding: 16px">
        <div class="col l-12">
            <div class="contain">
                <h1 class="contain__title">Nhập thông tin:</h1>
                <form action="{{ route('updateCart2', ['cart' => $cart->id]) }}" method="POST" class="contain__form">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="product_id" value="{{ $cart->product_id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <label for="address">Địa chỉ nhận:</label>
                    <input id="address" name="address" type="text" class="contain__form-input">
                    <label for="phone">Số diện thoại:</label>
                    <input id="phone" name="phone" type="text" class="contain__form-input">
                    <div>
                        <p for="">Phương thức thanh toán</p>
                        <p class="">
                            <input type="radio" id="direct" name="payingMethod" value="Thanh toán trực tiếp khi nhận hàng." checked>
                            <label for="direct">Thanh toán trực tiếp khi nhận hàng.</label>
                        </p>
                    </div>
                    <input type="submit" value="Đặt" style="background: #ef4444; padding: 8px; border-radius: 4px; color:white;">
                </form>
            </div>
        </div>
    </div>
</div>
@include('Home.footer')
</div>
