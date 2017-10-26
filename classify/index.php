<?php 
	if(isset($_POST['submit'])) {
		$target_dir = "image_test/";
		if (isset($_FILES["fileToUpload"])) {
			// print_r($_FILES["fileToUpload"]);
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            // if upload failed
            if ($_FILES["fileToUpload"]["error"] > 0 && $_FILES["fileToUpload"]['error'] !== 4) {
                return;
            }
            // upload success
            elseif ($_FILES["fileToUpload"]["error"] == 0) {
                // check file type and size then store icon
                $imageType = array('image/jpeg');
                if (in_array($_FILES["fileToUpload"]["type"], $imageType) && $_FILES["fileToUpload"]['size'] < 2000000) {
                    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    $image = $target_file;

                    $checkType = shell_exec("python test.py");
                    if (isset($checkType)) {
                    	echo "<div class='result'>" . $checkType . "</div>";
                    } else {
                    	$classify = shell_exec("python -m scripts.label_image --graph=tf_files/retrained_graph_signs.pb --image=\"$image\"");
						if (isset($classify)) {
							echo "<div class='result'>" . $classify . "</div>";
						} else {
							echo "<div class='result'>Please try another image!</div>";
						}
                    }
                   
                } else {
                    return "upload error";
                }
            }
        }
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Classify</title>
			<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bower_components/jquery/dist/jquery.min.js"></script>
		<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="classify.js" type="text/javascript"></script>
		<style type="text/css">
			.form {
				text-align: center; 
				margin-top: 100px;
			}
			.bg-primary {
				margin-top: 50px;
			}
			.bg-primary:hover {
				color: white;
				opacity: 0.8;
			}
			.img-test {
				border-radius: 5px;
			}
			.img {
				border: solid; 1px; 
				width: 200px;
				height: 200px;
				text-align: center;
				margin-left: 42%;
				border-radius: 5px;
			}
			.btn {
			    width: 104px;
			}
			.check {
				margin-top: 49px;
			}
			.result {
			    margin-top: 39px;
			    font-size: 20px;
			    text-align: center;
			    color: red;
			}
		</style>
	</head>
	<body>
		<h2 class="text-center">Classify traffic signs : Stop - Turn left - Turn Right</h2>
		<div class="row"> 
			<form action="" class="form" method="post" enctype="multipart/form-data" >
				<div class="img">
					<img id="avatar" src="<?php if(isset($image)) echo $image; ?>" alt='' width="195" height="195" class="rounded img-test"/>
				</div>
			    <div class="form-group ">
			        <label for="fileToUpload" class="btn bg-primary">
			            Select image
			            <input type="file" id="fileToUpload" name="fileToUpload" accept="image/*" style="display:none;">
			        </label>
		            <button type="submit" class="btn btn-primary check" id="submit" name="submit">Check</button>
			    </div>
			</form>
		</div>
	</body>
</html>
