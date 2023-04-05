<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <main class="container align-center p-5">
    <form method="POST" action="{{route('validar-registro')}}">
        @csrf
    <div class="mb-3">
        <label for="emailInput" class="form-label">email</label>
        <input type="email" class="form-control" id="emailInput" placeholder="" name="email" required autocomplete="disable">
      </div>
      <div class="mb-3">
        <label for="passwordInput" class="form-label">Example textarea</label>
        <input type="password" class="form-control" id="passwordInput" name="password" required>
      </div>
      <div class="mb-3">
        <label for="userInput" class="form-label">axel</label>
        <input type="text" class="form-control" id="userInput" placeholder="" name="email" required autocomplete="disable">
      </div>
    <button type="submit" class="btn btn-primary ">Registase</button>
      </form>
</body>
</html>
