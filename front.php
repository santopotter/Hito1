<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recintos Deportivos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

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
		$result = mysqli_query($con,"SELECT * FROM gym");
		
		
		while($row = mysqli_fetch_array($result)){
			
			$g[]= $row["Nombre"];
			$d[]= $row["Descripcion"];
			$img[]= $row["Imagen"];
		
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
                <a class="navbar-brand" href="#">Gimnasio de Recoleta</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Arriendos de recintos deportivos
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href=<?php echo $img[0] ?>>
                    <img class="img-responsive" src= <?php echo $img[0] ?>alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $g[0]  ?></h3>
                <h4>Canchas de futbol</h4>
                <p align="justify"> <?php echo $d[0]?> </p>
                <a class="btn btn-primary" href="gim1.php">Ver Info <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href=<?php echo $img[1] ?>>
                    <img class="img-responsive" src=<?php echo $img[1] ?> alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3> <?php echo $g[1] ?> </h3>
                <h4>Piscina Olimpica</h4>
                <p align="justify"><?php echo $d[1]?>  </p>
                <a class="btn btn-primary" href="gim2.php">Ver Info <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href=<?php echo $img[2] ?>>
                    <img class="img-responsive" src=<?php echo $img[2] ?> alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3> <?php echo $g[2]?> </h3>
                <h4>Canchas de tennis</h4>
                <p align="justify"> <?php echo $d[2]?></p>
                <a class="btn btn-primary" href="gim3.php">Ver Info <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href=<?php echo $img[3] ?>>
                    <img class="img-responsive" src=<?php echo $img[3] ?> alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3> <?php echo $g[3]?> </h3>
                <h4>Canchas de basquetbol y voleibol</h4>
                <p align="justify"><?php echo $d[3]?><p>
                <a class="btn btn-primary" href="gim4.php">Ver Info <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; BROCH4 Inc. 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	

	
</body>

</html>
