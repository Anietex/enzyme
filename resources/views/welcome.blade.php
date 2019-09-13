<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Learn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Join as a startup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Join as an investor</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>

<main id="main">
    <section id="home-section">
        <article class="container">
            <div class="row">
                <div class="col-md-6 welcome">
                    <h1 class="welcome-header text-white">Enzyme</h1>
                    <p class="welcome-content">Where Entrepreneurs and Investors Meet</p>
                    <h4 class="welcome-content"><b>Join</b> a community of startup</h4>
                    <h4 class="text-white"><b>Raise</b> capital with our accredited investors</h4>
                    <h4 class="text-white"><b>Invest</b> in startups alongside renowned lead investors</h4>
                </div>

                <div class="col-md-3"></div>

                <div class="col-md-3">
                    <div class="shadow p-5 bg-white rounded">
                        <p><strong>You can Sign Up Here</strong></p>
                        <a href="{{ url('/auth/redirect/facebook') }}" type="button" class="btn btn-primary btn-md btn-block mt-4">Join With Facebook</a>
                        <a href="{{ url('/auth/redirect/google') }}" type="button" class="btn btn-primary btn-md btn-block">Join with Google</a>
                    </div>
                </div>
            </div>
        </article>

    </section>

    <section>
        <div class=" container mt-5">
            <h3>Our main areas of investment are:</h3>
        </div>

        <div class="investor-div">
            <div class="container row mx-auto">
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/comapany.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BONHERE Group Of Company</h5>
                            <p class="card-text">$30000</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="images/comapany.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BONHERE Group Of Company</h5>
                            <p class="card-text">$30000</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <img src="images/comapany.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BONHERE Group Of Company</h5>
                            <p class="card-text">$30000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="investor-div">
            <div class="container row mx-auto">
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/comapany.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BONHERE Group Of Company</h5>
                            <p class="card-text">$30000</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="images/comapany.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BONHERE Group Of Company</h5>
                            <p class="card-text">$30000</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <img src="images/comapany.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BONHERE Group Of Company</h5>
                            <p class="card-text">$30000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>


</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
