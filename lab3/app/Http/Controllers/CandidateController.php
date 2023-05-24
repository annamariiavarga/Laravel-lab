<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Http\Requests\CandidateRequest;

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
    public function store(CandidateRequest $request)
    {
        $validated = $request->validated();
        $candidate = Candidate::create(
            $validated
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
    public function update(CandidateRequest $request, string $id)
    {
        $validated = $request->validated();
        $candidate = Candidate::find($id);

        $candidate->name = $validated->input['name'];
        $candidate->sex = $validated->input['sex'];
        $candidate->year_of_birth = $validated->input['year_of_birth'];
        $candidate->education = $validated->input['education'];
        $candidate->specialty = $validated->input['specialty'];
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
