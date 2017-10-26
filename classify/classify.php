<?php 
		// if (isset($_FILES["file"])) {
  //           // if upload failed
  //           if ($_FILES["file"]["error"] > 0 && $_FILES["file"]['error'] !== 4) {
  //               return;
  //           }
  //           // upload success
  //           elseif ($_FILES["file"]["error"] == 0) {
  //               // check file type and size then store icon
  //               $imageType = array('image/png', 'image/gif', 'image/jpeg');
  //               if (in_array($_FILES["file"]["type"], $imageType) && $_FILES["file"]['size'] < 5 * Math.pow(10, 6)) {
  //               	$fileInfo = pathinfo($_FILES["file"]["name"]);
  //                   $url = '/tf_files/test/' . uniqid(). '.' . $fileInfo['extension'];
  //                   echo true;
  //               } else {
  //                   return;
  //               }
  //           }
  //       } else {
  //       	return;
  //       }
		// $image = $_POST['image'];

		$image = "stop1_test.jpg";
		$a = shell_exec("python -m scripts.label_image --graph=tf_files/retrained_graph_signs.pb --image=\"$image\"");
		
		echo $a;
	
?>