<?php

/**
 * Template Name: Poster Presentation
 */
get_header();
?>

<main class="min-h-screen bg-white">
    <section class="lg:py-12"
        style="background-image: url('<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/banner1.jpg');background-size: cover;background-position: center;">
        <div class="p-4 py-10">


            <div class="flex flex-col items-center justify-center gap-2">
                <div class="text-md uppercase text-white text-center">
                    kongu pedicon
                </div>
                <div class="text-2xl uppercase lg:text-3xl font-bold text-white text-center">
                    E-poster <br>
                    Presentation
                </div>
            </div>

        </div>
    </section>

    <section class="max-md:hidden">
        <div class="px-4 sm:px-6 py-2 md:px-10 lg:px-12 xl:px-16">
            <div class="breadcrumbs text-sm">
                <ul class="flex justify-start">
                    <li><a href="<?php echo home_url(); ?>" class="text-[#252C32]">Home</a></li>
                    <!-- <li><a href="<?php echo home_url(); ?>/poster-presentation" class="text-[#252C32]">Workshops & Poster Presentation</a></li> -->
                    <li class="text-blue"> E-poster Presentation</li>
                </ul>
            </div>
        </div>
    </section>








    <section class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:p-16  !pt-10">
        <div class="grid md:grid-cols-2 gap-8">
            <?php if (have_rows('resource_boxes')) : ?>
                <?php while (have_rows('resource_boxes')) : the_row();
                    $title = get_sub_field('title');
                    $file_link = get_sub_field('file_link');
                    $image = get_sub_field('image');
                ?>
                    <div class="flex flex-col rounded-lg overflow-hidden">
                        <div class="bg-gray-200 h-72 w-full flex justify-center items-center overflow-hidden">
                            <?php if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?: $title); ?>" class="object-cover w-full h-full">
                            <?php endif; ?>
                        </div>

                        <div class="flex justify-between items-center gap-4 bg-[#F8F9FB] p-4 border-l border-b border-r border-[#DDE4F3] rounded-b-lg">
                            <div class="text-blue font-medium text-sm lg:text-md truncate">
                                <?php echo esc_html($title); ?>
                            </div>
                            <?php if ($file_link): ?>
                                <div class="text-dark text-sm">
                                    <a href="<?php echo esc_url($file_link); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8" viewBox="0 0 53 53" fill="none">
                                            <circle cx="26.5" cy="26.5" r="26.5" fill="#FEC02F" />
                                            <path d="M15 36.3621C15 37.1943 15.3306 37.9924 15.9191 38.5809C16.5076 39.1694 17.3057 39.5 18.1379 39.5H36.069C36.9012 39.5 37.6993 39.1694 38.2878 38.5809C38.8763 37.9924 39.2069 37.1943 39.2069 36.3621V31.431H36.5172V36.3621C36.5172 36.481 36.47 36.595 36.3859 36.679C36.3019 36.7631 36.1879 36.8103 36.069 36.8103H18.1379C18.019 36.8103 17.905 36.7631 17.821 36.679C17.7369 36.595 17.6897 36.481 17.6897 36.3621V31.431H15V36.3621Z" fill="black" />
                                            <path d="M25.7594 13.5V27.7372L21.7249 23.7028L19.8242 25.6034L26.1539 31.9331C26.406 32.1849 26.7478 32.3264 27.1042 32.3264C27.4606 32.3264 27.8024 32.1849 28.0546 31.9331L34.3842 25.6034L32.4835 23.7028L28.449 27.7372V13.5H25.7594Z" fill="black" />
                                        </svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>


    <!-- <section class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:p-16 !pt-0 max-w-7xl mx-auto">
        <div class="grid sm:grid-cols-2 md:grid-cols-3">

            <div class="flex flex-col gap-4 justify-center items-center border border-[#D5D8DA] rounded-lg px-4 py-6">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14" viewBox="0 0 108 108" fill="none">
                        <circle cx="54" cy="54" r="54" fill="#F8F9FB" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M50.8625 22C48.8923 22 47.2933 23.599 47.2933 25.5691V26.9897C36.5253 29.3953 27.9519 37.7148 24.9221 48.4116H23.7371C21.767 48.4116 20.168 50.0106 20.168 51.9807V57.6914C20.168 59.6615 21.767 61.2605 23.7371 61.2605H29.4478C31.4179 61.2605 33.0169 59.6615 33.0169 57.6914V51.9807C33.0169 50.0106 31.4179 48.4116 29.4478 48.4116H29.4014C32.1854 40.0562 38.9314 33.6104 47.2973 31.3974C47.3579 33.3141 48.932 34.8488 50.8628 34.8488H56.5735C58.508 34.8488 60.082 33.3104 60.1426 31.3938C68.9513 33.7066 75.9397 40.6342 78.4314 49.1253H77.9888C76.0187 49.1253 74.4197 50.7243 74.4197 52.6944V58.4051C74.4197 60.3752 76.0187 61.9742 77.9888 61.9742H83.6995C85.6697 61.9742 87.2687 60.3752 87.2687 58.4051V52.6944C87.2687 50.7243 85.6697 49.1253 83.6995 49.1253H82.8679C80.1946 38.2996 71.3433 29.4769 60.1431 26.9861V25.5691C60.1431 23.599 58.5441 22 56.5739 22H50.8625ZM51.5763 30.566V26.283H55.8593V30.566H51.5763ZM24.4501 52.6951V56.9781H28.7331V52.6951H24.4501ZM78.7015 53.409V57.692H82.9846V53.409H78.7015ZM58.9855 78.3934L63.861 85.5318H43.552L48.3597 78.3934H58.9855ZM66.3452 60.937L58.8642 75.5381H48.4781L41.0899 60.9397L52.2902 43.9009V57.157C49.8274 57.7923 48.0072 60.0266 48.0072 62.6892C48.0072 65.8443 50.5627 68.3999 53.7178 68.3999C56.873 68.3999 59.4285 65.8443 59.4285 62.6892C59.4285 60.0266 57.6082 57.7923 55.1455 57.157V43.9009L66.3452 60.937ZM53.7177 59.8342C52.1401 59.8342 50.8624 61.1119 50.8624 62.6895C50.8624 64.2671 52.1401 65.5448 53.7177 65.5448C55.2954 65.5448 56.5731 64.2671 56.5731 62.6895C56.5731 61.1119 55.2954 59.8342 53.7177 59.8342Z" fill="#004C97" />
                    </svg>
                </div>
                <div class="text-md">Design Specification for E-poster </div>
                <div>
                    <a href="" class="flex justify-center items-center w-fit gap-2 bg-[#FEC02F] rounded-md text-black px-4 py-2 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3" viewBox="0 0 25 26" fill="none">
                            <path d="M0.5 22.8621C0.5 23.6943 0.830603 24.4924 1.41908 25.0809C2.00756 25.6694 2.8057 26 3.63793 26H21.569C22.4012 26 23.1993 25.6694 23.7878 25.0809C24.3763 24.4924 24.7069 23.6943 24.7069 22.8621V17.931H22.0172V22.8621C22.0172 22.981 21.97 23.095 21.8859 23.179C21.8019 23.2631 21.6879 23.3103 21.569 23.3103H3.63793C3.51904 23.3103 3.40502 23.2631 3.32095 23.179C3.23688 23.095 3.18966 22.981 3.18966 22.8621V17.931H0.5V22.8621Z" fill="black"></path>
                            <path d="M11.2584 0V14.2372L7.22393 10.2028L5.32324 12.1034L11.6529 18.4331C11.9051 18.6849 12.2469 18.8264 12.6032 18.8264C12.9596 18.8264 13.3014 18.6849 13.5536 18.4331L19.8832 12.1034L17.9826 10.2028L13.9481 14.2372V0H11.2584Z" fill="black"></path>
                        </svg>
                        <span>Download Now</span>
                    </a>
                </div>
            </div>

        </div>
    </section> -->

    <section class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:p-16 !pt-0 max-w-7xl mx-auto">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php if (have_rows('eposter_boxes')) : ?>
            <?php while (have_rows('eposter_boxes')) : the_row();
                $icon_svg = get_sub_field('icon_svg');
                $title = get_sub_field('title');
                $download_link = get_sub_field('download_link');
            ?>
                <div class="flex flex-col gap-4 justify-center items-center border border-[#D5D8DA] rounded-lg px-4 py-6 text-center">
                    <div>
                        <?php if ($icon_svg) echo $icon_svg; ?>
                    </div>
                    <div class="text-md"><?php echo esc_html($title); ?></div>
                    <?php if ($download_link): ?>
                        <div>
                            <a href="<?php echo esc_url($download_link); ?>" class="flex justify-center items-center w-fit gap-2 bg-[#FEC02F] rounded-md text-black px-4 py-2 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3" viewBox="0 0 25 26" fill="none">
                                    <path d="M0.5 22.8621C0.5 23.6943 0.830603 24.4924 1.41908 25.0809C2.00756 25.6694 2.8057 26 3.63793 26H21.569C22.4012 26 23.1993 25.6694 23.7878 25.0809C24.3763 24.4924 24.7069 23.6943 24.7069 22.8621V17.931H22.0172V22.8621C22.0172 22.981 21.97 23.095 21.8859 23.179C21.8019 23.2631 21.6879 23.3103 21.569 23.3103H3.63793C3.51904 23.3103 3.40502 23.2631 3.32095 23.179C3.23688 23.095 3.18966 22.981 3.18966 22.8621V17.931H0.5V22.8621Z" fill="black"></path>
                                    <path d="M11.2584 0V14.2372L7.22393 10.2028L5.32324 12.1034L11.6529 18.4331C11.9051 18.6849 12.2469 18.8264 12.6032 18.8264C12.9596 18.8264 13.3014 18.6849 13.5536 18.4331L19.8832 12.1034L17.9826 10.2028L13.9481 14.2372V0H11.2584Z" fill="black"></path>
                                </svg>
                                <span>Download Now</span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>



    <section class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:p-16 !pt-0">
        <div class="grid md:grid-cols-[auto_280px] gap-8">
            <div>
                <div class="rounded-xl overflow-hidden h-full">
                    <img class="rounded-xl aspect-video w-full object-cover" src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/2025/06/paper-presentation.jpg" alt="">
                </div>
            </div>


            <div class="bg-blue text-white rounded-lg text-center p-6 lg:p-8 h-full flex flex-col justify-center">
                <div class="text-xl font-semibold uppercase mb-6">Timeline</div>

                <div class="divide-y divide-[#FFFFFF4D] space-y-6">
                    <div class="space-y-2 text-center pb-6">
                        <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10" viewBox="0 0 77 66" fill="none">
                                <path d="M17.6367 13.4928L27.9249 14.9625" stroke="white" stroke-width="2" />
                                <path d="M8.08356 1L16.902 6.14408C17.8818 6.87895 19.5475 9.23053 18.3717 12.7579C18.3717 12.7579 9.5533 30.6397 5.14408 39.9481C4.89913 40.438 3.52737 41.4178 0 41.4178" stroke="white" stroke-width="2" />
                                <path d="M43.3581 11.2886L60.9949 15.6978H61.7298L69.8134 42.1531L60.2601 45.8274L37.4791 24.5162L30.8653 28.1906L26.4561 30.3952L22.7817 29.6603L22.0469 28.1906L22.7817 24.5162L27.191 20.8419L34.5396 14.9629L38.9489 12.0234L43.3581 11.2886Z" fill="#D2D180" />
                                <path d="M5.14258 39.2131L31.5979 64.1987C33.0676 65.6684 35.7131 65.0805 37.4768 62.7289" stroke="white" stroke-width="2" />
                                <path d="M30.1309 51.7058L39.6842 60.5242C41.8888 61.994 45.1222 62.141 46.298 59.7894" stroke="white" stroke-width="2" />
                                <path d="M36.7441 46.5618L47.7672 56.8499C50.7067 59.0545 53.2052 59.0545 54.381 56.1151" stroke="white" stroke-width="2" />
                                <path d="M43.3574 41.4178L56.585 53.9106C60.994 55.3803 64.8154 54.4985 62.4638 48.0316C62.2959 47.5698 45.562 32.3545 37.4784 24.5159L28.66 29.6599C25.9655 30.8847 19.1068 31.1295 22.781 24.5159L37.4784 12.758C38.948 11.288 41.8875 11.2881 44.8269 12.0231L51.4408 13.4928" stroke="white" stroke-width="2" />
                                <path d="M72.0168 6.1438L63.1984 10.553C62.2185 11.0429 60.5528 12.7576 61.7286 15.6971L70.547 43.6221C71.2819 44.6019 73.3395 46.2676 75.6911 45.0919" stroke="white" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="text-sm">Last date for acceptance
                            of research work</div>
                        <div class="text-md font-medium">15th July 2025</div>
                    </div>

                    <div class="space-y-2 text-center pb-6">
                        <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10" viewBox="0 0 77 66" fill="none">
                                <path d="M17.6367 13.4928L27.9249 14.9625" stroke="white" stroke-width="2" />
                                <path d="M8.08356 1L16.902 6.14408C17.8818 6.87895 19.5475 9.23053 18.3717 12.7579C18.3717 12.7579 9.5533 30.6397 5.14408 39.9481C4.89913 40.438 3.52737 41.4178 0 41.4178" stroke="white" stroke-width="2" />
                                <path d="M43.3581 11.2886L60.9949 15.6978H61.7298L69.8134 42.1531L60.2601 45.8274L37.4791 24.5162L30.8653 28.1906L26.4561 30.3952L22.7817 29.6603L22.0469 28.1906L22.7817 24.5162L27.191 20.8419L34.5396 14.9629L38.9489 12.0234L43.3581 11.2886Z" fill="#D2D180" />
                                <path d="M5.14258 39.2131L31.5979 64.1987C33.0676 65.6684 35.7131 65.0805 37.4768 62.7289" stroke="white" stroke-width="2" />
                                <path d="M30.1309 51.7058L39.6842 60.5242C41.8888 61.994 45.1222 62.141 46.298 59.7894" stroke="white" stroke-width="2" />
                                <path d="M36.7441 46.5618L47.7672 56.8499C50.7067 59.0545 53.2052 59.0545 54.381 56.1151" stroke="white" stroke-width="2" />
                                <path d="M43.3574 41.4178L56.585 53.9106C60.994 55.3803 64.8154 54.4985 62.4638 48.0316C62.2959 47.5698 45.562 32.3545 37.4784 24.5159L28.66 29.6599C25.9655 30.8847 19.1068 31.1295 22.781 24.5159L37.4784 12.758C38.948 11.288 41.8875 11.2881 44.8269 12.0231L51.4408 13.4928" stroke="white" stroke-width="2" />
                                <path d="M72.0168 6.1438L63.1984 10.553C62.2185 11.0429 60.5528 12.7576 61.7286 15.6971L70.547 43.6221C71.2819 44.6019 73.3395 46.2676 75.6911 45.0919" stroke="white" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="text-sm">Announcement of shortlisted papers</div>
                        <div class="text-md font-medium">2-3 weeks prior to
                            conference</div>
                    </div>


                    <div class="space-y-2 text-center">
                        <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10" viewBox="0 0 77 66" fill="none">
                                <path d="M17.6367 13.4928L27.9249 14.9625" stroke="white" stroke-width="2" />
                                <path d="M8.08356 1L16.902 6.14408C17.8818 6.87895 19.5475 9.23053 18.3717 12.7579C18.3717 12.7579 9.5533 30.6397 5.14408 39.9481C4.89913 40.438 3.52737 41.4178 0 41.4178" stroke="white" stroke-width="2" />
                                <path d="M43.3581 11.2886L60.9949 15.6978H61.7298L69.8134 42.1531L60.2601 45.8274L37.4791 24.5162L30.8653 28.1906L26.4561 30.3952L22.7817 29.6603L22.0469 28.1906L22.7817 24.5162L27.191 20.8419L34.5396 14.9629L38.9489 12.0234L43.3581 11.2886Z" fill="#D2D180" />
                                <path d="M5.14258 39.2131L31.5979 64.1987C33.0676 65.6684 35.7131 65.0805 37.4768 62.7289" stroke="white" stroke-width="2" />
                                <path d="M30.1309 51.7058L39.6842 60.5242C41.8888 61.994 45.1222 62.141 46.298 59.7894" stroke="white" stroke-width="2" />
                                <path d="M36.7441 46.5618L47.7672 56.8499C50.7067 59.0545 53.2052 59.0545 54.381 56.1151" stroke="white" stroke-width="2" />
                                <path d="M43.3574 41.4178L56.585 53.9106C60.994 55.3803 64.8154 54.4985 62.4638 48.0316C62.2959 47.5698 45.562 32.3545 37.4784 24.5159L28.66 29.6599C25.9655 30.8847 19.1068 31.1295 22.781 24.5159L37.4784 12.758C38.948 11.288 41.8875 11.2881 44.8269 12.0231L51.4408 13.4928" stroke="white" stroke-width="2" />
                                <path d="M72.0168 6.1438L63.1984 10.553C62.2185 11.0429 60.5528 12.7576 61.7286 15.6971L70.547 43.6221C71.2819 44.6019 73.3395 46.2676 75.6911 45.0919" stroke="white" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="text-sm">Submission of PowerPoint
                            presentation</div>
                        <div class="text-md font-medium">At least 3 days before the
                            start of the conference</div>
                    </div>
                </div>

            </div>

        </div>
    </section>








</main>

<?php get_footer(); ?>