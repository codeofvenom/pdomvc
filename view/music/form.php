<!-- view/music/form.php -->
<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit') {
    $judul = 'Edit Music';
    $form_action = "http://localhost/pdomvc/index.php/music/edit?id=" . $_GET['id'];
} else {
    $judul = 'Tambah Music';
    $form_action = "http://localhost/pdomvc/index.php/music/create";
}

$valNama = isset($music['nama']) ? $music['nama'] : '';
$valJudul = isset($music['judul']) ? $music['judul'] : '';
$valAlbum = isset($music['album']) ? $music['album'] : '';
$valTahun = isset($music['tahun']) ? $music['tahun'] : '';
$valId = isset($music['id']) ? $music['id'] : '';
?>

<?php ob_start() ?>
    <h1><?= $judul ?></h1>

    <form action="<?= $form_action ?>" method="post">
        <?php if ($valId): ?>
            <input type="hidden" name="id" value="<?= $valId ?>">
        <?php endif ?>

        <div class="form-group">
            <label for="nama">Nama Penyanyi/Artis</label>
            <input name="nama" type="text" value="<?= $valNama ?>" class="form-control" id="nama" placeholder="Nama Penyanyi atau Artis">
        </div>

        <div class="form-group">
            <label for="judul">Judul Lagu</label>
            <input name="judul" type="text" value="<?= $valJudul ?>" class="form-control" id="judul" placeholder="Judul Lagu">
        </div>

        <div class="form-group">
            <label for="album">Nama Album</label>
            <input name="album" type="text" value="<?= $valAlbum ?>" class="form-control" id="album" placeholder="Album">
        </div>    
		
		<div class="form-group">
            <label for="album">Tahun Album</label>
            <input name="tahun" type="text" value="<?= $valTahun ?>" class="form-control" id="tahun" placeholder="Tahun Album">
        </div>

        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>