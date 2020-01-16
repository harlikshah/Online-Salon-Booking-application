<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Search Salon</title>
        <link rel="icon" type="image/jpeg" href="lll.jpeg">
         

        <script type="text/javascript" src="h1.js"></script> 
       
       
        <link href='hair1.css' rel='stylesheet' type='text/css'>
        <link href='hair2.css' rel='stylesheet' type='text/css'>  
        <link href='hair3.css' rel='stylesheet' type='text/css'> 

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">   
      
    </head>   

    <body class="bg-e4" data-spy="scroll" data-target="#myscrollspy" data-offset="80">
       
                    
<div class="overlay-panel"></div>
<header>
    <div class="container">
        <div id="logo">
            <a href="index.php"><img src="logo.png" width="150" height="50"></a>
        </div>

        <nav>
             
            
                                                            <ul class="menu nav navbar-nav navbar-right">
                                
                                                <li class="bar dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="p-navicon"></i></a>
                    <div >
                        
                               
                                <li><h3>WELCOME to online salon</h3></li>
        <?php
      if(isset($_SESSION['user'])!="")
      {
        
         mysql_connect("localhost", "root", "");

        mysql_select_db("members");

        $query="Select uname from mem where uname='$_SESSION[user]'";
        $retrive=mysql_query($query);
       // $_SESSION["co"] =$_POST['mcontact'];

       //echo $_SESSION['user'];
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
										
										<a href="http://www.envisalon.in/">	<img src="envi.jpg" alt="Kapils Salon September Promotions Mumbai Home Page_2708" width="1500" height="400" class="w100"> </a>
										
										</div>
										
										
					                    <div class="swiper-slide db">						
										<a href="http://www.schwarzkopf.com/skus/en/home.html">	<img src="slidepic2.jpg" alt="Naturals Promotion 2 Mumbai Home_2676" width="1500" height="400" class="w100"></a>
										
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
	  <section class="bg-1" style="background-color:#e4e4e4">
<div class="container" >
<div class="row">
	<div class="col-lg-12"> 
		 <form method="get" action="/finder/mumbai/search" id="service_search_form">
		<div class="description-title fpb"><center><span>Book Salons Appointments</span></center></div>	<br>		
			<div class="row m10">    
				<div class="col-lg-12 text-center">
					<div class="input-group">
						
						<div class="input-group-btn search-panel">&nbsp;&nbsp;&nbsp;
							<button type="button" class="btn btn-success" data-toggle="dropdown" >
								<span id="search_concept"><h3>Vile-parle</h3></span> <i class="p-angle-down pr t3 l2"></i>
							</button>
                            <button type="button" class="btn btn-primary" data-toggle="dropdown" >
                                <span id="search_concept"><h3>Andheri</h3></span> <i class="p-angle-down pr t3 l2"></i>
                            </button>
                            <button type="button" class="btn btn-warning" data-toggle="dropdown" >
                                <span id="search_concept"><h3>Santacruz</h3></span> <i class="p-angle-down pr t3 l2"></i>
                            </button>
                            <button type="button" class="btn btn-danger"data-toggle="dropdown" >
                                <span id="search_concept"><h3>Bandra</h3></span> <i class="p-angle-down pr t3 l2"></i>
                            </button>

							<a href="indexfilter.php" class="button"><h1>Search</h1></a>
						</div>

						
												
						
					</div>
					<div id="autocomplete_suggest" class="autocomplete"></div>
				</div>
			</div>
			
		
		</form>       
    </div>
</div>
</div>
</section>
	  <section class="m-top">
	  <div class="container">
	  <div class="row">
			<div class="col-lg-12">
			
			<div class="description-title fpb"><span>Book Services</span></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">&nbsp;&nbsp;&nbsp;
            <img src="facial.jpg" width="100" height="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="haircut.jpg" width="100" height="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="nail.jpg" width="100" height="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
           
			<ul class="list-inline category-list">
			<li><span class="ico facial"></span><h4>Facial</h4></li>
			<li><span class="ico hair-cut"></span><h4>Hair Cut</h4></li>
			<li><span class="ico nails"></span><h4>Nails</h4></li>
			
			
			
			</ul>
			</div>
		</div>
	  </div>
	  </section>
             
	<div class="row">
		<div class="col-lg-12">
			<div class="description-title fpb">
				<!-- <span>Offers In Mumbai</span> -->
				<span>Best In The City</span>
			</div>
		</div>
	</div>

	<div id="posts" class="row">
		
		<div class="">

			
			
								<section class="">
					<div class="container">
					
					<div class="row">
						<div class="col-lg-12 text-center m-top">
							<ul class="list-inline category-list">
														<li><span class=""><img src="http://media3.purplle.com/static/purplle/img/juice-salonshowcase-13042015.jpg" width="100" height="150"></span></a></li>
														<li><span class=""><img src="http://media3.purplle.com/static/purplle/img/four-fountains-showcase-13042015.jpg" width="100" height="150"></span></li>
														<li><span class=""><img src="http://media3.purplle.com/static/purplle/img/zazen-showcase-13042015.jpg" width="100" height="150"></span></li>
														<li><span class=""><img src="http://media3.purplle.com/static/purplle/img/aura-thai-salonshowcase-13042015.jpg" width="100" height="150"></span></li>
														<li><span class=""><img src="http://media3.purplle.com/static/purplle/img/savio-john-salonshowcase-13042015y.jpg" width="100" height="150"></span></li>
														<li><span class=""><img src="http://media3.purplle.com/static/purplle/img/blue-Terra-spashowcase-13042015.jpg" width="100" height="150"></span></li>
														<li><span class=""><img src="http://media3.purplle.com/static/purplle/img/kapil-logo-14042015-03-showcase.jpg" width="100" height="150"></span></li>
														<li><span class=""><img src="http://media3.purplle.com/static/purplle/img/enrich-salon-academy-15042015.jpg" width="100" height="150"></span></li>
												
							</ul>
						</div>
					</div>
					</div>
				</section>
								
					</div>
	</div>
</div>

            </section>
        </section>

         <br>
         <br>
         <br>


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
