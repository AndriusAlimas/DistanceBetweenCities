<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Link to our style sheet css-->
    <link rel="stylesheet" type="text/css" href="css/styling.css">

    <!-- Link google font -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <title>Distance between Cities App</title>
</head>
<body>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAWKq-JR7J-n8caXp69MZp9sfMNB-Ts7cI"></script>
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Distance Between Cities App</h1>
            <p>Our app will help you calculate travelling distances</p>

            <!-- Horizontal Forms -->
            <form class="form-horizontal">
                <!-- First row From Origin Input-->
               <div class="form-group" style="margin-top: 80px ">
                   <label for="from" class="col-xs-2 control-label">From:</label>
                   <div class="col-xs-10">
                       <input type="text" id="from" placeholder="Origin" class="form-control">
                   </div>
               </div>
                <!-- Second row To Destination Input-->
                <div class="form-group">
                    <label for="to" class="col-xs-2 control-label">To:</label>
                    <div class="col-xs-10">
                        <input type="text" id="to" placeholder="Destination" class="form-control">
                    </div>
                </div>
            </form>

            <!-- Calculate Route Button -->
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg" onclick="calcRoute();">Calculate</button>
            </div>
        </div>

        <!-- map container -->
        <div class="container-fluid">
            <div id="googleMap"></div>
         <!-- map result output-->
             <div id="output"></div>
        </div>
    </div>

<!-- Optional JavaScript -->
<script src="js/javascript.js"></script>

    <!-- jQuery first, then Bootstrap JS -->
            <script src="js/jquery-3.5.1.js"></script>
            <script src="js/bootstrap.min.js></script>
</body>
</html>