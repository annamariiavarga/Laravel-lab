<form action="{{URL::to('candidates') .'/'. $candidate->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div>
        <label> Name </label>
        <input name="name" type="text" value="{{$candidate->name}}">
        <br>

        <label> Sex </label>
        <input name="sex" type="text" value="{{$candidate->sex}}">
        <br>

        <label> Year of birth </label>
        <input name="year_of_birth" type="number" min="0" value="{{$candidate->year_of_birth}}">
        <br>

        <label> Education </label>
        <input name="education" type="text" value="{{$candidate->education}}">
        <br>

        <label> Specialty </label>
        <input name="specialty" type="text" value="{{$candidate->specialty}}">
        <br>

        <button type="submit">
            Edit
        </button>
    </div>
</form>
