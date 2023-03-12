<?php 
include_once 'header.php' 
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
                    require_once 'libfungsi.php';
                    if(isset($_POST['submit'])){
                        $fullname = $_POST ['namaLengkap'];
                        $matakuliah = $_POST['mataKuliah'];
                        $nilaiuts = $_POST['nilaiUTS'];
                        $nilaiuas = $_POST ['nilaiUAS'];
                        $nilaitugas = $_POST ['nilaiTugas'];
                        $kelulusan = kelulusan($nilaiuts, $nilaiuas, $nilaitugas);
                        $grade = grade($kelulusan); 
                        $predikat = predikat($kelulusan);
                        $keterangan = rerata($nilaiuts, $nilaiuas, $nilaitugas);
        ?>
        
            <div class="mt-4">
                <td> <?= 3 ?> </td>
                <td> <?= $fullname ?> </td>
                <td> <?= $matakuliah ?> </td>
                <td> <?= $nilaiuts ?> </td>
                <td> <?= $nilaiuas ?> </td>
                <td> <?= $nilaitugas ?> </td>
                <td> <?= $kelulusan ?> </td>
                <td> <?= $grade ?> </td>
                <td> <?= $predikat ?> </td>
                <td> <?= $keterangan ?> </td>
            </div>

                <?php
                }
                ?>
      </tbody>
  </table>
</div>

<?php 
include_once 'footer.php' 
?>