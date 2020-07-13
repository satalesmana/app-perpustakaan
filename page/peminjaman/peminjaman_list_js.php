<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
<script>
$(document).ready(function() {
    var tbl_peminjaman = $('#tbl_peminjaman').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax":{
            data:{'mod':'get'},
            url:"./api/peminjaman/peminjamanController.php",
            type:"POST"
        },
        columns: [
            { data: 'idpinjam' },
            { data: 'nim' },
            { data: 'nama' },
            { data: 'tglPinjam' },
            { data: 'tglKembali' }
        ]
    });

    $("#reload_data").click(function(){
        tbl_peminjaman.ajax.reload();
    });

});

</script>