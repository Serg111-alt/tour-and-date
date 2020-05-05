<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Тест</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    #style{
      font-size:20px;
      background:orange;


    }
    body{
    background-image: url(jesus2.jpg) ;
    background-repeat: no-repeat;
    
}
 button:hover{
   color:red;
   background:red;
 }
 
form{
  width:260px;
  height:260px;
  margin:0 auto;
}

input[type="range"]{
  -webkit-appearance:none;
  width:160px;
  height:20px;
  margin:10px 50px;
  background: linear-gradient(to right, #9A2720 0%, #9A2720 100%);
  background-size:150px 10px;
  background-position:center;
  background-repeat:no-repeat;
  overflow:hidden;
  outline: none;
}

input[type="range"]:first-of-type{
  margin-top:30px;
}

input[type="range"]::-webkit-slider-thumb{
  -webkit-appearance:none;
  width:20px;
  height:20px;
  background:#F26B5E;
  position:relative;
  z-index:3;
  box-shadow:0 0 5px 0 rgba(0,0,0,0.3);
}

input[type="range"]::-webkit-slider-thumb:after{
  content:" ";
  width:160px;
  height:10px;
  position:absolute;
  z-index:1;
  right:20px;
  top:5px;
  background: #ff5b32;
  background: linear-gradient(to right, #f088fc 1%, #AC6CFF 70%);
}


    </style>
  </head>

  <body>
 
  <div class="w3-center w3-margin-top w3-padding-64">
   <h1 style = color:white;>ТУР</h1>
    <form method="post" action="countries.php" name="myform">
      <label for="formCountry" id = "style"> Выберите страну: </label>
      <select name="formCountry">
        <option value="US">США</option>
        <option value="UK">Великобритания</option>
        <option value="France">Франция</option>
        <option value="Russia">Россия</option>
        <option value="Japan">Япония</option>
      </select>
      <br />
      <label for="stars" id = "style"> Выберите количество звездочек: </label>
      <select name="stars">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
      </select>
      <br />
      <label for="stars" id = "style"> Выберите цену за отель: </label>
      <p style = color:white;>10</p>
      <input
        
        type="range"
        name="price"
        id="price"
        min="10"
        max="600"
        value="10"
        oninput="priceOutput.value=price.value"
      />
      <p style = color:white;>600</p>
      <br />
      <output name="priceOutput" id="priceOutput" style = color:white;>10</output>
      <br />
      <button name="formSubmit" id = "style"  >ОК</button>
    </form>
    </div>
  </body>
</html>