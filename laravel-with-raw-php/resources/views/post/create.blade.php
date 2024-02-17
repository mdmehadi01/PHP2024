<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create a customer in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Add Customer</h5>

                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Your Name:</label>
                                <input type="text" class="form-control" id="inputYourName" name="YourName" placeholder="YourName">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="inputEmail" name="Email" placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Phone:</label>
                                <input type="number" class="form-control" id="inputPhone" name="Phone" placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <label for="inputBirthday" class="form-label">Birthday:</label>
                                <input type="DATE" class="form-control" id="inputBirthday" name="Birthday" placeholder="Birthday">
                            </div>


                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="inputEmail" name="Address" placeholder="Address">
                            </div>

                            <label>Gender:</label>

                            <select name="Gender" required class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <br><br>

                            <center>
                            <button type="submit" name="add-customer" class="btn btn-success">Add_Customer</button>
                        </form>
                        <div class="back">
                           
                                <a href="#">Back to Admin panel</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>