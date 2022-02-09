<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
        wp_body_open();
    ?>

    <!-- Header
    ================================================== -->
    <header>

        <div class="row">

            <div class="twelve columns">

                <nav id="nav-wrap">

                    <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                    <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

                    <ul id="nav" class="nav">
                        <?php
                            foreach (wp_get_nav_menu_items(3) as $item) {
                                $url = $item->url;
                                $title= $item->title;
                                echo "<li><a href='$url'>$title</a></li>";
                            }
                        ?>
                    </ul> <!-- end #nav -->

                </nav> <!-- end #nav-wrap -->

            </div>

        </div>

    </header> <!-- Header End -->