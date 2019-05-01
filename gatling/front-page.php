<?php
/**
 * The template for displaying Home Page.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">

        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/slider/1.jpg' ?>)">
                <div class="container">
                    <div class="carousel-caption">
                        <p class="carousel-caption__uptitle">Knowledger, passion, heart & soul</p>
                        <p class="carousel-caption__title">Lorem ipsum dolor sit amet</p>
                        <p class="carousel-caption__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit incidunt deserunt suscipit quibusdam tempora quaerat possimus maiores officiis sunt laudantium?</p>
                        <a href="#" class="btn btn--transparent btn--red">Read more</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/slider/2.jpg'?>);">
                <div class="container">
                    <div class="carousel-caption">
                        <p class="carousel-caption__uptitle">Knowledger, passion, heart & soul</p>
                        <p class="carousel-caption__title">Lorem ipsum dolor sit amet consectetur</p>
                        <p class="carousel-caption__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque obcaecati hic dignissimos repudiandae nesciunt dolorem corrupti illo laboriosam aut officia, modi tenetur quia consectetur blanditiis perferendis ex voluptatum maiores earum.</p>
                        <a href="#" class="btn btn--transparent btn--red">Read more</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/slider/3.jpg'?>);">
                <div class="container">
                    <div class="carousel-caption">
                        <p class="carousel-caption__uptitle">Knowledger, passion, heart & soul</p>
                        <p class="carousel-caption__title">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="carousel-caption__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad qui consequuntur itaque totam dolorem voluptas.</p>
                        <a href="#" class="btn btn--transparent btn--red">Read more</a>
                    </div>
                </div>
            </div>

        </div>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- End Slider -->

	<!-- <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1"> -->

		<!-- <div class="row"> -->

			<main class="site-main" id="main">

                <section class="about-us">
                    <div class="container">
                        <div class="section-title">
                            <a href="#">Get to know</a>
                            <h1 class="section-heading">About Our Company</h1>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/img/slider/1.jpg'?>" alt="">
                            </div>
                            <div class="col-12 col-sm-6">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae sit at cupiditate non? Facere fuga aliquid, numquam iusto recusandae omnis laboriosam dolorem, velit nesciunt et quisquam, error similique perspiciatis doloremque dolores! Ipsum laborum officia quis dignissimos. Repudiandae, nobis, sit atque voluptates quisquam, aliquam dolor voluptas tempore eos sunt alias autem.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut unde. Vero voluptates neque asperiores atque cupiditate, aperiam quisquam non quaerat deleniti sapiente eligendi quod labore pariatur consequatur adipisci reiciendis expedita. Consectetur quibusdam corrupti blanditiis?</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="services parallax-container">
                    <div class="parallax parallax--1 js-parallax-bg"
                         style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/paralax-bg-1.jpg' ?>);" >
                        <div class="container">
                            <div class="section-title">
                                <a href="#">Get to know</a>
                                <h1 class="section-heading">Services</h1>
                            </div>

                            <div class="row">
                                <div class="services-block col-md-4">
                                    <div class="inner-box">
                                        <div class="services-block__icon">
                                            <img src="" alt="">
                                        </div>
                                        <p class="services-block__title">Finance & Insurance Markets</p>
                                        <p class="services-block__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, animi culpa alias placeat nesciunt aspernatur, dolores et deleniti praesentium eligendi iure accusamus dignissimos officia vero id dolorum magni? Hic, eius!</p>
                                        <a href="#" class="services-block__link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

			</main>


		<!-- </div> -->

	<!-- </div> -->
    <!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
