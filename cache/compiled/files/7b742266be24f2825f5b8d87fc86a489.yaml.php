<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/moonreporter/public_html/user/config/site.yaml',
    'modified' => 1515362666,
    'data' => [
        'title' => 'Moon Reporter',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Eric Marty',
            'email' => 'contact@ericmarty.co'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Moon Reporter, a video game by Eric Marty.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
