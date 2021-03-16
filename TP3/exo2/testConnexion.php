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
 
// 使用 sql 创建数据表
// $sql = "CREATE TABLE user1 (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// login1 VARCHAR(30) NOT NULL,
// password1 VARCHAR(30) NOT NULL,
// reg_date TIMESTAMP
// )";
 
// if ($conn->query($sql) === TRUE) {
//     echo "Table user1 created successfully";
// } else {
//     echo "创建数据表错误: " . $conn->error;
// }
$sql = "INSERT INTO user1 (id, login1, password1)
VALUES ('1', 'hello1', 'bonjour1');";
$sql .= "INSERT INTO user1 (id, login1, password1)
VALUES ('2', 'hello2', 'bonjour2');";
$sql .= "INSERT INTO user1 (id, login1, password1)
VALUES ('3', 'hello3', 'bonjour3');";
 
if ($conn->multi_query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
