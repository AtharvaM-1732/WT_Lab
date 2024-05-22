<?php
$user = array(
    array(
        "name" => "John Doe",
        "age" => 30,
        "email" => "john@example.com",
        "city" => "New york"
    ),
    array(
        "name" => "Jane Smith",
        "age" => 25,
        "email" => "jane@example.com",
        "city" => "Los Angeles"
    ),
    array(
        "name" => "Alice Johnson",
        "age" => 35,
        "email" => "alice@example.com",
        "city" => "Chicago"
    )
);
echo "User Information: <br>";
echo "----------------------------------------<br>";
foreach ($user as $value) {
    echo "Name: " . $value["name"] . "<br>";
    echo "Age: " . $value["age"] . "<br>";
    echo "Email: " . $value["email"] . "<br>";
    echo "City: " . $value["city"] . "<br>";
    echo "----------------------------------------<br>";
}
?>

