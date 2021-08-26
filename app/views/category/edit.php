<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?= $data['title']; ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-md-8">
                                <?php Flasher::Message(); ?>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="<?= base_url; ?>/category/updateCategory" method="POST" enctype="multipart/form-data">
                                <div class="col-md-4">
                                    <label>Category Name</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                    <input type="hidden" name="id" value="<?= $data['category']['id']; ?>">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Input category name..."
                                                id="first-name-icon" name="name" value="<?= $data['category']['name'] ?>" maxlength="30" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-bookmark-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?= base_url; ?>/category" class="btn btn-danger">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>
</section>