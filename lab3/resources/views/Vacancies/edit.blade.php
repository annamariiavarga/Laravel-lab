@extends('layouts.app')
@section('content')

<form action="{{URL::to('vacancies') .'/'. $vacancy->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="ml-3">

        <div class="my-2">
            <div class="mb-1">
                <label> Company </label>
            </div>
            <input name="company" type="text" value="{{$vacancy->company}}" class="border border-black rounded-2xl px-2">

            @error('company')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label> Position </label>
            </div>
            <input name="position" type="text" value="{{$vacancy->position}}" class="border border-black rounded-2xl px-2">

            @error('position')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label> Salary </label>
            </div>
            <input name="salary" type="number" min="0" value="{{$vacancy->salary}}" class="border border-black rounded-2xl px-2">

            @error('salary')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <input name="candidate_id" type="hidden" value="{{$vacancy->candidate_id}}">

        <button type="submit" class="px-2 border border-black rounded-2xl bg-blue-200">
            Edit
        </button>
    </div>
</form>

@endsection
