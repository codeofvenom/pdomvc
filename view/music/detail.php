<!-- view/music/detail.php -->
<?php $judul = 'Detail Lagu/Album/Artist' ?>

<?php ob_start() ?>
    <h1><?= $music['nama'] ?></h1>

    <dl>
        <dt>Nama Penyanyi/Artis/Band : </dt>
        <dd><?= $music['nama'] ?></dd>
        <dt>Judul Lagu : </dt>
        <dd><?= $music['judul'] ?></dd>
        <dt>Nama Album : </dt>
        <dd><?= $music['album'] ?></dd>
		<dt>Tahun Album : </dt>
        <dd><?= $music['tahun'] ?></dd>
    </dl>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>