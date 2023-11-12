<?php
$conn = mysqli_connect("localhost","root","","MataKuliah");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $kode = $_POST ["Kode_Matkul"];
    $matkul = $_POST ["Mata_Kuliah"];
    $dosen = $_POST ["Nama_Dosen"];

    $query = "INSERT INTO data_matkul VALUES ('$kode','$matkul','$dosen')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $kode = $_POST ["Kode_Matkul"];
    $matkul = $_POST ["Mata_Kuliah"];
    $dosen = $_POST ["Nama_Dosen"];

    

    $query = "UPDATE Kode_Matkul SET
                -- Kode_Matkul = '$kode',
                Mata_Kuliah = '$matkul',
                Nama_Dosen = '$dosen',
            WHERE Kode_Matkul = '$matkul'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    // return mysqli_affected_rows($conn);
    return var_dump($data);
    
}

?>