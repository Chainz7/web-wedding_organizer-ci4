<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<title>WO Acara</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>ACARA!</h1>
<div class="main_container">
    <div class="main_item">
        <div class="item_header">
            <h3>Simple Table</h3>
        </div>
        <div class="item_body">
            <table>
                <tr>
                    <th>No</th>
                    <th>Acara</th>
                    <th>Tanggal</th>
                    <th>Info</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($acara as $key => $value) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $value->name_acara ?></td>
                        <td><?= $value->date_acara ?></td>
                        <td><?= $value->info_acara ?></td>
                        <td>0</td>
                        <td class="item_action">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>