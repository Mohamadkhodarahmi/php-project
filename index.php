


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<div class="container">
    <?php
    session_start();
    if (isset($_COOKIE['wrong'])):

        ?>
        <div class="alert alert-danger">
            <?= $_COOKIE['wrong'] ?>
        </div>
    <?php
    endif;
    ?>
    <div class="">
        <div>
            <form method="POST" action="/account">
                <div class="row pb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="User name" name="username">

                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Password" name="password">

                    </div>
                </div>
                <button class="btn btn-success ">submit</button>
            </form>
        </div>
    </div>


</body>
</html>
