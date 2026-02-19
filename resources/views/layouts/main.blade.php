<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'FirstCommit')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            color: #333;
        }

        /* Header */
        header {
            background-color: #000;
            color: #fff;
            padding: 2rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #fff;
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .made-by {
            font-size: 0.9rem;
            color: #999;
            font-weight: 300;
        }

        /* Main Content */
        main {
            flex: 1;
            padding: 4rem 0;
        }

        .hero {
            text-align: center;
            padding: 4rem 0;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #000;
        }

        .hero .tagline {
            font-size: 1.3rem;
            color: #666;
            font-weight: 300;
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #000;
        }

        .about-section {
            background-color: #f8f9fa;
            padding: 4rem 0;
            margin-top: 2rem;
            margin-bottom: 6rem;
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .post-card {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-color: #000;
        }

        .post-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #000;
        }

        .post-meta {
            font-size: 0.9rem;
            color: #999;
            margin-bottom: 1rem;
        }

        .post-content {
            color: #666;
            line-height: 1.6;
        }

        .btn-read-more {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1.5rem;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-read-more:hover {
            background-color: #333;
            color: #fff;
            transform: translateX(5px);
        }

        /* Footer */
        footer {
            background-color: #000;
            color: #fff;
            padding: 3rem 0 1.5rem;
            margin-top: auto;
        }

        footer h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
        }

        footer p, footer a {
            color: #999;
            text-decoration: none;
            font-size: 0.95rem;
        }

        footer a:hover {
            color: #fff;
        }

        footer .social-links a {
            display: inline-block;
            margin-right: 1rem;
            padding: 0.5rem 1rem;
            border: 1px solid #333;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        footer .social-links a:hover {
            border-color: #fff;
            background-color: #111;
        }

        .copyright {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #222;
            color: #666;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero .tagline {
                font-size: 1.1rem;
            }

            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .made-by {
                text-align: center;
            }

            .nav-group {
                flex-direction: column;
                width: 100%;
            }

            .btn-create-post {
                width: 100%;
                text-align: center;
            }
        }
    </style>

    @yield('styles')
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">FirstCommit</a>
                <div class="nav-group">
                    <div class="made-by">made by Guilherme de Melo</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h5>FirstCommit</h5>
                    <p>Onde commit - sobre minha vida</p>
                </div>
                <div class="col-md-6">
                    <h5>Conecte-se</h5>
                    <div class="social-links">
                        <a href="#">GitHub</a>
                        <a href="#">LinkedIn</a>
                        <a href="#">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; {{ date('Y') }} FirstCommit. Made with ❤️ by Guilherme de Melo</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
</html>
