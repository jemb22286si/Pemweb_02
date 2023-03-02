<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
   <form action="belajar_post.php" method="POST">

        <!-- tipe teks     -->
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

        <!-- tipe Radio -->
        <label for="">Jenis Kelamin :</label><br>
        <input value="Laki-laki" type="radio" name="jenis kelamin">
            <label for="">Laki-Laki</label><br>
        <input value="perempuan" type="radio" name="jenis kelamin">
            <label for="">Perempuan</label><br><br>

        <!-- tipe chackbox -->
        <label for="">Hobi</label><br>
        <input value="Futsal" type="checkbox" name="hobi">
            <label for="">Futsal</label><br>
        <input value="Renang" type="checkbox" name="hobi">
            <label for="">Renang</label><br>
        <input value="Tinju" type="checkbox" name="hobi">
            <label for="">Tinju</label><br><br>

         <!-- tipe  Number-->
         <label for="">NIM</label><br>
         <input type="number" name="nim"><br><br>

        <!-- tipe  select-->
        <label for="">Prodi</label><br>
        <select name="Prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>

        <!-- Buton-->
        <button type="submit=">Kirim</button>
        <button type="reset=">Reset</button>

        
   </form> 
</body>
</html>