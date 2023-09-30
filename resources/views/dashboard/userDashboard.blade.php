@extends('layout.mainLayout')

@section('content')
    @include('navbar.navbar')
    <div class="w-full flex flex-col justify-center items-center pt-[10rem] ">
        <div class="w-[30%] flex flex-col  justify-center items-center ">
            <span class="font-dm font-[700] text-center text-brown-dark text-[56px]">Level Up Your Coding Skills
                with CoDelicate.
            </span>
            <span class="font-dm font-[400] text-center text-brown-dark text-[18px]">Whether you want to excel in web
                development, mobile development, or strengthen basic
                software engineering skills, there is a course for you.
            </span>
        </div>

        <div class="flex flex-col w-[90%]  justify-center items-between my-10">
            @php
                $x = 0;
            @endphp
            @for ($i = 0; $i < 5; $i++)
                <div class="flex flex-row gap-4 my-2 justify-between items-center">
                    @for ($j = $x; $j < 5 * $i; $j++)
                        <div class="flex justify-center items-center px-20 py-4 bg-white gap-8 rounded-2xl">
                            <div class="flex">
                                <img src="/images/{{ $bidangs[$j]['gambar'] }}.png" class="object-contain" />
                            </div>
                            <span
                                class="font-dm font-[500] text-[15px] text-center">{{ $bidangs[$j]['nama_bidang'] }}</span>
                        </div>
                        @php
                            $x++;
                        @endphp
                    @endfor
                </div>
            @endfor
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center my-10">
        <div class="w-[29%] flex flex-col justify-center items-center my-10 ">
            <span class="text-center uppercase font-dm font-[700] text-[18px] text-brown-dark">
                pricing
            </span>
            <span class="text-center font-dm font-[700] text-[32px] text-brown-dark capitalize">
                Choose your Plan.
            </span>
            <span class="text-center font-dm font-[400] text-[18px] text-brown-dark capitalize">
                Monthly subscription for access to all materials, without limits. The longer it takes, the more savings and
                big profits.
            </span>
        </div>

        <div class="w-[90%] flex flex-row gap-10 justify-center items-start">
            @foreach ($plans as $plan)
                <div class="w-[387px]  bg-white rounded-xl px-8 py-4 ">
                    <div class="flex flex-col px-8 py-6  justify-center items-center">
                        <div class="flex justify-start items-center w-full">
                            <span class="line-through font-inter font-[500] text-[20px] text-brown-dark">
                                Rp {{ number_format($plan->harga) }}
                            </span>
                        </div>
                        <div class="flex justify-start items-center w-full">
                            <span class="font-dm font-[700] text-[44px] text-brown-dark">
                                Rp {{ number_format($plan->diskon) }}
                            </span>
                        </div>
                        <div class="flex justify-center items-center w-full">
                            <span class="font-dm font-[700] text-brown-dark text-[20px] uppercase">{{ $plan->durasi }}
                                bulan</span>
                        </div>
                    </div>

                    <div class="flex justify-star items-center my-4">
                        <div class="w-[80%] flex justify-start items-center">
                            <span class="text-start font-dm capitalize font-[400] text-[18px] text-brown-dark">
                                Untuk akses semua,
                                <br />
                                setara Rp {{ number_format($plan->diskon / $plan->durasi, 0) }} / bulan.
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-rows-1 grid-flow-row gap-4 my-4">
                        @foreach ($plan['fiturs'] as $fitur)
                            <div class="flex flex-row gap-3 justify-start items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                    fill="none">
                                    <g clip-path="url(#clip0_53_353)">
                                        <path
                                            d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z"
                                            fill="#83B692" />
                                        <path d="M7.11719 13.8405L10.479 17.2023L18.8835 8.79773" stroke="white"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_53_353">
                                            <rect width="26" height="26" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="font-dm font-[700] text-brown-dark text-[18px]">
                                    {{ $fitur->nama_fitur }}
                                </span>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex justify-center items-center mx-auto my-4">
                        <button class="w-[327px] py-7 px-14 rounded-[47px] bg-green-dark">
                            <span class="font-dm font-[700] text-[20px] text-brown-dark">
                                Daftar Sekarang
                            </span>
                        </button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @include('footer.footer')
@endsection
