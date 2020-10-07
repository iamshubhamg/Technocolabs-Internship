
<?php
if(isset($_POST['sbTryit']))
{
		if(!isset($_SESSION['email']))
		{
			echo"<script>alert('Login First')</script>";
			echo"<script>window.location='Login.php'</script>";
		}
		else
		{
			echo"<script>window.location='idepage.php'</script>";
		}
}
?>

<!-- content -->
    <main class="container mt-5">
      <div data-spy="scroll" data-target="#navbar" data-offset="0">
        <section class="section-info" id="home">
          <div class="container text-center">
            <h1 class="text-dark">Whats to offer</h1>
            <hr class="z-depth-5">
          </div>
          <div class="container text-center">
              <div class="row mt-5">
                  <div class="col-md-6 col-sm-12">
                      <div class="pic">
                          <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Code">
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-12 mt-5 shadow bg-white rounded p-3 mb-5" style="margin-left: -75px; background-color: white; z-index: 1;">
                      <div class="panel text-left">
                          <h1>Technocolabs IDE</h1>
                          <p class="pt-4">
                              Technocolabs IDE is an initiative to help the upcoming programmers with the code.
                              It focuses on providing a free platform of coding which will help the programmers build up concepts in different programming languages.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      </div>
        

        <!-- Cards -->
        <div data-spy="scroll" data-target="#navbar" data-offset="0">
          <section class="compiler py-5" id="compiler">
            <div class="container text-center">
                <h1 class="text-dark">Our Compilers</h1>
                <hr class="z-depth-5">
            </div>
            <div class="row my-5">
                <div class="col-lg-4 col-md-6 col-12 tile text-center mb-5">
                    <div class="card mr-2 d-inline-block border border-success z-depth-2">
                      <img class="card-img-top" src="https://miro.medium.com/max/875/1*mDKusLBkGKBWW4aycK4PCA.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">C++ Programming</h5>
                        <p>C++ allows procedural programming for intensive functions of CPU and to provide control over hardware, and this language is very fast because of which it is widely used in developing different games or in gaming engines. <br> C++ mainly used in developing the suites of a game tool.</p>
                     <!--<a href="#" class="btn btn-primary" onclick="idepage()">Try Out</a>-->
                          <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                                 <a href="#" type="submit" class="btn btn-outline-primary rounded float-right mb-3" name="sbTryit">Try Out <i class="fas fa-arrow-circle-right"></i></a> -->
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                     		<button type="submit" class="btn btn-outline-primary rounded float-right mb-3 b" name="sbTryit">Try Out <!-- <i class="fas fa-arrow-circle-right"> --></button>
                    	</form> 
                          </form>                      
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 tile text-center mb-5">
                    <div class="card mr-2 d-inline-block border border-primary z-depth-2">
                      <img class="card-img-top" src="https://img-a.udemycdn.com/course/750x422/2638042_ea2c_5.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">C Programming</h5>
                        <p class="pb-4">C is a powerful general-purpose programming language.<br> It can be used to develop software like operating systems, databases, compilers, and so on. C programming is an excellent language to learn to program for beginners.</p>
                     <!--<a href="#" class="btn btn-primary" onclick="idepage()">Try Out</a>-->
                          <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                                 <a href="#" type="submit" class="btn btn-outline-danger rounded float-right mb-3" name="sbTryit">Try Out <i class="fas fa-arrow-circle-right"></i></a>
                           </form> -->
                           <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                     		<button type="submit" class="btn btn-outline-danger rounded float-right mb-3 r" name="sbTryit">Try Out <!-- <i class="fas fa-arrow-circle-right"> --></button>
                    	</form>                        
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 tile text-center mb-5">
                    <div class="card mr-2 d-inline-block border border-danger z-depth-2">
                      <img class="card-img-top" src="https://miro.medium.com/max/875/1*mDKusLBkGKBWW4aycK4PCA.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">C++ 11 Programming</h5>
                        <p>C++ allows procedural programming for intensive functions of CPU and to provide control over hardware, and this language is very fast because of which it is widely used in developing different games or in gaming engines.
                          <br> C++ mainly used in developing the suites of a game tool.</p>
                     <!--<a href="#" class="btn btn-primary" onclick="idepage()">Try Out</a>-->
                          <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                                 <a href="#" type="submit" class="btn btn-outline-success rounded float-right mb-3" name="sbTryit">Try Out <i class="fas fa-arrow-circle-right"></i></a>
                           </form> -->
                           <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                     		<button type="submit" class="btn btn-outline-success rounded float-right mb-3 g" name="sbTryit">Try Out <!-- <i class="fas fa-arrow-circle-right"> --></button>
                    	</form>                              
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 tile text-center mb-5">
                  <div class="card mr-2 d-inline-block border border-primary z-depth-2">
                    <img class="card-img-top" src="https://www.oracle.com/a/tech/img/cb88-java-logo-001.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Java</h5>
                      <p>Java can be used to create complete applications that may run on a single computer or be distributed among servers and clients in a network. <br> It can also be used to build a small application module or applet (a simply designed, small application) for use as part of a Web page.</p>
                      <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                                  <button type="submit" class="btn btn-outline-danger rounded float-right mb-3" name="sbTryit">Try Out <i class="fas fa-arrow-circle-right"></i></button>
                      </form> -->
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                     		<button type="submit" class="btn btn-outline-danger rounded float-right mb-3 r" name="sbTryit">Try Out <!-- <i class="fas fa-arrow-circle-right"> --></button>
                    	</form> 
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 tile text-center mb-5">
                    <div class="card mr-2 d-inline-block border border-danger z-depth-2">
                      <img class="card-img-top" src="https://miro.medium.com/max/2560/0*8aY8pX5CoNGImZU4.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Python 2</h5>
                        <p class="pb-5">Python is a very high level general purpose programming language, <br> which consists many modern constructs of a programming languages and it is perfect to be used for learning programming.</p>
                    <!--<a href="#" class="btn btn-primary" onclick="idepage()">Try Out</a>-->
                          <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                                <a href="#" type="submit" class="btn btn-outline-success rounded float-right mb-3" name="sbTryit">Try Out <i class="fas fa-arrow-circle-right"></i></a>
                          </form>-->
                          <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                     		<button type="submit" class="btn btn-outline-success rounded float-right mb-3 g" name="sbTryit">Try Out <!-- <i class="fas fa-arrow-circle-right"> --></button>
                    	</form>                        
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 tile text-center mb-5">
                    <div class="card mr-2 d-inline-block border border-success z-depth-2">
                      <img class="card-img-top" src="https://miro.medium.com/max/2560/0*8aY8pX5CoNGImZU4.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Python 3</h5>
                        <p class="pb-5">Python is a very high level general purpose programming language, <br> which consists many modern constructs of a programming languages and it is perfect to be used for learning programming.</p>
                    <!--<a href="#" class="btn btn-primary" onclick="idepage()">Try Out</a>-->
                          <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                                <a href="#" type="submit" class="btn btn-outline-primary rounded float-right mb-3" name="sbTryit">Try Out <i class="fas fa-arrow-circle-right"></i></a>
                          </form> -->
                          <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">              	
                     		<button type="submit" class="btn btn-outline-primary rounded float-right mb-3 b" name="sbTryit">Try Out <!-- <i class="fas fa-arrow-circle-right"> --></button>
                    	</form>                              
                      </div>
                    </div>
                </div>
          </div>

          
        </section>
        </div>
      
        <!-- About -->
        <section>

        </section>	

      </main>  		


   


	