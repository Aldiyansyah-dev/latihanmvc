<?php 

class Mahasiswa_model {
    // private $mhs = [
    // //     [
    // //         "nama" => "Aldiyansyah",
    // //         "nrp" => "10112110",
    // //         "email" => "aldi@gmail.com",
    // //         "jurusan" => "Teknik Informatika"
    // //     ],
    // //     [
    // //         "nama" => "Glen Malvino",
    // //         "nrp" => "10112111",
    // //         "email" => "glen@gmail.com",
    // //         "jurusan" => "Teknik Industri"
    // //     ],
    // //     [
    // //         "nama" => "Devan Hansel",
    // //         "nrp" => "10112112",
    // //         "email" => "devan@gmail.com",
    // //         "jurusan" => "Teknik Mesin"
    // //     ]
    // // ];

    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=db_mvcmahasiswa';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMassage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>