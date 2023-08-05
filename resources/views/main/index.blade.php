<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>



    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body>
    <main>
        <figure class="rounded-lg ">
            <img src="/assets/images/illustration-sign-up-mobile.svg" alt="illustration image" class="w-full">
        </figure>
        <div class="p-6 space-y-6">
            <h1 class="text-3xl font-bold">Stay updated!</h1>
            <p>
                Join 60,000+ product managers receiving monthly updates on:
            </p>
            <ul class="space-y-4">
                <li class="flex gap-3">
                    <span class="mt-1"><img src="/assets/images/icon-list.svg" alt="check icon"
                            class="h-5 w-5"></span>Product
                    discovery
                    and
                    building
                    what matters
                </li>
                <li class="flex gap-3">
                    <span class="mt-1"><img src="/assets/images/icon-list.svg" alt="check icon"
                            class="h-5 w-5"></span>Measuring to
                    ensure updates
                    are
                    success
                </li>
                <li class="flex gap-3">
                    <span class="mt-1"><img src="/assets/images/icon-list.svg" alt="check icon"
                            class="h-5 w-5"></span>And much more!
                </li>
            </ul>

            <form method="POST" action="submitHandler" novalidate>
                @csrf
                <label for="email" class="block">Email Address</label>
                <input type="email" name="email" id="email" placeholder="email@company.com"
                    class="my-3 p-4 border-slate-300 w-full border rounded-lg">
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <button class="my-4 py-3 w-full bg-[#232742] text-white rounded-lg">Subscribe to monthly
                    newsletter</button>
            </form>
        </div>
    </main>
</body>

</html>
