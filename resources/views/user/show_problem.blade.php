<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-rtl.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/google-fonts.css') }}" />
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/home.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/question.css') }}">
        <title>مسابقه</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row navbar-information">
                <div class="col-md-1 logo col-md-offset-1">
                  <a href="{{ route('get_home') }}">
                    <img src="{{ URL::to('assets/img/logo1.png') }}" alt="logo">
                  </a>
                </div>
                <div class="col-md-4">
                    <div class="group-information">
                        <span class="group-property">گروه</span>
                        <span class="value-property">{{ $team->name}}</span>
                    </div>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-1">
                    <a href="{{ route('get_team_logout') }}">
                        <span class="glyphicon glyphicon-off"></span>
                    </a>
                </div>
            </div>
            <div class="bs-component">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="group-information">
                                    <span class="group-property">امتیاز</span>
                                    <span class="value-property" id="team-score">{{ $team->score }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="group-information">
                                    <span class="group-property">سطح </span>
                                    <span class="value-property">{{ $team->level }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="group-information">
                                    <span class="group-property">تعداد اعضا</span>
                                    <span class="value-property">{{ $team_members }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="container question">
                <div class="row">
                        <div class="card card-signup">
                                <div class="header header-primary text-center">
                                  <div class="row">
                                    <div class="col-md-4">
                                     <h3>{{ $problem->title }}</h3>
                                    </div>
                                    <div class="col-md-4">
                                      <h3>
                                        <span>امتیاز :</span>
                                        <span>{{ $problem->score }}</span>
                                      </h3>
                                    </div>
                                    <div class="col-md-4">
                                      <h3>
                                        <span>سطح :</span>
                                        <span>{{ $problem->level }}</span>
                                      </h3>
                                    </div>
                                  </div>
                                </div>
                                <div class="content">
                                    @if(is_null($problem->image_path))
                                      <p>
                                          {{ $problem->description }}
                                      </p>
                                    @endif
                                     @if(!is_null($problem->image_path))
                                     <img src="{{ URL::to($problem->image_path . '') }}" alt="">
                                    @endif
                                </div>
                                <hr>
                                <div class="decision">
                                    <a href="{{ route('get_review_request_problem', ['problem_id' => $problem->id]) }}" class="btn btn-success">در خواست بازبینی</a>
                                    <a href="{{ route('get_cancel_problem', ['problem_id' => $problem->id]) }}" class="btn btn-danger">انصراف</a>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ URL::to('assets/Material-Kit/assets/js/jquery.min.js') }}" type="text/javascript"></script>
  	<script src="{{ URL::to('assets/Material-Kit/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
  	<script src="{{ URL::to('assets/Material-Kit/assets/js/material.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        function getLastGameStatus(){
          $.ajax({
            url: 'http://localhost:8000/game/status',
            type: 'GET',
            dataType: 'JSON',
            data: { 'is_started' : {{ $is_game_started }} }
          }).done(function (data){
            if(data.redirect === 1){
              document.location.href = 'http://localhost:8000/home';
            }
            $('#team-score').html(data.team_score);
          });
        }

      setInterval(getLastGameStatus, 10000);
      });
    </script>
</html>
