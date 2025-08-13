<?php

/**
 * Template Name: Speakers and Topic
 */
get_header();
?>

<main class="min-h-screen">
    <section class="lg:py-12"
        style="background-image: url('<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/08/banner.jpg');background-size: cover;background-position: center;">
        <div class="p-4 py-10">


            <div class="flex flex-col items-center justify-center gap-2">
                <div class="text-md uppercase text-white text-center">
                    kongu pedicon
                </div>
                <div class="text-2xl uppercase lg:text-3xl font-bold text-white text-center">
                    Speakers and Topic
                </div>
            </div>

        </div>
    </section>

    <section class="bg-[#F8F9FB] max-md:hidden">
        <div class="px-4 sm:px-6 py-2 md:px-10 lg:px-12 xl:px-16">
            <div class="breadcrumbs text-sm">
                <ul class="flex justify-start">
                    <li><a href="<?php echo home_url(); ?>" class="text-[#252C32]">Home</a></li>
                    <!-- <li><a href="<?php echo home_url(); ?>/workshops-poster-presentation" class="text-[#252C32]">Workshops & Poster Presentation</a></li> -->
                    <li class="text-blue">Speakers and Topic</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="py-10 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4">

            <!-- <div class="overflow-auto">
                <iframe
                    src="http://localhost/kongu/wp-content/uploads/2025/08/Scientific-Comm.pdf"
                    class="w-full h-[500px] border rounded shadow"
                    frameborder="0"></iframe>
            </div> -->

            <div class="flex gap-2 items-center justify-center mb-4">
                <button id="prev" class="text-blue cursor-pointer">Previous</button>
                <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
                <button id="next" class="text-blue cursor-pointer">Next</button>

            </div>

            <canvas class="max-w-full" id="the-canvas"></canvas>

        </div>
    </section>


</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

<script type="module">
    // If absolute URL from the remote server is provided, configure the CORS
    // header on that server.
    var url = 'http://localhost/kongu/wp-content/uploads/2025/08/Scientific-Comm.pdf';

    // Loaded via <script> tag, create shortcut to access PDF.js exports.
    var {
        pdfjsLib
    } = globalThis;

    // The workerSrc property shall be specified.
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

    var pdfDoc = null,
        pageNum = 1,
        pageRendering = false,
        pageNumPending = null,
        scale = 0.8,
        canvas = document.getElementById('the-canvas'),
        ctx = canvas.getContext('2d');

    /**
     * Get page info from document, resize canvas accordingly, and render page.
     * @param num Page number.
     */
    function renderPage(num) {
        pageRendering = true;
        // Using promise to fetch the page
        pdfDoc.getPage(num).then(function(page) {
            var viewport = page.getViewport({
                scale: scale
            });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
                canvasContext: ctx,
                viewport: viewport
            };
            var renderTask = page.render(renderContext);

            // Wait for rendering to finish
            renderTask.promise.then(function() {
                pageRendering = false;
                if (pageNumPending !== null) {
                    // New page rendering is pending
                    renderPage(pageNumPending);
                    pageNumPending = null;
                }
            });
        });

        // Update page counters
        document.getElementById('page_num').textContent = num;
    }

    /**
     * If another page rendering in progress, waits until the rendering is
     * finised. Otherwise, executes rendering immediately.
     */
    function queueRenderPage(num) {
        if (pageRendering) {
            pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    /**
     * Displays previous page.
     */
    function onPrevPage() {
        if (pageNum <= 1) {
            return;
        }
        pageNum--;
        queueRenderPage(pageNum);
    }
    document.getElementById('prev').addEventListener('click', onPrevPage);

    /**
     * Displays next page.
     */
    function onNextPage() {
        if (pageNum >= pdfDoc.numPages) {
            return;
        }
        pageNum++;
        queueRenderPage(pageNum);
    }
    document.getElementById('next').addEventListener('click', onNextPage);

    /**
     * Asynchronously downloads PDF.
     */
    pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page_count').textContent = pdfDoc.numPages;

        // Initial/first page rendering
        renderPage(pageNum);
    });
</script>


<?php
get_footer();
?>