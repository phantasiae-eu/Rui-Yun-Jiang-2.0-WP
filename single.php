

<?php get_header( 'general' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <style>
        <?php include 'single.css'; ?>
    </style>

    <!--**********************************************************************************************-->
    <!--********************************************TITLE-LINE-BELOW**********************************-->
    <!--**********************************************************************************************-->
    <div class="row-fluid">
        <div id="deskHomeLeft" class="col-xs-3 col-sm-3 col-md-4 col-lg-4 text-center">
            <div class="SecondHeadSideLines">
                <div class="SecondHeadSideline">
                </div>
            </div>
        </div>
        <div id="deskHomeCent" class="col-xs-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <div class="SecondHeadSide">
                <p><?php the_title(); ?></p>
            </div>
        </div>
        <div id="deskHomeRight" class="col-xs-3 col-sm-3 col-md-4 col-lg-4 text-center">
            <div class="SecondHeadSideLines">
                <div class="SecondHeadSideline">
                </div>
            </div>
        </div>
    </div>
    <!--**********************************************************************************************-->
    <!--********************************************TITLE-LINE-ABOVE**********************************-->
    <!--**********************************************************************************************-->
    <!--**********************************************************************************************-->
    <!--***************************************************SPACE**************************************-->
    <!--**********************************************************************************************-->
    <div class="row-fluid">
        <div id="belowTitle" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
    </div>
    <!--**********************************************************************************************-->
    <!--***************************************************SPACE**************************************-->
    <!--**********************************************************************************************-->
    <!--**********************************************************************************************-->
    <!--**********************************************CONTENT-BELOW***********************************-->
    <!--**********************************************************************************************-->
    <div class="row-fluid">
        <div id="colDesc" class="col-xs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="deskCont">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
    <!--**********************************************************************************************-->
    <!--**********************************************CONTENT-ABOVE***********************************-->
    <!--**********************************************************************************************-->
    <!--**********************************************************************************************-->
    <!--*****************************SPACE-BETWEEN-THUMBNAILS-PAGES-LINE******************************-->
    <!--**********************************************************************************************-->
    <div class="row-fluid">
        <div id="betweenThumbnailsPages" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
    </div>
    <!--**********************************************************************************************-->
    <!--******************************SPACE-BETWEEN-THUMBNAILS-PAGES-LINE*****************************-->
    <!--**********************************************************************************************-->
    <!--**********************************************************************************************-->
    <!--*******************************************PAGES-BELOW****************************************-->
    <!--**********************************************************************************************-->
    <div class="row-fluid">
        <div id="pages" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <div id="pagesContainer">
                <?php
                $defaults = array(
                    'before'           => '<p>',
                    'after'            => '',
                    'link_before'      => '',
                    'link_after'       => '',
                    'next_or_number'   => 'next',
                    'separator'        => '',
                    'nextpagelink'     => '',
                    'previouspagelink' => ( '<<' ),
                    'pagelink'         => '%',
                    'echo'             => 1
                );
                wp_link_pages( $defaults );
                ?>
                <?php
                $defaults = array(
                    'before'           => '',
                    'after'            => '',
                    'link_before'      => '',
                    'link_after'       => '',
                    'next_or_number'   => 'number',
                    'separator'        => ' ',
                    'nextpagelink'     => ( 'Next page' ),
                    'previouspagelink' => ( 'Previous page' ),
                    'pagelink'         => '%',
                    'echo'             => 1
                );
                wp_link_pages( $defaults );
                ?>
                <?php
                $defaults = array(
                    'before'           => '',
                    'after'            => '</p>',
                    'link_before'      => '',
                    'link_after'       => '',
                    'next_or_number'   => 'next',
                    'separator'        => '',
                    'nextpagelink'     => ( '>>' ),
                    'previouspagelink' => '',
                    'pagelink'         => '%',
                    'echo'             => 1
                );
                wp_link_pages( $defaults );
                ?>
            </div>
        </div>
    </div>
    <!--**********************************************************************************************-->
    <!--*******************************************PAGES-ABOVE****************************************-->
    <!--**********************************************************************************************-->
    <!--**********************************************************************************************-->
    <!--******************************************RED-LINE-BELOW**************************************-->
    <!--**********************************************************************************************-->
    <div class="mobVersion row-fluid">
        <div id="redLineSpace" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

        </div>
    </div>
    <?php
    global $numpages;
    if ( is_singular() && $numpages != 1 ) {
        ?>
        <div class="largeScrVersion row-fluid">
            <div id="redLine" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <div id="redLineContainer">
                    <div id="line">

                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!--**********************************************************************************************-->
    <!--******************************************RED-LINE-ABOVE**************************************-->
    <!--**********************************************************************************************-->
    <!--**********************************************************************************************-->
    <!--********************************************BACK-BELOW****************************************-->
    <!--**********************************************************************************************-->
    <div class="row-fluid">

        <div id="back" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="backSide">
                <div>

                </div>
            </div>
            <div id="backCenter">
                <a href="<?php echo get_permalink( 2 ); ?>">BACK TO ALL</a><span>&nbsp;|&nbsp;</span><a href="#top">BACK TO TOP</a>
            </div>
            <div class="backSide">
                <div>

                </div>
            </div>
        </div>

    </div>
    <!--**********************************************************************************************-->
    <!--******************************************* BACK-ABOVE****************************************-->
    <!--**********************************************************************************************-->
<?php endwhile; else: ?>

    <p><?php _e('Sorry, this page does not exist.'); ?></p>

<?php endif; ?>
<?php get_footer(); ?>