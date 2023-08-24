@extends('layouts.main')
@section('content')
    <h2 class="mb-3">Ответы на вопросы</h2>
    <table class="table" style="max-width: 900px">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Вопросы</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $question)
        <tr>
            <th scope="row">{{ $question['id'] }}</th>
            <td><a href="{{ route('questions.show', $question['id']) }}">{{ $question['question'] }}</a></td>
            <td><a href="{{ route('questions.edit', $question['id']) }}" class="btn btn-warning">Редактировать</a></td>
            <td>
                <form action="{{ route('questions.destroy', $question['id']) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mb-3 row">
        <a href="{{ route('questions.create') }}" type="submit" class="btn btn-primary" style="max-width:
        100px">Добавить</a>
    </div>
@endsection

