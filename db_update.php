<?php

include('db_connect.php');

$id = $_GET['id'];

$query = "SELECT * FROM jabatan_karyawan WHERE id = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>  
    <div class="container" style="margin-top: 40px;">
        <form action="db_update.php" method="POST" class="row">
            <div class="col-md-8 offset-md-2">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input name="user_email" type="email" class="form-control" value="<?php echo $row['user_email'] ?>" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Jabatan</label>
                    <textarea name="user_jabatan" class="form-control" rows="3"><?php echo $row['user_jabatan'] ?></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit Data</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>