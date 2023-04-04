<?php include "db.php"; ?>
<?php $id = $_GET['id']; ?>
<?php 

    $query = "SELECT * FROM blogs WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('query failed');
    }
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #343541;
        }
        pre{
            background: #444654;
            color: white;
            height: 200px;
            width: auto;
        }
        #content{
            font-size:15px
        }
        #index-title{
            color:white;
        }
    </style>
</head>
<body>
<h2 id="index-title">Delete Post no. <?php echo $id?>?</h2>
<pre>
<?php echo '<label id="content"><b>Title: '.$row['title'].'</b></label><br>'; ?>
<?php echo 'uploaded on: '.$row['timestamp_column'].'  Post no.'.$row['id'].'<br> <br>'; ?>
<?php echo $row['content']; ?>
</pre>
<form action="delete.php?id=<?php echo $id?>" method="post">
    <input type="submit" value="delete" name="delete">
    <input type="submit" value="cancel" name="cancel">
    <?php
if(isset($_POST['cancel'])){
    header("Location: index.php");
    exit;
}
if(isset($_POST['delete'])){
    $deleteQuery = "DELETE FROM blogs WHERE id = $id";
    $result = mysqli_query($conn,$deleteQuery);
    if(!$result){
        die('query failed');
    }
    header("Location: index.php");
    exit;
}
?>
</form>
</body>
</html>