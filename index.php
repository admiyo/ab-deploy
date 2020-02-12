 <?php 
 echo "I am VERSION 6 Written at the site!<br>";
 echo "<br>My Pod IP is : ".$_SERVER['SERVER_ADDR']."\n";
 echo "<br>My Uid is : ".getmyuid() . "\n";
 echo "<br>My euid is : " .posix_geteuid() . "\n";
 ?>
