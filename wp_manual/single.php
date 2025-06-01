<?php get_header(); ?>



<div class="container mezera" style="margin-bottom: 320px;">
    <div class="row">
       <div class="col-lg-12">
        
            <?php if(have_posts()): while(have_posts()): the_post();?>
                <article class='card karta p-5'>
                <h1><?php the_title();?></h1>
                <div class="small text-muted">Publikováno: <?php the_date();?> | Author: <?php the_author();?></div>
                <div class="card-body">
                    <p class="card-text"><?php the_content();?></p>


                    <a href="<?php echo get_category_link( get_cat_ID('navody') ); ?>" class="btn btn-lg text-white my-3" style="background-color: #18184E">Zpět na hlavní stránku</a>

            </div>
                </article>
            <?php endwhile;
             else: ?>
                <p>Neexistuje</p>
            <?php endif;?>
        </div>
    </div>
</div>   




<?php get_footer(); ?>