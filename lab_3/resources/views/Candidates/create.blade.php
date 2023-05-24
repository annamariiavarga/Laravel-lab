@extends('layouts.app')
@section('content')

<form action="{{URL::to('candidates')}}" method="post">
    @csrf
    <div class="ml-3">
        <div class="my-2">
            <div class="mb-1">
                <label> Name </label>
            </div>
            <input name="name" type="text" class="border border-black rounded-2xl px-2">

            @error('name')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror

        </div>

        <div class="my-2">
            <div class="mb-1">
                <label class="mr-2"> Sex </label>
            </div>
            <input name="sex" type="text" class="border border-black rounded-2xl px-2">

            @error('sex')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label class="mr-2"> Year of birth </label>
            </div>
            <input name="year_of_birth" type="number" min="0" class="border border-black rounded-2xl px-2">

            @error('year_of_birth')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label class="mr-2"> Education </label>
            </div>
            <input name="education" type="text" class="border border-black rounded-2xl px-2">

            @error('education')
            <div class="text-xs text-red-700">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="my-2">
            <div class="mb-1">
                <label class="mr-2"> Specialty </label>
            </div>
            <input name="specialty" type="text" class="border border-black rounded-2xl px-2">

            @error('specialty')
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
