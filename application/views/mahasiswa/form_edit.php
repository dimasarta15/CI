<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php

echo validation_errors();
echo form_open('mahasiswa/edit');
echo form_label('NRP : ','nrp','class="form-label"');
echo form_error('nrp','<div class="alert alert-danger">','</div>');
echo form_input('nrp',set_value('nrp'),'class="form-control"');

echo form_label('Nama Mahasiswa :','nama','class="form-label"');
echo form_input('nama',set_value('nama'),'class="form-control"');

echo form_label('Jenis Kelamin :','jk','class="form-label"');
echo form_input('jk',set_value('jk'),'class="form-control"');


echo form_submit('','simpan','class="btn btn-primary"');
echo form_close();