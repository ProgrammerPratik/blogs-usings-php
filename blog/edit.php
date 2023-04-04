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
            <form action="edit.php?id=<?php echo $id?>" method="post">
                <h4>EDIT POST No. <?php echo $id?></h4>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $row['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?php echo $row['content']?></textarea>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="update" name="update">
                <input class="btn btn-primary" type="submit" value="cancel" name="cancel">
                <?php
                if(isset($_POST['update'])){
                    $new_title = $_POST['title'];
                    $new_content = $_POST['content'];

                    if($new_title || $new_content){
                        $updateQuery = "UPDATE blogs SET `title`='$new_title',`content`='$new_content' WHERE id = $id";
                        $result = mysqli_query($conn,$updateQuery);
                        if(!$result){
                            die('query failed');
                        }
                        header("Location: index.php");
                        exit;
                    }
                }
                
                if(isset($_POST['cancel'])){
                    header("Location: index.php");
                    exit;
                }
                
                ?>
            </form>
        </div>
    </div>
</body>
</html>