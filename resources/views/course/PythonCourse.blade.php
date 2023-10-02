@extends('layout.mainLayout')

@section('content')
@include('navbar.navbar')
<div class="w-full flex flex-col pt-[10rem] ">
    <div class="px-11 flex flex-col">
                <span class="font-dm font-[700] text-brown-dark text-[32px]">Python Course
                </span>
                <span class="w-[31%] font-dm font-[400] text-brown-dark text-[18px]">Learn Python to build project websites or mobile applications from basic to advanced with experienced mentors at CoDelicate.
                </span>
            </div>
    <div class="w-full flex items-center justify-center pt-[3.75rem]">
    <!-- Kolom Kiri (1/5) -->
    <div class="w-1/4 h-766px bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <p>Konten Kolom Kiri</p>
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </div>

    <!-- Kolom Kanan (4/5) -->
    <div class="w-3/4 h-766px flex justify-center flex-row">
    @foreach ($courses as $course)
        <!-- Card Pertama (1/4) -->
        <div class="w-1/3 bg-white border-2 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="border-color: #302B27;">
            <a href="#">
                <img class="rounded-t-lg" style="border-radius: 6px 6px 0 0;" src="/images/Container.png" alt="" />
            </a>
            <div class="pl-7">
                <a href="#">
                    <h5 class="pt-6 mb-2 text-2xl font-bold tracking-tight dark:text-white" style="color: #302B27; font-family: 'DM Sans', sans-serif; font-size: 18px; margin-bottom: 0; padding-bottom: 0;">
                    {{ $course->judul }}</h5>
                </a>
                <p class="text-lg font-normal text-gray-700 dark:text-gray-400" style="font-family: 'DM Sans', sans-serif; font-size: 18px; margin-top: 0; padding-top: 0; margin-bottom: 0; padding-bottom: 0;">
                {{ $course->harga }}</p>
                <img src="/images/5star.png" class="mt-5" style="width: 133.5px; height: auto; margin-top: 1; padding-top: 0; margin-bottom: 0; padding-bottom: 1.5rem;">
            </div>
        </div>
        @endforeach
    </div>
</div>

</div>




<!-- @include('footer.footer') -->
@endsection
    
    <!-- <div class="w-full flex flex-col justify-center items-center pt-[10rem] ">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
    </div> -->

    @include('footer.footer')

