<!DOCTYPE html>

<html lang = "en">
<head>
   <meta charset = "utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="home.css">
   <title> Thomas Burr's Homepage </title>

</head>
<body>

<div class="flex1">
   <!-- Header -->
   <div id="h" class="HaF">
      <h1>Welcome to Burrlândia!<h1>
   </div>
  
   <!-- Menu -->
   <div id="menu" class="flex2">
      <div><a class="menu" href="assign.html">Assignments</a></div>
      <div><a class="menu" href="#contact">Contact</a></div>
   </div>

   <!-- Body -->
   <div class="flex3"> 
      <div class="grow2">
         <pre>
            My name is Thomas Burr. I am originally from VA. While I 
            thoroughly enjoy computers, coding, videogames, etc. I like to
            break out of the stereotypical nerd category. I love the outdoors.
            Some of my favorite past times include camping, hiking, and hammocking.
            I also love to shoot guns and bows and arrows. I've always wanted to get
            into hunting, but I've never had the chance, but I still hope to.
         </pre>
      </div>
      <div class="grow1">
         <?php
            echo "Today's Date: " . date("d/m/Y") . "<br>";
            echo " The Time is: " . date("h:i:sa");
         ?>
         </div>
      </div>
   </div>
   
   <!-- Footer -->
   <div id="contact" class="HaF">
      <ul>
         <li>Name:  Thomas Burr</li>
         <li>Email: bur14027@byui.edu</li>
         <li>Phone: 540-623-3813</li>
      </ul>
   </div>
</div>

</body>
</html>