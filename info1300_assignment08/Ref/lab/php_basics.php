<!DOCTYPE html>

<!--
INFO/CS 1300
Fall 2016
Adapted Steve Paling's Sample HTML for Week 5, 
Box Model and Advanced Layout for the PHP basics week 10 lab.
SOLUTION
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Basics</title>
    <link rel="stylesheet" type="text/css" href="css/box_model.css">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Ovo">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Muli">
</head>

<body>

<!-- TO DO: include the top banner and navigation bar here. Hint: Look into the includes folder -->


<div id="container">

<div id="content">
    
    <!-- TO DO: include the sidebar navigation here. Hint: Look into the includes folder -->


    <div id="center">
        <h1>Lottery</h1>
        <?php include 'includes/exercise.php';?>
    </div>    
        
    <div id="ad_bar">
        <!-- ad.gif by Steve Paling -->
        <img src="images/ad.gif" alt="fake advertisement">
        <!-- ad2.gif by Steve Paling -->
        <img src="images/ad2.gif" alt="fake advertisement">
    </div> <!-- end of ad_bar div -->
    
</div> <!-- end of content div -->   
    
</div> <!-- end of container div -->

</body>

</html>
