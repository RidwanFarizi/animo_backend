<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>

<body>


    <div class="container">
        <h4>Form Tambah Produk</h4>
        <hr>
        <form action="<?php echo base_url('produk/save'); ?>" method="post">

            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label for="">Ukuran Produk</label>
                <textarea name="ukuran" class="form-control" placeholder="Ukuran Produk"></textarea>
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <textarea name="harga" class="form-control" placeholder="Harga Produk"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>

</body>

</html>