
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/resize.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    
    <title>IDE</title>

  
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css2?family=Acme&family=Rubik&family=Sniglet&display=swap');

		*{
		    box-sizing: border-box;
		}

		:root{
		    --Snigle-font: "Sniglet", cursive;
		    --Rubik: "Rubik", cursive;
		    --Patua: "Patua One", cursive;
		    --Lobster: "Lobster", cursive;
		    --bggradient: linear-gradient(to bottom, #1E90FF, #6495ED)
		}

		header a{
		    font-size: 0.9em;
		    color: whitesmoke;
		    font-family: var(--Rubik);
		}

		header {
		    background: #1E90FF;
		    background: var(--bggradient);
		}

		.dropdown-content {
		    display: none;
		    position: absolute;
		    background: #6495ED;
		    min-width: 137px;
		    box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.2);
		    z-index: 1;
		}

		.dropdown-content a{
		    color: white;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		}

		.dropdown-content .nav-link {
		    border-radius: 10px;
		}

		.dropdown-content .nav-link:hover {
		    background: white;
		    transition: 0.5s;
		    color: #1E90FF;
		}

		.dropdown:hover .dropdown-content {
		    display: block;
		}

		.dropdown:hover .first {
		    color: #1E90FF;
		} 

		header .nav-item:last-child {
		    margin-right: 4em;
		}
		header .navbar-brand {
		    padding-left: 5em;
		}

		header .nav-item {
		    border-radius: 10px;
		}

		header .nav-item:hover {
		    background-color: white;
		    transition: 1s;
		}

		.col-md-6 .panel {
		    position: absolute;
		    font-family: var(--Snigle-font);
		}	

		footer {
		    background-color: rgba(0, 0, 0, 0.815);
		    overflow-x: hidden;
		}

		.sticky {
			position: fixed;
			top: 0;
			width: 100%;
			background: rgba(0,0,0,0.815);
			z-index: 9999;
			transition: all 1.5s ease;
		}
    </style>
	
</head>
<body>
	<?php include 'header.php'; ?> 

	<?php include 'content.php'; ?>

	<?php include 'footer.php'; ?>

	
	<!-- <script type="text/javascript" src="main.js"></script> -->
	<!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script type="text/javascript" src="main.js"></script>
</body>
</html>