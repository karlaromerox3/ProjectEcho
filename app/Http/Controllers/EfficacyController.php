<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EfficacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $applyCurrentKnowledgeQuestions = DB::table('questions')->where('questionaire', 'SE')->where('factor', 'applyCurrentKnowledge')->get();
            $effectiveCommunicationQuestions = DB::table('questions')->where('questionaire', 'SE')->where('factor', 'effectiveCommunication')->get();
            $teamColabQuestions = DB::table('questions')->where('questionaire', 'SE')->where('factor', 'teamColab')->get();
            $adquireKnowledgeQuestions = DB::table('questions')->where('questionaire', 'SE')->where('factor', 'adquireKnowledge')->get();
            $previousKnowledgeQuestions = DB::table('questions')->where('questionaire', 'SE')->where('factor', 'previousKnowledge')->get();
            return view('efficacy.index',
            compact(
                'applyCurrentKnowledgeQuestions',
                'effectiveCommunicationQuestions',
                'teamColabQuestions',
                'adquireKnowledgeQuestions',
                'previousKnowledgeQuestions'
            ));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $studentId = $request->input('studentId');
        $respuestas = $request->input('respuestas');
        foreach ($respuestas as $question_id => $score) {
            $respuesta = new Answer();
            $respuesta->question_id = $question_id;
            $respuesta->score = $score;
            $respuesta->save();
            Session::put('efficacyFilled', true);

            $respuesta->students()->attach($studentId);
            // TODO: CHANGE FOR FINAL SCREEN
            return redirect()->route('efficacy.index')->with('studentId', $studentId);;

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }

    public function membership()
    {
        $questions = DB::table('questions')->where('questionaire', 'SB')->where('factor', 'membership')->get();
        return view('belonging.index', compact('questions'));
    }
}
