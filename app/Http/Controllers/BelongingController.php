<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelongingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $membershipQuestions = DB::table('questions')->where('questionaire', 'SB')->where('factor', 'membership')->get();
            $acceptanceQuestions = DB::table('questions')->where('questionaire', 'SB')->where('factor', 'acceptance+')->orWhere('factor', 'acceptance-')->get();
            $trustQuestions = DB::table('questions')->where('questionaire', 'SB')->where('factor', 'trust')->get();
            return view('belonging.index', compact('membershipQuestions', 'acceptanceQuestions', 'trustQuestions'));

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
        //
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
