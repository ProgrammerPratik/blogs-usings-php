<?php include "db.php"; 
// include "post.php"
    $query = "SELECT * FROM blogs ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('query failed');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: #343541;
        }
        pre{
            background: #444654;
            color: white;
            height: 200px;
            width: auto;
            border-radius:5px;
        }
        pre:hover{
            background: #62657a;
        }
        #content{
            font-size:15px
        }
        #content:hover{
            color:yellow;
        }
        #index-title{
            color:white;
        }
        #index-title:active{
            color:lightblue;
        }
        a{
            color:lightblue;
            text-decoration:none;
        }
        a:hover{
            color:yellow;
        }
        #del:hover{
            color:red;
        }
        #create-post-btn:hover{
            background-color:green;
            color:white;
        }
        .unselectable {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog main page</title>
</head>
<body>
    <center><label class="unselectable"><h1 id="index-title"><<< blogs >>></h1></label></center>
<div class="container">
        <div class="col-sm-6">
            <a href="post.php"><button id="create-post-btn">Create Post</button></a>
            <?php
            // mysqli_data_seek($result, mysqli_num_rows($result) - 1);
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <pre>
 <?php echo('<label id="content"><b>Title: '.$row['title'].'</b></label><br>'); ?>
 <?php echo('uploaded on: '.$row['timestamp_column'].'  Post no.'.$row['id'].'   <a href="edit.php?id='.$row['id'].'">[edit]</a> <a href="delete.php?id='.$row['id'].'" id="del">[delete]</a><br> <br>'); ?>
<?php echo($row['content']); ?>
                </pre>
                <?php
            }
            ?>
        </div>
</body>
</html>