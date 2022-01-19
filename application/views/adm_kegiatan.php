 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
     <!-- Begin Page Content -->
     <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Kegiatan</h1>

         <div class="row">
             <div class="col-lg">
                 <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalTambahKegiatan"><span>Tambah Data Kegiatan</span></button>


                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th scope="col">No</th>
                             <th scope="col">Nama Kegiatan</th>
                             <th scope="col">Tanggal Kegiatan</th>
                             <th scope="col">Keterangan</th>
                             <th scope="col">Foto</th>
                             <th scope="col">Aksi</th>
                         </tr>
                     </thead>
                     <?php

                        $no = 1;
                        foreach ($tbl_kegiatan as $tk) : ?>
                         <tr>
                             <td><?php echo $no++ ?></td>
                             <td><?php echo $tk->nama_kegiatan ?></td>
                             <td><?php echo $tk->tgl_kegiatan ?></td>
                             <td><?php echo $tk->ket_kegiatan ?></td>
                             <td><img src="<?php echo base_url(); ?>assets/img/kegiatan/<?php echo $tk->foto_kegiatan; ?>" width="90" height="90"></td>
                             <td>
                                 <a class="badge badge-success" href="<?= base_url('admin/edit_kegiatan/' . $tk->id_kegiatan) ?>" data-toggle="modal" data-target="#ModalEditKegiatan<?php echo $tk->id_kegiatan;?>"><span>Ubah</span></a>
                                 <a onclick="javascript: return confirm('Anda yakin ingin menghapus data kegiatan ini? Data kegiatan tidak dapat dipulihkan!')" class="badge badge-danger" href="<?= base_url('admin/hapus_Kegiatan/' . $tk->id_kegiatan) ?>"><span>Hapus</span></a>
                             </td>
                         <?php endforeach; ?>

                 </table>
             </div>
         </div>
     </div>
     <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->

 <!-- Modal -->
 <div class="modal fade" id="ModalTambahKegiatan" tabindex="-1" aria-labelledby="ModalTambahKegiatanLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalTambahKegiatanLabel">Form Tambah Data Kegiatan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <?= form_open_multipart('admin/tambah_kegiatan'); ?>
                 <div class="form-group">
                     <label>Nama Kegiatan</label>
                     <input type="text" name="nama_kegiatan" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label>Tanggal Kegiatan</label>
                     <input type="date" name="tgl_kegiatan" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label>Keterangan</label>
                     <input type="text" name="ket_kegiatan" class="form-control" required>
                     <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                 </div>
                 <div class="form-group">
                     <label>Foto Kegiatan</label>
                     <input type="file" name="foto_kegiatan" class="form-control">
                 </div>
                 <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <?= form_close(); ?>
             </div>
         </div>
     </div>
 </div>

 



  <!-- Modal -->
<?php $no = 0;
foreach ($tbl_kegiatan as $tk) : $no++;?>
 <div class="modal fade" id="ModalEditKegiatan<?php echo $tk->id_kegiatan;?>" tabindex="-1" aria-labelledby="ModalEditKegiatanLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalEditKegiatanLabel">Form Ubah Data Kegiatan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <?= form_open_multipart('admin/edit_kegiatan'); ?>
                 <div class="form-group">
                     <!-- <label>ID</label> -->
                     <input type="hidden" name="id_kegiatan" class="form-control" value="<?= $tk->id_kegiatan ?>" readonly>
                 </div>
                 <div class="form-group">
                     <label>Nama Kegiatan</label>
                     <input type="text" name="nama_kegiatan" class="form-control" value="<?= $tk->nama_kegiatan ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Tanggal Kegiatan</label>
                     <input type="text" name="tgl_kegiatan" class="form-control" value="<?= $tk->tgl_kegiatan ?>" >
                 </div>
                 <div class="form-group">
                     <label>Keterangan</label>
                     <input type="text" name="ket_kegiatan" class="form-control" value="<?= $tk->ket_kegiatan ?>" >
                 </div>
                 <div class="form-group">
                     <label>Foto Kegiatan</label>
                     <input type="file" name="foto_kegiatan" class="form-control" value="<?= $tk->foto_kegiatan ?>">
                 </div>
                 <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <?= form_close(); ?>
             </div>
         </div>
     </div>
 </div>
<?php endforeach; ?>