<?php
session_start();
include("../../menu/function.php");
require '../../menu/connect.php';



if(isset($_POST['comment_content'])){
	$comment_content = $_POST['comment_content'];
$advisergroup_id = get_ag_id(get_group_id());
$group_id = get_group_id();
$member_id = $_POST['member_id'];



	$sql = "INSERT INTO comment (comment_content, advisergroup_id,member_id,group_id) VALUES ('$comment_content', '$advisergroup_id','$member_id','$group_id')";

	if($db->query($sql)){
		$db->close();

			echo "<script>alert('Send Comment');window.location = \"pf01.php\";</script>";


	}else{
		echo $db->error;
		$db->close();
	}
}else{
	echo "Function is not executed!";
}



?>

