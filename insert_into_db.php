<!-- 
Yash Bhambhani
CPSC 349 - Midterm I 
Q3 (10 pts)
03/18/2020
 -->
<?php
    $row = mysqli_fetch_object($result);
    $db_userid = $row->admin_id;
    $db_password = $row→admin_password;
    $encryptpasswd = sha1($userPasswd);
    $db_name = $row->admin_name;
    if ($db_userid != $userid || $db_password != $encryptpasswd) {
        $query = INSERT IGNORE  INTO administrator(admin_id, admin_password, admin_name)
                    VALUES('$userid','$encryptpasswd','$name');
        $result = mysql_query($query)
            or die(Insert to administrator failed. . mysql_error());
        header("Location: /ClassRegistration/Maintenance/systementry.php");
        
    if (!$result) {
        echo ("Insert to administrator failed. ". mysqli_error($connection));
    exit();
        }
    }
?>