<html>
    <head>
        <meta charset="utf-8">
        <title>Tkkrlab info</title>
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <form method="post" action="editor.php">
          <?php
            if ( isset($_GET["slide"]))
            {
              $slideNumber = $_GET["slide"];
            }
            elseif ( isset($_POST["slide"]))
            {
              $slideNumber = $_POST["slide"];
            }
            else
              {
                $slideNumber = "1";
              }

              $myFile = "slides/slide" . $slideNumber . ".html";

          ?>
            <textarea name="slide" cols="20" rows="20" style="display:none;"><?php echo $slideNumber ?></textarea>

            <textarea name="editor1" id="editor1" rows="10" cols="80">
               <?php
                  if( isset($_POST['editor1']) ) //if save button pressed
                  {
                     $text = $_POST["editor1"];
                     $fh = fopen($myFile, 'w') or die("can't open file");
                     fwrite($fh, $text);
                     fclose($fh);
                  }
                  
                  $fh = fopen($myFile, 'r');
                  $theData = fread($fh, filesize($myFile));
                  fclose($fh);
                  echo $theData;

               ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                //CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace('editor1', { on: {
                  'instanceReady': function (evt) { evt.editor.execCommand('maximize'); }
                  }});
            </script>
        </form>
    </body>
</html>
