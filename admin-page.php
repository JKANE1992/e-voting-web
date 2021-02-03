<!DOCTYPE html>
<html>
<head>
	<title>Admin-page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<section class="container-fluid">
	<nav class="navbar bgcolor">
		<div class="navbar-header">
			<a class="navbar-brand mb-0 h1" href="e-voting-login.php">Online Voting Portal</a></div>
		<div class=" navbar-text navbar-right">
			<li><a href="" id="Admin">Hii' admin</a></li>
			<li><a href="e-voting-login.php" id="Logout">Logout</a></li>
			<button type="reset" class="btn btn-primary btn-sm">Reset Voting</button>
		</div>	
	</nav>

<!-- ended tasks entry voting -->
<div>
	<div class="row justify-content-md-center">
		<!-- winning party -->
		<div class="col-3"> 
			<div class="win">
				<p>Winner Party</p>
					<hr>
				<p>BJP 1Votes</p>
			</div>
		</div>
		<div class="col-3">
			<!-- Ne\ew party addition -->
			<div class="newparty">
				<p>Add New Party</p>
				<input type="text"class="form-control" name="" placeholder="Party Name">
				<input type="button" class="form-control" id="add-btn" name=""value="ADD NOW">
			</div>
		</div>
					
<!--Add & remove voter container  -->

<div class="add-remove col-3">
	<p>Add & Remove voter</p>
	<div class="">
		<div class="form-group">
			<input type="text"class="form-control" name="" placeholder="Voter Email">
		</div>
	</div>
	<div class="">
		<div class="form-group">
			<input type="text"class="form-control" name="" placeholder="Voter Name">
		</div>
	</div>
		
	<div class="form-group">
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<p>Add</p>
				<input type="radio" class="form-control" name="add-rev">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<p>Remove</p>
				<input type="radio" class="form-control" name="add-rev">
				</div>
			</div>
		</div>
		<div class="form-group">
		<input type="button" class="form-control" id="add-btn" name=""value="ADD NOW">
	</div>	
</div>
	</div> 
<!-- ended tasks entry voting -->
	</div>
</div>
<!--  -->
<div class="row justify-content-md-left">
	<div class="col-4 partytable">
		<span>All Parties</span>
			<table class="table table-borderless table-sm">
  <thead class="thead-color">
    <tr>
      <th>sno</th>
      <th>Name</th>
      <th>Vote</th>
      <th>Action</th>
    </tr>
  </thead>
</table>
	</div>
</div>
</section>
<script type="text/javascript">
	function newParty(){
	let Partname=document.getElementById("addparty").value;
	document.getElementById("add").innerHTML="<tr><td>1</td><td>Partname</td><td>0</td><td><button>Remove</button></td></tr>";
	// alert("Party Added sucessfully");
}
</body>
</html>