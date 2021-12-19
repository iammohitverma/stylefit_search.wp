<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package stylefit-theme

 */



?>

<section class="container-fluid ap-single-product">
    <div class="container-md">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="inner box">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function copyShortLink() {
        document.getElementById("shrtLnkCopy").select();
        var copyText = document.getElementById("shrtLnkCopy");
        copyText.select();
        document.execCommand("copy");
    }

</script>
