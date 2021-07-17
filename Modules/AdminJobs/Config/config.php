<?php

return [
    'name' => 'AdminJobs',

    'entity_private_access' => false,

    /**
     * Always use lower name without custom characters, spaces, etc
     */
    'permissions' => [
        'adminjobs.settings',
        'adminjobs.browse',
        'adminjobs.create',
        'adminjobs.update',
        'adminjobs.destroy'
    ]
];
