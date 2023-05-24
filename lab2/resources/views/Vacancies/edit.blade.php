<form action="{{URL::to('vacancies') .'/'. $vacancy->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div>
        <label> Company </label>
        <input name="company" type="text" value="{{$vacancy->company}}">
        <br>

        <label> Position </label>
        <input name="position" type="text" value="{{$vacancy->position}}">
        <br>

        <label> Salary </label>
        <input name="salary" type="number" min="0" value="{{$vacancy->salary}}">
        <br>

        <input name="candidate_id" type="hidden" value="{{$vacancy->candidate_id}}">

        <button type="submit">
            Edit
        </button>
    </div>
</form>
