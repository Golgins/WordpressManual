   
<?php
/*
Template Name: Procvičení
*/
    get_header(); 
?>
   
   
   
   
   <!--nadpis-->
    <div class="container nadpis">
        <h1 class="nadpis_text">Návody</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="text-center mezera2">Něco o návodech</h1>
                <hr class="cara3 ">
                <ul>
                    <li><p class="text fs-5 pt-3">Jak vytvořit stránku nebo příspěvek</p></li>
                    <li><p class="text fs-5">Jak nainstalovat a používat pluginy</p></li>
                    <li><p class="text fs-5">Jak nastavit hlavní menu a navigaci webu</p></li>
                    <li><p class="text fs-5">Jak vytvářet a spravovat rubriky</p></li>
                </ul>
            </div>
            <div class="col-1">
            </div>
            
            <div class="col-7">
                <?php
            
                $query = new WP_Query(array(
                    'category_name' => 'navody',
                    'posts_per_page' => 10
                ));

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <!-- Procviceni karta -->
                        <div class="card karta mezera">
                            <div class="card-header" style="border-bottom: 1.5px solid #18184E;">
                                <h1>&nbsp;&nbsp;<?php the_title(); ?></h1>
                            </div>
                            <div class="card-body p-3">
                                <small class="text-muted ms-4"><?php the_time('j. n. Y'); ?></small>
                                <p class="text fs-5 ps-4"><?php the_excerpt(); ?></p>
                                &nbsp;<a href="<?php the_permalink(); ?>" class="btn btn-info text-white tlacitko ms-3 my-3" class="btn btn-primary">Zobrazit více</a>

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
    </div>



<?php
get_footer();
?>

