<?php get_header(); ?>
<main class="min-h-screen flex items-center justify-center text-center px-4">
  <div>
    <h1 class="text-6xl font-bold text-red-500">404</h1>
    <p class="text-xl mt-4 text-gray-700">Oops! The page you're looking for doesn't exist.</p>
    <a href="<?php echo home_url(); ?>" class="mt-6 inline-block text-white bg-indigo-600 px-6 py-2 rounded hover:bg-indigo-700">
      Go Back Home
    </a>
  </div>
</main>
<?php get_footer(); ?>
