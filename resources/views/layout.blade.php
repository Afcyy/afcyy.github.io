<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-W7L3B29');</script>
        <!-- End Google Tag Manager -->	

        <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
        <link rel="manifest" href="images/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="antialiased">

    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7L3B29"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <!-- top color bar -->
    <div class="h-2" style="background: linear-gradient(-45deg, #805AD5, #E7AEF3)"></div>


        @yield('content')

        <!-- Footer Email Section -->
        <section class="text-center pt-32 pb-40 bg-purple-600 relative">

            <div class="container mx-auto text-center">
                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">Sign up to be notified when we release!</h1>
                <h3 class="my-4 text-3xl leading-tight text-gray-400">Enter your email below to request early access.</h3>
                <form action="https://yahoo.us4.list-manage.com/subscribe/post?u=b531ab082e7b631637491f975&amp;id=1fb90b4892" method="post" class="flex w-full px-16 xl:pr-6 lg:pr-16 md:px-32 lg:px-0 lg:w-1/2 lg:m-auto lg:mt-8">
                    <input type="hidden" name="b_b531ab082e7b631637491f975_1fb90b4892" tabindex="-1" value="">
                    <input class="bg-white border-2 border-white rounded py-2 px-4 block w-full focus:outline-none focus:border-purple-400 text-black input w-1/3" type="email" name="EMAIL" autofocus="" placeholder="jane@example.com">
                    <button class="hover:bg-grey-darker text-white ml-4 py-2 px-6 rounded bg-gray-800 font-bold w-2/3">Submit</button>
                </form>
            </div>
    
        </section>
    
        <script>
            document.getElementById('signup_btn').addEventListener('click', function () {
                document.getElementById('email').focus();
            });
        </script>
    </body>
    
    </html>