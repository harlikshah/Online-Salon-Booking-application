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
        <title>Filter Salon </title>
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
                    
                      <img src="b32.jpg" alt="Kapils Salon September Promotions Mumbai Home Page_2708" width="1500" height="400" class="w100">
                    
                    </div>
                    
                    
                              <div class="swiper-slide db">           
                  
                      <img src="b51.jpg" alt="Naturals Promotion 2 Mumbai Home_2676" width="1500" height="400" class="w100">
                  
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



<div class="col-xs-6" style="margin:30px;">
<h4><b>FILTER & Sort by category</b></h4>
 <form  method="post"  action="" id="searchform"> 
  <table>
  <tr>
      <td>  <h4>Type:</h4></td><td><select name='tp'><option>Choose</option><option>Hair Cut</option><option>Facial</option><option>Nails</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;SalonName:</h4></td><td><select name='bd'><option>Choose</option><option>Enrich Salon</option><option>Jaweb Habib</option><option>Lakme Salon</option><option>Lemon Salon</option><option>Blossom Beauty Salon</option><option>Purplle Salon</option><option>Envi Salon</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Location:</h4></td><td><select name='ln'><option>Choose</option><option>Andheri West</option><option>Andheri East</option><option>Vile ParleWest</option><option>Vile ParleEast</option><option>Santacruz West</option><option>Santacruz East</option><option>Khar West</option><option>Khar East</option><option>Bandra West</option><option>Bandra East</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Gender:</h4></td><td><select name='gr'><option>Choose</option><option>Unisex</option><option>Men</option><option>Women</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Offers:</h4></td><td><select name='of'><option>Choose</option><option>Upto40%off</option><option>Upto25%off</option><option>Upto10%off</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Date:</h4></td><td><input type="date" name="sdate" min= "<?php echo date("Y-m-d") ?>"<br></td>
        <td><h4>&nbsp;&nbsp;&nbsp;&nbsp;Time:</h4></td><td><input type="time" name="stime"></td>
        
  </tr>
  </table>

       <center> 
       <br><input class="btn btn-info" type="submit" name="submit" value="APPLY">
        </center>
      </form> 
    </div>

<div class="col-md-8">


<?php 


              if(isset($_SESSION['user'])!="")
              {
                
              }
              else
              {
                echo "<script> alert('Please Register or Log In.')</script>";
                exit();
              }  
              

    if(isset($_POST['submit']))
{ 
    if(isset($_GET['go']))
  { 
//$lt= $_POST[''];
//$nm= $_POST['ln'];
 // echo $nm;
$_SESSION["ty"] =$_POST['tp'];
$_SESSION["sn"] =$_POST['bd'];
$_SESSION["lo"] =$_POST['ln'];
$_SESSION["ge"] =$_POST['gr'];
$_SESSION["or"] =$_POST['of'];
$_SESSION["dt"] =$_POST['sdate'];
$_SESSION["tm"] =$_POST['stime'];



    if(preg_match("/^[  %_a-zA-Z]+/", $_POST['tp']) ||   preg_match("/^[  a-zA-Z]+/", $_POST['bd'] ) || preg_match("/^[  a-zA-Z]+/", $_POST['ln'] ) ||  preg_match("/^[  a-zA-Z]+/", $_POST['gr'] ) || preg_match("/^[  a-zA-Z]+/", $_POST['of'] ))
   { 
       
      mysql_connect("localhost", "root", "");

      mysql_select_db("salon");
     //-query  the database table 
        $sql="SELECT * FROM salfilter WHERE type LIKE '$_POST[tp]'  AND  sname LIKE '$_POST[bd]' AND location LIKE '$_POST[ln]' AND  gender LIKE '$_POST[gr]' AND  offers LIKE '$_POST[of]'"; 
        //-run  the query against the mysql query function 
        $result=mysql_query($sql); 
      
     while($row=mysql_fetch_array($result))
    { 
      //$typ = $_GET['tp'];
            ?>
          <div class="container" style="width:0%; left:0px " >
         <table class="table" style="vertical-align:top">
        
          <thead>
            <tr>
             <th>Type</th>
              <th>Salon</th>
              <th>Location</th>
              <th>Gender</th>
              <th>Offers</th>
              

              
              
            </tr>
          </thead>
          <tbody>
            <tr class="success" >
            

             
              <td><?php echo $row['type'];?></td>
              <td><?php echo $row['sname']; ?></td>

              <td><?php echo $row['location'];?></td>
              <td><?php echo $row['gender'];?></td>
              <td><?php echo $row['offers'];?></td>
              <td><a href="appointment.php"><h3>Book Appointment</h3></a></td>
              
         
             
              
            
          </tbody>
        </table>
      </div>

          <?php
       }
       } 
    else{ 
    echo  "<p>Please enter a search query</p>"; 
    }

   } 
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
