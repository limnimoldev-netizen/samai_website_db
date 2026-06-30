<?php
    // get_template_part('template-parts/navbar'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nav bar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<header class="my-5 mx-4 xl:mx-70 rounded-2xl px-6 xl:px-10 py-3 xl:py-2 text-base font-semibold z-50 top-5 sticky sticky"
        style="background-color:#b7936e; font-family:'Montserrat',sans-serif;">

    <nav class="hidden sm:flex justify-between items-center">
        <a href="https://www.samaidistillery.com/" class="link text-[#4a2e10] hover:text-white transition-colors duration-200">
            About Samai
        </a>
        <a href="/samai-rum-map" class="link text-[#4a2e10] hover:text-white transition-colors duration-200">
            Samai Rum Map
        </a>
    </nav>

    <div class="flex sm:hidden justify-between items-center">
        <button id="burger" class="flex flex-col gap-1.5 bg-transparent border-0 cursor-pointer p-1" aria-label="Toggle menu">
            <span class="block w-5 h-0.5 bg-[#4a2e10] rounded"></span>
            <span class="block w-5 h-0.5 bg-[#4a2e10] rounded"></span>
            <span class="block w-5 h-0.5 bg-[#4a2e10] rounded"></span>
        </button>
    </div>

    <ul id="mobileMenu" class="sm:hidden hidden flex-col list-none mt-2 border-t border-white/20 pt-2 gap-2">
        <li><a href="https://www.samaidistillery.com/" class="link block text-[#4a2e10] font-semibold py-1">About Samai</a></li>
        <li><a href="/samai-rum-map" class="link block text-[#4a2e10] font-semibold py-1">Samai Rum Map</a></li>
    </ul>

</header>

<script>
  $('#burger').click(function() {
    $('#mobileMenu').toggleClass('hidden').toggleClass('flex');
  });
  $('.link').click(function() {
    $('.link').css('color', '');
    $(this).css('color', 'white');
  });
</script>

</body>
</html>