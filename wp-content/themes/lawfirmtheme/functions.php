<?php

function law_firm_adicionando_recurso_ao_tema()
{
    add_theme_support(
        'custom-logo'
    );
}
add_action('after_setup_theme', 'law_firm_adicionando_recurso_ao_tema');

function law_firm_registrando_menu()
{
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}
add_action('init', 'law_firm_registrando_menu');
