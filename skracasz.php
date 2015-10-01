

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta property="og:image" content="http://i.imgur.com/pSGpDbU.png">
        <title>Ciuszki</title>
        <style type="text/css" media="screen">

            body,
            html {
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            * {
                padding: 0;
                margin: 0;
            }

            iframe {
                width: 100%;
                height: 100%;
                /*overflow: hidden;*/
                border: none;
            }


            /*
 _____   _           _         _                        _
|_   _| | |         | |       | |                      | |
  | |   | |__   __ _| |_ ___  | |_ ___  _ __ ___   __ _| |_ ___   ___  ___
  | |   | '_ \ / _` | __/ _ \ | __/ _ \| '_ ` _ \ / _` | __/ _ \ / _ \/ __|
 _| |_  | | | | (_| | ||  __/ | || (_) | | | | | | (_| | || (_) |  __/\__ \
 \___/  |_| |_|\__,_|\__\___|  \__\___/|_| |_| |_|\__,_|\__\___/ \___||___/

Oh nice, welcome to the stylesheet of dreams.
It has it all. Classes, ID's, comments...the whole lot:)
Enjoy responsibly!
@ihatetomatoes

            */

            /* ==========================================================================
               Chrome Frame prompt
               ========================================================================== */

            .chromeframe {
                margin: 0.2em 0;
                background: #ccc;
                color: #000;
                padding: 0.2em 0;
            }

            /* ==========================================================================
               Author's custom styles
               ========================================================================== */
            p {
                line-height: 1.33em;
                color: #7E7E7E;
            }
            h1 {
                color: #EEEEEE;
            }

            #loader-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1000;
            }
            #loader {
                display: block;
                position: relative;
                left: 50%;
                top: 50%;
                width: 150px;
                height: 150px;
                margin: -75px 0 0 -75px;
                border-radius: 50%;
                border: 3px solid transparent;
                border-top-color: #3498db;

                -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
                animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */

                z-index: 1001;
            }

            #loader:before {
                content: "";
                position: absolute;
                top: 5px;
                left: 5px;
                right: 5px;
                bottom: 5px;
                border-radius: 50%;
                border: 3px solid transparent;
                border-top-color: #e74c3c;

                -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
                animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
            }

            #loader:after {
                content: "";
                position: absolute;
                top: 15px;
                left: 15px;
                right: 15px;
                bottom: 15px;
                border-radius: 50%;
                border: 3px solid transparent;
                border-top-color: #f9c922;

                -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
                animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
            }

            @-webkit-keyframes spin {
                0%   {
                    -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                    -ms-transform: rotate(0deg);  /* IE 9 */
                    transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
                }
                100% {
                    -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                    -ms-transform: rotate(360deg);  /* IE 9 */
                    transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
                }
            }
            @keyframes spin {
                0%   {
                    -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                    -ms-transform: rotate(0deg);  /* IE 9 */
                    transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
                }
                100% {
                    -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                    -ms-transform: rotate(360deg);  /* IE 9 */
                    transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
                }
            }

            #loader-wrapper .loader-section {
                position: fixed;
                top: 0;
                width: 51%;
                height: 100%;
                background: #222222;
                z-index: 1000;
                -webkit-transform: translateX(0);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: translateX(0);  /* IE 9 */
                transform: translateX(0);  /* Firefox 16+, IE 10+, Opera */
            }

            #loader-wrapper .loader-section.section-left {
                left: 0;
            }

            #loader-wrapper .loader-section.section-right {
                right: 0;
            }

            /* Loaded */
            .loaded #loader-wrapper .loader-section.section-left {
                -webkit-transform: translateX(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: translateX(-100%);  /* IE 9 */
                transform: translateX(-100%);  /* Firefox 16+, IE 10+, Opera */

                -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
                transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
            }

            .loaded #loader-wrapper .loader-section.section-right {
                -webkit-transform: translateX(100%);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: translateX(100%);  /* IE 9 */
                transform: translateX(100%);  /* Firefox 16+, IE 10+, Opera */

                -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
                transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
            }

            .loaded #loader {
                opacity: 0;
                -webkit-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }
            .loaded #loader-wrapper {
                visibility: hidden;

                -webkit-transform: translateY(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: translateY(-100%);  /* IE 9 */
                transform: translateY(-100%);  /* Firefox 16+, IE 10+, Opera */

                -webkit-transition: all 0.3s 1s ease-out;
                transition: all 0.3s 1s ease-out;
            }

            /* JavaScript Turned Off */
            .no-js #loader-wrapper {
                display: none;
            }
            .no-js h1 {
                color: #222222;
            }

            #content {
                margin: 0 auto;
                padding-bottom: 50px;
                width: 80%;
                max-width: 978px;
            }






            /* ==========================================================================
               Helper classes
               ========================================================================== */

            /*
             * Image replacement
             */

            .ir {
                background-color: transparent;
                border: 0;
                overflow: hidden;
                /* IE 6/7 fallback */
                *text-indent: -9999px;
            }

            .ir:before {
                content: "";
                display: block;
                width: 0;
                height: 150%;
            }

            /*
             * Hide from both screenreaders and browsers: h5bp.com/u
             */

            .hidden {
                display: none !important;
                visibility: hidden;
            }

            /*
             * Hide only visually, but have it available for screenreaders: h5bp.com/v
             */

            .visuallyhidden {
                border: 0;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            /*
             * Extends the .visuallyhidden class to allow the element to be focusable
             * when navigated to via the keyboard: h5bp.com/p
             */

            .visuallyhidden.focusable:active,
            .visuallyhidden.focusable:focus {
                clip: auto;
                height: auto;
                margin: 0;
                overflow: visible;
                position: static;
                width: auto;
            }

            /*
             * Hide visually and from screenreaders, but maintain layout
             */

            .invisible {
                visibility: hidden;
            }

            /*
             * Clearfix: contain floats
             *
             * For modern browsers
             * 1. The space content is one way to avoid an Opera bug when the
             *    `contenteditable` attribute is included anywhere else in the document.
             *    Otherwise it causes space to appear at the top and bottom of elements
             *    that receive the `clearfix` class.
             * 2. The use of `table` rather than `block` is only necessary if using
             *    `:before` to contain the top-margins of child elements.
             */

            .clearfix:before,
            .clearfix:after {
                content: " "; /* 1 */
                display: table; /* 2 */
            }

            .clearfix:after {
                clear: both;
            }

            /*
             * For IE 6/7 only
             * Include this rule to trigger hasLayout and contain floats.
             */

            .clearfix {
                *zoom: 1;
            }

            /* ==========================================================================
               EXAMPLE Media Queries for Responsive Design.
               These examples override the primary ('mobile first') styles.
               Modify as content requires.
               ========================================================================== */

            @media only screen and (min-width: 35em) {
                /* Style adjustments for viewports that meet the condition */
            }

            @media print,
            (-o-min-device-pixel-ratio: 5/4),
            (-webkit-min-device-pixel-ratio: 1.25),
            (min-resolution: 120dpi) {
                /* Style adjustments for high resolution devices */
            }

            /* ==========================================================================
               Print styles.
               Inlined to avoid required HTTP connection: h5bp.com/r
               ========================================================================== */

            @media print {
                * {
                    background: transparent !important;
                    color: #000 !important; /* Black prints faster: h5bp.com/s */
                    box-shadow: none !important;
                    text-shadow: none !important;
                }

                a,
                a:visited {
                    text-decoration: underline;
                }

                a[href]:after {
                    content: " (" attr(href) ")";
                }

                abbr[title]:after {
                    content: " (" attr(title) ")";
                }

                /*
                 * Don't show links for images, or javascript/internal links
                 */

                .ir a:after,
                a[href^="javascript:"]:after,
                a[href^="#"]:after {
                    content: "";
                }

                pre,
                blockquote {
                    border: 1px solid #999;
                    page-break-inside: avoid;
                }

                thead {
                    display: table-header-group; /* h5bp.com/t */
                }

                tr,
                img {
                    page-break-inside: avoid;
                }

                img {
                    max-width: 100% !important;
                }

                @page {
                    margin: 0.5cm;
                }

                p,
                h2,
                h3 {
                    orphans: 3;
                    widows: 3;
                }

                h2,
                h3 {
                    page-break-after: avoid;
                }
            }

            /*
                    Ok so you have made it this far, that means you are very keen to on my code.
                    Anyway I don't really mind it. This is a great way to learn so you actually doing the right thing:)
                    Follow me @ihatetomatoes
            */

        </style>

    </head>
    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>

        <div id="content">
            <h2>This is our page title</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>



    </body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>

    var Base64 = {_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=", encode:function(e){var t = ""; var n, r, i, s, o, u, a; var f = 0; e = Base64._utf8_encode(e); while (f < e.length){n = e.charCodeAt(f++); r = e.charCodeAt(f++); i = e.charCodeAt(f++); s = n >> 2; o = (n & 3) << 4 | r >> 4; u = (r & 15) << 2 | i >> 6; a = i & 63; if (isNaN(r)){u = a = 64} else if (isNaN(i)){a = 64}t = t + this._keyStr.charAt(s) + this._keyStr.charAt(o) + this._keyStr.charAt(u) + this._keyStr.charAt(a)}return t}, decode:function(e){var t = ""; var n, r, i; var s, o, u, a; var f = 0; e = e.replace(/[^A-Za-z0-9\+\/\=]/g, ""); while (f < e.length){s = this._keyStr.indexOf(e.charAt(f++)); o = this._keyStr.indexOf(e.charAt(f++)); u = this._keyStr.indexOf(e.charAt(f++)); a = this._keyStr.indexOf(e.charAt(f++)); n = s << 2 | o >> 4; r = (o & 15) << 4 | u >> 2; i = (u & 3) << 6 | a; t = t + String.fromCharCode(n); if (u != 64){t = t + String.fromCharCode(r)}if (a != 64){t = t + String.fromCharCode(i)}}t = Base64._utf8_decode(t); return t}, _utf8_encode:function(e){e = e.replace(/\r\n/g, "\n"); var t = ""; for (var n = 0; n < e.length; n++){var r = e.charCodeAt(n); if (r < 128){t += String.fromCharCode(r)} else if (r > 127 && r < 2048){t += String.fromCharCode(r >> 6 | 192); t += String.fromCharCode(r & 63 | 128)} else{t += String.fromCharCode(r >> 12 | 224); t += String.fromCharCode(r >> 6 & 63 | 128); t += String.fromCharCode(r & 63 | 128)}}return t}, _utf8_decode:function(e){var t = ""; var n = 0; var r = c1 = c2 = 0; while (n < e.length){r = e.charCodeAt(n); if (r < 128){t += String.fromCharCode(r); n++} else if (r > 191 && r < 224){c2 = e.charCodeAt(n + 1); t += String.fromCharCode((r & 31) << 6 | c2 & 63); n += 2} else{c2 = e.charCodeAt(n + 1); c3 = e.charCodeAt(n + 2); t += String.fromCharCode((r & 15) << 12 | (c2 & 63) << 6 | c3 & 63); n += 3}}return t}}

// Define the string
    var string = 'aHR0cDovL3d5YmllcnotYm9ueS5wbC9zLzU1NWNmZTI3Y2MwZWY=';
// Encode the String
    var encodedString = Base64.encode(string);
    console.log(encodedString); // Outputs: "SGVsbG8gV29ybGQh"

// Decode the String
    var decodedString = Base64.decode(encodedString);
    console.log(decodedString); // Outputs: "Hello World!"


    $(document).ready(function(){
    setTimeout(function(){
    $('#loader-wrapper').hide();
    $('body').html(' <iframe src="'+Base64.decode(string)+'" scrolling="yes"></iframe>');
    }
    , 3000);
    });
</script>