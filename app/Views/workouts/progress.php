<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>
<div class="col-span-full flex justify-between mb-10">
    <div class="pr-16 break-words">
        <h2 class="font-bold text-3xl mb-2"><?= $datas[0]['name']; ?> in Progress..</h2>
    </div>
</div>

<div class="col-span-full">
    <div class="grid grid-cols-5 gap-5">
        <div class="col-span-2">
            <div class="grid grid-cols-1 rounded-lg bg-white shadow-md h-full">
                <div class="col">
                    <div class="p-10 bg-blue-500 text-white rounded-lg">
                        <h2 class="font-semibold text-xl">Instructions</h2>
                        <p class="text-sm font-medium text-white text-opacity-70">by Muhammad Harraz</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-10 h-full flex justify-start items-end">
                        <div class="flex justify-start items-end">
                            <div>
                                <img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Wayfarers&hairColor=Red&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Heather&eyeType=Close&eyebrowType=Default&mouthType=Default&skinColor=Brown' class="w-14 h-14 object-cover rounded-full mr-5" />
                            </div>
                            <div class="w-full max-h-96 overflow-y-auto pr-3" id="instructions">
                                <div class="text-sm bg-blue-100 rounded-lg p-5">
                                    <p class="leading-relaxed text-black">Hi, <span class="font-semibold"><?= ucwords(session()->get('data_user')['fullname']); ?></span>.</p>
                                </div>
                                <?php foreach ($datas as $index => $data) : ?>
                                    <?php if ($data == $datas[0]) : ?>
                                        <div class="text-sm bg-blue-100 rounded-lg step-instruction overflow-hidden mt-3 box-border">
                                            <div class="p-5">
                                                <p class="leading-relaxed text-black"><span class="font-semibold"><?= $data['step_name']; ?>:</span> <?= $data['step_description']; ?></p>
                                                <div class="w-full mt-5">
                                                    <button onclick="next_step()" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center">
                                                        Next Step
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif ($data == $datas[count($datas) - 1]) : ?>
                                        <div class="text-sm bg-blue-100 rounded-lg step-instruction overflow-hidden mt-3 box-border h-0 hidden">
                                            <div class="p-5">
                                                <p class="leading-relaxed text-black"><span class="font-semibold"><?= $data['step_name']; ?>:</span> <?= $data['step_description']; ?></p>
                                                <div class="w-full mt-5">
                                                    <button onclick="finish_step('<?= $datas[0]['slug']; ?>')" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center finish-button">
                                                        Finish Workout
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="text-sm bg-blue-100 rounded-lg step-instruction overflow-hidden mt-3 box-border h-0 hidden">
                                            <div class="p-5">
                                                <p class="leading-relaxed text-black"><span class="font-semibold"><?= $data['step_name']; ?>:</span> <?= $data['step_description']; ?></p>
                                                <div class="w-full mt-5">
                                                    <button onclick="next_step()" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center">
                                                        Next Step
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3">
            <div class="grid grid-cols-1 gap-5">
                <div class="col flex items-end">
                    <img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-72 shadow-md step-image">
                    <img src="https://cdn.mos.cms.futurecdn.net/oYDbf5hQAePHEBNZTQMXRA.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-72 shadow-md step-image hidden">
                    <img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-72 shadow-md step-image hidden">
                    <img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-72 shadow-md step-image hidden">
                    <img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-72 shadow-md step-image hidden">
                </div>
                <div class="col">
                    <div class="grid grid-cols-1 shadow-md rounded-lg bg-white p-5">
                        <div class="col p-5 min-h-10">
                            <?php foreach ($datas as $index => $data) : ?>
                                <?php if ($data == $datas[0]) : ?>
                                    <div class="relative flex justify-start step-paragraph overflow-y-hidden">
                                        <div class="w-10 h-10 rounded-full bg-blue-500 text-white font-bold text-xl flex justify-center items-center mr-5">
                                            <p><?= $index + 1; ?></p>
                                        </div>
                                        <div class="w-3/4 flex items-center">
                                            <p class="text-black text-opacity-70 text-md leading-relax"><?= $data['step_description']; ?></p>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="relative flex justify-start step-paragraph overflow-y-hidden h-0">
                                        <div class="w-10 h-10 rounded-full bg-blue-500 text-white font-bold text-xl flex justify-center items-center mr-5">
                                            <p><?= $index + 1; ?></p>
                                        </div>
                                        <div class="w-3/4 flex items-center">
                                            <p class="text-black text-opacity-70 text-md leading-relax"><?= $data['step_description']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="col">
                            <div class="flex justify-between items-center p-5">
                                <div class="flex justify-start ml-5">
                                    <?php foreach ($datas as $index => $data) : ?>
                                        <?php if ($data == $datas[0]) : ?>
                                            <div class="w-2 h-2 rounded-full bg-blue-500 progress-dot mr-2"></div>
                                        <?php else : ?>
                                            <div class="w-2 h-2 rounded-full bg-blue-200 progress-dot mr-2"></div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class="relative col flex justify-end">
                                    <button id="prev-button" onclick="prev_step()" class="bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center px-5 mr-3 hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </button>
                                    <button id="next-button" onclick="next_step()" class="bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center px-5">
                                        Next Step
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ml-3 w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                    <button id="finish-button" onclick="finish_step('<?= $datas[0]['slug']; ?>')" class="bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center px-5 hidden">
                                        Finish Workout
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ml-3 w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script>
    let isAnimating = false

    function update_scroll() {
        let element = document.getElementById("instructions");
        element.scrollTop = element.scrollHeight;
    }

    function new_instruction() {
        $('.step-instruction:not(.hidden)').find('button:not(.finish-button)').remove()

        let step_instruction = $('.step-instruction:not(.hidden)').last().next()
        step_instruction.removeClass('h-0')
        step_instruction.show('drop', {
            direction: "down"
        }, 700)
        step_instruction.removeClass('hidden')
        update_scroll()
    }

    function next_step() {
        if (!isAnimating) {
            isAnimating = true
            $('#prev-button').removeClass('hidden')

            let step_image = $('.step-image')
            let step_image_active = $('.step-image:not(.hidden)')

            if (!step_image_active.is(step_image.last())) {
                let next_step_image_active = step_image_active.next()

                step_image_active.hide('drop', {
                    direction: "up"
                }, 500)
                step_image_active.addClass('hidden')

                next_step_image_active.show('drop', {
                    direction: "right"
                }, 500)
                next_step_image_active.removeClass('hidden')
            }


            let step_paragraph = $('.step-paragraph')
            let step_paragraph_active = $('.step-paragraph:not(.h-0)')

            if (!step_paragraph_active.is(step_paragraph.last())) {
                let next_step_paragraph_active = step_paragraph_active.next()

                step_paragraph_active.addClass('h-0', 500)

                next_step_paragraph_active.removeClass('h-0', {
                    duration: 500,
                    easing: 'swing',
                    complete: function() {
                        let progress_dot = $('.progress-dot')
                        let active_progress_dot = $('.progress-dot.bg-blue-500')

                        $(progress_dot[active_progress_dot.length]).removeClass('bg-blue-200').addClass('bg-blue-500')

                        isAnimating = false
                    },
                    queue: true
                })

                if (next_step_paragraph_active.is(step_paragraph.last())) {
                    $('#next-button').addClass('hidden')
                    $('#finish-button').removeClass('hidden')
                }
                new_instruction()

            } else {
                isAnimating = false
            }
        }
    }

    function prev_step() {
        if (!isAnimating) {
            isAnimating = true
            $('#finish-button').addClass('hidden')
            $('#next-button').removeClass('hidden')

            let step_image = $('.step-image')
            let step_image_active = $('.step-image:not(.hidden)')

            if (!step_image_active.is(step_image.first())) {
                let prev_step_image_active = step_image_active.prev()

                step_image_active.hide('drop', {
                    direction: "right"
                }, 500)
                step_image_active.addClass('hidden')

                prev_step_image_active.show('drop', {
                    direction: "up"
                }, 500)
                prev_step_image_active.removeClass('hidden')
            }

            let step_paragraph = $('.step-paragraph')
            let step_paragraph_active = $('.step-paragraph:not(.h-0)')

            if (!step_paragraph_active.is(step_paragraph.first())) {
                let prev_step_paragraph_active = step_paragraph_active.prev()

                step_paragraph_active.addClass('h-0', 500)
                prev_step_paragraph_active.removeClass('h-0', {
                    duration: 500,
                    easing: 'swing',
                    complete: function() {
                        let progress_dot = $('.progress-dot')
                        let active_progress_dot = $('.progress-dot.bg-blue-500')

                        if (active_progress_dot.length > 1)
                            $(progress_dot[active_progress_dot.length - 1]).addClass('bg-blue-200').removeClass('bg-blue-500')

                        isAnimating = false
                    },
                    queue: true
                })
                if (prev_step_paragraph_active.is(step_paragraph.first())) {
                    $('#prev-button').addClass('hidden')
                }
            } else {
                isAnimating = false
            }
        }
    }

    function finish_step(slug) {
        window.location.replace(`/workouts/${slug}/finish`)
    }
</script>
<?= $this->endSection(); ?>