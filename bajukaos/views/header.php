<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaosKeren | Luxury Edition</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <style>
        /* Efek Scroll Halus */
        html { scroll-behavior: smooth; }

        /* Jarak agar section tidak tertutup header saat meluncur */
        #produk, #top { scroll-margin-top: 80px; }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Montserrat', sans-serif; background-color: #fdfdfd; }

        /* Header Navigation */
        header {
            background: #fff;
            padding: 20px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 999;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo h1 { font-family: 'Playfair Display', serif; font-size: 1.5rem; letter-spacing: 2px; text-transform: uppercase; }
        .logo span { color: #c5a059; }

        nav ul { list-style: none; display: flex; gap: 30px; }
        nav ul li a { 
            text-decoration: none; 
            color: #1a1a1a; 
            font-weight: 700; 
            font-size: 0.8rem; 
            text-transform: uppercase; 
            letter-spacing: 1px;
            transition: 0.3s;
        }

        nav ul li a:hover { color: #c5a059; }

        /* CSS KHUSUS BANNER AGAR MUNCUL MEWAH */
        .banner-promo {
            width: 80%;
            margin: 40px auto;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        .banner-promo img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.8s ease;
        }
        .banner-promo:hover img {
            transform: scale(1.03); /* Efek zoom halus */
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <a href="index.php" style="text-decoration: none; color: inherit;">
            <h1>Kaos<span>Keren</span></h1>
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="#top">Home</a></li>
            <li><a href="#produk">Produk</a></li>
            <li><a href="#contact.php">Kontak</a></li>
        </ul>
    </nav>
</header>

<div id="top"></div>