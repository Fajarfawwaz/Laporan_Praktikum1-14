<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> | Portal Berita Fajar</title>
    
    <!-- Google Fonts & Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Main Style -->
    <link rel="stylesheet" href="<?= base_url('style.css');?>">
    
    <style>
        :root {
            --primary: #4285f4;
            --dark: #1a1a1a;
            --light: #ffffff;
            --gray: #f4f4f9;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--gray);
            margin: 0;
            color: #333;
        }

        /* Glassmorphism Header */
        header {
            background: rgba(66, 133, 244, 0.9);
            backdrop-filter: blur(10px);
            color: white;
            padding: 25px 5%;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            background: var(--dark);
            padding: 0 5%;
            display: flex;
            align-items: center;
            height: 50px;
        }

        nav a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            padding: 0 15px;
            font-size: 14px;
            transition: 0.3s;
            line-height: 50px;
        }

        nav a:hover {
            background: rgba(255,255,255,0.1);
            color: var(--light);
        }

        #container {
            max-width: 1200px;
            margin: 30px auto;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
        }

        #wrapper {
            display: flex;
            gap: 30px;
            padding: 30px;
        }

        #main {
            flex: 3;
            min-height: 500px;
        }

        /* Modern Sidebar */
        #sidebar {
            flex: 1;
            background: #fff;
            padding: 20px;
            border-left: 1px solid #eee;
        }

        .sidebar-title {
            font-weight: 700;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        footer {
            background: var(--dark);
            color: #aaa;
            padding: 40px 20px;
            text-align: center;
            font-size: 13px;
        }

        /* Button Modern */
        .btn-modern {
            background: var(--primary);
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <header>
        <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: auto;">
            <h1 style="margin: 0; font-weight: 700; letter-spacing: -1px;">Fajar<span style="color: #ffca28;">News</span></h1>
            <div class="user-status">
                <?php if (session()->get('logged_in')): ?>
                    <span style="font-size: 13px; opacity: 0.9;">Welcome back, <strong>Admin</strong></span>
                <?php endif; ?>
            </div>
        </div>
    </header>
    
    <nav>
        <a href="<?= base_url('/'); ?>"><i class="fas fa-home"></i> Home</a>
        <a href="<?= base_url('/artikel'); ?>"><i class="fas fa-newspaper"></i> Artikel</a>
        <a href="<?= base_url('/ajax'); ?>"><i class="fas fa-bolt"></i> AJAX</a>
        <a href="<?= base_url('/about'); ?>">About</a>
        
        <div style="margin-left: auto; display: flex;">
            <?php if (session()->get('logged_in')): ?>
                <a href="<?= base_url('/admin/artikel'); ?>" style="color: #ffca28;">Dashboard</a>
                <a href="<?= base_url('/user/logout'); ?>" style="color: #ff4d4d;"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <?php else: ?>
                <a href="<?= base_url('/user/login'); ?>"><i class="fas fa-user-lock"></i> Login Admin</a>
            <?php endif; ?>
        </div>
    </nav>

    <div id="container">
        <section id="wrapper">
            <main id="main">
                <?= $this->renderSection('content'); ?>
            </main>

            <aside id="sidebar">
                <div class="sidebar-title">ARTIKEL TERBARU</div>
                <?= view_cell('App\Cells\ArtikelTerkini::render'); ?>
            </aside>
        </section>

        <footer>
            <p>&copy; 2026 Portal Berita Fajar - Universitas Pelita Bangsa</p>
            <p style="font-size: 11px; opacity: 0.6;">Fajar Fawwaz Atallah | NIM: 312410357 | Kelas: TI.24.A4</p>
        </footer>
    </div>

    <!-- Pustaka jQuery Lokal (Pastikan file sudah ada di public/assets/js/) -->
    <script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
    
    <!-- Script tambahan per halaman (AJAX Code akan masuk ke sini) -->
    <?= $this->renderSection('scripts'); ?>
</body>
</html>