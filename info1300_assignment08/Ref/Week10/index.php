<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Simple Dice Roller</title>
    <link rel="stylesheet" type="text/css" href="styles/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="styles/site.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
    <?php
      include 'includes/top.php';
    ?>
    <div id="container">
        
      <div id="rollFormDiv"> <!-- form choosing the number of dice and rolling them -->
	    <form>
	        <p>Roll those bones! Choose the number of dice you want, then press Roll!</p>
	        <select id="diceNumber">
	            <option value="1">1</option>
	            <option value="2">2</option>
	            <option value="3">3</option>
	         </select>
	        <button id="rollButton">Roll!</button>
	    </form>
	</div> <!-- end of formDiv -->
	
	<div id="diceDiv"> <!-- div for displaying the rolled dice -->
        <!-- dice images adapted from:
        https://openclipart.org/detail/96079/dado-1
        https://openclipart.org/detail/96085/dado-2
        https://openclipart.org/detail/96091/dado-3
        https://openclipart.org/detail/96097/dado-4
        https://openclipart.org/detail/96103/dado-5
        https://openclipart.org/detail/96109/dado-6
        -->
	    <img id="die_0" src="images/die_0.png" alt="blank die" width="90" height="88">
	    <img id="die_1" src="images/die_0.png" alt="blank die" width="90" height="88">
	    <img id="die_2" src="images/die_0.png" alt="blank die" width="90" height="88">
	</div> <!-- end of diceDiv -->
    </div>
    <?php
        include 'includes/bottom.php';
    ?>
  </body>
</html>
