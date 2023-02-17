<?php
$alpha_layout_class = "col-md-8";
$alpha_text_class   = "";
if ( ! is_active_sidebar( "sidebar-1" ) ) {
    $alpha_layout_class = "col-md-10 offset-md-1";
    $alpha_text_class   = "text-center";
}
?>

<?php get_header(); ?>
<body <?php body_class( array( "first_class", "second_class" ) ); ?>>
    <?php get_template_part( "/template-parts/common/hero" ); ?>
    <div class="container errorview">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">
                    <?php
                    _e( "Sorry! We couldn't find what you were looking for", "alpha" );
                    ?>
                </h1>
            </div>
        </div>
    </div>

    </body>

<?php
get_footer();

