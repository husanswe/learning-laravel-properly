<div>
    <h1>Task 6 — Input as JSON with validation:</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST" action="/profile">
        @csrf
        <h1>Profile Form</h1>

        <div style="margin: 50px; 
                    display: flex; flex-direction: column; gap: 15px">
            <div>Name:
                <input type="text" name="name">
            </div>
            
            <div>Age:
                <input type="number" name="age">
            </div>
            
            <div>
                <button style="background: rgb(77, 230, 77)">Submit</button>
            </div>
        </div>
    </form>
</div>

