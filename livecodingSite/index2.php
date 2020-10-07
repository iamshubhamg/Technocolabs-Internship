<?php session_start(); ?>

    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg " id="navbar">
                <a class="navbar-brand" href="index.php">Technocolabs IDE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <div class="dropdown">
                        <a href="#" class="nav-link first"><i class="fas fa-user mr-5"></i></a>
                        <div class="dropdown-content">
                        	<?php	
								if(!isset($_SESSION['email'])){
							?>
                          		<a href="login.php" class="nav-link">Login</a>
                          		<a href="register.php" class="nav-link">Sign Up</a>
                          	<?php } else{ ?>	
                          		<a href="Logout.php" class="nav-link">Logout</a>
                          	<?php } ?>	
                        </div>
                      </div>
                    </li>
                    </li>  
                  </ul>
                </div>
            </nav>
        </div>
    </header>



    