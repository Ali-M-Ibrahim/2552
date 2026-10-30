<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar container setup */
        .navbar {
            display: flex;
            justify-content: space-between; /* Pushes logo to the left, links to the right */
            align-items: center;            /* Centers items vertically */
            background-color: #1a1a1a;      /* Dark background */
            padding: 20px 40px;
            position: sticky;               /* Keeps the navbar at the top while scrolling */
            top: 0;
            z-index: 1000;
        }

        /* Logo styling */
        .logo a {
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        /* Navigation links container */
        .nav-links {
            display: flex;
            list-style: none;               /* Removes bullet points */
            gap: 25px;                      /* Spaces out the links */
        }

        /* Individual links */
        .nav-links a {
            color: #cccccc;
            text-decoration: none;          /* Removes underline */
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;    /* Smooth color transition on hover */
        }

        /* Link hover state */
        .nav-links a:hover {
            color: #00adb5;                 /* Accent color on hover */
        }

        /* Mobile Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;     /* Stacks logo and menu vertically on small screens */
                gap: 15px;
                padding: 15px;
            }

            .nav-links {
                gap: 15px;
            }
        }

    </style>

    @yield('page-css')

</head>
<body>

@yield('content2')

<nav class="navbar">
    <!-- Logo -->
    <div class="logo"><a href="#">Products</a></div>

    <!-- Navigation Links -->
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

@yield('content1')



</body>
</html>
