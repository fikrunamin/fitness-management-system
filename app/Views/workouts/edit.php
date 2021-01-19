<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>
<div class="col-span-full flex justify-between mb-10">
    <div class="pr-16 break-words flex justify-start items-center mb-2">
        <h2 class="font-bold text-3xl"><?= $title; ?></h2>
    </div>
</div>
<div class="col-span-full lg:col-span-3 2xl:col-span-2">
    <form action="/workout/edit/<?= $workouts[0]['id']; ?>" method="post" enctype="multipart/form-data" class="relative space-y-5" id="workout_form">
        <div class="absolute -right-20 top-5 space-y-3 steps-dot">
            <input type="hidden" name="id_workout" value="<?= $workouts[0]['id']; ?>">
            <?php for ($i = 0; $i < count($workouts) + 1; $i++) : ?>
                <?php if ($i == 0) : ?>
                    <div class="flex justify-between items-center text-xs font-semibold text-blue-500 space-x-3">
                        <div class="w-2 h-2 rounded-full bg-blue-500 cursor-pointer steps-dot-item" onclick="switch_step(this, <?= $i; ?>)">
                        </div>
                        <h3>Detail</h3>
                    </div>
                <?php else : ?>
                    <div class="flex justify-between items-center text-xs font-semibold text-blue-500 space-x-3">
                        <div class="w-2 h-2 rounded-full bg-blue-300 cursor-pointer steps-dot-item" onclick="switch_step(this, <?= $i; ?>)">
                        </div>
                        <h3>Step <?= $i; ?></h3>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
        <div class="grid grid-cols-1 space-y-5 rounded-lg shadow-md bg-white p-5">
            <div class="col">
                <div class="flex justify-between items-center mb-5">
                    <h3 class="text-2xl font-bold">Workout Detail</h3>
                    <div class="flex justify-center items-center p-3 bg-blue-500 rounded-lg text-white font-semibold">
                        <h3 class="text-sm"><?= count($workouts); ?> Steps</h3>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Image</label>
                <div class="flex justify-start items-start space-x-5 space-y-5">
                    <!-- <div class="w-full h-48 border-4 border-blue-500 rounded-lg flex items-center justify-center bg-blue-200 border-dashed hidden">
                    </div> -->
                    <img src="/<?= $workouts[0]['image']; ?>" alt="" class="rounded-lg object-cover w-96 h-32">
                    <div class="">
                        <div>
                            <p class="break-words image-label mb-3" style="max-width: 10rem;"><?= $workouts[0]['image']; ?></p>
                        </div>
                        <div>
                            <button type="button" class="rounded-lg bg-blue-500 text-white flex justify-center px-3 py-2" onclick="upload(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                                Upload Image
                            </button>
                        </div>
                    </div>
                </div>
                <input type="file" id="image" name="image" class="hidden" onchange="load_image(this)" accept="image/*">
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200" value="<?= $workouts[0]['name']; ?>">
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Description</label>
                <textarea id="description" name="description" placeholder="Description"><?= $workouts[0]['description']; ?></textarea>
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Iteration</label>
                <input type="number" id="iteration" name="iteration" placeholder="5 Times" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200" min="5" value="<?= $workouts[0]['iteration']; ?>">
            </div>
            <div class="col">
                <div class="w-full flex justify-end">
                    <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='add_steps(this, 0)'>
                        Add Step
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <?php foreach ($workouts as $index => $workout) : ?>
            <?php if ($index == 0) : ?>
                <div class="grid grid-cols-1 space-y-5 rounded-lg shadow-md bg-white p-5 hidden steps">
                    <div class="col">
                        <div class="flex justify-between items-center mb-5">
                            <h3 class="text-2xl font-bold">Step <?= $index + 1; ?></h3>
                            <div class="flex justify-center items-center p-3 bg-blue-500 rounded-lg text-white font-semibold">
                                <h3 class="text-sm"><?= $index + 1; ?> of <?= count($workouts); ?> Steps</h3>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col">
                        <label class="text-sm font-semibold mb-3 block">Image</label>
                        <div class="flex justify-start items-start space-x-5 space-y-5">
                            <!-- <div class="w-full h-48 border-4 border-blue-500 rounded-lg flex items-center justify-center bg-blue-200 border-dashed hidden">
                    </div> -->
                            <img src="/<?= $workouts[0]['step_image']; ?>" alt="" class="rounded-lg object-cover w-96 h-32">
                            <div class="">
                                <div>
                                    <p class="break-words image-label mb-3" style="max-width: 10rem;"><?= $workout['step_image']; ?></p>
                                </div>
                                <div>
                                    <button type="button" class="rounded-lg bg-blue-500 text-white flex justify-center px-3 py-2" onclick="upload(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                        Upload Image
                                    </button>
                                </div>
                            </div>
                        </div>
                        <input type="file" id="image" name="step_image_1" class="hidden" onchange="load_image(this)" accept="image/*">
                    </div>
                    <div class="col">
                        <label class="text-sm font-semibold mb-3 block">Name</label>
                        <input type="text" id="title" name="step_title_1" placeholder="Step 1" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200" value="<?= $workout['step_name']; ?>">
                    </div>
                    <div class="col">
                        <label class="text-sm font-semibold mb-3 block">Description</label>
                        <textarea name="step_description_1" placeholder="Description"><?= $workout['step_description']; ?></textarea>
                    </div>
                    <div class="col">
                        <div class="w-full flex justify-end mt-5 space-x-3">
                            <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='back(this, -1)'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='add_steps(this, 1)'>
                                Next Step
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button type="submit" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm">
                                Finish
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="grid grid-cols-1 space-y-5 rounded-lg shadow-md bg-white p-5 hidden steps">
                    <div class="col">
                        <div class="flex justify-between items-center mb-5">
                            <h3 class="text-2xl font-bold">Step <?= $index + 1; ?></h3>
                            <div class="flex justify-center items-center p-3 bg-blue-500 rounded-lg text-white font-semibold">
                                <h3 class="text-sm"><?= $index + 1; ?> of <?= count($workouts); ?> Steps</h3>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col">
                        <label class="text-sm font-semibold mb-3 block">Image</label>
                        <div class="flex justify-start items-start space-x-5 space-y-5">
                            <!-- <div class="w-full h-48 border-4 border-blue-500 rounded-lg flex items-center justify-center bg-blue-200 border-dashed hidden">
                    </div> -->
                            <img src="/<?= $workouts[0]['step_image']; ?>" alt="" class="rounded-lg object-cover w-96 h-32">
                            <div class="">
                                <div>
                                    <p class="break-words image-label mb-3" style="max-width: 10rem;"><?= $workout['step_image']; ?></p>
                                </div>
                                <div>
                                    <button type="button" class="rounded-lg bg-blue-500 text-white flex justify-center px-3 py-2" onclick="upload(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                        Upload Image
                                    </button>
                                </div>
                            </div>
                        </div>
                        <input type="file" id="image" name="step_image_<?= $index + 1; ?>" class="hidden" onchange="load_image(this)" accept="image/*">
                    </div>
                    <div class="col">
                        <label class="text-sm font-semibold mb-3 block">Name</label>
                        <input type="text" id="title" name="step_title_<?= $index + 1; ?>" value="<?= $workout['step_name']; ?>" placeholder="Step <?= $index + 1; ?>" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200">
                    </div>
                    <div class="col">
                        <label class="text-sm font-semibold mb-3 block">Description</label>
                        <textarea name="step_description_<?= $index + 1; ?>" placeholder="Description"><?= $workout['step_description']; ?></textarea>
                    </div>
                    <div class="col">
                        <div class="w-full flex justify-end mt-5 space-x-3">
                            <button type="button" class="bg-red-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='remove_step(this, <?= $index - 1; ?>)'>
                                Remove Step
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='back(this, <?= $index - 1; ?>)'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='add_steps(this, <?= $index + 1; ?>)'>
                                Next Step
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button type="submit" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm">
                                Finish
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <input type="hidden" name="total_steps" value="<?= count($workouts); ?>">
    </form>
</div>
<!-- <div class="col-span-full lg:col-span-3 2xl:col-span-2 h-screen">
    <div class="rounded-lg shadow-md bg-white p-5">
    </div>
</div> -->
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<script>
    function load_resources(e) {
        // $('.ck').remove()
        $("textarea").each(function() {
            if ($(this).siblings('.ck').length < 1) {
                ClassicEditor
                    .create($(this)[0], {
                        toolbar: ['bold', 'italic'],
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });
    }

    load_resources()

    function load_image(e) {
        let img_file = $(e)
        let img_label = $(e).closest('.col').find('.image-label')
        let img_preview = $(e).closest('.col').find('img')

        img_label.text(img_file[0].files[0].name)

        fr = new FileReader()
        fr.readAsDataURL(img_file[0].files[0])

        fr.onload = function(e) {
            img_preview.attr('src', e.target.result)
            img_label.removeClass('hidden')
            img_preview.removeClass('hidden')
        }
    }

    function upload(e) {
        $(e).closest('.col').find('input[type="file"]').click()
    }

    function add_steps(e, index) {
        $('.steps-dot-item').eq(index + 1).removeClass('bg-blue-300').addClass('bg-blue-500').parent().prevAll().find('div').removeClass('bg-blue-300').addClass('bg-blue-500')
        if (index < 1 || $(e).closest('.grid').next('.steps').length > 0) {
            $(e).closest('.grid').hide('drop', {
                direction: "down"
            }, 500, () => {
                $(e).closest('.grid').addClass('hidden')

                $('.steps').eq(index).show('drop', {
                    direction: "right"
                }, 500)

                $('.steps').eq(index).removeClass('hidden')
            })
        } else {
            let el = `
            <div class="grid grid-cols-1 space-y-5 rounded-lg shadow-md bg-white p-5 hidden steps">
                <div class="col">
                    <div class="flex justify-between items-center mb-5">
                        <h3 class="text-2xl font-bold">Step ${index + 1}</h3>
                        <div class="flex justify-center items-center p-3 bg-blue-500 rounded-lg text-white font-semibold">
                            <h3 class="text-sm">New Step</h3>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col">
                    <label class="text-sm font-semibold mb-3 block">Image</label>
                    <div class="w-full h-48 border-4 border-blue-500 rounded-lg flex items-center justify-center bg-blue-200 border-dashed hidden">
                    </div>
                    <input type="file" id="image" name="step_image_${index + 1}">
                </div>
                <div class="col">
                    <label class="text-sm font-semibold mb-3 block">Name</label>
                    <input type="text" id="title" name="step_title_${index + 1}" placeholder="Step ${index + 1}" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200">
                </div>
                <div class="col">
                    <label class="text-sm font-semibold mb-3 block">Description</label>
                    <textarea name="step_description_${index + 1}" placeholder="Description"></textarea>
                </div>
                <div class="col">
                    <div class="w-full flex justify-end mt-5 space-x-3">
                        <button type="button" class="bg-red-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='remove_step(this, ${index - 1})'>
                            Remove Step
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='back(this, ${index - 1})'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='add_steps(this, ${index + 1})'>
                            Next Step
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button type="submit" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm">
                            Finish
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>`

            $('.steps-dot-item').last().parent().after(`         
                <div class="flex justify-between items-center text-xs font-semibold text-blue-500 space-x-3">
                    <div class="w-2 h-2 rounded-full bg-blue-500 cursor-pointer steps-dot-item" onclick="switch_step(this, ${index + 1})">
                    </div>
                    <h3>Step ${index + 1}</h3>
                </div>
            `)
            $(e).closest('.grid').after(el)

            $(e).closest('.grid').hide('drop', {
                direction: "down"
            }, 500, () => {
                $(e).closest('.grid').addClass('hidden')

                $('.steps').eq(index).show('drop', {
                    direction: "right"
                }, 500)

                load_resources()

                let total_steps = $('input[name="total_steps"]').val()
                $('input[name="total_steps"]').val(parseInt(total_steps) + 1)

                $('.steps').eq(index).removeClass('hidden')
            })
        }
    }

    function back(e, index) {
        $('.steps-dot-item').eq(index + 2).removeClass('bg-blue-500').addClass('bg-blue-300')
        if (index >= 0) {
            $(e).closest('.grid').hide('drop', {
                direction: "right"
            }, 500, () => {
                $(e).closest('.grid').addClass('hidden')

                $('.steps').eq(index).show('drop', {
                    direction: "down"
                }, 500)

                $('.steps').eq(index).removeClass('hidden')
            })
        } else {
            $(e).closest('.grid').hide('drop', {
                direction: "right"
            }, 500, () => {
                $(e).closest('.grid').addClass('hidden')

                $(e).closest('.grid').prev().show('drop', {
                    direction: "down"
                }, 500)

                $(e).closest('.grid').prev().removeClass('hidden')
            })
        }
    }

    function remove_step(e, index) {
        $('.steps-dot-item').eq(index + 2).removeClass('bg-blue-500').addClass('bg-blue-300')
        $(e).closest('.grid').hide('drop', {
            direction: "right"
        }, 500, () => {
            $(e).closest('.grid').remove()

            $('.steps').eq(index).show('drop', {
                direction: "down"
            }, 500)

            let total_steps = $('input[type="hidden"]').val()
            $('input[type="hidden"]').val(parseInt(total_steps) - 1)

            $('.steps').eq(index).removeClass('hidden')
        })
    }

    function switch_step(e, index) {
        $(e).removeClass('bg-blue-300').addClass('bg-blue-500').parent().prevAll().find('div').removeClass('bg-blue-300').addClass('bg-blue-500')
        $(e).parent().nextAll().find('div').removeClass('bg-blue-500').addClass('bg-blue-300')

        $('#workout_form').find('.grid:visible').hide('drop', {
            direction: "down"
        }, 500, () => {
            $(this).addClass('hidden')
            $('#workout_form').find('.grid').eq(index).show('drop', {
                direction: "right"
            }, 500, () => {
                $('#workout_form').find('.grid').eq(index).removeClass('hidden')
            })
        })

    }
</script>
<?= $this->endSection(); ?>