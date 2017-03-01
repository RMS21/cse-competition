<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-rtl.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css') }}">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/question.css') }}">
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
                        <span class="value-property">{{ $team->name }}</span>
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
            <div class="container question">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card card-signup">
                                <div class="header header-primary text-center">
                                    <h1>{{ $problem->title }}</h1>
                                    <h2>
                                        <span>امتیاز :</span>
                                        <span>{{ $problem->score }}</span>
                                    </h2>
                                    <h3>
                                        <span>سطح :</span>
                                        <span>{{ $problem->level }}</span>
                                    </h3>
                                </div>
                                <div class="content">
                                    <p>
                                        {{ $problem->description }}
                                    </p>
                                    <!--<img src="assets/img/logo.png" alt="">-->
                                </div>
                                <hr>
                                <div class="decision">
                                    <a href="#" class="btn btn-primary">در خواست بازبینی</a>
                                    <a href="#" class="btn btn-primary">انصراف</a>
                                </div>
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

</html>
