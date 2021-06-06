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
                            <a href="<?= base_url('doa/tambah/'); ?>" class="btn btn-primary mb-4">Tambah Menu</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Doa</th>
                                        <th>Bacaan</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <?php foreach ($doa as $d) : ?>
                                    <tbody>
                                        <td><?= $d['id_doa']; ?></td>

                                        <td><?= $d['nama_doa']; ?></td>
                                        <td><?= $d['bacaan']; ?></td>
                                        <td>
                                            <a href="<?= base_url('doa/edit/'); ?><?= $d['id_doa']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="<?= base_url('doa/hapus/'); ?><?= $d['id_doa']; ?>" class="btn btn-danger" onclick="return">Hapus</a>
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