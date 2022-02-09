<?php
    get_header();
?>
    <section class="main">
        <div class="row">
            <?php
                the_content();
            ?>
        </div>
    </section>

<?php
    get_footer();

//header('Content-type: application/pdf');
//header('Content-Disposition: attachment; filename="myPDF.pdf');
?>


<!--<a href="javascript:(print());">Распечатать</a>-->

<!--<script>-->
<!--    // window.open('data:text/pdf;charset=utf-8,' +-->
<!--    //     encodeURIComponent( // Escape for URL formatting-->
<!--    //         '<!DOCTYPE html>'+-->
<!--    //         '<html lang="en">'+-->
<!--    //         '<head><title>Embedded Window</title></head>'+-->
<!--    //         '<body><h1>42</h1></body>'+-->
<!--    //         '</html>'-->
<!--    //     )-->
<!--    // );-->
<!--</script>-->