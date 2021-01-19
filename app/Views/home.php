<?= $this->extend('layouts/app_layout'); ?>

<?= $this->section('content'); ?>
<div class="col-span-full flex justify-between mb-10">
	<div class="pr-16 break-words">
		<h2 class="font-bold text-3xl mb-2">Fitness Management System</h2>
		<!-- <p class="text-black text-opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eum.</p> -->
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
			<a href="/auth/logout" class="flex items-center justify-center">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
				</svg>
			</a>
		</div>
	</div>
</div>
<div class="col-span-2 xl:col-span-3 grid grid-cols-1 gap-y-10">
	<div class="col">
		<div class="grid grid-cols-2 2xl:grid-cols-3 gap-5">
			<div class="col-span-full">
				<h2 class="font-bold text-2xl">New Workouts</h2>
			</div>
			<!-- card start -->
			<?php foreach ($workouts as $workout) : ?>
				<div class="col relative rounded-lg shadow-md bg-white">
					<div class="relative rounded-lg bg-white h-32">
						<?php if ($workout['image'] != '') : ?>
							<img src="/<?= $workout['image']; ?>" alt="" class="rounded-lg object-cover mx-auto w-full h-32">
						<?php else : ?>
							<img src="https://s2.bukalapak.com/bukalapak-kontenz-production/content_attachments/27767/w-744/jumlah_push_up_3.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-32">
						<?php endif; ?>
						<div class="absolute bottom-0 right-0 bg-black bg-opacity-50 w-full h-full rounded-lg flex items-end justify-start">
							<h2 class="text-lg font-bold text-white mb-5 ml-5"><?= $workout['name']; ?></h2>
						</div>
						<a href="/workouts/<?= $workout['slug']; ?>" class="absolute top-0 left-0 w-full h-full bg-transparent z-20">
						</a>
					</div>
				</div>
			<?php endforeach; ?>
			<!-- card end -->
		</div>
	</div>
	<div class="col">
		<div class="grid grid-cols-2 xl:grid-cols-3 gap-5">
			<div class="col-span-full">
				<h2 class="font-bold text-2xl">New Healthy Food</h2>
			</div>
			<!-- card start -->
			<?php foreach ($foods as $food) : ?>
				<div class="col relative rounded-lg shadow-md bg-white">
					<div class="relative rounded-lg bg-white h-32">
						<?php if ($food['image'] != '') : ?>
							<img src="<?= $food['image']; ?>" alt="" class="rounded-lg object-cover mx-auto w-full h-32">
						<?php else : ?>
							<img src="https://i.stack.imgur.com/y9DpT.jpg" alt="" class="rounded-lg object-cover mx-auto w-full h-32">
						<?php endif; ?>
						<div class="absolute bottom-0 right-0 bg-black bg-opacity-50 w-full h-full rounded-lg flex items-end justify-start">
							<h2 class="text-lg font-bold text-white mb-5 ml-5"><?= $food['name']; ?></h2>
						</div>
						<a href="/healthy-foods/<?= $food['slug']; ?>" class="absolute top-0 left-0 w-full h-full bg-transparent z-20">
						</a>
					</div>
				</div>
			<?php endforeach; ?>
			<!-- card end -->
		</div>
	</div>
</div>
<div class="col">
	<div class="grid grid-cols-1 pl-5 gap-y-5">
		<div class="col bg-white shadow-md rounded-lg p-5">
			<div class="flex justify-start items-center">
				<img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Wayfarers&hairColor=Red&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Heather&eyeType=Close&eyebrowType=Default&mouthType=Default&skinColor=Brown' class="w-14 h-14 object-cover rounded-full" />
				<p class="text-sm font-semibold pl-5"><?= ucwords(session()->get('data_user')['fullname']); ?></p>
			</div>
		</div>
		<!-- <div class="col bg-white shadow-md rounded-lg p-5">
			<div class="grid grid-cols-2 gap-y-3">
				<?php for ($i = 0; $i < 1; $i++) : ?>
					<div class="col-span-full">
						<div class="w-full flex items-center justify-center mb-2">
							<p class="text-6xl font-semibold">2</p>
						</div>
						<div class="w-full text-center px-5">
							<p class="text-xs break-words">Workouts Done</p>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div> -->
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