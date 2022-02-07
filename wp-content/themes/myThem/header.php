<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>

<body>

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
                            echo "<li><a href='$item->url'>$item->title</a></li>";
                        }
                    ?>
                </ul> <!-- end #nav -->
        </div>

    </div>

</header> <!-- Header End -->