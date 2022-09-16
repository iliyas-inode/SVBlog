<!DOCTYPE html>
<?php
$app_name = 'SecuredVoting';
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SecuredVoting | <?php echo $app_name ?></title>
    <meta name="description" content="" />
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-white font-sans leading-normal tracking-normal">
<header id="header" class="text-white fixed w-full z-10 top-0">
    <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
    <div class="mx-auto max-w-6xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-24 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/bars-3

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x-mark

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
                <div class="flex flex-shrink-0 items-center">
                    <a href="/">
                        <img class="block h-14 w-auto" src="https://securedvoting.com/online-voting-system/img/secured-voting-logo.png" alt="<?php echo $app_name ?>">
                    </a>
                </div>
                <div class="hidden space-y-2 py-4 sm:ml-6 sm:block">
                    <div class="flex items-center justify-end gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                        </svg>
                        <span>
                            +1(631)731-3526 / +91(988)446-4996
                        </span>
                    </div>
                    <div class="flex items-center space-x-px uppercase">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>

                        <div class="group space-y-2 relative ml-3 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            <div class="flex items-center justify-start gap-2">
                                <span aria-expanded="false" aria-haspopup="true">
                                    Products
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="group-hover:block hidden absolute right-0 z-10 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">Voting</a>
                                <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 pl-8" role="menuitem" tabindex="-1">- Features</a>
                                <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 pl-8" role="menuitem" tabindex="-1">- Demo</a>
                                <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 pl-8" role="menuitem" tabindex="-1">- Services</a>
                                <a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 pl-8" role="menuitem" tabindex="-1">- Price</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">Survey</a>
                            </div>
                        </div>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Our Clients</a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Demo</a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Price</a>

                        <div class="group space-y-2 relative ml-3 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            <div class="flex items-center justify-start gap-2">
                                <span aria-expanded="false" aria-haspopup="true">
                                    Help
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="group-hover:block hidden absolute right-0 z-10 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">How It Works</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">FAQ</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">About Us</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">Contact</a>
                            </div>
                        </div>

                        <div class="flex justify-start gap-2 pl-2">
                            <a href="#" class="focus:outline-none border border-white text-white bg-[#ff8000] hover:bg-white hover:text-[#4f69a2] focus:ring-4 text-xs px-4 py-1.5">Sign In</a>

                            <a href="#" class="focus:outline-none border border-white text-white bg-[#ff8000] hover:bg-white hover:text-[#4f69a2] focus:ring-4 text-xs px-4 py-1.5">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</header>
<div
    style="background-image: url('https://securedvoting.com/img/intro-bg.jpg')"
    class="bg-gray-800 bg-cover text-white min-h-screen flex flex-col items-center justify-center">
    <div class="h-24"></div>
    <div class="max-w-6xl py-8 px-2 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-16">
        <div class="space-y-6 lg:col-span-2 text-center lg:text-start">
            <h2 class="text-3xl font-medium">
                Secure Evote Election System Voting & Polling
            </h2>
            <h3 class="text-xl font-bold">
                Election | Survey | Resolution Motion
            </h3>
            <p>
                For Association, Union, Club, Society, Council, Political Party, School, HOA Elections, AGM Voting, Company Board Meeting, Corporate Resolution Voting, IRP & CoC Meetings.
            </p>
            <p>
                Features: Highly Secure | Anonymous | OTP Verified | Manual Ballot | Multi Language | E-Vote | Water-Fall | Weight Vote | Write-in-Candidate etc
            </p>
            <p class="font-medium">
                Silver Plan Free Upto 25 voters - Absolutely Free!
                <br />
                <a href="#" class="underline">
                    Signup for Free Demo / Host your Election - Free!.
                </a>
            </p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-4 items-center">
                <a href="#" class="focus:outline-none text-white bg-[#ff8000] hover:bg-white hover:text-[#ff8000] rounded-lg shadow font-medium focus:ring-4 text-lg px-6 py-2.5">
                    Host Now (Setup)
                </a>
                <a href="#" class="focus:outline-none text-white bg-[#ff8000] hover:bg-white hover:text-[#ff8000] rounded-lg shadow font-medium focus:ring-4 text-lg px-6 py-2.5">
                    Vote Now
                </a>
            </div>
        </div>
        <div class="lg:pl-4 w-full lg:max-w-sm flex items-center justify-center">
            <img class="w-full object-cover" src="https://securedvoting.com/online-voting-system/img/Online-Voting-System.webp">
        </div>
    </div>
</div>
<main>
    <section class="bg-gray-100 py-8 lg:py-16">
        <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8 space-y-6">
            <h4 class="text-center text-2xl text-gray-900 uppercase font-bold">How It Works</h4>
            <p class="text-gray-600 max-w-3xl text-center mx-auto">
                Secure voting helps to organize your election in fast and easy way. You can have your election up and running in 5 minutes. Less work more turnout.
            </p>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="space-y-6">
                    <div class="flex lg:flex-row-reverse gap-4">
                        <img class="w-16 h-16" src="https://securedvoting.com/online-voting-system/img/icons/option.webp">
                        <div class="space-y-1">
                            <div class="flex gap-1 lg:justify-end items-center uppercase text-lg font-extrabold">
                                <span>1</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                                <span>Choose Plan</span>
                            </div>
                            <div class="lg:text-end text-sm text-gray-600">
                                You can choose from plans and set election options to build and run election. Take a test drive here for your election.
                            </div>
                        </div>
                    </div>
                    <div class="flex lg:flex-row-reverse gap-4">
                        <img class="w-16 h-16" src="https://securedvoting.com/online-voting-system/img/icons/members.webp">
                        <div class="space-y-1">
                            <div class="flex gap-1 lg:justify-end items-center uppercase text-lg font-extrabold">
                                <span>2</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                                <span>Upload Members</span>
                            </div>
                            <div class="lg:text-end text-sm text-gray-600">
                                You can enter member/voter data manually or upload an excel sheet in xlsx, .xls or .csv format. Check prerequisite here.
                            </div>
                        </div>
                    </div>
                    <div class="flex lg:flex-row-reverse gap-4">
                        <img class="w-16 h-16" src="https://securedvoting.com/online-voting-system/img/icons/position.webp">
                        <div class="space-y-1">
                            <div class="flex gap-1 lg:justify-end items-center uppercase text-lg font-extrabold">
                                <span>3</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                                <span>Define Positions</span>
                            </div>
                            <div class="lg:text-end text-sm text-gray-600">
                                You can define positions and number of posts for the election.
                            </div>
                        </div>
                    </div>
                    <div class="flex lg:flex-row-reverse gap-4">
                        <img class="w-16 h-16" src="https://securedvoting.com/online-voting-system/img/icons/candidate.webp">
                        <div class="space-y-1">
                            <div class="flex gap-1 lg:justify-end items-center uppercase text-lg font-extrabold">
                                <span>4</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                                <span>Add Candidates</span>
                            </div>
                            <div class="lg:text-end text-sm text-gray-600">
                                You can define the candidates with name, symbol and photo for the corresponding post(s) and create the ballot.
                            </div>
                        </div>
                    </div>
                </div>
                <img class="w-full hidden lg:block" src="https://securedvoting.com/online-voting-system/img/howitwork.webp">
                <div class="space-y-6 lg:-ml-16">
                    <div class="flex flex-row-reverse gap-4">
                        <div class="space-y-1">
                            <div class="flex gap-1 items-center uppercase text-lg font-extrabold">
                                <span>5</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                                <span>Make Payment</span>
                            </div>
                            <div class="text-sm text-gray-600">
                                Payment for the election is done based on the number of members in member data. We offer promo codes for discount.
                            </div>
                        </div>
                        <img class="w-16 h-16" src="https://securedvoting.com/online-voting-system/img/icons/payment.webp">
                    </div>
                    <div class="flex flex-row-reverse gap-4">
                        <div class="space-y-1">
                            <div class="flex gap-1 justify-start items-center uppercase text-lg font-extrabold">
                                <span>6</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                                <span>Activate &amp; Publish</span>
                            </div>
                            <div class="text-start text-sm text-gray-600">
                                You can set date, time and activate then send voting link to all the voters
                            </div>
                        </div>
                        <img class="w-16 h-16" src="https://securedvoting.com/online-voting-system/img/icons/active.webp">
                    </div>
                    <div class="flex flex-row-reverse gap-4">
                        <div class="space-y-1">
                            <div class="flex gap-1 justify-start items-center uppercase text-lg font-extrabold">
                                <span>7</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                                <span>Voting Progress</span>
                            </div>
                            <div class="text-start text-sm text-gray-600">
                                Monitor the details of voted verses not voted members also resend unique voting link to any member.
                            </div>
                        </div>
                        <img class="w-16 h-16" src="https://securedvoting.com/online-voting-system/img/icons/candidate.webp">
                    </div>
                    <div class="flex flex-row-reverse gap-4">
                        <div class="space-y-1">
                            <div class="flex gap-1 justify-start items-center uppercase text-lg font-extrabold">
                                <span>8</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                                <span>Get Result</span>
                            </div>
                            <div class="text-start text-sm text-gray-600">
                                Get your election results for resolutions and transparent voting enabled elections you can download detailed records by excel sheet.
                            </div>
                        </div>
                        <img class="w-16 h-16" src="https://securedvoting.com/online-voting-system/img/icons/option.webp">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 lg:py-16">
        <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-x-4 gap-y-8 lg:gap-y-16">
            <div class="group transition ease-in-out rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Ultimate Secure Ballot
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    The multi layer secure features such as OTP, Unique Link offers a high protection. The special key and password protection ensures ultimate encryption to organization login for election configuration.
                </p>
            </div>
            <div class="bg-gray-100 rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Unique link
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    An hash tagged unique link will be sent to all the voters via Email/Phone to vote. This link will be valid only during the polling time and this cannot be reused or duplicated by any means.
                </p>
            </div>
            <div class="rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Mobile secure
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    OTP will dynamically be generated and sent to the elector's Mobile/Email at the time of voting. This ensures high secure ballot and prevents any unauthorized attempt even if the email login was compromised.
                </p>
            </div>
            <div class="bg-gray-100 rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Anonymous Voting
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    The voting data is stored using SHA2-512-bit encryption and it is secure and protected. This cannot be retrieved and matched with any elector and the secrecy of voting privilege is 100% protected.
                </p>
            </div>
            <div class="rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Quick and Easy Steps
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    Organizations can easily conduct an election in 8 easy steps. Set Options | Upload Member Data | Define Positions | Define Candidates | Activate and Publish Election | View Results.
                </p>
            </div>
            <div class="bg-gray-100 rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Economical
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    Conducting an election is easy at unbelievable low cost, this saves money for the Organization. It’s really inexpensive — Check out our low rates.
                </p>
            </div>
            <div class="rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Weighted Vote
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    Weighted voting is an system in which not all voters have the same amount of influence over the outcome of an election. Instead votes of different voters are given different weight.
                </p>
            </div>
            <div class="bg-gray-100 rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Transparent Voting
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    This option enables transparent voting and reveals who voted for who. When generating you will have the option of generating a detailed report indicating the choice voted by each member. This option is legal and mandatory in certain states and Goverment elections. However the transparent voting notification will be displayed in all the ballot sheets so that the member is aware that this election is tranparent election.
                </p>
            </div>
            <div class="rounded-lg py-6 px-6 flex flex-col justify-start items-center gap-4">
                <div class="bg-gray-500 rounded p-2 text-white -mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                    </svg>
                </div>
                <div class="text-lg leading-7 font-semibold text-gray-900">
                    Random Candidates
                </div>
                <p class="text-justify text-gray-600 text-sm">
                    This option enables random sequencing of candidates appearing on the ballot sheet. The positions will appear on the order in which it is entered during setup. The candidates will be randomly distributed such that every candidate gets a fair chance of advantage over the listing for each position.
                </p>
            </div>
        </div>
    </section>
    <section class="bg-gray-100 py-8 lg:py-16">
        <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8 space-y-8">
            <h4 class="text-center text-gray-900 text-2xl uppercase font-bold">Our Service Industry</h4>
            <p class="max-w-3xl text-gray-600 text-center mx-auto">
                It works great for Charities, Non Profitable Organizations, Condo Owners, Credit Unions, Companies, Associations, Home Owner Associations, Unions, Student Groups, Fraternities,High Schools, Colleges, Universities, Unions, Municipalities, State Government, Political Groups
            </p>
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <div class="relative">
                    <img class="w-full rounded"
                         src="https://securedvoting.com/online-voting-system/img/services/club.webp">
                    <div class="absolute inset-x-0 bottom-0 px-2 py-2 text-white bg-gray-900 bg-opacity-80 font-bold rounded-b">
                        Clubs
                    </div>
                </div>
                <div class="relative">
                    <img class="w-full rounded"
                         src="https://securedvoting.com/online-voting-system/img/services/ngo.webp">
                    <div class="absolute inset-x-0 bottom-0 px-2 py-2 text-white bg-gray-900 bg-opacity-80 font-bold rounded-b">
                        NGO
                    </div>
                </div>
                <div class="relative">
                    <img class="w-full rounded"
                         src="https://securedvoting.com/online-voting-system/img/services/homeowner.webp">
                    <div class="absolute inset-x-0 bottom-0 px-2 py-2 text-white bg-gray-900 bg-opacity-80 font-bold rounded-b">
                        Homeowners Association
                    </div>
                </div>
                <div class="relative">
                    <img class="w-full rounded"
                         src="https://securedvoting.com/online-voting-system/img/services/union.webp">
                    <div class="absolute inset-x-0 bottom-0 px-2 py-2 text-white bg-gray-900 bg-opacity-80 font-bold rounded-b">
                        Associations & Unions
                    </div>
                </div>
                <div class="relative">
                    <img class="w-full rounded"
                         src="https://securedvoting.com/online-voting-system/img/services/chamber.webp">
                    <div class="absolute inset-x-0 bottom-0 px-2 py-2 text-white bg-gray-900 bg-opacity-80 font-bold rounded-b">
                        Chambers and Societies
                    </div>
                </div>
                <div class="relative">
                    <img class="w-full rounded"
                         src="https://securedvoting.com/online-voting-system/img/services/institution.webp">
                    <div class="absolute inset-x-0 bottom-0 px-2 py-2 text-white bg-gray-900 bg-opacity-80 font-bold rounded-b">
                        Trust & Educational Institutions
                    </div>
                </div>
                <div class="relative">
                    <img class="w-full rounded"
                         src="https://securedvoting.com/online-voting-system/img/services/emp.webp">
                    <div class="absolute inset-x-0 bottom-0 px-2 py-2 text-white bg-gray-900 bg-opacity-80 font-bold rounded-b">
                        Employee Associations
                    </div>
                </div>
                <div class="relative">
                    <img class="w-full rounded"
                         src="https://securedvoting.com/online-voting-system/img/services/corporate.webp">
                    <div class="absolute inset-x-0 bottom-0 px-2 py-2 text-white bg-gray-900 bg-opacity-80 font-bold rounded-b">
                        Corporate and Industry
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 lg:py-16">
        <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8 space-y-16">
            <h4 class="text-center text-gray-900 text-2xl uppercase font-bold">Happy Clients</h4>
            <div class="grid grid-cols-3 lg:grid-cols-6 gap-8">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/onlinevote.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/onlinevote2.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/onlinevote3.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/Fronjunior_175x175.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/Axemenmc_175x175.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/Jtfunion_175x175.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/hongyuan_175X175.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/iyf_175x175.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/simpler_175x175.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/esic_175x175.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/spo_175x175.webp">
                <img class="p-1 lg:p-6 hover:p-0" src="https://securedvoting.com/online-voting-system/img/UAE_175x175.webp">
            </div>
        </div>
    </section>
    <section class="bg-gray-100 py-8 lg:py-16">
        <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8 space-y-6">
            <h4 class="text-center text-gray-900 text-2xl uppercase font-bold">About Us</h4>
            <p class="text-gray-600 text-center mx-auto text-justify">
                Online Voting System solution providers for elections of HOA, Societies, Associations, Clubs, Educaional Institutions, Political Parties, and Government Agencies. Completely secure with two step verification by OTP by SMS / Email.
            </p>
            <p class="text-gray-600 text-center mx-auto text-justify">
                Members can vote from mobile phones in just one click. No Password, forgot password, reset password hassel. Voting enabled by EUVL (Enctypted Unique Voting Link) which is highly secure. Anyone can vote from anywhere. Most convenient, Economical and cost saving. Extremely useful in pandemic conditions where mass gathering can be avoided.
            </p>
            <p class="text-gray-600 text-center mx-auto text-justify">
                Members can vote from mobile phones in just one click. No Password, forgot password, reset password hassel. Voting enabled by EUVL (Enctypted Unique Voting Link) which is highly secure. Anyone can vote from anywhere. Most convenient, Economical and cost saving. Extremely useful in pandemic conditions where mass gathering can be avoided.
            </p>
            <p class="text-gray-600 text-center mx-auto text-justify">
                Our Online voting application is designed the best and optimized for usage by Recreation Clubs, Social Service Clubs, Organizations, Associations, NGO, Political Parties, Societies, Home/Flat Owner Associations, Trade Unions and Educational Institutions.
            </p>
            <p class="text-gray-600 text-center mx-auto text-justify">
                To achieve excellence in providing secure and efficient application and to create value for our clients.
            </p>
        </div>
    </section>
</main>
<footer class="bg-[#1b223e] text-gray-300">
    <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8 text-center lg:text-left">
        <div class="flex justify-center items-center lg:justify-between p-6 border-b border-gray-100">
            <div class="mr-12 hidden lg:block">
                <span>Get connected with us on social networks:</span>
            </div>
            <div class="flex gap-6 justify-center">
                <a href="https://www.facebook.com/onlinevotingsystem/">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                         class="w-2.5" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 320 512">
                        <path fill="currentColor"
                              d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                        </path>
                    </svg>
                </a>
                <a href="https://twitter.com/secured_voting">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                         class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                              d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                        </path>
                    </svg>
                </a>
                <a href="https://plus.google.com/110439673786489524228">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
                         class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <path fill="currentColor"
                              d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="mx-6 py-10 text-center md:text-left">
            <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="">
                    <h6 class="uppercase font-semibold mb-4 flex items-center justify-center md:justify-start">
                        <a href="/">
                            <img class="block h-14 w-auto" src="https://securedvoting.com/online-voting-system/img/secured-voting-logo.png" alt="<?php echo $app_name ?>">
                        </a>
                    </h6>
                    <p class="text-justify">
                        Secure voting helps to organize your election in fast and easy way. You can have your election up and running in 5 minutes. Less work more turnout.
                    </p>
                </div>
                <div class="justify-self-center">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                        Products
                    </h6>
                    <p class="mb-4">
                        <a href="#!">Survey</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!">Voting Demo</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!">Ballot Preview</a>
                    </p>
                </div>
                <div class="justify-self-center">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                        Useful links
                    </h6>
                    <p class="mb-4">
                        <a href="#!">Pricing</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!">How It Works</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!">FAQ</a>
                    </p>
                    <p>
                        <a href="#!">About Us</a>
                    </p>
                </div>
                <div class="">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                        Contact
                    </h6>
                    <p class="hidden flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
                             class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                                  d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                            </path>
                        </svg>
                    </p>
                    <a href="mailto:evote@securedvoting.awsapps.com" class="flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                             class="w-4 mr-4 shrink-0" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor"
                                  d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                            </path>
                        </svg>
                        <span>evote@securedvoting.awsapps.com</span>
                    </a>
                    <a href="tel:+16317313526" class="flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                             class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor"
                                  d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                        +1(631)731-3526
                    </a>
                    <a href="tel:+919884464996" class="flex items-center justify-center md:justify-start">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                             class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor"
                                  d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                        +91(988)446-4996
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center p-6 text-gray-400">
            <span>© 2022 Copyright - NY Soft Services</span>
        </div>
    </div>
</footer>
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
            header.classList.add("bg-[#1b223e]");
            header.classList.add("shadow");
            // navcontent.classList.remove("bg-gray-100");
            // navcontent.classList.add("bg-[#1b223e]");
        } else {
            header.classList.remove("bg-[#1b223e]");
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
