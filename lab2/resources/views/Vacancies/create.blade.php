<form action="{{URL::to('vacancies')}}" method="post">
    @csrf
    <div>
        <label> Company </label>
        <input name="company" type="text">
        <br>

        <label> Position </label>
        <input name="position" type="text">
        <br>

        <label> Salary </label>
        <input name="salary" type="number" min="0">
        <br>

        <select name="candidate_id">
            <option value="">Select candidate id</option>
            @foreach ($candidates as $candidate)
                <option>{{$candidate->id}}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">
            Create
        </button>
    </div>
</form>
