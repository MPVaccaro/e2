<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;
	
    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;	
		$this->lastName = $lastName;
        $this->age = $age;
    }
    
	public function getFullName()
    {
		return $this->firstName.' '.$this->lastName;
    }
    
	public function getClassification()
    {
		if ($this->age >= 18)
		{
		return 'adult';
		}
		else
		{
		return 'minor';	
		}	
			
        // return ($this->age >= 18) ? 'adult' : 'minor';
    }
}

//NOTES: this-> references the public class property above that will be in the current instance, 
//the = $xyz references the property passed to the function that is in parentheses
//There is an example of the shortened ? : ternary operator	