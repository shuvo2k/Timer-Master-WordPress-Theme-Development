<?php get_header(); ?>

<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php the_title(); ?></h2>
                    <div class="portfolio-meta">
                        <span><?php the_time('M d, Y'); ?> </span> |
                        <span> Category: <?php the_category(); ?> </span> |
                        <span> <?php the_tags(); ?> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->


<section class="single-post">
    <div class="container">
        <div class="row">
            <?php
                if (have_posts()) {
                    while (have_posts()): the_post(); ?>
                   <div class="col-md-12">
                <div class="post-img">
                <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                </div>
                <div class="post-content">
                 <?php the_content(); ?>
                </div>
                <ul class="social-share">
                    <h4>Share this article</h4>
                    <li>
                        <a href="#" class="Facebook">
                            <i class="ion-social-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Twitter">
                            <i class="ion-social-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Linkedin">
                            <i class="ion-social-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Google Plus">
                            <i class="ion-social-googleplus"></i>
                        </a>
                    </li>
                    
                </ul>
                 
            </div>
                <?php
                endwhile;
                }
            ?>
         
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="comments">
                    <div class="media">
                        <a href="" class="pull-left">
                            <img alt="" src="images/avater.jpg" class="media-object">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                            Jonathon Andrew</h4>
                            <p class="text-muted">
                                12 July 2013, 10:20 PM
                            </p>
                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <a href="">Reply</a>
                            <hr>
                            <!-- Nested media object -->
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img alt="" src="images/avater-1.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                    Tom Cruse </h4>
                                    <p class="text-muted">
                                        12 July 2013, 10:20 PM
                                    </p>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                    </p>
                                </div>
                            </div>
                            
                            <!--end media-->
                        </div>
                    </div>
    
           
                </div>
                <div class="post-comment">
                    <h3>Leave a Reply</h3>
                    <?php comments_template(); ?>
                  <!--   <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-lg-6">
                                <input type="text" class="col-lg-12 form-control" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="col-lg-12 form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <textarea class=" form-control" rows="8" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <p>
                        </p>
                        <p>
                            <button class="btn btn-send" type="submit">Comment</button>
                        </p>
                        
                        <p></p>
                    </form> -->
                </div>
                
            </div>
        </div>
    </div>
</section>   




            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

      <?php get_footer(); ?>