<?php

add_action('init', 'gpx_arquivo_taxonomy', 1);

function gpx_arquivo_taxonomy()
{
    $categoria = new GPX_Taxonomy(
        __('Categoria de Documento', 'gpx'), // Nome (Singular) da nova Taxonomia.
        'categoria-documento', // Slug do Taxonomia.
        'documento' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $categoria->set_labels(
        array(
            'singular_name' => __('Categoria de Documento', 'gpx'),
            'add_or_remove_items' => __('Adicionar ou remover Categorias', 'gpx'),
            'view_item' => __('Ver Categoria', 'gpx'),
            'edit_item' => __('Editar Categoria', 'gpx'),
            'search_items' => __('Pesquisar Categorias', 'gpx'),
            'update_item' => __('Atualizar Categoria', 'gpx'),
            'parent_item' => __('Categoria Pai', 'gpx'),
            'parent_item_colon' => __('Categoria Pai', 'gpx'),
            'menu_name' => __('Categorias de Documento', 'gpx'),
            'add_new_item' => __('Adicionar Nova', 'gpx'),
            'new_item_name' => __('Nova Categoria', 'gpx'),
            'all_items' => __('Todas Categorias', 'gpx'),
            'separate_items_with_commas' => __('Separar Categorias por vírgula', 'gpx'),
            'choose_from_most_used' => __('Escolher Categorias mais usadas', 'gpx'),
        )
    );

    $categoria->set_arguments(
        array(
            'hierarchical' => true
        )
    );
}