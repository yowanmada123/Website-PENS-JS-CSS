
<?php 
$sql = "SELECT `Nrp`, `Nama` FROM `anggota`";
$sql2 = "SELECT `KodeBuku`, `Judul` FROM `buku`";
$rs = $conn->query($sql);
$rs2 = $conn->query($sql2);
?>
<form name="form_buku" action="index.php?page=insertPinjam" method="post">
    <div class="form-group">
        <label for="anggota">Anggota </label>
        <?php
      echo "<select class='form-control' name='nrp'>";
      while($row = $rs->fetch_assoc()){
          echo "<option value='".$row["Nrp"]."'>".$row["Nrp"]." ~ ".$row["Nama"]."</option>";
      }
      $rs->close();
      echo "</select>";
    ?>
    </div>
    <div class="form-group">
        <label for="anggota">Buku </label>
        <?php
      echo "<select class='form-control' name='kdbuku'>";
      while($row2 = $rs2->fetch_assoc()){
          echo "<option value='".$row2["KodeBuku"]."'>".$row2["KodeBuku"]." ~ ".$row2["Judul"]."</option>";
      }
      $rs->close();
      echo "</select>";
    ?>
    </div>
    <div class="form-group">
        <label for="judul">Tanggal Pinjam </label>
        <input type="text" class="form-control" name="tanggal" value="<?php echo date("Y-m-d") ?>" readonly>
    </div>
    <div class="form-group">
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan Data Pinjam</button>
    </div>
</form>