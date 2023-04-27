<?php

$conn = mysqli_connect("localhost", "root", "", "kelompok1");


function isExistUsername($username)
{
    global $conn;

    $query = "SELECT * FROM user WHERE username='$username'";
    $rs = mysqli_query($conn, $query);
    if (mysqli_num_rows($rs) > 0) {
        return true;
    }

    return false;
}


function register($username, $password)
{

    global $conn;

    if (isExistUsername($username)) {
        echo "<script>
                alert('Username yang anda masukkan sudah terdaftar! gunakan username lain!');
                window.location = '../login-signup.php';
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES(NULL, ?,?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

}

function login($username, $password)
{
    global $conn;

    $query = "SELECT * FROM user WHERE username='$username'";
    $rs = mysqli_query($conn, $query);

    if (mysqli_num_rows($rs) > 0) {
        $rows = mysqli_fetch_assoc($rs);
        if (password_verify($password, $rows['password'])) {
            return true;
        }
    }
    return false;
}

function tambahData($jenis_tumbuhan, $nama, $nama_biologi, $deskripsi, $data_gambar)
{
    global $conn;

    $nama_gambar = $data_gambar['gambar']['name'];
    $tmp = $data_gambar['gambar']['tmp_name'];

    move_uploaded_file($tmp, "../imgs/$nama_gambar");

    $query = "INSERT INTO tumbuhan VALUES(NULL, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $jenis_tumbuhan, $nama, $nama_biologi, $deskripsi, $nama_gambar);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function tumbuhanMonokotil()
{
    global $conn;

    $query = "SELECT * FROM tumbuhan WHERE jenis_tumbuhan='Monokotil'";
    $rs = mysqli_query($conn, $query);
    $row = [];

    while ($rows = mysqli_fetch_assoc($rs)) {
        $row[] = $rows;
    }

    return $row;

}

function tumbuhanDikotil()
{
    global $conn;

    $query = "SELECT * FROM tumbuhan WHERE jenis_tumbuhan='Dikotil'";
    $rs = mysqli_query($conn, $query);
    $row = [];

    while ($rows = mysqli_fetch_assoc($rs)) {
        $row[] = $rows;
    }

    return $row;
}

?>