<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->renderSection('title') ?>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/scss/styles.scss" />
</head>

<body>
    <div class="body_left">
        <aside>
            <div class="aside_header">
                <div class="aside_item"><a href="<?= site_url() ?>">Main Menu</a></div>
            </div>
            <div class="aside_main">
                <div class="aside_item"><a href="<?= site_url() ?>">Dashboard</a></div>
                <div class="aside_item"><a href="<?= site_url('acara') ?>">Acara</a></div>
                <div class="aside_item"><a href="<?= site_url() ?>">Kontak</a></div>
                <div class="aside_item"><a href="<?= site_url() ?>">Saya Mengundang</a></div>
                <div class="aside_item"><a href="<?= site_url() ?>">Saya Diundang</a></div>
            </div>
            <div class="aside_footer">
                <div class="aside_item"><a href="<?= site_url() ?>">Footer</a></div>
            </div>
        </aside>
    </div>
    <div class="body_right">
        <nav>
            <div class="nav_login">
                <span><a href="<?= site_url() ?>">Login</a></span>
            </div>
            <div class="nav_register">
                <span><a href="<?= site_url() ?>">Register</a></span>
            </div>
        </nav>
        <main>
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</body>

</html>