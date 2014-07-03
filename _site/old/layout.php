<?php

// DEFAULT PAGE HEADER
function head(){?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dave Landry</title>
    <meta name="description" content="">
    <meta name="author" content="Dave Landry">

    <!-- Le styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/icons/favicon.ico?v=5">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icons/apple-touch-icon-144-precomposed.png?v=5">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icons/apple-touch-icon-114-precomposed.png?v=5">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icons/apple-touch-icon-72-precomposed.png?v=5">
    <link rel="apple-touch-icon-precomposed" href="images/icons/apple-touch-icon-57-precomposed.png?v=5">
  </head>

  <body>

    
    
    
    <div id="outer">
      <div id="inner" style="#position: absolute; #top: 50%;display: table-cell; vertical-align: middle;">
<?php } 

function copyright(){?>

      <div id="footer">
        &copy; 2012 Dave Landry
      </div>

<?php }

// DEFAULT PAGE FOOTER
function foot(){?>

  <!-- <? copyright(); ?> -->
    </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    
  <script type="text/javascript">
    
		$("div.link").click(function() {
      $("div#home").fadeToggle("normal",function() { $("div#resume").fadeToggle("normal"); });
		});
		
	</script>

  </body>
</html>

</body>

<?php } ?>