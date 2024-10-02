<?php

return [
    'theme' => 'my-theme',
    'content' => '/typescript-book-content',

    'title' => 'The Concise TypeScript Book',
    'author' => 'Gibbok',

    'toc-enabled' => true,
    'toc-links' => true,
    'toc-header' => 'Contents',

    'footer' => 'Page {PAGENO}',

    'markdown-extensions' => ['md'],

    'contentFilter' => fn (SplFileInfo $content) => $content->getFilename() === 'README.md',

    'observers' => [
        new \Typesetterio\Typesetter\Observers\DefaultMarkdownConfiguration(),
        new \Typesetterio\Typesetter\Observers\FirstElementInChapterCSSClass(),
        new \Typesetterio\Typesetter\Observers\BreakToPageBreak(),
        new \Typesetterio\Typesetter\Observers\Credits(),
    ],
];
