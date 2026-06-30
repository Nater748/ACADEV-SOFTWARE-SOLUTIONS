<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | Lecture Feedback System</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">
    <h2>Sign Up</h2>

    <!-- SIGNUP FORM -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- FULL NAME -->
        <input 
            type="text" 
            name="name" 
            placeholder="Full Name"
            value="{{ old('name') }}"
            required
        >

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

        <!-- CONFIRM PASSWORD -->
        <input 
            type="password" 
            name="password_confirmation" 
            placeholder="Confirm Password"
            required
        >

        <!-- ROLE -->
        <select name="role" required>
            <option value="">Select Role</option>
            <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student</option>
            <option value="lecturer" {{ old('role') == 'lecturer' ? 'selected' : '' }}>Lecturer</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>

        <!-- ERROR DISPLAY -->
        @if ($errors->any())
            <div class="error-box">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <button type="submit">Create Account</button>
    </form>

    <p>
        Already have an account?
        <a href="{{ route('login.form') }}">Login</a>
    </p>
</div>

</body>
</html>