<?php
// Include the session.php file to enforce session-based authentication
include('session.php');
?>
<DOCTYPE html> 
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
    <title>Problem Solving skills</title>
    <link rel="stylesheet" href="styles1.css">
    <style>
        header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    background: #808dff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
}
body {
    margin: 0;
    background-color: #CCD1FF;
}

.quizz:hover {
    background-color: #808dff;
}
.quizz {
    margin: 0;
    position: absolute;
    top: 90%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    gap: 3rem 6rem;
    word-wrap: none;
    white-space: nowrap;
    border: 1px solid #ccc;
    border-radius: 900px;
    background-color: #808dff;
    padding: 0.6rem 10rem;
    font-size: inherit;
    cursor: pointer;
    transition: background-color 150ms;
}
        </style>
    </head>
    <header>
        <h2 class="logo">Problem Solving Skills</h2>
            <nav class="navigation"> <a href="#">Home</a>
                  <a href="#">About</a>                
                  <a href="#">Contact</a>
                  <a href="login.html" class="btnlogout">LOGOUT</a> 
 
             </nav>
   </header>
    
    <body>
       
      <div class="video">
        <section class="video-section">

            <!-- <article class="video-container">
                <a href="https://youtu.be/mAtkPQO1FcA?feature=shared" class="thumbnail" data-duration="10.00">
                    <img class="thumbnail-image" src="javaboilogo.png" > 
                </a>
                <div class="video-bottom-section">
                    <a href="#">
                        <div class="video-detail">
                            <a href="#" class="video-title"></a>
                        </div>
                    </a>
                </div>
            </article> -->

            <!-- <article class="video-container">
                <a href="#" class="thumbnail" data-duration="10.00">
                    <img class="thumbnail-image" src="javaboilogo.png" > 
                </a>
                <div class="video-bottom-section">
                    <a href="#">
                        <div class="video-detail">
                            <a href="#" class="video-title"></a>
                        </div>
                    </a>
                </div>
            </article> -->

            <!-- <article class="video-container">
                <a href="#" class="thumbnail" data-duration="10.00">
                    <img class="thumbnail-image" src="javaboilogo.png" > 
                </a>
                <div class="video-bottom-section">
                    <a href="#">
                        <div class="video-detail">
                            <a href="#" class="video-title"></a>
                        </div>
                    </a>
                </div>
            </article> -->

            <!-- <article class="video-container">
                <a href="#" class="thumbnail" data-duration="10.00">
                    <img class="thumbnail-image"  type="png" src="javaboilogo.png" > 
                </a>
                <div class="video-bottom-section">
                    <a href="#">
                        <div class="video-detail">
                            <a href="#" class="video-title"></a>
                        </div>
                    </a>
                </div>
            </article> -->

        </section>
      </div>
      <img src="pngkey.com-problem-png-9574728.png" alt="pngkey.com-problem-png-9574728" style="width: 200px; margin-left: 700px;margin-top: -170px;"/>
      <div class="quizz-section">
        <a href="index1.php" class="quizz-button">
        <button class="quizz">START QUIZZ</button></a>
      </div>
    