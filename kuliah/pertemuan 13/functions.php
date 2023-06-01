<?php 
//koneksi ke database
// mysqli_connect("nama host", "username", "password", "nama database")

$conn = mysqli_connect("localhost","root","","pw2023_223040113");


//query
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


//tambah data
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

//hapus data
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($conn);
}


//ubah data
function ubah($data){
    global $conn;
    //ambil data dari tiap element dalam form
    // data id tidak perlu html special chars karena tidak ada inputan dari user
$id = $data["id"];

//html special chars mampu untuk menangkal inputan user yang jahil, jadi hanya menampilkan katanya (data input) saja tanpa ada eksekusi didalamnya
$nrp = htmlspecialchars($data["nrp"]);
$nama = htmlspecialchars($data["nama"]);
$email = htmlspecialchars($data["email"]);
$jurusan = htmlspecialchars($data["jurusan"]);

//query insert data
$query = "UPDATE mahasiswa SET 
            nrp = '$nrp', 
            nama = '$nama',
            email ='$email',
            jurusan ='$jurusan'

            Where id = $id
            ";

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}



function cari ($keyword){
    $query = "SELECT * FROM mahasiswa 
                WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);
}












?>