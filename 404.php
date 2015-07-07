<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Larva
 */

get_header(); ?>

<div class="container" role="grid"><!-- start .container -->
    <main class="col-sm-8" role="main"><!-- start main column -->
        
        <section class="not-found">
            
            <header>
                <h1 class="page-title"><?php _e( "That Doesn't Seem to be a Thing...", "larva" ); ?></h1>
            </header>
            
            <div class="the-content">
                <p><?php _e( 'Try a Search?', 'larva' ); ?></p>
                
                <?php get_search_form(); ?>
                
            </div>
            
        </section>
        
    </main><!-- end main column -->
    
    <aside class="col-sm-4" role="banner"><!-- start sidebar -->
        <?php get_sidebar(); ?>
    </aside><!-- end sidebar -->
    
</div><!-- end .container -->

<?php get_footer(); ?>
