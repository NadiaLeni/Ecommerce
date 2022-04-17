<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="setting.css">
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
            <a href="setting.html"><img src="./Assets/profile.webp" alt="profile-img" class="nav-pp"></a>
        </div>
    </nav>

    <section id="setting" class="margin">
        <div class="">
            <h2>Settings</h2>
        </div>
        <div class="profile-sect flex">
            <img src="./Assets/profile.webp" alt="profile" class="img-profile">
            <div class="profile-name">
                <h1>Budi. T</h1>
                <a href="setting-edit.html" class="button">Edit Profile</a>
            </div>
        </div>
        <form action="" class="flex setting-form">
            <div class="column setting-data">
                <div class="column">
                    <label for="email">Email</label>
                    <input type="email" value="dummy@domain.com" disabled>
                </div>
                <div class="column">
                    <label for="password">Password</label>
                    <input type="password" value="abcdefg" disabled>
                </div>
            </div>
            <div class="column setting-data">
                <div class="column">
                    <label for="phone-number">Phone Number</label>
                    <input type="tel" value="081211111111" disabled>
                </div>
                <div class="column">
                    <label for="dob">Date of Birth</label>
                    <input type="date" value="2001-01-01" disabled>
                </div>
            </div>
        </form>
        <div>
            <a href="">Lihat Ulasan Saya<span class="iconify-inline" data-icon="bx:chevron-right" style="color: black; width: 2rem;"></span></a>
        </div>
    </section>



    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</body>
</html>
