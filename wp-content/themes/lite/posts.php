<?php
    $url = get_page_uri();

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

    query_posts([
        'post_type'=>'post',
        'posts_per_page'=>2,
        'paged'=>$paged,
        'cat'=>$_GET['category'] ? $_GET['category'] : []
    ]);

    while (have_posts()) {
        the_post();
        // как обычно
    }

    the_posts_pagination();
    ?>

    <form action="/<?= $url ?>">
        <?php
            $categories = get_categories();

            foreach ($categories as $category) {
                $id = $category->term_id;
                $cat = $_GET['category'];
                $name = $category->cat_name;
                $checked = isset($cat) && in_array($id, $cat) ? 'checked' : '';

                echo "
                    <label>
                        <input name='category[]' type='checkbox' value='$id' $checked> $name
                    </label>
                ";
            }
        ?>
        <button>Найти</button>
    </form>
