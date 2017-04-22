<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/demo.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/css/google-fonts.css') }}" />
        <link rel="stylesheet" href="{{ URL::to('assets/css/admin.css') }}">

        <title>مسابقه</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row navbar-admin">
                <div class="logo">
                  <a href="#">
                    <img src="{{ URL::to('assets/img/logo1.png') }}" alt="" style="height: 69px;">
                  </a>
                </div>
                <div class="question">
                    <a href="{{ route('get_make_question') }}">
                        <span>طرح سوال</span>
                        <img src="{{ URL::to('assets/img/question.png') }}" alt="" height="40px;">
                    </a>
                </div>
                <div class="name-contest">
                  مسابقه انجمن علمی
                </div>
                <div class="logout">
                    <a href="{{ route('get_team_logout') }}"><span class="glyphicon glyphicon-off"></span></a>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row select-level">
                    <div class="col-md-2 col-md-offset-1">
                        <select class="select btn btn-raised btn-primary btn-round btn-lg" placeholder="انتخاب مرحله" id="game-stage">
                            <option value="انتخاب مرحله" selected="selected" class="selected">انتخاب مرحله</option>
                            <option value="1">مرحله 1</option>
                            <option value="2">مرحله 2</option>
                            <option value="3">مرحله 3</option>
                            <option value="4">مرحله 4</option>
                        </select>
                    </div>
                    <div class="col-md-1 start">
                        <button class="btn btn-primary btn-round" onclick="startGame()">
                            شروع
                        </button>
                    </div>
                    <div class="col-md-1 end">
                        <button class="btn btn-primary btn-round" onclick="stopGame()">
                            پایان
                        </button>
                    </div>
                    <div class="col-md-3 col-md-offset-4 rank">
                        <a class="btn btn-primary btn-round" href="{{ route('get_team_ranking') }}">
                            رتبه بندی تیم ها
                        </a>
                    </div>
                </div>
                <section>
                  <div class="card card-signup">
                    <div class="header header-info">
                      <h3>در خواست های بازبینی</h3>
                    </div>
                    <div class="content">
                      <div id="tables">
		                     <div class="table-responsive">
		                        <table class="table">
		                            <thead>
		                                <tr>
		                                    <th class="text-center">#</th>
		                                    <th>عنوان سوال</th>
		                                    <th>نام تیم</th>
		                                    <th>مرحله</th>
		                                    <th style="padding-right:30px;">وضعیت پاسخ</th>
		                                </tr>
		                            </thead>
		                            <tbody id="table-body">
                                  @if(!is_null($review_requests))
                                    @php $counter = 1; @endphp
                                    @foreach($review_requests as $req)
  		                                <tr>
  		                                    <td class="text-center">{{ $counter }}</td>
                                          <td>{{ $req->problem_title }}</td>
                                          <td>{{ $req->team_name }}</td>
                                          <td>{{ $req->stage }}</td>
  		                                    <td class="review">
                                            <button class="btn btn-success" onclick="answer({{$req->team_id}}, {{$req->problem_id}}, {{ 2 }})">
                                              درست
                                            </button>
                                          <button class="btn btn-danger" onclick="answer({{$req->team_id}}, {{$req->problem_id}}, {{ 3 }})">
                                              غلط
                                            </button>
                                          </td>
                                      </tr>
                                      @php $counter += 1 @endphp
                                    @endforeach
                                  @endif
		                            </tbody>
		                        </table>
		                      </div>
		                    </div>
                      </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
    <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/material.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/dropdown.js') }}"></script>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/material-kit.js') }}"></script>
    <script src="{{ URL::to('assets/js/admin_home.js') }}"></script>
    <script>
        $(function() {
            $(".select").dropdown({ "autoinit" : ".select" });
            $(".select").dropdown({ "dropdownClass": "my-dropdown", "optionClass": "my-option awesome" });
        });
    </script>
</html>
