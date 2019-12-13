<?php

namespace App\Commands;

class AppCommand extends Command
{

    public function test()
    {
        dump('It works! You invoked your first command.');
    }
    
    public function migrate()
    {
        $this->app->db()->createTable('reasons', [
            'name' => 'varchar(255)',
            'benefit' => 'varchar(100)',
            'content' => 'text',
        ]);

        $this->app->db()->createTable('games', [
            'goal' => 'varchar(255)',
            'section' => 'varchar(255)',
            'result' => 'varchar(255)',    
        ]);
       
        dump('Migration complete; check the database for your new data.');
    }
    
    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 2 inputs for each table
        for ($i = 0; $i < 2; $i++) {

        # Set up the inputs
        $reason = [
            'name' => $faker->name,
            'benefit'=> $faker->word,
            'content' => $faker->sentences(rand(1,4), true),
            ];
        
        $game = [
            'goal' => $faker->word,
            'section'=> $faker->word,
            'result' => $faker->word,
            ];  

        # Insert the review
        $this->app->db()->insert('reasons', $reason);
        $this->app->db()->insert('games', $game);    
        }
        
        dump('Seeding complete; check the database for your new tables.');
    }
        
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
      
}