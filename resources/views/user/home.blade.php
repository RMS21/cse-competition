@php
  use App\BuyProblem;
  use App\ReviewRequest;
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-rtl.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css')}} ">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.css') }}">

        @if($is_game_started)
          <link rel="stylesheet" href="{{ URL::to('assets/css/home.css') }}">
        @endif
        @if(!$is_game_started)
          <link rel="stylesheet" href="{{ URL::to('assets/css/check.css') }}">
        @endif


        <title>مسابقه</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row navbar-information">
                <div class="col-md-1 logo">
                    <img src="{{ URL::to('assets/img/logo1.png') }}" alt="logo">
                </div>
                <div class="col-md-3">
                    <div class="group-information">
                        <span class="group-property">گروه</span>
                        <span class="value-property">{{ $team->name}}</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="group-information">
                        <span class="group-property">امتیاز</span>
                        <span class="value-property" id="team-score">{{ $team->score }}</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="group-information">
                        <span class="group-property">سطح </span>
                        <span class="value-property">{{ $team->level }}</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="group-information">
                        <span class="group-property">تعداد اعضا</span>
                        <span class="value-property">{{ $team_members }}</span>
                    </div>
                </div>
                <div class="col-md-1 col-md-offset-2">
                    <a href="{{ route('get_team_logout') }}">
                        <span class="glyphicon glyphicon-off"></span>
                    </a>
                </div>
            </div>
            @if($is_game_started)
              <div class="container">
                  <div class="row bs-wizard" style="border-bottom:0;">
                      <div class="col-xs-3 bs-wizard-step {{ $game_stage == 1 ? 'active' : ($game_stage > 1 ? 'complete' : 'disabled') }}">
                          <div class="text-center bs-wizard-stepnum">مرحله 1</div>
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="bs-wizard-dot"></a>
                          <div class="bs-wizard-info text-center">برنامه نویسی</div>
                      </div>

                      <div class="col-xs-3 bs-wizard-step {{ $game_stage == 2 ? 'active' : ($game_stage > 2 ? 'complete' : 'disabled') }}"><!-- complete -->
                          <div class="text-center bs-wizard-stepnum">مرحله ۲</div>
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="bs-wizard-dot"></a>
                          <div class="bs-wizard-info text-center">تحلیل مدار</div>
                      </div>

                      <div class="col-xs-3 bs-wizard-step {{ $game_stage == 3 ? 'active' : ($game_stage > 3 ? 'complete' : 'disabled') }}" ><!-- complete -->
                          <div class="text-center bs-wizard-stepnum">مرحله 3</div>
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="bs-wizard-dot"></a>
                          <div class="bs-wizard-info text-center">مدار منطقی</div>
                      </div>

                      <div class="col-xs-3 bs-wizard-step {{ $game_stage == 4 ? 'active' : ($game_stage > 4 ? 'complete' : 'disabled') }}">
                          <div class="text-center bs-wizard-stepnum">مرحله 4</div>
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="bs-wizard-dot"></a>
                          <div class="bs-wizard-info text-center">خلاقیت</div>
                      </div>
                  </div>
    	        </div>
            @endif
          @if(!$is_game_started)
            <div class="container">
              <div class="row">
                <div class="row content">
                    <div class="col-md-3 col-md-offset-5">
                        <span>لطفا منتظر بمانید...</span>
                        <span class="spinner"><i class="fa fa-refresh fa-spin"></i></span>
                    </div>
                </div>
              </div>
            </div>
         @endif
         @if($is_game_started)
           <div class="row">
              @foreach ($problems as $problem)
                @if(abs(ord($problem->level) - ord($team->level) <= 2))
                  <div class="col-md-3">
                      <div class="card">
                          <div class="form buy-question">
                              <div class="header header-primary text-center">
                                  <span>{{ $problem->title }}</span>
                              </div>
                              <div class="content">
                                  <div class="level">
                                      <span>سطح :</span>
                                      <span>{{ $problem->level }}</span>
                                  </div>
                                  <div class="point">
                                      <span>امتیاز : </span>
                                      <span>{{ $problem->score }}</span>
                                  </div>
                                  <div>
                                      <span>وضعیت سوال : </span>
                                      @php
                                        $problem_state = ReviewRequest::where('team_id', '=', $team->id)->where('problem_id', '=', $problem->id)->first();
                                        $problem_state = is_null($problem_state) ? 0 : $problem_state->state;
                                      @endphp
                                      @if($problem_state == 0)
                                        <span>‍پاسخ داده نشده</span>
                                        <i class="glyphicon glyphicon-pencil"></i>
                                      @endif
                                      @if($problem_state == 1)
                                        <span id="stateText-{{ $problem->id }}">در حال بررسی</span>
                                        <i class="glyphicon glyphicon-retweet" id="stateGlyphicon-{{ $problem->id }}"></i>
                                      @endif
                                      @if($problem_state == 2)
                                        <span>درست</span>
                                        <i class="glyphicon glyphicon-ok"></i>
                                      @endif
                                      @if($problem_state == 3)
                                        <span>غلط</span>
                                        <i class="glyphicon glyphicon-remove"></i>
                                      @endif
                                  </div>
                              </div>
                              @php
                               $problem_buyed = BuyProblem::where('team_id', '=', $team->id)->where('problem_id', '=', $problem->id)->exists();
                              @endphp
                              <a href="{{ $problem_buyed ? '#' : route('get_buy_problem', ['problem_id' => $problem->id]) }}" class="btn btn-default {{ $problem_buyed ? 'disabled' : '' }} ">خرید</a>
                          </div>
                      </div>
                  </div>
                @endif
              @endforeach
            </div>
          @endif
        </div>

        <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ URL::to('assets/Material-Kit/assets/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('assets/Material-Kit/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('assets/Material-Kit/assets/js/material.min.js') }}"></script>

        @if($is_game_started)
          <script src="{{ URL::to('assets/js/team_home.js') }}"></script>
        @endif
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
                // alert(typeof data.redirect == 1);
              });
            }

            setInterval(getLastGameStatus, 10000);
            });
        </script>
    </body>
</html>
