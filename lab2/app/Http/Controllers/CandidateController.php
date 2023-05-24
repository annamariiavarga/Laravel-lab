<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::all();
        return view('candidates.index', ['candidates' => $candidates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $candidate = Candidate::create(
            $request->all(['name', 'sex', 'year_of_birth', 'education', 'specialty'])
        );
        return \redirect('candidates');
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
        $candidate = Candidate::find($id);
        return view('candidates.edit', ['candidate' => $candidate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $candidate = Candidate::find($id);

        $candidate->name = $request->input('name');
        $candidate->sex = $request->input('sex');
        $candidate->year_of_birth = $request->input('year_of_birth');
        $candidate->education = $request->input('education');
        $candidate->specialty = $request->input('specialty');
        $candidate->save();

        return \redirect('candidates');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $candidate = Candidate::find($id);
        $candidate->delete();
        return \redirect('candidates');
    }
}
