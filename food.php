<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/utility.css">
    <link rel="stylesheet" href="./css/food.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div id="triangle"></div>
    <div id="food-section">
      <div id="form-section" class="wd50">
      <form action="" method="post" class="form">
        <div id="food-type" class="wd100">
            <label >
              <input
                type="radio"
                name="foodtype"
                id="foodtype"
                value="checkedValue"
                
              />
              Non-veg
            </label>
            <label >
            <input
            
            type="radio"
            name="foodtype"
            id="foodtype"
            value="checkedValue"
          />
          Veg
        </label>
       </div>
        <div id="food-name">
            <label for="food-name" class="block">Food Name:</label>
            <input  class="textbox wd100 " type="text" name="" id="" placeholder="Food Name">
        </div>
        <div id="food-waight">
          <label for="food-waight" class="block">Food Name:</label>
          <input  class="textbox wd100 " type="text" name="" id="" placeholder="Waight">
      </div>
      <div id="food-area">
        <label for="food-waight" class="block">Area:</label>
      
        <input  class="textbox wd100 " type="text" name="" id="" placeholder="Waight">
        <p id="note">Note:please specify area in which Ngo should be located </p>
    </div>
      <div class="wd50" id="btn-section">
     <input type="button" class="btn" value="I have Food">
      </div>
        
      </form>
    </div>
    </div>

</div>
  </body>
</html>