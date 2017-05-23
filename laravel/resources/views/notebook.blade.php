<html>
<style>
    table {
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }

    table th {
        background: #eee;
    }
</style>
<h1>Записная книжка</h1>
<div style="float: left">
    {{ Form::open() }}
        {{ csrf_field() }}
        {{ Form::label('fio', 'Имя: ') }}
        {{ Form::text('fio') }}

        {{ Form::label('number', 'Телефон: ') }}
        {{ Form::text('number') }}
        {{ Form::submit('Добавить') }}
    {{ Form::close() }}
</div>
<div style="clear: both"></div>
<table>
    <tr>
        <th>ФИО</th>
        <th>Номер телефона</th>
        <th></th>
    </tr>
    @foreach ($notebook as $key)
    <tr>
        <td>{{$key->fio}}</td>
        <td>{{$key->number}}</td>
        <td><a href='{{'/edit/' . $key->id}}'>Изменить</a></td>
    </tr>
    @endforeach
</table>
</html>