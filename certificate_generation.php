<?php
    session_start();
    ?>


<?php

    require_once ("dbms_connection.php");
    require_once ("smarty_configs.php");
    $id =$_SESSION['id'];
    $user_name = $_SESSION['user_name'];
    //get the name from info table
    $stmt = $conn->prepare("SELECT name FROM Info_table WHERE user_name = :user_name");
    $stmt->bindParam(':user_name', $user_name);
    $stmt->execute();
    $result = $stmt->fetch();
    $real_name = $result[0];


    //Set the Content Type


    // Create Image From Existing File
    $jpg_image = imagecreatefromjpeg('certificate-of-achievement-template.jpg');

    // Allocate A Color For The Text
    $white = imagecolorallocate($jpg_image, 0, 0, 0);


    $fontpath = realpath('.'); //replace . with a different directory if needed
    putenv('GDFONTPATH='.$fontpath);
    // Set Path to Font File
    $font_path = 'Roboto-Black.ttf';

    // Set Text to Be Printed On Image
    $text = $real_name;
    $x=800-(-12+strlen($text))*45;

    // Print Text On Image
    imagettftext($jpg_image, 150, 0, $x, 925, $white, $font_path, $text);
    var_dump($jpg_image);
    // Send Image to Browser

    $certi_path = "certificates/".$user_name;

    imagejpeg($jpg_image, $certi_path, 50);
    echo "image created";

    //create entry for certificate path in certificate table
    $stmt = $conn->prepare("INSERT INTO certificate_table (user_id, certificate_address)
                        VALUES (:id , :path)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':path', $certi_path);
    $stmt->execute();



    // Clear Memory
    imagedestroy($jpg_image);


?>
