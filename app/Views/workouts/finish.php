<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>
<div class="col-span-full flex justify-between mb-10">
    <div class="pr-16 break-words flex justify-start items-center mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10 mr-5 text-blue-500">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        <h2 class="font-bold text-3xl">Exercise is Done</h2>
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
                                    <p class="leading-relaxed text-black">Hi, <span class="font-semibold">Muhammad Fikrun Amin</span>.</p>
                                </div>
                                <div class="text-sm bg-blue-100 rounded-lg step-instruction overflow-hidden mt-3 box-border">
                                    <div class="p-5">
                                        <p class="leading-relaxed text-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim.</p>
                                        <div class="w-full mt-5">
                                            <button onclick="next_step()" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center">
                                                Next Step
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-sm bg-blue-100 rounded-lg step-instruction overflow-hidden h-0 hidden mt-3 box-border">
                                    <div class="p-5">
                                        <p class="leading-relaxed text-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim.</p>
                                        <div class="w-full mt-5">
                                            <button onclick="next_step()" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center">
                                                Next Step
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-sm bg-blue-100 rounded-lg step-instruction overflow-hidden h-0 hidden mt-3 box-border">
                                    <div class="p-5">
                                        <p class="leading-relaxed text-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim.</p>
                                        <div class="w-full mt-5">
                                            <button onclick="next_step()" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center">
                                                Next Step
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-sm bg-blue-100 rounded-lg step-instruction overflow-hidden h-0 hidden mt-3 box-border">
                                    <div class="p-5">
                                        <p class="leading-relaxed text-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim.</p>
                                        <div class="w-full mt-5">
                                            <button onclick="next_step()" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center">
                                                Next Step
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-sm bg-blue-100 rounded-lg step-instruction overflow-hidden h-0 hidden mt-3 box-border">
                                    <div class="p-5">
                                        <p class="leading-relaxed text-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim.</p>
                                        <div class="w-full mt-5">
                                            <button onclick="finish_step()" class="w-full bg-blue-500 text-white font-semibold text-md rounded-lg h-10 flex justify-center items-center finish-button">
                                                Finish Workout
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
        <div class="col-span-2 h-full">
            <div class="grid grid-cols-1 gap-5 h-full">
                <div class="col">
                    <div class="grid grid-cols-1 shadow-md rounded-lg bg-white p-5">
                        <div class="col p-5 flex items-center justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10 mr-5 text-blue-500 animate-bounce">
                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                            </svg>
                            <h2 class="font-semibold text-xl"><?= count($datas); ?> Steps have been passed</h2>
                        </div>
                        <div id="steps" class="">
                            <?php foreach ($datas as $index => $data) : ?>
                                <div class="relative col flex justify-start p-5">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 mr-5 text-blue-500">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <?php if (next($datas) != '') : ?>
                                        <!-- progress bar -->
                                        <div class="absolute w-1.5 bg-blue-300 rounded-full left-9" style="height: calc(100% - 4rem); top:4.5rem;">
                                        </div>
                                        <!-- end progress bar -->
                                    <?php endif; ?>
                                    <div class="w-3/4 flex items-center">
                                        <p class="text-black text-opacity-70 text-md leading-relax"><?= $data['step_description']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="grid grid-cols-1 gap-y-5">
                <div class="col p-5 bg-white shadow-md rounded-lg">
                    <div class="grid grid-cols-1 gap-y-5">
                        <div class="col flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 h-10" fill="#3b82f6">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6 0 1.01-.25 1.97-.7 2.8l1.46 1.46C19.54 15.03 20 13.57 20 12c0-4.42-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6 0-1.01.25-1.97.7-2.8L5.24 7.74C4.46 8.97 4 10.43 4 12c0 4.42 3.58 8 8 8v3l4-4-4-4v3z" />
                            </svg>
                        </div>
                        <div class="col flex justify-center items-center">
                            <p class="text-sm font-semibold text-blue-500">5 Times</p>
                        </div>
                    </div>
                </div>
                <div class="col p-5 bg-white shadow-md rounded-lg">
                    <div class="grid grid-cols-1 gap-y-5">
                        <div class="col flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10 text-blue-500">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="col flex justify-center items-center">
                            <p class="text-sm font-semibold text-blue-500">5 Minutes</p>
                        </div>
                    </div>
                </div>
                <div class="col p-5 bg-white text-blue-500 hover:bg-blue-500 hover:text-white duration-200 cursor-pointer shadow-md rounded-lg" onclick="window.location.replace('/');">
                    <div class="grid grid-cols-1 gap-y-5">
                        <div class="col flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                        </div>
                        <div class="col text-center">
                            <p class="text-sm font-semibold">Back to Home Page</p>
                        </div>
                    </div>
                </div>
                <div class="col p-5 bg-blue-500 shadow-md rounded-lg">
                    <div class="grid grid-cols-1 gap-y-5">
                        <div class="col flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10 text-white">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="col text-center">
                            <p class="text-sm font-semibold text-white">Next Exercise</p>
                            <p class="text-xs font-semibold text-white text-opacity-70">Sit Up</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-full">
            <div class="grid grid-cols-3 2xl:grid-cols-4 gap-5 ">
                <div class="col-span-full mt-10">
                    <h2 class="font-bold text-2xl">Workout Recommendations</h2>
                </div>
                <!-- card start -->
                <?php foreach ($recommendations as $recommendation) : ?>
                    <div class="col relative rounded-lg bg-white shadow-lg">
                        <img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-32">
                        <div class="absolute bottom-0 right-0 bg-black bg-opacity-50 w-full h-full rounded-lg flex items-end justify-start">
                            <h2 class="text-lg font-bold text-white mb-5 ml-5"><?= $recommendation['name']; ?></h2>
                        </div>
                        <a href="" class="absolute top-0 left-0 w-full h-full bg-transparent z-20">
                        </a>
                    </div>
                <?php endforeach; ?>
                <!-- card end -->
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

    function finish_step() {

    }
</script>
<?= $this->endSection(); ?>