<?php
$slug = basename($_SERVER["REQUEST_URI"]);
$url = 'http://staging.evoteapp.com/api/wiki/'.$slug;
//$url = 'http://localhost:8000/api/wiki/'.$slug;

$page = json_decode(file_get_contents($url), true);
if (empty($page) || empty($page['published']))
    header("location: /");
$app_name = 'SecuredVoting';
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $page['title'].' | '.$app_name ?></title>
    <meta name="description" content="<?php echo $page['meta']['description'] ?>" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Replace with your tailwind.css once created-->
    <style type="text/tailwindcss">
        @layer base {
            h2 {
                @apply text-3xl lg:text-4xl font-bold text-gray-900;
            }
            ul {
                @apply list-disc list-inside;
            }
            figcaption {
                @apply text-sm text-gray-600;
            }
        }
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
    <div class="w-full space-y-6 px-4 md:px-6 text-gray-800 leading-normal" style="font-family:Georgia,serif;">
        <!--Post Content-->
        <?php echo $page['content']; ?>
            <!--/ Post Content-->
    </div>
</div>
<!--/container-->
<script>
    /* Progress bar */
    //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
    var h = document.documentElement,
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight',
        progress = document.querySelector('#progress'),
        scroll;
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");

    document.addEventListener('scroll', function() {

        /*Refresh scroll % width*/
        scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
        progress.style.setProperty('--scroll', scroll + '%');

        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
            // header.classList.add("bg-[#1b223e]");
            header.classList.add("shadow");
            // navcontent.classList.remove("bg-gray-100");
            // navcontent.classList.add("bg-[#1b223e]");
        } else {
            // header.classList.remove("bg-[#1b223e]");
            header.classList.remove("shadow");
            // navcontent.classList.remove("bg-[#1b223e]");
            // navcontent.classList.add("bg-gray-100");

        }

    });


    //Javascript to toggle the menu
    document.getElementById('nav-toggle').onclick = function() {
        document.getElementById("nav-content").classList.toggle("hidden");
    }
</script>
</body>
</html>
