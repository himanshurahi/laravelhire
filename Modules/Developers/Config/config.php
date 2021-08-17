<?php

return [
    'name' => 'Developers',

    'entity_private_access' => false,

    /**
     * Always use lower name without custom characters, spaces, etc
     */
    'permissions' => [
        'developers.settings',
        'developers.browse',
        'developers.create',
        'developers.update',
        'developers.destroy'
    ]
];
