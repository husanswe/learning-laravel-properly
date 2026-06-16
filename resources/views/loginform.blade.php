<div>
    <h1>Task 3 — Redirect with flash data</h1>

    @if (session('error'))
        <p style="color:red"> {{ session('error') }} </p>
    @endif
    <div>
        <form method="post" action="/login">
            @csrf
            <label>Username:</label>
            <input type="text" name="username">
            <br><br>
            <button>Submit</button>
        </form>
    </div>
</div>