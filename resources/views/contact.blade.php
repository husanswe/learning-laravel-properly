<div>
    <h1>Contact Form</h1>
</div>

<form method="POST" action="/contact">
    @csrf
    <input type="text" name="name">
    <br>
    <input type="email" name="email">
    <div>
        <button>Submit</button>
    </div>
</form>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color:red">{{ $error }}</p>
    @endforeach
@endif