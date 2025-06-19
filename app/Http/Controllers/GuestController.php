<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function welcome() {

        if(!auth()->guest()) {
            return redirect()->route('home');
        }

        $offices = \App\Models\Office::orderBy('name')->get();
        return view('welcome', compact('offices'));
    }

    public function createEvaluation(Office $office) {
        $questions = config('questions.questions');
        return view('create', compact('office', 'questions'));
    }

    public function storeEvaluation(Request $request, Office $office) {
        $data = $request->validate([
            'comments' => 'nullable|string|max:1000',
            'ratings' => 'required|array',
            'ratings.*' => 'nullable|integer|min:1|max:5',
        ]);

        $evaluation = $office->evaluations()->create([
            'comments' => $data['comments'],
        ]);

        foreach ($data['ratings'] as $questionNumber => $rating) {
            $evaluation->items()->create([
                'question_number' => $questionNumber,
                'rating' => $rating,
            ]);
        }

        return redirect()->route('finish');
    }

    public function finish() {
        return view('finished');
    }
}
