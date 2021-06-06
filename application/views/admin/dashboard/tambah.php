<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Selamat Datang - <b><i><?= $login['nama']; ?> !!!</i></b> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="<?= base_url('donatur/tambah/'); ?>" class="btn btn-primary mb-4">Tambah Menu</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama donatur</th>
                                        <th>Alamat</th>
                                        <th>Telp</th>
                                        <th>Desa</th>
                                        <th>Dusun</th>

                                    </tr>
                                </thead>

                                <?php foreach ($donatur as $d) : ?>
                                    <tbody>
                                        <td><?= $d['id_donatur']; ?></td>

                                        <td><?= $d['nama_donatur']; ?></td>
                                        <td><?= $d['kategori']; ?></td>
                                        <td>
                                            <a href="<?= base_url('donatur/edit/'); ?><?= $d['id_donatur']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="<?= base_url('donatur/hapus/'); ?><?= $d['id_donatur']; ?>" class="btn btn-danger" onclick="return">Hapus</a>
                                        </td>



                                    </tbody>

                                <?php endforeach; ?>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>