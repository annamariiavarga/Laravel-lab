<form action="{{URL::to('candidates')}}" method="post">
    @csrf
    <div>
        <label> Name </label>
        <input name="name" type="text">
        <br>

        <label> Sex </label>
        <input name="sex" type="text">
        <br>

        <label> Year of birth </label>
        <input name="year_of_birth" type="number" min="0">
        <br>

        <label> Education </label>
        <input name="education" type="text">
        <br>

        <label> Specialty </label>
        <input name="specialty" type="text">
        <br>

        <button type="submit">
            Create
        </button>
    </div>
</form>
