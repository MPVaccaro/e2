<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    private $products;
    
    public function __construct($app)
    
    { 
            parent::__construct($app);
        
            $this->products = new Products($this->app->path('database/products.json'));
    }
        
    public function index()
    {        
//        dump($products);
        
//        return 'Show all the products here...';
        
//        $products = new Products($this->app->path('database/products.json'));
        
           return $this->app->view('products.index', ['products' => $this->products->getAll()]);
    }
    
   
    public function show() 
    {
        
//        $products = new Products($this->app->path('database/products.json'));
//        return 'Show details for an individual product...';
        
        
        $id = $this->app->param('id');
        
        $product = $this->products->getById($id);
        
//        dump($product);
        if (is_null($product))
            {
            return $this->app->view('products.missing', [ 'id' => $id ]);
            } 
        
        
        return $this->app->view('products.show', [ 'product' => $product ]); 
    }
}