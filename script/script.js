// AJAX CHECKING NGUONDEN AVAILABLE
$(document).ready(function(){
    $(".onhapnguon").keyup(function(){
        var dulieu = $(".onhapnguon").val();
        $.get('exe/ajax/checknguonden.php',{dulieu:dulieu},function(data){
            if(data == 1){
                $('.showerr').html('<br><div class="alert alert-danger"><b>Nguồn đến này đã tồn tại, vui lòng nhập tên khác</div></b>');
                $('.themnguonbut').prop("disabled",true);
            }
            else{
                $('.showerr').html('<br><div class="alert alert-info"><b>Có thể tạo nguồn đến này, nhấn nút Thêm để Thêm nguồn đến</div></b>');
                $('.themnguonbut').prop("disabled",false);
            }
        });
    });
});
// AJAX CHECKING NGUONDEN AND EDIT NGUONDEN
$(document).ready(function(){
    $('.suanguonden').click(function(){
        var id = $(this).data('id');
        $.get('exe/ajax/getnguonden.php',{id:id},function(data){
            console.log(data);
            var x = JSON.parse(data);
            $('.osuaten').val(x.nguonden);
            $('.oid').val(x.id);
            $('.ktbut').prop("disabled",false);
            if($('.dybut').prop("disabled",false)){
                $('.dybut').prop("disabled",true)
            }
            $('.showmessage').css({'margin-top':'-50px'});
            $('.showmessage').html('');
            });
        });
    $('.ktbut').click(function(){
        var name = $('.osuaten').val();
        var id = $('.oid').val();
        $.get('exe/ajax/checknguonden2.php',{name:name,id:id},function(data){
            if(data == 0){
                $('.showmessage').css({'margin-top':'-70px'});
                $('.showmessage').html('<br><div class="alert alert-success"><b>Có thể dùng tên nguồn đến này</div></b>');
                $('.dybut').prop("disabled",false);
            }
            if(data == 1){
                $('.showmessage').css({'margin-top':'-70px'});
                $('.showmessage').html('<br><div class="alert alert-danger"><b>Tên nguồn đến này đã tồn tại, vui lòng kiểm tra</div></b>');
            }
            if(data == 2){
                $('.showmessage').css({'margin-top':'-70px'});
                $('.showmessage').html('<br><div class="alert alert-info"><b>Tên mới trùng với tên cũ</div></b>');
            }
        });
    });
    $('.dybut').click(function(){
        var name = $('.osuaten').val();
        var id = $('.oid').val();
        $.get('exe/ajax/updatenguonden.php',{id:id,name:name},function(data){
            if(data == 1){
            $('.showmessage').css({'margin-top':'-70px'});
            $('.showmessage').html('<br><div class="alert alert-warning"><b>Đã thay đổi tên nguồn đến, trang tải lại trong 2s</div></b>');
            setTimeout(function(){
                location.reload();
            },2000);
            }
        });
    });
});