<?php 

function fullbanner_register() {
    
    $labels = array(
        'name'                  => _x('Fullbanner', 'post type general name'),
        'singular_name'         => _x('Fullbanner', 'post type singular name'),
        'add_new'               => _x('Adicionar Fullbanner', 'fullbanner'),
        'add_new_item'          => __('Adicionar Fullbanner', 'fullbanner'),
        'edit_item'             => __('Editar Fullbanner'),
        'new_item'              => __('Novo Fullbanner'),
        'view_item'             => __('Ver Fullbanner'),
        'search_items'          => __('Procurar Fullbanner'),
        'not_found'             => __('Nada Encontrado'),
        'not_found_in_trash'    => __('Nada encontrado no lixo'),
        'parent_item_colon'     => '',
    );
    $args = array(
        'exclude_from_search' => true,
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'fullbanner'),
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-images-alt',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 6,
        'supports'              => array('title'), 
    );
    register_post_type('fullbanner', $args);
}
add_action('init', 'fullbanner_register', 0);

function sidebanner_register() {
    
    $labels = array(
        'name'                  => _x('Sidebanner', 'post type general name'),
        'singular_name'         => _x('Sidebanner', 'post type singular name'),
        'add_new'               => _x('Adicionar Sidebanner', 'sidebanner'),
        'add_new_item'          => __('Adicionar Sidebanner', 'sidebanner'),
        'edit_item'             => __('Editar Sidebanner'),
        'new_item'              => __('Novo Sidebanner'),
        'view_item'             => __('Ver Sidebanner'),
        'search_items'          => __('Procurar Sidebanner'),
        'not_found'             => __('Nada Encontrado'),
        'not_found_in_trash'    => __('Nada encontrado no lixo'),
        'parent_item_colon'     => '',
    );
    $args = array(
        'exclude_from_search' => true,
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'sidebanner'),
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-images-alt',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 6,
        'supports'              => array('title'), 
    );
    register_post_type('sidebanner', $args);
}
add_action('init', 'sidebanner_register', 0);

function portfolio_register() {

    $labels = array(
        'name'                  => _x('Portfólio', 'post type general name'),
        'singular_name'         => _x('Portfólio', 'post type singular name'),
        'add_new'               => _x('Adicionar Novo', 'portfolio'),
        'add_new_item'          => __('Adicionar Novo Portfólio'),
        'edit_item'             => __('Editar Portfólio'),
        'new_item'              => __('Novo Portfólio'),
        'view_item'             => __('Ver Portfólio'),
        'search_items'          => __('Procurar Portfólio'),
        'not_found'             => __('Nada encontrado'),
        'not_found_in_trash'    => __('Nada encontrado na lixeira'),
        'parent_item_colon'     => '',
        'menu_name'             => 'Portfólio',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => true,
        'capability_type'       => 'post',
        'has_archive'           => false,
        'hierarchical'          => false,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-images-alt',
        'supports'              => array('title', 'thumbnail', 'excerpt'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'portfolio_register');

function produto_register() {

    $labels = array(
        'name'                  => _x('Produto', 'post type general name'),
        'singular_name'         => _x('Produto', 'post type singular name'),
        'add_new'               => _x('Adicionar Novo', 'produto'),
        'add_new_item'          => __('Adicionar Novo Produto'),
        'edit_item'             => __('Editar Produto'),
        'new_item'              => __('Novo Produto'),
        'view_item'             => __('Ver Produto'),
        'search_items'          => __('Procurar Produto'),
        'not_found'             => __('Nada encontrado'),
        'not_found_in_trash'    => __('Nada encontrado na lixeira'),
        'parent_item_colon'     => '',
        'menu_name'             => 'Produto',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => true,
        'capability_type'       => 'post',
        'has_archive'           => false,
        'hierarchical'          => false,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-images-alt',
        'supports'              => array('title', 'thumbnail', 'excerpt'),
    );

    register_post_type('produto', $args);
}
add_action('init', 'produto_register');

?>
