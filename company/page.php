<?php get_header(); ?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="<?php echo esc_url( get_home_url() ); ?>">Home</a>
                <a class="breadcrumb-item text-dark" href="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>"><?php the_title(); ?></a>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the loop
        while (have_posts()) {
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php } ?>
    </main>
</div>

<?php get_footer(); ?>
