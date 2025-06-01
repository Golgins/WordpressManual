<?php
/*
Template Name: Procvičení
*/
    get_header(); 
?>
   
   <!--nadpis-->
    <div class="container nadpis">
        <h1 class="nadpis_text">Tipy</h1>
    </div>

    <div class="container" style="margin-bottom: 100px;">
        <div class="row">
                <?php    
                $query = new WP_Query(array(
                    'category_name' => 'tipy',
                    'posts_per_page' => 10
                ));

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <!-- Procviceni karta -->

                        <div class="col-5 mezera2 mx-auto">
                            <div class="card karta">
                                <div class="card-header" style="border-bottom: 1.5px solid #18184E;">
                                    <h1 class="text-center"><?php the_title(); ?></h1>
                                </div>
                                <div class="card-body">
                                <small class="text-muted ms-4"><?php the_time('j. n. Y'); ?></small>
                                    <p class="text fs-5 ps-4"><?php the_excerpt(); ?></p>
                                &nbsp;<a href="<?php the_permalink(); ?>" class="btn btn-info text-white tlacitko ms-3 my-3">Zobrazit více</a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center">Žádné aktivity zatím nejsou k dispozici.</p>';
                endif;
                ?>
                
        </div>
    </div>

<?php
get_footer();
?>

