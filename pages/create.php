<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
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

        <div class="container">
            <div class="row">
                <h1 class="text-center my-5">Add User</h1>
                <a href="../logic/store.php" class="btn btn-primary">Show Users</a>
                <?php require_once "../curd_useing_file/inc/errors.php"; ?>
                <form action="../logic/store.php" method="POST">
                    <div class="form-group my-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group my-3">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name"
                            name="name">
                    </div>
                    <div class="form-group my-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
    </body>

</html>