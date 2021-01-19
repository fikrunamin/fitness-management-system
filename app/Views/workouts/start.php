<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>

<div class="col-span-full flex justify-between mb-10">
    <div class="pr-16 break-words">
        <h2 class="font-bold text-3xl mb-2">Start Push Up</h2>
    </div>
</div>
<div class="col-span-2">
    <div>
        <img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-72 shadow-md">
    </div>
    <div class="rounded-lg bg-white shadow-lg mt-5">
        <div class="px-10 py-5">
            <h2 class="text-lg font-semibold mb-2"><?= $data[0]['name']; ?></h2>
            <p class="text-sm text-black text-opacity-50 leading-relaxed"><?= $data[0]['description']; ?></p>
        </div>
        <div class="grid grid-cols-1 px-10 pb-10 gap-y-2.5 text-blue-500">
            <div class="col flex justify-start items-center">
                <span class="material-icons">
                    loop
                </span>
                <p class="pl-5 text-sm font-semibold"><?= $data[0]['iteration']; ?> Times</p>
            </div>
            <div class="col flex justify-start items-center">
                <span class="material-icons">
                    brightness_4
                </span>
                <p class="pl-5 text-sm font-semibold"><?= $data[0]['workout_time']; ?></p>
            </div>
        </div>
    </div>
</div>
<div class="col-span-2">
    <div class="grid grid-cols-1 shadow-md rounded-lg bg-white p-5">
        <div class="col p-5 cursor-pointer flex items-center justify-between" onclick="toggle_steps()">
            <h2 class="font-semibold text-xl">How to <?= $data[0]['name']; ?>?</h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500 w-8 h-8 animate-bounce">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
        <div id="steps" class="hidden">
            <?php foreach ($data as $index => $dt) : ?>
                <div class="relative col flex justify-start p-5">
                    <div class="w-10 h-10 rounded-full bg-blue-500 text-white font-bold text-xl flex justify-center items-center mr-5">
                        <p><?= $index + 1; ?></p>
                    </div>
                    <?php if (next($data) != '') : ?>
                        <!-- progress bar -->
                        <div class="absolute w-1.5 bg-blue-300 rounded-full left-9" style="height: calc(100% - 4rem); top:4.5rem;">
                        </div>
                        <!-- end progress bar -->
                    <?php endif; ?>
                    <div class="w-3/4 flex items-center">
                        <p class="text-black text-opacity-70 text-md leading-relax"><?= $dt['step_description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="mt-5 rounded-lg bg-white shadow-md p-10">
        <div class="flex justify-start items-end">
            <img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Wayfarers&hairColor=Red&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Heather&eyeType=Close&eyebrowType=Default&mouthType=Default&skinColor=Brown' class="w-14 h-14 object-cover rounded-full mr-5" />
            <div class="w-full">
                <div class="text-sm bg-blue-100 rounded-lg p-5">
                    <p class="leading-relaxed text-black">Hi, <span class="font-semibold"><?= ucwords(session()->get('data_user')['fullname']); ?></span>.</p>
                </div>
                <div class="text-sm bg-blue-100 rounded-lg p-5 mt-3">
                    <p class="leading-relaxed text-black">I'm <span class="font-semibold">Muhammad Harraz bin Harun</span>. So, today I will be your instructor for this workout. Please follow the instructions carefully.</p>
                    <div class="w-full mt-5">
                        <a href="/workouts/<?= $data[0]['slug']; ?>/start" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center">
                            Okay, Start
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script>
    function toggle_steps() {
        $("#steps").slideToggle()
    }
</script>
<?= $this->endSection(); ?>