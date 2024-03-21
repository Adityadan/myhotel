<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home utama</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            color: #ccc;
        }

        section {
            padding: 20px;
            text-align: center;
        }
    </style>

</head>

<body>
    <header>
        <h1>MyHotelBookingApps</h1>
        <nav>
            <ul>
                <p>MENU</p>
                {{-- <li><a href="http://127.0.0.1:8000/kategori">Kategori</a></li>
                <li><a href="http://127.0.0.1:8000/hotel">Hotel</a></li> --}}
                <!-- mengapa data hotel not found?
        karena pada saat routing data yang di panggil tidak ada pada routing -->
                {{-- <li><a href="http://127.0.0.1:8000/promo">Promo Ramadhan</a></li> --}}
                    <li><a href="{{ route('hotels.index') }}" class="">Manage Hotels</a></li>
                    <li><a href="{{ route('products.index') }}" class="">Manage Products</a></li>
                    <li><a href="{{ route('reportShowHotel') }}" class="">View Available Hotel Rooms</a></li>
                    <li><a href="{{ route('avgPriceByHotelType') }}" class="">View Average Price by Hotel Type</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Welcome to Our Website</h2>
        <p>Hotel BINTANG 5.</p>
        <P>FASILITAS HOTEL BINTANG </p><br> <br>
        Jumlah kamar standar minimal 20 kamar (luas minimal 22 m2) <br>
        Memiliki minimal 1 kamar suite (luas minimal 44 m2) <br>
        Fasilitas kamar mandi, telepon, televisi dan juga AC di dalam kamar. <br>
        Terdapat lobby penerima tamu di ruang depan hotel. <br>
        Terdapat fasilitas olahraga dan rekreasi.</P> <br> <br>

        <h2>..Thankyou..</h2>
    </section>
</body>

</html>
