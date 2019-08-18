<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/13/2019
 * Time: 11:30 AM
 */

$cusFirstName=$_POST['fname'];
$cusLastName=$_POST['lname'];
$nic=$_POST['nic'];
$address=$_POST['address'];
$cusId=$_POST['cusid'];
$telNo=$_POST['telno'];

include 'dbConnection.php';

if (!$connection){
    echo mysqli_connect_error();

}else{

    $SQL = "insert into customer values 
            ('$cusFirstName',
            '$cusLastName',
            '$nic',
            '$address',
            '$cusId',
            '$telNo'
)";
    $result =mysqli_query($connection,$SQL);

    if ($result){

        echo "customer hasBeen Added OK";
    }else{
        echo "customer hasBeen Added OK";
        
        mysqli_connect_error($connection);

    }

}

?>