<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Silent Forest | Inkwell Books</title>
    <style>
        :root {
            --primary: #c9a050; /* Gold */
            --dark: #1a1a1a;
            --light: #f4f4f4;
            --grey: #666;
            --border: #e0e0e0;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: white;
            color: var(--dark);
            line-height: 1.6;
        }

        /* --- Minimal Navbar --- */
        nav {
            background: var(--dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 10%;
        }

        .logo {
            color: var(--primary);
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .back-link {
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .back-link:hover {
            color: var(--primary);
        }

        /* --- Book Detail Layout --- */
        .main-container {
            max-width: 1100px;
            margin: 4rem auto;
            padding: 0 5%;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 4rem;
            align-items: start;
        }

        /* Left Side: Image */
        .book-preview {
            position: sticky;
            top: 100px;
        }

        .book-cover-large {
            width: 100%;
            aspect-ratio: 2/3;
            background: #2c3e50; /* Matches the placeholder from landing page */
            border-radius: 8px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-style: italic;
        }

        /* Right Side: Content */
        .book-info h1 {
            font-size: 2.8rem;
            line-height: 1.1;
            margin-bottom: 0.5rem;
        }

        .author-name {
            font-size: 1.2rem;
            color: var(--grey);
            margin-bottom: 1.5rem;
        }

        .price-tag {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 2rem;
            display: block;
        }

        .description {
            font-size: 1.05rem;
            color: #444;
            margin-bottom: 2rem;
            border-top: 1px solid var(--border);
            padding-top: 2rem;
        }

        .meta-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 2.5rem;
            font-size: 0.9rem;
        }

        .meta-item span {
            display: block;
            color: var(--grey);
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 1px;
            margin-bottom: 0.2rem;
        }

        /* Actions */
        .actions {
            display: flex;
            gap: 1rem;
        }

        .btn-main {
            background: var(--dark);
            color: white;
            padding: 1rem 2.5rem;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            flex: 2;
            text-align: center;
            transition: var(--transition);
        }

        .btn-main:hover {
            background: var(--primary);
            color: var(--dark);
        }

        .btn-outline {
            border: 2px solid var(--dark);
            color: var(--dark);
            padding: 1rem;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            flex: 1;
            text-align: center;
            transition: var(--transition);
        }

        .btn-outline:hover {
            background: var(--light);
        }

        /* Responsive */
        @media (max-width: 850px) {
            .main-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .book-preview {
                position: relative;
                top: 0;
                max-width: 400px;
                margin: 0 auto;
            }
            .book-info h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>

    <nav>
        <a href="index.html" class="logo">INKWELL.</a>
        <a href="index.html" class="back-link">← Back to Gallery</a>
    </nav>

    <main class="main-container">
        <div class="book-preview">
            <div class="book-cover-large">
                {{ $book_specified -> Book_name }}
            </div>
        </div>

        <section class="book-info">
            <h1>{{ $book_specified -> Book_name }}</h1>
            <p class="author-name">{{ $book_specified -> Author }}</p>
            <span class="price-tag">${{ $book_specified -> price }}</span>

            <div class="description">
                {{ $book_specified -> Book_review }}
            </div>

            <div class="meta-grid">
                <div class="meta-item">
                    <span>Published</span>
                    <strong>{{ $book_specified -> created_at }}</strong>
                </div>
                <div class="meta-item">
                    <span>Pages</span>
                    <strong>{{ $book_specified -> pages }} Pages</strong>
                </div>
                <div class="meta-item">
                    <span>Language</span>
                    <strong>English</strong>
                </div>
                <div class="meta-item">
                    <span>Format</span>
                    <strong>Hardcover</strong>
                </div>
            </div>

            <div class="actions">
                <a href="#" class="btn-main">Add to Cart</a>
                <a href="#" class="btn-outline">Wishlist</a>
            </div>
        </section>
    </main>

</body>
</html>
