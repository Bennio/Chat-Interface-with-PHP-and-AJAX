<?php
$connect = new mysqli("localhost","root","");
if($connect->connect_error){
    echo "Connection failed: " . $conn->connect_error;
    exit;
}
$query = "CREATE DATABASE IF NOT EXISTS Chatroom";
$connect->query($query);

$connect->select_db('Chatroom');

$query = "CREATE TABLE IF NOT EXISTS Users(
    username varchar(15) DEFAULT NULL,
    password varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
    UNIQUE KEY username (username)
)";
$connect->query($query);

$query = "CREATE TABLE IF NOT EXISTS Msg(
    postID int NOT NULL AUTO_INCREMENT,
    username VARCHAR(15),
    msg TINYTEXT,
    time TIMESTAMP,
    PRIMARY KEY (postID)
)";
$connect->query($query);
