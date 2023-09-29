<?php

$students = json_decode(file_get_contents("user.json", true));

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container ">
            <div class="row">
                <h1 class="text-center my-5">All Users</h1>
                <a href="pages/create.php" class="btn btn-primary">Add Users</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $key => $student) :
          ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $student['email'] ?></td>
                            <td><?= $student['name'] ?></td>
                            <td><?= $student['password'] ?></td>
                            <td>
                                <a href="#" class="btn btn-info">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
          endforeach; 
          ?>
                    </tbody>
                </table>
            </div>
    </body>

</html>