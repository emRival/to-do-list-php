<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        EDIT ToDo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<!-- GET ID -->

<?php
include('config.php');
$ID = $_GET['ID'];
$query = mysqli_query($con, "SELECT * FROM tbltodo WHERE Id = '$ID'");
$row = mysqli_fetch_array($query);
?>

<body>
    <div class="container my-4">
        <h1 class="mb-4">
            <i class="fa-solid fa-list-check"></i>
            <span class="text-success">EDIT </span>ToDo List
        </h1>

        <div class="card shadow bg-body-tertiary rounded">
            <div class="card-body">
                <form class="d-flex" action="updatedata.php" method="post">
                    <input class="form-control me-2" name="list" value="<?php echo $row['list'] ?>">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-check"></i></button>
                    <input type="hidden" name="id" value="<?php echo $row['Id'] ?>">
                </form>
            </div>
        </div>

    </div>
</body>