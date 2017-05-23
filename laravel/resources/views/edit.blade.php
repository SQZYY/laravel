<html>
<h1>Редактирование информации</h1>
<div style="float: left">
        {{ Form::open(array('url' => 'update')) }}
                {{ csrf_field() }}
                {{ Form::label('fio', 'Имя: ') }}
                {{ Form::text('fio', $value = $note->fio) }}
                {{ Form::hidden('id', $value = $note->id) }}

                {{ Form::label('number', 'Телефон: ') }}
                {{ Form::text('number', $value = $note->number) }}
                {{ Form::submit('Изменить') }}
        {{ Form::close() }}
</div>
</html>