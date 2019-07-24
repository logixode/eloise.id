<?php
    include "config/connection.php";
    

    /**
     * Konversi data tanngal default ke format yang biasa di Indonesia
     *
     * @param   string      $value      variabel input dari berupa DateTime   
     * @return  $tanggal                
     */
    function tanggal($value){
        $tanggal = $value->format('d M Y');
        return $tanggal;
    }

    /**
     * Menhitung jumlah data dalam tabel id di database tb_data
     *
     * @return  $result_brg['total']    mengambil data array dari tabel total
     */
    function countRow()
    {
        global $connect;
        $barang     = mysqli_query($connect, "SELECT count(id) as total from tb_data");
        $result_brg = mysqli_fetch_array($barang);
        return $result_brg['total'];
    }

    $read   = mysqli_query($connect, "SELECT * FROM tb_data");

    class Harga 
    {
        public function setRupiah($angka)
        {
            return "Rp." . number_format($angka,2,',','.');
        }
        public function getHargaTotal($value)
        {
            global $connect;
            $total = mysqli_query($connect, "SELECT SUM($value) AS total FROM tb_data;");
            $total_hasil = mysqli_fetch_array($total);
            return $this->setRupiah($total_hasil['total']);
        }
    }

    $harga = new Harga;
    // if (isset($_POST)) {
    //     $kode_jenis = $_POST['kode_jenis'];
    //     $jumlah = $_POST['jumlah'];
        

    // }

    function setCard()
    {
        
    }
?>

<div class="row text-center">
    <div class="col-md-3">
        <div class="card text-white bg-dark center" >
            <div class="card-header"><h5 class="card-title">Jumlah Terjual</h5></div>
            <div class="card-body">
                <p class="card-text"><?= countRow(); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-dark mb-3 center" >
            <div class="card-header"><h5 class="card-title">Total Pengeluaran</h5></div>
            <div class="card-body">
                <p class="card-text"><?= $harga->getHargaTotal('pengeluaran'); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-dark mb-3 center" >
            <div class="card-header"><h5 class="card-title">Pemasukan Total</h5></div>
            <div class="card-body">
                <p class="card-text"><?= $harga->getHargaTotal('pemasukan'); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-dark mb-3 center" >
            <div class="card-header"><h5 class="card-title">Pendapatan Bersih</h5></div>
            <div class="card-body">
                <p class="card-text"><?= $harga->getHargaTotal('laba'); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="card p-3">
   <table class="table" id="sorting">
       <thead class="thead-dark">
           <tr>
               <th scope="col">No.</th>
               <th scope="col">Tanggal</th>
               <th scope="col">Jenis Kerudung</th>
               <th scope="col">Jumlah</th>
               <th scope="col">Pengeluaran</th>
               <th scope="col">Pemasukan</th>
               <th scope="col">Laba</th>
               <th scope="col">Pengaturan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $innerJoin_query = "SELECT tb_data.tanggal, tb_harga.data, tb_data.jumlah, tb_data.pengeluaran, tb_data.pemasukan, tb_data.laba
                                FROM tb_data
                                INNER JOIN tb_harga ON tb_data.kode_jenis = tb_harga.kode_jenis";
            $read   = mysqli_query($connect, $innerJoin_query);
            $no     = 0;
            
            while ($data_col = mysqli_fetch_array($read)) { 
                $link_edit          = "public/daftar-harga.php?id=" . $data_col['id'] . 
                $link_delete        = "#";
                $konversi_tanggal   = new DateTime($data_col['tanggal']);
                ++$no; ?>

                <tr>
                    <td><?= $no; ?></td>
                    <td><?= tanggal($konversi_tanggal); ?></td>
                    <td><?= $data_col['data']; ?></td>
                    <td><?= $data_col['jumlah']; ?></td>
                    <td><?= $harga->setRupiah($data_col['pengeluaran']); ?></td>
                    <td><?= $harga->setRupiah($data_col['pemasukan']); ?></td>
                    <td><?= $harga->setRupiah($data_col['laba']); ?></td>
                    <td>
                        <a href="<?= $link_edit; ?>"><?= $btn_edit ?></a>
                        <a href="#"><?= $btn_delete ?></a>
                    </td>
                </tr>
                
                <?php 
            } 
            ?>
        </tbody>
    </table>
    <button type="button" id="as" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#sorting').DataTable();
    $('#sorting_jenis').DataTable();
} );
</script>