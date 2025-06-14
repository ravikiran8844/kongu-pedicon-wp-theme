<?php
/**
 * Template Name: Register
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
            Registration Details
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

<section class="px-4 sm:px-6 py-8 md:p-10 lg:p-12 xl:p-16">

<div class="overflow-x-auto">
    <table class="table text-center border border-[#D3D3D3] rounded-xl">
        <thead class="bg-blue text-white">
            <tr>
                <td>Period</td>
                <td>IAP Member</td>
                <td>Non IAP Member</td>
                <td>Senior Citizen
                    (> 70 Years)</td>
                <td>Accompanying
                    Person</td>
                <td>Postgraduates
                    (IAP Member)</td>
                <td>Postgraduates
                    (Non IAP Member)</td>
            </tr>
        </thead>
        <tbody>
            <tr class="even:bg-[#EBEEF0]">
                <td class="text-blue font-medium">Till 30th
                    September 2024</td>
                <td>₹ 8,500</td>
                <td>₹ 9,500</td>
                <td>₹ 0</td>
                <td>₹ 7,500</td>
                <td>₹ 7,500</td>
                <td>₹ 8,500</td>
            </tr>
            <tr class="even:bg-[#EBEEF0]">
                <td class="text-blue font-medium">1st October – 31st
                January 2025</td>
                <td>₹ 9,000</td>
                <td>₹ 10,000</td>
                <td>₹ 0</td>
                <td>₹ 7,500</td>
                <td>₹ 7,500</td>
                <td>₹ 8,500</td>
            </tr>
            <tr class="even:bg-[#EBEEF0]">
                <td class="text-blue font-medium">1st February – 31st March 2025</td>
                <td>₹ 10,000</td>
                <td>₹ 11,000</td>
                <td>₹ 0</td>
                <td>₹ 8,000</td>
                <td>₹ 8,000</td>
                <td>₹ 9,000</td>
            </tr>
            <tr class="even:bg-[#EBEEF0]">
                <td class="text-blue font-medium">1st April – 31st May 2025</td>
                <td>₹ 12,000</td>
                <td>₹ 13,000</td>
                <td>₹ 0</td>
                <td>₹ 10,000</td>
                <td>₹ 9,500</td>
                <td>₹ 10,500</td>
            </tr>
            <tr class="even:bg-[#EBEEF0]">
                <td class="text-blue font-medium">1st June – 31st July 2025</td>
                <td>₹ 13,000</td>
                <td>₹ 14,000</td>
                <td>₹ 10,000</td>
                <td>₹ 11,000</td>
                <td>₹ 10,500</td>
                <td>₹ 11,500</td>
            </tr>
            <tr class="even:bg-[#EBEEF0]">
                <td class="text-blue font-medium">1st August 2025 onwards</td>
                <td>₹ 15,000</td>
                <td>₹ 16,000</td>
                <td>₹ 15,000</td>
                <td>₹ 12,000</td>
                <td>₹ 11,500</td>
                <td>₹ 13,000</td>
            </tr>
           
        </tbody>
    </table>
</div>

<div class="mt-8">
    <div class="text-lg font-semibold">Notes:</div>
    <ol class="list-decimal pl-4 mt-2 space-y-2 text-sm text-[#626262]">
        <li>The above tariff includes 18% GST</li>
        <li>Those registering under IAP member category should provide IAP membership number.</li>
        <li>For Senior Citizens who are members of IAP, registration is free BUT mandatory. No free spot registration.</li>
        <li>MD/Diploma postgraduates should obtain Bonafide Certificate from Head of Department.</li>
        <li>Children older than 5 years shall be considered as adults.</li>
    </ol>
</div>

<div class="mt-8">
    <a
    href="https://wa.me/918220350233?text=I%20am%20ready%20to%20embark%20on%20my%20Kongu%20Pedicon%202025%20journey%20%F0%9F%98%8A "
    class="bg-red-600 px-6 py-3 rounded text-white hover:bg-red-700 transition"
    >Register Now</a
  >
</div>

</section>

</main>

<?php get_footer(); ?>