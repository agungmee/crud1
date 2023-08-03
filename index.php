<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD 1</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <?php require_once('db_connect.php') ?>

    <section id="input_form" class="container" style="margin-top: 40px;">
        <form action="db_post.php" method="POST" class="row">
            <div class="col-md-8 offset-md-2">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input name="user_email" type="email" class="form-control" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Jabatan</label>
                    <textarea name="user_jabatan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit Data</button>
                </div>
            </div>
        </form>
    </section>

    <section class="table_list container">

            

            <table class="table col-md-8 offset-md-1">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    require_once('db_connect.php');

                    $no = 1;
                    $query = mysqli_query($connection, "SELECT * FROM jabatan_karyawan");
                    while($row = mysqli_fetch_array($query)) {

                    ?>

                    <tr>
                    <th><?php echo $no++ ?></th>
                    <td><?php echo $row['user_email'] ?></td>
                    <td><?php echo $row['user_jabatan'] ?></td>
                    <td>
                        <a href="db_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Update</a>
                        <a href="db_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                    </tr>

                <?php } ?>
                
                </tbody>
        </table>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>