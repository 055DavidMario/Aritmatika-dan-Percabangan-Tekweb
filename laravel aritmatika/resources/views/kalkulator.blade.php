<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Deret Aritmatika</title>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="bg-sky-400">
        <div class="m-6 mt-10 mb-10 text-3xl font-bold text-center uppercase">
           <marquee behavior="alternate"> <h1 class="text-4xl text-white">KALKULATOR</h1></marquee>
        </div>
    </header>
    <!-- component -->
    <div class="content">
        <form class="bg-green-400" action="" method="post" class="p-2 m-3 border rounded-lg">
            @csrf
            <div class="pl-12 border rounded-lg">
        <h2 class="mt-6 font-bold">Masukkan Angka Pertama</h2>
        <div class="flex items-center mb-6 text-lg md:mb-8">
        <input name="angka1" type="text" id="angka1" class="py-2 pl-2 text-center bg-gray-200 rounded-lg w-content required md:py-4 focus:outline-none" placeholder="Angka Pertama" />
        </div>
        <h2 class="font-bold">Masukkan Angka Kedua</h2>
        <div class="flex items-center mb-6 text-lg md:mb-8">
        <input name="angka2" type="number" id="angka2" class="py-2 pl-2 text-center rounded-lg w-content required bg-gray200 md:py-4 focus:outline-none" placeholder="Angka Kedua" />
        </div>
        <h2 class="font-bold">Silahkan Pilih Operasi Matematika</h2>
        <div class="flex items-center mb-6 text-lg md:mb-8">
        <select class="py-2 pl-8 bg-gray-200 rounded-lg md:py-4 focus:outline-none wfull" name="operasi" id="operasi">
        <option value="tambah">+</option>
        <option value="Pengurangan">-</option>
        <option value="Perkalian">x</option>
        <option value="Pembagian">/</option>
        <option value="Modulus">%</option>
        </select>
        </div>

        <div class="flex mb-6">
                        <div class="flex mr-2">
                            <button
                                class="px-4 py-2 mt-3 text-base text-white transition duration-300 ease-in-out bg-blue-500 rounded-md cursor-pointer hover:shadow-lg hover:opacity-50">
                                Cek Hasil
                            </button>
                        </div>
                        <div class="flex mr-2">
                            <a href="/kalkulator"
                                class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-red-500 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                                Reset
                            </a>
                        </div>
                        <div class="flex mr-2">
                        <a href="/"
                            class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-slate-800 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                            Kembali
                        </a>
                        </div>
    </form>
    </div>
    </div>
    <div class="p-6 m-3 bg-orange-400 border rounded-lg shadow-lg ">
            <h1 class="mb-6 text-xl font-bold">KALKULATOR</h1>
            

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-auto">
            <div class="inline-block min-w-full py-4 sm:px-6">
                <div class="overflow-hidden">
                <h2 class="font-bold ">Hasil :</h2>
                        <div class="flex items-center pt-4 mb-6 text-lg md:mb-8">
                        <input disabled type="number" id="angka2" class="w-full py-2 pl-12 bg-gray-200 rounded-lg md:py-4 focus:outline-none" value="{{$hasil}}" />
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
 <footer>
        <div class="w-auto border-t mt-44 border-slate-500 bg-slate-800">
            <div class="flex items-center justify-center mt-5 mb-5">
            <a href="https://github.com/055DavidMario" target="_blank"
                    class="flex items-center justify-center mr-3 text-white transition duration-300 ease-in-out border border-white rounded-full w-9 h-9 hover:bg-primary hover:opacity-50">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub</title>
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                </a>
            </div>
            <p class="text-[0.65rem] text-slate-300 text-center">Copyright ©2022 | All Rights Reserved.</p>
            <p class="text-[0.65rem] text-slate-500 text-center pb-5">Web Math - 055DavidMario</p>
        </div>
    </footer>
</body>

</html>
