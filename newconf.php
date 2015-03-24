<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name "viewport" content="width=device-width,initial-scale-1.0">
    <title>MNNIT-conference</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     
  
</head>
<body>
  <div class="page-header no-margin row">
    
    <div class="col-md-2"><img src="images/mnnit1.png" height="90px" class="pull-left"></div>
    <div class="col-md-10"><h2 style="font-size:40px;"><strong>Motilal Nehru National Institute Of Technology</strong></h2></div>
  
</div>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class ="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-mnnit-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <a class="navbar-brand " href="#">Conference Login</a>
  </div>
  

  <div class="collapse navbar-collapse navbar-right" id="bs-mnnit-navbar-collapse-1">
    
 
    <ul class="nav nav-pills btn navbar-btn ">

  <li role="presentation"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Submissions</a></li>
  <li role="presentation"><a href="#">conferences</a></li>
  <li role="presentation" ><a href="#">status</a></li>
  
  
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
      Reviews <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">My Papers</a></li>
      <li><a href="#">All Papers</a></li>
      <li><a href="#">Delete</a></li>
      <li><a href="#">Send for Review</a></li>
    </ul>
  </li>
  
</ul>
</div>

</div>
</nav>




  <div class="container-fluid">
     <div class="row">
        <div class="col-md-offset-3 col-md-6 ">
          <div class="panel panel-default">
              <div class="panel-body">
              <form class="form-horizontal"  method="post" action="submit1.php?> " role="form" enctype="multipart/form-data">

<!--name of the conference -->   
 <div class="form-group">
    <label for="Name" class="col-sm-2 control-label">Conference</label>
      <div class="col-sm-10">
    <input type="text" class="form-control" id="Name" required placeholder="Enter Full name" name="Name" required>
      </div>
  </div>
 <!--acronym of conference-->     
  <div class="form-group">
    <label for="InstituteName"class="col-sm-2 control-label" >Acronym</label>
       <div class="col-sm-10">
    <input type="text" class="form-control" id="Acronym" required name="Acronym"  required placeholder="Conference name in short(eg.ICCT)">
        </div>
  </div>
 <!--Website url-->    
  <div class="form-group">
      <label for="Address"class="col-sm-2 control-label">Website*</label>
      <div class="col-sm-10">
      <input type="url" class="form-control" id="Website" name="Website" required placeholder="Enter the URL here) ">
      </div>
</div>
<!--city-->    
<div class="form-group">
    <label for="City"class="col-sm-2 control-label">City</label>
     <div class="col-sm-10">
    <input type="text" class="form-control" name="City" required id="City" placeholder="Enter City ">
    </div>
</div>
  

<div class="form-group">
    <label for="Start_Date"class="col-sm-2 control-label">Start Date</label>
    <input date="date" name ="StartDate" required>

     <div class="col-sm-10">
    </div>
</div>
  
<div class="form-group">
    <label for="End_Date"class="col-sm-2 control-label">End Date</label>
      <input date="date" name ="EndDate" required>
     <div class="col-sm-10">
    </div>
</div>
  <!--research area-->
  
<div class="form-group">
    <label for="Reasearch Area"class="col-sm-2 control-label">Research Areas</label>
     <div class="col-sm-10">
      <input type="text" class="form-control" name="ResearchArea" required id="ResearchArea" placeholder="Enter the Research Area ">
    </div>
</div>

<div class="col-md-offset-5 col-md-4">
<button type="submit" name="Configure" class="btn btn-primary">Submit</button>
</div>

</form>
</div>
</div>
</div></div></div>
<footer class="site-footer navbar-fixed-bottom no-margin">
  <div class="container">
    <div class="row">
    <p>© 2015 All Rights Reserved</p>
    </div>

    <div class="bottom-footer navbar-static-bottom">
      <div class="cpl-md-5"></div>
      <div class="cpl-md-6">
        <ul class="footer-nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="link.html">Link</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>



</html> 