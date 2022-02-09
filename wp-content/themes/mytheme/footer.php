<footer>

        <div class="row">

            <div class="twelve columns">

                <ul class="footer-nav">
                    <?php
                    foreach (wp_get_nav_menu_items(3) as $item) {
                        $url = $item->url;
                        $title= $item->title;
                        echo "<li><a href='$url'>$title</a></li>";
                    }
                    ?>
                </ul>

                <ul class="footer-social">
                    <li>
                        <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                    </li>
                </ul>
                
                <div class="partners">
                    <img src="<?= get_template_directory_uri() ?>/assets/лого_арт-резиденция.png" alt="лого_арт-резиденция.png">
                    <img src="<?= get_template_directory_uri() ?>/assets/лого_иж_инфо_портал.png" alt="лого_иж_инфо_портал.png">
                    <img src="<?= get_template_directory_uri() ?>/assets/лого_мин культуры и туризма УР.jpg" alt="лого_мин культуры и туризма УР.jpg">
                    <img src="<?= get_template_directory_uri() ?>/assets/лого_мин культуры и туризма УР.png" alt="лого_мин культуры и туризма УР.png">
                </div>

                <ul class="copyright">
                    <li>Адрес театра: 426004, Ижевск, Ломоносова, 9</li>
                    <li>Номер телефона: +7 (3412) 68-09-89</li>
                </ul>

            </div>

            <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

        </div>

    </footer> <!-- Footer End-->

    <?php wp_footer(); ?>

</body>

</html>