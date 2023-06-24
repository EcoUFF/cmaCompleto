<?php
    function fila_de_arquivos(){
        wp_register_style('estilo', get_stylesheet_uri(), [], '1.0.0', false);
        wp_register_style('estilo_reset', STYLES_DIR . '/reset.css', [], '1.0.0', false);
        wp_register_style('estilo_head', STYLES_DIR . '/estilo_header.css', [], '1.0.0', false);
        wp_register_style('estilo_foote', STYLES_DIR . '/estilo_footer.css', [], '1.0.0', false);
        wp_register_style('estilo_home', STYLES_DIR . '/estilo_home.css', [], '1.0.0', false);
        wp_register_style('estilo_conhece', STYLES_DIR . '/estilo_conhecimento.css', [], '1.0.0', false);

        wp_register_script('js_quem_somos', JAVA_DIR . '/quem_somos.js', [], '1.0.0', true);
        wp_register_script('js_fale_conosco', JAVA_DIR . '/fale_conosco.js', [], '1.0.0', true);

        //fila
        wp_enqueue_style('estilo');
        wp_enqueue_style('estilo_reset');
        wp_enqueue_style('estilo_head');
        wp_enqueue_style('estilo_foote');
        wp_enqueue_style('estilo_home');
        wp_enqueue_style('estilo_conhece');

        wp_enqueue_script('js_quem_somos');
        wp_enqueue_script('js_fale_conosco');

    }
?>