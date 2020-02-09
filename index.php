<?php 
  include 'conn.php';
  $query = mysqli_query($conn, "SELECT * FROM `projects` ORDER BY id desc");
  $exists = mysqli_num_rows($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bibek Ghimire</title>
	<link rel="stylesheet" type="text/css" href="./static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./static/css/style.css">
	<script type="text/javascript" src="./static/js/bootstrap.js"></script>
	<script type="text/javascript" src="./static/js/jquery.js"></script>
	<script type="text/javascript" src="./static/js/clock.js"></script>
</head>
<body onload="startTime()">

<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container">
  <a class="navbar-brand" href="#home">Bibek Ghimire</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cv">Bio data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#projects">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacts">Contact Me</a>
      </li>
    </ul>
   
   <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div  id="clock" class="text-center text-white"></div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login As Admin</a>
        </li>
    </ul>
  </div>
</div>
</nav>


<!-- Header Section -->

<header class="d-flex justify-content-center align-items-center text-center " id="home">
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-10 offset-sm-1">
         
          <h1 class="display-4 text-uppercase glow text-light" id="farukPort">Bibek Ghimire Portfolio</h1>
          <p class="lead text-light glow" id="motto" >Nothing is impossible</p>
            <a href="https://github.com/bibekghimire-ith" target="_blank" class="btn btn-outline-light " id="btnHead">Read More</a>
        </div>
      </div>
  </div>
</header>



<main>
	<!-- CV Section -->
	<div class="container-fluid" id="cv">
		<div class="jumbotron bg-color">
			<div class="card mb-3 boxShadow">
				<div class="row d-flex justify-content-center align-items-center">
					<!-- Image -->
					<div class="col-md-4 text-center">
						<img src="./static/images/me1.jpg" class="img-thumbnail img-fluid">
					</div>
					<!-- Bio Data -->
					<div class="col-md-8">
						<div class="card-body">
							<h4 class="card-title text-center">Bio Data</h4>
<?php 
  $biodata = mysqli_query($conn, "SELECT * FROM `biodata`");
  $cv = mysqli_fetch_array($biodata);
 ?>
							<table class="table table-bordered table-striped table-responsive-sm table-hover">
								<thead>
									<th>Name</th>
									<th><?php echo $cv['name']; ?></th>
								</thead>			
								<tbody>
									<tr>
										<th>Address</th>
										<td><?php echo $cv['address']; ?></td>	
									</tr>
									<tr>
										<th>Email</th>
										<td><?php echo $cv['email']; ?></td>
									</tr>
									<tr>
										<th>Educational Qualification</th>
										<td><?php echo $cv['education']; ?></td>
									</tr>
									<tr>
										<th>Programming Languages</th>
										<td><?php echo $cv['programming']; ?></td>
									</tr>
									<tr>
										<th>Hardware Technologies</th>
										<td><?php echo $cv['hardware']; ?></td>
									</tr>
									<tr>
										<th>Web Development</th>
										<td><?php echo $cv['web']; ?></td>
									</tr>
									<tr>
										<th>Operating System</th>
										<td><?php echo $cv['os']; ?></td>
									</tr>
									<tr>
										<th>Other Technologies</th>
										<td><?php echo $cv['others']; ?></td>
									</tr>
								</tbody>					
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- My Projects Section -->
<div class="container" id="projects">
	<div class="">
		<h2 style="color: red; text-shadow: 2px 2px 2px #ff0000;">My Projects</h2><hr>
	</div>
  <!-- ********************************** -->
<?php 
 if($exists) {
  while($row = mysqli_fetch_array($query)) {
 ?>
<br>
       <div class="container">
       <div class="row recent-proj">
         <div class="col-md-6">
           <div class="project-description">
             <p class="project-title"><h3><strong><?php echo $row['title']; ?></strong></h3></p>
             <p> <i style="color: #282;"><?php echo $row['date']; ?></i></p>
             <p style="text-align: justify; color: #789;"><?php echo $row['content']; ?></p>
             
             <ul>
              <?php if($row['github']) { ?>
               <li class="d-inline-flex  align-items-center mr-2"><a target="_blank" href="<?php echo $row['github']; ?>">GitHub Repository</a></li>
               <?php } ?>
               <li class="d-inline-flex  align-items-center mr-2"> | </li>
               <?php if($row['site']) { ?>
               <li class="d-inline-flex  align-items-center mr-2"><a target="_blank" href="<?php echo $row['site'] ?>">Site</a></li>
             <?php } ?>
             </ul>
             <p><strong>Technologies Used:</strong> <i style="color: #456;"><?php echo $row['tech']; ?></i></p>
           </div>
         </div>

         <div class="col-md-6 pics">
           <img src="./static/images/projects/<?php echo $row['image']; ?>" style="width:500px;" height="500px">
         </div>
       </div>

       <hr>
       </div>

<?php }} ?>
  <!-- ********************************** -->




</div>
	
<!-- Contact Section -->

            <div class="container-fluid"  >
              <div class="jumbotron bg-color" id="contactSection" style="padding-top: -20px">
                <div class="row">
                  <div class=" col-md-6 offset-md-3 contactHeader " >
                      <h3 class=" text-uppercase">Contact Form</h3> 
                      <p >You can email me or contact any way</p>
                  </div>
                  <div class="col-md-6 p-3 my-3" style=" border: 1px solid white; border-radius: 5px;">
                    <div class="panel panel-danger">
                      <div class="panel-body">
                        <form id="reused_form" method="POST" action="contact.php">
                          <div class="form-group">
                            <label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                          </div>
                          <div class="form-group">
                            <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                          </div>
                          <div class="form-group">
                            <label><i class="fa fa-user" aria-hidden="true"></i> Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Enter Your Subject" required>
                          </div>
                          <div class="form-group">
                            <label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
                            <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message" required></textarea>
                          </div>

                          <div class="form-group">
                            <input type="submit" name="contact" class="btn btn-raised btn-block btn-light" value="Send →">
                            
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 p-3 my-3" style="border: 1px solid white; border-radius: 5px;" >
                      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Tarahara%2C%20Sunsari&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Ended -->
        



		
	</div>
</div>

</main>















<div class="footer-dark">
	<footer class="justify-content-center align-items-center text-center">
		<span class="text-white">Bibek Ghimire &copy; 2020</span> &nbsp; &nbsp; <a target="_blank" href="https://github.com/bibekghimire-ith">Github</a> | <a target="_blank" href="https://www.linkedin.com/in/bibek-ghimire-47542a130/">Linkeden</a>
	</footer>
</div>



</body>
</html>