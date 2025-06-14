<?php get_header(); ?>
<main class="min-h-screen max-w-3xl mx-auto px-4 py-8">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="text-4xl font-bold mb-2"><?php the_title(); ?></h1>
    <p class="text-gray-500 text-sm mb-6">Published on <?php echo get_the_date(); ?></p>
    <div class="prose"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
