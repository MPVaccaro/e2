<?php

require Person.php;

$person = new Person ('John', 'Harvard', 45);



// echo $person->firstName; # Should print "John" (accesses public property first name)

// echo $person->getFullName(); # Should print "John Harvard" (accesses function getFullName)

// echo $person->getClassification(); # Should print "adult" (or minor if I change the age listed above)

