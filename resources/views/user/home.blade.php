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

        <link rel="stylesheet" href="{{ URL::to('assets/font/font-awesome-4.7.0/font-awesome.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css')}} ">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="{{ URL::to('assets/font/font-awesome-4.7.0/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/home.css') }}">

        <title>مسابقه</title>
        <style>

        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row navbar-information">
                <div class="col-md-4">
                    <div class="group-information">
                        <span class="group-property">گروه</span>
                        <span class="value-property">{{ $team->name}}</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="group-information">
                        <span class="group-property">امتیاز</span>
                        <span class="value-property">{{ $team->score }}</span>
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
                <div class="col-md-offset-2 col-md-1 logo">
                    <img src="assets/img/logo1.png" alt="logo">
                </div>
            </div>
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
                                      <span>در حال بررسی/span>
                                      <i class="glyphicon glyphicon-retweet"></i>
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
                            <a href="{{ route('get_buy_problem', ['problem_id' => $problem->id]) }}" class="btn btn-default {{ BuyProblem::where('team_id', '=', $team->id)->where('problem_id', '=', $problem->id)->exists() ? 'disabled' : ''}}">خرید</a>
                        </div>
                    </div>
                </div>
              @endif
            @endforeach
          </div>
        </div>

        <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ URL::to('assets/Material-Kit/assets/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('assets/Material-Kit/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('assets/Material-Kit/assets/js/material.min.js') }}"></script>
    </body>
</html>
