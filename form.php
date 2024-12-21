<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="box" style="width: 50%; margin:0px auto;">
        <form action="sendToDb.php" method="post" enctype="multipart/form-data">
            <h1 class="text-center">Registration From</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="fname" class="form-label">Father Name</label>
                <input type="text" class="form-control" name="fname" id="fname">
            </div>
            <div class="mb-3">
                <label for="mname" class="form-label">Mother Name</label>
                <input type="text" class="form-control" name="mname" id="mname">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone no.</label>
                <input type="number" class="form-control" name="phone" id="phone">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">File upload</label>
                <input type="file" class="form-control" name="img" id="file">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>