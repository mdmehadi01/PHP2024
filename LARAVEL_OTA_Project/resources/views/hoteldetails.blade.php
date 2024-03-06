<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  
    @include('header')

    <div class="container-fluid p-4 " style="background-color: #F8F9FA; align-items: center; justify-content: center;
     border-top: 1.5px solid #B4B4B4;">
        <div class="row">

            <div class="fst-normal   fw-lighter   ">
               <h6> Home > Hotel > Hotel Details >Parian Holiday Villas</h6>
            </div>
        
        </div>
      </div>

     <!--Hero Section -->
     <div class="hero3 d-flex align-items-center justify-content-center text-center text-white" style="height: 400px; position: relative;"> 
       
        
        <!-- Buttons container -->
        <div class="position-absolute" style="bottom: 10px; right: 10px; z-index: 2;  margin-top: -60px;">
          
            <button class="btn" style="background-color: white; color: green; margin-right:20px;margin-top: -60px;">
                <i class="fas fa-video" style="color: green;"></i> Video
            </button>
            <button class="btn" style="background-color: white; color: green;margin-right: 40px;margin-top: -60px;">
                <i class="fas fa-images" style="color: green;"></i> Gallery
            </button>
        </div>
        
    </div>
    <!--Image section-->
    <div class="container pt-5 ">
        <div class="row">
            <div class="col-xl-5">
                <img src="{{ asset('images/ho1.png') }}" alt="" style="width: 100%; height: 80vh;">
            </div>

            <div class="col-xl-7  "> 
                <div class="row">
                    <!-- Top row with 2 divs -->
                    <div class="col-xl-6">
                        <img src="{{ asset('images/ho2.png') }}" alt="" style="width: 100%; height: 40vh;">
                    </div>
                    <div class="col-xl-6">
                        <img src="{{ asset('images/ho3.png') }}" alt="" style="width: 100%; height: 40vh;">
                    </div>
                </div>
                <div class="row pt-3 ">
                    <!-- Bottom row with 2 divs (Placeholder for your content/images) -->
                    <div class="col-xl-6">
                        <img src="{{ asset('images/ho4.png') }}" alt="" style="width: 100%; height: 40vh;">
                    </div>
                    <div class="col-xl-6">
                        <img src="{{ asset('images/ho5.png') }}" alt="" style="width: 100%; height: 40vh;">
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <!--about this hotel section-->

    <div class="container tainer">
        <div class="row">
            <div class="col">
                <div class="mb-3 " style="border-bottom: 2px solid #E9ECEF;">
                    <h2>About this hotel</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nisi in voluptatem illo odio nihil ad libero dolorum fugit placeat?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, ipsam similique, quos impedit eligendi repellat fuga quae adipisci unde nisi facere dolor deserunt eaque voluptas.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, autem dolorem. Iure, ducimus atque id officia aliquam vitae odit labore nulla repudiandae, quo fugit! Optio nobis numquam distinctio eos molestiae tempora ea mollitia, architecto sapiente doloribus debitis temporibus dolor quibusdam eius reiciendis amet incidunt consequatur.</p>
                </div>

                <div class="mb-3" style="border-bottom: 2px solid #E9ECEF;">
                    <h2 class=" pb-xl-4 pb-md-3 pb-sm-3 ">Hotel Facilities</h2>
                    <div class="row g-4">
                        <div class="col-12 col-md-4 d-flex align-items-center mb-3">
                          <i class="fas fa-wind me-2 text-success"></i> Air Conditioning
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center mb-3">
                          <i class="fas fa-utensils me-2 text-success"></i> Restaurant
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center mb-3">
                          <i class="fas fa-spa me-2 text-success"></i> Spa & Sauna
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center mb-3">
                          <i class="fas fa-thermometer-full me-2 text-success"></i> Heater
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center mb-3">
                          <i class="fas fa-wifi me-2 text-success"></i> Free Wifi
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center mb-3">
                          <i class="fas fa-swimming-pool me-2 text-success"></i> Swimming Pool
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center mb-3">
                          <i class="fas fa-soap me-2 text-success"></i> Washer & Dryer
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center mb-3">
                          <i class="fas fa-tv me-2 text-success"></i> Flat TV
                        </div>
                      </div>
                </div>
                
                <div class="mb-3 " style="border-bottom: 2px solid #E9ECEF;">
                    <h2>About this hotel</h2>
                    <p>Check In 12pm</p>
                    <p>Check Out 12pm</p>
                </div>
                
            </div>
            <div class="col">
                <img src="{{ asset('images/conimg.jpg') }}" alt="" style="width: 100%; height: 80vh;">
            </div>
        </div>
    </div>
    <!--footer ar ansho-->
    <div class="container-fluid" style="background-color: #FFFFFF; align-items: center; justify-content: center; border-bottom: 1.5px solid #959F9D; padding-top:45px; padding-bottom:80px; padding-right: 40px; padding-left:40px">
        <div class="row row-cols-2">
        
        </div>
      </div>
    @include('footer')
</body>
</html>