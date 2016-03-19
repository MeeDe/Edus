<?php

return [
    'welcome'  => [
        'index'   => 'Witamy w systemie '.trans('system.name'),
        'inactive'  => 'Twoje konto nie zostało jeszcze aktywowane',
    ],
    'administrator' => [

        'index'     => 'Witaj w panelu administracyjnym',
        'header'    => 'Panel administratora',

        'users' => [
            'index'     => '',
            'header'    => 'Użytkownicy',
            'panel' => [
                'active_users' => [
                    'header' => 'Zarejestrowani użytkownicy',
                ],
                'inactive_users' => [
                    'header' => 'Nieaktywni użytkownicy - składający podanie',
                ],
                'registered_users' => [
                    'header' => 'Użytkownicy systemu',
                ],
            ],
            'edit' => [
                'header' => 'Edycja użytkownika',
            ],
        ],
        'subjects' => [
            'index'     => '',
            'header'    => 'Przedmioty',
        ],
        'groups' => [
            'index'     => '',
            'header'    => 'Grupy',
            'panel' => [
                'manage' => [
                    'header' => 'Zarządzanie',
                ],
            ],
            'edit' => [
                'header' => 'Edytuj grupy',
                'panel' => [
                    'stock' => [
                        'header' => 'Grupa',
                    ],
                    'users' => [
                        'header' => 'Użytkownicy grupy',
                    ],
                ],
            ],
            'create' => [
                'header' => 'Utwórz grupę',
                'panel' => [
                    'roles' => [
                        'header' => 'Wybierz role',
                    ],
                ],
            ],
        ],
        'roles' => [
            'index'     => '',
            'headers' => [
                'header'    => 'Role',
                'role_review'   => 'Przegląd roli',
            ],
            'create' => [
                'header' => 'Utwórz rolę',
            ],
             'edit' => [
                'header' => 'Edytuj rolę',
            ],
        ],
        'mailer' => [
            'index'     => '',
            'header'    => 'Mailer',
        ],
        'files' => [
            'index'     => '',
            'header'    => 'Pliki',
        ],
        'logs' => [
            'index'     => '',
            'header'    => 'Logi',
        ],
        'system' => [
            'index'     => '',
            'header'    => 'System',
        ],
    ],
];