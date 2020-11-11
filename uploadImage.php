<?php

include 'connect.php';

$folder = "./images/";

$image = $_FILES['image']['name'];

$path = $folder . $image ;

$target_files=$folder.basename($_FILES["image"]["name"]);

$imageFileType=pathinfo($target_files, PATHINFO_EXTENSION);

$allowed=array('jpeg','png','jpg');

$filename=$_FILES['image']['name']; 

$ext=pathinfo($filename, PATHINFO_EXTENSION);
//if(!in_array($ext,$allowed) ) 

//{ 

// echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";

//}

//else{ 

    move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 
    
    $statement = $conn->prepare("CALL insertImage(?);");

    $statement->bindParam(1, $image, PDO::PARAM_STR);
    
    	if(($statement->execute()) == 1){
		echo "success";
//	}

    $conn = null;
}
?>