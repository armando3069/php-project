<!DOCTYPE html>

<html>
  <?php  session_start(); ?>
<head>
    <title>Loflame</title>
    <meta charset=utf-8 />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" href="https://mpng.subpng.com/20180413/tpw/kisspng-computer-icons-combustibility-and-flammability-u-s-fire-5ad077448bfae1.0469150715236114605734.jpg" type="image/x-icon">
    <link class="pakainfo" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="pakainfo" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="pakainfo" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

  <style>

      body
      {
        background: rgb(131,58,180,0.3) ;
        background: linear-gradient(90deg, rgba(131,58,180,0.8) 0%, rgba(253,29,29,0.8) 50%, rgba(252,176,69,1) 100%);
      }

      .box-image
      {
        background: rgb(131,58,180);
background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
          border-radius: 20px;
          width: 400px;
          height: 550px;
          margin-left: 200px;
          margin-top: 50px;
          padding: 20px;
          opacity: 0.5;

      }
      .box-image:hover
      {
          opacity: 1;
      }
     

      img
      { 
          width: 300px;
          height: 300px;
          margin-left: 28px;
          margin-top: 35px;
          border-radius: 5%;
      }
       
      input
      {
         width: 110px;
         margin-left: 120px;
        
      }
  .box-desc
  {
          background: rgb(131,58,180);
          background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);   
          border-radius: 20px;
          width: 400px;
          height: 550px;
          margin-right: 1px;
          margin-top: 50px;
          padding: 20px;
          opacity: 0.5;

  }
  .box-desc:hover
  {
   opacity: 1;

  }
  #inter
  { 
    
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            height: 600px;
            width: 1400px;
  }
  #iner
  {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            height: 30px;
            width: 100px; 
            margin-left: 110px;
  }
 
  .mobile input
  { 
      border-radius: 10px;
      margin-top: 20px;
      width: 300px;
      height: 40px;
      margin-left: 20px;

  }
  .email input
  {
     border-radius: 10px;
     margin-top: 20px;
     width: 300px;
     height: 40px;
     margin-left: 20px;

  }
  .glow-on-hover {
    margin-left: 600px;
    margin-top: 40px;
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: rgb(221, 10, 3);
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: rgb(19, 15, 15)
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgb(141, 17, 100);
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
 #hobby
 {
     margin-left: 120px;
 }

 .location input
 {
    display: none;
 }
 .sex input
 {
   margin-left: 50px;

 }
  #sex
  {
    margin-left: 40px;
  }
  </style>

</head>
<body>
  <center><h4>Salut <?php print $_SESSION['name'];?> </h4></center>
<div id="inter">

  <div class="box-image">

  <form method="POST" action="request.php">

    <input type='file' name="file" onchange="readLiveURL(this);" />
    <img id="livepreview" src="https://static.thenounproject.com/png/503257-200.png"/>

  </div>

   <div class="box-desc">
       <h4>Descriere Personala </h4>
       <div class="descriere">
        <textarea rows="4" cols="40" name="des"></textarea>
       </div>
        <br>
        <h3 id="hobby">Hobby</h3>
        <br>
        <div id ="iner">
        <br>
        <br>
        <select name="hobby">
            <option value="Alege">Alege</option>
            <option value="Sport">Sport</option>
            <option value="citit">citit</option>
            <option value="calatorii">calatorii</option>
            <option value="Fizica">Fizica</option>
            <option value="Programarea">Programarea</option>
            <option value="Dasul">Dasul</option>
            <option value="Canto">Canto</option>
            <option value="ingininerie">ingininerie</option>
            <option value="actoria">actoria</option>
        </select>

              </div>

              <div class="email">
                <input type="email" name="email" placeholder="Email">
              </div>

              <div class="mobile">
                  <input type="tel" name="tel" placeholder="Telefon">
              </div>
              <br>
              <h5 id="sex">Sex :</h5>
              <div class="sex">
                <input type="radio" name="sex" value="Barbat">Barbat
                <br>
                <input type="radio" name="sex" value="Femeie">Femeie
              </div>

              <div class="location">
            <input type="number" name="longitude" id="log">
            <input type="number" name="latitudine" id="lat">
          </div>

   </div>

</div>

      <button class="glow-on-hover" type="submit">Salveaza Datele</button>
    </form>
</body>



<script>
function readLiveURL(input) {
        if (input.files && input.files[0]) {
            var filereader = new FileReader();
            filereader.onload = function (e) {
                $('#livepreview')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(400);
            };
            filereader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>

    var x = document.getElementById("demo");
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else { 
        x.innerHTML = "Locatia nu merge pe browserul tau.";
      }
    

    function showPosition(position) {
      x.innerHTML = "Latitudine: " + position.coords.latitude + 
      "<br>Longitudine " + position.coords.longitude;
      var latitude = position.coords.latitude;
      var Longitudine = position.coords.longitude;
      $('#log').attr('value',latitude);
      $('#lat') .attr('value',longitude);


    }
    </script>


</html>