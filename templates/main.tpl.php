<?php

function htmlHead(){
	return '
	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <title>Bootstrap, from Twitter</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- Le styles -->
	    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	    <link href="style.css" rel="stylesheet">
	    <style type="text/css">
	      body {
	        padding-top: 120px;
	        padding-bottom: 40px;
	      }
	    </style>
	    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="bootstrap/js/html5shiv.js"></script>
	    <![endif]-->
	  </head>

	  <body>
	';
}

function htmlFoot(){
	return '
			<footer>
        <p>&copy; SchoolBox 2013</p>
      </footer>

	    </div> <!-- /container -->

	    <img id="bg-img" src="img/book-tree.png" />

	    <!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="http://code.jquery.com/jquery.js"></script>
	    <script src="bootstrap/js/bootstrap.js"></script>


	  </body>
	</html>
';
}