<script>
$(document).ready(function() {
    var tbl_pengembalian = $('#tbl_pengembalian').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax":{
            data:{'mod':'get'},
            type:"POST",            
            url:"<?php echo API_URL ?>pengembalian/pengembaliancontroller.php",
        },
        columns: [
            { data: 'id_pengembalian' },
            { data: 'id_pinjam' },
            { data: 'nim' },
            { data: 'tgl_kembali' },
            { data: 'tgl_realisasi' },
            { data: 'denda' },
                
        ]
    });

    $("#reload_data").click(function(){
        tbl_pengembalian.ajax.reload();
    });
	
	});
</script>