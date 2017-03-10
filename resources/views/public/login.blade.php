<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CRoboto+Slab:400,700%7CMaterial+Icons" />
        <link rel="stylesheet" href="{{ URL::to('assets/css/login.css') }}">
        <title>مسابقه</title>

    <style>
    </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="card card-signup">
                        <form method="post" action="{{ route('post_team_login') }}">
                            <div class="header header-primary text-center">
                                <h1>ورود به سایت</h1>
                            </div>
                            <div class="title-login">
                                <img src="{{ URL::to('assets/img/logo.png') }}" alt="login">
                            </div>
                            <div class="content">
                                <div class="input-group">
                                    <span class="input-group-addon"><img src="{{ URL::to('assets/img/glyphicons-group.png') }}" alt=""></span>
                                    <div class="form-group label-floating has-error">
                                        @if(Session::has('fail'))
                                          <label class="control-label" style="left: 27%; ">{{ Session::get('fail') }}</label>
                                        @endif
                                        <input type="text" name="name" class="form-control" placeholder="نام گروه" value="{{ old('name') }}">
                                        @if($errors->has('name'))
                                          <span class="material-icons form-control-feedback">clear</span>
                                        @endif
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <div class="form-group label-floating has-error">
                                        <input type="password" class="form-control" name="password" placeholder="رمز عبور">
                                        @if($errors->has('password'))
                                          <span class="material-icons form-control-feedback">clear</span>
                                        @endif
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="login" class="sr-only">Login</label>
                                    <input type="submit" name="submit" class="form-control" id="login" value="ورود به سایت">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                            <div id="register">
                                <a href="{{ route('get_team_register') }}">ثبت نام</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
	    <script src="{{ URL::to('assets/Material-Kit/assets/js/material.min.js') }}"></script>

    </body>
</html>
