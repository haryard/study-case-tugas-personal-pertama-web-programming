<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-4xl text-red-600 font-bold mb-4">Tentang Kami</h1>
        
        <div class="flex flex-col lg:flex-row justify-between">
          <div class="w-full lg:w-1/2 lg:pr-6">
            <h2 class="text-2xl text-red-600 font-bold mb-2">Deskripsi Perusahaan</h2>
            <p class="text-lg text-gray-700 mb-4">Kami adalah perusahaan yang berfokus pada layanan kursus mengemudi kendaraan mobil untuk seseorang yang ingin mendapatkan surat ijin mengemudi ataupun meningkatkan keterampilannya dalam mengemudi. Program pelatihan yang kami miliki dirancang untuk memenuhi kebutuhan dan preferensi yang dimiliki oleh siswa</p>

            <h2 class="text-2xl font-bold mb-2">Manajemen Perusahaan</h2>
            <div class="flex flex-col sm:flex-row mb-6">
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait3.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Budi Santoso Wijaya</h3>
                    <p class="text-gray-600">Direktur Utama</p>
                </div>
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait8.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Rina Indah Sari</h3>
                    <p class="text-gray-600">Manajer Administrasi</p>
                </div>
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait2.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Agung Kurniawan</h3>
                    <p class="text-gray-600">Manajer Pemasaran</p>
                </div>
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait1.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Imam Fauzi</h3>
                    <p class="text-gray-600">Manajer Operasional</p>
                </div>
            </div>
        
            <h2 class="text-2xl font-bold mb-2">Daftar Instruktur</h2>
            <div class="flex flex-col sm:flex-row mb-6">
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait4.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Adi Cahyono</h3>
                    <p class="text-gray-600">Instruktur Mobil Manual</p>
                </div>
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait5.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Joko Santoso</h3>
                    <p class="text-gray-600">Instruktur Mobil Manual & Matic</p>
                </div>
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait6.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Ari Wibowo</h3>
                    <p class="text-gray-600">Instruktur Mobil Matic</p>
                </div>
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait9.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Rini Indrawati</h3>
                    <p class="text-gray-600">Instruktur Mobil Manual</p>
                </div>
                <div class="bg-red-200 rounded-lg p-4 mr-4 flex-shrink-0">
                    <img src="{{asset('/img/potrait7.jpg')}}" alt="" class="rounded-full w-32 h-32 object-cover object-center mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Nia Ayu</h3>
                    <p class="text-gray-600">Instruktur Mobil Matic</p>
                </div>
            </div>
            
            <h2 class="text-2xl text-red-600 font-bold mb-2">Kendaraan yang tersedia</h2>
            <div class="flex flex-col lg:flex-row mb-4">
              <div class="w-full lg:w-1/2">
                <h3 class="text-lg font-bold text-gray-800">Mobil Sedan Kecil</h3>
                <ul class="list-disc pl-6">
                  <li class="text-md text-gray-700 mb-2">Manual</li>
                  <li class="text-md text-gray-700 mb-2">Matic</li>
                </ul>
              </div>
              <div class="w-full lg:w-1/2">
                <h3 class="text-lg font-bold text-gray-800">Mobil Sedan Besar</h3>
                <ul class="list-disc pl-6">
                  <li class="text-md text-gray-700 mb-2">Manual</li>
                  <li class="text-md text-gray-700 mb-2">Matic</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
</x-layout>