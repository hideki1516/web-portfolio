<?php
/*
 * Template Name: about
 */
?>

<?php get_header(); ?>

<!-- article -->
<article class="p-about">
    <div class="p-about__contents">
        <div class="p-about__entrance">
            <div class="p-about__entrance-left effect fadeUpAnime">
                <p class="p-about__entrance-copy">Support your<br class="is-pc">web service</p>
            </div>
            <div class="p-about__entrance-right effect fadeUpAnime">
                <p class="p-about__entrance-text">webを通して人々の心や生活が豊かになるよう、法律の面からサポートいたします。</p>
            </div>
        </div>

        <div class="p-about__main">
            <h3 class="p-about__main-title effect revealTextAnime">制作会社での経歴を活かした<br class="is-sp">ご提案ができます</h3>
            <div class="p-about__main-inner effect fadeUpAnime">
                <div class="p-about__main-left">
                    <p class="p-about__main-text">
                        私はこれまでにIT系企業においてweb制作、新規webサービスの立ち上げ、ファンクラブビジネスを経験し「webが持つ可能性」を信じるようになりました。<br class="is-pc">
                        「webが持つ可能性」とはwebを通して人々の心や生活がもっと豊かになっていくことです。
                    </p>
                    <p class="p-about__main-text">
                        当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。
                    </p>
                </div>
                <div class="p-about__main-right">
                    <p class="p-about__main-text">
                        書類作成など法律面からあなたのwebサービスのサポートをします。<br class="is-pc">
                        新たなwebサービスが生まれ、そのサービスを利用することで多くの人々の心や生活が豊かになる。<br class="is-pc">
                        そしていつか日本が世界のIT分野をリードする日がくることを願っています。
                    </p>
                </div>
            </div>
        </div>

        <div class="p-about__data">
            <div class="p-about__data-inner">
                <div class="p-about__data-info">
                    <h3 class="p-about__data-title effect revealTextAnime">Office data</h3>
                    <ul class="p-about__data-list">
                        <li class="p-about__data-item effect fadeUpAnime">
                            <dd class="p-about__data-text">名称：藤岡行政書士事務所</dd>
                        </li>
                        <li class="p-about__data-item effect fadeUpAnime">
                            <dd class="p-about__data-text">代表：藤岡雅也</dd>
                        </li>
                        <li class="p-about__data-item effect fadeUpAnime">
                            <dd class="p-about__data-text">行政書士番号：0000000000000</dd>
                        </li>
                        <li class="p-about__data-item effect fadeUpAnime">
                            <dd class="p-about__data-text">取り扱い案件：労務、民泊、Visa</dd>
                        </li>
                        <li class="p-about__data-item effect fadeUpAnime">
                            <dd class="p-about__data-text">電話番号：06-5555-5555</dd>
                        </li>
                        <li class="p-about__data-item effect fadeUpAnime">
                            <dd class="p-about__data-text">FAX：06-5555-5555</dd>
                        </li>
                        <li class="p-about__data-item effect fadeUpAnime">
                            <dd class="p-about__data-text">住所：大阪府大阪市</dd>
                        </li>
                    </ul>
                </div>
                <figure class="p-about__data-image"><img src="<?php echo get_template_directory_uri(); ?>/images/about/img_about-member.png" alt=""></figure>
            </div>
        </div>
    </div>
</article>

<?php get_footer(); ?>