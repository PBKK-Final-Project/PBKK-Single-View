@extends('layout.mainLayout')

@section('content')
@include('navbar.navbar')
<div class="w-full flex flex-col pt-[10rem] bg-green-dark">
    <div class="px-11 flex flex-col">
        <span class="font-dm font-[700] text-brown-dark text-[32px]">Python Course</span>
        <span class="w-[31%] font-dm font-[400] text-brown-dark text-[18px]">Learn Python to build project websites or mobile applications from basic to advanced with experienced mentors at CoDelicate.</span>
    </div>
    <div class="w-full flex justify-center pt-[3.75rem]">
        <!-- Kolom Sort (1/5) -->
        <div class="mx-11 w-1/5 h-766px">
            <h2 class="text-xl font-bold mt-4 ml-4">Sort</h2>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> Baru Dirilis
                </label>
            </div>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> Terpopuler
                </label>
            </div>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> Sedang Promo
                </label>
            </div>

            <h2 class="text-xl font-bold mt-4 ml-4">Level</h2>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> Beginner Friendly
                </label>
            </div>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> Intermediate
                </label>
            </div>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> All Levels
                </label>
            </div>

            <h2 class="text-xl font-bold mt-4 ml-4">Type</h2>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> Starter (Rp 0)
                </label>
            </div>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> Freemium (Rp 0)
                </label>
            </div>
            <div class="ml-6 mt-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="mr-2"> Premium
                </label>
            </div>
        </div>
        
        <!-- Kolom Kiri (4/5) -->
        <div class="w-4/5 h-766px flex flex-wrap justify-start">
            @foreach ($courses as $course)
                <!-- Card Pertama (1/3) -->
                <div class="w-1/3 mb-6 pr-5">
                    <div class="bg-white border-2 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="border-color: #302B27;">
                        <a href="#">
                            <img class="rounded-t-lg" style="border-radius: 6px 6px 0 0;" src="/images/Container.png" alt="" />
                        </a>
                        <div class="pl-7">
                            <a href="#">
                                <h5 class="pt-6 mb-2 text-2xl font-bold tracking-tight dark:text-white" style="color: #302B27; font-family: 'DM Sans', sans-serif; font-size: 18px; margin-bottom: 0; padding-bottom: 0;">
                                    {{ $course->judul }}
                                </h5>
                            </a>
                            <p class="text-lg font-normal text-gray-700 dark:text-gray-400" style="font-family: 'DM Sans', sans-serif; font-size: 18px; margin-top: 0; padding-top: 0; margin-bottom: 0; padding-bottom: 0;">
                                {{ $course->harga }}
                            </p>
                            <img src="/images/5star.png" class="mt-5" style="width: 133.5px; height: auto; margin-top: 1; padding-top: 0; margin-bottom: 0; padding-bottom: 1.5rem;">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('footer.footer')
