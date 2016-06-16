

<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <title>Weather Scraper</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  
    <style>
        
        html, body {
            height: 100%;
        }
        
        .container {
            background-image: url("img1.jpg");
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            padding-top: 100px;
        }
        
        .center {
            text-align: center;
        }
        
        .white {
            color: white;
        }
        
        p {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        button {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        .alert {
            margin-top: 20px;
            display: none;
        }
        
    </style>

    </head>
    <body>
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-6 col-md-offset-3 center">
                    
                    <h1 class="center white">Weather Predictor</h1>
                    
                    <p class="lead center white">Enter your city below to get a forecast for the weather.</p>
                    
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Minsk...">
                        </div>
                        <input type="submit" id="findMyWeather" class="btn btn-success btn-lg" value="Find My Weather"/>
                    </form>
                    
                    <div id="success" class="alert alert-success">Success!</div>
                    
                    <div id="fail" class="alert alert-danger"> Couldnot find the city name. Please Try Again! </div>
                    
                     <div id="noCity" class="alert alert-danger">Please enter a city!</div>
                    
                </div>
                
            
                
            </div>
            
        </div>
        
        
        
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
       
        <script>
            
            $("#findMyWeather").click(function(event) {
                
                event.preventDefault();
                
                    $(".alert").hide();
                
                if ($("#city").val()!="") {
               
      $.get("wethr.php?city="+$("#city").val(), function( data ) {
                  
                  /*$("#success").html(data).fadeIn();*/
                  
                  if (data=="") {
                      
                     
                      $("#fail").fadeIn();
                      
                  } else {
                      
                      $("#success").html(data).fadeIn();
                      
                  }
                  
               });
               
                } else {
                    
                    $("#noCity").fadeIn();
                    
                }
                
                
               
            });
            
        </script>
        
    </body>
</html>