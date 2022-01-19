<br>
<br>
<br>
<br>
<!-- Start History Area -->
<section class="section-gap history-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-title text-center">
                    <h2>PEGAWAI</h2>
                </div>
            </div>
        </div>

        <!-- <div class="card" style="width: 300px;">
            <img src="images/sample.svg" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Alice Liddel</h5>
                <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                <a href="#" class="btn btn-primary">View Profile</a>
            </div>
        </div> -->
        <div class="card card-solid">
            <div class="card-body pb-5">
                <div class="row">
                    <?php foreach ($tbl_pegawai as $key => $value) { ?>
                        <div class="col-12 col-sm-4 mb-3">
                            <div class="card-deck">
                                <div class="card" style="width: 15rem;">
                                    <div class="container" style="margin-top: 10px;">
                                        <img src="<?php echo base_url(); ?>assets/img/pegawai/<?php echo $value->foto; ?>" class="card-img-top" alt=" ">
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">

                                            <h5 class="card-title"><?= $value->nama_pegawai ?></h5>
                                            <p class="card-text"><?= $value->jabatan ?></p>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $value->id_pegawai; ?>">
                                                Detail </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Button trigger modal -->

<!-- Modal -->
<?php $no = 0;
foreach ($tbl_pegawai as $tp) : $no++; ?>
    <div class="modal fade" id="exampleModal<?php echo $tp->id_pegawai; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="<?php echo base_url(); ?>assets/img/pegawai/<?php echo $tp->foto; ?>" width="200" height="200">
                    </div>
                    <br>
                    <br>
                    <div class="container">
                        <label>Nama &emsp;&emsp;&emsp;&emsp; : <?= $tp->nama_pegawai ?></label>
                        <br>
                        <label>Jabatan &nbsp;&emsp;&emsp;&emsp; : <?= $tp->jabatan ?></label>
                        <br>
                        <label>Pangkat &nbsp;&emsp;&emsp;&emsp; : <?= $tp->pangkat ?></label>
                        <br>
                        <label>Email &nbsp;&emsp;&emsp;&emsp;&emsp; : <?= $tp->email ?></label>
                    </div>
                </div>
                <div class="modal-footer" sty>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>