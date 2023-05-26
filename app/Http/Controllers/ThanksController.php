<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThanksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('thanks.index');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function acceptancePossitiveEmotions20() {
    $male_students = DB::table('students')
            ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
            ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
            ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('students.gender', '=', 1)
            ->where('students.model', '=', 'Tec 20')
            ->where('questions.factor', '=', 'acceptance+')
            ->groupBy('students.id', 'students.model')
            ->get();

    $totalMaleScore = 0;
    $maleStudentCount = $male_students->count();

    foreach ($male_students as $student) {
        $totalMaleScore += $student->total_score;
    }

    $averageMaleScore = 0;
    if ($maleStudentCount === 0) $averageMaleScore = 0;
    else $averageMaleScore = $totalMaleScore / $maleStudentCount;
//-------------------------------------------
    $female_students = DB::table('students')
            ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
            ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
            ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('students.gender', '=', 0)
            ->where('students.model', '=', 'Tec 20')
            ->where('questions.factor', '=', 'acceptance+')
            ->groupBy('students.id', 'students.model')
            ->get();

    $totalFemaleScore = 0;
    $femaleStudentCount = $female_students->count();

    foreach ($female_students as $student) {
        $totalFemaleScore += $student->total_score;
    }

    $averageFemaleScore = 0;
    if ($femaleStudentCount === 0) $averageFemaleScore = 0;
    else $averageFemaleScore = $totalFemaleScore / $femaleStudentCount;


    if ($averageFemaleScore > $averageMaleScore) return 'mujeres';
    else if ($averageFemaleScore < $averageMaleScore) return 'hombres';
    else return 'ambos';

    }
    public function acceptanceNegativeEmotions20() {
    $male_students = DB::table('students')
            ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
            ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
            ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('students.gender', '=', 1)
            ->where('students.model', '=', 'Tec 20')
            ->where('questions.factor', '=', 'acceptance-')
            ->groupBy('students.id', 'students.model')
            ->get();

    $totalMaleScore = 0;
    $maleStudentCount = $male_students->count();

    foreach ($male_students as $student) {
        $totalMaleScore += $student->total_score;
    }

    $averageMaleScore = 0;
    if ($maleStudentCount === 0) $averageMaleScore = 0;
    else $averageMaleScore = $totalMaleScore / $maleStudentCount;

//-------------------------------------------
    $female_students = DB::table('students')
            ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
            ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
            ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('students.gender', '=', 0)
            ->where('students.model', '=', 'Tec 20')
            ->where('questions.factor', '=', 'acceptance-')
            ->groupBy('students.id', 'students.model')
            ->get();

    $totalFemaleScore = 0;
    $femaleStudentCount = $female_students->count();

    foreach ($female_students as $student) {
        $totalFemaleScore += $student->total_score;
    }

    $averageFemaleScore = 0;
    if ($femaleStudentCount === 0) $averageFemaleScore = 0;
    else $averageFemaleScore = $totalFemaleScore / $femaleStudentCount;

    if ($averageFemaleScore > $averageMaleScore) return 'mujeres';
    else if ($averageFemaleScore < $averageMaleScore) return 'hombres';
    else return 'ambos';

    }

    public function applyCurrentKnowledge20() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.factor', '=', 'applyCurrentKnowledge')
                ->groupBy('students.id', 'students.model')
                ->get();

        $totalMaleScore = 0;
        $maleStudentCount = $male_students->count();

        foreach ($male_students as $student) {
            $totalMaleScore += $student->total_score;
        }

        $averageMaleScore = 0;
        if ($maleStudentCount === 0) $averageMaleScore = 0;
        else $averageMaleScore = $totalMaleScore / $maleStudentCount;

//-------------------------------------------
        $female_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.factor', '=', 'applyCurrentKnowledge')
                ->groupBy('students.id', 'students.model')
                ->get();

        $totalFemaleScore = 0;
        $femaleStudentCount = $female_students->count();

        foreach ($female_students as $student) {
            $totalFemaleScore += $student->total_score;
        }

        $averageFemaleScore = 0;
        if ($femaleStudentCount === 0) $averageFemaleScore = 0;
        else $averageFemaleScore = $totalFemaleScore / $femaleStudentCount;

        if ($averageFemaleScore > $averageMaleScore) return 'mujeres';
        else if ($averageFemaleScore < $averageMaleScore) return 'hombres';
        else return 'ambos';

    }


    //-------------------------- TEC 21 ---------------------------
     public function acceptancePossitiveEmotions21() {
    $male_students = DB::table('students')
            ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
            ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
            ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('students.gender', '=', 1)
            ->where('students.model', '=', 'Tec 21')
            ->where('questions.factor', '=', 'acceptance+')
            ->groupBy('students.id', 'students.model')
            ->get();

    $totalMaleScore = 0;
    $maleStudentCount = $male_students->count();

    foreach ($male_students as $student) {
        $totalMaleScore += $student->total_score;
    }

    $averageMaleScore = 0;
    if ($maleStudentCount === 0) $averageMaleScore = 0;
    else $averageMaleScore = $totalMaleScore / $maleStudentCount;
//-------------------------------------------
    $female_students = DB::table('students')
            ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
            ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
            ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('students.gender', '=', 0)
            ->where('students.model', '=', 'Tec 21')
            ->where('questions.factor', '=', 'acceptance+')
            ->groupBy('students.id', 'students.model')
            ->get();

    $totalFemaleScore = 0;
    $femaleStudentCount = $female_students->count();

    foreach ($female_students as $student) {
        $totalFemaleScore += $student->total_score;
    }

    $averageFemaleScore = 0;
    if ($femaleStudentCount === 0) $averageFemaleScore = 0;
    else $averageFemaleScore = $totalFemaleScore / $femaleStudentCount;

    if ($averageFemaleScore > $averageMaleScore) return 'mujeres';
    else if ($averageFemaleScore < $averageMaleScore) return 'hombres';
    else return 'ambos';

    }
    public function acceptanceNegativeEmotions21() {
    $male_students = DB::table('students')
            ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
            ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
            ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('students.gender', '=', 1)
            ->where('students.model', '=', 'Tec 21')
            ->where('questions.factor', '=', 'acceptance-')
            ->groupBy('students.id', 'students.model')
            ->get();

    $totalMaleScore = 0;
    $maleStudentCount = $male_students->count();

    foreach ($male_students as $student) {
        $totalMaleScore += $student->total_score;
    }

    $averageMaleScore = 0;
    if ($maleStudentCount === 0) $averageMaleScore = 0;
    else $averageMaleScore = $totalMaleScore / $maleStudentCount;
//-------------------------------------------
    $female_students = DB::table('students')
            ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
            ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
            ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('students.gender', '=', 0)
            ->where('students.model', '=', 'Tec 21')
            ->where('questions.factor', '=', 'acceptance-')
            ->groupBy('students.id', 'students.model')
            ->get();

    $totalFemaleScore = 0;
    $femaleStudentCount = $female_students->count();

    foreach ($female_students as $student) {
        $totalFemaleScore += $student->total_score;
    }

    $averageFemaleScore = 0;
    if ($femaleStudentCount === 0) $averageFemaleScore = 0;
    else $averageFemaleScore = $totalFemaleScore / $femaleStudentCount;

    if ($averageFemaleScore > $averageMaleScore) return 'mujeres';
    else if ($averageFemaleScore < $averageMaleScore) return 'hombres';
    else return 'ambos';

    }
    public function applyCurrentKnowledge21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.factor', '=', 'applyCurrentKnowledge')
                ->groupBy('students.id', 'students.model')
                ->get();

        $totalMaleScore = 0;
        $maleStudentCount = $male_students->count();

        foreach ($male_students as $student) {
            $totalMaleScore += $student->total_score;
        }

        $averageMaleScore = 0;
        if ($maleStudentCount === 0) $averageMaleScore = 0;
        else $averageMaleScore = $totalMaleScore / $maleStudentCount;

//-------------------------------------------
        $female_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.factor', '=', 'applyCurrentKnowledge')
                ->groupBy('students.id', 'students.model')
                ->get();

        $totalFemaleScore = 0;
        $femaleStudentCount = $female_students->count();

        foreach ($female_students as $student) {
            $totalFemaleScore += $student->total_score;
        }

        $averageFemaleScore = 0;
        if ($femaleStudentCount === 0) $averageFemaleScore = 0;
        else $averageFemaleScore = $totalFemaleScore / $femaleStudentCount;


        if ($averageFemaleScore > $averageMaleScore) return 'mujeres';
        else if ($averageFemaleScore < $averageMaleScore) return 'hombres';
        else return 'ambos';

    }


}
