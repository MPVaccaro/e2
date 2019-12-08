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
    
    
    public function reasonform()
    {   
        $newName = $this->app->old('newName', null);
        return $this->app->view('reasonform', ['newName' => $newName]);
    }
    
    public function saveNewReason()
    {
        
        $this->app->validate([
            'name' => 'required',
            'content' => 'required|minLength:30', 
        ]);
        
        # Note how multiple validation rules are separated by a |
        # Note that some rules accept paramaters, which follow a :
        
        $data = [
        'name' => $this->app->input('name'),
        'content' => $this->app->input('content'),
        ];
        
        $this->app->db()->insert('reasons', $data);
        
        $this->app->redirect('/reasonform', ['newName' => $data['name']]);        
    }
    
        public function reasons()
    {
        $reasons = $this->app->db()->all('reasons');
        
        return $this->app->view('reasons', ['reasons' => $reasons]);
        
//        dump($reasons);
        
//        return $this->app->view('reasons');
    }
    
        public function reasondetails()
    {
        $reasonId = $this->app->param('id');
            
//        dump($reasonId);
            
        $reason = $this->app->db()->findById('reasons', $reasonId);    
 
//        dump($reason);            
//        return $this->app->view('reasondetails');
        
        if(is_null($reason))
            {
            return $this->app->redirect('reasons', ['reasonNotFound' => true]);
            }    
            
            
        return $this->app->view('reasondetails', ['reason' => $reason]);
    }
    
    
    public function resultslist()
    {
        return $this->app->view('resultslist');
    }

    
    
   }
    

