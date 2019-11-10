 <?php
  // connect to mysql
  $con = mysqli_connect("localhost", "root", "", "shoutups");


  // test fann_get_total_connections
  if(mysqli_connect_errno()) {
    echo 'Failed to connect to mysql:'.mysqli_connect_error();
  }
