<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>

<div class="col-span-full flex justify-between mb-10">
    <div class="pr-16 break-words">
        <h2 class="font-bold text-3xl mb-2"><?= $datas[0]['name']; ?></h2>
    </div>
</div>
<div class="col-span-2">
    <div>
        <img src="<?= $datas[0]['image']; ?>" alt="" class="rounded-lg object-cover mx-auto w-full h-72 shadow-md">
    </div>
</div>
<?php foreach ($datas as $data) : ?>
    <?php if ($data['category'] == 'pros') : ?>
        <div class="col-span-2">
            <div class="rounded-lg bg-white shadow-lg mt-5">
                <h3 class="text-lg font-semibold p-5 px-10">Pros</h3>
                <hr>
                <div class="px-10 py-5">
                    <h2 class="text-lg font-semibold mb-2"><?= $data['description']; ?></h2>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="col-span-2">
            <div class="rounded-lg bg-white shadow-lg mt-5">
                <h3 class="text-lg font-semibold p-5 px-10">Cons</h3>
                <hr>
                <div class="px-10 py-5">
                    <h2 class="text-lg font-semibold mb-2"><?= $data['description']; ?></h2>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script>
    function toggle_steps() {
        $("#steps").slideToggle()
    }
</script>
<?= $this->endSection(); ?>