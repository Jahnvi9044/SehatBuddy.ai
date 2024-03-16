<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HACKCBS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style1.css">

</head>
<body>
    <header class="header">
       <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>SehatBuddy.ai</a>

       <nav class="navbar">
           <a href="#home">HOME</a>
           <a href="#">DASHBOARD</a>
           <a href="#book">BOOK AN APPOINTMENT</a>
           <a href="#help">HELP</a>
           <a href="login.php">LOGIN</a>
           <a href="registration.php">REGISTRATION</a>
           

       </nav>
        
   </header>

   <section class="home" id="home">
     <div class="image">
         <img src="picture/1.png" alt="">
     </div>

     <div class="content">
         <h3>Your Watch, <span>Your Health Guardian</span></h3>
         <p>Revolutionize health monitoring with our smartwatch-based disease detection technology, providing real-time insights for a healthier, more informed lifestyle.</p>
         <a href="#" class="btn">Connect</a>    
     </div>
   </section>

    <section class="about" id="about">

        <h1 class="heading"><span>about </span>us</h1>
        <div class="row">
           <div class="image">
               <img src="picture/5.png" alt="">
           </div>
            
           <div class="content">
               <h3>Your Heart's <span>Silent Guardian</span></h3>
               <p>We carefully and effortlessly retrieve valuable heart rate data directly from your smartwatch. This user-friendly approach simplifies the process of monitoring your heart health, providing you with detailed insights and enabling you to make informed decisions to maintain a healthy heart.</p>
               <a href="#" class="btn"> Heart Rate <span class="fas fa-chevron-right"></span> </a>
           </div>
        </div>

        <div class="row">
            <div class="image">
                <img src="picture/3.png" alt="">
            </div>
             
            <div class="content">
                <h3>Seize Control,<span> Know Your Pressure</span></h3>
                <p>Our technology harnesses the potential of smartwatches to monitor and analyze your blood pressure in real-time. With our user-friendly system, you'll receive immediate insights and alerts, ensuring early detection of potential issues. Take control of your heart health and live with confidence, knowing that our platform has your well-being in mind. </p>
                <a href="#" class="btn"> Blood Pressure <span class="fas fa-chevron-right"></span> </a>
            </div>
 
         </div>

         <div class="row">
            <div class="image">
                <img src="picture/4.jpg" alt="">
            </div>
             
            <div class="content">
                <h3>Breathe Easy, <span>Know Your Oxygen</span></h3>
                <p>Our user-friendly platform makes it easy to track and monitor your SpO2, providing crucial information for your well-being. Stay in the know about your oxygen, receive instant updates, and take proactive steps to maintain a healthy lifestyle. Your health is in your hands with our simple, effective SpO2 monitoring system.</p>
                <a href="#" class="btn"> SpO2 <span class="fas fa-chevron-right"></span> </a>
            </div>
 
         </div>

       </section>
    <section class="book" id="book">

       <h1 class="heading"><span>book </span>now</h1>
       
       <div class="row">
           <div class="image">
               <img src="picture/book.png" alt="">    
           </div>

           <form action="booking.php" method="POST">
               <h3>book <span>appointment</span></h3>
               <input type="text" placeholder="Your name" class="box" name="name">
               <input type="number" placeholder="Your number" class="box" name="phoneno">
               <input type="email" placeholder="Your email" class="box" name="emailid">
               <input type="date" class="box" name="dob">
               <input type="submit" value="Book now" class="btn">
           </form>
       </div>

    </section>

    <section class="footer">

     <div class="box-container">
          <div class="box">
              <head>quick links</head>
              <a href="hospital.html"><i class="fas fa-chevron-right"></i>home</a>
              <a href="index.html"><i class="fas fa-chevron-right"></i>Dashboard</a>
              <a href="#"><i class="fas fa-chevron-right"></i>Help</a>
          </div>

          <div class="box">
            <head>our services</head>
            <a href="index.html"><i class="fas fa-chevron-right"></i>Check Your Health</a>
            <a href="#book"><i class="fas fa-chevron-right"></i>Book an appointment</a>
            
        </div>

        <div class="box">
            <head>contact info</head>
            <a href="#"><i class="fas fa-phone"></i> +917905252832</a>
            <a href="#"><i class="fas fa-phone"></i> +918840893008</a>
            <a href="#"><i class="fas fa-envelope"></i> dmanuj663@gamil.com</a>
            <a href="#"><i class="fas fa-chevron-right"></i> Tiwariganj, Lucknow</a>   
           
        </div>

        <div class="box">
            <head>follow us</head>
            <a href="#"><i class="fas fa-chevron-right"></i> facebook</a>
            <a href="#"><i class="fas fa-chevron-right"></i> twitter</a>
            <a href="#"><i class="fas fa-chevron-right"></i> instagram</a>
            <a href="#"><i class="fas fa-chevron-right"></i> linkedin</a>
                       
        </div>
     </div>
     <div class="credit"> &copy; <span>SehatBuddy.ai&trade;</span> | all right reserved</div>
    </section>

    <script src="script.js"></script>
</body>
</html>