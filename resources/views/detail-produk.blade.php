<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo2.png" type="image/x-icon">
    <title> - WindayOfficial</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-contain md:bg-cover lg:bg-cover bg-no-repeat bg-fixed lg:bg-center bg-white/30" style="background-image: url('/image/winday/bg5.png')">
    <div class="fixed top-3 left-3 z-50  backdrop-blur-md bg-white/50 rounded-full animate__animated animate__fadeInLeft">
        <a href="{{ route('fhome') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0V0z" />
                <path d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42-.39-.39-1.02-.39-1.41 0l-6.59 6.59c-.39.39-.39 1.02 0 1.41l6.59 6.59c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z" />
            </svg>
        </a>
    </div>

    <div class="lg:mx-[350px] bg-white">
        <div class="w-full grid justify-items-center animate__animated animate__fadeIn">
            <img src="/image/produks/{{ $produks['gambar']}}" alt="WindayOfficial" class="shadow-md rounded-sm ">
        </div>
        <h1 class="mt-8 mb-10 px-2 text-center text-3xl font-bold font-poppins lg:text-4xl animate__animated animate__fadeInDown">{{$produks['nama_produk'] }}</h1>
        <hr>
        <div class="w-full mb-6">
            <p class="flex mt-4 justify-center animate__animated animate__fadeIn">
                <span>Lihat Produk di : </span>
            </p>
            <div class=" flex flex-wrap justify-center">
                @if ($produks['link_shopee'] != null)
                    <a href="{{$produks['link_shopee'] }}" class=" my-4  py-4 px-4 animate__animated animate__fadeInUp ">
                        <img src="/image/winday/shopee.png" alt="shopee" width="50" height="50" class="">
                    </a>
                @endif
                @if ($produks['link_tiktok'] != null)
                    <a href="{{$produks['link_tiktok'] }}" class=" my-4  py-4 px-4   animate__animated animate__fadeInUp ">
                        <img src="/image/winday/tik-tok.jpg" alt="tiktok" width="50" height="50" class="rounded-lg">
                    </a>
                @endif
                @if ($produks['link_ig'] != null)
                    <a href="{{$produks['link_ig'] }}" class=" my-4  py-4 px-4  animate__animated animate__fadeInUp ">
                        <img src="/image/winday/instagram.png" alt="instagram" width="50" height="50" class="">
                    </a>
                @endif
                @if ($produks['link_facebook'] != null)
                    <a href="{{$produks['link_facebook'] }}" class=" my-4  py-4 px-4   animate__animated animate__fadeInUp ">
                        <img src="/image/winday/facebook1.png" alt="facebook" width="50" height="50" class="rounded-lg">
                    </a>
                @endif
                @if ($produks['link_tokopedia'] != null)
                    <a href="{{$produks['link_tokopedia'] }}" class=" my-4  py-4 px-4   animate__animated animate__fadeInUp ">
                        <img src="/image/winday/tokopedia1.png" alt="tokopedia" width="50" height="50" class="rounded-lg">
                    </a>
                @endif
                @if ($produks['link_lazada'] != null)
                    <a href="{{$produks['link_lazada'] }}" class=" my-4  py-4 px-4   animate__animated animate__fadeInUp ">
                        <img src="/image/winday/lazada.png" alt="lazada" width="50" height="50" class="rounded-lg">
                    </a>
                @endif
                @if ($produks['link_blibli'] != null)
                    <a href="{{$produks['link_blibli'] }}" class=" my-4  py-4 px-4   animate__animated animate__fadeInUp ">
                        <img src="/image/winday/blibli2.png" alt="blibli" width="50" height="50" class="rounded-lg">
                    </a>
                @endif
            </div>
        </div>
        <hr>
        <div class="text-center my-4 p-3 animate__animated animate__fadeInUp ">
            <h1 class=" text-2xl w-full font-bold mb-8">Deskripsi Produk</h1>
            <p class="mt-6 font-serif text-lg lg:mx-2">{!! $produks['deskripsi'] !!}</p>
        </div>

        <!-- footer -->
        <hr>
        <div class="p-4">
            <p class="text-center font-bold">&copy;Copyright WindayOfficial</p>
        </div>
        <!-- Akhir footer -->
    </div>
</body>

</html>