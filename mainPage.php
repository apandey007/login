<?php
$insert=false;

if(isset($_POST['Name'])){

    $server="localhost";
    $username="root";
    $password="";
    $db_name = "contact";
    
    $conn = mysqli_connect($server,$username, $password, $db_name);
    

    if(!$conn){
        die("Connecton to this dataBase failed deu to " . mysqli_connect_error());
    }
    // echo "submitted sucessfully";
    $Name=$_POST['Name'];
    
    $PhoneNo=$_POST['PhoneNo'];
    
    $Contact_Details=$_POST['Contact_Details'];
    
    $Message=$_POST['Message'];
    
    $sql="INSERT INTO `contact`.`contact_table` (`Name`, `PhoneNo`, `Contact_Details`, `Message`, `Time`)
    VALUES ( '$Name', '$PhoneNo', '$Contact_Details', '$Message', current_timestamp());";

// mysqli_query($conn,$sql);

if($conn->query($sql)==true){
    $insert=true;
}else{
    echo "ERROR";
}

$conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Online Food Delievry in India | MyOnlineMeals.com</title>
    <link rel="stylesheet" media="screen and (max-width:990px)" href="phone.css">
    <link rel="stylesheet" href="Project2.css">
</head>
<style>
     /* Css Reset  */
 *{
  margin: 0;
  padding: 0;
 }

 /* Css Variables  */
 :root{
    --navbar-height: 50px;
 }

 /* Navigation Bar  */
 #navbar{
    display: flex;
    align-items: center;
    /* position: relative; */
 }

 /* For Navigation bar  */
 /* Logo and images  */
 #logo{
   margin: 10px 15px;
 }
 #logo img{
    height: 50px;
    width: 100px;
    margin: 5px 10px;
 }

 #logo img:hover{
   transform: scale(1.2);
 }
 /* List Styling  */
 #navbar ul{
    display: flex;
 }

 /* Psedo code  */
 #navbar::before{
    content: "";
    background-color: black;
    position: absolute;
    top: 0;
    left: 0;
    height: 100px;
    width: 100vw;
    /* width: 1365px; */
    z-index: -5;
    opacity: 0.4;
    
 }
 #navbar ul li{
    list-style: none;
    margin: 10px 5px;
    font-size: 1.2rem;
    font-weight: bold;
    
}
#navbar ul li a{
    text-decoration: none;
    color: white;
    padding: 10px 10px;
    border-radius: 20px;
 }

 #navbar ul li a:hover{
    color: black;
    background-color: white;
    text-shadow: 1px 3px green;
 }
 .marqee{
    background-color: black;
    border: 20px;
 }
 #login a{
   margin-left: 850px; }
 h3{
   color: green;
 }

 /* home section  */
 #home{
   display: flex;
   flex-direction: column;
   padding: 10px 200px;
   height: 400px;
   justify-content: center;
   align-items: center;
   color: white;
 }

 #home::before{
    content: "";
    background: url('img/mediterranean-cuisine-2378758.jpg');
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    height: 80vh;
    width: 100vw;
    z-index: -6;
    opacity: 6;
 }

 #home h2{
    color: white;
    text-align: center;
    font-size: 50px;
 }

 
 #home p{
     font-size: 1.5rem;
     font-weight: bold;
     padding: 5px;
    } 
    
 .btn{
   margin: 10px;
   padding: 5px 10px;
   color: white;
   border: 2px solid white;
   border-radius: 10px;
   background-color: brown;
   opacity: 0.8;
   cursor: pointer;
}  

.btn:hover{
    color: red;
    background-color:green;
    /* border:2px solid green; */
    opacity: 0.8;
    text-shadow: 2px 3px black;
    font-weight: bold;
    transform: rotate(350deg);
}

 /* Services Section  */
/* utility Classes  */
.h-primary {
   font-weight: bold;
   font-size: 3.8rem;
   display: flex;
   justify-content: center;
   align-items: center;
   padding: 15px;
   color: black;
   margin: 25px;
   text-decoration: underline;
}
.h-primary:hover{
   color: green;
   background-color: rgb(53, 51, 51);
   height: 80px;
   width: 400px;
   display: block;
   margin: 30px auto;
   padding: 13px 10px;
   text-shadow: 2px 2px white;
   
}
.center{
    text-align: center;
}
.h-secondary{
    font-weight: bold;
    margin: 10px;
    padding: 10px;
    text-decoration: underline;

}
.h-secondary:hover{
   color: tomato;
   transform: scale(1.2);
  text-shadow: 2px 2px green;

}




#Services{
    display: flex;
    margin: 10px 40px ;

}
#Services .box{
   background-color: rgb(223, 219, 219);
    border: 2px solid brown;
    border-radius: 20px;
    height: 470px;
    width: 450px;
    margin: 5px;
}
#Services .box p{ 
    font-weight: bold;
    margin: 2px 30px;

}
#Services .box img{ 
    display: block;
    margin: auto;
    height: 300px;
    width: 250px;
    /* justify-content: center ;
    align-items: center; */
}
#Services .box img:hover{ 
  transform: scale(1.1);
}
 


/* Client Section  */
#client-section{
   height: 300px;
}
#client-section::before{
   content: "";
   position: absolute;
   background: url(img/mediterranean-cuisine-2378758.jpg);
   background-size: cover;
   width: 100%;
   height: 50%;
   z-index: -1;
   opacity: 0.6;
   
}
#clients{
   display: flex;
   justify-content: center;
   align-items: center;
}
.client-item{
   padding: 10px;
   margin: 10px;
}
#clients img{
   height: 100px;
   width: 100px;
}
#clients img:hover{
   transform: scale(1.3);
}


/* contact Section  */
/* #contact{
   
} */
#contact::before{
   content: "";
   position: absolute;
   background: url('img/contact-us.webp');
   background-size: cover;
   height: 100vh;
   width: 100vw;
   z-index: -1;
   opacity: 0.8;
}
#contactBox{
   display: flex;
   justify-content: center;
   align-items: center;
   padding-bottom: 110px;
   font-weight: bold;
}
#contactBox input{
   /* margin: 10px; */
   width: 500px;
   height: 25px;
   /* padding: 10px; */
   margin: 10px;
   text-align: center;
   border-radius: 7px;
}
#contactBox textarea{
   width: 100%;
   padding: 0.5rem;
   margin: 5px;
   border-radius: 12px;
}
#contactBox form{
   width:500px;
}
#contactBox label{
   display: block;
   font-size: 1.3rem;
   font-weight: bold;
}


.submitQuery h1{
   color: green;
   text-align: center;
}

footer{
   background-color: black;
   color: white;
}

</style>
<body>
    <div class="marqee">
        <marquee direction="left"><h3>Welcome to my Online Food Delievry Websites</h3></marquee>
    </div>
    <nav id="navbar">
        <div id="logo">
            <img src="img/company logo.webp" alt="MyOnlineMeals.com">
            
        </div>
        <ul>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">Services</a></li>
            <li class="item"><a href="#">Clients</a></li>
            <li class="item"><a href="#">Contact Us</a></li>
            <li class="item" id="login"><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    
    
    <section id="home">
        <h2>Welcome to MyOnlineMeal</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad atque quis iure. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <button class="btn">Order Now</button>
    </section>
    
    <section class="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="Services">
            <div class="box">
                <img src="img/pizza.webp" alt="">
                <h2 class="h-secondary center">Food Catering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus ex inventore architecto excepturi ducimus nesciunt obcaecati saepe sit minus harum eum, corporis unde quia. Omnis in provident totam repellat aut?</p>
            </div>
            <div class="box">
                <img src="img/hot-dog.webp" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus ex inventore architecto excepturi ducimus nesciunt obcaecati saepe sit minus harum eum, corporis unde quia. Omnis in provident totam repellat aut?</p>
            </div>
            <div class="box">
                <img src="img/delivery-guy.webp" alt="">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus ex inventore architecto excepturi ducimus nesciunt obcaecati saepe sit minus harum eum, corporis unde quia. Omnis in provident totam repellat aut?</p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h2 class="h-primary center">Our Clients</h2>
        <div id="clients">
            <div class="client-item">
                <img src="img/download.jpg" alt="">
            </div>
            <div class="client-item">
                <img src="img/microsoft Logo.png" alt="">
            </div>
            <div class="client-item">
                <img src="img/images.png" alt="">
            </div>
            <div class="client-item">
                <img src="img/skype Logo.png" alt="">
            </div>
            <div class="client-item">
                <img src="img/download.png" alt="">
            </div>
        </div>

    </section>
    <section id="contact">
        <h2 class="h-primary center">Contact Us</h2>
        <div id="contactBox">
            <form action="Project2.php" method="POST">       <!--This is for connect between the form and Backened-->
                    <label for="name">Name:</label>
                    <input type="text" name="Name" required id="name" placeholder="Enter Your Name">
                    <label for="PhoneNo">PhoneNo:</label>
                    <input type="text" name="PhoneNo" required id="PhoneNo" placeholder="Enter Your PhoneNo">
                    <label for="phone">Contact_Details:</label>
                    <input type="text" name="Contact_Details" required id="Contact_Details" placeholder="Enter Your Contact_Details">
                    <label for="name">Messages:</label>
                    <textarea name="Message" id="message" required cols="30" rows="10"></textarea>
                    <button class="btn">Submit</button>
                    <?php
                     if($insert==true){   
                        echo "<div class='submitQuery'>
                             <h1>Thanks for entering your details!! </h1>
                         </div>";
                     }
                    ?>
            </form>
        </div>
    </section>


    <footer>
        <div class="center">
            copyright &copy; www.MyOnlineMeal.Com. All rights reserved! <br>
            By Abhishek Pandey ...
        </div>
    </footer>
</body>
</html>