<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mx-auto mt-5">
<h1 class="text-center h3 mb-4">Login</h1>
    <form method="post" action="<?= base_url('/login'); ?>">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <? if(isset($errors['email'])): ?>
                <p class="text-danger mt-2"><small><?= $errors['email'] ?></small></p>
            <? endif; ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input required type="password" name="password" class="form-control" id="password">
            <? if(isset($errors['password'])): ?>
                <p class="text-danger mt-2"><small><?= $errors['password'] ?></small></p>
            <? endif; ?>
        </div>
        <button type="submit" class="btn btn-primary ms-auto d-block px-5">Login</button>
    </form>
</div>
<?= $this->endSection() ?>