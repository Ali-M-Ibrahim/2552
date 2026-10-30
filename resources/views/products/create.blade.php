@extends('layouts.front')

@section('page-css')
    <style>
        /* Card Container */
        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 550px;
        }

        h2 {
            color: #333333;
            margin-bottom: 8px;
            font-size: 28px;
        }

        .form-subtitle {
            color: #666666;
            font-size: 14px;
            margin-bottom: 30px;
        }

        /* Layout Management */
        .contact-form {
            display: grid;
            grid-gap: 20px;
        }

        .form-group {
            display: grid;
            grid-gap: 8px;
        }

        /* Form Controls (Inputs, Select, Textarea) */
        label {
            font-weight: 600;
            font-size: 14px;
            color: #444444;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            font-size: 16px;
            color: #333333;
            background-color: #fafafa;
            transition: all 0.3s ease;
            outline: none;
        }

        /* Inherit typography variables for textareas */
        textarea {
            resize: vertical;
        }

        /* Interactive States */
        input:focus,
        select:focus,
        textarea:focus {
            border-color: #007bff;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.15);
        }

        /* Validation Styling hints */
        input:user-invalid,
        textarea:user-invalid {
            border-color: #dc3545;
        }

        /* Customizing Dropdown Initial View */
        select:invalid {
            color: #888888;
        }

        /* Submit Button styling */
        .submit-btn {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .submit-btn:active {
            transform: scale(0.98);
        }

        /* Responsive adjustment for extra-small mobile interfaces */
        @media (max-width: 480px) {
            .form-container {
                padding: 24px;
            }
        }
    </style>
@endsection
@section('content1')
    <div class="form-container">
        <h2>Add Product</h2>

        <form action="{{ route('save-product') }}" method="POST" class="contact-form">
            @csrf
            <!-- Name Field -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Product name" required autocomplete="name">
            </div>

            <!-- Message Field -->
            <div class="form-group">
                <label for="message">Description</label>
                <textarea id="message" name="description" rows="5" placeholder="Product description?" required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="price" required autocomplete="name">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Save</button>

        </form>
    </div>
@endsection
