<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<header class="p-3 bg-light text-secondary">
  <div class="container">

    <div
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
        >
          <a
            href="/"
            class="d-flex align-items-center mb-2 mb-lg-0 text-success text-decoration-none"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40"
              height="32"
              fill="currentColor"
              class="bi bi-telephone-fill"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
              />
            </svg>
          </a>

      
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="/arrange" class="nav-link px-2 link-dark">Alphabetical arrange</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Searche a phone number</a></li>
        <!-- <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li> -->
      </ul>
      
      

      <div class="col-md-6 text-end">

      @if(Request::is('dashboard')) 
      <button type="button" onclick="window.location.href='logout';" class="btn btn-outline-success me-2">Logout</button>
      <td> {{$data->name}} </td>
      
       @elseif (Request::is('login')) <button type="button" onclick="window.location.href='/registration';" class="btn btn-outline-success me-2">Registration</button>
       @elseif(Request::is('registration')) <button type="button" onclick="window.location.href='/login';" class="btn btn-outline-success me-2">Login</button>
       @else  <button type="button" onclick="window.location.href='/login';" class="btn btn-outline-success me-2">Login</button> 
       <button type="button" onclick="window.location.href='/registration';" class="btn btn-outline-success me-2">Registration</button>
       
      @endif
      </div>
      </div>
  </div>
  </header>

  @yield('content')
  
  
</body>
<script ssrc="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>