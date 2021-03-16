<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "tp3";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$sql = "INSERT INTO user1 (id, login1, password1)
VALUES ('xxx', 'xxxx', 'xxxxx');";

 
if ($conn->multi_query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
