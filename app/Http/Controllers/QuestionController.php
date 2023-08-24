<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::all();
        $data = QuestionResource::collection($questions);
        return view('admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $question = Question::firstOrCreate(
            ['question' => $data['question']],
            $data
        );
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        return view('admin.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        return view('admin.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Question $question)
    {
        $data = $request->validated();
        $question->update($data);
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index');
    }
}
