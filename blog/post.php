<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body{
            background: #343541;
            color:white;
        }
        #title{
            background-color: #444654;
            border:none;
            color:white;
        }
        #content{
            background-color: #444654;
            border:none;
            color:white;
        }
       
    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="col-sm-6">
            <form action="post.php" method="post">
                <h4>NEW POST:</h4>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="submit" name="submit">
                <?php
                if(isset($_POST['submit'])){
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    date_default_timezone_set('Asia/Kolkata');
                    $current_time = date('Y-m-d H:i:s');
                
                
                    if($title && $content){
                        $query = "INSERT INTO blogs(title, content, timestamp_column) VALUES('$title', '$content', '$current_time')";
                        $result = mysqli_query($conn, $query);
                        // echo "Posted!";

                        if(!$result){
                            die('query failed');
                        }
                        header("Location: index.php");
                        exit;
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>