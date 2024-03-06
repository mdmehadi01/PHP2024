<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2h2.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    @include('header')

    <!--Hero Section -->
    <div class="hero d-flex align-items-center justify-content-center text-center text-white" style="height: 400px;"> 
        <h2 class="fs-1 fw-bold ">Contact</h2>
    </div>

    <!-- Form section -->
    <div class="container tainer">
        <div class="row">
            <div class="col">
                <div class="mb-3 " style="border-bottom: 2px solid #E9ECEF;">
                    <h2>We'd love to hear from you</h2>
                    <p>Send us a message and we'll respond as soon as possible</p>
                </div>
                
                <form class=" col bord">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>
            </div>
            <div class="col imgcon">
                <img src="{{ asset('images/conimg.jpg') }}" alt="" style="width: 100%; height: 80vh;">
                <div class="col text-start text-white section py-5 px-4 con22"style="background-color: #399F6E;">
                    <h1>Booking Core</h1>
                    <br>
                    <br>
                    <h6>Tell:+ 00 222 444 33</h6>
                    <h6>Email:hello@yoursite.com</h6>
                    <h6>1355 Market st, Suite 900 San,</h6>
                    <h6>Francisco, CA94103 United States</h6>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Google map section -->
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col ">
                    <iframe class="map"src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62101.384778301486!2d99.93487965154353!3d13.391475262396485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x30e2d489bfbd74bf%3A0xaca144b5320ffc4!2zQXNpdGEgRWNvIFJlc29ydCBBbXBoYXdhLCAzMy8zIOC4q-C4oeC4ueC5iDQg4LiX4LmJ4Liy4Lii4Lir4Liy4LiUIOC5gOC4oeC4t-C4reC4hyBTYW11dCBTb25na2hyYW0gNzUwMDAsIFRoYWlsYW5k!3m2!1d13.391395099999999!2d99.9760798!4m5!1s0x30e2d489bfbd74bf%3A0xaca144b5320ffc4!2zQXNpdGEgRWNvIFJlc29ydCBBbXBoYXdhLCAzMy8zIOC4q-C4oeC4ueC5iDQg4LiX4LmJ4Liy4Lii4Lir4Liy4LiUIOC5gOC4oeC4t-C4reC4hyBTYW11dCBTb25na2hyYW0gNzUwMDA!3m2!1d13.391395099999999!2d99.9760798!5e0!3m2!1sen!2sbd!4v1709619218232!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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