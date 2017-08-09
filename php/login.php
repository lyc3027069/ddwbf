<?php
header("content-type:text/html;charset=utf-8");
$userword=$_REQUEST["userword"];
$password=$_REQUEST["password"];
$val=$userword.$password;
$json=$_COOKIE["user-pass"];
//foreach($json as $str){
//echo $str;
//}
//echo $json[0];
//echo $obj;
$arr=array("13222222222qweqweqwe","fsadfa");
$flag="false";
foreach($arr as $str){
	if($str===$val){
		$flag="true";
	}
}
echo $flag;


//echo $userword;
//echo $password;
//header("content-type:text/html;charset=utf-8");
//$val = $_REQUEST["value1"];
//$arr = array("a1111","aa11111","aaa1111","aaaa11111","aaaaa11111");
//$newArr = array();
//foreach($arr as $str){
//	if(substr($str,0,strlen($val))===$val){
//		array_push($newArr,$str);
//	}
//}
//$json = json_encode($newArr);
//echo $json;
//
?>

