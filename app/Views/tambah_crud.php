<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>

<div class="row">
    <div class="col-sm-12" style="background-color:lavender;">
        <h2>Tambah Data</h2>
        <div id="message"></div>
        <form method="post" accept-charset="utf-8" role="form" action="<?= base_url() ?>tambah_pro"
            onsubmit="return post(this);">

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama" maxlength="30">
            </div>
            <div class="form-group">
                <label for="username">Umur:</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" maxlength="15">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas">
            </div>
            <div class="form-group">
                <label for="kelas">Eskul:</label>
                <input type="text" class="form-control" name="eskul" id="eskul" placeholder="eskul">
            </div>
            <button type="submit" class="btn btn-default">Create</button>
            <button type="button" class="btn btn-default" onclick="goBack()">Back</button>
        </form>
    </div>
</div>

<script>
    document.getElementById("myForm").onsubmit = function () {
        let name = document.getElementById("name").value;
        let umur = document.getElementById("umur").value;
        let kelas = document.getElementById("kelas").value;
        if (!name || !umur || !kelas) {
            alert("Semua field harus diisi!");
            return false; // Mencegah form dari pengiriman
        }
        return true; // Melanjutkan pengiriman form
    };
</script>