<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author"  />
        <meta name="Copyright" content="Copyright &copy; 2012-2015 " />

        <!-- TITLE -->
        <title>Book Appointment </title>
        <link rel="icon" type="image/jpeg" href="lll.jpeg">

        <meta name="description" content="Find all the latest offers, reviews, ratings &amp; rate cards of top rated salons ,spas and wellness centers in Mumbai" />
              <meta name="keywords" content= />
              <meta property="og:title" content="Find Salons Spas and Wellness Centers near you | Purplle.com"/>
              <meta property="og:type" content="venue"/>
        <meta property='og:url' >
        <meta property="og:image" content=/>
              <meta property="og:description" content="Browse Photos,Reivews,Deals,Menu,Address,Services Offered" />
              <meta property="og:site_name" />
        <meta property="fb:app_id" content="298617716861935"/>
        <link rel="canonical" href="" />        <!-- JQuery --> 

        <!-- <script type="text/javascript" src="/themes/purplle/bookings/js/jquery1.11.2.min.js"></script> --> 

        <script type="text/javascript" src="h1.js"></script> 
        <!-- CSS -->
        <!--link href='/static/purplle/css/book/d.css' rel='stylesheet' type='text/css'-->

       
        <link href='hair1.css' rel='stylesheet' type='text/css'>
        <link href='hair2.css' rel='stylesheet' type='text/css'>  
        <link href='hair3.css' rel='stylesheet' type='text/css'> 

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">   
     
        <style></style>        
        

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-28132362-1']);
            _gaq.push(['_trackPageview']);

            _gaq.push(['_setAccount', 'UA-38218921-1']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

           
        </script> 








    </head>   

    <body >
       
                    
<div class="overlay-panel"></div>
<header>
    <div class="container">
        <div id="logo">
            <a href="index.php"><img src="logo.png"  width="200" height="50"></a>
        </div>

        <nav>
             
            
                                                            <ul class="menu nav navbar-nav navbar-right">
                <!--<li class="dropdown">
                             <a href="javascript:showchkcart();"><img  src="/static/purplle/img/bag-icon.svg"><span class="counter fav">0</span></a>
                             
                          </li>-->                
                                
                                                <li class="bar dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="p-navicon"></i></a>
                    <div >
                        
                                <!-- <li class="divider sep">&nbsp;</li> -->
                                <li><h3>WELCOME to online salon</h3></li>
                                 <?php
      if(isset($_SESSION['user'])!="")
      {
        
         mysql_connect("localhost", "root", "");

        mysql_select_db("members");

        $query="Select uname from mem where uname='$_SESSION[user]'";
        $retrive=mysql_query($query);
       
        while($row = mysql_fetch_array($retrive))
        {
          ?> <strong> <?php
          echo "<span>Welcome ".$row['uname'].","  ," </span>";
          ?> </strong> <?php
        }
         echo "<a href='logout.php?logout'>Log Out</a>";
        mysql_close();
      }
      else
      {
        echo "<li><a href='registration.php'><span>Register</span></a></li>";            
      }  
    ?>
                            
                    </div>
                </li>
               
                            </ul>

        </nav>

    </div>

    <div id="fb-root"></div>
    <script async src="h2.js"></script>
    <script type="text/javascript">
     
    </script>
</header>

<!-- /header -->
        
        <section>
             <style>

   </style>
    <section class="pbg">
         <!-- Carousel
    ================================================== -->
    <div id="homeslider" class="carousel slide" data-ride="carousel">
  
      <div class="carousel-inner" role="listbox" style="overflow: inherit;">
      
       
                  <div class="mrt60">
            <div class="swiper-container">
                  <div class="swiper-wrapper">

                     
                    
                    
                              <div class="swiper-slide db">           
                    
                      <img src="b12.jpg" alt="Kapils Salon September Promotions Mumbai Home Page_2708" width="1500" height="400" class="w100">
                    
                    </div>
                    
                    
                              <div class="swiper-slide db">           
                  
                      <img src="b31.jpg" alt="Naturals Promotion 2 Mumbai Home_2676" width="1500" height="400" class="w100">
                  
                    </div>
                                  
                  </div>

            <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
              </div>
          </div>
              
      </div>

    <!-- Controls -->
   <div class="control"> 
   <div class="container">
      <div class="row"> 

            </div>
      </div>
    </div>
    </div><!-- /.carousel -->

      </section>



<div class="col-sm-3">
</div>

<div class="col-sm-6">


<?php

  $host = 'localhost';
$username = 'root';
$password ='';
$link=mysql_connect($host,$username,$password);
$link1=mysql_connect($host,$username,$password, true);
$conn=mysql_select_db("members",$link);
$conn1= mysql_select_db("salon",$link1);

               
//$nm= $_GET['ln'];
  //echo $nm;
//echo "<script type='text/javascript'>window.location.href='indexfiltr.php';alert('echo $nm;');</script>";

  
        $query="Select uname,email,mcontact from mem where uname='$_SESSION[user]'";
        $retrive=mysql_query($query,$link);
        include('way2sms-api.php');
        while($row = mysql_fetch_array($retrive))
        {
          ?> 
          
          
          <h3>
          <?php 
          echo "Dear <strong>".$row['uname']."</strong>, "  ,"<br> <h4>Your Appointment has been booked.</h4> <br> <br>";
         // echo $row['mcontact'];
          ?>
          </h3>
          
          
          <?php
          $nmm=$row['email'];

       // $_SESSION['el']=$row['email'];
        
/*
          $message="Thanking you for booking an appointment. ";
          $email=$row['email'];
          echo $row['email'];?>&nbsp;&nbsp;&nbsp;<?php
          //echo $message;
                 mail($email, "StyleSeat confirm mail", $message, "From: www.styleseat.com");
               echo "verify your email";
      */

      }
        

/*
echo $_SESSION['ct'];
        
        

        $res = sendWay2SMS('9664554653','9664554653',$_SESSION["ct"], 'Thanking you for booking an appointment');
            if (is_array($res))
                echo $res[0]['result'] ? 'Sent' : 'Not Sent';
            else
                echo $res;
   */             
        
$query2="Select mcontact from mem where uname='$_SESSION[user]' ";
        $retrive2=mysql_query($query2,$link);
       
        while($row2 = mysql_fetch_array($retrive2))
        {
          
          $ctt=$row2['mcontact'];
         // echo $ctt;
          $res = sendWay2SMS('9324192420','9324192420', $row2['mcontact'],'Thank you for booking an appointment and have a great experience.');
             // $res  = sendWay2SMS($_POST['uid'], $_POST['pwd'], $_POST['phone'], $smsg);
          /*    if (is_array($res))
                  echo $res[0]['result'] ? 'true' : 'false';
              else
                  echo $res;
                  */
        }

        
      $query1="Select type,sname,location,gender,offers from salfilter where type='$_SESSION[ty]' AND sname='$_SESSION[sn]' AND location='$_SESSION[lo]' ";
         
         $retrive1=mysql_query($query1,$link1);

        while($row1 = mysql_fetch_array($retrive1))
        {

          
          echo "<h3>Details are as follow:</h3><br><h4>Type:<strong>".$row1['type']."</strong><br>Salon:<strong> ".$row1['sname']."</strong><br>Location:<strong>".$row1['location']."</strong><br>Gender:<strong>".$row1['gender']."</strong><br>Offers:<strong>".$row1['offers']."</strong><br>Date:<strong>".$_SESSION["dt"]."</strong><br>Time:<strong>".$_SESSION["tm"]."</strong><br><strong>Thank you for booking an appointment.</strong>";
          
            
          $message="Dear ".$_SESSION["user"].",

          Details are as follow:
          Type:".$row1['type']."
          Salon:".$row1['sname']."
          Location:".$row1['location']."
          Gender:".$row1['gender']."
          Offers:".$row1['offers']."
          Date:".$_SESSION["dt"]."
          Time:".$_SESSION["tm"]."
          Please be on time.
          Thank you for booking an appointment and a have a great experience";
          //$email=$row['email'];
         // echo $row['email'];
          ?>&nbsp;&nbsp;&nbsp;<?php
          //echo $message;
                 mail($nmm, "SalonBooking Details appointment", $message, "From: www.salonbooking.com");
              // echo "verify your email";








        }
        

?>

</div>

 <center>
 
    <div class="row">
      <div class="col-md-8">
        <div class="text-center" style="position:relative; left:-130px;">
          

        </div>
      </div>
    </div>
  </center> 
    
        


 <footer id="footer" class="mrt20 footer" style= 'color:black; background-color:#e4e4e4' >
    <div class="container" >
        <div class="list-link hidden-xs">
            <div class="row">
  <div class="col-lg-12"><h2>POPULAR BRANDS</h2></div>
</div>
  
    <div class="row" > 
  <div class="col-lg-2"><strong>SALONS:</strong></div>
  <div class="col-lg-10" >
    <ul class="list-inline" style= 'color:black'>    
    <li>Enrich</li> | 
    <li>Jawed Habib</li> |
    <li>Juice</li> |
    <li>B Blunt</li> |
    <li>Jean Claude Biguine</li> |
    <li>Lakme Salon</li> |
    <li>Belita</li> |
    <li>Iosis</li> |
    <li>Kapil</li> 
  </ul>
  </div>
  </div>
  
  <div class="row">
  <div class="col-lg-2"><strong>SPAS:</strong></div>
  <div class="col-lg-10">
    <ul class="list-inline" style= 'color:black'>  
    <li>Aura Thai Spa</li> |
    <!--
    <li><a href="/bookings/mumbai/search?q=taj+spa">Taj Spa</a></li> |
    -->
    
    <li>The Four Fountains</li> |
    <li>Sohum</li> |
    <li>Zazen Spa</li> 

    
  </ul>
  </div>
  </div>
  
    <div class="row">
    <div class="col-lg-2"><strong>BEAUTY CLINICS:</strong></div>
    <div class="col-lg-10">
    <ul class="list-inline" style= 'color:black'>
    <li>Richfeel</li> |
    <li>Nirmal Herbal Clinic</li> |
    <li>Kaya Skin Clinic</li> |
    <li>VLCC</li>
  
  </ul>
  </div>
  </div>
  
  <div class="row">
    <div class="col-lg-2"><strong>SERVICES:</strong></div>
    <div class="col-lg-10">
    <ul class="list-inline" style= 'color:black' >
                
                <li>Facial</a></li> |
                <li>Hair Cut</a></li> |
                <li>Nails</a></li>
    </ul>
  </div>
  </div>
  
  <div class="row">
    <div class="col-lg-2"><strong>AREAS:</strong></div>
    <div class="col-lg-10">
    <ul class="list-inline" style= 'color:black'>
                              
                <li>Andheri West</li> |
                
                <li>Bandra West</li> |
                <li>Santacrux East</li> |
                
                <li>Vile Parle East</li> |
                <li>Khar West</li> |
                <li>Vile Parle West</li> |
                
                
                
                 <li>Juhu</li> | 
                  <li>Dadar</li> | 
                <li>Andheri East</li> | 
                   <li>Andheri West</li> | 
                   <li>Santacruz West</li> 
  </ul>
  </div>
  </div>
  
        </div>
  
        
        <div class="modal fade" id="verifyform_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-body" id="verifyform_div">
  
  </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->        <div class="row">
            <div ><center><h4 style= 'color:black'>Copyright &copy; 2016 All Rights Reserved.</h4><h4 style= 'color:black'>Developed by Harlik Shah &amp Kinjal Sanghvi</h4> </center></div>
            
        </div>
    </div>
</footer>
 
  <script type="text/javascript" src="h8.js"></script>
  <script>
   $('.swiper-container').each(function() {
      var homeswiper = new Swiper(this, {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: $(this).find('.swiper-button-next')[0],
    prevButton: $(this).find('.swiper-button-prev')[0],
        spaceBetween: 30,
        autoplay: 4000,
        paginationBulletRender: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
      }
    });

      

});


    </script>


        
    </body>
</html>
