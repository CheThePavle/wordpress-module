<?php
    get_header();
?>
    <div class="content-outer">

        <div class="row">

            <div id="primary" class="twelve columns">

                <article class="post">

                    <div class="entry-header cf">

                        <h1><?= get_the_title() ?></h1>

                        <p class="post-meta">
                                <span class="header-meta">Жанр</span>
                                <span class="categories"><?= get_field('жанр'); ?></span>
                                <br>
                                <span class="header-meta">Возраст</span>
                                <span class="categories"><?= get_field('возрастное_ограничение'); ?></span>
                                <br>
                                <span class="header-meta">Продолжительность</span>
                                <span class="categories"><?= get_field('продолжительность'); ?></span>
                                <br>
                                <span class="header-meta">Режиссер</span>
                                <span class="categories"><?= get_field('режиссер'); ?></span>
                                <br>
                                <span class="header-meta">Художник</span>
                                <span class="categories"><?= get_field('художник'); ?></span>
                                <br>
                                <span class="header-meta">Композитор</span>
                                <span class="categories"><?= get_field('композитор'); ?></span>
                                <br>
                                <span class="header-meta">Дата спектакля</span>
                                <span class="categories"><?= get_field('дата_спектакля'); ?></span>
                        </p>

                    </div>

                    <div class="post-thumb">
                        <img src="<?= get_field('изображение') ?>" alt="post-image" title="post-image">
                    </div>

                    <div class="post-content">

                        <?= the_content() ?>

                    </div>

                </article> <!-- post end -->

            </div>

        </div>

    </div> <!-- Content End-->

<?php
    get_footer();
?>
