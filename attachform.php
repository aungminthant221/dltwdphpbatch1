<?php
	if(isset($_POST["upload"])){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$attach=$_FILES["attach"];
			//var_dump($attach);
			$filename=$attach["name"];
			$filetype=$attach["type"];
			$filetmpname=$attach["tmp_name"];
			$filesize=$attach["size"];

			//echo "file name is".$filename."<br/>";
			//echo "file type is".$filetype."<br/>";
			//echo "file tempname is".$filetmpname."<br/>";
			//echo "file size is".$filesize."<br/>";
			
			//move to fileserver ( temp name , destination . filename)

			$limit=1;
			$filesizeinmb=$filesize/100000;

			if($filesizeinmb>$limit){
				echo "Cannot upload. Your file size is {$filesizeinmb}MB ";
			}else{
			move_uploaded_file($filetmpname, "fileserver/".$filename);
			echo"success uploaded";
			}
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Attach Form - Single</title>
</head>
<body>
	<form action="<?php $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
		<label for="attach">Attach</label>
		<input type="file" name="attach" id="attach" class=""><br/><br/>
		<input type="submit" name="upload" id="upload" class="" value="Upload">
		</form>
</body>
</html>