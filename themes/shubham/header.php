<!DOCTYPYE HTML>
<html>
    <head>
        <?php wp_head();?>
        

    </head>
</body <?php body_class();?>>

<header class="stickt-top">
    <div class="container">
    <?php wp_nav_menu(
        array(
        'theme_location' => 'top-menu',
        'menu_class'=> 'blog'
        )
    );?>
    </div>
</header>