<?php
  define('DBHOST','localhost');
  define('DBUSER','algorythmic');
  define('DBPASSWD','Infinity123@ssp');
  define('DBNAME','algoryth_quiz');
  $conn=new mysqli(DBHOST,DBUSER,DBPASSWD,DBNAME);
  if($conn->connect_error)
	   die("connection failed".$conn->error);
  //print "Connection successful";
?>