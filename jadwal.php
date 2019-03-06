<?php
session_start();
if(!isset($_SESSION['nama_siswa'])){
  echo "anda belum masuk <a href='login.php'>Login dulu!</a>";
}else{
?>
<?php include ('header2.php') ?>
<style type="text/css">
 .calender{width: 400px; margin: 1%; padding-bottom: 20px;}
 th{padding: 50px; background-color: orange; border: 2px solid #D3D3D3; color:white; font-family: calibri}
 td{text-align: center; padding: 25px 0; border: 2px solid #D3D3D3; background-color: #fbf7f7}
 #red{color:white;}
 h1{text-align: center; font-family: calibri}
</style>
<div class="tksc">
<h3>Agenda Kegiatan Ekstrakulikuler</h3>
<p>SMK Telkom Purwokerto 2018/2019</p>
</div>
<div class="calender">
  <table>
    <tr>
      <th>Senin</th>
      <th>Selasa</th>
      <th>Rabu</th>
      <th>Kamis</th>
      <th>Jumat</th>
    </tr>
    <tr>
      <td>basket</td>
      <td>voly</td>
      <td>web desain</td>
      <td>tari</td>
      <td>renang</td>
    </tr>
    <tr>
      <td>basket</td>
      <td>voly</td>
      <td>web desain</td>
      <td>tari</td>
      <td>renang</td>
    </tr>
    <tr>
       <td>basket</td>
      <td>voly</td>
      <td>web desain</td>
      <td>tari</td>
      <td>renang</td>
    </tr>
    <tr>
       <td>basket</td>
      <td>voly</td>
      <td>web desain</td>
      <td>tari</td>
      <td>renang</td>
    </tr>
    <tr>
       <td>basket</td>
      <td>voly</td>
      <td>web desain</td>
      <td>tari</td>
      <td>renang</td>
    </tr>
  </table>
</div>
<?php include ('footer.php') ?>
<?php } ?>