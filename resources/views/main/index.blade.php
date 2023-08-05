<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>



    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col items-center justify-center h-screen">
    <main class="max-w-[900px] md:flex sm:flex-row-reverse sm:rounded-3xl md:overflow-hidden sm:p-6">
        <figure class="rounded-lg">
            <img src="/assets/images/illustration-sign-up-mobile.svg" alt="illustration image"
                class="w-full block md:hidden">
            <img src="/assets/images/illustration-sign-up-desktop.svg" alt="illustration image"
                class="w-full hidden md:block">
        </figure>
        <div class="p-6 space-y-6 sm:mt-12">
            <h1 class="text-3xl font-bold sm:text-5xl">Stay updated!</h1>
            <p>
                Join 60,000+ product managers receiving monthly updates on:
            </p>
            <ul class="space-y-4 ">
                <li class="flex gap-3 ">
                    <img src="/assets/images/icon-list.svg" alt="check icon" class="h-fit w-fit mt-[2px]">Product
                    discovery
                    and
                    building
                    what matters
                </li>
                <li class="flex gap-3">
                    <img src="/assets/images/icon-list.svg" alt="check icon" class="h-fit w-fit mt-[2px]">Measuring to
                    ensure updates
                    are
                    success
                </li>
                <li class="flex gap-3">
                    <img src="/assets/images/icon-list.svg" alt="check icon" class="h-fit w-fit mt-[2px]">And much
                    more!
                </li>
            </ul>

            <form method="POST" action="submitHandler" novalidate>
                @csrf
                <div class="sm:flex sm:justify-between">
                    <label for="email" class="block">Email Address</label>
                    @error('email')
                        <p class="text-red-500 sm:block">{{ $message }}</p>
                    @enderror
                </div>
                <input type="email" name="email" id="email" placeholder="email@company.com"
                    class="my-3 p-4  w-full border rounded-lg outline outline-transparent cursor-pointer {{ $errors->has('email') ? 'bg-[#FFE8E7] border-red-600' : 'border-slate-300' }}">
                @error('email')
                    <p class="text-red-500 sm:hidden">{{ $message }}</p>
                @enderror
                <button
                    class="dismiss-btn mt-4 py-3 w-full text-center bg-[#232742] text-white rounded-lg shadow-xl  hover:bg-gradient-to-r from-pink-500 to-orange-500">Subscribe
                    to
                    monthly
                    newsletter</button>
            </form>
        </div>
    </main>
</body>

</html>
