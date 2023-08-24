@extends('layouts.main')
@section('content')
    <h2 class="mb-3">Добавление вопроса</h2>
    <div style="max-width: 600px">
        <form action="{{ route('questions.update', $question['id']) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Вопрос</label>
                <div class="col-sm-10">
                    <input type="text" name="question" class="form-control" id="inputPassword" value="{{ $question['question'] }}">
                    @error('question')
                    <div class="text-danger form-error mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Ответ</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="answer" rows="5" cols="33">{{ $question['answer'] }}</textarea>
                    @error('answer')
                    <div class="text-danger form-error mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Отступ сверху</label>
                <div class="col-sm-10">
                    <input type="radio" class="btn-check" value="5" name="margin_top" id="option6" autocomplete="off"
                        {{ $question['margin_top'] === 5 ? 'checked' : '' }}>
                    <label class="btn" for="option6">5px</label>
                    <input type="radio" class="btn-check" value="10" name="margin_top" id="option7"
                           autocomplete="off" {{ $question['margin_top'] === 10 ? 'checked' : '' }}>
                    <label class="btn" for="option7">10px</label>
                    <input type="radio" class="btn-check" value="15" name="margin_top" id="option8"
                           autocomplete="off" {{ $question['margin_top'] === 15 ? 'checked' : '' }}>
                    <label class="btn" for="option8">15px</label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Отступ снизу</label>
                <div class="col-sm-10">
                    <input type="radio" class="btn-check" value="5" name="margin_bottom" id="option9" autocomplete="off"
                        {{ $question['margin_bottom'] === 5 ? 'checked' : '' }}>
                    <label class="btn" for="option9">5px</label>
                    <input type="radio" class="btn-check" value="10" name="margin_bottom" id="option10"
                           autocomplete="off" {{ $question['margin_bottom'] === 10 ? 'checked' : '' }}>
                    <label class="btn" for="option10">10px</label>
                    <input type="radio" class="btn-check" value="15" name="margin_bottom" id="option11"
                           autocomplete="off" {{ $question['margin_bottom'] === 15 ? 'checked' : '' }}>
                    <label class="btn" for="option11">15px</label>
                </div>
            </div>
            <div class="mb-3 row">
                <button type="submit" class="btn btn-primary" style="max-width: 100px">Изменить</button>
            </div>
        </form>
    </div>

@endsection
