<?php 
	$config = include('../config.php');
	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	$con = new PDO($dsn, $config['username'], $config['pass']);
	$exe = $con->query('SELECT * FROM password LIMIT 1');
	$data = $exe->fetch();
	$password = $data['password'];
	if(isset($_GET['sendmessage'])) {
		$subject = "Hello";
		$password = htmlentities(strip_tags(trim($password)));
		$body = htmlentities(strip_tags(trim($_GET['body'])));
		$to = 'uniquejob04@gmail.com';
		$location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
		header("Location: " . $location);
	
	}
?> 
<!DOCTYPE html>
<html>
    <head>
    	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Acme|Josefin+Slab" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    	<title>My profile</title>
    </head>
<body bgcolor="bodystyle">
	<div>
  		<h1 class="firstheading">My Profile</h1>
  </div>	

	<img src="https://scontent.flos1-1.fna.fbcdn.net/v/t1.0-9/16649072_1455641057788181_6996894369674545726_n.jpg?oh=e9c4e74614443844aa0814b07e2d31c7&oe=5A43FBF9" class="profile-image">

	<p class="profile">My Name is Samuel Ebreso, from Akwa Ibom State, i'm into Videography and editing also into production of all kinds of paint, 
 but really in love with ICT world, have knowledge in system hardware not good in programming but love programming and want to use this platform to learn web developing. as i am diligent, a quick learner and a hardworking, flexible and willing to learn new skills, a good team player, self motivated and result oriented.
  <div>
    <section class="contact">
    
      <section class="contact-form" >
        <div class = "card-form">
 <form action = "sambreso.php" id = "contact-form" method = "POST" >
                
            <p class = "title" >CONTACT ME</p>
                <input type = "text" name = "subject" placeholder= "Enter subject for e-mail" required><br><br>
                <input type = "text" name = "subject" placeholder= "Enter subject for name" required><br><br>
                <textarea name = "body" placeholder = "write your message here"  required></textarea><br>
                <br><input type ="submit" name="submit" value ="Send Message">
            </form> 
          
        </div>
      </section>
   </section>
  </div>
</body>

<style >
  .firstheading
  {
    font-size: 35pt;
    text-align: center;
    font-family: 'Acme', sans-serif; 
    color: #ffffff;
  }

  .profile
  {
    color: black;
    font-family: 'Josefin Slab', serif;
    font-size: 150%;
    text-align: center;
  }

  .bodystyle
  {
    padding: 0pt;
    background: #BBDEFB;
    margin: 0pt;
    margin-top: 0;
  }

  .profile-image 
  {
    width: 300px;
    height:300px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
  }
  .contact 
  {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 95%;
    margin-bottom: 10%;
    text-align:center;
    position: relative;
    left: 30%;
  }
  .contact section 
  {
    width: 50%;
  }
  .title 
  {
    font-size: 24px;
  }
  .subheading-text{
    padding:10px;
  }
  .contact-form input,
  .contact-form textarea 
  {
    width: 80%;
    margin-top: 15px;
    padding: 12px 20px;
    border: .5px solid #ccc;
    border-radius: 5px;
    background-color: #eaeaea;
  }
  input[type=submit] 
  {
    background-color: #26acd9;
  }
  input[type=submit]:hover 
  {
    background: white;
    border: .5px solid #ccc;
    cursor: pointer;
  }
  textarea 
  {
    font-family: inherit;
    resize: none;
  }
  .social-links span 
  {
    margin-right: 30px;
  }
  .map 
  {
    margin-top: 15px;
  }
  p > span 
  {
    margin-right: 10px;
  }
  .map iframe 
  {
    width: 100%;
    height: 100%:
  }
  @media only screen and (max-width:1024px) 
  {
  .contact 
  {
    width: 90%;
  }
  .contact section 
  {
    width: 45%;
  }
  }
  @media only screen and (max-width:768px) 
  {
    .contact section 
    {
      width: 95%;
    }
  }
</style>
</html>


