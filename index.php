<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>my Space!</title>
        <link rel="stylesheet" href="CSS/styles.css"> 
        <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] === true) {
        echo "<script>alert('Email was sent successfully');</script>";
        // Reset the session variable
        $_SESSION['success'] = false;
    }
    ?>

  </script>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div id="logo">
                    <a href="index.php" class="logo"><img src="Images/logo.png" alt="Platform Logo"></a>
                </div>
                
                <a class="right" href="https://pointerpointer.com/" alt="some website">Fun website</a>
                
            </nav>
        </header>
        <div class="interact">
        <div class="menu">
                <h2>Hello!<br> Welcome to my website, I'm Walah Alhmemedy.</h2>
                <h3>you can find me in these sites.</h3>
                <a href="index.php" class="ref"><img src="Images/github-logo.png"></a>
            
            
            
                <a href="index.php" class="ref"><img src="Images/x-logo.png"></a>
                
          
            
                <a href="index.php" class="ref"><img src="Images/linkedin-logo.png"></a>
                
            </div>
            <div class="menu2">
                <h3>or you can send me an email directly.</h3>
                <form action="action_page.php" method="POST" >
                    <div >
                      <label>Name</label><br>
                      <input class="input" id="name" type="text" name="Name" required>
                    </div>
                    <div >
                      <label>Email</label><br>
                      <input class="input" id="email" type="text" name="Email" required>
                    </div>
                    <div>
                      <label>Message</label><br>
                      <textarea  class="input" id="message" name="Message" rows="5" cols="30" required></textarea>
                    </div>
                    <button type="submit" id="submit"class="submit">Send Message</button>
                  </form>
                  
            </div>
            </div>
        
    </body>
    



</html>