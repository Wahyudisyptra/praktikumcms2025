<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #4e73df 0%, #1cc88a 100%);
        font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
    }
    .main-content-area {
        background: rgba(255,255,255,0.95);
        border-radius: 1.5rem;
        box-shadow: 0 8px 32px rgba(0,0,0,0.12);
        padding: 2rem 1.5rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .hero-section {
        background: linear-gradient(90deg, #4e73df 0%, #1cc88a 100%);
        color: #fff;
        border-radius: 1.5rem;
        padding: 3rem 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 24px rgba(0,0,0,0.10);
    }
    .card-mk, .card-dashboard {
        border-radius: 1.2rem;
        box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .card-mk:hover, .card-dashboard:hover {
        transform: translateY(-6px) scale(1.04);
        box-shadow: 0 8px 32px rgba(0,0,0,0.16);
        z-index: 2;
    }
    </style>
</head>
<body>
    @include('partials.navbar')
    <main class="py-4">
        <div class="container main-content-area">
            @yield('content')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>