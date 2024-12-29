<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>University of Gezira</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <style type="text/css">
        @charset "UTF-8";

        /*!
 * Bootstrap v5.0.0-beta2 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
       @media all and (min-width: 992px) {

            .navbar .has-megamenu{position:static!important;}
            .navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }

        }
        /* ============ desktop view .end// ============ */


        /* ============ mobile view ============ */ 
        @media(max-width: 991px) {

            .navbar.fixed-top .navbar-collapse,
            .navbar.sticky-top .navbar-collapse {
                overflow-y: auto;
                max-height: 90vh;
                margin-top: 10px;
            }
        }

        /* ============ mobile view .end// ============ */


        a:link,
        a:visited {
            background-color: bg-dark;
            color: white;
            border: 1px solid bg-dark;
            padding: 10px 20px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
        }

        a:hover,
        a:active {
            background-color: green;
            color: white;
        }

        /* Reset default margins and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-size: 16px;
            font-family: 'CustomArabicFont', sans-serif;
            /* Use a clean, easy-to-read font */
            color: #333;
            /* Dark text for readability */
            background-color: #f9f9f9;
            /* Light background for minimal eye strain */
            line-height: 1.3;
            /* Increase line height for easier reading */
            padding: 0px;
            /* Add padding around the page */
        }

        /* Container for main content */
        .container {
            max-width: 98%;
            /* Keeps content centered on larger screens */
            margin: 0 auto;

            background-color: #fff;
            /* White background for content area */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            border-radius: 8px;
            /* Rounded corners for modern look */
        }

        /* Headings */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            /* Slightly darker headings */
            margin-bottom: .5rem;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }

        /* Links */
        a {
            color: #ffffff;
            /* Blue links */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Basic button styling */
        button {
            background-color: #fcfcfc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ffffff;
        }

        /* Responsive text for accessibility */
        @media (max-width: 768px) {
            body {
                font-size: 0.9rem;
            }
        }
    </style>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            })
        });
        use Illuminate\ Support\ Facades\ Http;

        public function fetchNewsFromApi() {
            $response = Http::get('https://news.uofg.edu.sd/wp-json/wp/v2/posts');
            $news = $response - > json();

            return view('home', compact('news'));
        }

        // DOMContentLoaded  end
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="socialstyle.css">
    <link rel="stylesheet" href="numberofstudents.css">
    <link rel="stylesheet" href="mainslideshow.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    @include('layouts.top')

    @include('layouts.mainslide2')
    @include('layouts.maincontent')

    @include('layouts.mainfooter')
    @include('layouts.copyright')

</body>

</html>
