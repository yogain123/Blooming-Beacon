
<?php
if(isset($_POST['submit']))
{
$con = mysql_connect("127.0.0.1","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  $name = $_POST["name"];
  $email =$_POST["email"];
  //$headers= "From: help_poor@bloomingbeacon.org";
  $phno = $_POST["phno"];
  $comment = $_POST["comment"];
  //$mail = $_POST["email"];
 //$headers = "From: help_poor@bloomingbeacon.org";
 // $headers .= "\r\nReply-To: help_poor@bloomingbeacon.org";
  //$headers .= "\r\nX-Mailer: PHP/".phpversion();
  
  
  /*if(mail($yogi,"Blooming Beacon", $msg, $headers,"-f help_poor@bloomingbeacon.org"))
	{
	 echo "success";
	}
	else
	{
	echo "failed";  */

  mysql_select_db("bb", $con);  // selecting database
  $sql = "insert into team values('$_name','$_phno', '$_email', '$_comment' )";


  if (!mysql_query($sql,$con))
  {
  echo "failed";
  }
else
{
echo "success";
}
mysql_close($con);
}
?>
  
 

