<x-guest-layout name="Booking Sukses | Spooring Auto2000 Bontang">
    {{-- Navigation --}}
    <x-navigation />

    <section class="bg-white dark:bg-gray-900 ">
        <div class="container flex items-center min-h-screen px-6 py-12 mx-auto">
            <div class="flex flex-col items-center max-w-sm mx-auto text-center">
                <p class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-full">
                    <i class="text-green-700 bx bx-check bx-sm"></i>
                </p>
                <h1 class="mt-3 text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">Booking Spooring
                    Berhasil</h1>
                <p class="mt-4 text-gray-500 dark:text-gray-400">
                    Selamat anda berhasil melakukan booking pelayanan spooring. Silahkan cek email anda, untuk melihat
                    token anda.
                </p>

                <div class="flex items-center w-full mt-6 gap-x-3 shrink-0 sm:w-auto">
                    <button
                        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto">
                        <i class='bx bx-arrow-back'></i>
                        <span>Kembali</span>
                    </button>

                    <button
                        class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-red-500 rounded-lg shrink-0 sm:w-auto hover:bg-red-600">
                        Cek Email
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>