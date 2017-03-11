<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="stylesheet" href="../bootstrap-rtl/css/bootstrap.rtl.min.css">
        <!--<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="Material-Kit/assets/css/material-kit.css">
        
        <link rel="stylesheet" href="Material-Kit/assets/css/demo.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.css">
        
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="assets/css/admin.css">
        
        <title>مسابقه</title>
        <style>
            
        </style>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row navbar-admin">
                <div class="logo">
                    <img src="assets/img/logo1.png" alt="" style="height: 69px;">
                </div>
                <div class="question">
                    <a href="">
                        <span>طرح سوال</span>
                        <img src="assets/img/question.png" alt="" height="40px;">
                    </a>        
                </div>
                <div class="name-contest">
                    سمنسیتبمسنشتبمس
                </div>
                <div class="logout">
                    <a href="#"><span class="glyphicon glyphicon-off"></span></a>
                </div>
            </div>
            <div class="container-fluid">
                
                <div class="row select-level">
                    <div class="col-md-2 col-md-offset-1">
                        <select class="select form-control" placeholder="انتخاب مرحله">
                            <option value="انتخاب مرحله" selected="selected" class="selected">انتخاب مرحله</option>
                            <option value="1">مرحله 1</option>
                            <option value="2">مرحله 2</option>
                            <option value="3">مرحله 3</option>
                            <option value="4">مرحله 4</option>
                        </select>
                    </div>
                    <div class="col-md-2 start">
                        <button class="btn btn-primary btn-round ">
                            شروع
                        </button>
                    </div>
                    <div class="col-md-2 end">
                        <button class="btn btn-primary btn-round ">
                            پایان
                        </button>
                    </div>
                    <div class="col-md-2 col-md-offset-3 rank">
                        <a class="btn btn-primary btn-round" href="#">
                            رتبه بندی تیم ها
                        </a>
                    </div>
                </div>
                <section>
                    <div id="tables">
		                <div class="title">
		                    <h3>درخواست های بازبینی</h3>
		                </div>
		                    <div class="row">
		                    <div class="col-md-8 col-md-offset-2">
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
		                            <tbody>
		                                <tr>
		                                    <td class="text-center">1</td>
		                                    <td>شسیب شسیب شسیب هشت وزیر</td>
		                                    <td>پاساگارد شیراز</td>
		                                    <td>2</td>
		                                    <td class="review">
		                                        <div class="radio" >
                                                    <label>
                                                        <input type="radio" name="optionsRadios">
                                                        درست
                                                    </label>
                                                </div>
                                                <div class="radio" >
                                                    <label>
                                                        <input type="radio" name="optionsRadios">
                                                        غلط
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
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
    <script src="Material-Kit/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="Material-Kit/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="Material-Kit/assets/js/material.min.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="Material-Kit/assets/js/material-kit.js"></script>
    <!--<script src="Material-Kit/assets/js/bootstrap-datepicker.js"></script>-->
    <!--<script src="Material-Kit/assets/js/nouislider.js"></script>-->
    <!--<script src="assets/js/tagsinput.js"></script>-->
    
    <script>
        $(function() {
            
            $(".select").dropdown({ "autoinit" : ".select" });
            $(".select").dropdown({ "dropdownClass": "my-dropdown", "optionClass": "my-option awesome" });
        })
    </script>
</html>

