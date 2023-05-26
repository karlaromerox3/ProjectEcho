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

    //-------------------------- TEC 20 ---------------------------
    public function maleEfficacyAvg() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SE')
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

        return $averageMaleScore;
    }
    //-------------------------------------------
    public function femaleEfficacyAvg() {

        $female_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SE')
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

        return $averageFemaleScore;
    }
    public function maleEfficacyMax() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SE')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $maxScore = 0;

        foreach ($male_students as $student) {
            if ($student->total_score > $maxScore) {
                $maxScore = $student->total_score;
            }
        }

        return $maxScore;
    }

     public function femaleEfficacyMax() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SE')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $maxScore = 0;

        foreach ($male_students as $student) {
            if ($student->total_score > $maxScore) {
                $maxScore = $student->total_score;
            }
        }

        return $maxScore;
    }
    public function maleEfficacyMin() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SE')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $minScore = 50;

        foreach ($male_students as $student) {
            if ($student->total_score < $minScore) {
                $minScore = $student->total_score;
            }
        }

        return $minScore;
    }

     public function femaleEfficacyMin() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SE')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $minScore = 50;

        foreach ($male_students as $student) {
            if ($student->total_score < $minScore) {
                $minScore = $student->total_score;
            }
        }

        return $minScore;
    }
    public function maleBelongingAvg() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SB')
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

        return $averageMaleScore;
    }
    //-------------------------------------------
    public function femaleBelongingAvg() {

        $female_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SB')
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

        return $averageFemaleScore;
    }
    public function maleBelongingMax() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SB')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $maxScore = 0;

        foreach ($male_students as $student) {
            if ($student->total_score > $maxScore) {
                $maxScore = $student->total_score;
            }
        }

        return $maxScore;
    }

     public function femaleBelongingMax() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SB')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $maxScore = 0;

        foreach ($male_students as $student) {
            if ($student->total_score > $maxScore) {
                $maxScore = $student->total_score;
            }
        }

        return $maxScore;
    }
    public function maleBelongingMin() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SB')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $minScore = 105;

        foreach ($male_students as $student) {
            if ($student->total_score < $minScore) {
                $minScore = $student->total_score;
            }
        }

        return $minScore;
    }

     public function femaleBelongingMin() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 20')
                ->where('questions.questionaire', '=', 'SB')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $minScore = 105;

        foreach ($male_students as $student) {
            if ($student->total_score < $minScore) {
                $minScore = $student->total_score;
            }
        }

        return $minScore;
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
    public function maleEfficacyAvg21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SE')
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

        return $averageMaleScore;
    }
    public function femaleEfficacyAvg21() {

        $female_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SE')
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

        return $averageFemaleScore;
    }
    public function maleEfficacyMax21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SE')
                ->groupBy('students.id', 'students.model')
                ->get();

        if ($male_students->isEmpty()) {
            return 0;
        }

        $maxScore = 0;

        foreach ($male_students as $student) {
            if ($student->total_score > $maxScore) {
                $maxScore = $student->total_score;
            }
        }

        return $maxScore;
    }

     public function femaleEfficacyMax21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SE')
                ->groupBy('students.id', 'students.model')
                ->get();

        if ($male_students->isEmpty()) {
            return 0;
        }

        $maxScore = 0;

        foreach ($male_students as $student) {
            if ($student->total_score > $maxScore) {
                $maxScore = $student->total_score;
            }
        }

        return $maxScore;
    }
    public function maleEfficacyMin21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SE')
                ->groupBy('students.id', 'students.model')
                ->get();

        if ($male_students->isEmpty()) {
            return 0;
        }
        $minScore = 50;
        foreach ($male_students as $student) {
            if ($student->total_score < $minScore) {
                $minScore = $student->total_score;
            }
        }

        return $minScore;
    }

     public function femaleEfficacyMin21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SE')
                ->groupBy('students.id', 'students.model')
                ->get();

        if ($male_students->isEmpty()) {
            return 0;
        }

        $minScore = 50;

        foreach ($male_students as $student) {
            if ($student->total_score < $minScore) {
                $minScore = $student->total_score;
            }
        }

        return $minScore;
    }
    public function maleBelongingAvg21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SB')
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

        return $averageMaleScore;
    }
    public function femaleBelongingAvg21() {

        $female_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SB')
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

        return $averageFemaleScore;
    }
    public function maleBelongingMax21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SB')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $maxScore = 0;

        foreach ($male_students as $student) {
            if ($student->total_score > $maxScore) {
                $maxScore = $student->total_score;
            }
        }

        return $maxScore;
    }

     public function femaleBelongingMax21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SB')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $maxScore = 0;

        foreach ($male_students as $student) {
            if ($student->total_score > $maxScore) {
                $maxScore = $student->total_score;
            }
        }

        return $maxScore;
    }
    public function maleBelongingMin21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 1)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SB')
                ->groupBy('students.id', 'students.model')
                ->get();

        if ($male_students->isEmpty()) {
            return 0;
        }

        $minScore = 105;

        foreach ($male_students as $student) {
            if ($student->total_score < $minScore) {
                $minScore = $student->total_score;
            }
        }

        return $minScore;
    }

     public function femaleBelongingMin21() {
        $male_students = DB::table('students')
                ->select('students.id', 'students.model', DB::raw('SUM(answers.score) as total_score'))
                ->join('answer_student', 'students.id', '=', 'answer_student.student_id')
                ->join('answers', 'answer_student.answer_id', '=', 'answers.id')
                ->join('questions', 'answers.question_id', '=', 'questions.id')
                ->where('students.gender', '=', 0)
                ->where('students.model', '=', 'Tec 21')
                ->where('questions.questionaire', '=', 'SB')
                ->groupBy('students.id', 'students.model')
                ->get();
        if ($male_students->isEmpty()) {
            return 0;
        }

        $minScore = 105;

        foreach ($male_students as $student) {
            if ($student->total_score < $minScore) {
                $minScore = $student->total_score;
            }
        }

        return $minScore;
    }
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
