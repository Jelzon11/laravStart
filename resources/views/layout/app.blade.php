<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    
    
        <title>{{config('app.name', 'myFirstLaraApp')}}</title>

      <style>
                .round_div {
                border: 2px solid grey;
                border-radius: 5px;
                padding: 10px
}
      
      </style>
    </head>
    
        @include('includes.navbar')
        <body class="hold-transition sidebar-mini">
            <div class="wrapper">
                
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                      <div class="container-fluid">
                        <div class="row mb-2">
                          <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard v3</h1>
                          </div><!-- /.col -->
                          <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Dashboard v3</li>
                            </ol>
                          </div><!-- /.col -->
                        </div><!-- /.row -->
                      </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content-header -->
                
                    <!-- Main content -->
                   @yield('content')
                    <!-- /.content -->
                  </div>
                
                
                
            </div>
        @include('includes.footer')
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
