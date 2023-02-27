<?php
     // There are two ways to get the menu items:
     // 1. wp_nav_menu(['theme_location' => 'primary-menu']); @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
     // 2. get_theme_menu() which is a custom function I made to get the menu items. It exist in our functions.php file. You can then loop through it and write your own markup
     $menu = get_theme_menu('primary-menu');
     ?>
<!-- Start /components/header -->
<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 w-full" aria-label="Global">
    <a href="#" class="-m-1.5 p-1.5">
      <span class="sr-only">Your Company</span>
      <img class="h-8 w-auto" src="https://static.cdnlogo.com/logos/c/18/ChatGPT_800x800.png" alt="">
    </a>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <?php foreach ($menu as $item) {
          echo '<a href="' . $item->url . '" class="text-base font-medium text-gray-700 hover:text-gray-900">' . $item->title . '</a>';
      }  ?>
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div focus="true"
      class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://static.cdnlogo.com/logos/c/18/ChatGPT_800x800.png" alt="">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <?php foreach ($menu as $item) {
                echo '<a href="' . $item->url . '" class="-m-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">' . $item->title . '</a>';
            }  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- END /components/header -->
