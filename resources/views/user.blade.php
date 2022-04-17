<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./admin+keranjang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="flex">
        <div class="nav-left flex">
            <h1 class="toko">Nama Toko</h1>
            <div class="nav-menu">
                <a href="admin.html">Produk</a>
                <a href="user.html">Keranjang</a>
                <a href="">Histori</a>
            </div>
        </div>
        <div class="nav-right flex">
            <a href="" class="button">Masuk</a>
        </div>
    </nav>

    <section id="produk" class="margin">
        <div class="produk-header flex">
            <h2>Keranjang Anda</h2>
            <a href="produk.html" class="button">Cari Produk</a>
        </div>

        <div class="produk-list">
            <hr>
            <div class="produk flex">
                <div class="kode-barang">
                    <input class="center" type="checkbox" name="" id="">
                </div>
                <div class="produk-img">
                    <img src="./Assets/produk 1.png" alt="">
                </div>
                <div class="produk-detail">
                    <div class="detail-nama">
                        <h3>Kotak Barang Multifungsi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, perferendis.</p>
                    </div>
                    <div class="detail-harga flex">
                        <p>Rp25.500</p>
                        <p>Stok: 1</p>
                        <div class="stok-qty">
                            <button><span class="iconify-inline" data-icon="akar-icons:minus" style="color: white; height: 1rem; width: 1rem;"></span></button>
                            <button><span class="iconify-inline" data-icon="akar-icons:plus" style="color: white; height: 1rem; width: 1rem;"></span></button>
                        </div>
                        <div class="stok-delete">
                            <button><span class="iconify-inline" data-icon="fluent:delete-28-filled" style="color: white; height: 1rem; width: 1rem;"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="produk flex">
                <div class="kode-barang">
                    <input class="center" type="checkbox" name="" id="">
                </div>
                <div class="produk-img">
                    <img src="./Assets/produk 2.png" alt="">
                </div>
                <div class="produk-detail">
                    <div class="detail-nama">
                        <h3>Rak Gantung Barang Multifungsi Green</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ut labore voluptate molestiae, ipsa consequuntur?</p>
                    </div>
                    <div class="detail-harga flex">
                        <p>Rp59.000</p>
                        <p>Stok: 3</p>
                        <div class="stok-qty">
                            <button><span class="iconify-inline" data-icon="akar-icons:minus" style="color: white; height: 1rem; width: 1rem;"></span></button>
                            <button><span class="iconify-inline" data-icon="akar-icons:plus" style="color: white; height: 1rem; width: 1rem;"></span></button>
                        </div>
                        <div class="stok-delete">
                            <button><span class="iconify-inline" data-icon="fluent:delete-28-filled" style="color: white; height: 1rem; width: 1rem;"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="total-harga flex">
            <span>Total Harga:</span>
            <span>Rp202.500</span>
        </div>
        <div class="transaksi-btn flex">
            <a href="user-transaksi.html" class="button">Transaksi</a>

        </div>
    </section>


    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</body>
</html>
