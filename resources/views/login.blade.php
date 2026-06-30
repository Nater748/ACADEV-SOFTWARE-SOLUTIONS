<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Lecture Feedback System</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <!-- LOGIN FORM -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- EMAIL -->
        <input 
            type="email" 
            name="email" 
            placeholder="Email"
            value="{{ old('email') }}"
            required
        >

        <!-- PASSWORD -->
        <input 
            type="password" 
            name="password" 
            placeholder="Password"
            required
        >

        <!-- ERROR MESSAGE -->
        @if ($errors->any())
            <div class="error-box">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <button type="submit">Login</button>
    </form>

    <p>
        Don't have an account?
        <a href="{{ route('register') }}">Sign up</a>
    </p>
</div>

</body>
</html>