<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('user/changepass') ?>" method="post">
                <div class="form-group">
                    <label for="currentPass">Current Password</label>
                    <input type="password" class="form-control" name="current_pass" id="current_pass">
                    <?= form_error(
                        'current_pass',
                        '<small class="text-danger pl-3">',
                        '</small>'
                    ); ?>
                </div>
                <div class="form-group">
                    <label for="newPass1">New Password</label>
                    <input type="password" class="form-control" name="new_pass1" id="new_pass1">
                    <?= form_error(
                        'new_pass1',
                        '<small class="text-danger pl-3">',
                        '</small>'
                    ); ?>
                </div>
                <div class="form-group">
                    <label for="newPass2">Repeat Password</label>
                    <input type="password" class="form-control" name="new_pass2" id="new_pass2">
                    <?= form_error(
                        'new_pass2',
                        '<small class="text-danger pl-3">',
                        '</small>'
                    ); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->