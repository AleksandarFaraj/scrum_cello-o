<?php


$subject = $_POST['subject'];
$message = $_POST['message'];
$sender = $_POST['sender'];


function store($subject,$message,$sender) {
	if (strlen($subject)==0 || strlen($message)==0 || strlen($sender)==0) {
		echo "You need to fill out all the values!";
		return;
	}
	if (!filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    		echo "This ($email_a) email address is considered not valid.";
	}
	$myFile = "mails.txt";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = $sender."%".$subject."%".$message."\n";
	fwrite($fh, $stringData);
	fclose($fh);
}

if (isset($_POST['subject'])) {	
	store($subject,$message,$sender);
}