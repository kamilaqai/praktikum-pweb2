<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h3>Belanja Online</h3>
        <hr>
        
        <div class="row">
            <!-- Form Belanja -->
            <div class="col-md-8">
                <form action="" method="post">
                    <?php
                        $elektronik = [
                            "TV"=> 4200000,
                            "Kulkas"=> 3100000,
                            "Mesin Cuci"=> 3800000,
                        ];
                    ?>
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div> 
                                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilihproduk" id="pilihproduk_0" type="radio" class="custom-control-input" value="TV"> 
                                <label for="pilihproduk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilihproduk" id="pilihproduk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                <label for="pilihproduk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilihproduk" id="pilihproduk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                <label for="pilihproduk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Daftar Harga di Kanan -->
            <div class="col-md-4 align-self-start">
                <div class="card">
                    <div class="card-header text-black" style="background-color:rgb(180, 193, 213)">Daftar Harga</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">TV: Rp 4.200.000</li>
                            <li class="list-group-item">Kulkas: Rp 3.100.000</li>
                            <li class="list-group-item">Mesin Cuci: Rp 3.800.000</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center text-black" style="background-color: rgb(180, 194, 215)">Harga Dapat Berubah Setiap Saat</div>
                </div>
            </div>
        </div>

        <hr>
        <h4>Hasil Pesanan Anda:</h4>
        <?php
        if (isset($_POST['submit'])) {
            $customer = $_POST['customer'];
            $pilihproduk = $_POST['pilihproduk'];
            $jumlah = $_POST['jumlah'];

            if (isset($customer, $pilihproduk, $jumlah) && is_numeric($jumlah) && $jumlah > 0) {
                $total = $elektronik[$pilihproduk] * $jumlah;

                echo "Nama Customer: $customer <br>";
                echo "Produk Pilihan: $pilihproduk <br>";
                echo "Jumlah Beli: $jumlah <br>";
                echo "Total Belanja: Rp " . number_format($total, 0, ',', '.') . "<br>";
            }
        }
        ?>
    </div>
</body>
</html>
