<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Peserta Didik</title> <!--judul web-->
    <!--script untuk mengoneksikan ke style bootstrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--menambah style-->
    <style> 
    body {background-color:aliceblue} 
    </style> 
</head>
<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">FORMULIR PESERTA DIDIK</h1>
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $jenis_pendaftaran=input($_POST["jenis_pendaftaran"]);
        $tanggal_masuk_sekolah=input($_POST["tanggal_masuk_sekolah"]);
        $nis=input($_POST["nis"]);
        $nomor_peserta_ujian=input($_POST["nomor_peserta_ujian"]);
        $pernah_paud=input($_POST["pernah_paud"]);
        $pernah_tk=input($_POST["pernah_tk"]);
        $no_seri_skhun=input($_POST["no_seri_skhun"]);
        $no_seri_ijazah=input($_POST["no_seri_ijazah"]);
        $hobi=input($_POST["hobi"]);
        $cita_cita=input($_POST["cita_cita"]);
        $nama_lengkap=input($_POST["nama_lengkap"]);
        $jenis_kelamin=input($_POST["jenis_kelamin"]);
        $nisn=input($_POST["nisn"]);
        $nik=input($_POST["nik"]);
        $tempat_lahir=input($_POST["tempat_lahir"]);
        $tanggal_lahir=input($_POST["tanggal_lahir"]);
        $agama=input($_POST["agama"]);
        $berkebutuhan_khusus=input($_POST["berkebutuhan_khusus"]);
        $alamat_jalan=input($_POST["alamat_jalan"]);
        $rt=input($_POST["rt"]);
        $rw=input($_POST["rw"]);
        $dusun=input($_POST["dusun"]);
        $kelurahan_desa=input($_POST["kelurahan_desa"]);
        $kecamatan=input($_POST["kecamatan"]);
        $kode_pos=input($_POST["kode_pos"]);
        $tempat_tinggal=input($_POST["tempat_tinggal"]);
        $moda_transportasi=input($_POST["moda_transportasi"]);
        $nomor_hp=input($_POST["nomor_hp"]);
        $nomor_telepon=input($_POST["nomor_telepon"]);
        $email_pribadi=input($_POST["email_pribadi"]);
        $penerima_kps_kks_pkh_kip=input($_POST["penerima_kps_kks_pkh_kip"]);
        $no_kps_kks_pkh_kip=input($_POST["no_kps_kks_pkh_kip"]);
        $kewarganegaraan=input($_POST["kewarganegaraan"]);

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="insert into pendaftaran (jenis_pendaftaran,tanggal_masuk_sekolah,nis,nomor_peserta_ujian,pernah_paud,pernah_tk,
        no_seri_skhun,no_seri_ijazah,hobi,cita_cita,nama_lengkap,jenis_kelamin,nisn,nik,tempat_lahir,tanggal_lahir,agama,
        berkebutuhan_khusus,alamat_jalan,rt,rw,dusun,kelurahan_desa,kecamatan,kode_pos,tempat_tinggal,moda_transportasi,nomor_hp,
        nomor_telepon,email_pribadi,penerima_kps_kks_pkh_kip,no_kps_kks_pkh_kip,kewarganegaraan) values
		('$jenis_pendaftaran','$tanggal_masuk_sekolah','$nis','$nomor_peserta_ujian','$pernah_paud','$pernah_tk','$no_seri_skhun',
        '$no_seri_ijazah','$hobi','$cita_cita','$nama_lengkap','$jenis_kelamin','$nisn','$nik','$tempat_lahir','$tanggal_lahir','$agama',
        '$berkebutuhan_khusus','$alamat_jalan','$rt','$rw','$dusun','$kelurahan_desa','$kecamatan','$kode_pos','$tempat_tinggal',
        '$moda_transportasi','$nomor_hp','$nomor_telepon','$email_pribadi','$penerima_kps_kks_pkh_kip','$no_kps_kks_pkh_kip',
        '$kewarganegaraan')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Selamat $nama_lengkap anda telah berhasil mendaftar.</div>"; 
        }
        else {
            echo "<div class='alert alert-danger'> Pendaftaraan Gagal. </div>";
        }
    }
    ?>
    <!--membuat form inputan data peserta didik-->
        <form id="form" method="post">
            <div class="alert alert-primary">
                <strong>Registrasi Peserta Didik</strong>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Jenis Pendaftaran:</label> <!-- jenis pendaftaran -->
                    <select class="form-control" name="jenis_pendaftaran">
                        <option>Pilih</option>
                        <option value="siswa_baru">Siswa Baru</option>
                        <option value="pindahan">Pindahan</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Tanggal Masuk Sekolah:</label> <!-- tanggal masuk sekolah -->
                    <input type="date" name="tanggal_masuk_sekolah" class="form-control" placeholder="Masukkan Tanggal Masuk Sekolah">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>NIS:</label> <!--nomor NIS -->
                    <input type="text" name="nis" class="form-control" placeholder="Masukkan Nomor Induk Sekolah">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nomor Peserta Ujian:</label> <!-- nomor peserta ujian -->
                    <input type="text" name="nomor_peserta_ujian" class="form-control" placeholder="Masukkan Nomor Peserta Ujian">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Apakah pernah PAUD?:</label> <!--PAUD -->
                    <select class="form-control" name="pernah_paud">
                        <option>Pilih</option>
                        <option value="ya">YA</option>
                        <option value="tidak">TIDAK</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Apakah pernah TK?:</label> <!-- TK -->
                    <select class="form-control" name="pernah_tk">
                        <option>Pilih</option>
                        <option value="ya">YA</option>
                        <option value="tidak">TIDAK</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>No Seri SKHUN:</label> <!-- no seri SKHUN -->
                    <input type="text" name="no_seri_skhun" class="form-control" placeholder="Masukkan Nomor Seri SKHUN">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>No Seri Ijazah:</label> <!--no seri Ijazah -->
                    <input type="text" name="no_seri_ijazah" class="form-control" placeholder="Masukkan Nomor Seri Ijazah">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Hobi:</label> <!-- hobi -->
                    <input type="text" name="hobi" class="form-control" placeholder="Masukkan Hobi">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Cita-cita:</label> <!-- cita-cita -->
                    <input type="text" name="cita_cita" class="form-control" placeholder="Masukkan Cita-cita">
                </div>
            </div>
            </div>
            <div class="alert alert-primary">
                <strong>Data Pribadi</strong>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nama Lengkap:</label> <!-- nama lengkap -->
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Jenis Kelamin:</label> <!-- jenis kelamin -->
                    <select class="form-control" name="jenis_kelamin">
                        <option>Pilih</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>NISN:</label> <!-- nomor NISN -->
                    <input type="text" name="nisn" class="form-control" placeholder="Masukkan Nomor Induk Siswa Nasional">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>NIK:</label> <!-- nomor NIK -->
                    <input type="text" name="nik" class="form-control" placeholder="Masukkan Nomor NIK">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Tempat Lahir:</label> <!-- tempat lahir-->
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Tanggal Lahir:</label> <!-- tanggal lahir -->
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Agama:</label> <!-- agama -->
                    <select class="form-control" name="agama">
                        <option>Pilih</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="khonghuchu">Kong Hu Chu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Berkebutuhan Khusus:</label> <!-- kebutuhan khusus -->
                    <select class="form-control" name="berkebutuhan_khusus">
                        <option>Pilih</option>
                        <option value="tidak">Tidak</option>
                        <option value="netra">Netra</option>
                        <option value="rungu">Rungu</option>
                        <option value="grahita_ringan">Grahita ringan</option>
                        <option value="grahita_sedang">Grahita sedang</option>
                        <option value="daksa_ringan">Daksa ringan</option>
                        <option value="daksa_sedang">Daksa sedang</option>
                        <option value="laras">Laras</option>
                        <option value="wicara">Wicara</option>
                        <option value="tuna_ganda">Tuna ganda</option>
                        <option value="hiper_aktif">Hiper aktif</option>
                        <option value="cerdas_istimewa">Cerdas istimewa</option>
                        <option value="bakat_istimewa">Bakat istiwewa</option>
                        <option value="kesulitan_belajar">Kesulitan belajar</option>
                        <option value="narkoba">Narkoba</option>
                        <option value="indigo">Indigo</option>
                        <option value="down_sindrom">Down sindrom</option>
                        <option value="autis">Autis</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Alamat Jalan:</label> <!-- alamat jalan -->
                    <input type="text" name="alamat_jalan" class="form-control" placeholder="Masukkan Alamat Jalan">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>RT:</label> <!-- RT -->
                    <input type="text" name="rt" class="form-control" placeholder="Masukkan RT">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>RW:</label> <!-- RW -->
                    <input type="text" name="rw" class="form-control" placeholder="Masukkan RW">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Dusun:</label> <!-- dusun -->
                    <input type="text" name="dusun" class="form-control" placeholder="Masukkan Dusun">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kelurahan/Desa:</label> <!-- kelurahan/desa -->
                    <input type="text" name="kelurahan_desa" class="form-control" placeholder="Masukkan Kelurahan/Desa">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kecamatan:</label> <!-- kecamatan -->
                    <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kode Pos:</label> <!-- kode pos -->
                    <input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Tempat Tinggal:</label> <!-- tempat tinggal -->
                    <select class="form-control" name="tempat_tinggal">
                        <option>Pilih</option>
                        <option value="bersama_orang_tua">Bersama orang tua</option>
                        <option value="wali">Wali</option>
                        <option value="kos">Kos</option>
                        <option value="asrama">Asrama</option>
                        <option value="panti_asuhan">Panti Asuhan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Moda Transportasi:</label> <!-- moda transportasi -->
                    <select class="form-control" name="moda_transportasi">
                        <option>Pilih</option>
                        <option value="jalan_kaki">Jalan Kaki</option>
                        <option value="kendaraan_pribadi">Kendaraan Pribadi</option>
                        <option value="kendaraan_umum">Kendaraan Umum/Angkot/Pete-pete</option>
                        <option value="jemputan_sekolah">Jemputan Sekolah</option>
                        <option value="kereta_api">Kereta Api</option>
                        <option value="ojek">Ojek</option>
                        <option value="andong">Andong/Delman/Becak</option>
                        <option value="perahu_penyebrangan">Perahu Penyebrangan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nomor HP:</label> <!-- nomor HP -->
                    <input type="text" name="nomor_hp" class="form-control" placeholder="Masukkan Nomor HP">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nomor Telepon:</label> <!-- nomor telepon-->
                    <input type="text" name="nomor_telepon" class="form-control" placeholder="Masukkan Nomor Telepon">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Email Pribadi:</label> <!-- email pribadi-->
                    <input type="email" name="email_pribadi" class="form-control" placeholder="Masukkan Email Pribadi">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Penerima KPS/KKS/PKH/KIP:</label> <!-- penerima KPS/KKS/PKH/KIP -->
                    <select class="form-control" name="penerima_kps_kks_pkh_kip">
                        <option>Pilih</option>
                        <option value="ya">YA</option>
                        <option value="tidak">TIDAK</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nomor KPS/KKS/PKH/KIP:</label> <!-- nomor KPS/KKS/PKH/KIP -->
                    <input type="text" name="no_kps_kks_pkh_kip" class="form-control" placeholder="Masukkan Nomor KPS/KKS/PKH/KIP">
                </div>
            </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kewarganegaraan:</label> <!--kewarganegaraan-->
                    <select class="form-control" name="kewarganegaraan">
                        <option>Pilih</option>
                        <option value="WNI">Warga Negara Indonesia</option>
                        <option value="WNA">Warga Negara Asing</option>
                    </select>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button> <!--tombol submit-->
                    <button type="reset" class="btn btn-secondary">Reset</button> <!--tombol reset-->
                </div>
            </div>
        </form>
    </div>
</body>
</html>