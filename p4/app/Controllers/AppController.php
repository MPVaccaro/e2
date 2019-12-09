<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {  
         return $this->app->view('index');
    }
    
    public function contact()
    {
        return $this->app->view('contact');
    }
        
     public function rules()
    {
        return $this->app->view('rules');
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
 
    public function game()
    {
        return $this->app->view('game');
    }
    
    public function saveNewGame()
    {
        
        $this->app->validate([
            'goal' => 'required',
//            'content' => 'required|minLength:30', 
        ]);
                
        $winner = null;
        
        $move = ["Grasp the Bird's Tail", "Repulse the Monkey", "Golden Eagle Cools its Wing", "Cloud Hands", "Lotus Kick","Four Corners", "Fair Lady Works the Shuttles", "The Whole Form!!", "The Whole Form!!", "The Whole Form!!",];
        
        $newMove = $move[rand(0, 9)];

        $currentMove = $newMove;

            if ($newMove == "The Whole Form!!") 
                {
                    $winner = '1';
                } 
            else 
                {
                    $winner = '0';
                }

        dump ($winner);                
        dump ($newMove);
        dump ($winner);
        
        $data = [
        'goal' => $this->app->input('goal'),
        'section' => $newMove,
        'result' => $winner,           
        ];
        
        $this->app->db()->insert('games', $data);

//        $this->app->redirect('/results');       
//        $this->app->redirect('/reasonform', ['newName' => $data['name']]);    
    }
    
    public function gameplay()
    {

        return 'This will be where the game mechanics are';
    }
    
    public function resultdetails()
        
      {
        $gameId = $this->app->param('id');
            
        $game = $this->app->db()->findById('games', $gameId);    
         
        if(is_null($game))
            {
            return $this->app->redirect('results', ['gameNotFound' => true]);
            }                
            
        return $this->app->view('resultdetails', ['game' => $game]);
    }   
        

    public function results()
    {
        $games = $this->app->db()->all('games');
          
        return $this->app->view('results', ['games' => $games]);

            if(is_null($game))
                {
                return $this->app->redirect('games', ['gameNotFound' => true]);
                }                
            
        return $this->app->view('resultdetails', ['game' => $game]);
        
    }

}
    

