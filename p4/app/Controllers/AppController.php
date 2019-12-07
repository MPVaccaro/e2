<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {  
         return $this->app->view('index');
    }
    
    public function contact()
    {
        return $this->app->view('contact');
    }
    
    public function game()
    {
        return $this->app->view('game');
    }
    
     public function about()
    {
        return $this->app->view('about');
    }
    
    public function reasons()
    {
        return $this->app->view('reasons');
    }
    
        public function reasonform()
    {
        return $this->app->view('reasonform');
    }
    public function reasonlist()
    {
        return $this->app->view('reasonlist');
    }

    
    
   }
    

