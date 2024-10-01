<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <form action="" method="post">
            @csrf
            <div class="row mb-3">
                <label for="kode_penjualan" class="col-form-label col-3">No Transaksi</label>
                <div class="col-5">
                    <input type="text" name="kode_penjualan" id="kode_penjualan" class="form-control bg-body-secondary" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal" class="col-form-label col-3">Tanggal</label>
                <div class="col-3">
                    <input type="date" name="tanggal" id="tanggal" class="form-control border-0 bg-body-secondary" readonly value="{{date("Y-m-d")}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kode_pelanggan" class="col-form-label col-3">Kode pelanggan</label>
                <div class="col-5">
                    <input type="text" name="kode_pelanggan" id="kode_pelanggan" class="form-control" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_pelanggan" class="col-form-label col-3">Nama lengkap</label>
                <div class="col-5">
                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" disabled >
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-form-label col-3">Alamat</label>
                <div class="col-5">
                    <textarea name="alamat" id="alamat" class="form-control" disabled></textarea>
                </div>
            </div>
            <table class="table table-sm table-striped">
                <thead>
                    <tr class="align-middle">
                        <th>
                            <label for="kode_barang" class="form-label">Kode</label>
                            <input type="text"  id="kode_barang" class="form-control form-control-sm">
                        </th>
                        <th>
                            <label for="nama_barang" class="form-label">Nama</label>
                            <input type="text"  id="nama_barang" class="form-control form-control-sm" disabled>
                        </th>
                        <th>
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number"  id="harga" class="form-control form-control-sm" disabled>
                        </th>
                        <th>
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number"  id="jumlah" class="form-control form-control-sm">
                        </th>
                        <th>
                            <label for="subtotal" class="form-label">Subtotal</label>
                            <input type="number"  id="subtotal" class="form-control form-control-sm" disabled>
                        </th>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/axios.min.js"></script>
    <script src="/js/penjualan.js"></script>
</body>
</html>
