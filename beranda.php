<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            display: flex;
        }

        .sidebar {
            background-color: #f1f1f1;
            flex: 0.3;
            padding: 20px;
        }

        .content {
            flex: 0.7;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat datang di Simperpus</h1>
    </header>
    <div class="container">
        <div class="sidebar">
            <h2>Menu Sidebar</h2>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Kontak</a></li>
                <!-- Tambahkan menu-sidebar lain sesuai kebutuhan -->
            </ul>
        </div>
        <div class="content">
            <h2>Selamat datang di halaman beranda</h2>
            <p>Ini adalah konten halaman beranda. Anda dapat menambahkan konten lainnya di bagian ini.</p>
        </div>
    </div>
</body>
</html>
