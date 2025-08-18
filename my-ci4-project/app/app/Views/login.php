<head>
    <link rel="stylesheet" href="<?= base_url('style/style.css') ?>">
<head>
<body>
    <div class="container">
        <h3 class="title">Login</h3>
        <form action="/" class="login" method="post">
            <div class="form-row">
                <label for="email">E-mail</label>
                <input type="text" name="email">
            </div>
            <div class="form-row">
                <label for="firstname">Voornaam</label>
                <input type="text" name="firstname">
            </div>
            <div class="form-row">
                <label for="lastname">Achternaam</label>
                <input type="text" name="lastname">
            </div>
            <div class="form-row">
                <label for="password">Wachtwoord</label>
                <input type="text" name="password">
            </div>
            <div class="form-row">
                <button>login</button>
            </div>
            <a href="<?= base_url('register') ?>">Registeren</a>
        </form>

    </div>
</body>