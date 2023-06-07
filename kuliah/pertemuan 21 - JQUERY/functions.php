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

// upload gambar
$gambar = upload();

if (!$gambar){
    return false;
}

//query insert data
$query = "INSERT INTO mahasiswa
                VALUES
                (null,'$nrp','$nama','$email','$jurusan','$gambar')
                ";

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}



//function upload

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    //cek apakah tidak ada gambar yang di upload

    if($error === 4){
        echo "<script> 
            alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }


    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "<script> 
            alert('yang anda upload bukan gambar !');
        </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar (3 juta bites == 3 MB)
    if($ukuranFile > 3000000){
        echo "<script> 
            alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    //generate nama gambar baru\
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'img/' . $namaFileBaru);
    return $namaFileBaru;
}

//hapus data
function hapus($id){
    global $conn;

    $file = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id='$id'"));
    unlink('img/' . $file["gambar"]);
    $hapus = "DELETE FROM mahasiswa WHERE id='$id'";

    mysqli_query($conn,$hapus);
    return mysqli_affected_rows($conn);
}

// function hapus($query){

//     global $conn;
//     $file = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM siswa WHERE id='$query'"));
//     unlink('img/' . $file["gambar"]);
//     $hapus = "DELETE FROM siswa WHERE id='$query'";
//     mysqli_query($conn,$hapus);
//     return mysqli_affected_rows($conn);
// }

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
$gambarLama = ($data["gambarLama"]);

//cek apakah pilih gambar baru apakah tidak
if ($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
}else{
    $gambar = upload();
}



//query insert data
$query = "UPDATE mahasiswa SET 
            nrp = '$nrp', 
            nama = '$nama',
            email ='$email',
            jurusan ='$jurusan',
            gambar = '$gambar'
            
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


//regsitrasi user
function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    //username sudah ada atau belum
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username sudah digunakan');
        </script>";
        return false;
    }
    //cek konfirmasi password
    if($password !== $password2){
        echo"<script>
        alert('konfirmasi password tidak sesuai !');
        </script>";
        return false;
    }

    //encript password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn,"INSERT INTO user VALUES (null,'$username','$password')");
    return mysqli_affected_rows($conn);

}










?>