<?php

return [

    'providers' => [
        App\Providers\AppServiceProvider::class,
        App\Providers\AjaxServiceProvider::class,
        App\Providers\ControllerServiceProvider::class,
        App\Providers\CustomPostTypeServiceProvider::class,
        App\Providers\FiltersServiceProvider::class,
        App\Providers\ActionsServiceProvider::class,
        App\Providers\MenuServiceProvider::class,
        App\Providers\MetaboxServiceProvider::class,
        App\Providers\ScriptsServiceProvider::class,
        App\Providers\SupportServiceProvider::class,
        App\Providers\TaxonomyServiceProvider::class,
        App\Providers\OptionsServiceProvider::class,
    ],

    'special-pages' => [
        'home' => [
            'Home',
            ''
        ],
        'contacto' => [
            'Contacto',
            ''
        ],
        'nuestra-firma' => [
            'Nuestra firma',
            ''
        ],

        // Borrar en cuanto se integren
        // estas no son páginas del sitio

    ],

    'special-categories' => [],

    'special-tags' => [],

];
