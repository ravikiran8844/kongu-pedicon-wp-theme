<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <!-- Swiper CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <?php wp_head(); ?>

</head>

<body <?php body_class('bg-white text-gray-800 roboto'); ?>>

  <header class="sticky top-0 z-50">
    <div class="relative">

      <div class="navbar bg-white shadow-sm py-2 px-4 sm:px-6 md:px-10 lg:px-12 xl:px-16 relative">
        <div class="absolute lg:hidden">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle !bg-white">
              <svg
                class="w-6 h-6 text-gray-700"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-white rounded-box z-2 space-y-3 mt-4 w-64 p-2 shadow">
              <li>
                <a
                  target="_blank"
                  href="https://wa.me/918220350233?text=START%20REGISTRATION"
                  class="bg-red-600 px-4 py-3 rounded text-white hover:bg-red-700 transition uppercase w-fit">Register Now</a>
              </li>
              <li>
                <a href="<?php echo site_url(); ?>/ticket-details" class="uppercase">Registration Tariff</a>
              </li>
              <li>
                <a href="<?php echo site_url(); ?>/workshops-poster-presentation" class="uppercase">Workshops & Poster Presentation</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="w-full flex justify-center items-center">
          <a href="<?php echo site_url(); ?>">
            <!-- <img

        src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/2025/05/header-logo.png"
        class="h-10 min-[360px]:h-12 sm:h-14 w-auto md:h-16"
        alt="Logo" /> -->
          </a>
        </div>
        <div class="absolute hidden lg:block lg:pr-16 end-0">
          <a
            target="_blank"
            href="https://wa.me/918220350233?text=START%20REGISTRATION"
            class="bg-red-600 px-6 py-3 rounded text-white hover:bg-red-700 transition">Register Now</a>
        </div>

      </div>


      <div class="bg-blue text-white max-lg:hidden">
        <nav class="flex justify-center items-center py-4 gap-10 text-md px-4 sm:px-6 md:px-10 lg:px-12 xl:px-16">
          <a href="<?php echo site_url(); ?>/ticket-details" class="uppercase">Registration Tariff</a>
          <a href="<?php echo site_url(); ?>/workshops-poster-presentation" class="uppercase">Workshops & Poster Presentation</a>
        </nav>
      </div>

      <!-- <div class="navbar bg-blue  text-white shadow-sm">

            <div class="navbar-center hidden lg:flex justify-center w-full" >
              <ul class="menu menu-horizontal px-1">
              

                <li x-data="{ open: false }" class="relative" @click.away="open = false">
                  <button @click="open = !open" class="flex items-center gap-1 uppercase">
                  About
                    <svg
                      :class="{'rotate-180': open}"
                      class="w-4 h-4 transition-transform duration-200"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <ul
                    x-show="open" x-cloak
                    x-transition
                    class="absolute left-0 top-full p-2 z-50 min-w-[200px] bg-blue shadow rounded">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li>

                <li x-data="{ open: false }" class="relative" @click.away="open = false">
                  <button @click="open = !open" class="flex items-center gap-1 uppercase">
                  Conference
                    <svg
                      :class="{'rotate-180': open}"
                      class="w-4 h-4 transition-transform duration-200"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <ul
                    x-show="open" x-cloak
                    x-transition
                    class="absolute left-0 top-full p-2 z-50 min-w-[200px] bg-blue shadow rounded">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li>

                <li x-data="{ open: false }" class="relative" @click.away="open = false">
                  <button @click="open = !open" class="flex items-center gap-1 uppercase">
                  Program
                    <svg
                      :class="{'rotate-180': open}"
                      class="w-4 h-4 transition-transform duration-200"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <ul
                    x-show="open" x-cloak
                    x-transition
                    class="absolute left-0 top-full p-2 z-50 min-w-[200px] bg-blue shadow rounded">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li>

                <li x-data="{ open: false }" class="relative" @click.away="open = false">
                  <button @click="open = !open" class="flex items-center gap-1 uppercase">
                  Abstract
                    <svg
                      :class="{'rotate-180': open}"
                      class="w-4 h-4 transition-transform duration-200"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <ul
                    x-show="open" x-cloak
                    x-transition
                    class="absolute left-0 top-full p-2 z-50 min-w-[200px] bg-blue shadow rounded">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li>

                <li x-data="{ open: false }" class="relative" @click.away="open = false">
                  <button @click="open = !open" class="flex items-center gap-1 uppercase">
                  Workshop
                    <svg
                      :class="{'rotate-180': open}"
                      class="w-4 h-4 transition-transform duration-200"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <ul
                    x-show="open" x-cloak
                    x-transition
                    class="absolute left-0 top-full p-2 z-50 min-w-[200px] bg-blue shadow rounded">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li>


                <li x-data="{ open: false }" class="relative" @click.away="open = false">
                  <button @click="open = !open" class="flex items-center gap-1 uppercase">
                  Accomodaion & Travel
                    <svg
                      :class="{'rotate-180': open}"
                      class="w-4 h-4 transition-transform duration-200"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <ul
                    x-show="open" x-cloak
                    x-transition
                    class="absolute left-0 top-full p-2 z-50 min-w-[200px] bg-blue shadow rounded">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li>

                <li x-data="{ open: false }" class="relative" @click.away="open = false">
                  <button @click="open = !open" class="flex items-center gap-1 uppercase">
                  More
                    <svg
                      :class="{'rotate-180': open}"
                      class="w-4 h-4 transition-transform duration-200"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <ul
                    x-show="open" x-cloak
                    x-transition
                    class="absolute left-0 top-full p-2 z-50 min-w-[200px] bg-blue shadow rounded">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li>

              
              </ul>
            </div>



          </div> -->
    </div>
  </header>