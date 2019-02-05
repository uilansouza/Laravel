<body>
    <h1>Email de Contato</h1>

    <p>O usuario {{$nome}} enviou uma mensagem</p>
    <pre>{{$mensagem}}</pre>
    <p><a href="mailto:{{ $email }}">Clique aqui para responder</a></p>

     <!--<img  src ="@{{ $message->embed(storage_path('app/email-signature.jpg')) }}"> -->

</body>