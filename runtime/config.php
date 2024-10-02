<?php

require_once 'Observer.php';

return [
    'theme' => 'my-theme',
    'content' => '/typescript-book-content',

    'title' => 'The Concise TypeScript Book',
    'author' => 'Simone Poggiali',

    'toc-enabled' => false,
    'toc-links' => true,
    'toc-header' => 'Table of Contents Header',

    'footer' => '',

    'markdown-extensions' => ['md'],

    'contentFilter' => fn (SplFileInfo $content) => $content->getFilename() === 'README.md',

    'observers' => [
        new \Typesetterio\Typesetter\Observers\DefaultMarkdownConfiguration(),
        new \Typesetterio\Typesetter\Observers\Credits(),
        new Observer(),
    ],
];
