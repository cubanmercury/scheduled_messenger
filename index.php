<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree" rel="stylesheet"> 
</head>
<body>
    <div class="container">
<?php
    $dayofweek = date("w");
    $time = date("H:i:s");  //using this for the live time will only update on page reload. Used javascript instead.
    switch ($dayofweek) {
        case 0: 
            echo("<div class='sunday bg-image'>
                <div class='tab-container'>
                <p class='day'>It's Sunday</p>
                <br>
                <p class='day-quote'>Sunday clears away the rust of the whole week.</p>
                <div id='time'></div>
                </div>
                </div>");
        break;
        case 1:
            echo("<div class='monday bg-image'>
                <div class='tab-container'>
                <p class='day'>It's Monday</p> 
                <br> 
                <p class='day-quote'>God gave us Mondays to punish us for the things we did over the weekend.</p>
                <div id='time'></div>
                </div>
                </div>");
        break;
        case 2:
            echo("<div class='tuesday bg-image'>
                <div class='tab-container'>                
                <p class='day'>It's Tuesday</p> 
                <br> 
                <p class='day-quote'>Ahhhhh Tuesday. The day to remember all the things I didn't get done on Monday- and push them off until Wednesday.</p>
                <div id='time'></div>
                </div>
                </div>");
        break;
        case 3:
            echo("<div class='wednesday bg-image'>
                <div class='tab-container'>
                <p class='day'>It's Wednesday</p>
                <br>
                <p class='day-quote'>They didn’t want it good, they wanted it Wednesday.</p>
                <div id='time'></div>
                </div>
                </div>");
        break;
        case 4:
            echo("<div class='thursday bg-image'>
                <div class='tab-container'>
                <p class='day'>It's Thursday</p>
                <br>
                <p class='day-quote'>Hey you hang in there it’s almost Friday.</p>
                <div id='time'></div>
                </div>
                </div>");
        break;
        case 5:
            echo("<div class='friday bg-image'>
                <div class='tab-container'>
                <p class='day'>It's Friday</p>
                <br>
                <p class='day-quote'>It's Friday...any plan of being a productive member of society is officially thrown out the window.</p>
                <div id='time'></div>
                </div>
                </div>");
        break;
        default:
            echo("<div class='saturday bg-image'>
                <div class='tab-container'>
                <p class='day'>It's Saturday</p>
                <br>
                <p class='day-quote'>Hello weekend!</p>
                <div id='time'></div>
                </div>
                </div>");
    }
    
    
?>

</div>

<script type="text/javascript" src="js/main.js"></script>

</body>
</html>