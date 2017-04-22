<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-rtl.min.css') }} ">
        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/demo.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/google-fonts.css') }}" />
        <link rel="stylesheet" href="{{ URL::to('assets/css/questionupload.css') }}">

        <title>مسابقه</title>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row navbar-admin">
                <div class="logo">
                    <a href="{{ route('get_admin_home') }}">
                        <img src="{{ URL::to('assets/img/logo1.png') }}" alt="" style="height: 69px;">
                    </a>
                </div>
                <div class="name-contest">
                    مسابقات انجمن علمی
                </div>
                <div class="logout">
                    <a href="{{ route('get_team_logout') }}"><span class="glyphicon glyphicon-off"></span></a>
                </div>
            </div>
            <section>
                <form action="{{ route('post_make_question') }}" method="post" enctype="multipart/form-data">

                    <div class="card card-signup">
                        <div class="header header-info">
                            <h3>سوال</h3>
                        </div>
                        <div class="row" style="margin-top:40px;">
                            <div class="col-md-2 col-md-offset-1" style="margin-right:30px;">
                                <div class="form-group label-floating">
                                    <label class="control-label">عنوان سوال</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="col-md-2 col-md-offset-1">
                                <div class="form-group label-floating">
                                    <label class="control-label">امتیاز</label>
                                    <input type="text" class="form-control" name="score">
                                </div>
                            </div>
                            <div class="col-md-2 col-md-offset-1">
                                <div class="form-group label-floating">
                                    <label class="control-label">مرحله</label>
                                    <input type="text" class="form-control" name="stage">
                                </div>
                            </div>
                            <div class="col-md-2 col-md-offset-1">
                                <div class="form-group label-floating">
                                    <label class="control-label">سطح</label>
                                    <input type="text" class="form-control" name="level">
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div id="textareaTags">
                                <div class="form-group label-floating">
                                    <label class="control-label"> متن سوال ...</label>
                                    <textarea class="form-control" rows="12" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="file-uploader">
                        <div class="form-group form-file-upload">
                            <input type="file" id="inputFile2" name="image">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="سوال تصویری">
                                <span class="input-group-btn input-group-s">
                                    <button type="button" class="btn btn-just-icon btn-round btn-primary" style="border-radius:30px;">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="submit"  class="form-control btn-success" name="submit" value="ارسال">
                            <input type="submit" class="form-control btn-danger" name="cancel" value="انصراف">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </body>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/material.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/dropdown.js') }}"></script>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/material-kit.js') }}"></script>
    <script>
        $(function() {
            $(".select").dropdown({ "autoinit" : ".select" });
            $(".select").dropdown({ "dropdownClass": "my-dropdown", "optionClass": "my-option awesome" });
        })
    </script>
</html>
