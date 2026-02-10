<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Portal</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #111827;
            margin: 0;
        }

        .nav {
            background: #111827;
            color: #fff;
            padding: 0.5rem 1rem;
        }

        .nav .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1100px;
            margin: 0 auto;
        }

        .nav .brand {
            font-weight: 700;
            font-size: 1.125rem;
        }

        .nav a {
            color: #d1d5db;
            text-decoration: none;
            margin-left: 1rem;
            font-weight:600
        }

        .nav a.primary {
            color: #ffffff;
        }

        .container {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/students">Students</a>
        <a href="/students/create">Add Student</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>
