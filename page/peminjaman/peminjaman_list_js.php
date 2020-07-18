<script>
$(document).ready(function() {
    var tbl_peminjaman = $('#tbl_peminjaman').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax":{
            data:{'mod':'get'},
            type:"POST",            
            url:"<?php echo API_URL ?>peminjaman/peminjamanController.php",
        },
        columns: [
            { data: 'idpinjam' },
            { data: 'nim' },
            { data: 'nama' },
            { data: 'tglPinjam' },
            { data: 'tglKembali' },
            { data: null, 
                "className":'row-item',
                defaultContent: '<button type="button" class="btn-detail btn btn-success btn-sm ">Detail</button> <button type="button" class="btn-kembali btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Kembalikan </button> ' 
            },
        ]
    });

    $("#reload_data").click(function(){
        tbl_peminjaman.ajax.reload();
    });

    var dialog_pengembali_detail = $( "#dialog-form-detail" ).dialog({
        autoOpen: false,
        modal: true,
        height: 400,
      width: 550,
        show: {
            effect: "slide",
            duration: 1000
        },
        hide: {
            effect: "fold",
            duration: 1000
        },
        buttons: {
            Batal: function() {
                dialog_pengembali_detail.dialog( "close" );
            }
        },
    });

    $('#tbl_peminjaman tbody').on('click', 'button', function () {
        let isBtnDetail = $(this).hasClass("btn-detail");
        let isBtnKembali = $(this).hasClass( "btn-kembali" );
        var data = tbl_peminjaman.row( $(this).parents('tr') ).data();
        
        if(isBtnDetail){
            dialog_pengembali_detail.dialog('open');
            
            $("#id_peminjaman").html(": "+data.idpinjam)
            $("#nim").html(": "+data.nim)
            $("#nama_pinjam").html(": "+data.nama)
            $("#tgl_pinjam").html(": "+data.tglPinjam)
            $("#tgl_asumsi").html(": "+data.tglKembali)
            $("#status").html(": "+data.status)
        }

        if(isBtnKembali){
            console.log(data.idpeminjam)
            $('#idpinjam').val(data.idpeminjam)
            $("#form_pengembalian").modal('toggle')
        }

    });

});

</script>