<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        ToDo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-4">
        <h1 class="mb-4">
            <i class="fa-solid fa-list-check"></i>
            ToDo List
        </h1>

        <div class="card shadow bg-body-tertiary rounded">
            <div class="card-body">
                <form class="d-flex" action="insert.php" method="post">
                    <input class="form-control me-2" name="list" placeholder="Apa yang menjadi fokusmu hari ini ?"
                        required>
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

        <!-- GET DATA -->
        <?php
        include('config.php');
        $query = mysqli_query($con, "SELECT * FROM tbltodo");
        ?>

        <table class="table mt-4">

            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td scope="row"><?php echo $row['Id'] ?></td>
                    <td><?php echo $row['list'] ?></td>
                    <td style="width: 5%">
                        <a href="update.php? ID= <?php echo $row['Id'] ?>" class="btn btn-outline-success">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>

                    <td style="width: 5%">
                        <a href="delete.php? ID= <?php echo $row['Id'] ?>" class="btn btn-outline-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>