</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url() ?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->

<script src="<?php echo base_url() ?>assets/admin/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/data/morris-data.js"></script>

<script src="<?php echo base_url() ?>assets/admin/vendor/flot/excanvas.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/flot/excanvas.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/flot/jquery.flot.time.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/data/flot-data.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url() ?>assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

<script src="<?php echo base_url() ?>assets/admin/dist/js/sb-admin-2.js"></script>

  <script type="text/javascript">
    $('document').ready(function(){
      $('#mhw_ti').DataTable();
      $.ajax({
        type: 'get',
        url : 'http://localhost:8888/vote/vote_a/get_ti',
        dataType: 'json',
        success : function(data){
          var mhs = '';
          var x;
          for(i=0; i<data.length; i++){
            mhs += '<tr>'+
                   '<td>'+data[i].nim+'</td>'+
                   '<td>'+data[i].nama+'</td>'+
                   '<td>'+data[i].prodi+'</td>'+
                   '<td>'+data[i].status+'</td>'+
                   '</tr>';
          }
          $('#show_ti').html(mhs);
        }
      });
      $.ajax({
        type: 'get',
        url : 'http://localhost:8888/vote/vote_a/get_si',
        dataType: 'json',
        success : function(data){
          var mhs = '';
          var x;
          for(i=0; i<data.length; i++){
            mhs += '<tr>'+
                   '<td>'+data[i].nim+'</td>'+
                   '<td>'+data[i].nama+'</td>'+
                   '<td>'+data[i].prodi+'</td>'+
                   '<td>'+data[i].status+'</td>'+
                   '</tr>';
          }
          $('#show_si').html(mhs);
        }
      });
    });
  </script>
</body>

</html>
