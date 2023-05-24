<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Http\Requests\VacancyRequest;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('vacancies.index', ['vacancies' => $vacancies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $candidates = Candidate::all();
        return view('vacancies.create', ['candidates' => $candidates]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VacancyRequest $request)
    {
        $validated = $request->validated();
        $vacancy = Vacancy::create(
            $validated
        );
        return \redirect('vacancies');
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
        $vacancy = Vacancy::find($id);
        return view('vacancies.edit', ['vacancy' => $vacancy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VacancyRequest $request, string $id)
    {
        $validated = $request->validated();
        $vacancy = Vacancy::find($id);

        $vacancy->company = $validated['company'];
        $vacancy->position = $validated['position'];
        $vacancy->salary = $validated['salary'];
        $vacancy->candidate_id = $validated['candidate_id'];
        $vacancy->save();

        return \redirect('vacancies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();
        return \redirect('vacancies');
    }
}
