<div class="content">
  <div class="container-fluid">
    <h3>Data Member</h3>
      <div class="btn-toolbar">     
        <a style="color:white" href="<?php echo base_url();?>index.php/page/tambah_member">
          <input type="button" value="Daftar Member" class="btn btn-info"></a>
        </div>

        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead>
              <tr bgcolor="#CCCCCC">
                <th>No.</th>
                <th>Nama Tim</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Email</th>
              </tr>
            </thead> 
            <tbody>
             <?php $no=1; foreach ($member as $row){ ?> 
              <tr>        
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama_tim; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->nope; ?></td>
                <td><?php echo $row->email; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <i style="font-size: 11pt; color: red;">
        *) Biaya menjadi member Rp.500.000/bulan, maks 6 kali latihan.</i>
      </div>