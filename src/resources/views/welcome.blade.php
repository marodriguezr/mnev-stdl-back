<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>

    <div class="mw6 center pa3 sans-serif">

        <h1 class="mb4">Users</h1>



        @foreach($users as $user)

        <div class="pa2 mb3 striped--near-white">

            <header class="b mb2">{{ $user->name }}</header>

            <div class="pl2">

                <p class="mb2">id: {{ $user->id }}</p>

                <p class="mb2">email: {{ $user->email }}</p>

                <p class="mb2">details: {{ $user->remember_token }}</p>

            </div>

        </div>

        @endforeach

    </div>

</body>

</html>