<?php

session_start();
include_once 'config.php';
$email = mysqli_real_escape_string( $conn, $_POST[ 'username' ] );
$password = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );
if ( isset( $_POST[ 'submit' ] ) ) {
    $email = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    if ( !empty( $email ) && !empty( $password ) && !empty( $name ) && !empty( $contact ) && !empty( $email ) ) {

    } else {
        echo 'All inputs are required!';
    }
} else {
    echo 'error';
}
?>

