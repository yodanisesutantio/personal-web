<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="icon" type="image/x-icon" href="./favicon_io/favicon.ico">

    <title>Yodanis E. Sutantio</title>
</head>
<body class="w-full h-screen px-[60px] pb-[50px] pt-[40px]" style="background-image: url('/img/body-bg.webp');">
    <div class="flex flex-col h-full gap-12">
        {{-- Navbar --}}
        <header class="flex flex-row w-full justify-between items-center">
            <a href="/"><img src="/favicon_io/android-chrome-192x192.png" alt="yodanis_identity_logo" class="w-[48px] flex-shrink-0"></a>
            <div class="flex flex-row gap-2 items-center px-4 py-3 bg-gradient-to-br from-[#32323A] via-[#18181B] to-[#24242B] text-[#F9FBF9] rounded-lg shadow-inner hover:cursor-pointer hover:drop-shadow-xl hover:transition-shadow hover:animate-[jump_850ms_ease-in-out] ease-in-out duration-200">
                Visit my Socials
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#F9FBF9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
            </div>
        </header>
    
        {{-- Bento grid --}}
        <div class="w-full h-full grid grid-cols-12 grid-rows-2 gap-5">
            {{-- Previous Button --}}
            <div class="bg-gradient-to-br from-[#32323A] from-15% via-[#18181B] via-75% to-[#24242B] text-[#F9FBF9]border-2 border-black rounded-xl shadow-inner overflow-hidden hover:cursor-pointer hover:drop-shadow-xl hover:transition-shadow hover:animate-[beats_600ms_ease-in-out] ease-in-out duration-200">

            </div>
            <div class="col-span-7 row-span-2 border-2 border-black rounded-xl"></div>
            <div class="col-span-4 border-2 border-black rounded-xl"></div>
            {{-- Next Button --}}
            <div class="border-2 border-black rounded-xl"></div>
            <div class="col-span-4 border-2 border-black rounded-xl"></div>
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Swiper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>

    </script>
</body>
</html>