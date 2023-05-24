@extends('layouts.app')
@section('content')

<form action="{{URL::to('vacancies')}}" method="post">
    @csrf
    <div class="ml-3">

        <div class="my-2">
            <div class="mb-1">
                <label> Company </label>
            </div>
            <input name="company" type="text" class="border border-black rounded-2xl px-2">

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
            <input name="position" type="text" class="border border-black rounded-2xl px-2">

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
            <input name="salary" type="number" min="0" class="border border-black rounded-2xl px-2">

            @error('salary')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <select name="candidate_id" class="border border-black rounded-2xl px-2">
                <option value="">Select candidate id</option>
                @foreach ($candidates as $candidate)
                    <option>{{$candidate->id}}</option>
                @endforeach
            </select>

            @error('candidate_id')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="px-2 border border-black rounded-2xl bg-blue-200">
            Create
        </button>
    </div>
</form>

@endsection
