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
    <div class="px-4 sm:px-6 py-4 md:px-10 lg:px-12 xl:px-16 bg-white shadow-sm">
        <div class="text-blue text-2xl font-bold text-center">Committee Members</div>
    </div>



    <?php
    $tabs = [];

    if (have_rows('committee_sections')) :
        while (have_rows('committee_sections')) : the_row();
            $section_id    = get_sub_field('section_id');
            $section_label = get_sub_field('section_label');
            $svg_icon      = get_sub_field('svg_icon'); // ✅ FIXED

            $members = get_sub_field('members') ?: [];
            $member_list = [];

            foreach ($members as $member) {
                $member_list[] = [
                    'name' => $member['name'],
                    'title' => $member['title'],
                    'img' => $member['image']
                ];
            }

            $tabs[] = [
                'id' => $section_id,
                'label' => $section_label,
                'svg' => $svg_icon, // ✅ Now this is defined
                'members' => $member_list
            ];
        endwhile;
    endif;
    ?>


    <!-- Alpine Section -->
    <section
        x-data='{
        tab: "<?php echo esc_js($tabs[0]['id'] ?? ''); ?>",
        tabs: <?php echo json_encode($tabs); ?>
    }'
        class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:p-16">
        <div class="text-gray-800">
            <div class="grid lg:grid-cols-[300px_auto] gap-10">

                <!-- Mobile Dropdown -->
                <div class="lg:hidden mb-4">
                    <select x-model="tab" class="w-full border border-gray-300 rounded-2xl p-2">
                        <template x-for="item in tabs" :key="item.id">
                            <option :value="item.id" x-text="item.label"></option>
                        </template>
                    </select>
                </div>

                <!-- Sidebar Tabs -->
                <div class="max-lg:hidden">
                    <nav class="flex flex-col gap-2 bg-white border border-gray-300 rounded-2xl p-4">
                        <template x-for="item in tabs" :key="item.id">
                            <button
                                class="text-left px-2 py-1 rounded-lg text-sm w-full hover:bg-blue-50 flex gap-1 items-center"
                                :class="tab === item.id ? 'bg-blue-100 text-blue-700 font-medium' : 'text-gray-800'"
                                @click="tab = item.id">
                                <span x-html="item.svg"></span>
                                <span x-text="item.label"></span>
                            </button>
                        </template>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="w-full">
                    <template x-for="section in tabs" :key="section.id">
                        <div x-show="tab === section.id" x-cloak>

                            <!-- ✅ Tab Label -->
                            <h2 class="text-xl font-semibold text-black mb-3" x-text="section.label"></h2>

                            <hr class="text-[#D5D8DA] mb-5">

                            <!-- ✅ Members Grid -->
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                <template x-for="person in section.members" :key="person.name">
                                    <div class="text-center space-y-1">
                                        <img :src="person.img" alt="user" class="max-w-32 lg:max-h-48 mx-auto">
                                        <div class="text-red-600 font-medium text-sm" x-text="person.name"></div>
                                        <div class="text-gray-700 text-sm" x-text="person.title"></div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>


            </div>
        </div>
    </section>





</main>

<?php get_footer(); ?>