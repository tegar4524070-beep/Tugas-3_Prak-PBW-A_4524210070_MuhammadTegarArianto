```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KholilWD969</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background:
                radial-gradient(circle at top, #312e81 0%, #111827 35%, #020617 75%);
            color: #f8fafc;
            min-height: 100vh;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 8%;
            background: rgba(2, 6, 23, .9);
            border-bottom: 1px solid rgba(139, 92, 246, .3);
            position: sticky;
            top: 0;
            z-index: 10;
            backdrop-filter: blur(12px);
        }

        .logo {
            font-size: 22px;
            font-weight: 800;
            color: #a78bfa;
            letter-spacing: .5px;
        }

        nav a {
            margin-left: 25px;
            color: #cbd5e1;
            text-decoration: none;
            font-size: 14px;
            transition: .2s;
        }

        nav a:hover {
            color: #a78bfa;
        }

        .hero {
            max-width: 1000px;
            margin: 0 auto;
            padding: 100px 20px 70px;
            text-align: center;
        }

        .badge {
            display: inline-block;
            padding: 8px 14px;
            margin-bottom: 20px;
            border: 1px solid rgba(167, 139, 250, .4);
            border-radius: 999px;
            color: #c4b5fd;
            background: rgba(124, 58, 237, .12);
            font-size: 13px;
        }

        .hero h1 {
            font-size: clamp(40px, 7vw, 72px);
            line-height: 1.05;
            margin-bottom: 22px;
            color: white;
        }

        .hero h1 span {
            color: #a78bfa;
            text-shadow: 0 0 30px rgba(139, 92, 246, .5);
        }

        .hero p {
            max-width: 650px;
            margin: 0 auto 32px;
            line-height: 1.7;
            color: #94a3b8;
            font-size: 17px;
        }

        .buttons a {
            display: inline-block;
            padding: 13px 24px;
            margin: 5px;
            border-radius: 9px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: .2s;
        }

        .primary {
            background: #7c3aed;
            color: white;
            box-shadow: 0 0 25px rgba(124, 58, 237, .3);
        }

        .primary:hover {
            background: #8b5cf6;
            transform: translateY(-2px);
        }

        .secondary {
            border: 1px solid #475569;
            color: #cbd5e1;
            background: rgba(15, 23, 42, .7);
        }

        .secondary:hover {
            background: #1e293b;
        }

        .features {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px 20px 90px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: rgba(15, 23, 42, .75);
            padding: 28px;
            border: 1px solid rgba(148, 163, 184, .15);
            border-radius: 14px;
            transition: .25s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: rgba(139, 92, 246, .5);
            box-shadow: 0 15px 40px rgba(0, 0, 0, .25);
        }

        .icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            border-radius: 10px;
            background: rgba(124, 58, 237, .15);
            font-size: 22px;
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #f8fafc;
        }

        .card p {
            color: #94a3b8;
            line-height: 1.7;
            font-size: 14px;
        }

        footer {
            padding: 25px;
            text-align: center;
            border-top: 1px solid rgba(148, 163, 184, .12);
            color: #64748b;
            font-size: 13px;
            background: rgba(2, 6, 23, .8);
        }

        @media (max-width: 700px) {
            nav {
                padding: 18px 5%;
            }

            nav > div:last-child {
                display: none;
            }

            .hero {
                padding: 75px 20px 55px;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<nav>
    <div class="logo">KholilWD969</div>

    <div>
        <a href="/">Beranda</a>
        <a href="/tentang-kami">Tentang Kami</a>
        <a href="/kontak">Kontak</a>
    </div>
</nav>

<section class="hero">

    <div class="badge">
        🎮 GAME & ENTERTAINMENT
    </div>

    <h1>
        Selamat Datang di <span>KholilWD969</span>
    </h1>

    <p>
        Nikmati portal gaming dengan tampilan modern,
        ringan, dan nyaman digunakan di berbagai perangkat.
    </p>

    <div class="buttons">
        <a href="/game" class="primary">
            🎮 Lihat Game
        </a>

        <a href="/tentang-kami" class="secondary">
            Tentang Kami
        </a>
    </div>

</section>

<section class="features">

    <div class="card">
        <div class="icon">🎮</div>

        <h3>Game Demo</h3>

        <p>
            Jelajahi berbagai permainan dan pengalaman
            gaming yang tersedia di platform kami.
        </p>
    </div>

    <div class="card">
        <div class="icon">🏆</div>

        <h3>Leaderboard</h3>

        <p>
            Lihat pencapaian pemain dan tantang diri
            untuk mendapatkan skor terbaik.
        </p>
    </div>

    <div class="card">
        <div class="icon">⚡</div>

        <h3>Ringan & Cepat</h3>

        <p>
            Desain responsif dengan tampilan modern
            yang nyaman digunakan pada desktop maupun mobile.
        </p>
    </div>

</section>

<footer>
    © {{ date('Y') }} KholilWD969. All rights reserved.
</footer>

</body>
</html>
```
