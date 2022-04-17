<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_admin.css">
</head>
<body>
<section id="login">
        <div class="login-container">
            <div class="login-left">
                <form method="POST" action="/tambah-produk">
                    @csrf
                    <div class="login-content">
                        <label for="">Nama Produk</label>
                        <input type="text" name="namaProduk">
                    </div>
                    <div class="login-content">
                        <label for="">Deskripsi</label>
                        <input type="text" name="deskripsi">
                    </div>
                    <div class="login-content">
                        <label for="">Nama Toko</label>
                        <input type="text" name="namaToko">
                    </div>
                    <div class="login-content">
                        <label for="">Harga</label>
                        <input type="numeric" name="harga">
                    </div>
                    <div class="login-content">
                        <label for="">Stok</label>
                        <input type="numeric" name="stok">
                    </div>
                    <button type="submit">Submit Item</button>
                </form>
            </div>
            <div class="login-right">
                
            </div>
        </div>
    </section>
</body>
</html>