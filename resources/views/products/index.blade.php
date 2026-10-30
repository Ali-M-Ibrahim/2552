@extends('layouts.front')

@section('page-css')
    <style>
        /* Core Layout & Reset */
        .table-container {
            width: 100%;
            overflow-x: auto;
            /* Enables horizontal scroll on small viewports */
            margin: 1.5rem 0;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            /* Collapses cell borders into clean dividers */
            table-layout: fixed;
            /* Fixes unexpected cell stretching */
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            font-size: 0.95rem;
            color: #1e293b;
        }

        /* Caption Rules */
        caption {
            padding: 0.75rem;
            font-weight: 600;
            text-align: left;
            background-color: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
        }

        /* Headers & Data Cells */
        th,
        td {
            padding: 1rem 1.25rem;
            text-align: left;
        }

        th {
            background-color: #f1f5f9;
            color: #475569;
            font-weight: 600;
            position: sticky;
            /* Keeps the header fixed during long vertical scrolls */
            top: 0;
            border-bottom: 2px solid #cbd5e1;
        }

        /* Row Separators & Alternating Colors */
        tbody tr {
            border-bottom: 1px solid #e2e8f0;
            transition: background-color 0.2s ease;
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        tbody tr:nth-child(even) {
            background-color: #f8fafc;
            /* Zebra striping effect */
        }

        tbody tr:hover {
            background-color: #f1f5f9;
            /* Row highlight visual hint */
        }

        /* Utility alignments */
        .text-end {
            text-align: right;
        }

        /* Optional Badges/Status Styling */
        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .badge-success {
            background-color: #dcfce7;
            color: #166534;
        }

        .badge-warning {
            background-color: #fef9c3;
            color: #854d0e;
        }

        .badge-muted {
            background-color: #f1f5f9;
            color: #475569;
        }
    </style>
@endsection

@section('content1')
    <div class="table-container" role="region" aria-labelledby="table-caption" tabindex="0">
        <a href="{{ route('create-product') }}">Create Product </a>
        <table>
            <caption id="table-caption">{{ $title }}</caption>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="text-end">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $obj)
                    <tr>
                        <td>{{ $obj->id }}</td>
                        <td> {{ $obj->name }}</td>
                        <td> {{ $obj->description }}</td>
                        <td> {{ $obj->price }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
