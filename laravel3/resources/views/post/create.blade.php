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
                        <h5 class="card-title text-center mb-4">Create a new Post</h5>

                        <h2><a href="{{ route('post.index')}}">All post is here:</a></h2>

                        <form action="{{route('post.store')}}" method="post">

                            @csrf
                            
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Title:</label>
                                <input type="text" class="form-control" id="inputYourName" name="title" placeholder="Title">
                            </div>

                            <div class="mb-3">
                                <textarea name="details" id="" cols="30" rows="10" placeholder="Details"></textarea>
                            </div>

                            <br>

                            <center>
                            <button type="submit" name="add-customer" class="btn btn-success">Submit</button>
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