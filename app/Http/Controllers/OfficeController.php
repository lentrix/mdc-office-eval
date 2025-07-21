<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function show(Office $office)
    {
        $month = request()->input('month', date('n'));
        $year = request()->input('year', date('Y'));

        $interpretation = $office->averageRating ? Evaluation::interpretation($office->averageRating) : 'No evaluations yet';

        return view('office.show', compact('office','month', 'year', 'interpretation'));
    }

    public function index()
    {
        $offices = Office::orderBy('name')->get();
        return view('office.index', compact('offices'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'office_head' => 'required|string|max:255',
        ]);

        Office::create($data);
        return redirect()->route('offices.index')->with('success', 'Office created successfully.');
    }

    public function update(Request $request, Office $office)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'office_head' => 'required|string|max:255',
        ]);

        $office->update($data);
        return redirect()->route('offices.show', $office)->with('success', 'Office updated successfully.');
    }

    public function destroy(Office $office)
    {
        $office->delete();
        return redirect()->route('offices.index')->with('success', 'Office deleted successfully.');
    }
}
