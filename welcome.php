<html>
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>true review</title>
<link rel="stylesheet" type="text/css" href="enterted.css">
<link href="shift.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="bootstrap.css" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<?php 

session_start();

//$hello = $_SESSION['name'];
$hello = 'Kalpesh Kalekar';
$len = strlen($hello);

/*if ( $len==0)
{
	header('Location: fblogin.php');    
} 
else 
{
	echo $len;
}
*/


?>

</head>

<body>

<div class="head">
<h1>
true review
</h1>
<p>
True reviews by true consumers

</p>
<div class="username">
Welcome
<?php  

echo $hello;
?>
</div>

</div>

<div class="main">

<div class="welcome">
&nbsp;
<br>
Welcome <?php  echo $hello; ?>. Select a category to read or write review.
<br>
&nbsp;
<br>
</div>

<div class="cat">

<div class="block">
<div class="cathead">
Products
</div>
<div class="maincat">
&nbsp;
<br>
In marketing, a product is anything that can be offered to a market that might satisfy a want or need. In retailing, products are called merchandise. In manufacturing, products are bought as raw materials and sold as finished goods.
<br>
&nbsp;
<br>
</div>
</div>

<div class="block">
<div class="cathead">
Services
</div>
<div class="maincat">
&nbsp;
<br>
A Service is a set of actions or solutions that are put in place or are performed to provide a repeatable and consistent set of outcomes and performance for people, organizations, and systems that represent consumers or beneficiaries of such results.
<br>
&nbsp;
<br>
</div>
</div>

<div class="block">
<div class="cathead">
Places
</div>
<div class="maincat">
&nbsp;
<br>
In marketing, a product is anything that can be offered to a market that might satisfy a want or need. In retailing, products are called merchandise. In manufacturing, products are bought as raw materials and sold as finished goods.
<br>
&nbsp;
<br>
</div>
</div>


</div>
</div>
</body>
<?php
//session_destroy();
?>
</html>
