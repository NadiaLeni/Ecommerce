<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="nav-left">
                <a class="nav-logo" href="">Nama Toko</a>
                <!-- <div class="nav-menu">
                    <a href="#">Produk</a>
                    <a href="#">Keranjang</a>
                    <a href="#">Histori</a>
                </div> -->
            </div>
            <!-- <div class="nav-right">
                <a href="/login">Masuk</a>
            </div> -->
        </div>
    </nav>
    <section id="Admin">
        <div class="head">
        <h1>Produk</h1>
        <div class="button"><a href="/tambah">Tambah Produk</a></div>
        </div>
        <table>
                <tr>
                    <th id="kode">Kode Barang <hr></th>
                    <th>Produk<hr></th>
                </tr>
                @foreach ($produk as $p)
                <tr>
                    <td id="id">{{ $p->id}}</td>
                    <td>
                    <br><b>{{ $p->namaProduk}}</b><br>
                    <br>{{ $p->deskripsi}}<br>
                    <br>{{ $p->namaToko}}<br>
                    <br>Rp{{ $p->harga}}<br>
                    <br>Stok: {{ $p->stok}}<br><br>
                    </td>
                </tr>
                @endforeach
        </table>
    </section>
    <section id="Footer">
        <div class="footer-container">
            <div class="footer-left">
                <p>Kontak</p>
                <p>email@gmail.com</p>
                <p>0811223344555</p>
            </div>
            <div class="footer-mid">
                <div class="footer-icon">
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
                <p>Nama Toko. All Rights Reserved</p>
            </div>
            <div class="footer-right">
                <a href="">Produk</a>
                <a href="">Keranjang</a>
                <a href="">Histori</a>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>