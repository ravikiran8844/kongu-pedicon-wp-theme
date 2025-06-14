<?php

/**
 * Template Name: Comittee Members
 */
get_header();
?>

<main class="min-h-screen">
    <section class="lg:py-12"
        style="background-image: url('<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/banner1.jpg');background-size: cover;background-position: center;">
        <div class="p-4 py-16 lg:p-18">


            <div class="flex flex-col items-center justify-center gap-2">
                <div class="text-md uppercase text-white">
                    kongu pedicon
                </div>
                <div class="text-2xl uppercase lg:text-4xl font-bold text-white ">
                    committee members
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
    <div class="px-4 sm:px-6 py-4 md:px-10 lg:px-12 xl:px-16 bg-white">
        <div class="text-blue text-2xl font-bold text-center">Committee Members</div>
    </div>

    <section class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:p-16" x-data="{ tab: 'organising' }">
        <div class=" text-gray-800">
            <div>
                <div class="grid lg:grid-cols-[300px_auto] gap-10">

                <!-- Mobile Dropdown -->
                <div class="lg:hidden mb-4">
                    <select x-model="tab" class="w-full border border-[#D5D8DA] rounded-2xl p-2">
                        <template x-for="item in [
                            { id: 'organising', label: 'Organising Committee' },
                            { id: 'chairpersons', label: 'Organising Chairpersons' },
                            { id: 'secretaries', label: 'Organising Secretaries' },
                            { id: 'treasurers', label: 'Organising Treasurers' },
                            { id: 'patrons', label: 'Patrons' },
                            { id: 'advisors', label: 'Advisors' }
                        ]" :key="item.id">
                            <option :value="item.id" x-text="item.label"></option>
                        </template>
                    </select>
                </div>


                    <!-- Sidebar Tabs -->
                    <div class="max-lg:hidden">
                        <nav
                            class="flex flex-col gap-2 bg-white border border-[#D5D8DA] rounded-2xl overflow-hidden p-4">
                            <template x-for="item in [
                                    { id: 'organising', label: 'Organising Committee' },
                                    { id: 'chairpersons', label: 'Organising Chairpersons' },
                                    { id: 'secretaries', label: 'Organising Secretaries' },
                                    { id: 'treasurers', label: 'Organising Treasurers' },
                                    { id: 'patrons', label: 'Patrons' },
                                    { id: 'advisors', label: 'Advisors' }
                                ]" :key="item.id">
                                <button class="text-left px-2 focus:outline-none rounded-2xl cursor-pointer flex items-center text-sm"
                                    :class="tab === item.id ? 'bg-blue-100 py-2 font-medium text-blue-700' : ''"
                                    @click="tab = item.id">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.22118 9.4433C8.45506 9.4433 7.72032 9.74764 7.17859 10.2894C6.63686 10.8311 6.33252 11.5658 6.33252 12.332V18.1093C6.33252 18.8754 6.63686 19.6101 7.17859 20.1519C7.72032 20.6936 8.45506 20.9979 9.22118 20.9979V12.332H23.6645C23.6645 11.5658 23.3601 10.8311 22.8184 10.2894C22.2767 9.74764 21.5419 9.4433 20.7758 9.4433H9.22118ZM12.1098 18.1093C12.1098 17.3432 12.4142 16.6084 12.9559 16.0667C13.4976 15.525 14.2324 15.2206 14.9985 15.2206H26.5531C27.3192 15.2206 28.054 15.525 28.5957 16.0667C29.1374 16.6084 29.4418 17.3432 29.4418 18.1093V23.8866C29.4418 24.6527 29.1374 25.3875 28.5957 25.9292C28.054 26.4709 27.3192 26.7752 26.5531 26.7752H14.9985C14.2324 26.7752 13.4976 26.4709 12.9559 25.9292C12.4142 25.3875 12.1098 24.6527 12.1098 23.8866V18.1093ZM20.7758 23.8866C21.5419 23.8866 22.2767 23.5822 22.8184 23.0405C23.3601 22.4988 23.6645 21.7641 23.6645 20.9979C23.6645 20.2318 23.3601 19.4971 22.8184 18.9553C22.2767 18.4136 21.5419 18.1093 20.7758 18.1093C20.0097 18.1093 19.2749 18.4136 18.7332 18.9553C18.1915 19.4971 17.8872 20.2318 17.8872 20.9979C17.8872 21.7641 18.1915 22.4988 18.7332 23.0405C19.2749 23.5822 20.0097 23.8866 20.7758 23.8866Z"
                                            fill="#0E73F6" />
                                    </svg>
                                    <span x-text="item.label"></span>
                                </button>
                            </template>
                        </nav>
                    </div>

                    <!-- Tab Content -->
                    <div class="w-full">
                        <!-- Organising Committee -->
                        <div x-cloak x-show="tab === 'organising'"
                            class="grid grid-cols-[repeat(auto-fill,minmax(150px,1fr))] gap-6">
                            <template x-for="person in [
                                    { name: 'Dr. K. Rajendran', title: 'Convenor', img: 'https://via.placeholder.com/100' },
                                    { name: 'Dr. M. Ismail', title: 'Chief Organising Chairperson', img: 'https://via.placeholder.com/100' },
                                    { name: 'Dr. B.R. Sasikumar', title: 'Chief Organising Secretary', img: 'https://via.placeholder.com/100' },
                                    { name: 'Dr. A.R. Mullai Baalaaji', title: 'Chief Organising Treasurer', img: 'https://via.placeholder.com/100' }
                                ]" :key="person.name">
                                <div class="text-center space-y-1">
                                    <img loading="lazy"
                                        src="http://localhost/kongu/wp-content/uploads/2025/05/member1.png" alt="user"
                                        class="max-w-32 lg:max-h-48 mx-auto">
                                    <div class="text-red font-medium text-sm lg:text-md">
                                        Dr. K. Rajendran
                                    </div>
                                    <div class="text-dark text-sm">President</div>
                                </div>
                            </template>
                        </div>

                        <!-- Chairpersons -->
                        <div x-cloak x-show="tab === 'chairpersons'">
                            <p class="text-lg font-semibold">Chairpersons content goes here.</p>
                        </div>

                        <!-- Secretaries -->
                        <div x-cloak x-show="tab === 'secretaries'">
                            <p class="text-lg font-semibold">Secretaries content goes here.</p>
                        </div>

                        <!-- Treasurers -->
                        <div x-cloak x-show="tab === 'treasurers'">
                            <p class="text-lg font-semibold">Treasurers content goes here.</p>
                        </div>

                        <!-- Patrons -->
                        <div x-cloak x-show="tab === 'patrons'">
                            <p class="text-lg font-semibold">Patrons content goes here.</p>
                        </div>

                        <!-- Advisors -->
                        <div x-cloak x-show="tab === 'advisors'">
                            <p class="text-lg font-semibold">Advisors content goes here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

</main>

<?php get_footer(); ?>