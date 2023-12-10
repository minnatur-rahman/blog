<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minnatu - @yield('title', 'Webside')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="container">

    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand text-white fs-4" href="#">Minnatur Rahman</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/post">Post</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>


      <header>
        <div class="container-fluid bg-danger">

        </div>

      </header>

      <main class="my-5">


         <div class="row">

            <div class="col-9">
                <article>
                    @hasSection('content')
                    @yield('content')
                    @else
                    <h2>No Content Found</h2>
                    @endif

                 </article>
             </div>

             <div class="col-3">
                <aside>
                    @section('sidebar')
                    <ul>
                        <li><a href="/"></a>Home</li>
                        <li><a href="/about"></a>About</li>
                        <li><a href="/post"></a>Post</li>
                    </ul>
                    @show
                 </aside>
             </div>

         </div>


      </main>


      <footer class="container mt-5">
        <div class="h2 fw-bold text-warning text-center">Minnatur Rahman</div>
        <hr class="border border-1 border-danger ">

        <div class="row">
          <div class="col-md-3">

            <p>
              <a href="/" class="text-decoration-none">Home</a>
            </p>
            <p>
              <a href="/about" class="text-decoration-none">About</a>
            </p>
            <p>
              <a href="/post" class="text-decoration-none">Post</a>
            </p>
          </div>

        </div>

        <hr class="border border-1 border-danger ">

   </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
