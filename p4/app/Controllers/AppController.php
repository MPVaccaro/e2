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
        $newName=$_POST['newName'];
    }
    
    public function saveNewReason()
    { 
        $this->app->validate([
            'name' => 'required',
            'benefit' => 'required',
            'content' => 'required|minLength:30', 
        ]);
        
        # Note how multiple validation rules are separated by a |
        # Note that some rules accept paramaters, which follow a :
        
        $data = [
        'name' => $this->app->input('name'),
        'benefit' => $this->app->input('benefit'),    
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
                        
        $reason = $this->app->db()->findById('reasons', $reasonId);    
 
//        dump($reason);            
        
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
        ]);
                
        $winner = null;
        
        $move = ["Grasp the Bird's Tail", "Repulse the Monkey", "Golden Eagle Cools its Wing", "Cloud Hands", "Lotus Kick","Four Corners", "Fair Lady Works the Shuttles", "The Whole Form!!", "The Whole Form!!", "The Whole Form!!",];
        
        $newMove = $move[rand(0, 9)];

        $currentMove = $newMove;

            if ($newMove == "The Whole Form!!") 
                {
                    $winner = 'Is Ready for the Next Goal';
                } 
            else 
                {
                    $winner = 'Is Ready for the Next Move in the Tai Chi Form';
                }

    
//        dump ($newMove);
//        dump ($winner);
        
        $data = [  
        'goal' => $this->app->input('goal'),
        'section' => $newMove,
        'result' => $winner,           
        ];
        
        $this->app->db()->insert('games', $data);


        $this->app->redirect('/myResult');  
 
    }
    
    
    public function myresult()
    {
       
        $lastGameAdded = $this->app->db()->run('SELECT * FROM games ORDER BY id DESC LIMIT 1')->fetch();

//    dump($lastGameAdded);
        
        #Yesterday's specific code that worked
//        $myResult = $this->app->db()->findById('games', 131);
//     
        return $this->app->view('myResult', ['games' => $lastGameAdded]);

            if(is_null($game))
                {
                return $this->app->redirect('games', ['gameNotFound' => true]);
                }                
        #end of yesterday's code
        
//        dump ($data);
//        
//        return $this->app->view('myResult' );
        
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
    

