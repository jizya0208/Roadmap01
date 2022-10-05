<?php $terms = get_terms('news_category'); ?>
<?php if (!empty($terms)) : ?>
    <h2 class="ttl">カテゴリー</h2>
    <ul class="<?php echo ($args['listClassText']) ?>">
        <li>
            <a href="#all">全て</a>
        </li>
        <?php foreach ($terms as $term) : ?>
            <li>
                <a href="#<?php echo $term->name ?>">
                    <?php echo $term->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>