<?php

add_action('init', 'gpx_documento_cpt', 1);

function gpx_documento_cpt()
{
    $documento = new GPX_Post_Type(
        __('Documento', 'gpx'), // Nome (Singular) do Post Type.
        'documento' // Slug do Post Type.
    );

    $documento->set_labels(
        array(
            'menu_name' => __('Documentos da Área Restrita', 'gpx'),
            'singular_name' => __('Documento', 'gpx'),
            'view_item' => __('Ver Documentos', 'gpx'),
            'edit_item' => __('Editar Documentos', 'gpx'),
            'search_items' => __('Pesquisar Documentos', 'gpx'),
            'update_item' => __('Atualizar Documentos', 'gpx'),
            'parent_item_colon' => __('Documento Pai', 'gpx'),
            'add_new' => __('Adicionar Novo', 'gpx'),
            'add_new_item' => __('Adicionar novo Documento', 'gpx'),
            'new_item' => __('Novo', 'gpx'),
            'all_items' => __('Todos Documentos', 'gpx'),
            'not_found' => __('Nenhum Documento encontrado', 'gpx'),
            'not_found_in_trash' => __('Nenhum Documento encontrado na lixeira', 'gpx'),
        )
    );

    $documento->set_arguments(
        array(
            'has_archive' => true,
            'supports' => array('title'),
        )
    );
}
