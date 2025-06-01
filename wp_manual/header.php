<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet" >


<body style="background-color: #ADEFD1;">
    <!--navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #18184E;">
        <div class="container-fluid"> 
            <?php
            //hlavní menu
                wp_nav_menu(array(
                    'theme_location' => 'hlavni-menu',
                    'menu_class' => 'navbar-nav me-auto ms-5 gap-3',
                    'container' => false
                ));
            ?>    
            <!--Logo-->
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="Avatar Logo" style="width:50px; margin-right: 135px;" class="rounded-pill"> 
            </a>

            <?php
            //kontaktní menu
                wp_nav_menu(array(
                    'theme_location' => 'kontakt-menu',
                    'menu_class' => 'navbar-nav gap-3 ms-auto me-4',
                    'container' => false
                ));
            ?>  
          
        </div>
      </nav>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
