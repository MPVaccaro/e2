<?php

return [
    '/' => ['AppController', 'index'],
    '/contact' => ['AppController', 'contact'],
    '/about' => ['AppController', 'about'],
    '/product' => ['ProductController', 'show'],
    '/products' => ['ProductController', 'index'],
    '/products/save-review' => ['ProductController', 'saveReview'],
    '/practice' => ['AppController', 'practice'],
    '/practice2' => ['AppController', 'practice2'],
];
