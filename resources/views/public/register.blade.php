<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
<<<<<<< HEAD
        <link rel="stylesheet" href="Material-Kit/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap-rtl/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="Material-Kit/assets/css/material-kit.css">
=======
        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css') }}">
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

        <link rel="stylesheet" href="{{ URL::to('assets/css/register.css') }}">
        <title>مسابقه</title>
    </head>
    <body>
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card card-signup">
                        <form method="post" action="{{ route('post_team_register') }}">
                            <div class="header header-primary text-center">
                                <h1>ثبت نام</h1>
                            </div>
                            <div class="content">
<<<<<<< HEAD
=======
                                @if(Session::has('fail'))
                                    <p>{{ Session::get('fail') }}</p>
                                @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                <h2>اطلاعات گروه</h2>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><img src="assets/img/glyphicons-group.png" alt=""></span>
                                            <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                <label class="control-label">نام گروه وارد نشده</label>
                                                <input type="text" class="form-control" placeholder="نام گروه">
=======
                                                <input  type="text" class="form-control" placeholder="نام گروه" name="team_name" value=" {{ old('team_name')}}">
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                <span class="material-input"></span>
                                                @if($errors->has('team_name'))
                                                    <span class="material-icons form-control-feedback">clear</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><img src="assets/img/password.png" alt=""></span>
                                            <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                <label class="control-label">رمز عبور وارد نشده</label>
                                                <input type="password" class="form-control" placeholder="رمز عبور">
=======
                                                <input type="password" class="form-control" placeholder="رمز عبور" name="password">
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                <span class="material-input"></span>
                                                @if($errors->has('password'))
                                                    <span class="material-icons form-control-feedback">clear</span>
                                                @endif
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><img src="assets/img/confirmpassword.png" alt=""></span>
                                            <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                <label class="control-label">تکرار رمز عبور وارد نشده</label>
                                                <input type="password" class="form-control" placeholder="تکرار رمز عبور">
=======
                                                <input type="password" class="form-control" placeholder="تکرار رمز عبور" name="password_confirmation">
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                <span class="material-input"></span>
                                                @if($errors->has('password_confirmation'))
                                                    <span class="material-icons form-control-feedback">clear</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <h2> اطلاعات فردی اعضای گروه</h2>   
=======
                                <h2> اطلاعات فردی اعضای گروه</h2>
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                <div class="personal-information">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/name.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">نام وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="نام">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="نام" name="fname_1" value="{{ old('fname_1') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('fname_1'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/name.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">نام خانوادگی وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="نام خانوادگی">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="نام خانوادگی" name="lname_1" value="{{ old('lname_1') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('lname_1'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
<<<<<<< HEAD
                                                <span class="input-group-addon"><img src="assets/img/studentNumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <label class="control-label">شماره دانشجویی وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="شماره دانشجویی">
                                                    <span class="material-input"></span>
=======
                                                <span class="input-group-addon"><img src="{{ URL::to('assets/img/univercity.jpg') }}" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <input type="text" class="form-control" placeholder="نام دانشگاه" name="uname_1" value="{{ old('uname_1') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('uname_1'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/studentNumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <input type="text" class="form-control" placeholder="شماره دانشجویی" name="snumber_1" value="{{ old('snumber_1') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('snumber_1'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/year.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">سال ورود وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="سال ورود">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="سال ورود" name="eyear_1" value="{{ old('eyear_1') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('eyear_1'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/phonenumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">شماره تلفن وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="شماره تلفن">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="شماره تلفن" name="pnumber_1" value="{{ old('pnumber_1') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('pnumber_1'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/email.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">ایمیل وارد نشده</label>
                                                    <input type="email" class="form-control" placeholder="ایمیل">
                                                    <span class="material-input"></span>
=======
                                                    <input type="email" class="form-control" placeholder="ایمیل" name="email_1" value="{{ old('email_1') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('email_1'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-information">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/name.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">نام وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="نام">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="نام" name="fname_2" value="{{ old('fname_2') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('fname_2'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/name.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">نام خانوادگی وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="نام خانوادگی">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="نام خانوادگی" name="lname_2" value="{{ old('lname_2') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('lname_2'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
<<<<<<< HEAD
                                                <span class="input-group-addon"><img src="assets/img/studentNumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <label class="control-label">شماره دانشجویی وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="شماره دانشجویی">
                                                    <span class="material-input"></span>
=======
                                                <span class="input-group-addon"><img src="{{ URL::to('assets/img/univercity.jpg') }}" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <input type="text" class="form-control" placeholder="نام دانشگاه" name="uname_2" value="{{ old('uname_2') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('uname_2'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/studentNumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <input type="text" class="form-control" placeholder="شماره دانشجویی" name="snumber_2" value="{{ old('snumber_2') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('snumber_2'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/year.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">سال ورود وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="سال ورود">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="سال ورود" name="eyear_2" value="{{ old('eyear_2') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('eyear_2'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/phonenumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">شماره تلفن وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="شماره تلفن">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="شماره تلفن" name="pnumber_2" value="{{ old('pnumber_2') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('pnumber_2'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/email.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">ایمیل وارد نشده</label>
                                                    <input type="email" class="form-control" placeholder="ایمیل">
                                                    <span class="material-input"></span>
=======
                                                    <input type="email" class="form-control" placeholder="ایمیل" name="email_2" value="{{ old('email_2') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('email_2'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-information">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/name.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">نام وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="نام">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="نام" name="fname_3" value="{{ old('fname_3') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('fname_3'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/name.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">نام خانوادگی وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="نام خانوادگی">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="نام خانوادگی" name="lname_3" value="{{ old('lname_3') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('lname_3'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
<<<<<<< HEAD
                                                <span class="input-group-addon"><img src="assets/img/studentNumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <label class="control-label">شماره دانشجویی وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="شماره دانشجویی">
                                                    <span class="material-input"></span>
=======
                                                <span class="input-group-addon"><img src="{{ URL::to('assets/img/univercity.jpg') }}" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <input type="text" class="form-control" placeholder="نام دانشگاه" name="uname_3" value="{{ old('uname_3') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('uname_3'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/studentNumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
                                                    <input type="text" class="form-control" placeholder="شماره دانشجویی" name="snumber_3" value="{{ old('snumber_3') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('snumber_3'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/year.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">سال ورود وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="سال ورود">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="سال ورود" name="eyear_3" value="{{ old('eyear_3') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('eyear_3'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/phonenumber.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">شماره تلفن وارد نشده</label>
                                                    <input type="text" class="form-control" placeholder="شماره تلفن">
                                                    <span class="material-input"></span>
=======
                                                    <input type="text" class="form-control" placeholder="شماره تلفن" name="pnumber_3" value="{{ old('pnumber_3') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('pnumber_3'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="assets/img/email.png" alt=""></span>
                                                <div class="form-group label-floating has-error">
<<<<<<< HEAD
                                                    <label class="control-label">ایمیل وارد نشده</label>
                                                    <input type="email" class="form-control" placeholder="ایمیل">
                                                    <span class="material-input"></span>
=======
                                                    <input type="email" class="form-control" placeholder="ایمیل" name="email_3" value="{{ old('email_3') }}">
                                                    <span class="material-input"></span>
                                                    @if($errors->has('email_3'))
                                                       <span class="material-icons form-control-feedback">clear</span>
                                                    @endif
>>>>>>> faef3ceb96096f438dc177353506d9e41884c2ad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="register" class="sr-only">register</label>
                                <input type="submit" class="form-control" id="register" value="ثبت نام">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                            <div id="login">
                                <a href="{{ route('get_team_login') }}">ورود به سایت</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ URL::to('assets/Material-Kit/assets/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('assets/Material-Kit/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('assets/Material-Kit/assets/js/material.min.js') }}"></script>

    </body>
</html>
