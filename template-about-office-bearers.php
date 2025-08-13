<?php

/**
 * Template Name: Message from Office Bearers
 */
get_header();
?>

<main class="min-h-screen">
    <section class="lg:py-12"
        style="background-image: url('<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/banner1.jpg');background-size: cover;background-position: center;">
        <div class="p-4 py-10">


            <div class="flex flex-col items-center justify-center gap-2">
                <div class="text-md uppercase text-white text-center">
                    kongu pedicon
                </div>
                <div class="text-2xl uppercase lg:text-3xl font-bold text-white text-center">
                    Message from Office bearers
                </div>
            </div>
            <!-- <div class="breadcrumbs text-sm">
                <ul class="flex justify-center">
                    <li><a href="/" class="text-white">Emerald</a></li>
                    <li class="text-white">Services</li>
                </ul>
            </div> -->
        </div>
    </section>


    <section class="bg-[#F8F9FB] max-md:hidden">
        <div class="px-4 sm:px-6 py-2 md:px-10 lg:px-12 xl:px-16">
            <div class="breadcrumbs text-sm">
                <ul class="flex justify-start">
                    <li><a href="/" class="text-[#252C32]">Home</a></li>
                    <li>About Us  </li>
                    <li class="text-blue">Message from Office Bearers</li>
                </ul>
            </div>
        </div>
    </section>

    <section x-data={tab:1}>
        <div class="bg-blue text-white">
            <div class="px-4 sm:px-6 py-4 md:px-10 lg:px-12 xl:px-16">
                <div class="flex justify-center gap-4 md:gap-8 flex-wrap text-sm lg:text-base">
                    <button class="cursor-pointer" @click="tab=1" :class="{ 'text-[#FEC02F]': tab === 1 }">Hon. Secretary, IAP TNSCk</button>
                    <button class="cursor-pointer" @click="tab=2" :class="{ 'text-[#FEC02F]': tab === 2 }">Treasurer, IAP TNSC</button>
                    <button class="cursor-pointer" @click="tab=3" :class="{ 'text-[#FEC02F]': tab === 3 }">Academy Coordinator, IAP TNSC – 2025</button>
                </div>
            </div>
        </div>


        <div class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:px-16">
            <div x-show="tab === 1" x-cloak>
                <div class="grid gap-6 md:grid-cols-[30%_70%]">
                    <div>
                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/07/office-bearer1.png" alt="">
                    </div>
                    <div>
                        <p class="text-md text-gray-600">Yours in Academy service</p>
                        <h2 class="text-xl font-semibold text-gray-900">Dr. S. Narmada Ashok</h2>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">Hon. Secretary, IAP TNSC</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="3" viewBox="0 0 113 3" fill="none">
                                <path d="M0.667969 1.66663H112.668" stroke="#FEC02F" stroke-width="2" />
                            </svg>
                        </div>



                        <div class="space-y-4 text-gray-700">
                            <p><strong>Respected seniors and members of our branch,</strong></p>
                            <p>Warm greetings to you.</p>
                            <p>It is a pleasure to meet you all through the first newsletter of this year.</p>
                            <p>I thank you all for the tremendous confidence you have in me and giving me the opportunity to serve you all as the Hon. Secretary of our esteemed branch. While we stepped into the year 2025, under the able guidance and direction of Dr. K. Rajendran, President, IAP TNSC we were able to do several projects and started many Subspeciality chapters. This helped us reach out to all our members.</p>
                            <p>I really thank the President Dr. K. Rajendran, Treasurer Dr. D. Rajkumar, office bearers
                                and executive members of IAP TNSC of this year for the tremendous work they have been
                                doing for the past few months. Also, I sincerely thank the editor of our newsletter Dr. Sridevi for the tremendous efforts in bringing the newsletter. We request you to go through the guidelines for awards and papers and do submit before time which will help us to be on time to select the best.</p>

                            <p class="text-red-600 font-semibold">We have 3 important works before us.</p>


                            <div class="flex gap-2">
                                <div class="h-8 min-w-8 bg-gray-200 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 19 19" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.225 5.11436C16.5185 5.42271 16.5065 5.91063 16.1982 6.20415L7.29074 14.6833C7.13863 14.8281 6.93402 14.9046 6.72423 14.895C6.51443 14.8855 6.31761 14.7908 6.17928 14.6327L2.75335 10.7193C2.47294 10.399 2.50529 9.91196 2.82561 9.63155C3.14593 9.35114 3.63292 9.38348 3.91333 9.7038L6.8099 13.0126L15.1352 5.08752C15.4436 4.79399 15.9315 4.80601 16.225 5.11436Z" fill="black" />
                                    </svg>
                                </div>
                                <p>Conducting the State Pedicon 2025 at Coimbatore in the month of August. I am sure
                                    team Coimbatore is fully geared up to do a phenomenal work and have a list of the
                                    exciting things for us in the pipeline. We from the State are ready to give our full support
                                    to them and to ensure absolute comfort and a feast of academics in the upcoming
                                    Pedicon. We also encourage postgraduates, professors and practitioners to share you
                                    research with us. This knowledge sharing will be pave way for us to grow together in our
                                    practice.</p>
                            </div>

                            <div class="flex gap-2">
                                <div class="h-8 min-w-8 bg-gray-200 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 19 19" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.225 5.11436C16.5185 5.42271 16.5065 5.91063 16.1982 6.20415L7.29074 14.6833C7.13863 14.8281 6.93402 14.9046 6.72423 14.895C6.51443 14.8855 6.31761 14.7908 6.17928 14.6327L2.75335 10.7193C2.47294 10.399 2.50529 9.91196 2.82561 9.63155C3.14593 9.35114 3.63292 9.38348 3.91333 9.7038L6.8099 13.0126L15.1352 5.08752C15.4436 4.79399 15.9315 4.80601 16.225 5.11436Z" fill="black" />
                                    </svg>
                                </div>
                                <p>The bidding for the National Pedicon 2027. We are making earnest efforts to bring the
                                    same to our State. Tamil Nadu has so many academicians, institutes and medical
                                    colleges. The postgraduates across the nation are looking at us for the best academics.
                                    However, we have not hosted the National Pedicon since 2004 and it is high time that we
                                    do organize one. There is a tremendous competition at the national level, but we hope we
                                    will win the bidding process.</p>
                            </div>

                            <div class="flex gap-2">
                                <div class="h-8 min-w-8 bg-gray-200 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 19 19" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.225 5.11436C16.5185 5.42271 16.5065 5.91063 16.1982 6.20415L7.29074 14.6833C7.13863 14.8281 6.93402 14.9046 6.72423 14.895C6.51443 14.8855 6.31761 14.7908 6.17928 14.6327L2.75335 10.7193C2.47294 10.399 2.50529 9.91196 2.82561 9.63155C3.14593 9.35114 3.63292 9.38348 3.91333 9.7038L6.8099 13.0126L15.1352 5.08752C15.4436 4.79399 15.9315 4.80601 16.225 5.11436Z" fill="black" />
                                    </svg>
                                </div>
                                <p>Having a National President from our State. It has been several years since we had a
                                    President from our State. We hope Dr. M. Singaravelu who is standing for President elect
                                    2026 will get the maximum support and help from our State. There has been lot of help
                                    and support from all over the nation.</p>
                            </div>

                            <p>We are very sure that we will get the support of all of you for the above.</p>
                            <p>We also request you to share your feedback to us and looking forward to meeting you all
                                soon.</p>
                            <p>Happy academics and happy reading for you.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div x-show="tab === 2" x-cloak>
                <div class="grid gap-6 md:grid-cols-[30%_70%]">
                    <div>
                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/07/office-bearer2.png" alt="Dr. D. Rajkumar">
                    </div>
                    <div>
                        <p class="text-md text-gray-600">In service of the Academy,</p>
                        <h2 class="text-xl font-semibold text-gray-900">Dr. D. Rajkumar</h2>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">Treasurer, IAP TNSC.</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="3" viewBox="0 0 113 3" fill="none">
                                <path d="M0.667969 1.66663H112.668" stroke="#FEC02F" stroke-width="2" />
                            </svg>
                        </div>



                        <div class="space-y-4 text-gray-700">
                            <p><strong>Dear Esteemed Seniors and Dear Friends,</strong></p>
                            <p>It gives me immense pleasure to connect with you all through
                                this edition of our IAP TNSC e-bulletin. Being part of this vibrant and forward-thinking team is both an honour and a privilege.</p>

                            <p>I take this opportunity to express my sincere gratitude to our President Dr. K. Rajendran,
                                Past President Dr. S. Balasankar, President-Elect Dr. A. Somasundaram, Vice President
                                Dr. Gopal Subramoniam, Hon. Secretary Dr. S. Narmada and Academy coordinator
                                Dr. Tiroumourougane Serane. V for their consistent encouragement and guidance. A special
                                word of appreciation to Dr. Sridevi A Naaraayan, our Editor, for her dedication in promptly
                                bringing this newsletter to life.</p>

                            <p>Over the past year, IAP TNSC has witnessed healthy financial growth, largely due to the
                                success of our affiliate programs that continue to engage and attract large audiences.</p>

                            <p>At the same time, we must now turn our focus to strengthening our membership. Building
                                a robust membership base—particularly from teaching institutions—can significantly enhance
                                our resources. I humbly request each of you to encourage your residents and postgraduates to join IAP and ensure their transition to Life Members upon course completion.</p>


                            <p>Sustained financial growth will enable us to host high-quality academic events that remain
                                independent and unbiased.</p>

                            <p>I also warmly invite you to Kongu Pedicon 2025, being held in Coimbatore—a celebration
                                of academic excellence under the leadership of IAP Coimbatore and the aegis of IAP Tamil
                                Nadu. Your presence will make it even more special.</p>
                            <p><b>Thank you all for your trust, support, and encouragement.</b></p>
                        </div>
                    </div>

                </div>
            </div>
            <div x-show="tab === 3" x-cloak>
                <div class="grid gap-6 md:grid-cols-[30%_70%]">
                    <div>
                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/07/office-bearer3.png" alt="Dr. V. Tiroumourougane Serane.">
                    </div>
                    <div>
                        <p class="text-md text-gray-600">Yours in Academic Service,</p>
                        <h2 class="text-xl font-semibold text-gray-900">Dr. V. Tiroumourougane Serane.</h2>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">Academy Coordinator, IAP TNSC.</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="3" viewBox="0 0 113 3" fill="none">
                                <path d="M0.667969 1.66663H112.668" stroke="#FEC02F" stroke-width="2" />
                            </svg>
                        </div>



                        <div class="space-y-4 text-gray-700">
                            <p><strong>Warm greetings to you.</strong></p>
                            <p>It is both an honour and a privilege to serve as the Academy
                                Coordinator of our esteemed organization. I extend my sincere gratitude to
                                Dr. K. Rajendran, President of IAP TNSC, for entrusting me with this responsibility and for his unwavering support.</p>

                            <p>Academy of Pediatric Sciences (APS – IAP TNSC), a visionary initiative of
                                Dr. K. U. Suresh Balan during his presidency in 2023, has advanced the professional growth of our members. It is truly gratifying to witness its remarkable evolution and continued dedication to academic excellence. As Academy Coordinator, I take immense pride in leading the Presidential Action Plan, which encompasses a diverse array of academic initiatives designed to foster knowledge, promote collaboration, and advance pediatric care. These programs are thoughtfully curated to support postgraduate students and paediatricians across primary, secondary, and tertiary healthcare settings.</p>

                            <p>Regular virtual academic sessions—including the Postgraduate Masterclass
                                (convener
                                - Dr. M. Krithiga), ICE – Immunization Colloquiums by Experts (convener - Dr. Nanthini
                                Kumaran), P4 – Pediatric Dialogues by National Experts (convener - Dr. Ashwath
                                Duraisamy), and the Back2Basics Program spearheaded by Dr. S. Thangavelu—continue
                                to enrich our learning experience.</p>

                            <p>My sincere acknowledgment to the role of Dr. M. Singaravelu, Scientific Advisor, whose
                                relentless enthusiasm and dedication continue to inspire us. I sincerely hope that his aspirations
                                to serve as the next National President-Elect of IAP will be realized this year.</p>

                            <p>I would like to extend my heartfelt appreciation to Dr. S. Ramesh and his team for
                                successfully organizing the IAP TNSC NextGen Foundation Course for first-year postgraduates
                                at Coimbatore, Trichy, and Pondicherry. Likewise, the POCUS workshop, led by
                                Dr. P.S. Rajakumar, continues to be in high demand and remains an invaluable resource for our
                                community.</p>

                            <p>I am deeply indebted to my fellow office bearers, Dr. A. Somasundaram, President-Elect,
                                Dr. S. Balasankar, President 2024, Dr. Gopal Subramoniam, Vice President, Dr. S. Narmada,
                                Honorary Secretary, Dr. D. Rajkumar, Treasurer, Dr. P. Sudhakar, Joint Secretary (Admin), Dr.
                                A. Jayavardhana, Joint Secretary (Operations), Dr. J. Balaji, Academic Affairs Administrator, Dr.
                                Sridevi A. Naaraayan, Editor and Dr. R.V. Dhakshayani, Joint Academy Coordinator for their
                                Page 15
                                unwavering commitment and exceptional teamwork. Their dedication is instrumental in driving
                                our collective vision forward.</p>

                            <p>IAP TNSC continues to grow in stature, gaining recognition from government bodies and
                                the broader pediatric community. It is imperative that we build on this momentum—expanding
                                our presence, redefining our roles, and championing initiatives that benefit both our members
                                and society at large.</p>

                            <p>The Annals of Child Health, the official journal of IAP TNSC, is still in its formative phase.
                                I urge members to contribute their research articles, as this publication is on track to become
                                one of the few indexed state IAP journals, strengthening our academic contributions.</p>

                            <p>The One Day One Drug Digest (ODODD), our daily clinical therapeutics digest, has
                                garnered significant attention and is proving to be an invaluable resource for our members. I
                                take immense pride in serving as the managing editor of this pioneering initiative.</p>

                            <p>As we move forward, I reaffirm my commitment to upholding the legacy and expanding the
                                impact of IAP TNSC. I invite each of you to join me in our shared mission—to elevate our
                                organization, foster academic excellence, and establish IAP TNSC as a leading institution in
                                pediatric healthcare.</p>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>