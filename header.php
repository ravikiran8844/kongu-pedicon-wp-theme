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
        <div class="absolute lg:hidden" x-data="{mobileMenuOpen: false}">
          <div class="relative">
            <button
              id="mobileMenuBtn"
              @click="mobileMenuOpen = !mobileMenuOpen"
              class="btn btn-ghost btn-circle !bg-white"
              aria-label="Toggle Menu">
              <template x-if="mobileMenuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6">
                  <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </template>

              <template x-if="!mobileMenuOpen">
                <svg class="h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </template>


            </button>

            <ul x-show="mobileMenuOpen" x-cloak @click.away="mobileMenuOpen = false"
              id="mobileMenu"
              class="bg-white rounded-box z-50 mt-4 w-64 p-4 shadow space-y-3 absolute left-0 top-full text-sm text-gray-800">

              <li>
                <a
                  target="_blank"
                  href="https://wa.me/918220350233?text=START%20REGISTRATION"
                  class="block bg-red-600 px-4 py-3 rounded text-white hover:bg-red-700 transition uppercase w-fit">Register Now</a>
              </li>

              <?php
              wp_nav_menu(array(
                'theme_location' => 'top-links',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new Mobile_Dropdown_Walker(),
                'fallback_cb' => false
              ));
              ?>
            </ul>
          </div>
        </div>

        <div class="w-full flex justify-center items-center">
          <a href="<?php echo site_url(); ?>">
            <img

              src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/2025/05/header-logo.png"
              class="h-10 min-[360px]:h-12 sm:h-14 w-auto md:h-16"
              alt="Logo" />
          </a>
        </div>
        <div class="absolute hidden lg:block lg:pr-16 end-0">
          <a
            target="_blank"
            href="https://wa.me/918220350233?text=START%20REGISTRATION"
            class="bg-red-600 px-6 py-3 rounded text-white hover:bg-red-700 transition">Register Now</a>
        </div>

      </div>

      <nav class="bg-blue text-white max-lg:hidden">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'top-links',
          'container' => false,
          'menu_class' => 'flex justify-center items-center py-3 text-sm gap-5 text-md px-4 sm:px-6 md:px-10 lg:px-12 xl:px-16',
          'fallback_cb' => false,
          'walker' => new Custom_Dropdown_Walker()
        ));
        ?>
      </nav>


      <!-- <div class="bg-blue text-white max-lg:hidden">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'top-links',
          'container' => 'nav',
          'container_class' => 'flex justify-center items-center py-3 text-sm gap-10 text-md px-4 sm:px-6 md:px-10 lg:px-12 xl:px-16',
          'menu_class' => 'flex gap-5',
          'link_before' => '<span class="uppercase">',
          'link_after'  => '</span>',
          'fallback_cb' => false
        ));
        ?>
      </div> -->
    </div>
  </header>



  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const toggles = document.querySelectorAll(".dropdown-toggle");

      toggles.forEach(toggle => {
        toggle.addEventListener("click", function(e) {
          const parent = toggle.parentElement;
          const submenu = parent.querySelector(".dropdown-menu");
          const icon = toggle.querySelector(".caret-icon");

          if (submenu) {
            e.preventDefault(); // Prevent only if there's a submenu

            // Close others
            document.querySelectorAll(".dropdown-menu").forEach(menu => {
              if (menu !== submenu) menu.classList.add("hidden");
            });
            document.querySelectorAll(".caret-icon").forEach(i => {
              if (i !== icon) i.classList.remove("rotate-180");
            });

            // Toggle current
            submenu.classList.toggle("hidden");
            icon?.classList.toggle("rotate-180");
          }
          // Else: allow normal anchor click to proceed
        });
      });

      // Optional: Click outside to close dropdown
      document.addEventListener("click", function(e) {
        if (!e.target.closest(".dropdown-toggle")) {
          document.querySelectorAll(".dropdown-menu").forEach(menu => menu.classList.add("hidden"));
          document.querySelectorAll(".caret-icon").forEach(i => i.classList.remove("rotate-180"));
        }
      });
    });
  </script>


  <!-- <script>
  document.addEventListener("DOMContentLoaded", () => {
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    // Toggle full mobile menu
    mobileMenuBtn?.addEventListener("click", () => {
      mobileMenu?.classList.toggle("hidden");
    });

  });
</script> -->