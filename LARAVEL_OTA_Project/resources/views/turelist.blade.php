<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ture List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    @includeIf('header')
     <!--hero section-->
     <div class="hero4 d-flex align-items-center justify-content-center text-center text-white" style="height: 400px;"> 
        <h1 class="fs-1 fw-bold ">Ture List - Top Secrch</h1>
    </div>

    
<!---Form section---->
<div class="form-container22">
    <form>
         <!-- Icon list -->
  <div class="container hero1">
    <div class="row text-center ">
     <div class="col">
       <i class="fas fa-hotel">Hotels & Homes</i> <!-- FontAwesome hotel icon -->
     </div>
     <div class="col">
       <i class="fas fa-key">Private State</i> <!-- Assuming a key icon for Private State -->
     </div>
     <div class="col">
       <i class="fas fa-building">Public State</i> <!-- Assuming a building icon for Public State -->
     </div>
     <div class="col">
       <i class="fas fa-plane"></i> <!-- FontAwesome plane icon -->
     </div>
   </div>
  </div>
      <!--icon end-->
      <br>
      <div class="container">
        <div class="row mb-2">
      
        <div class="row g-2 align-items-center">
          <!-- 'g-2' adds a gap between grid items -->
        
          <div class="col-4"> <!-- Adjusted from col-6 to col-4 to fit three items in one row -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Enter a destination or property" name="FirstName">
              </div>
          </div>
        
          <div class="col-4"> <!-- Adjusted from col-6 to col-4 to fit three items in one row -->
            <label class="visually-hidden" for="inlineFormInputGroupUsername2">Username</label>
            <div class="input-group">
              <div class="input-group-text">@</div>
              <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
            </div>
          </div>
        
          <div class="col-4"> <!-- Changed from col-md-6 to col-4 to make it equal width and fit in one row -->
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
        </div>
  

      
      <div class="text-center ">
        <button type="button" class="btn btn-success btn-2" style="font-size: 20px; padding: 10px 90px;">Search</button>
      </div>
  
        </div>
       
      </div>  
   
    </form>
  </div>
    
<!--footer ar ansho-->
<div class="container-fluid" style="background-color: #FFFFFF; align-items: center; justify-content: center; border-bottom: 1.5px solid #959F9D; padding-top:45px; padding-bottom:80px; padding-right: 40px; padding-left:40px">
    <div class="row row-cols-2">
    
    </div>
  </div>
    @include('footer')
</body>
</html>