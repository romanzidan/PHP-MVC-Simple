<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?= base_url;?>/category/create" class="btn float-right btn-xs btn btn-primary">Create Category</a>
                            </div>
                            <div class="card-body">
                                <?php Flasher::Message(); ?>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="col-md--8 col-8">Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                        $no = 1;
                        foreach ($data['categories'] as $row) {
                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['name'] ?></td>
                                            <td>
                                                <a href="<?= base_url; ?>/category/edit/<?= $row['id'] ?>"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="<?= base_url; ?>/category/hapus/<?= $row['id'] ?>"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Hapus data?');">Delete</a>
                                            </td>
                                        </tr>
                                        <?php 
                            $no++;
                        }
                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </section>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>
</section>