    //get Kamar Gedung
  $('#gedung').change(function(){
      var kabID = $(this).val();    
      if(kabID){
          $.ajax({
             type:"GET",
             // url:"{{url('getPelanggaranBentuk')}}?kabID="+kabID,
             url:"/getKamar?kabID="+kabID,
             dataType: 'JSON',
             success:function(res){               
              if(res){
                  $("#kamar").empty();
                  // $("#desa").empty();
                  $("#kamar").append('<option>--- Pilih Kamar ---</option>');
                  // $("#desa").append('<option>---Pilih Desa---</option>');
                  $.each(res,function(nama,kode){
                      $("#kamar").append('<option value="'+kode+'">'+kode+'</option>');
                  });
              }else{
                 $("#kamar").empty();
                 // $("#desa").empty();
              }
             }
          });
      }else{
          $("#kamar").empty();
          // $("#desa").empty();
      }      
     });