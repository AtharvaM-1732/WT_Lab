<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home About/Contact Us using HTML CSS</title>
    <style>
      header{
        background-color: aquamarine;
      }
      .info{
        text-align: center;
      }
      div.mycontainer {
        width:100%;
        overflow:auto;
      }
      div.mycontainer div {
        margin-top: 2%;
        text-align: center;
        width:33%;  
        float:left;
      }
      </style>
</head>
<body>
  <header>
    <div class="info">
      <p>Shri Vile Parle Kelavani Mandal's</p>
      <p>Institute of Technology, Dhule</p>
    </div>
    <div class="mycontainer">
      <div style="background-color:#FFF4A3;">
        <a href=""><p>Home</p></a>
      </div>
      <div style="background-color:#FFC0C7;">
        <a href=""><p>About Us</p></a>
      </div>
      <div style="background-color:#D9EEE1;">
        <a href=""><p>Contact Us</p></a>
      </div>
    </div>
  </header>
</body>
</html>
