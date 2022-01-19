<div class="container float-center">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="text-center">
        <h2 class="text-center">Standar Operasional Prosedur (SOP) </h2>
        <br>
    </div>
    <br>
    <?php foreach ($tbl_sop as $ts =>  $value) { ?>
        <h5> <?= $value->nama_sop ?></h5>
        <li><button type="button" data-toggle="modal" data-target="#pdf<?php echo $value->id_sop; ?>">
                <i class="fas fa-download" id="view"> Download</i>
            </button></li>
        <!-- <p><ul>
            <li><button name="view"><i class="fas fa-download" id="view"> Download</i></button></li>
        </ul></p> -->
    <?php } ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button> -->



    <!-- Modal -->
    <?php $no = 0;
    foreach ($tbl_sop as $ts) : $no++; ?>
        <div class="modal fade" id="pdf<?php echo $ts->id_sop; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?= $ts->nama_sop ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="<?php echo base_url(); ?>file/<?php echo $ts->file ?>" title="<?= $ts->nama_sop ?>" width="100%" height="600px">
                        </iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>