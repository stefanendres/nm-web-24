<?php

Kirby::plugin('your-project/embed-block', [
  'blueprints' => [
    'blocks/embed' => __DIR__ . '/blueprints/blocks/embed.yml'
  ],
  'snippets' => [
    'blocks/embed' => __DIR__ . '/snippets/blocks/embed.php'
  ]
]);
