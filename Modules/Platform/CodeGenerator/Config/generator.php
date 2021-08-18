<?php

return [
    'setup' => [

        /**
         * Module Name
         */
        'module_name' => 'AdminCompanies',

        /**
         * Singular module Name
         */
        'singular_name' => 'AdminCompany',

        /**
         * If set to true. Visibility of records in module will be limited with "Assigned TO" field (User or Group)
         */
        'entity_private_access' => false,

        /**
         * Entities definition
         */
        'entity' => [
            'company' => [

                /**
                 * Entity name
                 */
                'name' => 'AdminCompanies',

                /**
                 * Entity database table name
                 */
                'table' => 'admin_companies',

                /**
                 * main - Main entity of module.
                 * settings - Dictionary entity of module
                 */
                'type' => 'main',

                /**
                 * HasMorphOwner trait will be added to entity
                 */
                'ownable' => true,

                /**
                 * LogsActivity trait will be added to entity
                 */
                'activity' => false,

                /**
                 * Commentable trait will be added to entity
                 */
                'comments' => false,

                /**
                 * HasAttachment trait will be added to entity
                 */
                'attachments' => true,

                'properties' => [

                    /**
                     * Definition of section in show|create|edit
                     */
                    'information' => [

                        /**
                         * Entity field (key is a name of field)
                         * type - type of entity.
                         * supported types:
                         * - string    - text filed (Normal input)
                         * - integer   - Integer field (Number field)
                         * - text      - Textarea field
                         * - ownedBy   - Required if use ownable trait (Dropdown)
                         * - manyToOne - Dictionary    (Dropdown)
                         * - date      - Date field    (Calendar)
                         * - email     - text field    (Text with validation)
                         * - decimal   - Decimal field (Number field)
                         * - datetime  - Date with time (calendar with time)
                         * - boolean   - Checkbox
                         *
                         * rules - rules generated in request object
                         */
                       
                        'company_name' => [
                            'type' => 'string',
                            'rules' => 'required',
                        ],
                        'company_email' => [
                            'type' => 'string',
                            'rules' => 'required',
                        ],
                        'company_details' => [
                            'type' => 'text',
                            'rules' => 'required',
                        ],
                    ],
                ]
            ],

        ]

    ]
];
