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

        let no =0;
        $('#btn_add').click(function(){
            let idbuku = $('#cmb_buku').val();
            let jml     = $('#txt_jumlah').val();
            $.ajax({
                url:'api/buku/bukucontroller.php',
                data:{mod:'getById',id:idbuku},
                dataType:'json',
                type:'POST',
                success:function(res){
                    let html ="";
                    no++;
                    html += '<tr>';
                    html += '<td scope="row">'+no+'</td>';
                    html += '<td>'+res[0].judul+'</td>';
                    html += '<td>'+res[0].pengarang+'</td>';
                    html += '<td>'+jml+'</td>';
                    html += '<td><button class="btn btn-danger">Delete</button></td>';
                    html += '</tr>';

                    $('#DataItem').append(html);
                }
            });
            


        });

    });
    
</script>