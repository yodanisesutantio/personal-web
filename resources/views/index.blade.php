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
<body class="w-full h-screen px-[60px] pb-[50px] pt-[40px] bg-[#171717]">
    <div class="flex flex-col h-full gap-12">
        {{-- Navbar --}}
        <header class="flex flex-row w-full justify-between items-center">
            <a href="/"><img src="/img/identity-logo-tea.svg" alt="yodanis_identity_logo" class="w-[32px] flex-shrink-0"></a>
            <div class="flex flex-row gap-2 items-center px-4 py-3 bg-[#DDEDAA] text-[#171717] rounded-lg shadow-inner hover:cursor-pointer hover:shadow-[#DDEDAA]/10 hover:shadow-lg hover:transition-shadow hover:animate-[beats_600ms_ease-in-out] ease-in-out duration-200">
                <p class="font-semibold">Visit my Socials</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#171717" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
            </div>
        </header>

        {{-- New Bento Grid --}}
        <div class="w-full h-full grid grid-cols-8 grid-rows-2 gap-5">
            <div class="col-span-6 row-span-2 rounded-xl border-2 border-dashed border-[#DDEDAA]/30"></div>
            <div class="col-span-2 flex flex-col items-center justify-center gap-3 border-2 border-dashed border-[#DDEDAA]/30 rounded-xl shadow-inner overflow-hidden hover:cursor-pointer hover:shadow-[#DDEDAA]/10 hover:shadow-lg hover:transition-all hover:bg-[#DDEDAA] hover:animate-[jump_600ms_ease-in-out] ease-in-out duration-200" id="prev-button">
                <p class="text-xl text-[#DDEDAA] font-semibold">Previous</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="hidden" width="60" height="60" viewBox="0 0 24 24"><g fill="none" stroke="#171717" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m0 0l3-3m-3 3l3 3"/></g></svg>
            </div>
            <div class="col-span-2 flex flex-col items-center justify-center gap-3 border-2 border-dashed border-[#DDEDAA]/30 rounded-xl shadow-inner overflow-hidden hover:cursor-pointer hover:shadow-[#DDEDAA]/10 hover:shadow-lg hover:transition-all hover:bg-[#DDEDAA] hover:animate-[duck_600ms_ease-in-out] ease-in-out duration-200" id="next-button">
                <p class="text-xl text-[#DDEDAA] font-semibold">Next</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="hidden" width="60" height="60" viewBox="0 0 24 24"><g fill="none" stroke="#171717" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m0 0l-3-3m3 3l-3 3"/></g></svg>
            </div>
        </div>
    
        {{-- Bento grid --}}
        {{-- <div class="w-full h-full grid grid-cols-12 grid-rows-2 gap-5">
            <div class="flex flex-col items-center justify-center gap-8 bg-[#DBCBD8] text-[#F9FBF9] rounded-xl shadow-inner overflow-hidden hover:cursor-pointer hover:pb-7 hover:drop-shadow-xl hover:transition-shadow hover:animate-[jump_600ms_ease-in-out] ease-in-out duration-200" id="prev-button">
                <p class="-rotate-90 text-lg font-semibold order-2">Previous</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="hidden" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#F9FBF9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20V4m0 0l6 6m-6-6l-6 6"/></svg>
            </div>
            <div class="col-span-7 row-span-2 bg-[#4F759B] rounded-xl"></div>
            <div class="col-span-4 border-2 border-black rounded-xl"></div>
            <div class="flex flex-col items-center justify-center gap-4 bg-[#DBCBD8] text-[#F9FBF9] rounded-xl shadow-inner overflow-hidden hover:cursor-pointer hover:pt-7 hover:drop-shadow-xl hover:transition-shadow hover:animate-[duck_600ms_ease-in-out] ease-in-out duration-200" id="next-button">
                <p class="-rotate-90 text-lg font-semibold">Next</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="hidden" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#F9FBF9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m0 0l6-6m-6 6l-6-6"/></svg>
            </div>
            <div class="flex flex-col items-center justify-center col-span-4 border-2 border-black rounded-xl">
                <p class="text-xl font-semibold">Open CV</p>
            </div>
        </div> --}}
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Swiper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#prev-button").hover(function() {
                $(this).find("svg").toggleClass("hidden");
                $(this).find("p").toggleClass("hidden");
            });
            $("#next-button").hover(function() {
                $(this).find("svg").toggleClass("hidden");
                $(this).find("p").toggleClass("hidden");
            });
        });
    </script>
</body>
</html>