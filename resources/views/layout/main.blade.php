<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="tabel.css">
        <link rel="stylesheet" href="login_styles.css">

        <title>{{ $title }}</title>
    </head>
    <body>
        <!--==========Navbar ===========-->
         @include('partials.navbar')
        <!--========== CONTENTS ==========-->
        <main>
            <section>
                @yield('container')
            </section>
        </main>

        <!--========== MAIN JS ==========-->
        <script src="main.js"></script>
    </body>
</html>