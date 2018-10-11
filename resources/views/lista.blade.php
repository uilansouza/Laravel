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
    {{$i=10}}
    <ul>
    @for ($f = 0; $f < $i; $f++)
      <li>O valor atual é {{ $f }} </li>
   </ul>
@endfor
  </body>
</html>