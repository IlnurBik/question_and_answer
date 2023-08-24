@extends('layouts.main')
@section('content')
    <h2 class="mb-3">Вопрос № {{ $question['id'] }}</h2>
    <table class="table" style="max-width: 600px">
        <tbody>
            <tr>
                <th>Вопрос:</th>
                <th>{{ $question['question'] }}</th>
            </tr>
            <tr>
                <th>Ответ:</th>
                <th>{{ $question['answer'] }}</th>
            </tr>
            <tr>
                <th>Отступ сверху:</th>
                <th>{{ $question['margin_top'] }}</th>
            </tr>
            <tr>
                <th>Отступ снизу:</th>
                <th>{{ $question['margin_bottom'] }}</th>
            </tr>
        </tbody>
    </table>
@endsection

