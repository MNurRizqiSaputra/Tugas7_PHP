<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Pelanggan();
$data_pelanggan = $model->dataPelanggan();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

?>
                        <h1 class="mt-4">TABLE PELANGGAN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Tabel disini berisi data pelanggan yang ada di toko
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Pelanggan
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu_ID</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($data_pelanggan as $row){
                                            
                                            ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode']?></td>
                                            <td><?= $row['nama_pelanggan']?></td>
                                            <td><?= $row['jk']?></td>
                                            <td><?= $row['tmp_lahir']?></td>
                                            <td><?= $row['tgl_lahir']?></td>
                                            <td><?= $row['email']?></td>
                                            <td><?= $row['kartu_id']?></td>
                                            <td><?= $row['alamat']?></td>
                                        </tr>
                                        <?php
                                            $no++; 
                                        } 
                                        ?>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk </th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>

</div>
</div>

                <?php
                    include_once 'bottom.php';
                ?>