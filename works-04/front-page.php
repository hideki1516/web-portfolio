<?php get_header(); ?>

<!-- main -->
<main class="p-top">
	<!-- mv -->
	<section class="p-top__mv">
		<div class="p-top__mv-message">
			<div class="p-top__mv-message-main effectOnLoad revealTextAnime revealTextBgWhite"><img src="<?php echo get_template_directory_uri(); ?>/images/top/img_mv-message.svg" alt=""></div>
			<div class="p-top__mv-message-sub">
				<p class="effectOnLoad revealTextAnime revealTextBgWhite">IT専門の行政書士たちが、<br class="is-sp">あなたのビジネスを守ります。</p>
			</div>
		</div>
		<div class="swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-media"><img src="<?php echo get_template_directory_uri(); ?>/images/top/img_mv01.png" alt="" class="p-top__mv-image"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-media"><img src="<?php echo get_template_directory_uri(); ?>/images/top/img_mv02.png" alt="" class="p-top__mv-image"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-media"><img src="<?php echo get_template_directory_uri(); ?>/images/top/img_mv03.png" alt="" class="p-top__mv-image"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- // mv -->

	<!-- entrance -->
	<section class="p-top__entrance">
		<div class="p-top__entrance-inner">
			<div class="p-top__entrance-about">
				<p class="p-top__entrance-about-title effect fadeUpAnime">webを通して人々の心や生活が豊かになるよう、法律の面からサポートいたします。</p>
				<p class="p-top__entrance-about-text effect fadeUpAnime">当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。</p>
			</div>
			<div class="p-top__entrance-news is-pc">
				<p class="p-top__entrance-news-head effect fadeUpAnime">Latest news</p>
				<ul class="p-top__entrance-news-list effect fadeUpAnime">
					<!-- PC -->
					<?php
					$news_query = new WP_Query(
						array(
							'post_type'      => 'post',
							'category_name' => 'news',
							'posts_per_page' => 3,
						)
					);
					?>
					<?php if ($news_query->have_posts()) : ?>
						<?php while ($news_query->have_posts()) : ?>
							<?php $news_query->the_post(); ?>
							<li class="p-top__entrance-news-item">
								<p class="p-top__entrance-news-data"><time><?php the_time(get_option('date_format')); ?></time></p>
								<a href="<?php the_permalink(); ?>" class="p-top__entrance-news-link">
									<p class="p-top__entrance-news-title"><?php the_title(); ?></p>
								</a>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</ul>
			</div>
			<!-- SP -->
			<div class="p-top__entrance-news is-sp">
				<p class="p-top__entrance-news-head">NEWS</p>
				<ul class="p-top__entrance-news-list">
					<?php
					$news_query = new WP_Query(
						array(
							'post_type'      => 'post',
							'category_name' => 'news',
							'posts_per_page' => 1,
						)
					);
					?>
					<?php if ($news_query->have_posts()) : ?>
						<?php $news_query->the_post(); ?>
						<li class="p-top__entrance-news-item">
							<p class="p-top__entrance-news-data"><time><?php the_time(get_option('date_format')); ?></time></p>
							<a href="<?php the_permalink(); ?>" class="p-top__entrance-news-link">
								<p class="p-top__entrance-news-title"><?php the_title(); ?></p>
							</a>
						</li>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</ul>
			</div>
		</div>
	</section>
	<!-- // entrance -->

	<!-- service -->
	<section class="p-top__service u-container-w1100">
		<h2 class="p-top__section-title effect revealTextAnime">SERVICE</h2>
		<ul class="p-top__service-list effect fadeUpAnime">
			<li class="p-top__service-item">
				<dl>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/img_service01.png" alt="" class="p-top__service-item-image"></figure>
					<dt class="p-top__service-item-title" data-number="#01">IT法務</dt>
					<dd class="p-top__service-item-text">簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な</dd>
				</dl>
			</li>
			<li class="p-top__service-item">
				<dl>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/img_service02.png" alt="" class="p-top__service-item-image"></figure>
					<dt class="p-top__service-item-title" data-number="#02">入管業務</dt>
					<dd class="p-top__service-item-text">簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な</dd>
				</dl>
			</li>
			<li class="p-top__service-item">
				<dl>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/img_service03.png" alt="" class="p-top__service-item-image"></figure>
					<dt class="p-top__service-item-title" data-number="#03">民泊申請</dt>
					<dd class="p-top__service-item-text">簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な</dd>
				</dl>
			</li>
		</ul>
		<div class="p-top__service-footer effect fadeUpAnime"><a href="<?php echo esc_url(home_url('/service/')); ?>" class="c-btn slideInBtnAnime">詳しく見る</a></div>
	</section>
	<!-- // service -->

	<!-- blog -->
	<section class="p-top__blog">
		<h2 class="p-top__section-title effect revealTextAnime">BLOG</h2>
		<ul class="p-top__blog-list">
			<?php
			$blog_archive = get_blog_archive(6);
			if ($blog_archive->have_posts()) : while ($blog_archive->have_posts()) : $blog_archive->the_post();
			?>
					<?php get_template_part('template/front-archive'); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<p>最新の記事はありません</p>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</ul>
		<div class="p-top__blog-footer effect fadeUpAnime"><a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c-btn slideInBtnAnime">一覧を見る</a></div>
	</section>
	<!-- // blog -->
</main>

<?php get_footer(); ?>