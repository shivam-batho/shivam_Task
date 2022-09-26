<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <title>Task </title>
    <style>
      svg {
        color:white;
}
    </style>
  </head>
  <body>
    @include('include.svgFont')
    @include( 'include.header' )
    <div class="container-fluid">
       
        <!-- Optional JavaScript; choose one of the two! -->
        <section class="content">
            @yield('content')
        </section>
       
    </div>
    @include( 'include.footer' )
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  </body>
</html>