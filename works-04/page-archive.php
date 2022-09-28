<?php
/*
 * Template Name: blog
 */
?>

<?php get_header(); ?>

<!-- article -->
<article class="p-list">
	<div class="p-list__contents">
		<ul class="p-list__list">
			<?php
			$blog_archive = get_blog_archive(12);
			if ($blog_archive->have_posts()) : while ($blog_archive->have_posts()) : $blog_archive->the_post();
			?>
					<?php get_template_part('template/common-archive'); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<p>最新の記事はありません</p>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</ul>

		<?php
		if (function_exists('my_pagenavi')) {
			my_pagenavi(array('query' => $blog_archive));
		}
		?>

	</div>
</article>
<!-- // article -->

<?php get_footer(); ?>