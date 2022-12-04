<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container my-lg-5">
        <h1 class="text-light text-center">Contact Form</h1>
        <form method="post" action="user2.php">
            <div class="mb-3 mypadd">
                <label for="exampleInputEmail1" class="form-label  text-light ">First Name</label>
                <input type="text" class="form-control" name="first_name" id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3 mypadd">
                <label for="exampleInputPassword1" class="form-label text-light ">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="exampleInputPassword1">
            </div>

            <div class="mb-3 mypadd">
                <label for="exampleInputPassword1" class="form-label text-light ">Address</label>
                <input type="text" class="form-control" name="address" id="exampleInputPassword1">
            </div>
            <div class="mb-3 mypadd">
                <label for="exampleInputPassword1" class="form-label text-light ">Phone</label>
                <input type="text" class="form-control" name="phone" id="exampleInputPassword1">
            </div>




            <button type="submit" class="btn btn-primary mymargin my-3">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>