<!DOCTYPE html>

<!--
INFO/CS 1300
Fall 2016
Steve Paling
Sample HTML for Week 11, Advanced PHP
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Learning to Hit the Mark</title>
    <link rel="stylesheet" type="text/css" href="css/archery_blog.css">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Ovo">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Muli">
</head>

<body>

<?php include 'includes/top.php'; ?>

<!-- responsive layout adapted from http://stackoverflow.com/questions/21270767/2-column-css-responsive-layout-with-a-responsive-image -->
    
<div id="container">    

    <div id="content">

        <h1>Tournament Scores</h1>

        <table id="scores">
            <!-- make sure you concatenate the first and last names -->
            <tr>
                <th>Name</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>Total</th>
                <th>X</th>
            </tr>
            <tbody>
                <?php include "scripts/scoreboard01_2.php" ?>
            </tbody>
        </table> 
        
    </div> <!-- end of content div -->

</div> <!-- end of container div -->
    
</body>

</html>
