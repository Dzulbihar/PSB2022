    //get Kelas Ruang
  $('#kelas').change(function(){
      var kabID = $(this).val();    
      if(kabID){
          $.ajax({
             type:"GET",
             // url:"{{url('getPelanggaranBentuk')}}?kabID="+kabID,
             url:"/getRuang?kabID="+kabID,
             dataType: 'JSON',
             success:function(res){               
              if(res){
                  $("#ruang").empty();
                  // $("#desa").empty();
                  $("#ruang").append('<option>--- Pilih Ruang ---</option>');
                  // $("#desa").append('<option>---Pilih Desa---</option>');
                  $.each(res,function(nama,kode){
                      $("#ruang").append('<option value="'+kode+'">'+kode+'</option>');
                  });
              }else{
                 $("#ruang").empty();
                 // $("#desa").empty();
              }
             }
          });
      }else{
          $("#ruang").empty();
          // $("#desa").empty();
      }      
     });