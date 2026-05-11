<?php require_once 'header.php'; ?>

<style>
    
    :root { --gold: #c5a059; --dark: #1a1a1a; }
    
    /* Hero Section */
    .hero { 
        height: 60vh; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        text-align: center; 
        background: #f1f1f1; 
        margin-bottom: 20px;
    }
    .hero h1 { font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 800; text-transform: uppercase; margin: 0; }
    .hero p { letter-spacing: 3px; color: var(--gold); font-weight: 600; }

    
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
    .banner-promo:hover img { transform: scale(1.03); }

    /* Judul Section */
    .section-title {
        text-align: center;
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        margin: 60px 0 40px;
        text-transform: uppercase;
    }
    .section-title::after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: var(--gold);
        margin: 15px auto;
    }

   
    .product-container { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
        gap: 30px; 
        padding: 0 10% 80px; 
    }

   
    .card { 
        position: relative; 
        overflow: hidden; 
        background: #fff; 
        padding-bottom: 25px;
        border: 1px solid #f0f0f0;
        text-align: center;
        transition: 0.4s;
    }
    .card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
    .card img { width: 100%; height: 400px; object-fit: cover; transition: 0.6s; }
    .card:hover img { transform: scale(1.08); filter: brightness(85%); }

    /* Nama & Harga */
    .card h3 { font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; margin: 20px 0 5px; font-weight: 700; }
    .card p { color: var(--gold); font-weight: 800; margin-bottom: 20px; }

    
    .card button { 
        width: 80%;
        padding: 15px; 
        background: var(--dark); 
        color: #fff;
        border: none; 
        cursor: pointer; 
        font-weight: 800; 
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: 0.4s;
        font-size: 0.7rem;
    }
    .card button:hover { 
        background: var(--gold);
        letter-spacing: 4px;
        box-shadow: 0 10px 20px rgba(197, 160, 89, 0.3);
    }
</style>

<section id="top" class="hero">
    <div>
        <p>NEW COLLECTION 2026</p>
        <h1>KAOSKEREN</h1>
        <h2>ig:@kaoskeren.id<h2>
        <h3>+62 812-3456-7891<h3>
    </div>
</section>

<section class="banner-promo">
    <img src="assets/image/banner.jpg" alt="Exclusive Collection Banner">
</section>

<h2 id="produk" class="section-title">Produk Terbaru</h2>

<div class="product-container">
    <?php if (!empty($products)) : ?>
        <?php foreach($products as $item) : ?>
            <div class="card">
                <img src="<?= $item['gambar']; ?>" alt="<?= $item['nama']; ?>">
                <h3><?= htmlspecialchars($item['nama']); ?></h3>
                <p><?= $item['harga']; ?></p>
                <button onclick="alert('Berhasil ditambah!')">Beli Sekarang</button>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p style="grid-column: 1/-1; text-align: center;">Tidak ada produk.</p>
    <?php endif; ?>
</div>
