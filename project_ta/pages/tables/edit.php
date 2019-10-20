<?php
include "koneksi_tabel.php";
$id=$_GET['id_kecamatan'];
$data=mysqli_query($konek, "select * from Kecamatan where id_kecamatan='$id'");
while($d=mysqli_fetch_array($data)){
?>
      <form action="update.php" class="forms-sample" method="post">
        <table>
          <tr>
            <td><label>Id Kecamatan</label></td>
            <td><input type="text" name="id_kecamatan" value="<?php echo $d['id_kecamatan']; ?>"></td>
          </tr>
          <tr>
        <div class="form-group">
          <td><label for="exampleInputUsername1">Nama Kecamatan</label></td>
          <td><input type="text" name="nama_kecamatan" class="form-control" placeholder="Nama Kecamatan" value="<?php echo $d['nama_kecamatan']; ?>"></td>
        </div>
        </tr>
        <tr>      
        <div class="form-group">
            <td><label for="exampleInputUsername1">Padi</label></td>
            <td><input type="text" name="padi" class="form-control" placeholder="Padi" value="<?php echo $d['padi']; ?>"></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
            <td><label for="exampleInputUsername1">Jagung</label></td>
            <td><input type="text" name="jagung" class="form-control" placeholder="Jagung" value="<?php echo $d['jagung']; ?>"></td>
        </div>
      </tr>
      <tr>
      <div class="form-group">
            <td><label for="exampleInputUsername1">Kacang tanah</label></td>
            <td><input type="text" name="kacang_tanah" class="form-control" placeholder="Kacang tanah" value="<?php echo $d['kacang_tanah']; ?>"></td>
        </div>
      </tr>
      <tr>
      <div class="form-group">
            <td><label for="exampleInputUsername1">Kedelai</label></td>
            <td><input type="text" name="kedelai" class="form-control" placeholder="Kedelai" value="<?php echo $d['kedelai']; ?>"></td>
        </div>
      </tr>
    </table>
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
                        Remember me
            <i class="input-helper"></i><i class="input-helper"></i></label>
        </div>
        <button type="submit" action=""class="btn btn-gradient-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
    </form>
    <?php
  }
  ?>