<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./admin+keranjang.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <h2>Transaksi</h2>
        </div>

        <div class="produk-list">
            <hr>
            <div class="produk flex">
                <div></div>
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
                    </div>
                </div>
            </div>
            <hr>
            <div class="produk flex">
                <div></div>
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
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="total-harga flex">
            <span>Total Harga:</span>
            <span>Rp202.500</span>
        </div>
    </section>

    <section id="pembayaran" class="margin flex">
        <div class="pembayaran-left">
            <div class="produk-header flex">
                <h2>Metode Pembayaran</h2>
            </div>
            <div class="sort dropbtn">
                <div class="custom-select" style="width:200px;">
                    <select>
                      <option value="0">Select payment method:</option>
                      <option value="1">COD (Bayar di Tempat)</option>
                      <option value="2">Bank BNI</option>
                      <option value="3">Bank BCA</option>
                      <option value="4">Bank Mandiri</option>
                      <option value="5">Bank BRI</option>
                      <option value="6">Bank Syariah Indonesia</option>
                      <option value="7">Bank Permata</option>
                      <option value="8">BRI Direct Debit</option>
                      <option value="9">BCA OneKlik</option>
                      <option value="10">Alfamart / Alfamidi / Dan+Dan</option>
                      <option value="11">Indomaret / i.Saku</option>
                    </select>
                  </div>
            </div>
        </div>
        <div class="pembayaran-right">
            <div class="produk-header flex">
                <h2>Pengiriman</h2>
            </div>
            <form action="" class="column">
                <div class="column">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" required>
                </div>
                <div class="column">
                    <label for="alamat">Alamat Tujuan</label>
                    <textarea name="" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="transaksi-btn flex">
                    <Button class="button" type="submit">Bayar</Button>
                </div>
            </form>

        </div>
    </section>

    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</body>
</html>
