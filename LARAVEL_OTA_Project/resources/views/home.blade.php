<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>

  
@include('header')
       <!--hero section-->
  <div class="hero col-lg12 col-md-12 col-sm-12 text-center text-white" style="height: 450px;"> 
        <h1 class="custom-pt-45">BOOK A HOME ON AGODA HOMES</h1>
   <h4>More spacious. More local. More of why you travel.</h4>
</div>



<!---Form section---->
<div class="form-container">
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
      <div class="row mb-3">
        <div class="col-12">
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Enter a destination or property" name="FirstName">
          </div>
        </div>
      </div>
    
      <div class="row g-2 align-items-center">
        <!-- 'g-2' adds a gap between grid items -->
      
        <div class="col-4"> <!-- Adjusted from col-6 to col-4 to fit three items in one row -->
          <label class="visually-hidden" for="inlineFormInputGroupUsername1">Username</label>
          <div class="input-group">
            <div class="input-group-text">@</div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername1" placeholder="Username">
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

      
      <div class="row-2 d-flex align-items-center" style="display: flex; gap: 10px;">
        <button type="button" class="btn btn-danger btn-sm mt-3">Bundle & Save</button>
        <span class="h6 pt-4 "><i class="fas fa-plus"></i> Add a hotel</span>
    </div>
    
    <div class="text-center btn-1">
      <button type="button" class="btn btn-success" style="font-size: 20px; padding: 10px 90px;">Search</button>
    </div>

      </div>
     
    </div>  
 
  </form>
</div>
  @include('footer')
</body>
</html>
