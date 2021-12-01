<?php 

session_start();
if(!isset($_SESSION['email']))
{
	header('location:index.html');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/index.css ">
    <title>IFC-Visualiser</title>
</head>
<body>

 <nav class="navbar fixed-top navbar_header navbar-expand-lg <!-- navbar-dark bg-dark " role="navigation">

 <div class="logo">
 <a class="navbar-brand" href="index.html">Maverick</a>
 </div>
 <div class="left">
 <div class="user-name">
     <h6><?php  echo $_SESSION['email']; ?></h6>
 </div>
 <div class="logout">
 <a href="logout.php"><span id="LOGOUT">LOGOUT</span></a>
 </div>
 </div>
</nav>

    <div class="container-main">

        
    <div class="container-main">

        
<div id="input" class="container input">
            <img class="data-img" src="asset/data-img.png" alt="" srcset="">
            <div>
                <label for="formFileLg" class="form-label">Select the IFC file</label>
                <input type="file" class="form-control form-control-lg " name="ifc-data" id="ifc-data" >
                <h6 class="file_download">Download Sample File<a href="asset/01.ifc" Download="O1.ifc"> Here...</a></h6>
            </div>
            <div class="button">
                <a  class="btn-primary visual-btn" id="visual-btn" href="#visual">Visualise</a>
                
            </div>
        
    
</div>
<div id="visual" class=" container-fluid">
    <div class="main-canvas-container visual-canvas">
        <section class="main-canvas">

        <div class="desc">

                <div> <span class="red"></span> Temp&#62;25</div>

                <p>Temp&#60;25  <span class="green"></span></p>

            </div>

            <div class="data-bar">

                <p>ID: <span id="wallID"></span></p>

                <p>Temp: <span id="temp"></span></p>

                <p>Humidity: <span id="humi"></span></p>

            </div>

            <canvas id="three-canvas"></canvas>
        </section>
    <section class="properties">
        <h3>Properties</h3>
        <table class="table" >
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Value</th>
              </tr>
            </thead>
            <tbody id="output">
              
            </tbody>
          </table>
    </section>
    </div>
    <div class="button btn-down">
        <a  class="btn-primary visual-btn " href="#input">Select another File</a>
                <a  class="btn-primary visual-btn " href="Contact_form.html">Feedback From</a>

    </div> 


     
</div>
</div>
    
    <script src="js/bundle.js"></script>
</body>
</html>

 