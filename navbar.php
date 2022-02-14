	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  		<!-- Brand -->
  		<a class="navbar-brand" href="#"><?php echo $_SESSION['patient_name']; ?></a>

  		<!-- Links -->
	  	<ul class="navbar-nav">
	    	<li class="nav-item">
	      		<a class="nav-link" href="profile.php">Profile</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="dashboard.php">Book Appointment</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="appointment.php">My Appointment</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="logout.php">Logout</a>
	    	</li>
	  	</ul>
	</nav>