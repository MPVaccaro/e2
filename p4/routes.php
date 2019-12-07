<?php

return [
    '/' => ['AppController', 'index'],
//    '/reasons' => ['AppController', 'index'],
    '/contact' => ['AppController', 'contact'], 
    '/about' => ['AppController', 'about'],
    '/game' => ['AppController', 'game'],
    '/reasons' => ['AppController', 'reasons'],
    '/reasonform' => ['AppController', 'reasonform'],
    '/resultslist' => ['AppController', 'resultslist'],
    '/products' => ['ProductController', 'index'],
    '/product' => ['ProductController', 'show'],
    '/products/save-review' => ['ProductController', 'saveReview'],
    '/products/new' => ['ProductController', 'newProduct'],
    '/products/save-new-product' => ['ProductController', 'saveNewProduct'],
    '/practice' => ['AppController', 'practice'],
    '/practice2' => ['AppController', 'practice2'],
];
