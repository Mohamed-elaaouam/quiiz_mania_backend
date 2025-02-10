<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use Illuminate\Http\Request;

class quizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $quizzes = quiz::all();
        return view("quiz.index", compact("quizzes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("quiz.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $quiz = new quiz();
        $request->validate([
            "question" => "required|string",
            "answer_a" => "required",
            "answer_b" => "required",
            "answer_c" => "required",
            "answer_d" => "required",
            "correct_answer" => "required",
        ]);

        $quiz->question = $request->question;
        $choices = [
            "A" => $request->answer_a,
            "B" => $request->answer_b,
            "C" => $request->answer_c,
            "D" => $request->answer_d
        ];


        $quiz->choices = json_encode($choices);
        $quiz->answer = $request->correct_answer;
        $quiz->save();
        return redirect()->route("quizzes.index")->with("success", "Question added successfully ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $quiz = quiz::findOrFail($id);
        return view("quiz.show", compact("quiz"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $quiz = quiz::findOrFail($id);
        return view("quiz.edit", compact("quiz"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $quiz = quiz::findOrFail($id);

        $request->validate([
            "question" => "required|string",
            "answer_a" => "required",
            "answer_b" => "required",
            "answer_c" => "required",
            "answer_d" => "required",
            "correct_answer" => "required",
        ]);

        $quiz->question = $request->question;
        $choices = [
            "A" => $request->answer_a,
            "B" => $request->answer_b,
            "C" => $request->answer_c,
            "D" => $request->answer_d
        ];


        $quiz->choices = json_encode($choices);

        $quiz->answer = $request->correct_answer;
        
        $quiz->update();

        return redirect()->route(
            "quizzes.edit",
            ['quiz' => $id]
        )->with("success", "Question updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $quiz = quiz::find($id);
        $quiz->delete();
        return redirect()->route("quizzes.index")->
        with("success","Question Deleted Successfully");
    }
}
