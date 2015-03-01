<?php 
	
	if (isset($_POST["fblogin"])){
  // "Save Changes" clicked
  include ('fblogin.php');
} else if (isset($_POST["btnDelete"])){
  // "Delete" clicked

}

else 
{
	  echo "Nahhh";
}


?>