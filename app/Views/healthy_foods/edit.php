<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>
<div class="col-span-full flex justify-between mb-10">
    <div class="pr-16 break-words flex justify-start items-center mb-2">
        <h2 class="font-bold text-3xl">Add a New Food</h2>
    </div>
</div>
<div class="col-span-full lg:col-span-3 2xl:col-span-2">
    <form action="" method="post" enctype="multipart/form-data" class="space-y-5" id="food_form">
        <div class="grid grid-cols-1 space-y-5 rounded-lg shadow-md bg-white p-5">
            <div class="col">
                <h3 class="text-2xl font-bold mb-5">Healthy Foods Detail</h3>
                <hr>
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Image</label>
                <div class="flex justify-start items-start space-x-5 space-y-5">
                    <!-- <div class="w-full h-48 border-4 border-blue-500 rounded-lg flex items-center justify-center bg-blue-200 border-dashed hidden">
                    </div> -->
                    <img src="<?= $datas[0]['image']; ?>" alt="" class="rounded-lg object-cover w-96 h-32">
                    <div class="">
                        <div>
                            <p class="break-words image-label mb-3" style="max-width: 10rem;"><?= $datas[0]['image']; ?></p>
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
                <input type="text" id="title" name="title" placeholder="Title" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200" value="<?= $datas[0]['name']; ?>">
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Pros</label>
                <textarea id="pros" name="pros" placeholder="Pros"><?= $datas[0]['description']; ?></textarea>
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Cons</label>
                <textarea id="cons" name="cons" placeholder="Cons"><?= $datas[1]['description']; ?></textarea>
            </div>
            <div class="col">
                <div class="w-full flex justify-end mt-5 space-x-3">
                    <button type="submit" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm">
                        Finish
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
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

    
</script>
<?= $this->endSection(); ?>