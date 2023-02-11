<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- animate css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500&family=Lato&display=swap" rel="stylesheet">


    <!-- css -->

    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="Cafetería Escobar.png">
    
    <title>Coffees Escobar</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- nav -->

    <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="#"><img src="cafeteria escobar.png" alt="" style="width:60px;"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active nav-button" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active nav-button" href="#" aria-current="page">Escobar at Belgrano<span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active nav-button" href="index.html" aria-current="page">Language<span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <!-- Flyer -->

    <div class="flyer">
        <div class="container">
            <div class="row g-2">
                <div class="col-6">
                    <img src="cafeteria escobar.png" alt="">
                </div>
                
                <div class="col-6">
                    <h1>Coffees Escobar <br> The better coffee for you!</h1>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <br>
    <br>

    <!-- Productos -->
    
    <div class="container">
        <div class="row">
            <div class="col-6 producto">

                <h1>Coffee</h1>
                <center>
                    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/cafe-1599479980.jpg?resize=980:*" alt="">
                </center>
                <p>Price: </p>
                <input type="button" value="Add to cart">
            </div>

            <div class="col-6 producto">

                <h1>Croisant</h1>
                <center>
                    <img src="https://cdn.pixabay.com/photo/2020/04/02/19/31/croissant-4996513_960_720.jpg" alt="">
                </center> 
                <p>Price: </p>
                <input type="button" value="Add to cart">

            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 producto">

                <h1>Facturas</h1>
                <center>
                    <img src="https://cdn.pixabay.com/photo/2020/04/02/19/32/croissant-4996523_960_720.jpg" alt="">
                </center>
                <p>Price: </p>
                <input type="button" value="Add to cart">

            </div>
            
        </div>
    </div>
</body>
</html>