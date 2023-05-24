@extends('layouts.app')
@section('content')

<div class="ml-3">
    <table class="border border-black">
        <tr class="border border-black color bg-gray-100">
            <th class="border border-black px-2">Code</th>
            <th class="border border-black px-2">Name</th>
            <th class="border border-black px-2">Sex</th>
            <th class="border border-black px-2">Year of birth</th>
            <th class="border border-black px-2">Education</th>
            <th class="border border-black px-2">Specialty</th>
            <th class="border border-black px-2">Vacancies</th>
        </tr>

        @foreach ($candidates as $candidate)
            <tr class="border border-black">
                <td class="border border-black px-2">{{$candidate->id}}</td>
                <td class="border border-black px-2">{{$candidate->name}}</td>
                <td class="border border-black px-2">{{$candidate->sex}}</td>
                <td class="border border-black px-2">{{$candidate->year_of_birth}}</td>
                <td class="border border-black px-2">{{$candidate->education}}</td>
                <td class="border border-black px-2">{{$candidate->specialty}}</td>
                <td class="border border-black px-2">
                    <a href="{{URL::to('vacancies') . '/'}}" class="px-2 border border-black rounded-2xl bg-blue-300">list of vacancies</a>
                </td>
                <td class="border border-black px-2">
                    <form action="{{URL::to('candidates') . '/' . $candidate->id}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="px-2 border border-black rounded-2xl bg-blue-300"> Delete</button>
                    </form>
                </td>
                <td class="border border-black px-2">
                    <a href="{{URL::to('candidates') . '/' . $candidate->id . '/edit'}}"
                       class="px-2 border border-black rounded-2xl bg-blue-300">
                        Edit
                    </a>
                </td>
            </tr>

        @endforeach
    </table>
    <div class="mt-2">
        <a href="{{URL::to('candidates') . '/create'}}" class="px-2 border border-black rounded-2xl bg-blue-300"> Create new candidate</a><br>
    </div>
</div>

@endsection
