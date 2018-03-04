
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Admin</title>

    <!-- Bootstrap core CSS -->  
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}"" rel="stylesheet">
  </head>

  <body>

    @include('admin.layouts.nav')        

    @include('admin.post.index')       

    @include('admin.layouts.footer')
  
  </body>
  
</html>
