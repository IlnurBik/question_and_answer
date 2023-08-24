@extends('layouts.app')
@section('content')
    <h2 class="mb-3">Ответы на вопросы</h2>
    <div class="accordion" id="accordionExample">
        @foreach($questions as $question)
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#{{ $question['id'] }}" aria-expanded="false" aria-controls="{{ $question['id'] }}">
                    {{ $question['question'] }}
                </button>
            </h2>
            <div id="{{ $question['id'] }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="margin-top: {{ $question['margin_top'] }}px; margin-bottom: {{
                $question['margin_bottom'] }}px;">
                    {{ $question['answer'] }}
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
