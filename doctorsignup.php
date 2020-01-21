<!-------------doctor signup page------------------->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> dash board</title>
		<!-- Custom fonts for this template-->
		<link  rel="stylesheet" href="fontawesome/css/all.min.css">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style3.css">
</head>


<body id="page-top" class="">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img src="img/geminilogo.jpg" class="img-fluid">
        </div>
      </a>

 <!-- Divider -->
 <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php" class="text-center">
    <i class="fas fa-user user-font px-4"></i></a></li>

  




</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
<div class="container-fliud">
  <nav class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow bg-gradient-primary">
<!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
      <i class="fa fa-bars"></i>
    </button>
<!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto pr-5 p-hide">

      <!-- Nav Item - Alerts -->
      <li class="nav-item ">
        <a class="nav-link " href="adminhome.php">
          <i class="fas fa-home"><p> Home</p></i>
        </a>
        
      </li>



<li class="nav-item">
        <a class="nav-link " href="index.php" >
          <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
        </a>
      </li>

    </ul>

  </nav>



<form role="form" action="doctorinsert.php" method="POST" onsubmit="return form()">
  <div class="form-group">
    <label for="email">Full Name:</label>
    <input type="text" class="form-control" id="email" name="name">
  </div>
  <div class="form-group">
    <label for="pwd">E-mail:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">National-ID:</label>
    <input type="text" class="form-control" id="pwd" name="n_id">
  </div>
  <div class="form-group">
    <label for="pwd">Qualification:</label>
    <input type="text" class="form-control" id="pwd" name="qualification">
  </div>
  <div class="form-group">
    <label for="pwd">Specialisation</label>
    <input type="text" class="form-control" id="pwd" name="specialisation">
  </div>
  <div class="form-group">
    <label for="pwd">PMDC Certificate No:</label>
    <input type="text" class="form-control" id="pwd" name="certificate_no">
  </div>
  <div class="form-group">
    <label for="pwd">Clinic Address:</label>
    <input type="text" class="form-control" id="pwd" name="address">
  </div>
  <div class="form-group">
    <label for="pwd">Clinic Timing:</label>
    <input type="text" class="form-control" id="pwd" name="timing">
  </div>
  <div class="form-group">
    <label for="pwd">Username:</label>
    <input type="text" class="form-control" id="pwd" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" name="password" >
  </div>

  
  
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>

<script>
function form()
  {
    var str= document.getElementById('password').value;

    if(str.length< 6){
      alert("password too_short");
      return false;
    }

  }
</script>

<!-- Footer -->
<footer class="">
          <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; Orisys Academy 2019-2020</span>
        </div>
      </footer>
      <!-- End of Footer -->
</html>