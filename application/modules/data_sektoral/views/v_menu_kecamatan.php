<section id="about" class="about">
  <div class="container" data-aos="fade-up">
  <div class="section-title">
    <h2>Data Kecamatan</h2>
  </div>
  <div class="row">
        <div class="col-lg-4">
            <div class="form-group mb-2">
              <label for="exampleFormControlSelect1" class="text-dark">Filter Kecamatan: &nbsp;</label>
                <select id="kecamatan" name="kategori" class="form-control">
                    <option selected="" disabled="" value="0">Pilih Kecamatan</option>
                    <option value="all">Semua Kecamatan</option>
                    <?php foreach ($filter_kecamatan as $value): ?>
                      <option  value="<?php echo $value["id"]; ?>"><?php echo $value["kecamatan"]; ?></option>
                    <?php endforeach; ?>
              </select>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group mb-2">
            <label for="exampleFormControlSelect1" class="text-dark">Filter Urusan: &nbsp;</label>
              <select id="urusan" name="kategori" class="form-control">
                  <option selected="" disabled="" value="0">Pilih Urusan</option>
                  <option value="all">Semua Data</option>
                  <?php foreach ($filter_menu as $value): ?>
                    <option  value="<?php echo $value["id"]; ?>"><?php echo $value["kategori"]; ?></option>
                  <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-lg-4">

        </div>
      </div><hr>
    <table id="example4" class="display" width="100%">
      <thead>
        <tr style="background: #278286;">
          <th class="text-white">No</th>
          <th class="text-white">Indikator</th>
          <th class="text-white">Kecamatan</th>
          <th class="text-white text-center">2018</th>
          <th class="text-white text-center">2019</th>
          <th class="text-white text-center">2020</th>
          <th class="text-white text-center">Satuan</th>
          <th class="text-white text-center">Sumber Data</th>
        </tr>
      </thead>
        <tbody>
          <?php
            $no=0;
        { // Jika data pada database tidak sama dengan empty (alias ada datanya)
        		foreach($data_menu as $data){
               // Lakukan looping pada variabel siswa dari controller
            $no++;
        			echo "<tr>";
        			echo "<td class='text-center'>".$no."</td>";
        			echo "<td class='text-left'>".$data["indikator"].' '.$data["sub_indikator"]."</td>";
              echo "<td class='text-center'>".$data["kecamatan"]."</td>";
              echo "<td class='text-center'>".$data["th2018"]."</td>";
              echo "<td class='text-center'>".$data["th2019"]."</td>";
              echo "<td class='text-center'>".$data["th2020"]."</td>";
              echo "<td class='text-center'>".$data["satuan_data"]."</td>";
              echo "<td class='text-center'>".$data["sumber_data"]."</td>";
        			echo "</tr>";
        		}
        	}
        	?>
        </tbody>
      </table>

  </div>
</section><!-- End About Us Section -->


<script type="text/javascript">
  $('#urusan').on('change', function() {
    let kecamatan=$('#kecamatan').val();
    let urusan=(this.value);
  console.log(kecamatan);
  console.log(urusan);
  $("#menu_data").empty
  $.ajax({
    url  : "<?php echo base_url()?>Data_sektoral/filter_menu_kecamatan", // File tujuan
    type : 'POST', // Tentukan type nya POST atau GET
    data : {kecamatan: kecamatan, urusan: urusan}, // Set data yang akan dikirim
    dataType: "json",
    // beforeSend: function(response) {},
    success: function(response){ // Ketika proses pengiriman berhasil
      // Ganti isi dari div view dengan view yang diambil dari controller siswa function search
      $("#menu_data").html(response.hasil);
      // console.log(response.hasil);
    },
    error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
      alert(xhr.responseText); // munculkan alert
    }
  });
  });
</script>

<script type="text/javascript">
var table;
$(document).ready(function() {
    //datatables
    table = $('#example4').DataTable({

       // scrollY         :        "450px",
       scrollX         :        true,
       scrollCollapse  : true,
       searching       :     true,
       paging          :         true,
       bLengthChange   :  true,
       // fixedColumns    :   {
       //     leftColumns : 2
       // }
    });
});
</script>
