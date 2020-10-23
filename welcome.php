 <?php
    

if(isset($_POST['submit'])){

     echo $_FILES['file'];
     $file_name=$_FILES['file']['name'];
     echo $file_name;
     $file_type=$_FILES['file']['type'];
     $file_size=$_FILES['file']['size'];
     $file_tem_loc=$_FILES['file']['tmp_name'];
     $file_store="uploads/".$file_name;

     move_uploaded_file($file_tem_loc,$file_store);
     echo "file uploaded";
     $output = passthru("python new.py $file_store $file_name");
     echo "<br>";
}
?> 
<img src="<?php echo $file_store ?>">
<h6>original image</h6>
<img src="output/<?php echo $file_name ?>">
<h6>final image</h6>
