<!-- manggil file di folder view -->
<?= $this->extend('auth/template/index'); ?>
<?= $this->section('content');  ?>

<div class="container">

    <div class="row justify-content-center">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="<?= url_to('register') ?>" method="post" class="user">
                                <?= csrf_field() ?>
                                <!-- <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email')  ?>">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                    </div>
                                </div>
                                <button type="submmit" class="btn btn-primary btn-user btn-block">
                                    <?= lang('Auth.register');  ?>
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p><a class="small" href="<?= url_to('login') ?>"><?= lang('Auth.alreadyRegistered') ?><br><?= lang('Auth.signIn') ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection('content');  ?>