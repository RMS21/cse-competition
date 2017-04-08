<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/material-kit.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/Material-Kit/assets/css/demo.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/fonts/font-awesome/css/font-awesome.css') }}">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="{{ URL::to('assets/css/rank.css') }}">

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
                <div class="name-contest">
                  مسابقه انجمن علمی
                </div>
            </div>
            <section>
              <div class="card card-signup">
                    <div class="header header-info text-center">
                        <h3>رتبه بندی</h3>
                    </div>

                    <div id="tables">
		                        <div class="table-responsive">
		                        <table class="table">
		                            <thead>
		                                <tr>
		                                    <th >رتبه</th>
		                                    <th>نام تیم</th>
		                                    <th>امتیاز</th>
		                                    <th>سطح</th>
		                                </tr>
		                            </thead>
		                            <tbody id="table-body">
                                  @php $counter = 1 @endphp
                                  @foreach ($teams as $team)
                                    <tr>
                                      <td>{{ $counter }}</td>
                                      <td>{{ $team->name }}</td>
                                      <td>{{ $team->score }}</td>
                                      <td>{{ $team->level }}</td>
                                   </tr>
                                   @php $counter += 1 @endphp
                                  @endforeach
		                            </tbody>
		                        </table>
		                        </div>
                    </div>
                </section>
        </div>
    </body>
    <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/material.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/dropdown.js') }}"></script>
    <script src="{{ URL::to('assets/Material-Kit/assets/js/material-kit.js') }}"></script>
    <script src="{{ URL::to('assets/js/ranking.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $(".select").dropdown({ "autoinit" : ".select" });
            $(".select").dropdown({ "dropdownClass": "my-dropdown", "optionClass": "my-option awesome" });
        })
    </script>
</html>
