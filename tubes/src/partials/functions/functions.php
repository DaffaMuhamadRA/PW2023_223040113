<?php
//koneksi ke database
// mysqli_connect("nama host", "username", "password", "nama database")

$conn = mysqli_connect("localhost", "root", "", "tubes");

//query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


//tambah data
function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $indikasi_umum = htmlspecialchars($data["indikasi_umum"]);
    $komposisi = htmlspecialchars($data["komposisi"]);
    $dosis = htmlspecialchars($data["dosis"]);
    $aturan_pakai = htmlspecialchars($data["aturan_pakai"]);
    $perhatian = htmlspecialchars($data["perhatian"]);
    $kontra_indikasi = htmlspecialchars($data["kontra_indikasi"]);
    $efek_samping = htmlspecialchars($data["efek_samping"]);
    $golongan_produk = htmlspecialchars($data["golongan_produk"]);
    $kemasan = htmlspecialchars($data["kemasan"]);
    $manufaktur = htmlspecialchars($data["manufaktur"]);
    $no_registrasi = htmlspecialchars($data["no_registrasi"]);
    $kategori_obat = htmlspecialchars($data["kategori_obat"]);



    //upload gambar
    $gambar = upload();

    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO item
                    VALUES
                    (null,'$gambar','$nama','$deskripsi','$indikasi_umum','$komposisi','$dosis','$aturan_pakai',
                    '$perhatian','$kontra_indikasi','$efek_samping','$golongan_produk','$kemasan','$manufaktur',
                    '$no_registrasi','$kategori_obat')
                    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    //cek apakah tidak ada gambar yang di upload

    if ($error === 4) {
        echo "<script> 
            alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }


    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script> 
            alert('yang anda upload bukan gambar !');
        </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar (3 juta bites == 3 MB)
    if ($ukuranFile > 5000000) {
        echo "<script> 
            alert('gambar anda terlalu besar!');
        </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    //generate nama gambar baru\
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../../../../image/dataFoto/' . $namaFileBaru);
    return $namaFileBaru;
}


//hapus
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM item WHERE id=$id");
    return mysqli_affected_rows($conn);
}



//ubah data
function ubah($data)
{
    global $conn;
    //ambil data dari tiap element dalam form
    // data id tidak perlu html special chars karena tidak ada inputan dari user
    $id = $data["id"];

    //html special chars mampu untuk menangkal inputan user yang jahil, jadi hanya menampilkan katanya (data input) saja tanpa ada eksekusi didalamnya

    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $indikasi_umum = htmlspecialchars($data["indikasi_umum"]);
    $komposisi = htmlspecialchars($data["komposisi"]);
    $dosis = htmlspecialchars($data["dosis"]);
    $aturan_pakai = htmlspecialchars($data["aturan_pakai"]);
    $perhatian = htmlspecialchars($data["perhatian"]);
    $kontra_indikasi = htmlspecialchars($data["kontra_indikasi"]);
    $efek_samping = htmlspecialchars($data["efek_samping"]);
    $golongan_produk = htmlspecialchars($data["golongan_produk"]);
    $kemasan = htmlspecialchars($data["kemasan"]);
    $manufaktur = htmlspecialchars($data["manufaktur"]);
    $no_registrasi = htmlspecialchars($data["no_registrasi"]);
    $kategori_obat = htmlspecialchars($data["kategori_obat"]);


    $gambarLama = ($data["gambarLama"]);

    //cek apakah pilih gambar baru apakah tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }



    //query insert data
    $query = "UPDATE item SET 
            gambar = '$gambar', 
            nama = '$nama',
            deskripsi ='$deskripsi',
            indikasi_umum ='$indikasi_umum',
            komposisi ='$komposisi',
            dosis ='$dosis',
            aturan_pakai ='$aturan_pakai',
            perhatian ='$perhatian',
            kontra_indikasi ='$kontra_indikasi',
            efek_samping ='$efek_samping',
            golongan_produk ='$golongan_produk',
            kemasan ='$kemasan',
            manufaktur ='$manufaktur',
            no_registrasi ='$no_registrasi',
            kategori_obat ='$kategori_obat'

            Where id = $id
            ";

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function tampil($x, $data)
{
    global $conn;
    $id = $data["id"];
    $query = "SELECT $x FROM item Where id = $id";
    $a = mysqli_query($conn, $query);
    echo $a;
}

function cari($keyword)
{
    $query = "SELECT * FROM item 
                WHERE
                nama LIKE '%$keyword%' OR
                efek_samping LIKE '%$keyword%' OR
                golongan_produk LIKE '%$keyword%' OR
                manufaktur LIKE '%$keyword%' OR
                no_registrasi LIKE '%$keyword%'
                ";

    return query($query);
}
