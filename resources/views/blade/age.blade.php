<h1>Task 2. Conditionals</h1>

@if ($age < 13)
    You're a child.
@elseif ($age >= 13 && $age <= 17)
    You're a teen.
@else
    You're an adult.
@endif