<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>


<form method="post" accept-charset="utf-8" role="form" action="<?= base_url() ?>enkripsi" onsubmit="return post(this);">

    <div class="form-group">
        <label for="name">Kalimat :</label>
        <input type="text" class="form-control" name="kalimat" id="kalimat" placeholder="kalimat" maxlength="30">

        <button type="submit" class="btn btn-default">Ubah ke Encrypted</button>

</form>
<br>
<?php


$passwords = sha1($kalimat);


echo $passwords;
?>