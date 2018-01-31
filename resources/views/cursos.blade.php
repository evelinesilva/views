<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <title></title>
  </head>
  <body>
    <h1>Cursos Disponíveis</h1>

    @foreach ($cursos as $curso)
        <li>{{$curso}}</li>
    @endforeach

    <button type="button" class="btn btn-success">Success</button>
  </body>
</html>
