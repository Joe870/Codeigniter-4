<head>
    <link rel="stylesheet" href="style/style.css">
<head>
<body>
    <div class="container">
        <h3 class="title">login</h3>
        <form action="/" class="login" method="post">
            <div class="form-row">
                <label for="email">email</label>
                <input type="text" name="email">
            </div>
            <div class="form-row">
                <label for="firstname">voornaam</label>
                <input type="text" name="firstname">
            </div>
            <div class="form-row">
                <label for="lastname">achternaam</label>
                <input type="text" name="lastname">
            </div>
            <div class="form-row">
                <label for="password">wachtwoord</label>
                <input type="text" name="password">
            </div>
            <div class="form-row">
                <button>login</button>
            </div>
        </form>
        <a href="<?= base_url('register') ?>">Register</a>
    </div>
</body>