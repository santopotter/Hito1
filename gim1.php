<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gimnasio Condor Rojas Norte	</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
	
		$con = mysqli_connect("localhost", "nuevito","1234", "fis");
		#var_dump($con);
		$result = mysqli_query($con,"SELECT * FROM canchas WHERE id_gym = 1");
		
		
		while($row = mysqli_fetch_array($result)){
			
			$a[]= $row["Nombre"];
			$b[]= $row["Precio"];
		
		}
		
		
		mysqli_close($con);	
	?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="front.php"><span class="glyphicon glyphicon-chevron-left"></span>Atras</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-9">
                <p class="lead">Gimnasio Condor Rojas Norte</p>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/cancun.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/chacha.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/fotebul.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                		<h4>Cuenta con 2 canchas de futbol con pasto artificial, vestuarios separados. Una de las canchas es techada y la otra al aire libre.</h4>
           			</div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/google.jpg" alt="">
                            <div class="caption">
                                <h4><p><?php echo $a[0]?></p>
                                </h4>
                                <p>$ <?php echo $b[0]?> CLP</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Horario</button>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><?php echo $a[0]?></h4>
				      </div>
				      <div class="modal-body">


					<table border =1>

					<tr>
					<td>Horarios</td>
					<td>Lunes</td>
					<td>Martes</td>
					<td>Miercoles</td>
					<td>Jueves</td>
					<td>Viernes</td>
					</tr>
					<tr>
					<td>8:30-10:00</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>10:00-11:30</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>11:30-13:00</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>13:00-14:30</td>
					<td align="center">--</td>
					<td align="center">--</td>
					<td align="center">--</td>
					<td align="center">--</td>
					<td align="center">--</td>
					</tr>
					<tr>
					<td>14:30-16:00</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>16:00-17:30</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>17:30-19:00</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					</table>


				      </div>
				      <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
					
				
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/excelente.jpg" alt="">
                            <div class="caption">
                                
                                <h4><p><?php echo $a[1]?></p>
                                </h4>
                                <p>$<?php echo $b[1]?> CLP</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Horario</button>

				<!-- Modal -->
				<div id="myModal1" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal2">&times;</button>
					<h4 class="modal-title"><?php echo $a[1]?></h4>
				      </div>
				      <div class="modal-body">


					<table border =1>

					<tr>
					<td>Horarios</td>
					<td>Lunes</td>
					<td>Martes</td>
					<td>Miercoles</td>
					<td>Jueves</td>
					<td>Viernes</td>
					</tr>
					<tr>
					<td>8:30-10:00</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>10:00-11:30</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>11:30-13:00</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>13:00-14:30</td>
					<td align="center">--</td>
					<td align="center">--</td>
					<td align="center">--</td>
					<td align="center">--</td>
					<td align="center">--</td>
					</tr>
					<tr>
					<td>14:30-16:00</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>16:00-17:30</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					<tr>
					<td>17:30-19:00</td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					<td><button class=" arrendar btn btn-default">Arrendar</button></td>
					</tr>
					</table>


				      </div>
				      <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
					
				
                            </div>
                            
                        </div>
                    </div>
                            </div>
                            
                        </div>
                    </div>

                   

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; BROCH4 Inc. 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    	$( ".arrendar" ).click(function() {
		  	$(this).removeClass('btn btn-default');
		  	$(this).addClass('btn btn-success disabled');
		  	$(this).html('Arrendado');
		  	// console.log($(this));
		});
    </script>


</body>

</html>
