<?php

/**
 * Template Name: Message from Presidents
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
                Message from Presidents
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
                    <li class="text-blue"> Message from Presidents</li>
                </ul>
            </div>
        </div>
    </section>
    <section x-data={tab:1}>
        <div class="bg-blue text-white">
            <div class="px-4 sm:px-6 py-4 md:px-10 lg:px-12 xl:px-16">
                <div class="flex justify-center gap-4 md:gap-8 flex-wrap text-sm lg:text-base">
                    <button class="cursor-pointer" @click="tab=1" :class="{ 'text-[#FEC02F]': tab === 1 }">President’s Desk</button>
                    <button class="cursor-pointer" @click="tab=2" :class="{ 'text-[#FEC02F]': tab === 2 }">President Elect-2025</button>
                    <button class="cursor-pointer" @click="tab=3" :class="{ 'text-[#FEC02F]': tab === 3 }">Past President</button>
                    <button class="cursor-pointer" @click="tab=4" :class="{ 'text-[#FEC02F]': tab === 4 }">Vice-President</button>
                </div>
            </div>
        </div>


        <div class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:px-16">
            <div x-show="tab === 1" x-cloak>
                <div class="grid gap-6 md:grid-cols-[30%_70%]">
                    <div>
                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/07/member1.png" alt="">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Dr. K. Rajendran</h2>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">President, IAP TNSC</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="3" viewBox="0 0 113 3" fill="none">
                                <path d="M0.667969 1.66663H112.668" stroke="#FEC02F" stroke-width="2" />
                            </svg>
                        </div>

                        <blockquote class="text-lg italic text-gray-700 border-l-4 border-red-500 pl-4 mb-6">
                            “HEALTHY CHILDREN, BRIGHT FUTURE.”
                        </blockquote>

                        <div class="space-y-4 text-gray-700">
                            <p><strong>Dear Esteemed Members,</strong></p>
                            <p>
                                It is an honour and a privilege to connect with you through this edition of the IAP TNSC Bulletin.
                                As I step into this role, I am deeply grateful for the trust you have placed in me to lead such a
                                dynamic, passionate, and service-driven pediatric community.
                            </p>
                            <p>
                                With the theme <strong>“Future-Focused IAP TNSC: Leading the Next Wave,”</strong> our Presidential Action Plan 2025 sets forth
                                a clear and inclusive roadmap to elevate pediatric care, education, advocacy, and research across Tamil Nadu.
                            </p>
                            <p class="text-red-600 font-semibold">Our priorities are built on four fundamental pillars:</p>


                            <div class="grid lg:grid-cols-2 mt-10 gap-6">
                                <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition space-y-3">
                                    <div class="grid grid-cols-[48px_auto] gap-4 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12" viewBox="0 0 70 66" fill="none">
                                            <path d="M20.0312 39.289V35.4372V26.9631L28.5053 18.489H40.8312L49.3053 26.9631V39.289L40.8312 47.7631H28.5053L20.0312 39.289Z" fill="#FF8E8F" />
                                            <path d="M61.4861 0C60.922 0 60.466 0.455986 60.466 1.0201V2.75734H58.4381C57.874 2.75734 57.418 3.21333 57.418 3.77744C57.418 4.34156 57.874 4.79755 58.4381 4.79755H60.466V6.53376C60.466 7.09788 60.922 7.55386 61.4861 7.55386C62.0503 7.55386 62.5062 7.09788 62.5062 6.53376V4.79755H64.5342C65.0983 4.79755 65.5543 4.34156 65.5543 3.77744C65.5543 3.21333 65.0983 2.75734 64.5342 2.75734H62.5062V1.0201C62.5062 0.455986 62.0503 0 61.4861 0Z" fill="#2D2D2D" />
                                            <path d="M4.06817 5.51367C3.50405 5.51367 3.04807 5.96966 3.04807 6.53377V8.27101H1.0201C0.455986 8.27101 0 8.727 0 9.29111C0 9.85523 0.455986 10.3112 1.0201 10.3112H3.04807V12.0474C3.04807 12.6115 3.50405 13.0675 4.06817 13.0675C4.63229 13.0675 5.08827 12.6115 5.08827 12.0474V10.3112H7.11624C7.68036 10.3112 8.13634 9.85523 8.13634 9.29111C8.13634 8.727 7.68036 8.27101 7.11624 8.27101H5.08827V6.53377C5.08827 5.96966 4.63229 5.51367 4.06817 5.51367Z" fill="#2D2D2D" />
                                            <path d="M66.0672 8.271C65.503 8.271 65.0471 8.72698 65.0471 9.2911V10.302H63.8209C63.2568 10.302 62.8008 10.758 62.8008 11.3221C62.8008 11.8862 63.2568 12.3422 63.8209 12.3422H65.0471V13.3532C65.0471 13.9173 65.503 14.3733 66.0672 14.3733C66.6313 14.3733 67.0873 13.9173 67.0873 13.3532V12.3422H68.3134C68.8775 12.3422 69.3335 11.8862 69.3335 11.3221C69.3335 10.758 68.8775 10.302 68.3134 10.302H67.0873V9.2911C67.0873 8.728 66.6313 8.271 66.0672 8.271Z" fill="#2D2D2D" />
                                            <path d="M47.5458 3.05646C47.4489 2.95955 47.3346 2.88508 47.2102 2.83407C47.2092 2.83407 47.2092 2.83306 47.2082 2.83306C47.1653 2.81571 47.1214 2.81979 47.0786 2.80857C46.995 2.78613 46.9123 2.75757 46.8236 2.75757H46.8154C46.8124 2.75757 46.8103 2.75757 46.8083 2.75757H21.777C21.7719 2.75757 21.7678 2.76063 21.7627 2.76063C21.7005 2.76165 21.6393 2.78511 21.576 2.79735C21.5056 2.81163 21.4353 2.81775 21.37 2.84632C21.3638 2.84938 21.3567 2.84836 21.3496 2.85142C21.2955 2.87692 21.2578 2.91976 21.2108 2.95343C21.1598 2.98913 21.1007 3.01259 21.0558 3.05748L3.34577 20.7665C3.34067 20.7716 3.33964 20.7777 3.33454 20.7828C3.29068 20.8277 3.26416 20.8868 3.22845 20.9409C3.18969 21.0011 3.14481 21.0562 3.1193 21.1225C3.11624 21.1306 3.1091 21.1357 3.10604 21.1439C3.08666 21.198 3.09176 21.2531 3.08258 21.3071C3.07136 21.3673 3.04688 21.4244 3.04688 21.4877V46.5353C3.04688 46.5394 3.04892 46.5424 3.04892 46.5455C3.04994 46.6067 3.0734 46.6659 3.08462 46.7271C3.0989 46.7985 3.104 46.8719 3.13256 46.9382C3.1346 46.9433 3.13358 46.9484 3.13562 46.9535C3.18459 47.0617 3.25294 47.1524 3.32944 47.2341C3.33556 47.2412 3.3376 47.2504 3.34474 47.2565L21.0446 64.9563C21.0456 64.9573 21.0466 64.9583 21.0476 64.9594L21.0548 64.9665C21.1149 65.0267 21.1904 65.0624 21.2618 65.1052C21.3037 65.1307 21.3343 65.1664 21.3812 65.1858C21.3822 65.1858 21.3832 65.1858 21.3842 65.1868C21.5077 65.2378 21.6403 65.2664 21.777 65.2664H46.8246C46.9419 65.2664 47.0623 65.246 47.1796 65.2032C47.1857 65.2011 47.1898 65.196 47.1959 65.193C47.2653 65.1654 47.3224 65.1185 47.3846 65.0767C47.4346 65.043 47.4917 65.0185 47.5336 64.9767C47.5376 64.9726 47.5427 64.9716 47.5468 64.9685L65.2568 47.2585C65.2619 47.2534 65.264 47.2463 65.2691 47.2412C65.3435 47.1637 65.4088 47.077 65.4578 46.9739C65.4609 46.9668 65.4598 46.9586 65.4639 46.9505C65.4935 46.8831 65.5017 46.8107 65.517 46.7383C65.5292 46.6771 65.5516 46.6189 65.5527 46.5577C65.5527 46.5506 65.5567 46.5445 65.5567 46.5373V21.4877C65.5567 21.4193 65.5312 21.3561 65.518 21.2908C65.5068 21.2367 65.5119 21.1816 65.4915 21.1286C65.4894 21.1235 65.4853 21.1204 65.4833 21.1153C65.4547 21.0439 65.4047 20.9837 65.3609 20.9195C65.3282 20.8726 65.3048 20.8175 65.266 20.7777C65.263 20.7746 65.2619 20.7695 65.2589 20.7665L47.5499 3.05748C47.5468 3.05748 47.5468 3.05748 47.5458 3.05646ZM62.6964 21.0919L49.7054 25.9904L42.0117 18.2968L47.1908 5.58631L62.6964 21.0919ZM63.5145 44.9245L50.4684 38.7468V27.8817L63.5145 22.9627V44.9245ZM47.2275 62.3999L41.9944 48.2888L49.6615 40.6217L62.7902 46.8382L47.2275 62.3999ZM5.8338 46.8597L19.7327 40.6105L27.3886 48.2664L21.425 62.4509L5.8338 46.8597ZM5.08708 22.9362L18.936 27.8939V38.7315L5.08708 44.9582V22.9362ZM21.4638 5.53327L27.3692 18.3203L19.6909 25.9986L5.92561 21.0705L21.4638 5.53327ZM40.3877 47.0096H29.0167L20.9762 38.9692V27.5991L29.0167 19.5587H40.3877L48.4282 27.5991V38.9692L40.3877 47.0096ZM40.1256 17.5185H29.2472L23.3724 4.79777H45.3077L40.1256 17.5185ZM29.2717 49.0498H40.1011L45.3587 63.2252H23.3133L29.2717 49.0498Z" fill="#2D2D2D" />
                                            <path d="M39.1871 22.5127C38.7781 22.125 38.1323 22.1434 37.7447 22.5504C37.3571 22.9584 37.3744 23.6052 37.7825 23.9928L43.7358 29.6411V36.8533C43.7358 37.4174 44.1918 37.8734 44.7559 37.8734C45.32 37.8734 45.776 37.4174 45.776 36.8533V29.2025C45.776 28.923 45.6617 28.6557 45.4577 28.4619L39.1871 22.5127Z" fill="#2D2D2D" />
                                        </svg>
                                        <div class="text-lg font-medium">Academic
                                            Excellence</div>
                                    </div>
                                    <p class="text-gray-700">
                                        Through the Academy of Pediatric Sciences, we have initiated structured, recurring programs such as P4, ICE, PDNE, B2B, ODODD, Master Classes, and Clinical Workshops to reinforce evidence-based practice and continuous learning.
                                    </p>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition space-y-3">
                                    <div class="grid grid-cols-[48px_auto] gap-4 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12" viewBox="0 0 70 66" fill="none">
                                            <path d="M20.0312 39.289V35.4372V26.9631L28.5053 18.489H40.8312L49.3053 26.9631V39.289L40.8312 47.7631H28.5053L20.0312 39.289Z" fill="#FF8E8F" />
                                            <path d="M61.4861 0C60.922 0 60.466 0.455986 60.466 1.0201V2.75734H58.4381C57.874 2.75734 57.418 3.21333 57.418 3.77744C57.418 4.34156 57.874 4.79755 58.4381 4.79755H60.466V6.53376C60.466 7.09788 60.922 7.55386 61.4861 7.55386C62.0503 7.55386 62.5062 7.09788 62.5062 6.53376V4.79755H64.5342C65.0983 4.79755 65.5543 4.34156 65.5543 3.77744C65.5543 3.21333 65.0983 2.75734 64.5342 2.75734H62.5062V1.0201C62.5062 0.455986 62.0503 0 61.4861 0Z" fill="#2D2D2D" />
                                            <path d="M4.06817 5.51367C3.50405 5.51367 3.04807 5.96966 3.04807 6.53377V8.27101H1.0201C0.455986 8.27101 0 8.727 0 9.29111C0 9.85523 0.455986 10.3112 1.0201 10.3112H3.04807V12.0474C3.04807 12.6115 3.50405 13.0675 4.06817 13.0675C4.63229 13.0675 5.08827 12.6115 5.08827 12.0474V10.3112H7.11624C7.68036 10.3112 8.13634 9.85523 8.13634 9.29111C8.13634 8.727 7.68036 8.27101 7.11624 8.27101H5.08827V6.53377C5.08827 5.96966 4.63229 5.51367 4.06817 5.51367Z" fill="#2D2D2D" />
                                            <path d="M66.0672 8.271C65.503 8.271 65.0471 8.72698 65.0471 9.2911V10.302H63.8209C63.2568 10.302 62.8008 10.758 62.8008 11.3221C62.8008 11.8862 63.2568 12.3422 63.8209 12.3422H65.0471V13.3532C65.0471 13.9173 65.503 14.3733 66.0672 14.3733C66.6313 14.3733 67.0873 13.9173 67.0873 13.3532V12.3422H68.3134C68.8775 12.3422 69.3335 11.8862 69.3335 11.3221C69.3335 10.758 68.8775 10.302 68.3134 10.302H67.0873V9.2911C67.0873 8.728 66.6313 8.271 66.0672 8.271Z" fill="#2D2D2D" />
                                            <path d="M47.5458 3.05646C47.4489 2.95955 47.3346 2.88508 47.2102 2.83407C47.2092 2.83407 47.2092 2.83306 47.2082 2.83306C47.1653 2.81571 47.1214 2.81979 47.0786 2.80857C46.995 2.78613 46.9123 2.75757 46.8236 2.75757H46.8154C46.8124 2.75757 46.8103 2.75757 46.8083 2.75757H21.777C21.7719 2.75757 21.7678 2.76063 21.7627 2.76063C21.7005 2.76165 21.6393 2.78511 21.576 2.79735C21.5056 2.81163 21.4353 2.81775 21.37 2.84632C21.3638 2.84938 21.3567 2.84836 21.3496 2.85142C21.2955 2.87692 21.2578 2.91976 21.2108 2.95343C21.1598 2.98913 21.1007 3.01259 21.0558 3.05748L3.34577 20.7665C3.34067 20.7716 3.33964 20.7777 3.33454 20.7828C3.29068 20.8277 3.26416 20.8868 3.22845 20.9409C3.18969 21.0011 3.14481 21.0562 3.1193 21.1225C3.11624 21.1306 3.1091 21.1357 3.10604 21.1439C3.08666 21.198 3.09176 21.2531 3.08258 21.3071C3.07136 21.3673 3.04688 21.4244 3.04688 21.4877V46.5353C3.04688 46.5394 3.04892 46.5424 3.04892 46.5455C3.04994 46.6067 3.0734 46.6659 3.08462 46.7271C3.0989 46.7985 3.104 46.8719 3.13256 46.9382C3.1346 46.9433 3.13358 46.9484 3.13562 46.9535C3.18459 47.0617 3.25294 47.1524 3.32944 47.2341C3.33556 47.2412 3.3376 47.2504 3.34474 47.2565L21.0446 64.9563C21.0456 64.9573 21.0466 64.9583 21.0476 64.9594L21.0548 64.9665C21.1149 65.0267 21.1904 65.0624 21.2618 65.1052C21.3037 65.1307 21.3343 65.1664 21.3812 65.1858C21.3822 65.1858 21.3832 65.1858 21.3842 65.1868C21.5077 65.2378 21.6403 65.2664 21.777 65.2664H46.8246C46.9419 65.2664 47.0623 65.246 47.1796 65.2032C47.1857 65.2011 47.1898 65.196 47.1959 65.193C47.2653 65.1654 47.3224 65.1185 47.3846 65.0767C47.4346 65.043 47.4917 65.0185 47.5336 64.9767C47.5376 64.9726 47.5427 64.9716 47.5468 64.9685L65.2568 47.2585C65.2619 47.2534 65.264 47.2463 65.2691 47.2412C65.3435 47.1637 65.4088 47.077 65.4578 46.9739C65.4609 46.9668 65.4598 46.9586 65.4639 46.9505C65.4935 46.8831 65.5017 46.8107 65.517 46.7383C65.5292 46.6771 65.5516 46.6189 65.5527 46.5577C65.5527 46.5506 65.5567 46.5445 65.5567 46.5373V21.4877C65.5567 21.4193 65.5312 21.3561 65.518 21.2908C65.5068 21.2367 65.5119 21.1816 65.4915 21.1286C65.4894 21.1235 65.4853 21.1204 65.4833 21.1153C65.4547 21.0439 65.4047 20.9837 65.3609 20.9195C65.3282 20.8726 65.3048 20.8175 65.266 20.7777C65.263 20.7746 65.2619 20.7695 65.2589 20.7665L47.5499 3.05748C47.5468 3.05748 47.5468 3.05748 47.5458 3.05646ZM62.6964 21.0919L49.7054 25.9904L42.0117 18.2968L47.1908 5.58631L62.6964 21.0919ZM63.5145 44.9245L50.4684 38.7468V27.8817L63.5145 22.9627V44.9245ZM47.2275 62.3999L41.9944 48.2888L49.6615 40.6217L62.7902 46.8382L47.2275 62.3999ZM5.8338 46.8597L19.7327 40.6105L27.3886 48.2664L21.425 62.4509L5.8338 46.8597ZM5.08708 22.9362L18.936 27.8939V38.7315L5.08708 44.9582V22.9362ZM21.4638 5.53327L27.3692 18.3203L19.6909 25.9986L5.92561 21.0705L21.4638 5.53327ZM40.3877 47.0096H29.0167L20.9762 38.9692V27.5991L29.0167 19.5587H40.3877L48.4282 27.5991V38.9692L40.3877 47.0096ZM40.1256 17.5185H29.2472L23.3724 4.79777H45.3077L40.1256 17.5185ZM29.2717 49.0498H40.1011L45.3587 63.2252H23.3133L29.2717 49.0498Z" fill="#2D2D2D" />
                                            <path d="M39.1871 22.5127C38.7781 22.125 38.1323 22.1434 37.7447 22.5504C37.3571 22.9584 37.3744 23.6052 37.7825 23.9928L43.7358 29.6411V36.8533C43.7358 37.4174 44.1918 37.8734 44.7559 37.8734C45.32 37.8734 45.776 37.4174 45.776 36.8533V29.2025C45.776 28.923 45.6617 28.6557 45.4577 28.4619L39.1871 22.5127Z" fill="#2D2D2D" />
                                        </svg>
                                        <div class="text-lg font-medium">Empowering the
                                            Next Generation</div>
                                    </div>
                                    <p class="text-gray-700">
                                        We are committed to nurturing leadership,
                                        competence, and confidence among young pediatricians and students through initiatives
                                        like the NextGen Course, Intensive Clinical Training, and Faculty Development
                                        Programs. </p>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition space-y-3">
                                    <div class="grid grid-cols-[48px_auto] gap-4 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12" viewBox="0 0 70 66" fill="none">
                                            <path d="M20.0312 39.289V35.4372V26.9631L28.5053 18.489H40.8312L49.3053 26.9631V39.289L40.8312 47.7631H28.5053L20.0312 39.289Z" fill="#FF8E8F" />
                                            <path d="M61.4861 0C60.922 0 60.466 0.455986 60.466 1.0201V2.75734H58.4381C57.874 2.75734 57.418 3.21333 57.418 3.77744C57.418 4.34156 57.874 4.79755 58.4381 4.79755H60.466V6.53376C60.466 7.09788 60.922 7.55386 61.4861 7.55386C62.0503 7.55386 62.5062 7.09788 62.5062 6.53376V4.79755H64.5342C65.0983 4.79755 65.5543 4.34156 65.5543 3.77744C65.5543 3.21333 65.0983 2.75734 64.5342 2.75734H62.5062V1.0201C62.5062 0.455986 62.0503 0 61.4861 0Z" fill="#2D2D2D" />
                                            <path d="M4.06817 5.51367C3.50405 5.51367 3.04807 5.96966 3.04807 6.53377V8.27101H1.0201C0.455986 8.27101 0 8.727 0 9.29111C0 9.85523 0.455986 10.3112 1.0201 10.3112H3.04807V12.0474C3.04807 12.6115 3.50405 13.0675 4.06817 13.0675C4.63229 13.0675 5.08827 12.6115 5.08827 12.0474V10.3112H7.11624C7.68036 10.3112 8.13634 9.85523 8.13634 9.29111C8.13634 8.727 7.68036 8.27101 7.11624 8.27101H5.08827V6.53377C5.08827 5.96966 4.63229 5.51367 4.06817 5.51367Z" fill="#2D2D2D" />
                                            <path d="M66.0672 8.271C65.503 8.271 65.0471 8.72698 65.0471 9.2911V10.302H63.8209C63.2568 10.302 62.8008 10.758 62.8008 11.3221C62.8008 11.8862 63.2568 12.3422 63.8209 12.3422H65.0471V13.3532C65.0471 13.9173 65.503 14.3733 66.0672 14.3733C66.6313 14.3733 67.0873 13.9173 67.0873 13.3532V12.3422H68.3134C68.8775 12.3422 69.3335 11.8862 69.3335 11.3221C69.3335 10.758 68.8775 10.302 68.3134 10.302H67.0873V9.2911C67.0873 8.728 66.6313 8.271 66.0672 8.271Z" fill="#2D2D2D" />
                                            <path d="M47.5458 3.05646C47.4489 2.95955 47.3346 2.88508 47.2102 2.83407C47.2092 2.83407 47.2092 2.83306 47.2082 2.83306C47.1653 2.81571 47.1214 2.81979 47.0786 2.80857C46.995 2.78613 46.9123 2.75757 46.8236 2.75757H46.8154C46.8124 2.75757 46.8103 2.75757 46.8083 2.75757H21.777C21.7719 2.75757 21.7678 2.76063 21.7627 2.76063C21.7005 2.76165 21.6393 2.78511 21.576 2.79735C21.5056 2.81163 21.4353 2.81775 21.37 2.84632C21.3638 2.84938 21.3567 2.84836 21.3496 2.85142C21.2955 2.87692 21.2578 2.91976 21.2108 2.95343C21.1598 2.98913 21.1007 3.01259 21.0558 3.05748L3.34577 20.7665C3.34067 20.7716 3.33964 20.7777 3.33454 20.7828C3.29068 20.8277 3.26416 20.8868 3.22845 20.9409C3.18969 21.0011 3.14481 21.0562 3.1193 21.1225C3.11624 21.1306 3.1091 21.1357 3.10604 21.1439C3.08666 21.198 3.09176 21.2531 3.08258 21.3071C3.07136 21.3673 3.04688 21.4244 3.04688 21.4877V46.5353C3.04688 46.5394 3.04892 46.5424 3.04892 46.5455C3.04994 46.6067 3.0734 46.6659 3.08462 46.7271C3.0989 46.7985 3.104 46.8719 3.13256 46.9382C3.1346 46.9433 3.13358 46.9484 3.13562 46.9535C3.18459 47.0617 3.25294 47.1524 3.32944 47.2341C3.33556 47.2412 3.3376 47.2504 3.34474 47.2565L21.0446 64.9563C21.0456 64.9573 21.0466 64.9583 21.0476 64.9594L21.0548 64.9665C21.1149 65.0267 21.1904 65.0624 21.2618 65.1052C21.3037 65.1307 21.3343 65.1664 21.3812 65.1858C21.3822 65.1858 21.3832 65.1858 21.3842 65.1868C21.5077 65.2378 21.6403 65.2664 21.777 65.2664H46.8246C46.9419 65.2664 47.0623 65.246 47.1796 65.2032C47.1857 65.2011 47.1898 65.196 47.1959 65.193C47.2653 65.1654 47.3224 65.1185 47.3846 65.0767C47.4346 65.043 47.4917 65.0185 47.5336 64.9767C47.5376 64.9726 47.5427 64.9716 47.5468 64.9685L65.2568 47.2585C65.2619 47.2534 65.264 47.2463 65.2691 47.2412C65.3435 47.1637 65.4088 47.077 65.4578 46.9739C65.4609 46.9668 65.4598 46.9586 65.4639 46.9505C65.4935 46.8831 65.5017 46.8107 65.517 46.7383C65.5292 46.6771 65.5516 46.6189 65.5527 46.5577C65.5527 46.5506 65.5567 46.5445 65.5567 46.5373V21.4877C65.5567 21.4193 65.5312 21.3561 65.518 21.2908C65.5068 21.2367 65.5119 21.1816 65.4915 21.1286C65.4894 21.1235 65.4853 21.1204 65.4833 21.1153C65.4547 21.0439 65.4047 20.9837 65.3609 20.9195C65.3282 20.8726 65.3048 20.8175 65.266 20.7777C65.263 20.7746 65.2619 20.7695 65.2589 20.7665L47.5499 3.05748C47.5468 3.05748 47.5468 3.05748 47.5458 3.05646ZM62.6964 21.0919L49.7054 25.9904L42.0117 18.2968L47.1908 5.58631L62.6964 21.0919ZM63.5145 44.9245L50.4684 38.7468V27.8817L63.5145 22.9627V44.9245ZM47.2275 62.3999L41.9944 48.2888L49.6615 40.6217L62.7902 46.8382L47.2275 62.3999ZM5.8338 46.8597L19.7327 40.6105L27.3886 48.2664L21.425 62.4509L5.8338 46.8597ZM5.08708 22.9362L18.936 27.8939V38.7315L5.08708 44.9582V22.9362ZM21.4638 5.53327L27.3692 18.3203L19.6909 25.9986L5.92561 21.0705L21.4638 5.53327ZM40.3877 47.0096H29.0167L20.9762 38.9692V27.5991L29.0167 19.5587H40.3877L48.4282 27.5991V38.9692L40.3877 47.0096ZM40.1256 17.5185H29.2472L23.3724 4.79777H45.3077L40.1256 17.5185ZM29.2717 49.0498H40.1011L45.3587 63.2252H23.3133L29.2717 49.0498Z" fill="#2D2D2D" />
                                            <path d="M39.1871 22.5127C38.7781 22.125 38.1323 22.1434 37.7447 22.5504C37.3571 22.9584 37.3744 23.6052 37.7825 23.9928L43.7358 29.6411V36.8533C43.7358 37.4174 44.1918 37.8734 44.7559 37.8734C45.32 37.8734 45.776 37.4174 45.776 36.8533V29.2025C45.776 28.923 45.6617 28.6557 45.4577 28.4619L39.1871 22.5127Z" fill="#2D2D2D" />
                                        </svg>
                                        <div class="text-lg font-medium">Member Engagement
                                            and Welfare</div>
                                    </div>
                                    <p class="text-gray-700">
                                        Our efforts include a Membership Promotion
                                        Month, professional indemnity support, health checkups, cultural gatherings, and
                                        wellness initiatives. Additionally, we are focusing on digital enhancements, including an
                                        upgraded website, mobile app, and a collaborative job portal. </p>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition space-y-3">
                                    <div class="grid grid-cols-[48px_auto] gap-4 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12" viewBox="0 0 70 66" fill="none">
                                            <path d="M20.0312 39.289V35.4372V26.9631L28.5053 18.489H40.8312L49.3053 26.9631V39.289L40.8312 47.7631H28.5053L20.0312 39.289Z" fill="#FF8E8F" />
                                            <path d="M61.4861 0C60.922 0 60.466 0.455986 60.466 1.0201V2.75734H58.4381C57.874 2.75734 57.418 3.21333 57.418 3.77744C57.418 4.34156 57.874 4.79755 58.4381 4.79755H60.466V6.53376C60.466 7.09788 60.922 7.55386 61.4861 7.55386C62.0503 7.55386 62.5062 7.09788 62.5062 6.53376V4.79755H64.5342C65.0983 4.79755 65.5543 4.34156 65.5543 3.77744C65.5543 3.21333 65.0983 2.75734 64.5342 2.75734H62.5062V1.0201C62.5062 0.455986 62.0503 0 61.4861 0Z" fill="#2D2D2D" />
                                            <path d="M4.06817 5.51367C3.50405 5.51367 3.04807 5.96966 3.04807 6.53377V8.27101H1.0201C0.455986 8.27101 0 8.727 0 9.29111C0 9.85523 0.455986 10.3112 1.0201 10.3112H3.04807V12.0474C3.04807 12.6115 3.50405 13.0675 4.06817 13.0675C4.63229 13.0675 5.08827 12.6115 5.08827 12.0474V10.3112H7.11624C7.68036 10.3112 8.13634 9.85523 8.13634 9.29111C8.13634 8.727 7.68036 8.27101 7.11624 8.27101H5.08827V6.53377C5.08827 5.96966 4.63229 5.51367 4.06817 5.51367Z" fill="#2D2D2D" />
                                            <path d="M66.0672 8.271C65.503 8.271 65.0471 8.72698 65.0471 9.2911V10.302H63.8209C63.2568 10.302 62.8008 10.758 62.8008 11.3221C62.8008 11.8862 63.2568 12.3422 63.8209 12.3422H65.0471V13.3532C65.0471 13.9173 65.503 14.3733 66.0672 14.3733C66.6313 14.3733 67.0873 13.9173 67.0873 13.3532V12.3422H68.3134C68.8775 12.3422 69.3335 11.8862 69.3335 11.3221C69.3335 10.758 68.8775 10.302 68.3134 10.302H67.0873V9.2911C67.0873 8.728 66.6313 8.271 66.0672 8.271Z" fill="#2D2D2D" />
                                            <path d="M47.5458 3.05646C47.4489 2.95955 47.3346 2.88508 47.2102 2.83407C47.2092 2.83407 47.2092 2.83306 47.2082 2.83306C47.1653 2.81571 47.1214 2.81979 47.0786 2.80857C46.995 2.78613 46.9123 2.75757 46.8236 2.75757H46.8154C46.8124 2.75757 46.8103 2.75757 46.8083 2.75757H21.777C21.7719 2.75757 21.7678 2.76063 21.7627 2.76063C21.7005 2.76165 21.6393 2.78511 21.576 2.79735C21.5056 2.81163 21.4353 2.81775 21.37 2.84632C21.3638 2.84938 21.3567 2.84836 21.3496 2.85142C21.2955 2.87692 21.2578 2.91976 21.2108 2.95343C21.1598 2.98913 21.1007 3.01259 21.0558 3.05748L3.34577 20.7665C3.34067 20.7716 3.33964 20.7777 3.33454 20.7828C3.29068 20.8277 3.26416 20.8868 3.22845 20.9409C3.18969 21.0011 3.14481 21.0562 3.1193 21.1225C3.11624 21.1306 3.1091 21.1357 3.10604 21.1439C3.08666 21.198 3.09176 21.2531 3.08258 21.3071C3.07136 21.3673 3.04688 21.4244 3.04688 21.4877V46.5353C3.04688 46.5394 3.04892 46.5424 3.04892 46.5455C3.04994 46.6067 3.0734 46.6659 3.08462 46.7271C3.0989 46.7985 3.104 46.8719 3.13256 46.9382C3.1346 46.9433 3.13358 46.9484 3.13562 46.9535C3.18459 47.0617 3.25294 47.1524 3.32944 47.2341C3.33556 47.2412 3.3376 47.2504 3.34474 47.2565L21.0446 64.9563C21.0456 64.9573 21.0466 64.9583 21.0476 64.9594L21.0548 64.9665C21.1149 65.0267 21.1904 65.0624 21.2618 65.1052C21.3037 65.1307 21.3343 65.1664 21.3812 65.1858C21.3822 65.1858 21.3832 65.1858 21.3842 65.1868C21.5077 65.2378 21.6403 65.2664 21.777 65.2664H46.8246C46.9419 65.2664 47.0623 65.246 47.1796 65.2032C47.1857 65.2011 47.1898 65.196 47.1959 65.193C47.2653 65.1654 47.3224 65.1185 47.3846 65.0767C47.4346 65.043 47.4917 65.0185 47.5336 64.9767C47.5376 64.9726 47.5427 64.9716 47.5468 64.9685L65.2568 47.2585C65.2619 47.2534 65.264 47.2463 65.2691 47.2412C65.3435 47.1637 65.4088 47.077 65.4578 46.9739C65.4609 46.9668 65.4598 46.9586 65.4639 46.9505C65.4935 46.8831 65.5017 46.8107 65.517 46.7383C65.5292 46.6771 65.5516 46.6189 65.5527 46.5577C65.5527 46.5506 65.5567 46.5445 65.5567 46.5373V21.4877C65.5567 21.4193 65.5312 21.3561 65.518 21.2908C65.5068 21.2367 65.5119 21.1816 65.4915 21.1286C65.4894 21.1235 65.4853 21.1204 65.4833 21.1153C65.4547 21.0439 65.4047 20.9837 65.3609 20.9195C65.3282 20.8726 65.3048 20.8175 65.266 20.7777C65.263 20.7746 65.2619 20.7695 65.2589 20.7665L47.5499 3.05748C47.5468 3.05748 47.5468 3.05748 47.5458 3.05646ZM62.6964 21.0919L49.7054 25.9904L42.0117 18.2968L47.1908 5.58631L62.6964 21.0919ZM63.5145 44.9245L50.4684 38.7468V27.8817L63.5145 22.9627V44.9245ZM47.2275 62.3999L41.9944 48.2888L49.6615 40.6217L62.7902 46.8382L47.2275 62.3999ZM5.8338 46.8597L19.7327 40.6105L27.3886 48.2664L21.425 62.4509L5.8338 46.8597ZM5.08708 22.9362L18.936 27.8939V38.7315L5.08708 44.9582V22.9362ZM21.4638 5.53327L27.3692 18.3203L19.6909 25.9986L5.92561 21.0705L21.4638 5.53327ZM40.3877 47.0096H29.0167L20.9762 38.9692V27.5991L29.0167 19.5587H40.3877L48.4282 27.5991V38.9692L40.3877 47.0096ZM40.1256 17.5185H29.2472L23.3724 4.79777H45.3077L40.1256 17.5185ZM29.2717 49.0498H40.1011L45.3587 63.2252H23.3133L29.2717 49.0498Z" fill="#2D2D2D" />
                                            <path d="M39.1871 22.5127C38.7781 22.125 38.1323 22.1434 37.7447 22.5504C37.3571 22.9584 37.3744 23.6052 37.7825 23.9928L43.7358 29.6411V36.8533C43.7358 37.4174 44.1918 37.8734 44.7559 37.8734C45.32 37.8734 45.776 37.4174 45.776 36.8533V29.2025C45.776 28.923 45.6617 28.6557 45.4577 28.4619L39.1871 22.5127Z" fill="#2D2D2D" />
                                        </svg>
                                        <div class="text-lg font-medium">Social & Community
                                            Responsibility</div>
                                    </div>
                                    <p class="text-gray-700">
                                        Strengthening our role as child health
                                        advocates, we are spearheading initiatives in school health, nutrition, immunization,
                                        adolescent well-being, and child rights advocacy, ensuring our impact extends beyond clinics and hospitals.
                                    </p>
                                </div>
                            </div>
                            <p class="mt-5">Together, let us transform these plans into meaningful action through collaboration,
                                creativity, and compassion. I sincerely invite your active participation and valuable feedback as we continue to champion the well-being of children under our unifying motto:</p>
                        </div>
                    </div>

                </div>
            </div>
            <div x-show="tab === 2" x-cloak>
                <div class="grid gap-6 md:grid-cols-[30%_70%]">
                    <div>
                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/07/member2.png" alt="Dr. Somasundaram A, MD FIAP">
                    </div>
                    <div>
                        <p class="text-md text-gray-600">Yours in Academy service</p>
                        <h2 class="text-xl font-semibold text-gray-900">Dr. Somasundaram A, MD FIAP</h2>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">President Elect-2025 IAP TNSC</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="3" viewBox="0 0 113 3" fill="none">
                                <path d="M0.667969 1.66663H112.668" stroke="#FEC02F" stroke-width="2" />
                            </svg>
                        </div>



                        <div class="space-y-4 text-gray-700">

                            <p><strong>Dear Seniors and my friends,</strong></p>
                            <div>Seasons Greetings to you all!!</div>
                            <div>I am delighted & happy to reach you all through this newsletter.</div>


                            <p>As I step into the honourable role of the President Elect 2025 for the Indian Academy
                                of Paediatrics, Tamil Nadu state Chapter, I want to express my heartfelt gratitude for the
                                trust and confidence you have placed in me to lead this association. I am extremely
                                thankful to all the past office bearers of our branch who have done tireless efforts to set a
                                high standard for our esteemed branch.</p>

                            <p>I sincerely appreciate the efforts taken by the outgoing team led by
                                Prof. Dr. S. Balasankar as President, Dr. V Tiroumourougane Serene as Secretary and
                                Dr. R. V. Dhakshayani as Treasurer in setting high standards in every aspect of academic
                                and community services.</p>

                            <p>This year under the Presidentship of our visionary President Dr. K Rajendran is
                                moving at a fast pace with lot of activities at the state and district level. Sub speciality
                                chapters are being formed at the state level and new district branches are getting
                                registered. The district branches are in full swing organising CMEs and community activities
                                and special appreciation to all the executive board members and district office bearers.</p>

                            <p>We are eagerly waiting for the Novel South Yuva Pedicon at Kanyakumari and the
                                grand Kongu Pedicon, the annual academic extravaganza being organised by IAP
                                Coimbatore. I whole heartedly wish the present team many more laurels in the current year.</p>

                            <p>I firmly believe that the success of our association is a collective effort and our
                                strength lies in our unity. I am eager to work closely with the esteemed members of our
                                executive committee and all of you, to achieve our shared objectives. I encourage each one
                                of you to actively participate, share your ideas, and contribute your expertise.</p>

                        </div>
                    </div>

                </div>
            </div>
            <div x-show="tab === 3" x-cloak>
                <div class="grid gap-6 md:grid-cols-[30%_70%]">
                    <div>
                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/07/member3.png" alt="Dr. S. Balasankar">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Dr. S. Balasankar</h2>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">President 2024, IAP TNSC.</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="3" viewBox="0 0 113 3" fill="none">
                                <path d="M0.667969 1.66663H112.668" stroke="#FEC02F" stroke-width="2" />
                            </svg>
                        </div>



                        <div class="space-y-4 text-gray-700">






                            <p>Greetings to all brothers and sisters of IAP Tamil Nadu state chapter. I’m happy that I
                                have handed over the baton to a person who can run with maximum speed to put our state
                                branch in front. I am just referring to Prof. Dr. K Rajendran, an able leader with a vision. He
                                along with his team members, Dr. S. Narmada secretary, Dr. D. Rajkumar treasurer and
                                Dr. V. Tiroumourougane, Academy coordinator are doing an exceedingly good job in all the
                                avenues from academics to social activities, from Child Welfare to welfare of the IAP Tamil
                                Nadu state members. All the academic programmes are of high standard and roping in the
                                national leaders and stalwarts as guests and faculty is highly appreciated. Activities of IAP
                                Tamil Nadu state is now watched by leaders and doyens from all over India.</p>

                            <p>We are in the right track for getting successfully the chance for hosting the next
                                National Pedicon at Coimbatore. Prof. Dr. M. Singaravelu Sir’s election as National president
                                of IAP is for sure because of his tireless efforts and the cooperative promotion done by all
                                IAP Tamil Nadu state members.</p>

                            <p class="font-semibold">Great days are ahead for IAP Tamil Nadu state.</p>
                            <p>Kongu Pedicon team is crossing all the bars to make the event a grand success and an event to remember forever. I wish the team good luck.</p>
                            <p>Eager to meet you all at Kovai. <br>
                                Jai hind! Jai IAP.</p>

                        </div>
                    </div>

                </div>
            </div>
            <div x-show="tab === 4" x-cloak>
                <div class="grid gap-6 md:grid-cols-[30%_70%]">
                    <div>
                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/07/member4.png" alt="Dr. S. Balasankar">
                    </div>
                    <div>
                        <p class="text-md text-gray-600">Yours in IAP Service</p>
                        <h2 class="text-xl font-semibold text-gray-900">Dr. S. Balasankar</h2>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">President 2024, IAP TNSC.</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="3" viewBox="0 0 113 3" fill="none">
                                <path d="M0.667969 1.66663H112.668" stroke="#FEC02F" stroke-width="2" />
                            </svg>
                        </div>



                        <div class="space-y-4 text-gray-700">

                            <p><strong>Respected IAPians,</strong></p>
                            <p>It is with great pleasure that I extend my warmest greetings to each of you through this
                                edition of our news bulletin. As we navigate an ever-evolving landscape in Paediatric
                                healthcare, our collective commitment to advancing child health continues to shine brightly.
                                Since this team took over the office, in Jan 2025, it has been hectic with all Presidential
                                action plans and activities, The One drug a day digest has been a big success. The weekly
                                CME program on zoom platforms has taken up very well by Practicing Paediatricians as well
                                as Post graduates,</p>

                            <p>Our association remains steadfast in its mission to foster knowledge sharing,
                                professional development, and advocacy for the well-being of children. I am proud of the
                                strides we have made together—through conferences, workshops, and collaborative
                                initiatives—that have strengthened our Paediatric community.</p>

                            <p>I encourage all members to stay actively engaged, share your insights, and participate in
                                the enriching programs we have lined up in the months ahead. Your contributions are the
                                heartbeat of this organization.</p>

                            <p>Let us continue to work hand in hand toward a healthier future for our children.</p>

                            <p>
                                Long live IAP! <br>
                                Jai hind! </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>