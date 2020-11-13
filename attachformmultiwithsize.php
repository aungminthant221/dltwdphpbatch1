<?php
if(isset($_POST["upload"])){
	if($_SERVER["REQUEST_METHOD"]=="POST"){
			$file=$_FILES["attach"];
			
			$filetempname=$file["tmp_name"];
			$filename=$file["name"];
			$filetype=$file["type"];
			$filesize=$file["size"];

			var_dump($file);
			echo "<br/>";
			//echo $file["tmp_name"][0];
			
			$listen=count($filename);
			$limit=1;

			function bytetomb($totalfilesize){
				$cal = $totalfilesize/1000000;
				return $cal;
			}
			
			$totalfilesize=array_sum($filesize);
			echo $totalfilesize;
			echo "<br/>";

			//$filesizetomb=$totalfilesize/1000000;

			foreach($filetempname as $key=>$value){
				if(bytetomb($totalfilesize)<$limit){
					move_uploaded_file($filetempname[$key],"fileserver/".$filename[$key]);
				echo ($listen >1 ? "{$listen} files are " : "$listen files is ") . "successful uploaded.";
				}else{
					echo"Woo your files are too big. They are about ". bytetomb($totalfilesize) . "Mb. Can't upload. we allowed {$limit}MB only";
				}
				
			}
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Attach Form Multi</title>
</head>
<body>
	<form action="<?php $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data"> 
		<label for="attach"></label><br/><br/>
		<input type="file" name="attach[]" id="attach" class="" multiple><br/><br/>
		<button type="submit" name="upload" id="upload" class="">Upload</button>
	</form>
</body>
</html>