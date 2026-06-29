<?php
/* Template Name: Landing Page */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            navy: '#3a3744',
            navydark: '#2e2b37',
            sand: '#c9a876',
            sanddark: '#b08e5e',
          },
          fontFamily: {
            script: ['"Dancing Script"', 'cursive'],
            sans: ['Inter', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="font-sans m-0">

  <div class="relative w-full min-h-screen flex flex-col bg-navy overflow-hidden">

    <!-- Top nav -->
    <nav class="relative z-20 flex justify-center pt-6 px-6 shrink-0">
      <div class="bg-sand rounded-full px-10 py-3 flex items-center gap-10 text-navydark font-semibold text-sm">
        <a href="/about-samai/" class="hover:opacity-70 transition-opacity">About Samai</a>
        <a href="/samai-portfolio/" class="hover:opacity-70 transition-opacity">Samai Portfolio</a>
        <a href="/rum-map/" class="text-white/90 hover:opacity-70 transition-opacity">Samai Rum Map</a>
        <a href="/where-to-buy/" class="hover:opacity-70 transition-opacity">Where to Buy</a>
        <a href="/contact-us/" class="hover:opacity-70 transition-opacity">Contact Us</a>
      </div>
    </nav>

    <!-- Map area -->
    <div class="relative w-full flex-1">

      <!-- Cambodia silhouette placeholder. Replace with your exported Canva map image when ready. -->
      <svg viewBox="0 0 400 500" class="absolute top-1/2 left-[36%] -translate-x-1/2 -translate-y-1/2 h-[85%] w-auto opacity-90" preserveAspectRatio="xMidYMid meet">
        <path d="M150 40 L180 30 L210 45 L230 80 L260 100 L290 130 L300 170 L290 210 L300 250 L320 280 L310 320 L290 350 L300 380 L280 410 L250 440 L220 450 L200 470 L180 450 L160 430 L140 440 L110 420 L90 430 L70 410 L80 380 L60 360 L70 330 L50 300 L60 270 L40 240 L55 200 L45 160 L70 130 L90 100 L110 70 L130 50 Z"
          fill="#2e2b37" stroke="#46424f" stroke-width="2"/>
      </svg>

      <!-- City pins -->
      <a href="/rum-map/siem-reap/" class="absolute z-10 flex flex-col items-center group" style="top:26%; left:33%; transform: translate(-50%, -50%);">
        <span class="font-script text-white text-2xl mb-1 -rotate-2">Siem Reap</span>
        <span class="w-9 h-9 rounded-full bg-sand border-2 border-white/70 group-hover:scale-110 transition-transform"></span>
      </a>

      <a href="/rum-map/battambang/" class="absolute z-10 flex flex-col items-center group" style="top:36%; left:23%; transform: translate(-50%, -50%);">
        <span class="w-7 h-7 rounded-full bg-sand border-2 border-white/70 group-hover:scale-110 transition-transform mb-1"></span>
        <span class="font-script text-white text-xl -rotate-1">Battambang</span>
      </a>

      <a href="/rum-map/phnom-penh/" class="absolute z-10 flex flex-col items-center group" style="top:58%; left:48%; transform: translate(-50%, -50%);">
        <span class="font-script text-white text-2xl mb-2">Phnom Penh</span>
        <span class="flex items-center gap-1 group-hover:scale-110 transition-transform">
          <span class="w-5 h-7 rounded-full border-2 border-sand"></span>
          <span class="w-5 h-7 rounded-full border-2 border-sand"></span>
          <span class="w-5 h-7 rounded-full border-2 border-sand"></span>
        </span>
        <span class="w-2 h-2 rounded-full bg-sand mt-1"></span>
      </a>

      <a href="/rum-map/koh-rong/" class="absolute z-10 flex flex-col items-center group" style="top:79%; left:13%; transform: translate(-50%, -50%);">
        <span class="font-script text-white text-lg mb-1">Koh Rong</span>
        <span class="w-6 h-6 rounded-full bg-sand border-2 border-white/70 group-hover:scale-110 transition-transform"></span>
      </a>

      <a href="/rum-map/kampot/" class="absolute z-10 flex flex-col items-center group" style="top:82%; left:30%; transform: translate(-50%, -50%);">
        <span class="font-script text-white text-2xl mb-1">Kampot</span>
        <span class="w-8 h-8 rounded-full bg-sand border-2 border-white/70 group-hover:scale-110 transition-transform"></span>
      </a>

      <a href="/rum-map/sihanoukville/" class="absolute z-10 flex flex-col items-center group" style="top:91%; left:19%; transform: translate(-50%, -50%);">
        <span class="w-8 h-8 rounded-full bg-sand border-2 border-white/70 group-hover:scale-110 transition-transform mb-1"></span>
        <span class="font-script text-white text-xl">Sihanoukville</span>
      </a>

      <!-- Logo / brand panel -->
      <div class="absolute z-10 text-right" style="top:8%; right:5%;">
        <p class="text-sand text-xs tracking-widest mb-1">សម័យ</p>
        <h1 class="text-white text-4xl font-bold tracking-wide mb-1">SAMAI</h1>
        <div class="flex items-center justify-end gap-4 text-[10px] text-sand tracking-widest mb-2">
          <span>CAMBODIA</span>
          <span class="text-lg">&#9898;&#9898;&#9898;</span>
          <span>HANDCRAFTED</span>
        </div>
        <p class="text-sand text-xs tracking-widest mb-4">- RUM DISTILLERY -</p>
        <p class="text-sand text-xs font-semibold tracking-wide">Journey through Cambodia</p>
        <p class="text-white text-sm font-semibold">Sip the moment. Keep the memory.</p>
        <p class="text-white/70 text-xs italic">From Cambodia, with Rum!</p>
      </div>

      <!-- Zoom controls -->
      <div class="absolute z-10 flex flex-col items-center gap-2" style="bottom:6%; right:5%;">
        <button aria-label="Compass" class="w-10 h-10 rounded-full bg-sand flex items-center justify-center text-navydark">&#10138;</button>
        <div class="flex flex-col bg-sand rounded-full overflow-hidden">
          <button aria-label="Zoom in" class="w-10 h-10 flex items-center justify-center text-navydark text-lg font-bold hover:bg-sanddark transition-colors">+</button>
          <button aria-label="Zoom out" class="w-10 h-10 flex items-center justify-center text-navydark text-lg font-bold hover:bg-sanddark transition-colors">&minus;</button>
        </div>
      </div>

    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>