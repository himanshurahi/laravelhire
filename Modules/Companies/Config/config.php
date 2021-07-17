<?php

return [
    'name' => 'Companies',

    'entity_private_access' => true,

    /**
     * Always use lower name without custom characters, spaces, etc
     */
    'permissions' => [
        'companies.settings',
        'companies.browse',
        'companies.create',
        'companies.update',
        'companies.destroy'
    ]
];
