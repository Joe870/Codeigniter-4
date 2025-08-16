<head>
    <link rel="stylesheet" href="<?= base_url('style/style.css') ?>">
<head>
<body>
    <div class="container">
        <h3 class="title">registeren</h3>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="success-message" role="alert">
                <p><?= session()->getFlashdata('success') ?></p>
            </div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
            <div class="error-message" role="alert">
                <ul class="list-disc list-inside">
                    <?php foreach ($validation->getErrors() as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('register') ?>" class="login" method="post">
            <?= csrf_field() ?>
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
                <input type="password" name="password">
            </div>
            
            <div class="form-row">
                <label for="password_confirm">Bevestig Wachtwoord</label>
                <input type="password" name="password_confirm">
            </div>

            <div class="form-row">
                <button type="submit">register</button>
            </div>
            <a href="<?= site_url('login') ?>">back to login</a>
        </form>
    </div>
</body>