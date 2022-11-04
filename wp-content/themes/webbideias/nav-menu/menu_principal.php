<?php 

//Menu list
function create_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
        $menu_list  = '<ul>' ."\n";
              
        $menu_list .= '<!-- Collect the nav links, forms, and other content for toggling -->';
         
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
 
        $menu_list .= '<li>' ."\n";
        $menu_list .= '<a class="nav-link scrollto active" href="' . home_url() . '"></a>' ."\n";
        $menu_list .= '</li>' ."\n";
        

        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {
                 
                $parent = $menu_item->ID;
                $menu_array = array();
                
                $bool = true;
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
                     
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {
                    
                    $menu_list .= '<li class="dropdown">' ."\n";
                    $menu_list .= '<a href="' . $menu_item->url . '">'. $menu_item->title . '<i class="bi bi-chevron-down"></i></a>' ."\n";   
                    $menu_list .= '<ul>' ."\n";
                    $menu_list .= implode( "\n", $menu_array );
                    $menu_list .= '<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>' ."\n";
                    $menu_list .= '<ul>' ."\n";
                    $menu_list .= implode( "\n", $menu_array );
                    $menu_list .= '</ul>' ."\n";
                    $menu_list .= '</ul>' ."\n";

                } else {

                    #team
                    
                    if(($menu_item->url == '#hero') || ($menu_item->url == '#about') || ($menu_item->url == '#services') || ($menu_item->url == '#portfolio') || ($menu_item->url == '#team') || ($menu_item->url == '#recent-blog-posts') || ($menu_item->url == '#contact')){
                        $menu_list .= '<li>' ."\n";
                        $menu_list .= '<a class="nav-link scrollto active" href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                        
                    }else{
                        if($menu_item->url == '#getstart') {
                            $menu_list .= '<li>' ."\n";
                            $menu_list .= '<a class="getstarted scrollto" href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                        }
                    }
                    
                }
                 
            }
             
            // end <li>
            $menu_list .= '</li>' ."\n";
            $menu_list .= '</li>' ."\n";
            $menu_list .= '</li>' ."\n";
        }
          
        $menu_list .= '</ul>' ."\n";
        $menu_list .= '<i class="bi bi-list mobile-nav-toggle"></i>' ."\n";
  
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
     
    echo $menu_list;
}