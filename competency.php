<?php
// Include the session.php file to enforce session-based authentication
include('session.php');
?>
<DOCTYPE html> 
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
    <title>Problem Solving Skills</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <style>
  /* Center the content */
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    box-sizing: border-box;
    background-color: #ccd1ff;
}

  /* Style the h3 element */
  h3 {
    margin-left: 42px;
    font-size: 20px; /* Adjust the font size as needed */
    color: black;
    text-align: center;
  }
  header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    display: flex;
    justify-content: space-between;
    background-color:#808DFF;
    align-items: center;
    z-index: 99;
}
.btnlogout {
    display: inline-block;
    padding: 10px 20px;
    background-color: #808DFF;
    color: white;
    text-decoration: none;
    border: 2px #fff;
    border-radius: 5px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.competency_box .btn {
    display: inline-block;
    padding: 15px 12px;
    background-color: #808DFF;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 3px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.competency_box .btn:hover {
    background-color: #808DFF;
}
</style>
    <body>
       <header>
           <h2 class="logo">Problem Solving Skills</h2>
               <nav class="navigation"> <a href="#">Home</a>
                     <a href="#">About</a>                
                     <a href="Profile.php">Profile</a>
                     <a href="login.html" class="btnlogout">LOGOUT</a>
                </nav>
      </header>
      <h3>Choose Your Competency</h3>
      <div class="parrot">
    <img src="pngkey.com-problem-png-9574728.png" alt="pngkey.com-problem-png-9574728" style="width: 150px; margin-left: 167px;"/>
    </div>
      <div class="competency_box">
        <nav class="difficulty"> <a href="topic.php" class="btn">BEGINNER</a>
              <a href="topicinter.php" class="btn">INTERMEDIATE</a>
              <a href="topicexpert.php" class="btn">EXPERT</a>
        </nav>
      </div>
    </body>