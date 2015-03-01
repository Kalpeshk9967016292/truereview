<?php

session_start();

require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/GraphUser.php' );
require_once( 'Facebook/GraphSessionInfo.php' );
 
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;

$id = '752185491471564';
$secret = '55a62c2474eb675605964495ef785b22';

FacebookSession::setDefaultApplication($id, $secret);

$helper = new FacebookRedirectLoginHelper('http://183.87.178.207/truereview/fblogin.php');

try{
	$session = $helper->getSessionFromRedirect();
}catch(Exception $e){
	
}

if(isset($_SESSION['token'])){
	$session = new FacebookSession($_SESSION['token']);
	
	try{
		$session->Validate($id, $secret);
	}catch(FacebookAuthorizationException $e){
		$session = '';
	}
}

if(isset($session)){
	$_SESSION['token'] = $session->getToken();
	
	$request = new FacebookRequest($session, 'GET', '/me');
	$response = $request->execute();
	$graph = $response->getGraphObject(GraphUser::className());
	$hello =  $graph->getName();		echo "Login Successful<br>"; echo $hello;		$_SESSION['name']=$hello;			
	header('Location: welcome.php');    
}
else{
	echo "<a href = " . $helper->getLoginUrl() . ">Login With Facebook</a>";
}





