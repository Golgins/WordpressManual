
<?php get_header(); ?>



    <!--nadpis-->
    <div class="container nadpis">
        <h1 class="nadpis_text">Home</h1>
    </div>


    <div class="container mezera">
        <div class="row d-flex align-items-center">
            <div class="col-6">
                <img src="<?php bloginfo('template_url');?>/img/img1.png" class="obrazek">
            </div>
            <div class="col-6">
                <h1>Úvod</h1>
                <hr class="cara">
                <p class="text" style="width: 600px;">Vítejte v uživatelském manuálu k WordPressu! <br>
                                                    Na těchto stránkách najdete přehledné návody, tipy a rady, jak pracovat s WordPressem. Ať už jste začátečník nebo pokročilý uživatel, tento manuál vám pomůže se zorientovat a efektivně využít všechny možnosti, které WordPress nabízí.</p>
            </div>
        </div>
        <div class="row d-flex align-items-center mezera">
            <div class="col-6 text2">
                <h1 class="me-4">Co je Wordpress</h1>
                <hr class="cara ms-auto me-4">
                <p class="text" style="width: 605px;">WordPress je open-source systém, který umožňuje snadno vytvářet a spravovat webové stránky bez nutnosti programování. Používá se pro blogy, firemní weby i e-shopy a nabízí tisíce šablon a pluginů pro rozšíření funkcí.</p>
            </div>
            <div class="col-6">
                <img src="<?php bloginfo('template_url');?>/img/img2.png" class="obrazek">
            </div>
        </div>
    </div>

<div class="container mezera" style="text-align: center;">
    <h1>Obsah</h1>
    <hr class="cara mx-auto">
    <p class="text">Základní informace o tom, co je WordPress a k čemu slouží. 
                    Postup instalace a prvotního nastavení. 
                    Návody na práci s příspěvky, stránkami a rubriky. 
                    Tipy a rady pro efektivní práci s WordPressem. 
    </p>
</div>


<?php get_footer(); ?>
