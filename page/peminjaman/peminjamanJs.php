<script>
    $(document).ready(function(){
        $('.datepicker').datepicker();
        $( ".datepicker").datepicker( "option", "dateFormat", "yy-mm-dd" );

        $.ajax({
            url:'api/member/proses.php',
            data:{mode:'get'},
            dataType:'json',
            type:'POST',
            success:function(res){
                let option ="";
                for(let i=0; i<res.length; i++){
                    option +="<option value='"+res[i].nim+"'>"+res[i].nama+"</option>"
                }
                $('#nama_peminjam').html(option);
            }
        });

        $.ajax({
            url:'api/buku/bukucontroller.php',
            data:{mod:'get'},
            dataType:'json',
            type:'POST',
            success:function(res){
                console.log(res);
                let option ="";
                for(let i=0; i<res.length; i++){
                    option +="<option value='"+res[i].id+"'>"+res[i].judul+"</option>"
                }
                $('#cmb_buku').html(option);
            }
        });


    });
    
</script>