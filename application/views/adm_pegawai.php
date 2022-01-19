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
         <h1 class="h3 mb-4 text-gray-800">Data Pegawai</h1>

         <div class="row">
             <div class="col-lg">
                 <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalTambahPegawai"><span>Tambah Data Pegawai</span></button>


                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th scope="col">No</th>
                             <th scope="col">Nama Pegawai</th>
                             <th scope="col">Jabatan</th>
                             <th scope="col">Pangkat</th>
                             <th scope="col">Email</th>
                             <th scope="col">Foto</th>
                             <th scope="col">Aksi</th>
                         </tr>
                     </thead>

                     <?php

                        $no = 1;
                        foreach ($tbl_pegawai as $tp) : ?>
                         <tr>
                             <td><?php echo $no++ ?></td>
                             <td><?php echo $tp->nama_pegawai ?></td>
                             <td><?php echo $tp->jabatan ?></td>
                             <td><?php echo $tp->pangkat ?></td>
                             <td><?php echo $tp->email ?></td>
                             <td><img src="<?php echo base_url(); ?>assets/img/pegawai/<?php echo $tp->foto; ?>" width="90" height="90"></td>
                             <td>
                                 <button type="button" class="badge badge-success" href="<?= base_url('admin/edit_pegawai/' . $tp->id_pegawai) ?>" data-toggle="modal" data-target="#ModalEditPegawai<?php echo $tp->id_pegawai;?>"><span>Ubah</span></button>
                                 <a onclick="javascript: return confirm('Anda yakin ingin menghapus data pegawai ini? Data pegawai tidak dapat dipulihkan!')" class="badge badge-danger" href="<?= base_url('admin/hapus_pegawai/' . $tp->id_pegawai) ?>"><span>Hapus</span></a>
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
 <div class="modal fade" id="ModalTambahPegawai" tabindex="-1" aria-labelledby="ModalTambahPegawaiLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalTambahPegawaiLabel">Form Tambah Data Pegawai</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <?= form_open_multipart('admin/tambah_pegawai'); ?>
                 <div class="form-group">
                     <label>Nama Pegawai</label>
                     <input type="text" name="nama_pegawai" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label>Jabatan</label>
                     <input type="text" name="jabatan" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label>Pangkat</label>
                     <input type="text" name="pangkat" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label>Foto</label>
                     <input type="file" name="foto" class="form-control" required>
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
foreach ($tbl_pegawai as $tp) : $no++;?>
 <div class="modal fade" id="ModalEditPegawai<?php echo $tp->id_pegawai;?>" tabindex="-1" aria-labelledby="ModalEditPegawaiLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalEditPegawaiLabel">Form Ubah Data Pegawai</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <?= form_open_multipart('admin/edit_pegawai'); ?>
                 <div class="form-group">
                     <!-- <label>ID</label> -->
                     <input type="hidden" name="id_pegawai" class="form-control" value="<?= $tp->id_pegawai ?>" readonly>
                 </div>
                 <div class="form-group">
                     <label>Nama Pegawai</label>
                     <input type="text" name="nama_pegawai" class="form-control" value="<?= $tp->nama_pegawai ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Jabatan</label>
                     <input type="text" name="jabatan" class="form-control" value="<?= $tp->jabatan ?>" >
                 </div>
                 <div class="form-group">
                     <label>Pangkat</label>
                     <input type="text" name="pangkat" class="form-control" value="<?= $tp->pangkat ?>" >
                 </div>
                 <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" value="<?= $tp->email ?>" >
                 </div>
                 <div class="form-group">
                     <label>Foto</label>
                     <input type="file" name="foto" class="form-control" value="<?= $tp->foto ?>">
                 </div>
                 <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <?= form_close(); ?>
             </div>
         </div>
     </div>
 </div>
<?php endforeach; ?>