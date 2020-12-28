<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>

    <title><?= $title; ?> - Fitness Management System</title>
</head>

<body>
    <div class="h-screen mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-2 bg-gray-50 h-screen max-h-screen overflow-y-auto pt-16" id="sidebar">
                <!-- Sidebar Navigation -->
                <?= $this->include('sidebar_navigation'); ?>
            </div>
            <div class="col-span-10 bg-blue-50 h-screen max-h-screen overflow-y-auto px-10" id="main-content">
                <!-- Content -->
                <div class="relative grid grid-cols-3 xl:grid-cols-4 py-16 gap-5">

                    <div class="fixed left-0 top-4 toggle-menu hidden" onclick="toggle_menu(this)">
                        <button class=" bg-blue-500 w-28 h-10 flex justify-center items-center rounded-r-lg focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <p class="text-white pl-3">Menu</p>
                        </button>
                    </div>

                    <?= $this->renderSection('content'); ?>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <?= $this->renderSection('scripts'); ?>

        <script>
            function toggle_menu(e) {
                $('.toggle-menu').removeClass("w-0 hidden")
                $(e).addClass("w-0 hidden")

                $("#sidebar").toggleClass("hidden")

                if ($("#sidebar").hasClass('hidden'))
                    $("#main-content").removeClass("col-span-9").addClass('col-span-12')
                else
                    $("#main-content").removeClass("col-span-12").addClass('col-span-9')

            }

            function open_submenu(e) {
                $(e).siblings('.submenu').slideToggle()
            }
        </script>
</body>

</html>