<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>



    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen justify-center sm:mt-24">
    <main class="p-6 flex flex-col mt-24 sm:rounded-3xl max-w-md sm:p-12 sm:h-fit">
        <div class="grow space-y-6 sm:mb-6 sm:grow-0">
            <figure>
                <img src="/assets/images/icon-success.svg" alt="icon success" class="h-12 w-12">
            </figure>
            <h1 class="text-3xl font-semibold sm:text-5xl">Thanks for subscribing!</h1>

            <p>
                A confirmation email has been sent to <span class="font-semibold">{{ session('userEmail') }}</span>.
                Please
                open
                it
                and click the button inside to confirm your subscription
            </p>
        </div>

        <a class="dismiss-btn py-3 w-full text-center bg-[#232742] text-white rounded-lg shadow-xl  hover:bg-gradient-to-r from-pink-500 to-orange-500"
            href="/">
            Dismiss message
        </a>
    </main>
</body>

</html>
