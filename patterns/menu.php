<?php
/**
 * Title: Menu
 * Slug: twentytwentyfour-child/menu
 * Inserter: no
 */
?>

<?php
if ( has_nav_menu( "primary_menu" ) ) {
						
                                 wp_nav_menu(
							array(
							"theme_location"=>'primary_menu',
							"menu_class"=>'',
							'menu_id'=>'',
							"container"=>'',
							)
						);
                            
}else{
    echo "No Menu";
}
                        ?>


