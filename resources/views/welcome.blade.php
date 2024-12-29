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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
      <style type="text/css">
        .navbar .megamenu{ padding: 1rem; }
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .navbar .has-megamenu{position:static!important;}
            .navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }

        }
        /* ============ desktop view .end// ============ */


        /* ============ mobile view ============ */
        @media(max-width: 991px){
            .navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
                overflow-y: auto;
                max-height: 90vh;
                margin-top:10px;
            }
        }
        /* ============ mobile view .end// ============ */


a:link, a:visited {
  background-color:  bg-dark;
  color: white;
  border: 1px solid bg-dark;
  padding: 10px 20px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
}

</style>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
    /////// Prevent closing from click inside dropdown
    document.querySelectorAll('.dropdown-menu').forEach(function(element){
        element.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    })
});
// DOMContentLoaded  end
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="socialstyle.css">
<link rel="stylesheet" href="numberofstudents.css">
<link rel="stylesheet" href="mainslideshow.css">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

        @include("layouts.top")
        @include("layouts.mega")
        @include("layouts.singleslide")
       @include("layouts.maincontent")

       @include("layouts.mainfooter")
       @include("layouts.copyright")

          </body>
</html>
