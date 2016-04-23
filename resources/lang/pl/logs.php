<?php

// Logs translation map
return [
    // owner_type
    'model' => [
        'App\Models\Groups'         => 'Grupy',
        'App\Models\Mask'           => 'Maski',
        'App\Models\MetaDefaults'   => 'Domyślne metatagi',
        'App\Models\MetaRoutes'     => 'Metatagi',
        'App\Models\Privileges'     => 'Uprawnienia',
        'App\Models\Roles'          => 'Role',
    ],
    'tableToModel' => [
        'groups'        => 'App\Models\Groups',
        'mask'          => 'App\Models\Mask',
        'meta_defaults' => 'App\Models\MetaDefaults',
        'meta_routes'   => 'App\Models\MetaRoutes',
        'privileges'    => 'App\Models\Privileges',
        'roles'         => 'App\Models\Roles',
        'users'         => 'App\User',
    ],
    'column' => [
        'App\Models\Groups'         => [
            'id'            => 'Id grupy',
            'name'          => 'Nazwa grupy',
            'descr'         => 'Opis grupy',
        ],
        'App\Models\Mask'           => [
            'id'            => 'Id maski',
            'route'         => 'Trasa',
            'operations'    => 'Operacje',
            'user_id'       => 'Id użytkownika',
        ],
        'App\Models\MetaDefaults'   => [
            'md_id'         => 'Id domyślnych meta tagów',
            'tag_name'      => 'Nazwa meta tagu',
            'tag_value'     => 'Wartość meta tagu',
        ],
        'App\Models\MetaRoutes'     => [
            'mr_id'         => 'Id trasy meta tagów',
            'tag_name'      => 'Nazwa meta tagu',
            'tag_value'     => 'Wartość meta tagu',
        ],
        'App\Models\Privileges'     => [
            'id'            => 'Id uprawnienia',
            'route'         => 'Trasa',
            'operations'    => 'Operacje',
        ],
        'App\Models\Roles'          => [
            'id'            => 'Id roli',
            'name'          => 'Nazwa roli',
            'descr'         => 'Opis roli',
        ],
    ],
    'operation' => [
        'created'   => trans('dictionary.create'),
        'saved'     => trans('dictionary.update'),
        'deleted'   => trans('dictionary.delete'),
        'updated'   => trans('dictionary.update'),
    ],
    // For something else
    'unkown' => [

    ],
];