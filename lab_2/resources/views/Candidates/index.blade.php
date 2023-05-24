<div>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Year of birth</th>
            <th>Education</th>
            <th>Specialty</th>
            <th>Vacancies</th>
        </tr>

        @foreach ($candidates as $candidate)
            <tr>
                <td>{{$candidate->id}}</td>
                <td>{{$candidate->name}}</td>
                <td>{{$candidate->sex}}</td>
                <td>{{$candidate->year_of_birth}}</td>
                <td>{{$candidate->education}}</td>
                <td>{{$candidate->specialty}}</td>

                <td>
                    <a href="{{URL::to('vacancies') . '/'}}">list of vacancies</a>
                </td>

                <td>
                    <form action="{{URL::to('candidates') . '/' . $candidate->id}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit"> Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{URL::to('candidates') . '/' . $candidate->id . '/edit'}}">
                        Edit
                    </a>
                </td>
            </tr>

        @endforeach
    </table>
    <div>
        <a href="{{URL::to('candidates') . '/create'}}"> Create new candidate</a><br>
    </div>
</div>
