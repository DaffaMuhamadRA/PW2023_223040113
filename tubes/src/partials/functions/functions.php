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

    $gambar = htmlspecialchars($data["gambar"]);
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
    $gambar = htmlspecialchars($data["gambar"]);
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

    //query insert data
    $query = "UPDATE item SET 
            gambar = '$gambar', 
            nama = '$nama',
            deskripsi ='deskripsi',
            indikasi_umum ='$indikasi_umum'
            komposisi ='$komposisi'
            dosis ='$dosis'
            aturan_pakai ='$aturan_pakai'
            perhatian ='$perhatian'
            kontra_indikasi ='$kontra_indikasi'
            efek_samping ='$efek_samping'
            golongan_produk ='$golongan_produk'
            kemasan ='$kemasan'
            manufaktur ='$manufaktur'
            no_registrasi ='$no_registrasi'
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
