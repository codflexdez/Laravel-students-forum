<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"  crossorigin="anonymous" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" rel="stylesheet" >
        <style>
            body {
                font-family: 'Montserrat';
            }
        </style>
       
    <title>{{ config('app.name') }} - @yield('title')</title>
    </head>

    <body>

<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light p-3">
<div class="container-xxl">
  <a class="navbar-brand" href="{{route('forum.index')}}">StudentForum</a>
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      <li class="nav-item">
            <a class="btn btn-outline-secondary clrOnHover" href="{{route('etudiants.create')}}">Register</a>
      </li>
      </ul>
      <form class="d-flex" action="{{ route('etudiants.search', 'query') }}" method="GET">
            <input class="form-control mr-sm-2 me-3" type="search" name="search" placeholder="Search students" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
  </div>
</nav>
<main>
  


@yield('content')

</main>
@isset($students)
<div class="pagination justify-content-center mt-4">
          <div class="d-flex align-items-end">
          {{ $students->links() }}
          </div>  
  </div>
@endisset
<footer class="bg-light text-center mt-4">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright Roman Potachenski
  </div>
</footer>

<script src="{{ asset('js/functions.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"  crossorigin="anonymous"></script>
</body>
   

</html>

        
