<?php

return [
    'account' => [
        'settings' => [
            'blocks' => [
                'general' => [
                    'title' => 'Übersicht',
                    'inputs' => [
                        'email' => 'Email',
                        'language' => 'Srache',
                    ],
                ],
                'password' => [
                    'title' => 'Password ändern',
                    'inputs' => [
                        'password' => 'Password',
                        'password_confirm' => 'Password bestätigen',
                    ],
                    'inputs_help' => [
                        'password' => 'Um dein Passwort zu ändern, bitte hier eintragen.',
                        'password_confirm' => 'Eingabe wiederholen, um das Passwort zu bestätigen.',
                    ],
                ],
            ],
        ],
    ],
    'notifications' => [
        'account' => [
            'email' => [
                'changed' => 'E-Mail wurde aktualisiert auf :addr!',
            ],
            'password' => [
                'changed' => 'Passwort wurde geändert!',
            ],
            'language' => [
                'changed' => 'Sprache wurde geändert auf :lang!',
            ],
        ],
    ],
];
