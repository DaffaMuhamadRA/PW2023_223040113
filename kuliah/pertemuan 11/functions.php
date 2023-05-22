<?php 
//koneksi ke database
// mysqli_connect("nama host", "username", "password", "nama database")

$conn = mysqli_connect("localhost","root","","pw2023_223040113");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    //ambil data dari tiap element dalam form

$nrp = htmlspecialchars($data["nrp"]);
$nama = htmlspecialchars($data["nama"]);
$email = htmlspecialchars($data["email"]);
$jurusan = htmlspecialchars($data["jurusan"]);

//query insert data
$query = "INSERT INTO mahasiswa
                VALUES
                (null,'$nrp','$nama','$email','$jurusan')
                ";

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($conn);
}
?>