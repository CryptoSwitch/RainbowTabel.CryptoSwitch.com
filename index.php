<html lang="en" xmlns="http://www.w3.org/1999/html">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>RainbowTable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css"></style>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			status();
		    setInterval("status()",10000);
		});

		function status() { 
			$.get('ajax.php', function(data) {
			  $('#status').html(data);
			});
			$.get('size.php', function(data) {
			  $('#size').html(data);
			});
		}


		</script>
</head>


<body>

<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h1>Status?</h1>
        <p>Currently running! And made possible by <a href="http://cubeserver.net/">CubeServer hosting</a></p>
    </div>
    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>How many hashes do you have?</h2>
			<div id="size"></div>
        </div>
        <div class="span4">
            <h2>Want to see the code?</h2>
            <p>Look at my <a href="http://git.gravypod.com/RainbowTabel">github</a>!</p>
        </div>
        <div class="span4">
            <h2>How long have we been running this?</h2>
			<div id="status"></div>
        </div>
    </div>

    <hr>

    <footer>
        <p>RainbowTable, all rights Joshua D. Katz</p>
    </footer>

</div> <!-- /container -->

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./bootstrap/js/bootstrap.js"></script>
<script src="./bootstrap/js/jquery.js"></script>
<script src="./bootstrap/js/bootstrap-transition.js"></script>
<script src="./bootstrap/js/bootstrap-alert.js"></script>
<script src="./bootstrap/js/bootstrap-modal.js"></script>
<script src="./bootstrap/js/bootstrap-dropdown.js"></script>
<script src="./bootstrap/js/bootstrap-scrollspy.js"></script>
<script src="./bootstrap/js/bootstrap-tab.js"></script>
<script src="./bootstrap/js/bootstrap-tooltip.js"></script>
<script src="./bootstrap/js/bootstrap-popover.js"></script>
<script src="./bootstrap/js/bootstrap-button.js"></script>
<script src="./bootstrap/js/bootstrap-collapse.js"></script>
<script src="./bootstrap/js/bootstrap-carousel.js"></script>
<script src="./bootstrap/js/bootstrap-typeahead.js"></script>



</body>
</html>

