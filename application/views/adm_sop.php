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
         <h1 class="h3 mb-4 text-gray-800">Standar Operasional Prosedur (SOP)</h1>

         <div class="row">
             <div class="col-lg">
                 <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalTambahSop"><span>Tambah Data SOP</span></button>


                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th scope="col">No</th>
                             <th scope="col">Nama SOP</th>
                             <th scope="col">File</th>
                             <th scope="col">Aksi</th>
                         </tr>
                     </thead>
                     <?php

                        $no = 1;
                        foreach ($tbl_sop as $ts) : ?>
                         <tr>
                             <td><?php echo $no++ ?></td>
                             <td><?php echo $ts->nama_sop ?></td>
                             <td><?php echo $ts->file ?></td>
                             <!-- <td><img src="<?php echo base_url(); ?>assets/img/sop/<?php echo $ts->foto_sop; ?>" width="90" height="90"></td> -->
                             <td>
                                 <button type="button" class="badge badge-success" href="<?= base_url('admin/edit_sop/' . $ts->id_sop) ?>" data-toggle="modal" data-target="#ModalEditSop<?php echo $ts->id_sop;?>"><span>Ubah</span></button>
                                 <a onclick="javascript: return confirm('Anda yakin ingin menghapus data sop ini? Data sop tidak dapat dipulihkan!')" class="badge badge-danger" href="<?= base_url('admin/hapus_sop/' . $ts->id_sop) ?>"><span>Hapus</span></a>
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
 <div class="modal fade" id="ModalTambahSop" tabindex="-1" aria-labelledby="ModalTambahSopLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalTambahSopLabel">Form Tambah Data SOP</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <?= form_open_multipart('admin/tambah_sop'); ?>
                 <div class="form-group">
                     <label>Nama SOP</label>
                     <input type="text" name="nama_sop" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label>Lampiran File SOP</label>
                     <input type="file" name="file" class="form-control">
                 </div>
                 <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <?= form_close(); ?>
             </div>
         </div>
     </div>
 </div>


 <!-- Modal Edit -->
 <?php $no = 0;
foreach ($tbl_sop as $ts) : $no++;?>
 <div class="modal fade" id="ModalEditSop<?php echo $ts->id_sop;?>" tabindex="-1" aria-labelledby="ModalTambahSopLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalTambahSopLabel">Form Ubah Data SOP</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <?= form_open_multipart('admin/edit_sop'); ?>
                 <div class="form-group">
                     <!-- <label>ID</label> -->
                     <input type="hidden" name="id_sop" class="form-control" value="<?= $ts->id_sop ?>" readonly>
                 </div>
                 <div class="form-group">
                     <label>Nama SOP</label>
                     <input type="text" name="nama_sop" class="form-control" value="<?= $ts->nama_sop ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Lampiran File SOP</label>
                     <input type="file" name="file" class="form-control" value="<?= $ts->file ?>">
                 </div>
                 <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <?= form_close(); ?>
             </div>
         </div>
     </div>
 </div>
 <?php endforeach; ?>