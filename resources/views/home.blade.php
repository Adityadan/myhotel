@extends('layouts.main')

@section('content')
    <div class="bg-dark text-white py-4">
        <div class="container">
            <h1 class="mb-0">MyHotelBookingApps</h1>
            {{-- <nav>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="{{ route('hotels.index') }}" class="text-white">Manage Hotels</a>
                    </li>
                    <li class="list-inline-item"><a href="{{ route('products.index') }}" class="text-white">Manage Products</a>
                    </li>
                    <li class="list-inline-item"><a href="{{ route('reportShowHotel') }}" class="text-white">View Available
                            Hotel Rooms</a></li>
                    <li class="list-inline-item"><a href="{{ route('avgPriceByHotelType') }}" class="text-white">View
                            Average Price by Hotel Type</a></li>
                    <li class="list-inline-item"><a href="{{ route('daftarBarang') }}" class="text-white">List Barang</a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </div>

    <div class="py-4">
        <div class="container">
            <h2 class="mb-4">Welcome to Our Website</h2>
            <p class="lead">Hotel BINTANG 5.</p>
            <p class="mb-4">FASILITAS HOTEL BINTANG </p>
            <ul class="list-unstyled">
                <li>Jumlah kamar standar minimal 20 kamar (luas minimal 22 m2)</li>
                <li>Memiliki minimal 1 kamar suite (luas minimal 44 m2)</li>
                <li>Fasilitas kamar mandi, telepon, televisi dan juga AC di dalam kamar.</li>
                <li>Terdapat lobby penerima tamu di ruang depan hotel.</li>
                <li>Terdapat fasilitas olahraga dan rekreasi.</li>
            </ul>
            <h2>Thank you</h2>
        </div>
    </div>
@endsection
