<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>

<div class="col-span-full flex justify-between mb-10">
    <div class="pr-16 break-words">
        <h2 class="font-bold text-3xl mb-2">Workouts List</h2>
    </div>
</div>
<div class="col">
    <label class="text-sm font-semibold">Search</label>
    <div class="relative mx-auto text-blue-500 flex justify-center items-center w-full mt-2">
        <input class=" bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 duration-200 w-full" type="search" name="search_keyword" id="search_keyword" placeholder="Push Up" oninput="search(this)">
        <div class="absolute right-3">
            <svg class="text-blue-500 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </div>
    </div>
</div>
<div class="col-span-2" id="categories">
    <label class="text-sm font-semibold">Category <span class="text-xs text-black text-opacity-70">(select at max. 3 categories)</span></label>
    <div class="relative mx-auto text-blue-500 flex justify-start items-center w-full mt-2">
        <input class="bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 duration-200 w-full cursor-pointer text-black text-left" type="button" name="filter-category" id="filter-category" onclick="show_option()" value="Select Category">
        <div class="absolute left-0 h-full overflow-y-auto z-50 rounded-lg text-xs flex justify-start items-center px-3" id="selected-categories">
        </div>
        <div class="absolute top-14 left-0 max-h-96 bg-white shadow-md rounded-lg w-full overflow-y-auto z-50 hidden" id="multi-select">
            <div class="relative h-16 w-full px-5 flex items-center justify-start text-sm text-black">
                <div class="w-1 rounded-r-lg bg-blue-500 h-3/4 absolute left-0"></div>
                <input class=" bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none ring-2 ring-blue-500 duration-200 w-full" type="search" name="search-category" id="search-category" placeholder="General" oninput="search_category(this)">
                <div class="absolute right-10">
                    <svg class="text-blue-500 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </div>
            </div>
            <?php foreach ($categories as $category) : ?>
                <div class="relative h-10 w-full px-5 flex items-center justify-start text-sm text-black hover:bg-blue-500 hover:text-white cursor-pointer category-item" onclick="add_category(this)">
                    <!-- <div class="w-1 rounded-r-lg bg-blue-500 h-3/4 absolute left-0"></div> -->
                    <p><?= ucwords($category['name']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="col">
    <div class="w-full h-full flex items-end">
        <a href="/workouts/add" class="bg-blue-500 h-10 px-5 flex items-center justify-center text-white rounded-lg text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 mr-3">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
            </svg>
            Add a new workout
        </a>
    </div>
</div>
<div class="col-span-full">
    <p class="my-5 text-sm" id="result"></p>
</div>
<div class="col-span-full">
    <div class="grid grid-cols-3 2xl:grid-cols-4 gap-5" id="workouts-list">
        <!-- card start -->
        <?php foreach ($datas as $data) : ?>
            <div class="col relative rounded-lg bg-white shadow-lg">
                <?php if ($data['image'] != '') : ?>
                    <img src="/<?= $data['image']; ?>" alt="" class="rounded-lg object-cover mx-auto w-full h-32">
                <?php else : ?>
                    <img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-32">
                <?php endif; ?>
                <div class="absolute bottom-0 right-0 bg-black bg-opacity-50 w-full h-full rounded-lg flex items-end justify-start">
                    <div class="pb-5 px-5 text-white flex justify-between w-full">
                        <div>
                            <h2 class="text-lg font-bold"><?= $data['name']; ?></h2>
                        </div>
                        <div class="flex justify-center space-x-3">
                            <a href="/workouts/edit/<?= $data['id']; ?>" class="z-30 hover:text-blue-500 duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="javascript:;" class="z-30 hover:text-red-500 duration-200" onclick="remove_workout(this, <?= $data['id']; ?>)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/workouts/<?= $data['slug']; ?>" class="absolute top-0 left-0 w-full h-full bg-transparent z-20">
                </a>
            </div>
        <?php endforeach; ?>
        <!-- card end -->
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<?php if (session()->getFlashData('success')) : ?>
    <script>
        swal({
            icon: "success",
            title: "Success",
            text: "<?= session()->getFlashData('success'); ?>"
        });
    </script>
<?php endif; ?>
<script>
    let isRunning = false

    function search(e) {
        let keyword = $(e).val()
        let category = [];
        let result = $('#result')
        result.empty()

        $('.selected-category').each(index => {
            category.push($($('.selected-category')[index]).text())
        })

        if (!isRunning) {
            isRunning = true
            $.ajax({
                type: "post",
                url: "/workouts/search",
                data: {
                    keyword: keyword,
                    category: category
                },
                beforeSend: () => {
                    $('#workouts-list').empty()
                },
                success: (data) => {
                    data = JSON.parse(data)
                    if (keyword != undefined && keyword != "")
                        result.append(`<span class="font-semibold">${data.length} results</span> of "${keyword}"`)
                    else
                        result.append(`<span class="font-semibold">${data.length} results</span>`)

                    if (category.length != 0)
                        result.append(` in ${category.join(', ')}`)
                    else
                        result.append(` in all categories`)

                    data.forEach((item, i) => {
                        setTimeout(() => {
                                let $new_item = $(`
                                    <div class="col relative rounded-lg bg-white shadow-lg hidden">
                                        <img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-32">
                                        <div class="absolute bottom-0 right-0 bg-black bg-opacity-50 w-full h-full rounded-lg flex items-end justify-start">
                                            <div class="pb-5 px-5 text-white flex justify-between w-full">
                                                <div>
                                                    <h2 class="text-lg font-bold">${item.name}</h2>
                                                </div>
                                                <div class="flex justify-center space-x-3">
                                                    <a href="/workouts/edit/${item.id}" class="z-30 hover:text-blue-500 duration-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:;" class="z-30 hover:text-red-500 duration-200" onclick="remove_workout(this, ${item.id})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/workouts/${item.slug}" class="absolute top-0 left-0 w-full h-full bg-transparent z-20">
                                        </a>
                                    </div>`)

                                $('#workouts-list').append($new_item)
                                $new_item.show('drop', {
                                    direction: 'down'
                                }, 300)
                            },
                            30 * i
                        )
                    })

                    isRunning = false
                }
            })
        }
    }

    function show_option() {
        $("#multi-select").toggle('drop', {
            direction: 'up'
        }, 500)
    }

    function hide_option() {
        $("#multi-select").hide('drop', {
            direction: 'up'
        }, 200)
    }

    $(window).click(() => {
        hide_option()
    })

    $("#categories").click((e) => {
        e.stopPropagation()
    })

    function remove_category(e) {
        let text = $(e).siblings('div').find('p').text()

        if ($('.selected-category').length <= 1)
            $('#filter-category').val('Select Category')

        let new_element = $(`
                <div class="relative h-10 w-full px-5 flex items-center justify-start text-sm text-black hover:bg-blue-500 hover:text-white cursor-pointer cate" onclick="add_category(this)">
                    <!-- <div class="w-1 rounded-r-lg bg-blue-500 h-3/4 absolute left-0"></div> -->
                    <p>${text}</p>
                </div>`)

        $($(e).parent('div')).remove()
        $('#multi-select').append(new_element)
        search($('#search-keyword'))
    }

    function add_category(e) {
        let text = $(e).find('p').text()

        if ($('.selected-category').length >= 0)
            $('#filter-category').attr('value', '')

        if ($('.selected-category').length < 3) {
            let new_element = $(`
            <div class="rounded-lg flex justify-between items-center px-3 ring-2 ring-blue-500 bg-blue-100 h-6 mr-3">
                <div>
                    <p class=" selected-category">${text}</p>
                </div>
                <div class="cursor-pointer" onclick="remove_category(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-blue-500 ml-2">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>`)
            $(e).remove()
            $("#selected-categories").append(new_element)
            search($('#search-keyword'))
        }
    }

    function search_category(e) {
        var keyword = $(e).val().toLowerCase();

        $(".category-item").filter(function() {
            $(this).toggle($(this).find('p').text().toLowerCase().indexOf(keyword) > -1)
        });
    }

    function remove_workout(e, index) {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this, and user histories data will be affected.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    let id =
                        $.ajax({
                            type: "post",
                            data: {
                                id: index
                            },
                            url: "/workouts/delete_workout",
                            success: (data) => {
                                data = JSON.parse(data)
                                console.log(data)
                                if (data == 'success') {
                                    swal("The workout has been deleted!", {
                                        icon: "success",
                                    });
                                    $(e).closest('.col').hide('drop', {
                                        direction: 'down'
                                    }, 200, () => {
                                        $(this).remove()
                                    })
                                } else {
                                    swal("Failed delete data!", {
                                        icon: "error",
                                    });
                                }
                            }
                        })
                }
            });
    }
</script>
<?= $this->endSection(); ?>