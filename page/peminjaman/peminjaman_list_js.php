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
            { data: 'tglKembali' },
            { data: null, 
                "className":'row-item',
                defaultContent: '<button type="button" class="btn-kembali btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Kembalikan </button> ' 
            },
        ]
    });

    $("#reload_data").click(function(){
        tbl_peminjaman.ajax.reload();
    });

    $('#tbl_peminjaman tbody').on('click', 'button', function () {
        let action = $(this).hasClass( "btn-kembali" );
        var data = tbl_peminjaman.row( $(this).parents('tr') ).data();
        // console.log(data)
    });

});

</script>