<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teras Malioboro | Tambah Tenant</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="box">
    <div class="container">
      <div class="titleBar">
        <div class="subtitle">Data Tenant</div>
      </div>
      <form action="" method="post">
        <table>
          <tr>
            <td>Nama Pemilik</td>
            <td>:</td>
            <td>
              <div class="input-field">
                <label value="<?php echo $namaPemilik; ?>" readonly>
              </div>
            </td>
          </tr>
          <tr>
            <td>Id Tenant</td>
            <td>:</td>
            <td>:</td>
            <td>
              <div class="input-field">
                <label value="<?php echo $IDTenant; ?>" readonly>
              </div>
            </td>
          </tr>
          <tr>
            <td>Id Persewaan</td>
            <td>:</td>
            <td>
              <div class="input-field">
                <label value="<?php echo $IDPersewaan; ?>" readonly>
              </div>
            </td>
          </tr>
          <tr>
            <td>Id Lokasi</td>
            <td>:</td>
            <td>
              <div class="input-field">
                <input type="text" class="input" placeholder="silakan isi dengan sesuai..." name="nomorTelepon" />
              </div>
            </td>
          </tr>
          <tr>
            <td>Mulai Sewa</td>
            <td>:</td>
            <td>
              <div class="input-field">
                <input type="date" class="input" name="mulaiSewa" />
              </div>
            </td>
          </tr>
          <tr>
            <td>Akhir Sewa</td>
            <td>:</td>
            <td>
              <div class="input-field">
                <input type="date" class="input" name="akhirSewa" />
              </div>
            </td>
          </tr>
        </table>
        <div class="button-container">
          <button type="submit" class="buttonSimpan">Simpan</button>
          <button type="button" class="buttonBatal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>