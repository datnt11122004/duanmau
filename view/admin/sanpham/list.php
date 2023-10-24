
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($listsanpham as $sanpham) {
      extract($sanpham);
      $hinhpath = "../upload/" . $img;

      $suasp = "index.php?act=suasp&idsp=" . $id_sp;
      $hard_delete = "index.php?act=hard_delete&idsp=" . $id_sp;
      $soft_delete = "index.php?act=soft_delete&idsp=" . $id_sp;
      if (is_file($hinhpath)) {
          $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
      } else {
          $hinhpath = "No file img!";
      }
  ?>
    <tr>
        <th scope="row"><?=$id_Sp?></th>
        <td><?=$name?>></td>
        <td><?=$price?>></td>
        <td><?=$hinhpath?></td>
        <td><?=$luotxem?>></td>
        <td><?=$soBinhLuan?></td>
        <td>Xóa</td>
    </tr>
  <?php } ?>
 </tbody>
</table>