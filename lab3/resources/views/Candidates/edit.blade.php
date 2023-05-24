@extends('layouts.app')
@section('content')

<form action="{{URL::to('candidates') .'/'. $candidate->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="ml-3">
        <div class="my-2">
            <div class="mb-1">
                <label> Name </label>
            </div>
            <input name="name" type="text" value="{{$candidate->name}}" class="border border-black rounded-2xl px-2">

            @error('name')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label> Sex </label>
            </div>
            <input name="sex" type="text" value="{{$candidate->sex}}" class="border border-black rounded-2xl px-2">

            @error('sex')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label> Year of birth </label>
            </div>
            <input name="year_of_birth" type="number" min="0" value="{{$candidate->year_of_birth}}" class="border border-black rounded-2xl px-2">

            @error('year_of_birth')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label> Education </label>
            </div>
            <input name="education" type="text" value="{{$candidate->education}}" class="border border-black rounded-2xl px-2">

            @error('education')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label> Specialty </label>
            </div>
            <input name="specialty" type="text" value="{{$candidate->specialty}}" class="border border-black rounded-2xl px-2">

            @error('specialty')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>
        <br>

        <button type="submit" class="px-2 border border-black rounded-2xl bg-blue-200">
            Edit
        </button>
    </div>
</form>

@endsection
