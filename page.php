<?php get_header(); ?>
<main class="min-h-screen max-w-4xl mx-auto px-4 py-8">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
    <div class="prose"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
