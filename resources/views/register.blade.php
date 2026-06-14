<div>
    <h1>Laravel Requests lesson. Task 5 — Get all input + only specific fields:</h1>

    <form method="POST" action="/register">
        @csrf
        <div style="margin: 50px; 
                    display: flex; flex-direction: column; gap: 15px">
            <div>Name:
                <input type="text" name="name" required>
            </div>
            
            <div>Email:
                <input type="email" name="email" required>
            </div>
            
            <div>Password:
                <input type="password" name="password">
            </div>
            
            <div>Age:
                <input type="number" name="age">
            </div>
            
            <div>
                <button style="background: yellow">Submit</button>
            </div>
        </div>
    </form>
</div>