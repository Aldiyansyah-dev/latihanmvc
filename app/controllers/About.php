<?php 

class About{
    public function index($nama = 'Aldiyansyah', $pekerjaan = 'Web Developer', $umur = 27)
    {
        echo "Halo, Nama saya $nama, saya adalah seorang $pekerjaan. saya berumur $umur tahun";
    }
    public function page()
    {
        echo 'About/page';
    }
}
?>