<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>


    @include('header')
    
        <!--Hero Section -->
        <div class="hero3 d-flex align-items-center justify-content-center text-center text-white" style="height: 400px;"> 
            <div class="h7 top-left-content fs-5  fw-medium ">
                Home > Travel tips & advice
            </div>
        </div>

            <!-- Form section -->
    <div class="container pt-5" style="">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <h2>All blog post Are Here</h2>
                    <br>
                    <h5>
                        <svg width="25" height="25" style="vertical-align: middle;" viewBox="0 0 24 24">
                          <circle cx="12" cy="12" r="8" stroke="green" stroke-width="2" fill="none" />
                          <circle cx="12" cy="12" r="4" stroke="green" stroke-width="2" fill="none" />
                        </svg>
                        Add New Address
                      </h5>
                </div>

                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="inputPassword4">
                      </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">State/Province/Region</label>
                        <input type="text" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Cuntry</label>
                        <input type="text" class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Zip code/Postal code</label>
                        <input type="text" class="form-control" id="inputPassword4">
                      </div>

                      <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary ">Add now</button>
                    </div>
                  </form>

                  <br>
                  <br>

                  <!--2nd form which is payment method form--->
                  <div class="mb-3">
                    <h2>Payment Method</h2>
                    <br>
                    <h5>
                        <svg width="25" height="25" style="vertical-align: middle;" viewBox="0 0 24 24">
                          <circle cx="12" cy="12" r="8" stroke="green" stroke-width="2" fill="none" />
                          <circle cx="12" cy="12" r="4" stroke="green" stroke-width="2" fill="none" />
                        </svg>
                       Credit or Debit card
                      </h5>
                </div>
                
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="inputPassword4">
                      </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">State/Province/Region</label>
                        <input type="text" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Cuntry</label>
                        <input type="text" class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Zip code/Postal code</label>
                        <input type="text" class="form-control" id="inputPassword4">
                      </div>

                      <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">
                            Submit <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                    
                  </form>
            </div>
            <div class="col imgcon">
                <img src="{{ asset('images/conimg.jpg') }}" alt="" style="width: 100%; height: 80vh;">
            </div>
        </div>
    </div>


        <div class="container-fluid" style="background-color: #FFFFFF; align-items: center; justify-content: center; border-bottom: 1.5px solid #959F9D; padding-top:45px; padding-bottom:80px; padding-right: 40px; padding-left:40px">
            <div class="row row-cols-2">
            
            </div>
          </div>
    @include('footer')
</body>
</html>