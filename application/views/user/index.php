<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <!-- Cards -->
    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="" class="card-img">
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <p class="card-text">
                        Full Name : <?= $user['name']; ?>
                    </p>
                    <p class="card-text">
                        Email : <?= $user['email']; ?>
                    </p>
                    <p class="card-text">
                        Username : <?= $user['username']; ?>
                    </p>
                    <p class="card-text">
                        <small class="text-muted"> Member since <?= date('d F Y', $user['date_created']); ?>
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->