<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'>
    <title>TreinaWeb</title>
  </head>
  <body>
    <h1>Lista de Voluntários</h1>
    <ul>
    @foreach ($voluntarios as $nome)
      <li>{{ $nome }}</li>
    @endforeach
    </ul>
    <br>
    $i=10;
    <ul>
    @for ($i = 0; $i < 10; $i++)
      <li>O valor atual é {{ $i }} </li>
   </ul>
@endfor
  </body>
</html>