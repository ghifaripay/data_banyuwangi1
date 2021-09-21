<!-- <style media="screen">
div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
</style> -->
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Hasil Pencarian : <?php echo $indikator ?></h2>
    </div>

  <table id="example3" class="display" width="100%">
    <thead>
      <tr style="background: #278286;">
        <th class="text-white text-center">No</th>
        <th class="text-white ">Indikator</th>
        <th class="text-white text-center">2013</th>
        <th class="text-white text-center">2014</th>
        <th class="text-white text-center">2015</th>
        <th class="text-white text-center">2016</th>
        <th class="text-white text-center">2017</th>
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
      	if( ! empty($data_dasar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
      		foreach($data_dasar as $data){
             // Lakukan looping pada variabel siswa dari controller
             $no++;
               echo "<tr>";
               echo "<td class='text-center'>".$no."</td>";
               echo "<td class='text-left'>".$data["indikator"].' '.$data["sub_indikator"]."</td>";
               echo "<td class='text-center'>".$data["th2013"]."</td>";
               echo "<td class='text-center'>".$data["th2014"]."</td>";
               echo "<td class='text-center'>".$data["th2015"]."</td>";
               echo "<td class='text-center'>".$data["th2016"]."</td>";
               echo "<td class='text-center'>".$data["th2017"]."</td>";
               echo "<td class='text-center'>".$data["th2018"]."</td>";
               echo "<td class='text-center'>".$data["th2019"]."</td>";
               echo "<td class='text-center'>".$data["th2020"]."</td>";
               echo "<td class='text-center'>".$data["satuan_data"]."</td>";
               echo "<td class='text-center'>".$data["sumber_data"]."</td>";
               echo "</tr>";
      		}
      	}
        else{ // Jika data tidak ada
      		echo "<tr><td colspan='12' class='text-center'>Data tidak ada</td></tr>";
      	}
      	?>
      </tbody>
    </table>
  </div>
</section><!-- End About Us Section -->


<script type="text/javascript">
var table;
$(document).ready(function() {
    //datatables
    table = $('#example3').DataTable({

       // scrollY         :        "450px",
       scrollX         :        true,
       scrollCollapse  : true,
       searching       :     false,
       paging          :         true,
       bLengthChange   :  false,
       // fixedColumns    :   {
       //     leftColumns : 2
       // }
    });
});
</script>

<!-- <script type="text/javascript">
  	$(document).ready(function() {
  		$('#example3').DataTable(
  			{
  				"searching": false,
  				"bPaginate": true,
      		"bLengthChange": false,
      		"bFilter": true,
      		"bInfo": true,
          "fixedColumns": {
            leftColumns: 2,
  			},
      }
  		);
  	} );
</script> -->
