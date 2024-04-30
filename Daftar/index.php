<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body class="bodyForm">
  <div class="containerForm">
    <form class="form" action="../connection/koneksi.php" method="post">
        <!-- Perbaiki atribut action dan tambahkan method -->
      <p class="title">Daftar</p>
      <p class="message">Daftar Sekarang!</p>
      <div class="flex">
        <label>
          <input required="" placeholder="" type="text" name="firstname" class="input">
          <span>Firstname</span>
        </label>
        <label>
          <input required="" placeholder="" type="text" name="lastname" class="input">
          <span>Lastname</span>
        </label>
      </div>  
      <label>
        <input required="" placeholder="" type="text" name="role" class="input">
        <span>Role</span>
      </label> 
      <label>
        <input required="" placeholder="Masukan email anda agar bisa di kontak..." type="email" name="email" class="input">
        <span></span>
      </label>
      <button type="submit" class="submit">Submit</button>
    </form>
  </div>
</body>
</html>
