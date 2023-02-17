<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<title>WO Create Acara</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>ACARA!</h1>
<div class="main_container">
    <div class="main_item">
        <div class="item_header">
            <h3>Tambah Data</h3>
            <div class="item_button">
                <a href="<?= site_url('acara') ?>" class="item_button-delete">Kembali</a>
            </div></br>
        </div>
        <div class="item_body">
            <form action="<?= site_url('acara') ?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                <div class="item_form">
                    <label>Nama Acara</label>
                    <input type="text" name="name_acara" class="form_item" required autofocus>
                </div></br>
                <div class="item_form">
                    <label>Tangal Acara</label>
                    <input type="text" name="date_acara" class="form_item" required autofocus>
                </div></br>
                <div class="item_form">
                    <label>Info Acara</label>
                    <textarea name="info_acara" class="form_item"></textarea>
                </div></br>
                <div>
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>