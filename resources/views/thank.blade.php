<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Request Information about 33 Croisette</title>

    <!--Meta Keywords and Description-->
    <meta name="description" content="Enjoy a unique experience, book a flat at the hotel carlton in cannes for your holidays with Michaël Zingraf Real Estate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" title="Favicon"/>

    <!-- Main CSS Files -->
    @vite('resources/css/app.css')

    @yield('dedicated_css')

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<main>
    <div class="flex flex-col items-center justify-center p-10">

        <img src="images/logo-blue-carlton.png" alt="logo Hotel Luxe Carlton Cannes">

        <div class="text-center py-6 text-gray-400">
            <p>Michaël Zingraf Real Estate and the Hotel Regency Carlton Cannes</p>
            <p>Thank you for your confidence, your reservation request is being processed</p>
            <p class="pt-6">You can contact our staff immediately if you have not heard from us.<br>
                Keep their contact details so that you can get in touch with them.</p>
        </div>

        <div class="flex gap-4 text-gray-400">
            <div class="flex flex-col justify-center items-center gap-1">
                <img class="w-1/2" src="images/florian.jpg" alt="rental property broker">
                <h2 class="text-gray-500">Lea PINCHENET</h2>
                <a href="tel:+33(0)4.92.99.19.19">T.+33(0)4.92.99.19.19</a>
                <a href="tel:+33(0)6.58.41.14.91">T.+33(0)6.58.41.14.91</a>
                <a href="mailto:florian@michaelzingraf.com">florian@michaelzingraf.com</a>
            </div>
        </div>
        <img class="w-28 py-12" src="images/logo-mzre.jpg" alt="logo michael zingraf real estate">
    </div>
</main>
</body>
</html>
