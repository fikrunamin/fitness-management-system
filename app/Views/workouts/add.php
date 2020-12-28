<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>
<div class="col-span-full flex justify-between mb-10">
    <div class="pr-16 break-words flex justify-start items-center mb-2">
        <h2 class="font-bold text-3xl">Add a New Workout</h2>
    </div>
</div>
<div class="col-span-full lg:col-span-3 2xl:col-span-2 h-screen">
    <form action="/workouts/add" method="post" enctype="multipart/form-data">
        <div class="grid grid-cols-1 gap-y-5 rounded-lg shadow-md bg-white p-5">
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Image</label>
                <div class="w-full h-48 border-4 border-blue-500 rounded-lg flex items-center justify-center bg-blue-200 border-dashed hidden">
                </div>
                <input type="file" id="image" name="image">
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200">
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Category / Tag</label>
                <input type="text" id="category" name="category" placeholder="Category / Tag" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200">
            </div>
            <div class="col">
                <label class="text-sm font-semibold mb-3 block">Description</label>
                <textarea id="description" name="description" placeholder="Description"></textarea>
            </div>
            <div class="col">
                <div class="w-full flex justify-end">
                    <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='add_steps()'>
                        Continue to add steps
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="col-span-full lg:col-span-3 2xl:col-span-2 h-screen">
    <div class="rounded-lg shadow-md bg-white p-5">
        <div>
            <label class="text-sm font-semibold mb-3 block">Add Step Field</label>
            <input type="number" min="1" id="total_steps" name="total_steps" placeholder="1" class="w-full h-10 focus:ring-2 focus:ring-blue-500 px-5 rounded-lg ring-2 ring-blue-200">
        </div>
        <div class="w-full flex justify-end mt-5">
            <button type="button" class="bg-blue-500 text-white h-10 px-5 rounded-lg flex justify-center items-center text-sm" onclick='add_steps()'>
                Generate
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 ml-3">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <div class="grid grid-cols-1">
            <div class="col"></div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: ['bold', 'italic', 'link'],
        })
        .catch(error => {
            console.error(error);
        });
</script>
<?= $this->endSection(); ?>