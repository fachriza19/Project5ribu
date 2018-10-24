

<br>
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-dark">
    &copy; 2018 Distrik Navigasi Kelas I Tanjung Priok - Build & Maintained by Mercubuana University
</footer>

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- </div> -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('assets/js/waves.js') ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('assets/js/sidebarmenu.js') ?>"></script>
<!--stickey kit -->
<script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
<!--stickey kit -->
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/moment/moment.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') ?>"></script>
<!-- Clock Plugin JavaScript -->
<script src="<?php echo base_url('assets/plugins/clockpicker/dist/jquery-clockpicker.min.js') ?>"></script>

<script>
    // MAterial Date picker
    $('#mdate').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });
    $('#mdate1').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });
    $('#timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        time: true,
        date: false
    });
    $('#timepicker1').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        time: true,
        date: false
    });
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    </script>
    <script src="<?php echo base_url('assets/js/jquery.PrintArea.js')?>" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<!-- Vector map JavaScript -->
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js')?>"></script>
<script type="text/javascript">
	$(function () {
		CKEDITOR.replace('ckeditor');
	});
</script>

<!-- DATATABLES -->
<script type="text/javascript" src="<?php echo base_url('assets/DataTables/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/DataTable/js/dataTables.bootstrap4.min.js')?>"></script>

<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> -->
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<!-- END DATATABLES -->
<!-- Magnific popup JavaScript -->
<script src="<?php echo base_url() ?>/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
<!-- ============================================================== -->




<script type="text/javascript">
	$(document).ready(function(){
		$('#example2').DataTable();
	});
</script>

</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablemaptelkompel').DataTable({
      responsive:{

      }
    });
	});
</script>

</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablemapkapal').DataTable({
      responsive:{

      }
    });
	});
</script>


<script type="text/javascript">
$(document).ready(function() {
    $('#table1').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    // header: function ( row ) {
                    //     var data = row.data();
                    //     return 'Details for '+data[0]+' '+data[1];
                    // }
                } ),
                // renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                //     tableClass: 'table'
                // } )
            }
        }
    } );
} );
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#table3').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    // header: function ( row ) {
                    //     var data = row.data();
                    //     return 'Details for '+data[0]+' '+data[1];
                    // }
                } ),
                // renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                //     tableClass: 'table'
                // } )
            }
        }
    } );
} );
</script>



<script type="text/javascript">
$('.carousel').carousel({
  interval: 5000
})
</script>
</body>

</html>
