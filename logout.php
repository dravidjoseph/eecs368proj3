<?php

//resets session
  session_unset();
  session_destroy();
  
  //redirects to login page
  header("location: index.html");
  /**
  *Created by Dravid Joseph
  *
  */

 ?>