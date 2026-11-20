<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all();
        return view('subject.index', compact('subject'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' =>'required|string|max:255',
            'Description' =>'string|max:255|nullable',
            'Hours' =>'required|integer|max:255',
        ]);

        Subject::create($validated);

        return redirect()->route('subject.index')
            ->with('success', 'Предмет успешно создан!');
    }

    public function edit(Subject $subject)
    {
        return view('subject.edit', compact('subject'));
    }

    public function update(Request $request, Subject $subject)
    {
        $validated = $request->validate([
            'Name' =>'required|string|max:255',
            'Description' =>'string|max:255|nullable',
            'Hours' =>'required|integer|max:255',
        ]);

        $subject->update($validated);

        return redirect()->route('subject.index')
            ->with('success', 'Предмет успешно обновлен!');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subject.index')
            ->with('success', 'Предмет удален!');
    }
}
