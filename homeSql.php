<?php
include 'connect.php';
// $file_name="image.jpg";
// $file_url="image/image.jpg";
?>
<!-- <img src="?php echo $file_url;?>" alt=""> -->
<?php


?>
<!-- 
<a href="image/image.jpg" Download rel='noopener noreferrer' target="">Download</a> -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" class="form-control" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="upload" value="" >Upload</button>
            </div>
            
        </form>
    </div>
    <div id="display-img">
        <?php
            $query = "SELECT * FROM `image`";
            $query = mysqli_query($con,$query);            
            ?><h1>This my image</h1>
            <?php
            while($data=mysqli_fetch_assoc($query)){
                ?>
                <img src="upload/<?php echo $data['filename']; ?>"alt="">
        <?php
            }
        ?>
    </div>



    <?php
    if(isset($_POST['upload'])){
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder   = "upload/". $filename ;
        $sql = "INSERT INTO `image`(`filename`) VALUES ('$filename')";
        mysqli_query($con,$sql);
        if(move_uploaded_file($tempname, $folder)){
            echo "<h2> Image uploaded successfully!<h2>";
        }else{
            echo "<h2> Failed to upload image!</h2>";
        }
    }
    ?>
    
</body>
</html>


























<?php






// home page php code_1

// $sql="SELECT * FROM `home_section_1` WHERE name='Abdul Khalid'";
// $result=mysqli_query($con,$sql);
// if($result){
//     $row=mysqli_fetch_assoc($result);
//     $name    =$row['name'];   
//     echo "br"; 
//     $skill_1 = $row['skill_1'];
//     echo "br"; 
//     $skill_2 =$row['skill_2'];
//     echo "br"; 
//     $h_dic   = $row['h_disc'];



// }

// echo $skill_1;
// echo $skill_2;
// echo $h_dic;

?>