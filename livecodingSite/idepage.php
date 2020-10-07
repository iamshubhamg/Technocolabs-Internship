<!DOCTYPE html>
<html>
<head>
	<title>IDE page</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<style type="text/css">
    .tile {
			padding-bottom: 15px;
			padding-left: 45px;
		}

		.cpp {
			padding: 20px;
		}
		.jumbotron{
			margin-top: 20px;
		}

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
    transition: 1s;
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
	</style>
</head>

<body style="background-color: #D3D3D3;">

  <?php include 'header2.php'; ?>

	<div class="container-fluid">
		
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Instructions...</h1>
        <p class="lead my-3">Here goes the instruction for compilation</p>
        <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
      </div>
    </div>

    <div class="row mb-2">
    <!-- <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div> -->
      <div class="col-md-6">
        <form action="compile.php" name="f2" method="POST">

          <label for="lang">Choose Language</label>
          <select class="form-control bborder" name="language">
            <option value="c">C</option>
            <option value="cpp">C++</option>
            <option value="cpp11">C++11</option>
            <option value="java">Java</option>
            <option value="python2.7">Python2</option>
            <option value="python3.2">Python3</option>
          </select><br><br>

          <label for="ta">Write Your Code</label>
          <textarea class="form-control bborder" name="code" rows="10" cols="50"></textarea><br><br>
          <label for="in">Enter Your Input</label>
          <textarea class="form-control bborder" name="input" rows="3" cols="50"></textarea><br><br>
          <input type="submit" class="btn btn-success" value="Run Code"><br><br><br>

        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="main.js"></script>

        <script type="text/javascript">
    
          $(document).ready(function(){

             $("#st").click(function(){
          
                   $("#div").html("Loading ......");


             });

          });


        </script>

        <script>
        //wait for page load to initialize script
        $(document).ready(function(){
            //listen for form submission
            $('form').on('submit', function(e){
              //prevent form from submitting and leaving page
              e.preventDefault();

              // AJAX 
              $.ajax({
                    type: "POST", //type of submit
                    cache: false, //important or else you might get wrong data returned to you
                    url: "compile.php", //destination
                    datatype: "html", //expected data format from process.php
                    data: $('form').serialize(), //target your form's data and serialize for a POST
                    success: function(result) { // data is the var which holds the output of your process.php

                        // locate the div with #result and fill it with returned data from process.php
                        $('#div').html(result);
                    }
                });
            });
        });
        </script>
      </div>
       
      <div class="col-md-6">
        <label for="out">Output</label>
        <textarea id='div' class="form-control bborder" name="output" rows="22" cols="50"></textarea><br><br>
      </div>  
    </div> 
  </div>

  <hr>
  <?php include 'footer.php'; ?>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</body>
</body>
</html>
