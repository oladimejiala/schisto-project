<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom css/smodel.css">
    <title>Schisto Predictor</title>
</head>

<body>
    <div  id="body-wrapper" class="accordion-body">
    <header>
        <div class="card-header">
            <!-- header image/ like logo fo the app -->
            <img id="small-logo-image" src="img/Schisto image.jpg" alt="ShistApp ">
            
            <!-- search bar  -->
            <input id="search-bar" class="align-items-lg-end" type="search" placeholder="search"> Search
            <!-- This is smaller heading image of schisto worm-->
        </div>
    </header>

    <nav>
        <!-- ****************NAVIGATION SECTION*************** -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#" class="nav-link active">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Other NTDs</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Lymphatic filariasis</a>
                    <a class="dropdown-item" href="#">Onchocerciasis</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Loa Loa</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About Schisto</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled">Schisto and Ladder</a>
            </li>
        </ul>
    </nav>
    <br>
    <br>
    <main>
        <div class="caption-top">
            <img id="large-image-logo" class="img-thumbnail align-content-center"  src="img/Schisto image.jpg" alt="Schistosoma large picture"> <br>
            <!-- this is a bigger image welcoming the users-->
            
            <!-- style this heading with  -->
            <span id="schisto-heading" class="container">
                <h1 class="font-monospace align-content-center">Schisto Prediction App</h1>
            </span>
            <br>
            <br>
            <span class="align-content-lg-center">
                <p>Fill the form below for your next Schisto Prediction</p>
            </span>
            <br>
            <br>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <section>
          <div class="container">
              <div class="row"></div>
              <div class="col-sm-2">
            
                    <div class="form-group">
                        <label for="">Age group:</label>
                        <br>
                        <select class="form-control" name="sex" id="sex">
                            <option>select your age range</option>
                            <option>18-25</option>
                            <option>25-30</option>
                            <option>30-35</option>
                            <option>35-40</option>
                            <option>40-45</option>
                            <option>45-50</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="">Sex:</label>
                        <select class="form-control" name="sex" id="sex">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <br>
                   <label for="">History of Schisto?:</label>
                    Yes <input type="radio" name="" id="" aria-describedby="helpId" placeholder="">
                    No <input type="radio" name="" id="" aria-describedby="helpId" placeholder="">
                    <br>
                    <br>
                    <label for="">Proteinuria(mol/ml)?:</label>
                    <br>
                    <br>
                    <input type="text" class="form-control col-xsm-6" name="" id="" aria-describedby="helpId" placeholder="">
                    <br>
                    <p>or</p>
                    <!-- Loading data into the model for prediction -->
                    <div class="form-group">
                    <label for="">Load Data</label>
                    <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
              </div>
          </div>
    </section>  

           
           
            

<script>
    $(".alert").alert();
</script>
<footer>
    <div class="fa fa">

    </div>
    <div class="card-footer">
    <a href="https://amtech-bj.netlify.app"><p>&copy;AMTECH 2021</p></a>
    </div>
</footer>
</div>
</body>
</html>