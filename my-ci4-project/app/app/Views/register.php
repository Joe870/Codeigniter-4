<head>
    <link rel="stylesheet" href="<?= base_url('style/style.css') ?>">
<head>
<body>
    <div class="container">
        <h3 class="title">Registeren</h3>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="success-message" role="alert">
                <p><?= session()->getFlashdata('success') ?></p>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('validation')): ?>
            <div class="error-message" role="alert">
                <ul class="list-disc list-inside">
                    <?php foreach (session()->getFlashdata('validation')->getErrors() as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

       <form action="<?= base_url('register') ?>" class="login" method="post">
            <?= csrf_field() ?>
            <div class="form-row">
                <label for="email">E-mail</label>
                <!-- Retain old input value on validation failure -->
                <input type="text" name="email" value="<?= old('email') ?>">
            </div>
            <div class="form-row">
                <label for="firstname">Voornaam</label>
                <input type="text" name="firstname" value="<?= old('firstname') ?>">
            </div>
            <div class="form-row">
                <label for="lastname">Achternaam</label>
                <input type="text" name="lastname" value="<?= old('lastname') ?>">
            </div>
            <div class="form-row">
                <label for="password">Wachtwoord</label>
                <input type="password" name="password">
            </div>
            
            <div class="form-row">
                <label for="password_confirm">Bevestig Wachtwoord</label>
                <input type="password" name="password_confirm">
            </div>

            <div class="form-row">
                <button type="submit">Registeren</button>
            </div>
            <a href="<?= site_url('login') ?>">Back to login</a>
        </form>
    </div>
</body>