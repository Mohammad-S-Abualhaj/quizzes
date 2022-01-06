<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Anfra</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="../assets/css/line-awesome.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/covid.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/favicon.png">
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/icon-114x114.png">


  </head>
  <body>

    <div class="ugf-covid covid-bg">
      <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-md anfra-nav">
              <a class="navbar-brand" href="">
                <img src="../assets/images/logo.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="las la-bars"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="covid-1.html" class="nav-link">Version 1</a>
                      </li>

                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-button" href="#">Purchase</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
            <div class="covid-wrap">
              <h2>Covid-19 risk test</h2>




              <form action="{{ route('quizzes.store') }}" method="post">
                  @csrf
                <input type="hidden" name="quiz_id" value="2">

                @foreach ($question as $item => $value)
                <div class="covid-test-wrap test-step {{ $item == 0 ? 'active' : '' }}">
                  <div class="test-progress">
                    <a href="#" class="prev-btn"><img src="../assets/images/arrow-left-grey.png" alt="">Previous</a>
                    <div class="test-progress-step">
                      <span class="step-number">1/7</span>
                      <svg>
                        <circle class="step-2" cx="30" cy="30" r="28" stroke-width="4" fill="none" role="slider" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></circle>
                      </svg>
                    </div>
                  </div>
                  <h3>{{$value->question}}</h3>
                  <div class="step-block">
                      <input type="hidden" name="question_id" value="{{$value->id}}">
                    <div class="form-group">
                      <input type="checkbox" name="answer" class="form-control" id="{{"one" . $value->id}}">
                      <label for="{{"one" . $value->id}}"> {{$value->answer1}}</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" name="answer" class="form-control" id="{{"tow" . $value->id}}">
                      <label for="{{"tow" . $value->id}}"> {{$value->answer2}}</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" name="answer" class="form-control" id="{{"thr" . $value->id}}">
                      <label for="{{"thr" . $value->id}}"> {{$value->answer3}}</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" name="answer" class="form-control" id="{{"for" . $value->id}}">
                      <label for="{{"for" . $value->id}}"> {{$value->answer4}}</label>
                    </div>
                    <a href="#" class="button">Next</a>
                    </div>
                   </div>
                   @endforeach

                   <div class="covid-test-wrap test-step asign-info">
                    <div class="test-progress">
                      <img src="assets/images/covid/result.png" class="img-fluid" alt="">
                    </div>
                    <h3>High risk of infection</h3>
                    <p>Fillup the form below, Your nearest sample collector team contact immediately</p>
                    <div class="step-block">
                      <button type="submit">Submit info</button>
                    </div>
                  </div>


                  <div class="covid-test-wrap test-step test-report">
                    <div class="test-progress">
                      <img src="assets/images/big-green-check.png" class="img-fluid" alt="">
                    </div>
                    <h3>Thank you for submission</h3>
                    <p>Don’t be afried, Our telemedical team also give you proper guideline </p>
                    <h4>Stay Home <span class="line">&#73;</span> Stay Safe</h4>
                    <a href="#" class="button-reload">Back to home</a>
                  </div>
              </form>


            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="footer">
              <div class="copyright-text">
                <p>Copyright © 2021 Anfra, All rights reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src="../assets/js/custom.js"></script>
  </body>
</html>
