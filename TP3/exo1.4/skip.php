<?php
if(!isset($_GET['url']) || !isset($_GET['info'])){
    exit();
}
?>

<!DOCTYPE html>
<html lang ="zh-CN">
<head>
<meta charset="utf-8"/>
<meta http-equiv="refresh" content="3;URL=<?php echo $_GET['url'] ?>"/>
<title>skipping......</title>
</head>

<body>  
    <div style="text-align:center;font-size:20px;"><?php echo $_GET['info'] ?>,skip after 3s</div>
</body>
</html>