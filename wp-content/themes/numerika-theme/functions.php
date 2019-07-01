<?php

require __DIR__.'/bootstrap/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
/*

functioin addStyles()
{
  wp_enqeue_style("nombre",get_stylesheet_url());
  wp_resgister_script("nombre",get_stylesheet_directory_url(), arreglo de dependencias);
  wp_enqeue_script("nombre",get_stylesheet_directory_url());
}
hook de estilos-> wp_enqeue _scripts */
add_action('init', 'solucion_register');

function solucion_register() {

    $labels = array(
        'name' => __( 'Soluciones' ),
        'singular_name' => __( 'Solución' ),
        'add_new' => __( 'Añadir Solución' ),
        'add_new_item' => __( 'Añadir Nueva Solución' ),
        'edit_item' => __( 'Editar Solución' ),
        'new_item' => __( 'Nueva Solución'),
        'view_item' => __( 'Ver Solución'),
        'search_items' => __( 'Buscar Solución'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-lightbulb',
        'public' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title')
      );

    register_post_type( 'soluciones' , $args );
}

add_action('init', 'equipo_register');

function equipo_register() {

    $labels = array(
        'name' => __( 'Equipo' ),
        'singular_name' => __( 'Equipo' ),
        'add_new' => __( 'Añadir Integrante' ),
        'add_new_item' => __( 'Añadir Nuevo Integrante' ),
        'edit_item' => __( 'Editar Integrante' ),
        'new_item' => __( 'Nuevo Integrante'),
        'view_item' => __( 'Ver Integrante'),
        'search_items' => __( 'Buscar Integrante'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-universal-access-alt',
        'public' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => false
      );

    register_post_type( 'equipo' , $args );
}

add_action('init', 'trayectory_register');

function trayectory_register() {

    $labels = array(
        'name' => __( 'Trayectoria' ),
        'singular_name' => __( 'Trayectoria' ),
        'add_new' => __( 'Añadir Evento' ),
        'add_new_item' => __( 'Añadir Nuevo Evento' ),
        'edit_item' => __( 'Editar Evento' ),
        'new_item' => __( 'Nuevo Evento'),
        'view_item' => __( 'Ver Evento'),
        'search_items' => __( 'Buscar Evento'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-calendar',
        'public' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => false
      );

    register_post_type( 'trayectoria' , $args );
}

add_action('init', 'project_register');

function project_register() {

    $labels = array(
        'name' => __( 'Proyectos' ),
        'singular_name' => __( 'Proyecto' ),
        'add_new' => __( 'Añadir Proyecto' ),
        'add_new_item' => __( 'Añadir Nuevo Proyecto' ),
        'edit_item' => __( 'Editar Proyecto' ),
        'new_item' => __( 'Nuevo Proyecto'),
        'view_item' => __( 'Ver Proyecto'),
        'search_items' => __( 'Buscar Proyecto'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-archive',
        'public' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail'),
        'has_archive' => true,

        'taxonomies' => [ 'tipos' ],
        // other arguments

      );

    register_post_type( 'proyecto' , $args );
}

add_action( 'init', 'create_project_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function create_project_custom_taxonomy() {

  $labels = array(
    'name' => _x( 'Tipos', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Editar tipo' ),
    'update_item' => __( 'Editar Tipo' ),
    'add_new_item' => __( 'Añadir Tipo' ),
    'new_item_name' => __( 'Nueva Tipo' ),
    'menu_name' => __( 'Tipos' ),
  );

  register_taxonomy('tipos',array('Proyectos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}
