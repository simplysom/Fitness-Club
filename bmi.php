<html>
<head>
    <title>BMI Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!--<link rel="stylesheet" type="text/css" href="stylesheet.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/17c7962084.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap');
     .navbar {
  min-height: 80px;
}

.navbar-brand {
  padding: 0 15px;
  height: 80px;
  line-height: 80px;
}

.navbar-toggle {
  /* (80px - button height 34px) / 2 = 23px */
  margin-top: 23px;
  padding: 9px 10px !important;
}

@media (min-width: 768px) {
  .navbar-nav > li > a {
    /* (80px - line-height of 27px) / 2 = 26.5px */
    padding-top: 26.5px;
    padding-bottom: 26.5px;
    line-height: 27px;
  }
  .navbar-default {
  background-color:black;
  background-image: none;
  background-repeat: no-repeat;
 }
 .navbar-default .navbar-nav>li>a {
    color:white;
}
body {
    font-family: 'Oswald', sans-serif;
    font-size: 16px;
}
#container {
    margin-left: 10px;
}

button {
    outline: none;

}

#introText, #p1, #results, #p2 {
    color: #005cbf;
}

#h2 {
    margin-bottom: 10px;
    color: #005cbf;
    margin-top: 100px;
    font-size: 50px;
}

.btn {
    margin-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

input {
    width: 100%;
    padding: 5px 14px;
    border: 2px solid #201f1d;
    margin-bottom: 10px;
    background-color: rgba(0,0,0,.4);
    outline: none;
    font-size: 14px;
}

form {

    padding: 20px;

}

form p {
    margin-bottom: 5px;
}

form p:nth-child(1) {
    margin-top: 0;
}

.panel {
    margin-top: 20px;
    float: none;
}

@media (min-width: 768px) {
    .panel {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
    }
}

@media (min-width: 1024px) {
    .panel {
        width: 30%;
        margin-left: auto;
        margin-right: auto;
    }
}


</style>
</head>
<body id="body" background="signin.jpg">
     <nav class="navbar navbar-default">
        <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                <a class="navbar-brand" href="landingpage.php" style="color:white;font-size: 30px; font-weight: 700;font-family: 'Oswald', sans-serif;}">Fitness<span style="color:red"> Club</span>
                 </a>
             </div>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="C:/Users/soumyaprakash/Desktop/webproj/fittness-club.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                     <li role="separator" class="divider"></li>
                                     <li><a href="#">Separated link</a></li>
                                </ul>
                        </li>
                    </ul>
            </div><!-- /.navbar-collapse -->
         </div>
     </nav>
<form >
    <div class="container" id="container">
        <div class="panel">
            <h2 class="text-center" id="h2"><strong>Check your BMI</strong></h2>

            <p id="introText" class="text-center">Enter your weight and height below to check your BMI results</p>

            <form>
                <div id="weightInput">
                    <p id="p1">Put your weight in here (KG)</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <!--<span class="input-group-text" id="inputGroup-sizing-default">Default</span>-->
                        </div>
                        <input type="text" class="form-control"
                               aria-describedby="inputGroup-sizing-default" id="weight" type="number" pattern="[0-9]*"
                               name="a">
                    </div>
                    <!--<input/>-->
                </div>
                <div id="heightInput">
                    <p id="p2">And your height in here (CM)</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <!--<span class="input-group-text" id="inputGroup-sizing-default">Default</span>-->
                        </div>
                        <input type="text" class="form-control" aria-label="Default"
                               aria-describedby="inputGroup-sizing-default" id="height" type="number" pattern="[0-9]*"
                               name="b">
                    </div>
                    <!--<input/>-->
                </div>
                <button type="button" class="btn btn-primary" onclick="calculate()">Calculate BMI</button>
            </form>
            <div id="results" class="text-center">Your BMI results will appear here</div><br>
           <!-- <button type="button" onclick="location.href='http://localhost:8080/'"class="btn btn-primary">Chat With a Dietitician</button> -->
        </div>
    </div>
    <script src="main.js"></script>
</form>
</body>
</html>