<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new JenisProduk();
$jenis_produk = $model->JenisProduk();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

?>
                        <h1 class="mt-4">TABLE JENIS PRODUK</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Tabel disini berisi data jenis produk yang ada di toko
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Jenis Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama </th>
                                            <th>Keterangan</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                            $no = 1;
                                            foreach($jenis_produk as $row){
                                                
                                                ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $row['nama']?></td>
                                                <td><?= $row['ket']?></td>
                                                
                                            </tr>
                                            <?php
                                            $no++; 
                                        } 
                                        ?>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>   
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>

</div>
</div>

                <?php
                    include_once 'bottom.php';
                ?>