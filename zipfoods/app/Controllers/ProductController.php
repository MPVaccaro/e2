<?php
namespace App\Controllers;

//use App\Products;

class ProductController extends Controller
{
    private $products;
    
    public function __construct($app)
    
    { 
            parent::__construct($app);
        
//            $this->products = new Products($this->app->path('database/products.json'));
    }
        
    public function index()
    {        
//        dump($products);
        
//        return 'Show all the products here...';
        
//        $products = new Products($this->app->path('database/products.json'));
        
           return $this->app->view('products.index', ['products' => $products = $this->app->db()->all('products')]);
    }
    
   
    public function show() 
    {
        
//        $products = new Products($this->app->path('database/products.json'));
//        return 'Show details for an individual product...';
        
        
        $id = $this->app->param('id');
        
        if(is_null($id))
        {
            
           $this->app->redirect('/products');
        }
        
//        $product = $this->products->getById($id);
        $product = $this->app->db()->findById('products', $id);
        
//        dump($product);
        if (is_null($product))
            {
            return $this->app->view('products.missing', [ 'id' => $id ]);
            } 
        
        #load the review details
        
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);
        
//        dump($reviews);
        
        $confirmationName = $this->app->old('confirmationName');
        
        return $this->app->view('products.show', [ 
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName 
        ]); 
    }
    
    
    public function saveReview()
    {
//        dump($_POST); 
//        $id = $this->app->input('id');
//        $_POST['name'];
//        $_POST['review'];
        
        $this->app->validate([
        'name' => 'required',
        'content' => 'required|minLength:100', 
        # Note how multiple validation rules are separated by a |
        # Note that some rules accept paramaters, which follow a :
]);
        
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');
        
        #insert into the database
        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
        ];
        
        # To do: Persist the review to the database, then display a confirm message  
        $this->app->db()->insert('reviews', $data); 
        # Send the user back to the product page with a confirmationName.
        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
        
//        dump($name);
//        dump($review);
//        dump($id);
       
    }
    
    public function newProduct()
    {
//   return 'Insert a new product here...';
        return $this->app->view('products.new' );  

    }

    public function saveNewProduct()
    
    {
        
//        dump($_POST); 
//        $id = $this->app->input('id');
//        $_POST['name'];
//        $_POST['description'];
//        $_POST['price'];
//        $_POST['available']; 
//        $_POST['weight'];
//        $_POST['perishable'];       
        
        
        
//        $this->app->validate([
//        'name' => 'required',
//        'content' => 'required|minLength:100', 
//        # Note how multiple validation rules are separated by a |
//        # Note that some rules accept paramaters, which follow a :
//]);
//
//        
//        $confirmationName = $this->app->old('confirmationName');
        
        
        $id = $this->app->input('id');
        $name = $this->app->input('name');
        $description = $this->app->input('description');
        $price = $this->app->input('price');
        $available = $this->app->input('available');
        $weight = $this->app->input('weight');
        $perishable = (int)$this->app->input('perishable');
        
        
        #insert into the database
        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'available' => $available,
            'weight' => $weight,
            'perishable' => $perishable,           
        ];
//        
//        dump($name);
//        dump($description);
//        dump($id);
        
//        # To do: Persist the review to the database, then display a confirm message  
        $this->app->db()->insert('products', $data); 
        # Send the user back to the product page with a confirmationName.
        $this->app->redirect('/products');
//        
    }
    
}