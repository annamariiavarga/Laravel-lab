@extends('layouts.app')
@section('content')

<div class="ml-3">
    <table class="border border-black">
        <tr class="border border-black color bg-gray-100">
            <th class="border border-black px-2">Code</th>
            <th class="border border-black px-2">Company</th>
            <th class="border border-black px-2">Position</th>
            <th class="border border-black px-2">Salary</th>
            <th class="border border-black px-2">Candidate id</th>
        </tr>

        @foreach ($vacancies as $vacancy)
            <tr class="border border-black">
                <td class="border border-black px-2">{{$vacancy->id}}</td>
                <td class="border border-black px-2">{{$vacancy->company}}</td>
                <td class="border border-black px-2">{{$vacancy->position}}</td>
                <td class="border border-black px-2">{{$vacancy->salary}}</td>
                <td class="border border-black px-2">{{$vacancy->candidate_id}}</td>

                <td class="border border-black px-2">
                    <form action="{{URL::to('vacancies') . '/' . $vacancy->id}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="px-2 border border-black rounded-2xl bg-blue-300"> Delete</button>
                    </form>
                </td>

                <td class="border border-black px-2">
                    <a href="{{URL::to('vacancies') . '/' . $vacancy->id . '/edit'}}" class="px-2 border border-black rounded-2xl bg-blue-300">
                        Edit
                    </a>
                </td>
            </tr>

            @endforeach
        </table>

    <div class="mt-2">
        <a href="{{URL::to('vacancies') . '/create'}}" class="px-2 border border-black rounded-2xl bg-blue-300"> Create new vacancy</a><br>
    </div>
</div>

@endsection
