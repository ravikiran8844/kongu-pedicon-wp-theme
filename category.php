<?php get_header(); ?>
<main class="min-h-screen max-w-7xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold mb-6">
    Category: <?php single_cat_title(); ?>
  </h1>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="mb-6 border-b pb-4">
      <h2 class="text-xl font-semibold text-indigo-600">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <p class="text-gray-600 text-sm"><?php the_excerpt(); ?></p>
    </article>
    <?php endwhile; ?>

<div class="mt-8">
  <?php
    the_posts_pagination([
      'mid_size'  => 2,
      'prev_text' => __('« Previous'),
      'next_text' => __('Next »'),
      'before_page_number' => '<span class="inline-block px-3 py-1 border rounded text-sm hover:bg-indigo-100">',
      'after_page_number' => '</span>',
    ]);
  ?>
</div>

<?php else : ?>
    <p>No posts found in this category.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
