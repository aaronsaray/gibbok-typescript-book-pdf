<?php

require_once 'Observer.php';

return [
    'theme' => 'my-theme',
    'content' => '/typescript-book-content',

    'title' => 'The Concise TypeScript Book',
    'author' => 'Simone Poggiali',

    'toc-enabled' => true,
    'toc-links' => true,
    'toc-header' => 'Table of Contents',

    'footer' => '',

    'markdown-extensions' => ['md'],

    'contentFilter' => fn (SplFileInfo $content) => $content->getFilename() === 'README.md',

    'contentExtra' => 'content-extra',

    'observers' => [
        new \Typesetterio\Typesetter\Observers\DefaultMarkdownConfiguration(),
        new \Typesetterio\Typesetter\Observers\Credits(),
        new Observer(),
    ],
];
