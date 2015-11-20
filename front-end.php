<html>
  <head>
    <title>Ajax Search Box using PHP and MySQL</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/typeahead.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/scripts/typeahead.min.js"></script>

  </head>
  <body>
	  <?php
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		
		require_once('/var/www/html/includes/header.php');
	  ?>
  <div class="row">
	  <div class=".col-md-6">
	    <div class="panel panel-default">
		    <div class="bs-example">
		        <input type="text" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Type your Query">
		    </div>
		</div>
	  </div>
  </div>

    <script>
    $(document).ready(function(){
	    $('input.typeahead').typeahead({
	        name: 'typeahead',
	        remote:'search-ajax.php?key=%QUERY',
	        limit : 10
		});
	});
    </script>
  </body>
</html>
