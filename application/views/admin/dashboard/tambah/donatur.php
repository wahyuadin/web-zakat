<div class="container">
    <form method="POST" action="<?= base_url('donatur/tambah'); ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">telp</label>
            <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukan No Telp">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Desa</label>
            <input type="text" class="form-control" name="desa" id="desa" placeholder="Masukan Desa">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Dusun</label>
                <input type="text" class="form-control" name="dusun" placeholder="Masukan Dusun">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Nominal</label>
                <input type="text" class="form-control" name="nominal" placeholder="Nominal" value="Rp.">
            </div>


        </div>

        <button type="submit" class="btn btn-primary">Input Data</button>
    </form>
</div>