<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <style>
            /* @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fredoka&family=Fredoka+One&family=Kanit&family=Poppins&family=Tilt+Neon&family=Varela+Round&display=swap'); */

            /*
            ! tailwindcss v3.2.7 | MIT License | https://tailwindcss.com
            */

            /*
            1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
            2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
            */

            .a4 {
                width: 842px;
                height: 595px;
            }

            *,
            ::before,
            ::after {
            box-sizing: border-box;
            /* 1 */
            border-width: 0;
            /* 2 */
            border-style: solid;
            /* 2 */
            border-color: #e5e7eb;
            /* 2 */
            }

            ::before,
            ::after {
            --tw-content: '';
            }

            /*
            1. Use a consistent sensible line-height in all browsers.
            2. Prevent adjustments of font size after orientation changes in iOS.
            3. Use a more readable tab size.
            4. Use the user's configured `sans` font-family by default.
            5. Use the user's configured `sans` font-feature-settings by default.
            */

            html {
            line-height: 1.5;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
            -moz-tab-size: 4;
            /* 3 */
            -o-tab-size: 4;
                tab-size: 4;
            /* 3 */
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* 4 */
            font-feature-settings: normal;
            /* 5 */
            }

            /*
            1. Remove the margin in all browsers.
            2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
            */

            body {
            margin: 0;
            /* 1 */
            line-height: inherit;
            /* 2 */
            }

            /*
            1. Add the correct height in Firefox.
            2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
            3. Ensure horizontal rules are visible by default.
            */

            hr {
            height: 0;
            /* 1 */
            color: inherit;
            /* 2 */
            border-top-width: 1px;
            /* 3 */
            }

            /*
            Add the correct text decoration in Chrome, Edge, and Safari.
            */

            abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted;
            }

            /*
            Remove the default font size and weight for headings.
            */

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
            font-size: inherit;
            font-weight: inherit;
            }

            /*
            Reset links to optimize for opt-in styling instead of opt-out.
            */

            a {
            color: inherit;
            text-decoration: inherit;
            }

            /*
            Add the correct font weight in Edge and Safari.
            */

            b,
            strong {
            font-weight: bolder;
            }

            /*
            1. Use the user's configured `mono` font family by default.
            2. Correct the odd `em` font sizing in all browsers.
            */

            code,
            kbd,
            samp,
            pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
            }

            /*
            Add the correct font size in all browsers.
            */

            small {
            font-size: 80%;
            }

            /*
            Prevent `sub` and `sup` elements from affecting the line height in all browsers.
            */

            sub,
            sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
            }

            sub {
            bottom: -0.25em;
            }

            sup {
            top: -0.5em;
            }

            /*
            1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
            2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
            3. Remove gaps between table borders by default.
            */

            table {
            text-indent: 0;
            /* 1 */
            border-color: inherit;
            /* 2 */
            border-collapse: collapse;
            /* 3 */
            }

            /*
            1. Change the font styles in all browsers.
            2. Remove the margin in Firefox and Safari.
            3. Remove default padding in all browsers.
            */

            button,
            input,
            optgroup,
            select,
            textarea {
            font-family: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            font-weight: inherit;
            /* 1 */
            line-height: inherit;
            /* 1 */
            color: inherit;
            /* 1 */
            margin: 0;
            /* 2 */
            padding: 0;
            /* 3 */
            }

            /*
            Remove the inheritance of text transform in Edge and Firefox.
            */

            button,
            select {
            text-transform: none;
            }

            /*
            1. Correct the inability to style clickable types in iOS and Safari.
            2. Remove default button styles.
            */

            button,
            [type='button'],
            [type='reset'],
            [type='submit'] {
            -webkit-appearance: button;
            /* 1 */
            background-color: transparent;
            /* 2 */
            background-image: none;
            /* 2 */
            }

            /*
            Use the modern Firefox focus style for all focusable elements.
            */

            :-moz-focusring {
            outline: auto;
            }

            /*
            Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
            */

            :-moz-ui-invalid {
            box-shadow: none;
            }

            /*
            Add the correct vertical alignment in Chrome and Firefox.
            */

            progress {
            vertical-align: baseline;
            }

            /*
            Correct the cursor style of increment and decrement buttons in Safari.
            */

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
            height: auto;
            }

            /*
            1. Correct the odd appearance in Chrome and Safari.
            2. Correct the outline style in Safari.
            */

            [type='search'] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
            }

            /*
            Remove the inner padding in Chrome and Safari on macOS.
            */

            ::-webkit-search-decoration {
            -webkit-appearance: none;
            }

            /*
            1. Correct the inability to style clickable types in iOS and Safari.
            2. Change font properties to `inherit` in Safari.
            */

            ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
            }

            /*
            Add the correct display in Chrome and Safari.
            */

            summary {
            display: list-item;
            }

            /*
            Removes the default spacing and border for appropriate elements.
            */

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
            margin: 0;
            }

            fieldset {
            margin: 0;
            padding: 0;
            }

            legend {
            padding: 0;
            }

            ol,
            ul,
            menu {
            list-style: none;
            margin: 0;
            padding: 0;
            }

            /*
            Prevent resizing textareas horizontally by default.
            */

            textarea {
            resize: vertical;
            }

            /*
            1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
            2. Set the default placeholder color to the user's configured gray 400 color.
            */

            input::-moz-placeholder, textarea::-moz-placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
            }

            input::placeholder,
            textarea::placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
            }

            /*
            Set the default cursor for buttons.
            */

            button,
            [role="button"] {
            cursor: pointer;
            }

            /*
            Make sure disabled buttons don't get the pointer cursor.
            */

            :disabled {
            cursor: default;
            }

            /*
            1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
            2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
            This can trigger a poorly considered lint error in some tools but is included by design.
            */

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
            display: block;
            /* 1 */
            vertical-align: middle;
            /* 2 */
            }

            /*
            Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
            */

            img,
            video {
            max-width: 100%;
            height: auto;
            }

            /* Make elements with the HTML hidden attribute stay hidden by default */

            [hidden] {
            display: none;
            }

            [type='text'],[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select{
            -webkit-appearance: none;
                -moz-appearance: none;
                    appearance: none;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            border-radius: 0px;
            padding-top: 0.5rem;
            padding-right: 0.75rem;
            padding-bottom: 0.5rem;
            padding-left: 0.75rem;
            font-size: 1rem;
            line-height: 1.5rem;
            --tw-shadow: 0 0 #0000;
            }

            [type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus{
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            border-color: #2563eb;
            }

            input::-moz-placeholder, textarea::-moz-placeholder{
            color: #6b7280;
            opacity: 1;
            }

            input::placeholder,textarea::placeholder{
            color: #6b7280;
            opacity: 1;
            }

            ::-webkit-datetime-edit-fields-wrapper{
            padding: 0;
            }

            ::-webkit-date-and-time-value{
            min-height: 1.5em;
            }

            ::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field{
            padding-top: 0;
            padding-bottom: 0;
            }

            select{
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-print-color-adjust: exact;
                    print-color-adjust: exact;
            }

            [multiple]{
            background-image: initial;
            background-position: initial;
            background-repeat: unset;
            background-size: initial;
            padding-right: 0.75rem;
            -webkit-print-color-adjust: unset;
                    print-color-adjust: unset;
            }

            [type='checkbox'],[type='radio']{
            -webkit-appearance: none;
                -moz-appearance: none;
                    appearance: none;
            padding: 0;
            -webkit-print-color-adjust: exact;
                    print-color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
                -moz-user-select: none;
                    user-select: none;
            flex-shrink: 0;
            height: 1rem;
            width: 1rem;
            color: #2563eb;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            --tw-shadow: 0 0 #0000;
            }

            [type='checkbox']{
            border-radius: 0px;
            }

            [type='radio']{
            border-radius: 100%;
            }

            [type='checkbox']:focus,[type='radio']:focus{
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            }

            [type='checkbox']:checked,[type='radio']:checked{
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            }

            [type='checkbox']:checked{
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
            }

            [type='radio']:checked{
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
            }

            [type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus{
            border-color: transparent;
            background-color: currentColor;
            }

            [type='checkbox']:indeterminate{
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            }

            [type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus{
            border-color: transparent;
            background-color: currentColor;
            }

            [type='file']{
            background: unset;
            border-color: inherit;
            border-width: 0;
            border-radius: 0;
            padding: 0;
            font-size: unset;
            line-height: inherit;
            }

            [type='file']:focus{
            outline: 1px solid ButtonText;
            outline: 1px auto -webkit-focus-ring-color;
            }

            *, ::before, ::after{
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x:  ;
            --tw-pan-y:  ;
            --tw-pinch-zoom:  ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal:  ;
            --tw-slashed-zero:  ;
            --tw-numeric-figure:  ;
            --tw-numeric-spacing:  ;
            --tw-numeric-fraction:  ;
            --tw-ring-inset:  ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur:  ;
            --tw-brightness:  ;
            --tw-contrast:  ;
            --tw-grayscale:  ;
            --tw-hue-rotate:  ;
            --tw-invert:  ;
            --tw-saturate:  ;
            --tw-sepia:  ;
            --tw-drop-shadow:  ;
            --tw-backdrop-blur:  ;
            --tw-backdrop-brightness:  ;
            --tw-backdrop-contrast:  ;
            --tw-backdrop-grayscale:  ;
            --tw-backdrop-hue-rotate:  ;
            --tw-backdrop-invert:  ;
            --tw-backdrop-opacity:  ;
            --tw-backdrop-saturate:  ;
            --tw-backdrop-sepia:  ;
            }

            ::backdrop{
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x:  ;
            --tw-pan-y:  ;
            --tw-pinch-zoom:  ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal:  ;
            --tw-slashed-zero:  ;
            --tw-numeric-figure:  ;
            --tw-numeric-spacing:  ;
            --tw-numeric-fraction:  ;
            --tw-ring-inset:  ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur:  ;
            --tw-brightness:  ;
            --tw-contrast:  ;
            --tw-grayscale:  ;
            --tw-hue-rotate:  ;
            --tw-invert:  ;
            --tw-saturate:  ;
            --tw-sepia:  ;
            --tw-drop-shadow:  ;
            --tw-backdrop-blur:  ;
            --tw-backdrop-brightness:  ;
            --tw-backdrop-contrast:  ;
            --tw-backdrop-grayscale:  ;
            --tw-backdrop-hue-rotate:  ;
            --tw-backdrop-invert:  ;
            --tw-backdrop-opacity:  ;
            --tw-backdrop-saturate:  ;
            --tw-backdrop-sepia:  ;
            }

            .container{
            width: 100%;
            }

            @media (min-width: 640px){
            .container{
                max-width: 640px;
            }
            }

            @media (min-width: 768px){
            .container{
                max-width: 768px;
            }
            }

            @media (min-width: 1024px){
            .container{
                max-width: 1024px;
            }
            }

            @media (min-width: 1280px){
            .container{
                max-width: 1280px;
            }
            }

            @media (min-width: 1536px){
            .container{
                max-width: 1536px;
            }
            }

            .sr-only{
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
            }

            .pointer-events-none{
            pointer-events: none;
            }

            .pointer-events-auto{
            pointer-events: auto;
            }

            .visible{
            visibility: visible;
            }

            .invisible{
            visibility: hidden;
            }

            .fixed{
            position: fixed;
            }

            .absolute{
            position: absolute;
            }

            .relative{
            position: relative;
            }

            .inset-0{
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            }

            .inset-y-0{
            top: 0px;
            bottom: 0px;
            }

            .-bottom-4{
            bottom: -1rem;
            }

            .-right-1{
            right: -0.25rem;
            }

            .-right-3{
            right: -0.75rem;
            }

            .-right-4{
            right: -1rem;
            }

            .-top-3{
            top: -0.75rem;
            }

            .-top-32{
            top: -8rem;
            }

            .bottom-1{
            bottom: 0.25rem;
            }

            .bottom-9{
            bottom: 2.25rem;
            }

            .left-0{
            left: 0px;
            }

            .left-3{
            left: 0.75rem;
            }

            .right-0{
            right: 0px;
            }

            .right-1{
            right: 0.25rem;
            }

            .right-2{
            right: 0.5rem;
            }

            .right-5{
            right: 1.25rem;
            }

            .top-0{
            top: 0px;
            }

            .top-5{
            top: 1.25rem;
            }

            .top-6{
            top: 1.5rem;
            }

            .z-0{
            z-index: 0;
            }

            .z-10{
            z-index: 10;
            }

            .z-20{
            z-index: 20;
            }

            .z-30{
            z-index: 30;
            }

            .z-40{
            z-index: 40;
            }

            .order-1{
            order: 1;
            }

            .order-2{
            order: 2;
            }

            .order-3{
            order: 3;
            }

            .order-4{
            order: 4;
            }

            .order-5{
            order: 5;
            }

            .order-6{
            order: 6;
            }

            .m-2{
            margin: 0.5rem;
            }

            .m-3{
            margin: 0.75rem;
            }

            .m-4{
            margin: 1rem;
            }

            .m-5{
            margin: 1.25rem;
            }

            .m-7{
            margin: 1.75rem;
            }

            .-mx-1{
            margin-left: -0.25rem;
            margin-right: -0.25rem;
            }

            .-mx-1\.5{
            margin-left: -0.375rem;
            margin-right: -0.375rem;
            }

            .-my-1{
            margin-top: -0.25rem;
            margin-bottom: -0.25rem;
            }

            .-my-1\.5{
            margin-top: -0.375rem;
            margin-bottom: -0.375rem;
            }

            .-my-2{
            margin-top: -0.5rem;
            margin-bottom: -0.5rem;
            }

            .mx-2{
            margin-left: 0.5rem;
            margin-right: 0.5rem;
            }

            .mx-3{
            margin-left: 0.75rem;
            margin-right: 0.75rem;
            }

            .mx-6{
            margin-left: 1.5rem;
            margin-right: 1.5rem;
            }

            .mx-auto{
            margin-left: auto;
            margin-right: auto;
            }

            .my-2{
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            }

            .my-4{
            margin-top: 1rem;
            margin-bottom: 1rem;
            }

            .-ml-px{
            margin-left: -1px;
            }

            .-mr-2{
            margin-right: -0.5rem;
            }

            .-mt-px{
            margin-top: -1px;
            }

            .mb-0{
            margin-bottom: 0px;
            }

            .mb-1{
            margin-bottom: 0.25rem;
            }

            .mb-3{
            margin-bottom: 0.75rem;
            }

            .mb-4{
            margin-bottom: 1rem;
            }

            .mb-5{
            margin-bottom: 1.25rem;
            }

            .mb-8{
            margin-bottom: 2rem;
            }

            .ml-1{
            margin-left: 0.25rem;
            }

            .ml-12{
            margin-left: 3rem;
            }

            .ml-2{
            margin-left: 0.5rem;
            }

            .ml-3{
            margin-left: 0.75rem;
            }

            .ml-4{
            margin-left: 1rem;
            }

            .ml-auto{
            margin-left: auto;
            }

            .mr-1{
            margin-right: 0.25rem;
            }

            .mr-2{
            margin-right: 0.5rem;
            }

            .mr-3{
            margin-right: 0.75rem;
            }

            .mr-4{
            margin-right: 1rem;
            }

            .mr-5{
            margin-right: 1.25rem;
            }

            .mr-xs{
            margin-right: 0.1rem;
            }

            .mt-0{
            margin-top: 0px;
            }

            .mt-1{
            margin-top: 0.25rem;
            }

            .mt-2{
            margin-top: 0.5rem;
            }

            .mt-3{
            margin-top: 0.75rem;
            }

            .mt-4{
            margin-top: 1rem;
            }

            .mt-5{
            margin-top: 1.25rem;
            }

            .mt-6{
            margin-top: 1.5rem;
            }

            .mt-7{
            margin-top: 1.75rem;
            }

            .mt-8{
            margin-top: 2rem;
            }

            .block{
            display: block;
            }

            .inline-block{
            display: inline-block;
            }

            .inline{
            display: inline;
            }

            .flex{
            display: flex;
            }

            .inline-flex{
            display: inline-flex;
            }

            .\!table{
            display: table !important;
            }

            .table{
            display: table;
            }

            .grid{
            display: grid;
            }

            .hidden{
            display: none;
            }

            .h-1{
            height: 0.25rem;
            }

            .h-11{
            height: 2.75rem;
            }

            .h-12{
            height: 3rem;
            }

            .h-16{
            height: 4rem;
            }

            .h-2{
            height: 0.5rem;
            }

            .h-20{
            height: 5rem;
            }

            .h-24{
            height: 6rem;
            }

            .h-3{
            height: 0.75rem;
            }

            .h-4{
            height: 1rem;
            }

            .h-40{
            height: 10rem;
            }

            .h-48{
            height: 12rem;
            }

            .h-5{
            height: 1.25rem;
            }

            .h-6{
            height: 1.5rem;
            }

            .h-8{
            height: 2rem;
            }

            .h-9{
            height: 2.25rem;
            }

            .h-auto{
            height: auto;
            }

            .h-fit{
            height: -moz-fit-content;
            height: fit-content;
            }

            .h-full{
            height: 100%;
            }

            .min-h-full{
            min-height: 100%;
            }

            .min-h-screen{
            min-height: 100vh;
            }

            .w-0{
            width: 0px;
            }

            .w-1{
            width: 0.25rem;
            }

            .w-100{
            width: 30rem;
            }

            .w-11{
            width: 2.75rem;
            }

            .w-11\/12{
            width: 91.666667%;
            }

            .w-12{
            width: 3rem;
            }

            .w-14{
            width: 3.5rem;
            }

            .w-2{
            width: 0.5rem;
            }

            .w-20{
            width: 5rem;
            }

            .w-3{
            width: 0.75rem;
            }

            .w-4{
            width: 1rem;
            }

            .w-40{
            width: 10rem;
            }

            .w-48{
            width: 12rem;
            }

            .w-5{
            width: 1.25rem;
            }

            .w-52{
            width: 13rem;
            }

            .w-6{
            width: 1.5rem;
            }

            .w-60{
            width: 15rem;
            }

            .w-64{
            width: 16rem;
            }

            .w-8{
            width: 2rem;
            }

            .w-auto{
            width: auto;
            }

            .w-fit{
            width: -moz-fit-content;
            width: fit-content;
            }

            .w-full{
            width: 100%;
            }

            .min-w-0{
            min-width: 0px;
            }

            .min-w-\[240px\]{
            min-width: 240px;
            }

            .min-w-full{
            min-width: 100%;
            }

            .min-w-max{
            min-width: -moz-max-content;
            min-width: max-content;
            }

            .max-w-2xl{
            max-width: 42rem;
            }

            .max-w-3xl{
            max-width: 48rem;
            }

            .max-w-4xl{
            max-width: 56rem;
            }

            .max-w-5xl{
            max-width: 64rem;
            }

            .max-w-6xl{
            max-width: 72rem;
            }

            .max-w-7xl{
            max-width: 80rem;
            }

            .max-w-lg{
            max-width: 32rem;
            }

            .max-w-md{
            max-width: 28rem;
            }

            .max-w-namew{
            max-width: 8rem;
            }

            .max-w-sm{
            max-width: 24rem;
            }

            .max-w-xl{
            max-width: 36rem;
            }

            .flex-1{
            flex: 1 1 0%;
            }

            .flex-shrink-0{
            flex-shrink: 0;
            }

            .shrink-0{
            flex-shrink: 0;
            }

            .flex-grow{
            flex-grow: 1;
            }

            .-translate-x-full{
            --tw-translate-x: -100%;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .translate-x-0{
            --tw-translate-x: 0px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .translate-x-5{
            --tw-translate-x: 1.25rem;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .translate-x-full{
            --tw-translate-x: 100%;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .translate-y-0{
            --tw-translate-y: 0px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .translate-y-4{
            --tw-translate-y: 1rem;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .-rotate-90{
            --tw-rotate: -90deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .scale-100{
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .scale-95{
            --tw-scale-x: .95;
            --tw-scale-y: .95;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .transform{
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            @keyframes spin{
            to{
                transform: rotate(360deg);
            }
            }

            .animate-spin{
            animation: spin 1s linear infinite;
            }

            .cursor-default{
            cursor: default;
            }

            .cursor-not-allowed{
            cursor: not-allowed;
            }

            .cursor-pointer{
            cursor: pointer;
            }

            .select-none{
            -webkit-user-select: none;
                -moz-user-select: none;
                    user-select: none;
            }

            .grid-flow-col{
            grid-auto-flow: column;
            }

            .grid-cols-1{
            grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .grid-cols-2{
            grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .grid-cols-3{
            grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .flex-row{
            flex-direction: row;
            }

            .flex-col{
            flex-direction: column;
            }

            .flex-wrap{
            flex-wrap: wrap;
            }

            .content-start{
            align-content: flex-start;
            }

            .items-start{
            align-items: flex-start;
            }

            .items-end{
            align-items: flex-end;
            }

            .items-center{
            align-items: center;
            }

            .justify-start{
            justify-content: flex-start;
            }

            .justify-end{
            justify-content: flex-end;
            }

            .justify-center{
            justify-content: center;
            }

            .justify-between{
            justify-content: space-between;
            }

            .justify-items-center{
            justify-items: center;
            }

            .gap-1{
            gap: 0.25rem;
            }

            .gap-10{
            gap: 2.5rem;
            }

            .gap-2{
            gap: 0.5rem;
            }

            .gap-3{
            gap: 0.75rem;
            }

            .gap-4{
            gap: 1rem;
            }

            .gap-5{
            gap: 1.25rem;
            }

            .space-x-6 > :not([hidden]) ~ :not([hidden]){
            --tw-space-x-reverse: 0;
            margin-right: calc(1.5rem * var(--tw-space-x-reverse));
            margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
            }

            .space-x-8 > :not([hidden]) ~ :not([hidden]){
            --tw-space-x-reverse: 0;
            margin-right: calc(2rem * var(--tw-space-x-reverse));
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
            }

            .space-y-1 > :not([hidden]) ~ :not([hidden]){
            --tw-space-y-reverse: 0;
            margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
            }

            .space-y-4 > :not([hidden]) ~ :not([hidden]){
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse));
            }

            .space-y-6 > :not([hidden]) ~ :not([hidden]){
            --tw-space-y-reverse: 0;
            margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
            }

            .divide-y > :not([hidden]) ~ :not([hidden]){
            --tw-divide-y-reverse: 0;
            border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
            border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
            }

            .divide-gray-200 > :not([hidden]) ~ :not([hidden]){
            --tw-divide-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-divide-opacity));
            }

            .overflow-auto{
            overflow: auto;
            }

            .overflow-hidden{
            overflow: hidden;
            }

            .overflow-x-auto{
            overflow-x: auto;
            }

            .overflow-y-auto{
            overflow-y: auto;
            }

            .overflow-y-hidden{
            overflow-y: hidden;
            }

            .text-ellipsis{
            text-overflow: ellipsis;
            }

            .whitespace-nowrap{
            white-space: nowrap;
            }

            .break-words{
            overflow-wrap: break-word;
            }

            .break-all{
            word-break: break-all;
            }

            .rounded{
            border-radius: 0.25rem;
            }

            .rounded-2xl{
            border-radius: 1rem;
            }

            .rounded-50{
            border-radius: 50px;
            }

            .rounded-full{
            border-radius: 9999px;
            }

            .rounded-lg{
            border-radius: 0.5rem;
            }

            .rounded-md{
            border-radius: 0.375rem;
            }

            .rounded-none{
            border-radius: 0px;
            }

            .rounded-xl{
            border-radius: 0.75rem;
            }

            .rounded-l-md{
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
            }

            .rounded-r-3xl{
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
            }

            .rounded-r-md{
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
            }

            .rounded-t-2xl{
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            }

            .rounded-bl-md{
            border-bottom-left-radius: 0.375rem;
            }

            .rounded-bl-none{
            border-bottom-left-radius: 0px;
            }

            .rounded-br-3xl{
            border-bottom-right-radius: 1.5rem;
            }

            .rounded-br-none{
            border-bottom-right-radius: 0px;
            }

            .rounded-tl-none{
            border-top-left-radius: 0px;
            }

            .rounded-tr-none{
            border-top-right-radius: 0px;
            }

            .border{
            border-width: 1px;
            }

            .border-0{
            border-width: 0px;
            }

            .border-2{
            border-width: 2px;
            }

            .border-4{
            border-width: 4px;
            }

            .border-y{
            border-top-width: 1px;
            border-bottom-width: 1px;
            }

            .border-b{
            border-bottom-width: 1px;
            }

            .border-b-0{
            border-bottom-width: 0px;
            }

            .border-l-0{
            border-left-width: 0px;
            }

            .border-l-4{
            border-left-width: 4px;
            }

            .border-r{
            border-right-width: 1px;
            }

            .border-r-0{
            border-right-width: 0px;
            }

            .border-t{
            border-top-width: 1px;
            }

            .border-t-0{
            border-top-width: 0px;
            }

            .border-solid{
            border-style: solid;
            }

            .border-b5{
            --tw-border-opacity: 1;
            border-color: rgb(0 180 216 / var(--tw-border-opacity));
            }

            .border-b6{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            }

            .border-blue-400{
            --tw-border-opacity: 1;
            border-color: rgb(96 165 250 / var(--tw-border-opacity));
            }

            .border-gray-100{
            --tw-border-opacity: 1;
            border-color: rgb(243 244 246 / var(--tw-border-opacity));
            }

            .border-gray-200{
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity));
            }

            .border-gray-300{
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }

            .border-gray-400{
            --tw-border-opacity: 1;
            border-color: rgb(156 163 175 / var(--tw-border-opacity));
            }

            .border-gray-600{
            --tw-border-opacity: 1;
            border-color: rgb(75 85 99 / var(--tw-border-opacity));
            }

            .border-green-400{
            --tw-border-opacity: 1;
            border-color: rgb(74 222 128 / var(--tw-border-opacity));
            }

            .border-indigo-400{
            --tw-border-opacity: 1;
            border-color: rgb(129 140 248 / var(--tw-border-opacity));
            }

            .border-indigo-500{
            --tw-border-opacity: 1;
            border-color: rgb(99 102 241 / var(--tw-border-opacity));
            }

            .border-red-400{
            --tw-border-opacity: 1;
            border-color: rgb(248 113 113 / var(--tw-border-opacity));
            }

            .border-transparent{
            border-color: transparent;
            }

            .border-yellow-400{
            --tw-border-opacity: 1;
            border-color: rgb(250 204 21 / var(--tw-border-opacity));
            }

            .border-b-gray-300{
            --tw-border-opacity: 1;
            border-bottom-color: rgb(209 213 219 / var(--tw-border-opacity));
            }

            .border-l-b6{
            --tw-border-opacity: 1;
            border-left-color: rgb(0 150 199 / var(--tw-border-opacity));
            }

            .border-l-blue-500{
            --tw-border-opacity: 1;
            border-left-color: rgb(59 130 246 / var(--tw-border-opacity));
            }

            .border-l-green-500{
            --tw-border-opacity: 1;
            border-left-color: rgb(34 197 94 / var(--tw-border-opacity));
            }

            .border-l-red-500{
            --tw-border-opacity: 1;
            border-left-color: rgb(239 68 68 / var(--tw-border-opacity));
            }

            .border-r-gray-300{
            --tw-border-opacity: 1;
            border-right-color: rgb(209 213 219 / var(--tw-border-opacity));
            }

            .bg-b4{
            --tw-bg-opacity: 1;
            background-color: rgb(72 202 228 / var(--tw-bg-opacity));
            }

            .bg-b5{
            --tw-bg-opacity: 1;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity));
            }

            .bg-b6{
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            }

            .bg-b7{
            --tw-bg-opacity: 1;
            background-color: rgb(0 119 182 / var(--tw-bg-opacity));
            }

            .bg-black{
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity));
            }

            .bg-black\/75{
            background-color: rgb(0 0 0 / 0.75);
            }

            .bg-blue-50{
            --tw-bg-opacity: 1;
            background-color: rgb(239 246 255 / var(--tw-bg-opacity));
            }

            .bg-gray-100{
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }

            .bg-gray-200{
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity));
            }

            .bg-gray-400{
            --tw-bg-opacity: 1;
            background-color: rgb(156 163 175 / var(--tw-bg-opacity));
            }

            .bg-gray-50{
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }

            .bg-green-50{
            --tw-bg-opacity: 1;
            background-color: rgb(240 253 244 / var(--tw-bg-opacity));
            }

            .bg-green-500{
            --tw-bg-opacity: 1;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity));
            }

            .bg-indigo-50{
            --tw-bg-opacity: 1;
            background-color: rgb(238 242 255 / var(--tw-bg-opacity));
            }

            .bg-indigo-500{
            --tw-bg-opacity: 1;
            background-color: rgb(99 102 241 / var(--tw-bg-opacity));
            }

            .bg-orange-50{
            --tw-bg-opacity: 1;
            background-color: rgb(255 247 237 / var(--tw-bg-opacity));
            }

            .bg-purple-500{
            --tw-bg-opacity: 1;
            background-color: rgb(168 85 247 / var(--tw-bg-opacity));
            }

            .bg-red-50{
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity));
            }

            .bg-red-500{
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }

            .bg-transparent{
            background-color: transparent;
            }

            .bg-white{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }

            .bg-yellow-50{
            --tw-bg-opacity: 1;
            background-color: rgb(254 252 232 / var(--tw-bg-opacity));
            }

            .bg-yellow-500{
            --tw-bg-opacity: 1;
            background-color: rgb(234 179 8 / var(--tw-bg-opacity));
            }

            .bg-opacity-20{
            --tw-bg-opacity: 0.2;
            }

            .bg-opacity-70{
            --tw-bg-opacity: 0.7;
            }

            .fill-current{
            fill: currentColor;
            }

            .p-0{
            padding: 0px;
            }

            .p-1{
            padding: 0.25rem;
            }

            .p-1\.5{
            padding: 0.375rem;
            }

            .p-10{
            padding: 2.5rem;
            }

            .p-2{
            padding: 0.5rem;
            }

            .p-3{
            padding: 0.75rem;
            }

            .p-4{
            padding: 1rem;
            }

            .p-5{
            padding: 1.25rem;
            }

            .p-6{
            padding: 1.5rem;
            }

            .p-7{
            padding: 1.75rem;
            }

            .p-8{
            padding: 2rem;
            }

            .px-1{
            padding-left: 0.25rem;
            padding-right: 0.25rem;
            }

            .px-2{
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            }

            .px-2\.5{
            padding-left: 0.625rem;
            padding-right: 0.625rem;
            }

            .px-3{
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            }

            .px-4{
            padding-left: 1rem;
            padding-right: 1rem;
            }

            .px-5{
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            }

            .px-6{
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            }

            .py-1{
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            }

            .py-10{
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
            }

            .py-12{
            padding-top: 3rem;
            padding-bottom: 3rem;
            }

            .py-2{
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            }

            .py-3{
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            }

            .py-4{
            padding-top: 1rem;
            padding-bottom: 1rem;
            }

            .py-6{
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            }

            .pb-1{
            padding-bottom: 0.25rem;
            }

            .pb-3{
            padding-bottom: 0.75rem;
            }

            .pb-4{
            padding-bottom: 1rem;
            }

            .pb-6{
            padding-bottom: 1.5rem;
            }

            .pl-0{
            padding-left: 0px;
            }

            .pl-2{
            padding-left: 0.5rem;
            }

            .pl-3{
            padding-left: 0.75rem;
            }

            .pr-0{
            padding-right: 0px;
            }

            .pr-2{
            padding-right: 0.5rem;
            }

            .pr-3{
            padding-right: 0.75rem;
            }

            .pr-4{
            padding-right: 1rem;
            }

            .pr-6{
            padding-right: 1.5rem;
            }

            .pt-0{
            padding-top: 0px;
            }

            .pt-16{
            padding-top: 4rem;
            }

            .pt-2{
            padding-top: 0.5rem;
            }

            .pt-3{
            padding-top: 0.75rem;
            }

            .pt-4{
            padding-top: 1rem;
            }

            .pt-5{
            padding-top: 1.25rem;
            }

            .pt-6{
            padding-top: 1.5rem;
            }

            .pt-8{
            padding-top: 2rem;
            }

            .text-left{
            text-align: left;
            }

            .text-center{
            text-align: center;
            }

            .text-justify{
            text-align: justify;
            }

            .align-middle{
            vertical-align: middle;
            }

            .align-bottom{
            vertical-align: bottom;
            }

            .font-sans{
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }

            .text-2xl{
            font-size: 1.5rem;
            line-height: 2rem;
            }

            .text-3xl{
            font-size: 1.875rem;
            line-height: 2.25rem;
            }

            .text-4xl{
            font-size: 2.25rem;
            line-height: 2.5rem;
            }

            .text-base{
            font-size: 1rem;
            line-height: 1.5rem;
            }

            .text-lg{
            font-size: 1.125rem;
            line-height: 1.75rem;
            }

            .text-sm{
            font-size: 0.875rem;
            line-height: 1.25rem;
            }

            .text-xl{
            font-size: 1.25rem;
            line-height: 1.75rem;
            }

            .text-xs{
            font-size: 0.75rem;
            line-height: 1rem;
            }

            .text-xs0{
            font-size: 0.70rem;
            }

            .text-xs1{
            font-size: 0.60rem;
            }

            .text-xs2{
            font-size: 0.50rem;
            }

            .text-xs3{
            font-size: 0.40rem;
            }

            .font-bold{
            font-weight: 700;
            }

            .font-medium{
            font-weight: 500;
            }

            .font-normal{
            font-weight: 400;
            }

            .font-semibold{
            font-weight: 600;
            }

            .uppercase{
            text-transform: uppercase;
            }

            .italic{
            font-style: italic;
            }

            .leading-5{
            line-height: 1.25rem;
            }

            .leading-6{
            line-height: 1.5rem;
            }

            .leading-7{
            line-height: 1.75rem;
            }

            .leading-tight{
            line-height: 1.25;
            }

            .tracking-wide{
            letter-spacing: 0.025em;
            }

            .tracking-wider{
            letter-spacing: 0.05em;
            }

            .tracking-widest{
            letter-spacing: 0.1em;
            }

            .text-b5{
            --tw-text-opacity: 1;
            color: rgb(0 180 216 / var(--tw-text-opacity));
            }

            .text-b6{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .text-blc1{
            --tw-text-opacity: 1;
            color: rgb(48 48 48 / var(--tw-text-opacity));
            }

            .text-blue-400{
            --tw-text-opacity: 1;
            color: rgb(96 165 250 / var(--tw-text-opacity));
            }

            .text-blue-500{
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity));
            }

            .text-blue-700{
            --tw-text-opacity: 1;
            color: rgb(29 78 216 / var(--tw-text-opacity));
            }

            .text-blue-800{
            --tw-text-opacity: 1;
            color: rgb(30 64 175 / var(--tw-text-opacity));
            }

            .text-gray-200{
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity));
            }

            .text-gray-300{
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity));
            }

            .text-gray-400{
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity));
            }

            .text-gray-500{
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }

            .text-gray-600{
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
            }

            .text-gray-700{
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
            }

            .text-gray-800{
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
            }

            .text-gray-900{
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
            }

            .text-green-400{
            --tw-text-opacity: 1;
            color: rgb(74 222 128 / var(--tw-text-opacity));
            }

            .text-green-500{
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .text-green-600{
            --tw-text-opacity: 1;
            color: rgb(22 163 74 / var(--tw-text-opacity));
            }

            .text-green-700{
            --tw-text-opacity: 1;
            color: rgb(21 128 61 / var(--tw-text-opacity));
            }

            .text-green-800{
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity));
            }

            .text-indigo-500{
            --tw-text-opacity: 1;
            color: rgb(99 102 241 / var(--tw-text-opacity));
            }

            .text-indigo-600{
            --tw-text-opacity: 1;
            color: rgb(79 70 229 / var(--tw-text-opacity));
            }

            .text-indigo-700{
            --tw-text-opacity: 1;
            color: rgb(67 56 202 / var(--tw-text-opacity));
            }

            .text-orange-500{
            --tw-text-opacity: 1;
            color: rgb(249 115 22 / var(--tw-text-opacity));
            }

            .text-orange-700{
            --tw-text-opacity: 1;
            color: rgb(194 65 12 / var(--tw-text-opacity));
            }

            .text-orange-800{
            --tw-text-opacity: 1;
            color: rgb(154 52 18 / var(--tw-text-opacity));
            }

            .text-purple-500{
            --tw-text-opacity: 1;
            color: rgb(168 85 247 / var(--tw-text-opacity));
            }

            .text-red-400{
            --tw-text-opacity: 1;
            color: rgb(248 113 113 / var(--tw-text-opacity));
            }

            .text-red-500{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .text-red-600{
            --tw-text-opacity: 1;
            color: rgb(220 38 38 / var(--tw-text-opacity));
            }

            .text-red-700{
            --tw-text-opacity: 1;
            color: rgb(185 28 28 / var(--tw-text-opacity));
            }

            .text-red-800{
            --tw-text-opacity: 1;
            color: rgb(153 27 27 / var(--tw-text-opacity));
            }

            .text-white{
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .text-yellow-400{
            --tw-text-opacity: 1;
            color: rgb(250 204 21 / var(--tw-text-opacity));
            }

            .text-yellow-500{
            --tw-text-opacity: 1;
            color: rgb(234 179 8 / var(--tw-text-opacity));
            }

            .underline{
            text-decoration-line: underline;
            }

            .antialiased{
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            }

            .opacity-0{
            opacity: 0;
            }

            .opacity-100{
            opacity: 1;
            }

            .opacity-25{
            opacity: 0.25;
            }

            .opacity-50{
            opacity: 0.5;
            }

            .opacity-75{
            opacity: 0.75;
            }

            .shadow{
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .shadow-lg{
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .shadow-md{
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .shadow-sm{
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .shadow-xl{
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .ring-0{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }

            .ring-1{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }

            .ring-black{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity));
            }

            .ring-gray-300{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity));
            }

            .ring-indigo-500{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity));
            }

            .ring-red-500{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            }

            .ring-opacity-5{
            --tw-ring-opacity: 0.05;
            }

            .blur{
            --tw-blur: blur(8px);
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
            }

            .blur-sm{
            --tw-blur: blur(4px);
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
            }

            .filter{
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
            }

            .transition{
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
            }

            .transition-all{
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
            }

            .transition-colors{
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
            }

            .duration-150{
            transition-duration: 150ms;
            }

            .duration-300{
            transition-duration: 300ms;
            }

            .duration-500{
            transition-duration: 500ms;
            }

            .ease-in-out{
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .ease-out{
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }

            /* font-family: 'Bebas Neue', cursive;
            font-family: 'Fredoka', sans-serif;
            font-family: 'Fredoka One', cursive;
            font-family: 'Poppins', sans-serif;
            font-family: 'Tilt Neon', cursive;
            font-family: 'Varela Round', sans-serif; */

            * {
            font-family: 'Tilt Neon', sans-serif;
            scroll-behavior: smooth;
            font-weight: 400;
            letter-spacing: 0.05em;
            }

            *::-moz-selection{
            --tw-bg-opacity: 1;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            *::selection{
            --tw-bg-opacity: 1;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .input p{
            margin: 0px;
            width: 100%;
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .input p.sm\:max-w-sm,.input p.sm\:max-w-md,.input p.sm\:max-w-lg,.input p.sm\:max-w-xl,.input p.sm\:max-w-2xl,.input p.sm\:max-w-3xl,.input p.sm\:max-w-4xl,.input p.sm\:max-w-5xl,.input p.sm\:max-w-6xl,.input p.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .input p.sm\:max-w-sm > div,.input p.sm\:max-w-md > div,.input p.sm\:max-w-lg > div,.input p.sm\:max-w-xl > div,.input p.sm\:max-w-2xl > div,.input p.sm\:max-w-3xl > div,.input p.sm\:max-w-4xl > div,.input p.sm\:max-w-5xl > div,.input p.sm\:max-w-6xl > div,.input p.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            @media (max-width: 640px) {
            .input p.sm\:max-w-sm > div,.input p.sm\:max-w-md > div,.input p.sm\:max-w-lg > div,.input p.sm\:max-w-xl > div,.input p.sm\:max-w-2xl > div,.input p.sm\:max-w-3xl > div,.input p.sm\:max-w-4xl > div,.input p.sm\:max-w-5xl > div,.input p.sm\:max-w-6xl > div,.input p.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .input p {
            font-size: .70rem;
            }

            label, input, span, p {
            font-family: 'Tilt Neon', sans-serif !important;
            }

            input, select, textarea{
            font-size: 0.70rem !important;
            }

            .background-image {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            }

            .title {
            font-family: 'Kanit', sans-serif !important;
            }

            span{
            white-space: nowrap;
            font-size: 0.75rem;
            line-height: 1rem;
            }

            html, body {
            height: 100%;
            }

            #app {
            height: inherit;
            }

            #app > div {
            height: inherit;
            }

            .error-help-block{
            margin-top: 0.25rem;
            width: 100%;
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .error-help-block.sm\:max-w-sm,.error-help-block.sm\:max-w-md,.error-help-block.sm\:max-w-lg,.error-help-block.sm\:max-w-xl,.error-help-block.sm\:max-w-2xl,.error-help-block.sm\:max-w-3xl,.error-help-block.sm\:max-w-4xl,.error-help-block.sm\:max-w-5xl,.error-help-block.sm\:max-w-6xl,.error-help-block.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .error-help-block.sm\:max-w-sm > div,.error-help-block.sm\:max-w-md > div,.error-help-block.sm\:max-w-lg > div,.error-help-block.sm\:max-w-xl > div,.error-help-block.sm\:max-w-2xl > div,.error-help-block.sm\:max-w-3xl > div,.error-help-block.sm\:max-w-4xl > div,.error-help-block.sm\:max-w-5xl > div,.error-help-block.sm\:max-w-6xl > div,.error-help-block.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            @media (max-width: 640px) {
            .error-help-block.sm\:max-w-sm > div,.error-help-block.sm\:max-w-md > div,.error-help-block.sm\:max-w-lg > div,.error-help-block.sm\:max-w-xl > div,.error-help-block.sm\:max-w-2xl > div,.error-help-block.sm\:max-w-3xl > div,.error-help-block.sm\:max-w-4xl > div,.error-help-block.sm\:max-w-5xl > div,.error-help-block.sm\:max-w-6xl > div,.error-help-block.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .error-help-block{
            font-size: .70rem;
            }

            .iti-mobile .intl-tel-input .country-list {
            max-height: 100% !important;
            width: 100% !important;
            }

            .intl-tel-input {
            width: 100% !important;
            border-radius: 0.375rem !important;
            }

            .intl-tel-input .selected-flag .iti-flag {
            position: relative !important;
            top: 0 !important;
            bottom: 0 !important;
            margin: 0 !important;
            }

            .intl-tel-input .flag-container {
            position: absolute !important;
            top: 0 !important;
            bottom: 0 !important;
            right: 0 !important;
            padding: 0 !important;
            width: 100% !important;
            border-radius: 0.375rem !important;
            }

            .intl-tel-input .selected-flag .iti-arrow {
            position: relative !important;
            top: 0 !important;
            margin-top: 0 !important;
            right: 0 !important;
            width: 0 !important;
            height: 0 !important;
            border-radius: 50px !important;
            border-left: 5px solid transparent !important;
            border-right: 5px solid transparent !important;
            border-top: 5px solid #555 !important;
            }

            .intl-tel-input .country-list {
            position: absolute !important;
            z-index: 2 !important;
            list-style: none !important;
            list-style-position: initial !important;
            list-style-image: initial !important;
            list-style-type: none !important;
            text-align: left !important;
            padding: 0 !important;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2) !important;
            background-color: white !important;
            border: 1px solid #CCC !important;
            white-space: nowrap !important;
            max-height: 200px !important;
            overflow-y: scroll !important;
            width: 100% !important;
            margin-top: 0.25rem !important;
            margin-left: 0px !important;
            border-radius: 0.375rem !important;
            }

            .intl-tel-input.allow-dropdown input, .intl-tel-input.allow-dropdown input[type=text], .intl-tel-input.allow-dropdown input[type=tel], .intl-tel-input.separate-dial-code input, .intl-tel-input.separate-dial-code input[type=text], .intl-tel-input.separate-dial-code input[type=tel] {
            padding-right: 0.75rem !important;
            padding-left: 4.45rem !important;
            margin-left: 0 !important;
            }

            .intl-tel-input.allow-dropdown .selected-flag, .intl-tel-input.separate-dial-code .selected-flag {
            width: 60px !important;
            }

            .intl-tel-input .selected-flag {
            z-index: 1 !important;
            position: relative !important;
            width: 36px !important;
            height: 100% !important;
            padding: 8px !important;
            display: flex !important;
            gap: 7px !important;
            justify-content: center !important;
            align-items: center !important;
            border-top-left-radius: 0.375rem !important;
            border-bottom-left-radius: 0.375rem !important;
            border-right-width: 1px !important;
            --tw-border-opacity: 1 !important;
            border-right-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            }

            .iti-mobile .intl-tel-input.iti-container {
            top: 55px !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            position: fixed !important;
            margin: 5% !important;
            width: 90% !important;
            }

            .intl-tel-input .country-list .country {
            display: flex !important;
            height: 2.5rem !important;
            align-items: center !important;
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            /*the container must be positioned relative:*/

            .custom-select {
            position: relative;
            font-family: Arial;
            }

            .custom-select select {
            display: none;
            /*hide original SELECT element:*/
            }

            .select-selected {
            background-color: DodgerBlue;
            }

            /*style the arrow inside the select element:*/

            .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
            }

            /*point the arrow upwards when the select box is open (active):*/

            .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
            }

            /*style the items (options), including the selected item:*/

            .select-items div,.select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            -webkit-user-select: none;
                -moz-user-select: none;
                    user-select: none;
            }

            /*style items (options):*/

            .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
            }

            /*hide the items when the select box is closed:*/

            .select-hide {
            display: none;
            }

            .select-items div:hover, .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
            }

            .modal{
            margin: 0px !important;
            display: flex !important;
            height: 100% !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            background-color: transparent !important;
            padding: 0px !important;
            }

            .input .modal{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .modal.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.modal.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .modal{
                height: -moz-fit-content !important;
                height: fit-content !important;
            }
            }

            @media (min-width: 768px){
            .modal{
                margin: 1.25rem !important;
            }
            }

            .sticky-nav{
            position: fixed;
            top: 0px;
            z-index: 20;
            border-bottom-width: 1px;
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.sticky-nav.rounded-lg div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative.sticky-nav.rounded-lg div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.sticky-nav.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative.sticky-nav.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative.sticky-nav.rounded-lg div:nth-child(2){
                gap: 0.5rem;
            }
            }

            .p-4.pointer-events-auto.border-l-4.sticky-nav div {
            align-items: center;
            }

            .p-4.pointer-events-auto.border-l-4.sticky-nav{
            border-radius: 0.375rem;
            }

            .p-4.pointer-events-auto.border-l-4.sticky-nav svg:nth-child(1){
            height: 2rem;
            width: 2rem;
            }

            .modal .absolute.sticky-nav.right-0.pt-3.pr-3{
            z-index: 10;
            display: none;
            padding-top: 1.25rem;
            padding-right: 1.25rem;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            line-height: 1rem;
            text-transform: uppercase;
            }

            .input .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px;
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            @media (min-width: 640px){
            .modal .absolute.sticky-nav.right-0.pt-3.pr-3{
                display: flex;
            }
            }

            .modal .absolute.sticky-nav.right-0.pt-3.pr-3 svg{
            height: 1rem;
            width: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .blue-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .red-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .green-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .orange-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(249 115 22 / var(--tw-text-opacity));
            }

            @media (max-width: 640px) {
            .sticky-nav.inset-0.z-40.overflow-y-auto.p-4 {
                padding: 0;
                background-color: white;
                display: block;
            }
            }

            .sticky-navback{
            position: sticky;
            top: 0px;
            z-index: 20;
            border-bottom-width: 1px;
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.sticky-navback.rounded-lg div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative.sticky-navback.rounded-lg div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.sticky-navback.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative.sticky-navback.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative.sticky-navback.rounded-lg div:nth-child(2){
                gap: 0.5rem;
            }
            }

            .p-4.pointer-events-auto.border-l-4.sticky-navback div {
            align-items: center;
            }

            .p-4.pointer-events-auto.border-l-4.sticky-navback{
            border-radius: 0.375rem;
            }

            .p-4.pointer-events-auto.border-l-4.sticky-navback svg:nth-child(1){
            height: 2rem;
            width: 2rem;
            }

            .modal .absolute.sticky-navback.right-0.pt-3.pr-3{
            z-index: 10;
            display: none;
            padding-top: 1.25rem;
            padding-right: 1.25rem;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            line-height: 1rem;
            text-transform: uppercase;
            }

            .input .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px;
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            @media (min-width: 640px){
            .modal .absolute.sticky-navback.right-0.pt-3.pr-3{
                display: flex;
            }
            }

            .modal .absolute.sticky-navback.right-0.pt-3.pr-3 svg{
            height: 1rem;
            width: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .blue-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .red-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .green-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .orange-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(249 115 22 / var(--tw-text-opacity));
            }

            .leftlabel input {
            padding-left: 70px;
            }

            .leftlabel select {
            padding-left: 60px;
            }

            .input-cntnr {
            margin-bottom: 30px !important;
            }

            .message{
            width: 100%;
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .message.sm\:max-w-sm,.message.sm\:max-w-md,.message.sm\:max-w-lg,.message.sm\:max-w-xl,.message.sm\:max-w-2xl,.message.sm\:max-w-3xl,.message.sm\:max-w-4xl,.message.sm\:max-w-5xl,.message.sm\:max-w-6xl,.message.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .message.sm\:max-w-sm > div,.message.sm\:max-w-md > div,.message.sm\:max-w-lg > div,.message.sm\:max-w-xl > div,.message.sm\:max-w-2xl > div,.message.sm\:max-w-3xl > div,.message.sm\:max-w-4xl > div,.message.sm\:max-w-5xl > div,.message.sm\:max-w-6xl > div,.message.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            @media (max-width: 640px) {
            .message.sm\:max-w-sm > div,.message.sm\:max-w-md > div,.message.sm\:max-w-lg > div,.message.sm\:max-w-xl > div,.message.sm\:max-w-2xl > div,.message.sm\:max-w-3xl > div,.message.sm\:max-w-4xl > div,.message.sm\:max-w-5xl > div,.message.sm\:max-w-6xl > div,.message.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .message {
            font-size: .70rem;
            line-height: 1.25rem;
            }

            .sch-logo .filepond--list {
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            cursor: pointer;
            }

            .sch-logo .filepond--item {
            margin: 4% !important;
            height: 92% !important;
            }

            .sch-logo .filepond--root .filepond--list-scroller {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            height: 100% !important;
            width: 100% !important;
            transform: translate3d(0px, 0px, 0px) !important;
            }

            .sch-logo-bg {
            background-size: 0% !important;
            background-position: center !important;
            }

            .sch-logo .filepond--hopper {
            height: 278px !important;
            width: 278px !important;
            background-image: inherit;
            background-repeat: no-repeat;
            background-size: 0%;
            background-position: center;
            }

            .sch-logo {
            background-image: inherit;
            background-repeat: no-repeat;
            background-size: 0%;
            background-position: center;
            }

            .sch-logo .block {
            background-image: inherit;
            background-repeat: no-repeat;
            background-size: 0%;
            background-position: center;
            }

            .sch-logo .filepond--drop-label{
            display: flex;
            cursor: pointer;
            align-items: flex-end;
            justify-content: center;
            border-radius: 0.5rem;
            padding: 0px;
            }

            .input .sch-logo .filepond--drop-label{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2){
                gap: 0.5rem;
            }
            }

            .sch-logo .filepond--drop-label.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.sch-logo .filepond--drop-label.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.sch-logo .filepond--drop-label.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .sch-logo .filepond--drop-label {
            background-image: inherit;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-color: #0096C7;
            width: 92%;
            height: 92%;
            margin: 4%;
            }

            .sch-logo .filepond--drop-label label{
            width: 100% !important;
            border-bottom-right-radius: 0.25rem !important;
            border-bottom-left-radius: 0.25rem !important;
            padding: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .sch-logo .filepond--drop-label label.sm\:max-w-sm,.sch-logo .filepond--drop-label label.sm\:max-w-md,.sch-logo .filepond--drop-label label.sm\:max-w-lg,.sch-logo .filepond--drop-label label.sm\:max-w-xl,.sch-logo .filepond--drop-label label.sm\:max-w-2xl,.sch-logo .filepond--drop-label label.sm\:max-w-3xl,.sch-logo .filepond--drop-label label.sm\:max-w-4xl,.sch-logo .filepond--drop-label label.sm\:max-w-5xl,.sch-logo .filepond--drop-label label.sm\:max-w-6xl,.sch-logo .filepond--drop-label label.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .sch-logo .filepond--drop-label label.sm\:max-w-sm > div,.sch-logo .filepond--drop-label label.sm\:max-w-md > div,.sch-logo .filepond--drop-label label.sm\:max-w-lg > div,.sch-logo .filepond--drop-label label.sm\:max-w-xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-2xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-3xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-4xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-5xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-6xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .flex.items-end.sm\:items-center.justify-center.min-h-full.sch-logo .filepond--drop-label label.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .sch-logo .filepond--drop-label label.pointer-events-auto.border-l-4.shadow-md div {
            align-items: center !important;
            }

            .sch-logo .filepond--drop-label label.pointer-events-auto.border-l-4.shadow-md{
            border-radius: 0.375rem;
            }

            .sch-logo .filepond--drop-label label.pointer-events-auto.border-l-4.shadow-md svg:nth-child(1){
            height: 2rem;
            width: 2rem;
            }

            @media (max-width: 640px) {
            .fixed.inset-0.z-40.overflow-y-auto.sch-logo .filepond--drop-label label {
                padding: 0 !important;
                background-color: white !important;
                display: block !important;
            }

            .sch-logo .filepond--drop-label label.sm\:max-w-sm > div,.sch-logo .filepond--drop-label label.sm\:max-w-md > div,.sch-logo .filepond--drop-label label.sm\:max-w-lg > div,.sch-logo .filepond--drop-label label.sm\:max-w-xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-2xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-3xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-4xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-5xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-6xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .sch-logo .filepond--drop-label label {
            background-color: rgba(0, 0, 0, 0.5);
            }

            .import .filepond--hopper, .sch-logo .filepond--hopper{
            border-radius: 0.375rem !important;
            outline-style: dashed !important;
            outline-width: 1px !important;
            outline-offset: 2px !important;
            outline-color: #d1d5db !important;
            }

            .import .filepond--panel-root, .sch-logo .filepond--panel-root{
            border-style: none !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .import .filepond--drop-label{
            display: flex;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            }

            .input .import .filepond--drop-label{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.bg-white.import .filepond--drop-label div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative.bg-white.import .filepond--drop-label div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.bg-white.import .filepond--drop-label div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative.bg-white.import .filepond--drop-label div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative.bg-white.import .filepond--drop-label div:nth-child(2){
                gap: 0.5rem;
            }
            }

            .import .filepond--drop-label.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.import .filepond--drop-label.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .import label, .sch-logo label{
            cursor: pointer !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            }

            .import a, .sch-logo a{
            display: none;
            }

            button.filepond--file-action-button.filepond--action-remove-item {
            cursor: pointer;
            }

            .input .block {
            display: flex;
            flex-direction: column;
            width: 100%;
            }

            .input .flex{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            input, select{
            border-radius: 0.375rem !important;
            border-width: 1px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            }

            .blue-inpt input:focus, .blue-inpt select:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .red-inpt input:focus, .red-inpt select:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .green-inpt input:focus, .green-inpt select:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .orange-inpt input:focus, .orange-inpt select:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .blue-btn, .blue-btn-i button{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            }

            .blue-btn:focus, .blue-btn-i button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn:hover, .blue-btn-i button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn, .green-btn-i button{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            }

            .green-btn:focus, .green-btn-i button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn:hover, .green-btn-i button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn, .red-btn-i button{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            }

            .red-btn:focus, .red-btn-i button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn:hover, .red-btn-i button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn, .orange-btn-i button{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            }

            .orange-btn:focus, .orange-btn-i button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn:hover, .orange-btn-i button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .squared-btn{
            border-radius: 0.375rem;
            padding: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mobtable .flex-row.sm\:justify-end.mb-3.squared-btn.sm\:px-0.-mr-2.sm\:-mr-3 {
            padding-left: 0;
            padding-right: 0;
            }

            .squared-btn-i button{
            border-radius: 0.375rem;
            border-width: 2px;
            padding: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mobtable .flex-row.sm\:justify-end.mb-3.squared-btn-i button.sm\:px-0.-mr-2.sm\:-mr-3 {
            padding-left: 0;
            padding-right: 0;
            }

            .rounded-btn{
            border-radius: 9999px;
            padding: 0.75rem;
            padding-left: 3.5rem;
            padding-right: 3.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .rounded-btn-i button{
            border-radius: 9999px;
            border-width: 2px;
            padding: 0.75rem;
            padding-left: 3.5rem;
            padding-right: 3.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .squared-btn-i button span, .rounded-btn-i button span{
            font-size: 0.70rem;
            font-weight: 300;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .blue-btn-i svg{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            @media (min-width: 640px){
            .blue-btn-i button:hover svg{
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .blue-btn-i button:hover span{
                --tw-text-opacity: 1;
                color: rgb(0 150 199 / var(--tw-text-opacity));
            }
            }

            .green-btn-i svg{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            @media (min-width: 640px){
            .green-btn-i button:hover svg{
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .green-btn-i button:hover span{
                --tw-text-opacity: 1;
                color: rgb(34 197 94 / var(--tw-text-opacity));
            }
            }

            .red-btn-i svg{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            @media (min-width: 640px){
            .red-btn-i button:hover svg{
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .red-btn-i button:hover span{
                --tw-text-opacity: 1;
                color: rgb(239 68 68 / var(--tw-text-opacity));
            }
            }

            .orange-btn-i svg{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            @media (min-width: 640px){
            .orange-btn-i button:hover svg{
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            .orange-btn-i button:hover span{
                --tw-text-opacity: 1;
                color: rgb(249 115 22 / var(--tw-text-opacity));
            }
            }

            .close-btn, .menu-close-btn{
            position: absolute;
            z-index: 10;
            height: 1.25rem;
            width: 1.25rem;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            padding: 0.75rem;
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .flex.items-end.sm\:items-center.close-btn.min-h-full.p-4.text-center.sm\:p-0,.flex.items-end.sm\:items-center .menu-close-btn.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .modal .close-btn.top-0.right-0.pt-3.pr-3,.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3{
            z-index: 10;
            display: none;
            padding-top: 1.25rem;
            padding-right: 1.25rem;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            line-height: 1rem;
            text-transform: uppercase;
            }

            .input .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button,.input .mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0,.flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1),.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1):hover,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1):focus,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2),.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px;
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2):hover,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2):focus,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            @media (min-width: 640px){
            .modal .close-btn.top-0.right-0.pt-3.pr-3,.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3{
                display: flex;
            }
            }

            .modal .close-btn.top-0.right-0.pt-3.pr-3 svg,.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 svg{
            height: 1rem;
            width: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .blue-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button,.blue-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:focus,.blue-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover,.blue-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover svg,.blue-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .red-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button,.red-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:focus,.red-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover,.red-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover svg,.red-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .green-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button,.green-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:focus,.green-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover,.green-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover svg,.green-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .orange-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button,.orange-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:focus,.orange-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover,.orange-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover svg,.orange-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(249 115 22 / var(--tw-text-opacity));
            }

            .close-btn{
            display: none !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button{
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            line-height: 1rem;
            text-transform: uppercase;
            }

            .input .mt-5.sm\:mt-4.close-btn-show button{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-sm,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-md,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-lg,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-2xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-3xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-4xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-5xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-6xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-md > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.close-btn-show button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.close-btn-show button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-md > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(1){
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(1):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(1):focus{
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(2){
            margin-top: 0px;
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(2):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(2):focus{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            @media (min-width: 640px){
            .close-btn-show{
                display: flex !important;
            }
            }

            .check input{
            --tw-text-opacity: 1;
            color: rgb(0 180 216 / var(--tw-text-opacity));
            }

            .check label, .check input{
            cursor: pointer;
            }

            .no-scroll::-webkit-scrollbar {
            display: none;
            }

            .tab::-webkit-scrollbar {
            display: none;
            }

            .title-btn::-webkit-scrollbar {
            display: none;
            }

            .open {
            transform: scale(100%);
            }

            .open-sb{
            display: flex !important;
            }

            .input .open-sb{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .open-sb.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .close-sb{
            display: flex !important;
            }

            .input .close-sb{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .close-sb.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .sidebar{
            width: 100%;
            transition-duration: 500ms;
            }

            .sidebar.sm\:max-w-sm,.sidebar.sm\:max-w-md,.sidebar.sm\:max-w-lg,.sidebar.sm\:max-w-xl,.sidebar.sm\:max-w-2xl,.sidebar.sm\:max-w-3xl,.sidebar.sm\:max-w-4xl,.sidebar.sm\:max-w-5xl,.sidebar.sm\:max-w-6xl,.sidebar.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .sidebar.sm\:max-w-sm > div,.sidebar.sm\:max-w-md > div,.sidebar.sm\:max-w-lg > div,.sidebar.sm\:max-w-xl > div,.sidebar.sm\:max-w-2xl > div,.sidebar.sm\:max-w-3xl > div,.sidebar.sm\:max-w-4xl > div,.sidebar.sm\:max-w-5xl > div,.sidebar.sm\:max-w-6xl > div,.sidebar.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            @media (max-width: 640px) {
            .sidebar.sm\:max-w-sm > div,.sidebar.sm\:max-w-md > div,.sidebar.sm\:max-w-lg > div,.sidebar.sm\:max-w-xl > div,.sidebar.sm\:max-w-2xl > div,.sidebar.sm\:max-w-3xl > div,.sidebar.sm\:max-w-4xl > div,.sidebar.sm\:max-w-5xl > div,.sidebar.sm\:max-w-6xl > div,.sidebar.sm\:max-w-7xl > div {
                display: block;
            }
            }

            @media (min-width: 640px){
            .sidebar{
                width: 18rem;
            }
            }

            .sideclose {
            width: 3.53rem;
            }

            .sideclose .tab{
            padding-right: 0px;
            }

            .sideclose .tabname p{
            opacity: 0;
            transition-property: all;
            transition-duration: 300ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .sideclose .prof{
            flex-direction: column;
            flex-wrap: wrap;
            opacity: 0;
            }

            .sideopen .prof{
            transition-duration: 1000ms;
            }

            .menuclose {
            transform: translate(0);
            width: 100%;
            border-radius: 0;
            }

            .side-icon {
            text-shadow: -1px 0 #48CAE4, 0 1px #48CAE4, 1px 0 #48CAE4, 0 -1px #48CAE4;
            }

            .sub-sched:hover .side-icon {
            text-shadow: -1px 0 #CAF0F8, 0 1px #CAF0F8, 1px 0 #CAF0F8, 0 -1px #CAF0F8;
            }

            .schedopen{
            height: 12rem;
            --tw-bg-opacity: 1;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity));
            }

            .schedopen p, .schedopen span i{
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .schedopen .sched-drop{
            --tw-rotate: -0deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }

            .relative.schedopen .sched-drop.rounded-lg div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative.schedopen .sched-drop.rounded-lg div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.schedopen .sched-drop.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative.schedopen .sched-drop.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative.schedopen .sched-drop.rounded-lg div:nth-child(2){
                gap: 0.5rem;
            }
            }

            .schedopen .sched-drop i{
            opacity: 1;
            }

            .linked .tablink{
            --tw-bg-opacity: 1;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .sched-link .tab{
            --tw-bg-opacity: 1;
            background-color: rgb(202 240 248 / var(--tw-bg-opacity));
            }

            .sched-link p, .sched-link span i{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .sched-link .side-icon {
            text-shadow: -1px 0 #CAF0F8, 0 1px #CAF0F8, 1px 0 #CAF0F8, 0 -1px #CAF0F8;
            }

            option{
            font-size: 0.75rem;
            line-height: 1rem;
            }

            .animate-spin{
            height: 0.75rem;
            width: 0.75rem;
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            transition-duration: 75ms;
            }

            input:-webkit-autofill,
            input:-webkit-autofill:hover, 
            input:-webkit-autofill:focus,
            textarea:-webkit-autofill,
            textarea:-webkit-autofill:hover,
            textarea:-webkit-autofill:focus,
            select:-webkit-autofill,
            select:-webkit-autofill:hover,
            select:-webkit-autofill:focus {
            font-family: 'Tilt Neon', sans-serif !important;
            background-color: white;
            -webkit-transition: background 9999s ease-in-out 0s;
            transition: background 9999s ease-in-out 0s;
            }

            *::-webkit-scrollbar{
            height: 0.5rem;
            width: 0.5rem;
            -webkit-transition-property: all;
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            *::-webkit-scrollbar-track{
            border-radius: 0.375rem;
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            -webkit-transition-property: all;
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2){
                gap: 0.5rem;
            }
            }

            *::-webkit-scrollbar-thumb{
            border-radius: 9999px;
            border-width: 2px;
            border-style: solid;
            --tw-border-opacity: 1;
            border-color: rgb(255 255 255 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(156 163 175 / var(--tw-bg-opacity));
            -webkit-transition-property: all;
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            *::-webkit-scrollbar-thumb:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(107 114 128 / var(--tw-bg-opacity));
            }

            ::-webkit-file-upload-button{
            display: none;
            }

            .file-h div{
            height: 100%;
            }

            .file-h label.block{
            height: 100%;
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

            .w-full.sm\:max-w-sm, 
            .w-full.sm\:max-w-md, 
            .w-full.sm\:max-w-lg, 
            .w-full.sm\:max-w-xl,
            .w-full.sm\:max-w-2xl,
            .w-full.sm\:max-w-3xl,
            .w-full.sm\:max-w-4xl,
            .w-full.sm\:max-w-5xl,
            .w-full.sm\:max-w-6xl,
            .w-full.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .w-full.sm\:max-w-sm > div, 
            .w-full.sm\:max-w-md > div, 
            .w-full.sm\:max-w-lg > div, 
            .w-full.sm\:max-w-xl > div,
            .w-full.sm\:max-w-2xl > div,
            .w-full.sm\:max-w-3xl > div,
            .w-full.sm\:max-w-4xl > div,
            .w-full.sm\:max-w-5xl > div,
            .w-full.sm\:max-w-6xl > div,
            .w-full.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.sm\:flex button{
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            line-height: 1rem;
            text-transform: uppercase;
            }

            .input .mt-5.sm\:mt-4.sm\:flex button{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-sm,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-md,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-lg,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-2xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-3xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-4xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-5xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-6xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-md > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.sm\:flex button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.sm\:flex button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-md > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(1){
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(1):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(1):focus{
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(2){
            margin-top: 0px;
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(2):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(2):focus{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            #headlessui-portal-root h3{
            border-left-width: 4px;
            --tw-border-opacity: 1;
            border-left-color: rgb(239 68 68 / var(--tw-border-opacity));
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .p-4.pointer-events-auto#headlessui-portal-root h3.shadow-md div {
            align-items: center;
            }

            .p-4.pointer-events-auto#headlessui-portal-root h3.shadow-md{
            border-radius: 0.375rem;
            }

            .p-4.pointer-events-auto#headlessui-portal-root h3.shadow-md svg:nth-child(1){
            height: 2rem;
            width: 2rem;
            }

            .relative.bg-white.rounded-lg div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative.bg-white.rounded-lg div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.bg-white.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative.bg-white.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative.bg-white.rounded-lg div:nth-child(2){
                gap: 0.5rem;
            }
            }

            .flex.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .p-4.pointer-events-auto.border-l-4.shadow-md div {
            align-items: center;
            }

            .p-4.pointer-events-auto.border-l-4.shadow-md{
            border-radius: 0.375rem;
            }

            .p-4.pointer-events-auto.border-l-4.shadow-md svg:nth-child(1){
            height: 2rem;
            width: 2rem;
            }

            .drop-down {
            position: relative;
            outline: none;
            }

            select {
            -moz-appearance: none;
                appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
            }

            .drop-down .optn{
            position: absolute;
            top: 2.75rem;
            right: 0px;
            z-index: 10;
            max-height: 10rem;
            width: 100%;
            list-style-type: none;
            overflow: auto;
            border-radius: 0.375rem;
            border-width: 1px;
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            font-size: 0.70rem;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .drop-down .optn.sm\:max-w-sm,.drop-down .optn.sm\:max-w-md,.drop-down .optn.sm\:max-w-lg,.drop-down .optn.sm\:max-w-xl,.drop-down .optn.sm\:max-w-2xl,.drop-down .optn.sm\:max-w-3xl,.drop-down .optn.sm\:max-w-4xl,.drop-down .optn.sm\:max-w-5xl,.drop-down .optn.sm\:max-w-6xl,.drop-down .optn.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .drop-down .optn.sm\:max-w-sm > div,.drop-down .optn.sm\:max-w-md > div,.drop-down .optn.sm\:max-w-lg > div,.drop-down .optn.sm\:max-w-xl > div,.drop-down .optn.sm\:max-w-2xl > div,.drop-down .optn.sm\:max-w-3xl > div,.drop-down .optn.sm\:max-w-4xl > div,.drop-down .optn.sm\:max-w-5xl > div,.drop-down .optn.sm\:max-w-6xl > div,.drop-down .optn.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .relative.drop-down .optn.rounded-lg div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative.drop-down .optn.rounded-lg div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.drop-down .optn.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative.drop-down .optn.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative.drop-down .optn.rounded-lg div:nth-child(2){
                gap: 0.5rem;
            }
            }

            .p-4.pointer-events-auto.border-l-4.drop-down .optn div {
            align-items: center;
            }

            .p-4.pointer-events-auto.border-l-4.drop-down .optn{
            border-radius: 0.375rem;
            }

            .p-4.pointer-events-auto.border-l-4.drop-down .optn svg:nth-child(1){
            height: 2rem;
            width: 2rem;
            }

            .modal .drop-down .optn.top-0.right-0.pt-3.pr-3{
            z-index: 10;
            display: none;
            padding-top: 1.25rem;
            padding-right: 1.25rem;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            line-height: 1rem;
            text-transform: uppercase;
            }

            .input .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px;
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            @media (min-width: 640px){
            .modal .drop-down .optn.top-0.right-0.pt-3.pr-3{
                display: flex;
            }
            }

            .modal .absolute.top-0.drop-down .optn.pt-3.pr-3{
            z-index: 10;
            display: none;
            padding-top: 1.25rem;
            padding-right: 1.25rem;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            line-height: 1rem;
            text-transform: uppercase;
            }

            .input .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px;
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            @media (min-width: 640px){
            .modal .absolute.top-0.drop-down .optn.pt-3.pr-3{
                display: flex;
            }
            }

            .modal .drop-down .optn.top-0.right-0.pt-3.pr-3 svg{
            height: 1rem;
            width: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .modal .absolute.top-0.drop-down .optn.pt-3.pr-3 svg{
            height: 1rem;
            width: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .blue-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .blue-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .red-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .red-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .green-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .green-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .orange-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(249 115 22 / var(--tw-text-opacity));
            }

            .orange-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(249 115 22 / var(--tw-text-opacity));
            }

            @media (max-width: 640px) {
            .drop-down .optn.sm\:max-w-sm > div,.drop-down .optn.sm\:max-w-md > div,.drop-down .optn.sm\:max-w-lg > div,.drop-down .optn.sm\:max-w-xl > div,.drop-down .optn.sm\:max-w-2xl > div,.drop-down .optn.sm\:max-w-3xl > div,.drop-down .optn.sm\:max-w-4xl > div,.drop-down .optn.sm\:max-w-5xl > div,.drop-down .optn.sm\:max-w-6xl > div,.drop-down .optn.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .drop-down li{
            display: flex;
            height: 2.5rem;
            cursor: pointer;
            align-items: center;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            --tw-text-opacity: 1;
            color: rgb(48 48 48 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .input .drop-down li{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .drop-down li.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .drop-down li:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity));
            }

            /* .drop-down li:nth-child(1) {
                @apply hidden bg-gray-200;
            } */

            .open-close{
            display: none !important;
            }

            /* #headlessui-portal-root .fixed div:nth-child(1) {
                @apply items-center;
            } */

            .blue-chck [type='radio']:checked{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .red-chck [type='radio']:checked{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .green-chck [type='radio']:checked{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .orange-chck [type='radio']:checked{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            .choices .choices__list--dropdown .choices__item--selectable.is-highlighted{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            }

            .is-flipped .choices__list--dropdown, .is-flipped .choices__list[aria-expanded] {
            margin-bottom: 0.25rem !important;
            border-radius: 0.375rem !important;
            }

            .choices .choices__list--dropdown .choices__item--selectable {
            font-size: .70rem !important;
            }

            .choices.is-focused .choices__inner:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .choices .choices__inner{
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            background-size: 1rem 1rem !important;
            display: flex !important;
            align-items: center !important;
            cursor: pointer !important;
            }

            .choices[data-type*=select-multiple] .choices__inner {
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
            border-radius: 0.375rem !important;
            }

            .choices__input{
            display: flex !important;
            align-items: center !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            opacity: 1 !important;
            }

            .input .choices__input{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .choices__input.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .choices .choices__list--multiple .choices__item{
            display: flex !important;
            width: -moz-fit-content !important;
            width: fit-content !important;
            cursor: pointer !important;
            align-items: center !important;
            gap: 0.25rem !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1) !important;
            }

            .input .choices .choices__list--multiple .choices__item{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .choices .choices__list--multiple .choices__item.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .choices .choices__list--multiple .choices__item:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2){
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            }

            .input .relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2){
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2){
                gap: 0.5rem;
            }
            }

            .choices[data-type*=select-multiple] .choices__button{
            height: 1.25rem !important;
            width: 1.25rem !important;
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.5rem !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1) !important;
            }

            .choices .choices__list--multiple{
            display: flex !important;
            gap: 0.25rem !important;
            }

            .input .choices .choices__list--multiple{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .choices .choices__list--multiple.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .choices__list--dropdown .choices__item, .choices__list[aria-expanded] .choices__item{
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            }

            td{
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            }

            .mobtable tr {
            display: revert;
            }

            .mobtable table {
            display: revert;
            }

            .mobtable th{
            display: none;
            padding-top: 1rem;
            padding-bottom: 1rem;
            }

            @media (min-width: 640px){
            .mobtable th{
                display: table-cell;
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
            }
            }

            .mobtable tbody{
            width: 100%;
            }

            .mobtable tbody.sm\:max-w-sm,.mobtable tbody.sm\:max-w-md,.mobtable tbody.sm\:max-w-lg,.mobtable tbody.sm\:max-w-xl,.mobtable tbody.sm\:max-w-2xl,.mobtable tbody.sm\:max-w-3xl,.mobtable tbody.sm\:max-w-4xl,.mobtable tbody.sm\:max-w-5xl,.mobtable tbody.sm\:max-w-6xl,.mobtable tbody.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mobtable tbody.sm\:max-w-sm > div,.mobtable tbody.sm\:max-w-md > div,.mobtable tbody.sm\:max-w-lg > div,.mobtable tbody.sm\:max-w-xl > div,.mobtable tbody.sm\:max-w-2xl > div,.mobtable tbody.sm\:max-w-3xl > div,.mobtable tbody.sm\:max-w-4xl > div,.mobtable tbody.sm\:max-w-5xl > div,.mobtable tbody.sm\:max-w-6xl > div,.mobtable tbody.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            @media (max-width: 640px) {
            .mobtable tbody.sm\:max-w-sm > div,.mobtable tbody.sm\:max-w-md > div,.mobtable tbody.sm\:max-w-lg > div,.mobtable tbody.sm\:max-w-xl > div,.mobtable tbody.sm\:max-w-2xl > div,.mobtable tbody.sm\:max-w-3xl > div,.mobtable tbody.sm\:max-w-4xl > div,.mobtable tbody.sm\:max-w-5xl > div,.mobtable tbody.sm\:max-w-6xl > div,.mobtable tbody.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mobtable td .td{
            display: flex;
            align-items: center;
            justify-content: space-between;
            }

            .input .mobtable td .td{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mobtable td .td.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (min-width: 640px){
            .mobtable td .td{
                display: table-cell;
            }
            }

            .mobtable .flex-row.sm\:justify-end.mb-3.px-4.sm\:px-0.-mr-2.sm\:-mr-3 {
            padding-left: 0 !important;
            padding-right: 0 !important;
            }

            .mobtable .shadow.relative.sm\:rounded-md.sm\:overflow-hidden {
            border-radius: 0.375rem;
            overflow: hidden;
            }

            .modal .absolute.top-0.right-0.pt-3.pr-3{
            z-index: 10;
            display: none;
            padding-top: 1.25rem;
            padding-right: 1.25rem;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button{
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            line-height: 1rem;
            text-transform: uppercase;
            }

            .input .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button{
            flex-wrap: wrap;
            border-width: 0px;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1;
            border-color: rgb(239 68 68 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px;
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1;
            border-color: rgb(0 150 199 / var(--tw-border-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
            }

            @media (min-width: 640px){
            .modal .absolute.top-0.right-0.pt-3.pr-3{
                display: flex;
            }
            }

            .modal .absolute.top-0.right-0.pt-3.pr-3 svg{
            height: 1rem;
            width: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            transition-property: all;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .blue-btn-x .absolute.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .red-btn-x .absolute.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .green-btn-x .absolute.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .orange-btn-x .absolute.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1;
            color: rgb(249 115 22 / var(--tw-text-opacity));
            }

            @media (max-width: 640px) {
            .mobtable td .td:before {
                content: attr(data-title) ": ";
                width: -moz-fit-content;
                width: fit-content;
                margin-right: 10px;
                text-transform: uppercase;
            }

            .mobtable table{
                display: flex;
            }

            .input .mobtable table{
                flex-wrap: wrap;
                border-width: 0px;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mobtable table.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
                align-items: center;
            }

            .mobtable tr{
                display: flex;
                width: 100%;
                flex-direction: column;
            }

            .input .mobtable tr{
                flex-wrap: wrap;
                border-width: 0px;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .mobtable tr.sm\:max-w-sm,.mobtable tr.sm\:max-w-md,.mobtable tr.sm\:max-w-lg,.mobtable tr.sm\:max-w-xl,.mobtable tr.sm\:max-w-2xl,.mobtable tr.sm\:max-w-3xl,.mobtable tr.sm\:max-w-4xl,.mobtable tr.sm\:max-w-5xl,.mobtable tr.sm\:max-w-6xl,.mobtable tr.sm\:max-w-7xl {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                height: 100%;
            }

            .mobtable tr.sm\:max-w-sm > div,.mobtable tr.sm\:max-w-md > div,.mobtable tr.sm\:max-w-lg > div,.mobtable tr.sm\:max-w-xl > div,.mobtable tr.sm\:max-w-2xl > div,.mobtable tr.sm\:max-w-3xl > div,.mobtable tr.sm\:max-w-4xl > div,.mobtable tr.sm\:max-w-5xl > div,.mobtable tr.sm\:max-w-6xl > div,.mobtable tr.sm\:max-w-7xl > div {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;
            }

            .mobtable tr.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
                align-items: center;
            }

            @media (max-width: 640px) {
                .mobtable tr.sm\:max-w-sm > div,.mobtable tr.sm\:max-w-md > div,.mobtable tr.sm\:max-w-lg > div,.mobtable tr.sm\:max-w-xl > div,.mobtable tr.sm\:max-w-2xl > div,.mobtable tr.sm\:max-w-3xl > div,.mobtable tr.sm\:max-w-4xl > div,.mobtable tr.sm\:max-w-5xl > div,.mobtable tr.sm\:max-w-6xl > div,.mobtable tr.sm\:max-w-7xl > div {
                display: block;
                }
            }

            .fixed.inset-0.z-40.overflow-y-auto.p-4 {
                padding: 0 !important;
                background-color: white;
                display: block !important;
            }

            .w-full.sm\:max-w-sm > div, 
                .w-full.sm\:max-w-md > div, 
                .w-full.sm\:max-w-lg > div, 
                .w-full.sm\:max-w-xl > div,
                .w-full.sm\:max-w-2xl > div,
                .w-full.sm\:max-w-3xl > div,
                .w-full.sm\:max-w-4xl > div,
                .w-full.sm\:max-w-5xl > div,
                .w-full.sm\:max-w-6xl > div,
                .w-full.sm\:max-w-7xl > div {
                display: block;
            }
            }

            .hover\:border-gray-300:hover{
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }

            .hover\:bg-b1:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(202 240 248 / var(--tw-bg-opacity));
            }

            .hover\:bg-b5:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity));
            }

            .hover\:bg-blue-100:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(219 234 254 / var(--tw-bg-opacity));
            }

            .hover\:bg-gray-100:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }

            .hover\:bg-gray-300:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(209 213 219 / var(--tw-bg-opacity));
            }

            .hover\:bg-gray-50:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }

            .hover\:bg-green-100:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity));
            }

            .hover\:bg-indigo-700:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(67 56 202 / var(--tw-bg-opacity));
            }

            .hover\:bg-orange-100:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(255 237 213 / var(--tw-bg-opacity));
            }

            .hover\:bg-red-100:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(254 226 226 / var(--tw-bg-opacity));
            }

            .hover\:bg-red-700:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(185 28 28 / var(--tw-bg-opacity));
            }

            .hover\:text-b6:hover{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .hover\:text-b7:hover{
            --tw-text-opacity: 1;
            color: rgb(0 119 182 / var(--tw-text-opacity));
            }

            .hover\:text-gray-400:hover{
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity));
            }

            .hover\:text-gray-500:hover{
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }

            .hover\:text-gray-700:hover{
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
            }

            .hover\:text-gray-800:hover{
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
            }

            .hover\:text-gray-900:hover{
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
            }

            .hover\:text-red-500:hover{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .focus\:z-10:focus{
            z-index: 10;
            }

            .focus\:border-blue-300:focus{
            --tw-border-opacity: 1;
            border-color: rgb(147 197 253 / var(--tw-border-opacity));
            }

            .focus\:border-gray-300:focus{
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }

            .focus\:border-indigo-300:focus{
            --tw-border-opacity: 1;
            border-color: rgb(165 180 252 / var(--tw-border-opacity));
            }

            .focus\:border-indigo-500:focus{
            --tw-border-opacity: 1;
            border-color: rgb(99 102 241 / var(--tw-border-opacity));
            }

            .focus\:border-indigo-700:focus{
            --tw-border-opacity: 1;
            border-color: rgb(67 56 202 / var(--tw-border-opacity));
            }

            .focus\:border-red-700:focus{
            --tw-border-opacity: 1;
            border-color: rgb(185 28 28 / var(--tw-border-opacity));
            }

            .focus\:bg-gray-100:focus{
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }

            .focus\:bg-gray-200:focus{
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity));
            }

            .focus\:bg-gray-50:focus{
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }

            .focus\:bg-indigo-100:focus{
            --tw-bg-opacity: 1;
            background-color: rgb(224 231 255 / var(--tw-bg-opacity));
            }

            .focus\:text-gray-500:focus{
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }

            .focus\:text-gray-800:focus{
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
            }

            .focus\:text-indigo-800:focus{
            --tw-text-opacity: 1;
            color: rgb(55 48 163 / var(--tw-text-opacity));
            }

            .focus\:outline-none:focus{
            outline: 2px solid transparent;
            outline-offset: 2px;
            }

            .focus\:ring:focus{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }

            .focus\:ring-2:focus{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }

            .focus\:ring-blue-600:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(37 99 235 / var(--tw-ring-opacity));
            }

            .focus\:ring-green-600:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(22 163 74 / var(--tw-ring-opacity));
            }

            .focus\:ring-indigo-200:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(199 210 254 / var(--tw-ring-opacity));
            }

            .focus\:ring-indigo-500:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity));
            }

            .focus\:ring-orange-600:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(234 88 12 / var(--tw-ring-opacity));
            }

            .focus\:ring-red-200:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(254 202 202 / var(--tw-ring-opacity));
            }

            .focus\:ring-red-500:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            }

            .focus\:ring-red-600:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(220 38 38 / var(--tw-ring-opacity));
            }

            .focus\:ring-opacity-50:focus{
            --tw-ring-opacity: 0.5;
            }

            .focus\:ring-offset-2:focus{
            --tw-ring-offset-width: 2px;
            }

            .focus\:ring-offset-blue-50:focus{
            --tw-ring-offset-color: #eff6ff;
            }

            .focus\:ring-offset-green-50:focus{
            --tw-ring-offset-color: #f0fdf4;
            }

            .focus\:ring-offset-orange-50:focus{
            --tw-ring-offset-color: #fff7ed;
            }

            .focus\:ring-offset-red-50:focus{
            --tw-ring-offset-color: #fef2f2;
            }

            .active\:bg-gray-100:active{
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }

            .active\:text-gray-500:active{
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }

            .active\:text-gray-700:active{
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
            }

            .disabled\:cursor-not-allowed:disabled{
            cursor: not-allowed;
            }

            .disabled\:bg-gray-50:disabled{
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }

            .disabled\:opacity-50:disabled{
            opacity: 0.5;
            }

            .group:hover .group-hover\:visible{
            visibility: visible;
            }

            .group:hover .group-hover\:w-fit{
            width: -moz-fit-content;
            width: fit-content;
            }

            .group:hover .group-hover\:bg-white{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }

            .group:hover .group-hover\:text-b6{
            --tw-text-opacity: 1;
            color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .group:hover .group-hover\:text-blue-500{
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity));
            }

            .group:hover .group-hover\:text-gray-500{
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }

            .group:hover .group-hover\:text-green-500{
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .group:hover .group-hover\:text-red-500{
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .group:hover .group-hover\:text-white{
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .group:hover .group-hover\:opacity-100{
            opacity: 1;
            }

            @media (prefers-color-scheme: dark){
            .dark\:bg-gray-900{
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            }
            }

            @media (min-width: 640px){
            .sm\:-right-1{
                right: -0.25rem;
            }

            .sm\:right-0{
                right: 0px;
            }

            .sm\:order-4{
                order: 4;
            }

            .sm\:order-5{
                order: 5;
            }

            .sm\:order-6{
                order: 6;
            }

            .sm\:-my-px{
                margin-top: -1px;
                margin-bottom: -1px;
            }

            .sm\:my-8{
                margin-top: 2rem;
                margin-bottom: 2rem;
            }

            .sm\:-mr-3{
                margin-right: -0.75rem;
            }

            .sm\:ml-10{
                margin-left: 2.5rem;
            }

            .sm\:ml-3{
                margin-left: 0.75rem;
            }

            .sm\:ml-6{
                margin-left: 1.5rem;
            }

            .sm\:mr-3{
                margin-right: 0.75rem;
            }

            .sm\:mr-5{
                margin-right: 1.25rem;
            }

            .sm\:mt-0{
                margin-top: 0px;
            }

            .sm\:mt-4{
                margin-top: 1rem;
            }

            .sm\:block{
                display: block;
            }

            .sm\:inline{
                display: inline;
            }

            .sm\:flex{
                display: flex;
            }

            .sm\:hidden{
                display: none;
            }

            .sm\:h-100{
                height: 30rem;
            }

            .sm\:h-fit{
                height: -moz-fit-content;
                height: fit-content;
            }

            .sm\:w-100{
                width: 30rem;
            }

            .sm\:w-80{
                width: 20rem;
            }

            .sm\:w-96{
                width: 24rem;
            }

            .sm\:w-auto{
                width: auto;
            }

            .sm\:w-fit{
                width: -moz-fit-content;
                width: fit-content;
            }

            .sm\:w-full{
                width: 100%;
            }

            .sm\:w-tabw{
                width: 60rem;
            }

            .sm\:max-w-lg{
                max-width: 32rem;
            }

            .sm\:max-w-md{
                max-width: 28rem;
            }

            .sm\:max-w-sm{
                max-width: 24rem;
            }

            .sm\:flex-1{
                flex: 1 1 0%;
            }

            .sm\:translate-y-0{
                --tw-translate-y: 0px;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .sm\:scale-100{
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .sm\:scale-95{
                --tw-scale-x: .95;
                --tw-scale-y: .95;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .sm\:flex-nowrap{
                flex-wrap: nowrap;
            }

            .sm\:items-start{
                align-items: flex-start;
            }

            .sm\:items-end{
                align-items: flex-end;
            }

            .sm\:items-center{
                align-items: center;
            }

            .sm\:justify-start{
                justify-content: flex-start;
            }

            .sm\:justify-end{
                justify-content: flex-end;
            }

            .sm\:justify-center{
                justify-content: center;
            }

            .sm\:justify-between{
                justify-content: space-between;
            }

            .sm\:gap-20{
                gap: 5rem;
            }

            .sm\:overflow-hidden{
                overflow: hidden;
            }

            .sm\:rounded-lg{
                border-radius: 0.5rem;
            }

            .sm\:rounded-md{
                border-radius: 0.375rem;
            }

            .sm\:rounded-xl{
                border-radius: 0.75rem;
            }

            .sm\:bg-gray-100{
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }

            .sm\:p-0{
                padding: 0px;
            }

            .sm\:p-20{
                padding: 5rem;
            }

            .sm\:p-5{
                padding: 1.25rem;
            }

            .sm\:p-6{
                padding: 1.5rem;
            }

            .sm\:p-8{
                padding: 2rem;
            }

            .sm\:px-0{
                padding-left: 0px;
                padding-right: 0px;
            }

            .sm\:px-4{
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .sm\:px-6{
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .sm\:px-px{
                padding-left: 1px;
                padding-right: 1px;
            }

            .sm\:pl-9{
                padding-left: 2.25rem;
            }

            .sm\:pt-0{
                padding-top: 0px;
            }

            .sm\:text-left{
                text-align: left;
            }

            .sm\:text-2xl{
                font-size: 1.5rem;
                line-height: 2rem;
            }

            .sm\:text-6xl{
                font-size: 3.75rem;
                line-height: 1;
            }

            .sm\:text-base{
                font-size: 1rem;
                line-height: 1.5rem;
            }

            .sm\:text-lg{
                font-size: 1.125rem;
                line-height: 1.75rem;
            }

            .sm\:text-sm{
                font-size: 0.875rem;
                line-height: 1.25rem;
            }

            .sm\:text-xl{
                font-size: 1.25rem;
                line-height: 1.75rem;
            }

            .sm\:text-blc1{
                --tw-text-opacity: 1;
                color: rgb(48 48 48 / var(--tw-text-opacity));
            }

            .sm\:text-inherit{
                color: inherit;
            }

            .sm\:shadow-md{
                --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
                --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .sm\:hover\:bg-b1:hover{
                --tw-bg-opacity: 1;
                background-color: rgb(202 240 248 / var(--tw-bg-opacity));
            }

            .sm\:hover\:bg-b5:hover{
                --tw-bg-opacity: 1;
                background-color: rgb(0 180 216 / var(--tw-bg-opacity));
            }

            .group:hover .sm\:group-hover\:bg-white{
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }

            .group:hover .sm\:group-hover\:text-b6{
                --tw-text-opacity: 1;
                color: rgb(0 150 199 / var(--tw-text-opacity));
            }

            .group:hover .sm\:group-hover\:text-green-500{
                --tw-text-opacity: 1;
                color: rgb(34 197 94 / var(--tw-text-opacity));
            }

            .group:hover .sm\:group-hover\:text-red-500{
                --tw-text-opacity: 1;
                color: rgb(239 68 68 / var(--tw-text-opacity));
            }

            .group:hover .sm\:group-hover\:text-white{
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .group:hover .sm\:group-hover\:opacity-100{
                opacity: 1;
            }
            }

            @media (min-width: 768px){
            .md\:flex{
                display: flex;
            }

            .md\:hidden{
                display: none;
            }

            .md\:max-w-lg{
                max-width: 32rem;
            }

            .md\:max-w-xl{
                max-width: 36rem;
            }

            .md\:flex-1{
                flex: 1 1 0%;
            }

            .md\:items-center{
                align-items: center;
            }

            .md\:justify-between{
                justify-content: space-between;
            }
            }

            @media (min-width: 1024px){
            .lg\:block{
                display: block;
            }

            .lg\:grid{
                display: grid;
            }

            .lg\:w-tabw{
                width: 60rem;
            }

            .lg\:max-w-2xl{
                max-width: 42rem;
            }

            .lg\:max-w-3xl{
                max-width: 48rem;
            }

            .lg\:px-8{
                padding-left: 2rem;
                padding-right: 2rem;
            }
            }

            @media (min-width: 1280px){
            .xl\:w-tabw{
                width: 60rem;
            }

            .xl\:max-w-4xl{
                max-width: 56rem;
            }

            .xl\:max-w-5xl{
                max-width: 64rem;
            }

            .xl\:text-left{
                text-align: left;
            }

            .xl\:text-justify{
                text-align: justify;
            }
            }

            @media (min-width: 1536px){
            .\32xl\:max-w-6xl{
                max-width: 72rem;
            }

            .\32xl\:max-w-7xl{
                max-width: 80rem;
            }
            }
        </style>

        <style>
            table {
                width: 100%;
            }

            th {
                text-align: left;
                font-size: 0.75rem;
                line-height: 1rem;
                font-weight: bold;
                text-transform: uppercase;
            }

            tr:nth-child(odd) {
                background-color: rgb(219 234 254);
            }

            th, td {
                padding: 10px;
            }

            .tbl-cntnr {
                border: 1px solid rgb(219 234 254);
                margin-top: 30px;
                margin-bottom: 30px;
                border-radius: 4px;
            }
        </style>
    </head>

    <body class="bg-blue-100 flex items-center justify-center">
        <div class="rounded-md flex flex-col items-center justify-center gap-4">
            <div class="h-fit w-full flex items-center justify-center gap-3">
                <div class="h-fit w-full flex flex-col items-center justify-center gap-2">
                    <div class="text-center flex gap-2 items-center justify-center">
                        <div>
                            @if ($schLogo == "")
                                <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11">
                            @else
                                <img src="{{ asset('storage/'.$schLogo) }}" alt="school-logo" class="w-11">
                            @endif
                        </div>
    
                        <div>
                            <p class="text-lg">
                                {{ $schoolName }}
                            </p>
                        </div>
                    </div>
                    
                    <div class="text-xs text-center">
                        <p>
                            {{ $schoolAddress }}
                        </p>
    
                        <p>
                            {{ $schoolCntcts }}
                        </p>
                    </div>
                </div>
    
                @foreach ($profSchedules as $newProfSchedules)
                <div class="grid grid-cols-2 items-center gap-2 text-xs pt-4 w-full">
                    <div>
                        Professor's Name: {{ $newProfSchedules->profName }}
                    </div>

                    <div>
                        Total No. of Handled Units: {{ $units . " Units" }}
                    </div>

                    <div>
                        Employee Classification: {{ $emply }}
                    </div>
                </div>

                @break
                @endforeach
            </div>
            
            <div class="overflow-hidden w-fit tbl-cntnr">
                <table>
                    <tr>
                        {{-- <th>Professor's Name</th> --}}
                        <th>Subject Code</th>
                        <th>Day</th>
                        <th>Course</th>
                        <th>Year</th>
                        <th>Section</th>
                        <th>Units</th>
                        <th>Time</th>
                        <th>ClassRoom</th>
                    </tr>
                
                    @foreach ($profSchedules as $newProfSchedules)
                    <tr>
                        {{-- <td>{{ $newProfSchedules->profName }}</td> --}}
                        <td>{{ $newProfSchedules->subCode }}</td>
                        <td>{{ $newProfSchedules->schedDay }}</td>
                        <td>{{ $newProfSchedules->studCourse }}</td>
                        <td>{{ $newProfSchedules->studYear }}</td>
                        <td>{{ $newProfSchedules->studSection }}</td>
                        <td>{{ $newProfSchedules->totalHours }}</td>
                        <td>{{ $newProfSchedules->startTime." - ".$newProfSchedules->endTime }}</td>
                        <td>{{ $newProfSchedules->classroom }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>