// AJAX CHECKING MSK AVAILABLE
$(document).ready(function(){
    $(".onhapmasokham").keyup(function(){
        var dulieu = $(".onhapmasokham").val();
        $.get('exe/ajax/checkmasokham.php',{dulieu:dulieu},function(data){
            if(data == 1){
                $('.showerr').html('<br><div class="alert alert-danger"><b>Mã số khám này đã tồn tại, vui lòng nhập tên khác</div></b>');
                $('.themnguonbut').prop("disabled",true);
            }
            else{
                $('.showerr').html('<br><div class="alert alert-info"><b>Có thể tạo mã số khám này, nhấn nút Thêm để Thêm</div></b>');
                $('.themnguonbut').prop("disabled",false);
            }
        });
    });
});

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
                $('.osuaten').focus(function(){
                    $('.dybut').prop("disabled",true);
                });
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


// AJAX CHECKING MSK AND EDIT MSK
$(document).ready(function(){
    $('.suamasokham').click(function(){
        var id = $(this).data('id');
        $.get('exe/ajax/getmasokham.php',{id:id},function(data){
            console.log(data);
            var x = JSON.parse(data);
            $('.osuate').val(x.msk);
            $('.oid').val(x.id);
            $('.onguondensl').val(x.idnguonden);
            $('.obangnhapsl').val(x.idbangnhap);
            $('.onguondensl').removeAttr('disabled');
            $('.obangnhapsl').removeAttr('disabled');
            $('.ktbutz').prop("disabled",false);
            if($('.dybutz').prop("disabled",false)){
                $('.dybutz').prop("disabled",true)
            }
            $('.showmessagez').css({'margin-top':'-20px'});
            $('.showmessagez').html('');
            });
        });
    $('.ktbutz').click(function(){
        var name = $('.osuate').val();
        var id = $('.oid').val();
        $.get('exe/ajax/checkmasokham2.php',{name:name,id:id},function(data){
            if(data == 0){
                $('.showmessagez').css({'margin-top':'-45px'});
                $('.showmessagez').html('<br><div class="alert alert-success" style=""><b>Có thể dùng mã số khám này này</div></b>');
                $('.dybutz').prop("disabled",false);
                $('.osuate').focus(function(){
                    $('.dybutz').prop("disabled",true);
                });
            }
            if(data == 1){
                $('.showmessagez').css({'margin-top':'-45px'});
                $('.showmessagez').html('<br><div class="alert alert-danger"><b>Tên nguồn đến này đã tồn tại, vui lòng kiểm tra</div></b>');
            }
            if(data == 2){
                $('.showmessagez').css({'margin-top':'-45px'});
                $('.showmessagez').html('<br><div class="alert alert-info"><b>Tên mới trùng với tên cũ</div></b>');
                $('.dybutz').prop("disabled",false);
            }
        });
    });
    $('.dybutz').click(function(){
        var name = $('.osuate').val();
        var id = $('.oid').val();
        var idbangnhap = $('.obangnhapsl').val();
        var idnguonden = $('.onguondensl').val();
        console.log(idnguonden+"-----"+idbangnhap+"--------"+name+"--------"+id);
        $.get('exe/ajax/updatemasokham.php',{id:id,name:name,idbangnhap:idbangnhap,idnguonden:idnguonden},function(data){
            if(data == 1){
            $('.showmessagez').css({'margin-top':'-20px'});
            $('.showmessagez').html('<div class="alert alert-warning"><b>Đã thay đổi mã số khám, trang tải lại trong 2s</div></b>');
            setTimeout(function(){
                location.reload();
            },2000);
            }
        });
    });
});


// DATATABLE
jQuery.fn.dataTable.Api.register( 'sum()', function ( ) {
    return this.flatten().reduce( function ( a, b ) {
        if ( typeof a === 'string' ) {
            a = a.replace(/[^\d.-]/g, '') * 1;
        }
        if ( typeof b === 'string' ) {
            b = b.replace(/[^\d.-]/g, '') * 1;
        }
 
        return a + b;
    }, 0 );
} );

$(document).ready(function() {
    $('#kooltable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

} );




// GET URL ATTRIBUTR
$(document).ready(function(){
    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
var day = getUrlParameter('day');

});
