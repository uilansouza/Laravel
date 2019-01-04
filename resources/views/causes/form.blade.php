<div class="form-group">
    {!! Form::label('cause', 'Causa') !!}
    {!! Form::text('cause', null, ['class' => 'form-control', 'placeholder' => 'Causa']) !!}
    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
</div>

{!! Form::submit('Enviar', ['class' => 'btn btn-default']) !!}
