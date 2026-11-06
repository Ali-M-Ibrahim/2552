<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar and Table</title>
    <style>

        :root {
            --bg-color: #f4f7f6;
            --card-bg: #ffffff;
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --text-color: #1f2937;
            --text-muted: #6b7280;
            --border-color: #d1d5db;
            --focus-ring: rgba(79, 70, 229, 0.2);
            --radius: 8px;
            --transition: all 0.2s ease-in-out;
        }

        /* Base Reset & Core Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
            line-height: 1.6;
        }

        /* Navigation Bar Styles */
        .navbar {
            background-color: #1e293b;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar-menu {
            display: flex;
            list-style: none;
        }

        .navbar-item a {
            color: #cbd5e1;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: color 0.3s, background-color 0.3s;
            border-radius: 4px;
        }

        .navbar-item a:hover,
        .navbar-item a.active {
            color: #fff;
            background-color: #334155;
        }

        /* Main Layout Container */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .page-title {
            margin-bottom: 1.5rem;
            color: #0f172a;
        }

        /* Table Container & Layout */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .data-table th,
        .data-table td {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .data-table th {
            background-color: #f8fafc;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.05em;
        }

        .data-table tbody tr:last-child td {
            border-bottom: none;
        }

        .data-table tbody tr:hover {
            background-color: #f8fafc;
        }

        /* Badge Styling for Table Data */
        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .badge-success {
            background-color: #dcfce7;
            color: #15803d;
        }

        .badge-pending {
            background-color: #fef9c3;
            color: #a16207;
        }

        /* Mobile Breakpoints */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .navbar-menu {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
            }
        }


        /* 2. Form Container */
        .form-container {
            background-color: var(--card-bg);
            padding: 40px;
            border-radius: var(--radius);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 550px;
        }

        .form-container h2 {
            margin-bottom: 8px;
            font-size: 1.75rem;
            font-weight: 700;
        }

        .form-container p {
            color: var(--text-muted);
            margin-bottom: 24px;
            font-size: 0.95rem;
        }

        /* 3. Form Layout via Modern CSS Grid */
        .contact-form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        /* Group labels and inputs */
        .form-group {
            display: grid;
            gap: 8px;
        }

        /* 4. Labels and Inputs Styling */
        .form-group label {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-color);
        }

        /* Standardize inherited fonts across all form fields */
        .form-group input,
        .form-group select,
        .form-group textarea {
            font: inherit;
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            background-color: #fff;
            color: var(--text-color);
            transition: var(--transition);
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Focus & Interactive States */
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px var(--focus-ring);
        }

        /* Checkbox wrapper styling */
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-top: 4px;
        }

        .checkbox-group input[type="checkbox"] {
            width: auto;
            margin-top: 4px;
            cursor: pointer;
        }

        .checkbox-group label {
            font-weight: 400;
            font-size: 0.87rem;
            color: var(--text-muted);
            cursor: pointer;
        }

        /* 5. Submit Button Styling */
        .submit-btn {
            font: inherit;
            font-weight: 600;
            background-color: var(--primary-color);
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: var(--radius);
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: var(--primary-hover);
        }

        .submit-btn:active {
            transform: scale(0.98);
        }

        .is-invalid{
            color:red;
        }

        /* Category Page Header */
        .category-header {
            background-color: #2c3e50;
            color: #fff;
            padding: 2rem;
            text-align: center;
        }

        .category-header h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        /* Main Grid Layout for Category Items */
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        /* Individual Card / Item */
        .category-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .category-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 1rem;
        }

        .card-body h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .card-body p {
            font-size: 0.95rem;
            color: #666;
        }



    </style>
</head>
<body>

<!-- Navbar Section -->
<nav class="navbar">
    <a href="#" class="navbar-brand">Dashboard</a>
    <ul class="navbar-menu">
        <li class="navbar-item"><a href="{{route('list-category')}}" class="active">Home</a></li>
        <li class="navbar-item"><a href="{{route('add-category')}}">Add Category</a></li>
        <li class="navbar-item"><a href="{{route('item.index')}}">Items</a></li>
        <li class="navbar-item"><a href="{{route('item.create')}}">Create Item</a></li>
    </ul>
</nav>

<!-- Main Content Block -->
<div class="container">

    @yield('content')

</div>

</body>
</html>
