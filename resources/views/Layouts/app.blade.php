<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
    }
    .hero-section {
        background: linear-gradient(90deg, #4e73df 0%, #1cc88a 100%);
        color: #fff;
        border-radius: 1rem;
        padding: 3rem 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    }
    .card-mk {
        border-radius: 1rem;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        transition: transform 0.2s;
    }
    .card-mk:hover {
        transform: translateY(-6px) scale(1.03);
        box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    }
    </style>
</head>
<body>
    @include('partials.navbar')
    <main class="py-4">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>