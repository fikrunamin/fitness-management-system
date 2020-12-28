<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>
<div class="col-span-full flex justify-between mb-10">
	<div class="pr-16 break-words">
		<h2 class="font-bold text-3xl mb-2">Fitness Management System</h2>
		<p class="text-black text-opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eum.</p>
	</div>
	<div class="flex justify-center">
		<div class="w-10 h-10 text-blue-50 rounded-lg bg-blue-500 flex items-center justify-center mr-5">
			<button class="relative flex items-center justify-center focus:outline-none">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-white">
					<path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
				</svg>
				<span class="flex h-3 w-3 absolute top-0 right-0">
					<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-pink-400 opacity-75"></span>
					<span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500"></span>
				</span>
			</button>
		</div>
		<div class="w-10 h-10 text-blue-50 rounded-lg bg-blue-500 flex items-center justify-center">
			<a href="#" class="flex items-center justify-center">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
				</svg>
			</a>
		</div>
	</div>
</div>
<div class="col-span-2 xl:col-span-3 grid grid-cols-1 gap-y-10">
	<div class="col">
		<div class="grid grid-cols-2 xl:grid-cols-3 gap-5">
			<div class="col-span-full">
				<h2 class="font-bold text-2xl">Today's Workouts</h2>
			</div>
			<!-- card start -->
			<?php for ($i = 0; $i < 3; $i++) : ?>
				<div class="col rounded-lg bg-white shadow-lg">
					<img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-48">
					<div class="px-10 py-5">
						<h2 class="text-lg font-semibold mb-2">Push Up</h2>
						<p class="text-sm text-black text-opacity-50 leading-relaxed">Do 5 times push-up a day make you fresh and happy!</p>
					</div>
					<div class="grid grid-cols-1 px-10 pb-10 gap-y-2.5 text-blue-500">
						<div class="col flex justify-start items-center">
							<span class="material-icons">
								loop
							</span>
							<p class="pl-5 text-sm font-semibold">5 Times</p>
						</div>
						<div class="col flex justify-start items-center">
							<span class="material-icons">
								place
							</span>
							<p class="pl-5 text-sm font-semibold">Indoor / outdoor</p>
						</div>
						<div class="col flex justify-start items-center">
							<span class="material-icons">
								accessibility
							</span>
							<p class="pl-5 text-sm font-semibold">Medium</p>
						</div>
						<div class="col flex justify-start items-center mt-5">

							<a href="/workouts/push-up" class="w-full bg-blue-500 text-white font-semibold text-lg rounded-lg h-14 flex justify-center items-center">
								Start Push Up
							</a>
						</div>
					</div>
				</div>
			<?php endfor; ?>
			<!-- card end -->
		</div>
	</div>
	<div class="col">
		<div class="grid grid-cols-2 xl:grid-cols-3 gap-5">
			<div class="col-span-full">
				<h2 class="font-bold text-2xl">Today's Meals</h2>
			</div>
			<!-- card start -->
			<?php for ($i = 0; $i < 3; $i++) : ?>
				<div class="col rounded-lg bg-white shadow-lg">
					<img src="data:image/jpeg;base64,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" alt="" class="rounded-lg object-cover mx-auto w-full h-48">
					<div class="px-10 py-5">
						<h2 class="text-lg font-semibold mb-2">Red Apples</h2>
						<p class="text-sm text-black text-opacity-50 leading-relaxed">Eat 2 fresh red apples make you fresh!</p>
					</div>
					<div class="grid grid-cols-1 px-10 pb-10 gap-y-2.5">
						<div class="col flex justify-start items-center">
							<span class="material-icons">
								local_dining
							</span>
							<p class="pl-5 text-sm text-black font-semibold">Breakfast</p>
						</div>
						<div class="col flex justify-start items-center">
							<span class="material-icons">
								access_time
							</span>
							<p class="pl-5 text-sm text-black font-semibold">5 Minutes</p>
						</div>
						<div class="col flex justify-start items-center">
							<span class="material-icons">
								place
							</span>
							<p class="pl-5 text-sm text-black font-semibold">Home</p>
						</div>
						<div class="col flex justify-start items-center mt-5">
							<button class="w-full bg-blue-500 text-white font-semibold text-lg rounded-lg h-14">
								Okay, Done
							</button>
						</div>
					</div>
				</div>
			<?php endfor; ?>
			<!-- card end -->
		</div>
	</div>
</div>
<div class="col">
	<div class="grid grid-cols-1 pl-10 gap-y-5">
		<div class="col bg-white shadow-md rounded-lg p-5">
			<div class="flex justify-start items-center">
				<img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Wayfarers&hairColor=Red&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Heather&eyeType=Close&eyebrowType=Default&mouthType=Default&skinColor=Brown' class="w-14 h-14 object-cover rounded-full" />
				<p class="text-sm font-semibold pl-5">Muhammad Fikrun Amin</p>
			</div>
		</div>
		<div class="col bg-white shadow-md rounded-lg p-5">
			<div class="grid grid-cols-2 gap-y-3">
				<?php for ($i = 0; $i < 4; $i++) : ?>
					<div class="col">
						<div class="w-full flex items-center justify-center mb-2">
							<p class="text-6xl font-semibold">2</p>
						</div>
						<div class="w-full text-center px-5">
							<p class="text-xs break-words">Workouts Done</p>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<div class="col bg-white shadow-md rounded-lg p-5">
			<div>
				<h1 class="text-md font-semibold">Daily Drink Water Progress</h1>
			</div>
			<div class="w-full py-6">
				<div class="flex">
					<div class="w-1/2">
						<div class="relative mb-2">
							<div class="w-10 h-10 mx-auto bg-blue-500 rounded-full text-lg text-white flex items-center">
								<span class="material-icons text-center text-white w-full">
									opacity
								</span>
							</div>
						</div>

						<div class="text-xs text-center md:text-base"><span class="left-amount">0</span>ml</div>
					</div>

					<div class="w-1/2">
						<div class="relative mb-2">
							<div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
								<div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
									<div class="w-0 bg-blue-300 py-1 rounded drink-progress"></div>
								</div>
							</div>

							<div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-gray-600 text-lg flex items-center drink-target">
								<span class="material-icons text-center w-full">
									opacity
								</span>
							</div>
						</div>

						<div class="text-xs text-center md:text-base"><span class="right-amount">200</span>ml</div>
					</div>
				</div>
			</div>
			<div>
				<p class="text-sm text-black text-opacity-50 leading-relaxed">You need to drink <span class="font-semibold text-blue-500 text-opacity-100">2 Litres of water </span>per day!</p>
				<button class="focus:outline-none w-full bg-blue-500 text-white rounded-lg font-semibold mt-5 p-3" onclick="drink()">Done 200ml</button>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script>
	function drink() {
		$('.drink-progress').addClass('w-full', {
			duration: 500,
			easing: 'linear',
			complete: function() {
				$('.drink-progress').removeClass('w-0')
				$('.drink-target').removeClass('bg-white border-2 border-gray-200 text-gray-600')
				$('.drink-target').addClass('bg-blue-500 text-white', 200)

				setTimeout(() => {
					$('.drink-progress').removeClass('w-full')
					$('.drink-progress').addClass('w-0', 300)
					$('.drink-target').addClass('bg-white border-2 border-gray-200 text-gray-600')
					$('.drink-target').removeClass('bg-blue-500 text-white', 300)


					let left_amount = $('.left-amount').html()
					$('.left-amount').html(parseInt(left_amount) + 200)

					let right_amount = $('.right-amount').html()
					$('.right-amount').html(parseInt(right_amount) + 200)
				}, 1000);
			}
		})
	}
</script>
<?= $this->endSection(); ?>