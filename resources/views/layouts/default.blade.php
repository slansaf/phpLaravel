<!DOCTYPE html>
<html lang="ru">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">

        <header class="col">
            @include('includes.header')
        </header>

        <div id="main" class="col">
            @yield('content')
        </div>
  
        <footer clas="col">
            @include('includes.footer')
        </footer>    
    </div>
</body>
</html>
