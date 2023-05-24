<div>
        <table border="1">
            <tr>
                <th>Code</th>
                <th>Company</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Candidate id</th>
            </tr>

            @foreach ($vacancies as $vacancy)
                <tr>
                    <td>{{$vacancy->id}}</td>
                    <td>{{$vacancy->company}}</td>
                    <td>{{$vacancy->position}}</td>
                    <td>{{$vacancy->salary}}</td>
                    <td>{{$vacancy->candidate_id}}</td>

                    <td>
                        <form action="{{URL::to('vacancies') . '/' . $vacancy->id}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit"> Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{URL::to('vacancies') . '/' . $vacancy->id . '/edit'}}">
                            Edit
                        </a>
                    </td>
                </tr>

            @endforeach
        </table>

    <div>
        <a href="{{URL::to('vacancies') . '/create'}}"> Create new vacancy</a><br>
    </div>
</div>
