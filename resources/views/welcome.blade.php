<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Inkwell | Your Next Great Read</title>
    <style>
        /* CSS Variables for easy customization */
        :root {
            --primary: #c9a050; /* Gold */
            --dark: #1a1a1a;
            --light: #f4f4f4;
            --grey: #333;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        /* --- Navbar --- */
        nav {
            background: var(--dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 10%;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* --- Hero Section --- */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 2rem;
        }

        .btn {
            background: var(--primary);
            color: var(--dark);
            padding: 0.8rem 2rem;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: var(--transition);
        }

        .btn:hover {
            background: #b08b40;
            transform: translateY(-3px);
        }

        /* --- Book Cards Section --- */
        .container {
            padding: 4rem 10%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2rem;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .book-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transition: var(--transition);
            border: 1px solid #eee;
        }

        .book-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .butn{
            text-decoration: none;
            color: white;
            background: #b08b40;
            border: 3px solid black
        }
        .book-img {
            height: 350px;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            font-style: italic;
            /* Placeholder background colors for style */
        }

        .card-content {
            padding: 1.5rem;
        }

        .book-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .author {
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .price {
            color: var(--primary);
            font-weight: bold;
            font-size: 1.1rem;
        }

        /* --- Footer --- */
        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 10% 1rem;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
            text-align: left;
        }

        .footer-section h3 {
            color: var(--primary);
            margin-bottom: 1.2rem;
        }

        .footer-section p, .footer-section a {
            color: #bbb;
            text-decoration: none;
            font-size: 0.85rem;
            display: block;
            margin-bottom: 0.5rem;
        }

        .copyright {
            border-top: 1px solid var(--grey);
            padding-top: 1.5rem;
            font-size: 0.8rem;
            color: #777;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hero h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <nav>
        <a href="#" class="logo">INKWELL.</a>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Browse</a></li>
            <li><a href="#">New Releases</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <header class="hero">
        <h1>Escape into a Story</h1>
        <p>Discover thousands of books, from timeless classics to modern masterpieces. Your next adventure is just a page turn away.</p>
        <a href="#books" class="btn">Explore Books</a>
    </header>

    <section class="container" id="books">
        <h2 class="section-title">Featured Collections</h2>
        <div class="book-grid">
            @if($allBooks -> isNotEmpty())
            @foreach ($allBooks as  $book)
                <div class="book-card">
                <div class="book-img" style="background: #2c3e50; color: white;">Cover Art {{$book -> id}}</div>
                <div class="card-content">
                    <h3 class="book-title">{{ $book -> Book_name }}</h3>
                    <p class="author">By {{ $book -> Author }}</p>
                    <p class="price">${{ $book -> price }}</p>
                    <a href="{{ route('details' , $book -> id) }}" class="butn">Preview</a>
                </div>
            </div>
            @endforeach
            @else
            <div>no books</div>
            @endif


        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>We are a community of book lovers dedicated to bringing the best literature to your doorstep.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#">Gift Cards</a>
                <a href="#">Shipping Policy</a>
                <a href="#">Return Center</a>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: hello@inkwellbooks.com</p>
                <p>Phone: (555) 123-4567</p>
            </div>
        </div>
        <div class="copyright">
            &copy; 2026 Inkwell Books. All rights reserved.
        </div>
    </footer>

</body>
</html>
