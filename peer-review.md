## P3 Peer Review

+ Reviewer's name: Mary Vaccaro
+ Reviwee's name: Anna Zinoveva
+ URL to reviewee's Github repo: [https://github.com/anyav77/e2/tree/master/p3](https://github.com/anyav77/e2/tree/master/p3)

### Are you able to produce any errors or unexpected results?

It worked as expected, with the exception that it worked even if there was no user input. This could have been corrected by inputting a _"Validator"_ method that required a radio box selection from the user. Validators, however, were not yet covered in the course material and validators were probably beyond the scope of the project. 

_(I ran into a similar problem on my project and solved it by putting a simple validator in my drop down menu. I found the solution at [w3schools.com](https://www.w3schools.com/tags/att_select_required.asp). In the case of a drop down menu it simply required inputting ```required``` in the top line of my drop down menu ```<select required id="reasons" name="reasons">``` .)_

When revewing this project, **I found that the solution is not nearly so simple for radio boxes.**  Most radio box validators solutions I found require _javascript_ or _jquery_, and seemed complicated. These solutions seemed well beyond the scope of me and of this project. For example [stackoverflow.com](https://stackoverflow.com/questions/10349556/best-way-to-validate-fields-and-radio-buttons-with-jquery) lists jquery solutions. 

However, I continued searching and found a very adequate, albeit imperfect, solution: make one radio box pre-checked. [html5-tutorial.net](https://html5-tutorial.net/forms/radiobuttons/) 

The beauty of this solution is that it is both simple and clear: one box is pre-set to "checked" and the user either agrees with it or selects something else. In this example, I decided to pre-check the middle box (paper) as it looked less intuitive than having the first item (rock) selected, and therefore more likely to stand out to the user as an item that needed to be re-selected. This is the code I changed:

```<input type="radio" value="paper" id="paper" name="choice" >```

I added the word "checked":

```<input type="radio" value="paper" id="paper" name="choice" checked>```

Game Odds: The probability of this game worked as expected. The random computer choice was 1 out of 3, set as (0-2), which matched the 3 choices of rock, paper, sissors. A win correctly occurred  according to the stated rules of "rock beats scissors, paper beats rock, scissors beat paper" and a tie was declared when the computer and user selected the same item.


### Referencing the course notes on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.

This project uses the "Design C" format described in the Form Design Flow course notes.

The user starts the game on the index.php page. The index.php page requires the index-controller.php page.  If the user fills out the html form on the index page, the form's action sends it to the process.php page where the form selections are analyzed and the results are determined via an if/else statement. The results are collected. The process.php page sends its results to the index-controller.php page, which sees that the form had its radio boxes selected (```isset``` found results to be true), and the results are shown as ```$showResults=true```. After that the index-controller session form resets the session to null, ```$_SESSION['results'] = null```, so that the process can begin anew. The process.php page then redirects the user back to the index.php page, where the radio boxes are reset and the results of the prior game are displayed.

### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 

I see no separation of concern issues. All of the HTML code is located in the index.php "view" file. The variable results on the index.php "view" file are input using the appropriate php code:
```php
<?php echo $results['xyz'] ?>
``` 

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?

The ```$winner``` variable indicated all three results – (winner, loser, tie), so I was initially confused whenever I saw it indicating a loser or tie result. This variable worked correctly and there was nothing wrong with its use, but it would have been clearer if it had been named more accurately, such as ```$gameResult``` rather than $winner. 

Several useful comments were made on the process.php page. The comments were brief and helpful, and described the mechanics of the process page.

### List any/all built-in PHP methods used with a brief summary of what the method does.

```session_start``` Starts a form session, or resumes a session. This was used on the index-controller.php page to determine if the session was activated using the ```isset``` method.

```isset``` This is a boolean that determines if a variable is set (and is therefore not null). If the variable is set, it returns TRUE, if it is not set (or is null) it returns FALSE. This is used on the index-controller.php page to determine if the session was activated.

### Are there any parts of the code that you found interesting or taught you something new?

The ```readme.md``` file was very comprehensive and clearly described not only the steps taken when writing the code, but it defined how the game actually worked. The part I have trouble understanding (the links between the process and controller pages) was very clearly and concisely described in the "readme" file. This student demonstrated a superior understanding of the mechanics of this project. 

### Are there any parts of the code that you don't understand?

No. Once I looked carefully, everything was clearly written and I was able to understand it. (As noted above, I was confused by the use of $winner – which was not incorrect, but would have been clearer had it been instead named $gameResults, or something similar.)

### Are there any best practices discussed in course material that you feel were not addressed in the code?

No. It seemed very well done and clearly laid out to me.

### Do you have any additional comments not covered in the above questions?
When I ran the index.php page through the [HTML Validator](https://html5.validator.nu/), I found one very minor HTML error: 
```<input type="radio" value="scissors" id="scissors" name="choice">```
   ```<label for="Scissors">Scissors</label>```

I was able to correct it by changing the uppercase "S" in "Scissors" to lower case:   
 ```<label for="scissors">Scissors</label>```