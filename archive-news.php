<?php
get_header(); ?>

<main class="p-news main">
    <div class="news-archive">
        <!-- 投稿タイプがnewsの記事の年別アーカイブリスト  -->
        <ul class="yearly-list">
            <?php wp_get_archives('post_type=news&type=yearly&show_post_count=1'); ?>
        </ul>

        <div>
            <!-- それぞれのカテゴリー表示 newsCategoryテンプレート -->
            <?php
            $args = ['listClassText' => 'category-list']; //リストのクラスの引数を設定
            get_template_part('newsCategory', null, $args);
            ?>
        </div>

        <div>
            <!-- お知らせ全てを表示 -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- 指定したカテゴリーの記事情報を取得 -->
                    <?php $this_terms = get_the_terms($post->ID, 'news_category'); ?>
                    <ul class="news-items">
                        <!-- 表示・非表示を変更するためクラスにカテゴリー名を挿入 -->
                        <li class="all <?php echo($this_terms[0]->name); ?>">
                            <a href="<?php the_permalink(); ?>" class="news-item__inner">
                                <div class="news-item__body">
                                    <h2 class="news-item__title"><?php the_title(); ?></h2>
                                    <time datetime="the_time( 'Y-m-d' )"><?php the_time('Y.m.d'); ?></time>
                                    <p class="news-item__text"><?php echo mb_strimwidth(strip_tags(get_the_content()), 0, 200, "…", "UTF-8"); ?></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                <?php endwhile; ?>

            <?php else : ?>
                何も投稿がありません。
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>