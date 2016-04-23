<!-- modal for signin -->
<?php
  $HTTP_HOST = 'localhost:2000';
  $REQUEST_URI = '/login.php';
  $url = sprintf("%s%s%s","http://",$HTTP_HOST,$REQUEST_URI);

?> 
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">FOUBS Login</h4>
        </div><?php echo "$url"; ?>
        <div class="modal-body">
          <p><legend>Login using your <code>Email address</code></legend></p>
          <form role="form" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
            <div class="form-group">
                <label for="email">email<sup>o</sup>:</label>
                <input type="text" name="email" class="form-control" placeholder="example@ex.com" required>
            </div>

            
            <div class="form-group">
               <label for="pwd">Password:</label>
               <input type="password" name="pass" class="form-control" id="pwd" placeholder="Enter password" required>
            </div>

        <div class="modal-footer">
          <input type="Submit" class="btn btn-primary pull-right" value="Slugin">
          
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
         </div>
        </form>
      </div>
      
    </div>
  </div>
  </div>

    <!-- jQuery -->
    <script type='text/javascript' src="js/jquery.js"></script>

     <!--Bootstrap Core JavaScript -->
   <script type='text/javascript' src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script type='text/javascript' src="js/jquery.easing.min.js"></script>
   <script type='text/javascript' src="js/jquery.fittext.js"></script>
   <script type='text/javascript' src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
  <script type='text/javascript' src="js/creative.js"></script>
  <script type='text/javascript' src="js/cbpAnimatedHeader.js"></script>
  <script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
    </script>
   
</body>

</html>

<?php
include("connection.php");

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM users
            WHERE email='$email' AND password='$pass'";
    $result = mysql_query($sql);
    $numRows = mysql_num_rows($result);
    if($numRows==1) {
        session_start();
        $_SESSION["userid"] = $userid;
        header("Location: ./profile.php");
    } else {
        echo "Invalid Login Information";   
    }
}
?>