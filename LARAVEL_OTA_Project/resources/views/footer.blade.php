<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!---custon css link---->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- Optional: Include Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <title>Welcome to OTA Footer</title>
</head>
<body>
  <div class="container bgimg">
    <div class="row row-cols-lg-2 row-cols-sm-1 itms2">
      <div class="col-lg-6 d-flex ">
        <div>
          <img src="{{ asset('images/footicon.png') }}" alt="" style="width: 120px; height: 120px;">
        </div>
        
       <div class="col text-white">
        <h2>Sing to our <br> monthly newsletter</h2>
        <p>save up to 50% on tours! Get exclusive access to members only deals by email.</p>
       </div>
      </div>

       <!-- Newsletter form add-->
      <div class="col  ">
        <form id="newsletter-form ">
          <div class="row  items"> 
        
            <div class="col-6 mb-3"> 
              <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter your email">
              <!-- Updated mt-12 to mt-3 and added inline style for precise 15px spacing -->
              <button type="submit" class="btn btn-success w-100 mt-3" style="margin-top: 15px;">
                  Subscribe <span style="margin-left: 10px;"><i class="fab fa-telegram-plane"></i></span>
              </button>
          </div>
          </div>
        </form>
    </div>
  </div>
  </div>
<!--footer menu section-->
<div class="container-fluid" style="background-color: #041121; align-items: center; justify-content: center; padding-top:180px; padding-bottom:80px ; padding-right: 25px; padding-left:60px">
  <div class="row row-cols-2 row-cols-lg-4 ">
      <div class="col text-white a">
        <h5>OUR COMPANY</h5>
        <h5><a href="/about-us" class="text-decoration-none" style="color: #2EB59D;" >About Us</a></h5>
        <h5><a href="/careers" class="text-decoration-none ">Careers</a></h5>
        <h5><a href="/news-and-blog" class="text-decoration-none ">News and Blog</a></h5>
        <h5><a href="/support-policy" class="text-decoration-none ">Support Policy</a></h5>              
        </div> 
      <div class="col text-white">
        <h5>OUR SERVICES</h5>
        <h5><a href="/about-us" class="text-decoration-none ">About Us</a></h5>
        <h5><a href="/careers" class="text-decoration-none ">Careers</a></h5>
        <h5><a href="/news-and-blog" class="text-decoration-none ">News and Blog</a></h5>
        <h5><a href="/support-policy" class="text-decoration-none ">Support Policy</a></h5> 
        </div> 
      <div class="col text-white">
        <h5>TOP DESTINATION</h5>
        <h5><a href="/about-us" class=" text-decoration-none ">Los Vegas</a></h5>
        <h5><a href="/careers" class=" text-decoration-none ">New York</a></h5>
        <h5><a href="/news-and-blog" class=" text-decoration-none ">San Francisco</a></h5>
        <h5><a href="/support-policy" class=" text-decoration-none ">Hawaii</a></h5> 
        <h5><a href="/support-policy" class=" text-decoration-none ">Bangkok</a></h5> 
      </div>  
      <div class="col text-white">
        <h4 class="fw-bold">LOGO</h4>
        <h5><a href="/about-us" class=" text-decoration-none ">Need help?Call us</a></h5>
        <h5><a href="/careers" class=" text-decoration-none "style="color: #2EB59D;">+(123)456-7891</a></h5>
        <h5><a href="/news-and-blog" class=" text-decoration-none ">399 Interchange21 Building</a></h5>
        <h5><a href="/support-policy" class=" text-decoration-none ">Level 32&33,Sukhumvit Rd,</a></h5>
        <h5><a href="/support-policy" class=" text-decoration-none ">Klongtoey-Nua Wattana,</a></h5>
        <h5><a href="/support-policy" class=" text-decoration-none ">Bangkok 10110 Thailand</a></h5> 
        <h5><a href="/support-policy" class=" text-decoration-none "><br> support@example.com</a></h5> 
        </div> 
      
  </div>
</div>

<!--foter last section -->
<div class="container-fluid" style="background-color: #041121; align-items: center; justify-content: center; border-top: 1px solid #697479; padding-top:45px; padding-bottom:45px; padding-right: 40px; padding-left:40px">
  <div class="row row-cols-1 row-cols-lg-2 ">
    <div class="col">
      <h6 class="ftr2">Copyright @ 2024 TriumphDigital.All rights reserved</h6>
    </div>
    <div class="col">
      <!-- Add "d-flex justify-content-end" to align icons to the right -->
      <div class="icon-container d-flex justify-content-end">
        <i class="bi bi-flag"></i>
        <i class="bi bi-flag"></i>
        <i class="bi bi-flag"></i>
        <i class="bi bi-flag"></i>
        <i class="bi bi-flag"></i>
      </div>
    </div>
  </div>
</div>



</body>

</html>