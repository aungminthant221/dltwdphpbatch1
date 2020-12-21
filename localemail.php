<?php

$to = "myamya@localhost";
$subject = "This is promotion sale";
$message = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$header = "From:sale@dlt.com\r\n";
$header .= "Content-Type:text/html";

// \r Enter
// \n line break


//single senda

function sendmail($to,$subject,$message,$header){
	$mail = mail($to,$subject,$message,$header);

	if($mail){
	echo "Send Successful";
}else{
	echo"Send Failed";
}
}

//sendmail($to,$subject,$message,$header);

$myarrs = [
	["id"=>1,"email"=>"aungaung@localhost","password"=>"qwertyuiop"],
	["id"=>2,"email"=>"maungmaung@localhost","password"=>"qwertyuiop"],
	["id"=>3,"email"=>"susu@localhost","password"=>"qwertyuiop"],
	["id"=>4,"email"=>"myamya@localhost","password"=>"qwertyuiop"],
];

// echo count($myarrs);

//MultiSend
foreach($myarrs as $data){
	$to = $data["email"];
	sendmail($to,$subject,$message,$header);
}




?>




mail(to,subjectm=,header,parameter);// must be to sbj msg header /optional parameter

to = who?
subject = title
message = descriptions (text/plain or text/html)
header = from (text/plain or text/html)
parameter = reply / forward


