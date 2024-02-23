<?php
require_once('./operations.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center my-3">Registration Form</h1>

    <div class="container d-flex justify-content-center">
        <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
            <?php inputFields("Username","username","","text") ?>
            <?php inputFields("Mobile","mobile","","text") ?>
            <?php inputFields("","file","","file") ?>
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>