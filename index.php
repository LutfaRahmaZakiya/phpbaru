<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas UTS PK II</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <nav>
        <div class="logo"><a href="#">LUTFA RAHMA ZAKIYA</a></div>
        <div class="menu">
          <ul>
            <li><a href="#lomba">Kategori Lomba</a></li>
            <li><a href="#formulir">Formulir Pendaftaran</a></li>
            <li><a href="#persyaratan">Persyaratan</a></li>
          </ul>
        </div>
        <div class="top-wrapper">
          <div class="container">
            <h1>PORSENI INTEGRAL</h1>
            <h1><i>Take The Challenge, Get Your Victory</i></h1>
            <p>Halo Mahasiswa Matematika, yuk ikut meriahkan PORSENI INTEGRAL 2022</p>
            <div class="box"></div>
          </div>
        </div>
      </nav>
    </header>

    <div class="main">
      <div id="lomba" class="pilihan">
        <h1>Kategori Lomba</h1>
        <div class="lomba-1">
          <div class="kategori">
            <img src="https://i.pinimg.com/222x/57/36/2e/57362ecf519fb8519f3f0e4d5272c310.jpg" />
            <p>Futsal</p>
          </div>
          <div class="kategori">
            <img src="https://asset-a.grid.id//crop/0x0:0x0/360x240/photo/2021/11/12/29678-1jpg-20211112050905.jpg" />
            <p>Voli Putri</p>
          </div>
          <div class="kategori">
            <img src="https://cf.shopee.co.id/file/ca595fec11610d6b30419b13c3a7bc2e" />
            <p>Story Telling</p>
          </div>
          <div class="kategori">
            <img src="https://media.istockphoto.com/illustrations/artwork-illustration-id92711603" />
            <p>Seni Bebas</p>
          </div>
        </div>
      </div>
    </div>

    <div id="formulir" class="datadiri">
      <h1>Formulir Pendaftaran</h1>
      <form action="welcome.php" method="post">
      <div>
        <label for="nama">NAMA:</label>
        <input type="text" name="nama" id="nama" />
      </div>
      <div>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" />
      </div>
      <div>
        <label for="gender">JENIS KELAMIN:</label>
        <select id="gender" name="gender">
          <option value="Perempuan">Perempuan</option>
          <option value="Laki-laki">Laki-laki</option>
        </select>
      </div>
      <div>
        <label for="email">EMAIL:</label>
        <input type="email" id="email" name="email" />
      </div>
      <div>
        <label for="phone">NOMOR TELFON:</label>
        <input type="tel" id="phone" name="phone" placeholder="089765432121" required="" />
      </div>
      <div class="radio">
        <label for="Angkatan"> Angkatan: </label><br />
        <input type="radio" id="angkatan1" name="Angkatan" value="2020" />
        <label for="angkatan1">2020</label>
        <input type="radio" id="angkatan2" name="Angkatan" value="2021" />
        <label for="angkatan2">2021</label>
        <input type="radio" id="angkatan3" name="Angkatan" value="2022" />
        <label for="angkatan3">2022</label>
      </div>
      <div class="radio">
        <label for="jenis"> Pilihan Lomba </label><br />
        <input type="radio" id="jenis1" name="Jenis" value="Futsal" />
        <label for="jenis1">Futsal</label>
        <input type="radio" id="jenis2" name="Jenis" value="Voly" />
        <label for="jenis2">Volly Putri</label>
        <input type="radio" id="jenis3" name="Jenis" value="Story" />
        <label for="jenis3">Story Telling</label>
        <input type="radio" id="jenis4" name="Jenis" value="Seni" />
        <label for="jenis4">Seni Bebas</label>
      </div>
      <div>
        <button type="submit">KIRIM</button>
      </div>
      </form>
    </div>

    <div id="persyaratan" class="all">
      <div class="syarat">
        <div>
          <h1>Persyaratan</h1>
          <div>
            <ol>
              <li>Mahasiswa Aktif Matematika Angkatan 2019-2022</li>
              <li>Masing-masing Angkatan Wajib Mendelegasikan Minimal 2 Delegasi untuk Setiap Cabang Lomba</li>
              <li>Mengisi Formulir dan Melampirkan Fotokopi KTM</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="footer-logo">HMPS INTEGRAL</div>
      <div class="footer-list">
        <ul>
          <li>Informasi Lebih Lanjut Hubungi</li>
          <li>informasi Lokasi Kegiatan</li>
        </ul>
      </div>
    </div>
  </body>
</html>
