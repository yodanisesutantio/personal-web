<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    {{--
        Dark BG - #131413
        Light Color - #E7A967
        Var. Light - #FBBA61
    --}}

    <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="icon" type="image/x-icon" href="./favicon_io/favicon.ico">

    <title>Yodanis E. Sutantio</title>
</head>
<body class="w-full h-screen px-2 py-2 bg-center bg-cover" style="background-image: url('img/bg-sandstone-texture.png')">
    <div class="grid grid-cols-5 grid-rows-3 gap-1.5 w-full h-full">
        {{-- Prev Button --}}
        <div class="col-span- bg-[#E7A967] bg-center bg-cover rounded-md" style="background-image: url('img/col-span.png')"></div>
        {{-- What I Do ? --}}
        <div class="col-span-2 bg-[#E7A967] bg-center bg-cover rounded-md" style="background-image: url('img/texture.webp')"></div>
        {{-- Open Socials --}}
        <div class="col-span-2 row-span-2 bg-[#E7A967] bg-center bg-cover rounded-md" style="background-image: url('img/texture.webp')"></div>
        {{-- Project Thumbnail --}}
        <div class="col-span-2 row-span-2 bg-[#E7A967] bg-center bg-cover rounded-md" style="background-image: url('img/texture.webp')"></div>
        {{-- Identity Logo --}}
        <div class="col-span- bg-[#E7A967] bg-center bg-cover rounded-md" style="background-image: url('img/col-span.png')"></div>
        {{-- Quotes --}}
        <div class="col-span-2 bg-[#E7A967] bg-center bg-cover rounded-md" style="background-image: url('img/texture.webp')"></div>
        {{-- Next Button --}}
        <div class="col-span- bg-[#E7A967] bg-center bg-cover rounded-md" style="background-image: url('img/col-span.png')"></div>
    </div>
</body>
</html>