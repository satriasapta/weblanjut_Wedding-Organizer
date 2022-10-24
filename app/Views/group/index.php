<?= $this->extend('layout/default'); ?>
<?= $this->section('title'); ?>
<title>Data Groups &mdash; yukNikah</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Groups</h1>
        <div class="section-header-button">
            <a href="<?= site_url('groups/new'); ?>" class="btn btn-primary">Add New</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success !</b>
                <?= session()->getFlashdata('success'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error !</b>
                <?= session()->getFlashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-header">
            <h4>Data Grup Kontak </h4>
            <div class="card-header-action">
                <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive table-invoice">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Nama Groups</th>
                            <th>Info</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($groups as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td class="font-weight-600"><?= $value->name_group; ?></td>
                                <td> <?= $value->info_group; ?> </td>
                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('/group/edit/' . $value->id_group); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="<?= site_url('group/' . $value->id_group); ?>" method="POST" class="d-inline" onsubmit="return confirm('yakin hapus data?')">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection(); ?>