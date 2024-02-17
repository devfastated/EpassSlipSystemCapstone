<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ env('APP_NAME') }} </title>
</head>

<body>

    <h1>Home</h1>
    <nav>
        <a href="/counter" wire:navigate>Counter</a>

    </nav>
    <center>


    <h1 >
        <livewire:counter>
    </h1>
</center>
</body>

</html>
