<style>
        footer {
            background-color: #fff;
            padding: 80px 10% 40px;
            border-top: 1px solid #eee;
            color: #1a1a1a;
        }

        .footer-container {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer-brand h2 {
            font-family: 'Playfair Display', serif;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-size: 1.4rem;
        }

        .footer-brand p {
            font-size: 0.9rem;
            color: #777;
            line-height: 1.8;
            max-width: 300px;
        }

        .footer-section h4 {
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 2px;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 12px;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: #777;
            font-size: 0.85rem;
            transition: 0.3s;
        }

        .footer-section ul li a:hover {
            color: #c5a059; /* Warna Gold */
            padding-left: 5px;
        }

        .footer-bottom {
            padding-top: 40px;
            border-top: 1px solid #f5f5f5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.75rem;
            color: #aaa;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .social-links a {
            margin-left: 20px;
            color: #1a1a1a;
            font-size: 1.1rem;
            transition: 0.3s;
        }

        .social-links a:hover {
            color: #c5a059;
        }

        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
            .footer-brand {
                grid-column: span 2;
            }
        }
    </style>

    <footer>
        <div class="footer-container">
            <div class="footer-brand">
                <h2>Kaos<span>Keren</span></h2>
                <p>Menyediakan koleksi pakaian esensial dengan kualitas premium dan desain yang tak lekang oleh waktu.</p>
            </div>

            <div class="footer-section">
                <h4>Belanja</h4>
                <ul>
                    <li><a href="#">Semua Produk</a></li>
                    <li><a href="#">Koleksi Terbaru</a></li>
                    <li><a href="#">Diskon</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Bantuan</h4>
                <ul>
                    <li><a href="#">Cara Order</a></li>
                    <li><a href="#">Pengiriman</a></li>
                    <li><a href="#">Kebijakan Pengembalian</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Kontak</h4>
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">WhatsApp</a></li>
                    <li><a href="#">Email Kami</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 KaosKeren Official Store. Seluruh Hak Cipta.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>