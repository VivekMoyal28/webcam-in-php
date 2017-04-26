<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webcam in PHP</title>
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script type="text/javascript" src="webcam.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted">Webcam In PHP</h3>
      </div>

      <div class="jumbotron">
        <script language="JavaScript">
            document.write( webcam.get_html(320, 240) );
        </script>
      </div>
      
        <form class="text-center">
            <input type=button value="Configure cam" onClick="configure()" class="btn btn-primary">
            &nbsp;&nbsp;
            <input type=button value="Take Snapshot" onClick="take_snapshot()" class="btn btn-success">
            <br/>
        </form>
<div id="showresult"></div>
      <footer class="footer">
          <a href="http://www.vivekmoyal.in">www.vivekmoyal.in</a>
      </footer>

    </div> <!-- /container -->
    <script language="JavaScript">
        webcam.set_api_url( 'action.php' );
	webcam.set_quality( 100 ); // JPEG quality (1 - 100)
	webcam.set_shutter_sound( true ); // play shutter click sound
	webcam.set_hook( 'onComplete', 'my_completion_handler' );
        
        function take_snapshot(){
            $('#showresult').html('<h1>Uploading...</h1>');
            webcam.snap();
	}
        
        function configure(){
            webcam.configure();
        }
        
        function my_completion_handler(msg) {
            // msg will give you the url of the saved image using webcamClass
            $('#showresult').html("<img src='"+msg+"'> <br>"+msg+"");
            return false;
        }
	</script>
</body>
</html>
