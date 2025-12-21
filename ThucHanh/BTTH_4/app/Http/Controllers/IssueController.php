<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Issue::with('computer')->orderBy('issues.id', 'desc')->paginate(10);
        return view('issues.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $computers = Computer::all();
        return view('issues.create', compact('computers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'computer_id' => 'required',
            'reported_by' => ['nullable', 'string', 'max:50'],
            'reported_date' => ['required', 'date'],
            'description' => ['required','string'],
            'urgency' => ['required','string'],
            'status' => ['required','string'],
        ]);

        // Handle File Upload
//        if ($request->hasFile('image')) {
//            $path = $request->file('image')->store('uploads', 'public');
//            $validated['image'] = 'storage/' . $path;
//        }

        Issue::create($validated);

        return redirect()->route('issues.index')->with('success', 'Created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Issue $issue)
    {
        $computers = Computer::all();
        return view('issues.edit', compact('issue', 'computers'));
    }

    public function update(Request $request, Issue $issue)
    {
        $validated = $request->validate([
            'computer_id' => 'required',
            'reported_by' => ['nullable', 'string', 'max:50'],
            'reported_date' => ['required', 'date'],
            'description' => ['required','string'],
            'urgency' => ['required','string'],
            'status' => ['required','string'],
        ]);

        $issue->update($validated);

        return redirect()->route('issues.index')->with('success', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue)
    {
//        if ($exam->image && file_exists(public_path($exam->image))) {
//            unlink(public_path($exam->image));
//        } elseif ($exam->image) {
//            $relativePath = str_replace('storage/', '', $exam->image);
//            Storage::disk('public')->delete($relativePath);
//        }

        $issue->delete();

        return redirect()->route('issues.index')->with('success', 'Deleted successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $items = Issue::whereHas('computer', function ($q) use ($query) {
            $q->where('computer_name', 'like', '%' . $query . '%');
        })
            ->with('computer')
            ->orderBy('issues.id', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('issues.index', compact('items'));
    }
}
