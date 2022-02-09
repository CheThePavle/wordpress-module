<?php $url =  get_page_uri() ?>

        <div id="primary" class="seven columns">

            <?php
                $page = get_query_var('paged') ? get_query_var('paged') : 1;
                query_posts([
                    'post_type'=>'post',
                    'posts_per_page'=>2,
                    'paged'=>$page,
                    'cat'=>$_GET['category'] ? $_GET['category'] : []
                ]);
                while (have_posts()){
                    the_post();
                    $link = get_permalink();
                    $img = get_field('изображение');
                    $title = get_the_title();
                    $info = get_field('краткое_описание');
                    echo "<article class=\"post\">

                                <div class=\"entry-header cf\">
                                    
                                    <h1><a href='$link'>$title</a></h1>
                
                                </div>
                
                                <div class=\"post-thumb\">
                                    <a href='$link' title=\"\"><img src='$img' alt='$title'></a>
                                </div>
                
                                <div class=\"post-content\">
                
                                    <p>$info</p>
                
                                </div>
                
                            </article> <!-- post end -->";
                }
            ?>



            <!-- Pagination -->
            <nav class="col full pagination">
                <?php the_posts_pagination([
                    'screen_reader_text'=>' '
                ]);?>
            </nav>

        </div> <!-- Primary End-->

        <div id="secondary" class="four columns end">

            <aside id="sidebar">

                <div class="widget widget_categories">
                    <h5 class="widget-title">Категории</h5>

                    <form action="/<?= $url ?>">
                        <?php
                            $categories = get_categories();

                            foreach ($categories as $category) {
                                $categoryId = $category->term_id;
                                $cat = $_GET['category'];
                                $name = $category->cat_name;
                                $checked = isset($cat) && in_array($categoryId, $cat) ? "checked" : "";
                                echo "
                                    <label>
                                        <input name='category[]' value='$categoryId' type='checkbox' $checked> $name
                                    </label>
                                ";
                            }
                        ?>
                        <button>Применить</button>
                    </form>
                </div>

            </aside>

        </div> <!-- Secondary End-->
