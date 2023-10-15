<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar bg-light fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><span class="text-primary">Discos</span>2ªmano</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbar-start" aria-controls="navbar-start" aria-expanded="false"
                aria-label="Toggle navigation">

                 <span class="navbar-toggler-icon"></span>
           
            </button>


                 <div class="collapse navbar-collapse" id="navbar-start">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Servicios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contactos</a>
                            </li>

                        </ul>


                    </div>

         </div>
        
        </div>
    </nav>

    <div id="carouselaE1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicator">
            <button type="button" data-bs-target="#carouselE1"
             data-bs-slide-to="0" class="active"
             aria-label="Slide 1">
             
            </button>
            <button type="button" data-bs-target="#carouselE1"
             data-bs-slide-to="1" 
             aria-label="Slide 2">
             
            </button>
            <button type="button" data-bs-target="#carouselE1"
            data-bs-slide-to="2" 
            aria-label="Slide 3">
            
           </button>


        </div>

       <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./frequencies.jpg" class="d-block w-30"alt="">
                    <div class="carousel-caption">
                        <h5>La mejor música</h5>
                        <p>
                            Lorem ipsum dolor sit amet,
                             consectetur adipiscing elit
                        </p>
                        <p><a href="#" class="btn btn-primary mt-3 text-black">Leer más</a></p>
                    </div>
              </div>
          
                    <div class="carousel-item ">
                        <img src="./lunatec.jpg" class="d-block w-100"alt="">
                        <div class="carousel-caption">
                            <h5>La mejor música</h5>
                            <p>
                                Lorem ipsum dolor sit amet,
                                 consectetur adipiscing elit
                            </p>
                            <p><a href="#" class="btn btn-primary mt-3 text-black">Leer más</a></p>
                        </div>
    
    
                    </div>

                    <div class="carousel-item ">
                        <img src="./ancientecode.jpg" class="d-block w-100"alt="">
                        <div class="carousel-caption">
                            <h5>La mejor música</h5>
                            <p>
                                Lorem ipsum dolor sit amet,
                                 consectetur adipiscing elit
                            </p>
                            <p><a href="#" class="btn btn-primary mt-3 text-black" >Leer más</a></p>
                        </div>
    
    
                    </div>

          </div>
          
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselE1"
                        data-bs-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span> 
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselE1"
                    data-bs-slide="next" >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span> 
            </button>

        </div> 
                
        
        <section class="services">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div class="card text-white text-center bg-car1 pb-2">
                            <div class="disco-body">
                                <h3 class="disco-title">Artistas Famosos</h3>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit

                                </p>
                                    <button class="btn bg-primary text-black" >Leer más</button>
                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div class="card text-white text-center bg-car2 pb-2">
                            <div class="disco-body">
                                <h3 class="disco-title">Género musicales</h3>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit

                                </p>
                                    <button class="btn bg-primary text-black" >Leer más</button>
                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div class="card text-white text-center bg-car3 pb-2">
                            <div class="disco-body">
                                <h3 class="disco-title">Dicos más antiguos</h3>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit

                                </p>
                                    <button class="btn bg-primary text-black" >Leer más</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </section>
   

        <section class="product">
            <div class="">


            </div>

        </section>

     
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>