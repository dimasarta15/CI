<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body>

    <h2>HTML Table</h2>


    <?php
$this->table->set_heading('NRP','Nama Mahasiswa','Jenis Kelamin','Aksi');
foreach ($mhs as $m ){
    $this->table->add_row(
        $m->nrp,
        $m->nama,
        $m->jk,
        anchor('mahasiswa/edit','Edit','class="btn btn-success btn-sm"'));
}
echo $this->table->generate();
?>


</body>

</html>