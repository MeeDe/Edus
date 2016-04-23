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
                'panel' => [
                    'acl' => [
                        'header' => 'ACL',
                    ],
                ],
            ],
        ],
        'privileges' => [
            'header'    => 'Uprawnienia',
            'create'    => [
                'header'    => 'Utwórz uprawnienia',
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
                    'roles' => [
                        'header' => 'Role',
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
                'modal'     => 'Rola',
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
            'headers'    => [
                'header'    => 'Logi',
                'modal'     => 'Log',
                'table'     => 'Wyniki',
                'search_by_user'    => 'Szukaj według użytkownika',
                'search_by_table'   => 'Szukaj według tabeli',
            ],
        ],
        'system' => [
            'index'     => '',
            'header'    => 'System',
            'panel'=> [
                'website' => [
                    'header'        => 'Ustawienia strony',
                    'offline_msg'   => 'Strona została tymczasowo wyłączona',
                ],
                'data' => [
                    'header' => 'Zarządzanie danymi',
                    'export' => [
                        'header' => 'Eksportuj do',
                        'csv'   => 'CSV',
                        'pdf'   => 'PDF',
                        'sql'   => 'SQL',
                        'xml'   => 'XML',
                        'json'  => 'JSON',
                    ],
                ],
            ],
        ],
    ],
];