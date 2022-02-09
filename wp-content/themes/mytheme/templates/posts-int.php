    <div id="portfolio-wrapper" class="bgrid-halves cf">

        <?php
            query_posts([
                'post_type'=>'post'
            ]);
            $empty = true;
            while (have_posts()){
                the_post();
                $link = get_permalink();
                $img = get_field('изображение');
                $title = get_the_title();
                $age = get_field('возрастное_ограничение');
                $info = get_field('краткое_описание');
                $check = get_field('премьера');
                if (isset($check) && $check == true) {
                    $empty = false;
                    echo "<div class=\"portfolio-item first\">
                        <div class=\"item-wrap\">
                            <a href='$link'>
                                <img alt=\"\" src='$img'>
                                <div class=\"overlay\"></div>
                                <div class=\"link-icon\"><i class=\"fa fa-link\"></i></div>
                            </a>
                            <div class=\"portfolio-item-meta\">
                                <h5><a href='$link'>$title</a></h5>
                                <p>$age</p>
                                <p>$info</p>
                            </div>
                        </div>
                    </div>
                   <br>";
                }
            }
            if ($empty == true) {
                echo "<div style='text-align: center'>
                             <h4>Премьер пока нету</h4>
                             <h5><a href='/репертуар/'>Все премьеры</a></h5>
                    </div>";
            }
        ?>

    </div>