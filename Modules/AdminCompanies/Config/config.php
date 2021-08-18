<?php

return [
    'name' => 'AdminCompanies',

    'entity_private_access' => false,

    /**
     * Always use lower name without custom characters, spaces, etc
     */
    'permissions' => [
        'admincompanies.settings',
        'admincompanies.browse',
        'admincompanies.create',
        'admincompanies.update',
        'admincompanies.destroy'
    ]
];
