//Lokasi: public/wilayah.js
$('#country').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
           url:"/getMsKabupaten?kabID="+kabID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#kecamatan").empty();
                $("#state").append('<option>--- Pilih Kabupaten ---</option>');
                $("#kecamatan").append('<option>--- Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#state").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#state").empty();
               $("#kecamatan").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#kecamatan").empty();
    }      
   });
 
   $('#state').change(function(){
    var kecID = $(this).val();    
    if(kecID){
        $.ajax({
           type:"GET",
           url:"/getMsKecamatan?kecID="+kecID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kecamatan").empty();
                $("#kecamatan").append('<option>--- Pilih Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#kecamatan").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#kecamatan").empty();
            }
           }
        });
    }else{
        $("#kecamatan").empty();
    }      
   });
