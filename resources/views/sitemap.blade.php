@php
        $app_name = 'SecuredVoting';
        $base_url = url('wiki');
        $pages = \App\Models\Page::wherePublished(true)->latest()->pluck('title', 'slug');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo 'Sitemap | '.$app_name ?></title>
{{--    <meta name="author" content="name" />--}}
{{--    <meta name="description" content="description" />--}}
{{--    <meta name="keywords" content="keywords,here" />--}}
{{--    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Replace with your tailwind.css once created-->
    <style type="text/tailwindcss">

    </style>
</head>


<body class="bg-[#1b223e] font-sans leading-normal tracking-normal">
<span class="bg-[#1b223e]"></span>

<nav id="header" class="fixed w-full z-10 top-0 bg-[#1b223e]">

    <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-center mt-0 py-3">

        <div class="pl-4">
            <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="#">
                <img src="https://securedvoting.com/online-voting-system/img/secured-voting-logo.png"
                     alt="<?php echo $app_name ?>"
                    class="w-40" />
            </a>
        </div>
    </div>
</nav>

<!--Container-->
<div class="container w-full md:max-w-3xl mx-auto my-20 bg-white py-8 rounded-lg shadow">
    <div class="w-full grid grid-col-3 px-4 md:px-6 text-gray-800 leading-normal">
        <?php
            foreach ($pages as $slug => $title) {
                ?>
        <a href="<?php echo $base_url.'/'.$slug ?>">
                <?php echo $title ?>
        </a>
        <?php
            }
        ?>
    </div>
</div>
<!--/container-->
</body>
</html>
