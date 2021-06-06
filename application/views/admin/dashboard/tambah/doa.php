<div class="container">
    <form method="POST" action="<?= base_url('doa/tambah'); ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nama Doa</label>
                <input type="text" name="nama_doa" class="form-control" placeholder="Masukan Nama Doa" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Bacaan Doa</label>
                <input type="text" class="form-control" name="bacaan" placeholder="Masukan Bacaan Doa" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Input Data</button>
    </form>
</div>