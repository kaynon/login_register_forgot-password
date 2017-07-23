<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

<?php $title="science Canvas -  Sign Up" ; $description="Create new account on this page." ; include( "HTML/inc/header.php"); ?>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php"><img class="navbar_image"
					src="HTML/assets/sc-images/ScienceCanvas.png" alt="Go to home!"></a>
		</div>     
		
		 <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right ">

                    <!--Home Pages -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Competitions
                    </a>
                        <ul class="dropdown-menu ">
                            <li>
                                <a href="HTML/HOME/sc_project_competition.php">Science
									Projects</a>
                            </li>

                         
                        </ul>
                    </li>


					<li class="dropdown"><a href="javascript:void(0);"
						class="dropdown-toggle" data-toggle="dropdown"
						data-hover="dropdown" data-delay="0">Submission Tools</a>
						<ul class="dropdown-menu ">
							<li><a href="HTML/HOME/submission_tools.php">Submission Tools</a></li>
							<li><a href="HTML/HOME/submission_tools_science_genres.php">Science Genres</a></li>
						</ul></li>

					<li class="dropdown"><a href="javascript:void(0);"
						class="dropdown-toggle" data-toggle="dropdown"
						data-hover="dropdown" data-delay="0">FAQs</a>
						<ul class="dropdown-menu ">
							<li><a href="HTML/HOME/faqs.html">FAQs</a></li>
						</ul></li>

		            <li><div class="collapse navbar-collapse" id="navbar1">
                                            			<ul class="nav navbar-nav navbar-right">
                                            				<?php if (isset($_SESSION['usr_id'])) { ?>
                                            				<li><p class="navbar-text">Signed in as <?php echo $userData['first_name']; ?></p></li>
                                            				<li><a href="userAccount.php?logoutSubmit=1">Log Out</a></li>
                                            				<?php } else { ?>
                                            				<li><a href="login.php">Login</a></li>
                                            				<li><a href="register.php">Sign Up</a></li>
                    <?php } ?>

                </ul>
            </div>
		
	</div>
</nav>

<section class="bg-8 bg-center bg-cover  section-fxd">
        <div class="bg-filter">
            <div class="hv-center">
                
                <div class="sign-up">
                    <div class="sign-up-hr hidden-xs"></div>
                    <h1 class="sign-up-title">Forgot Password</h1>
	<div class="row">
		<div class="col-md-6 col-sm-6">
		  <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
			<form role="form" action="userAccount.php" method="post" name="signupform">
				<fieldset>
					

					
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Email" required="" class="form-control" />
				
					</div>

					<div class="form-group">
						<input type="submit" name="forgotSubmit" value="continue" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
	
		</div>
	
	</div>

	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="login.php">Login Here</a>
		</div>
	</div>
	
	
	</div>
	</div>
	</div>
	</section>
	
	
<?php include( "HTML/inc/scripts.php"); ?>
</body>



