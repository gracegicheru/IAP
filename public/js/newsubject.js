$('#submitButton').click(function(e){
    e.preventDefault();
    // let form = $("#productsForm");
    console.log("this");

    $.ajax({
        type:'POST',
        url:'/subjects',
          headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        data:{
            'sub1':$('input[id=sub1]').val(),
            'sub2':$('input[id=sub2]').val(),
            'sub3':$('input[id=sub3]').val(),
            'sub4':$('input[id=sub4]').val(),
            'sub5':$('input[id=sub5]').val(),
            'sub6':$('input[id=sub6]').val(),
            'sub7':$('input[id=sub7]').val(),


                    },
        dataType: "json",
        beforeSend: function(){

        },
        success: function(data) {
            
            
            if(data.status=='ok') {

      
                $('#sub1').val('');
                $('#sub2').val('');
                $('#sub3').val('');
                $('#sub4').val('');
                $('#sub5').val('');
                $('#sub6').val('');
                $('#sub7').val('');


                

                window.location.reload(true);
   }

            

        },
        error:function(xhr, errmsg, err){
            console.log('error', xhr);
            console.log('status', errmsg);
            console.log('err', err);
        //      $.each(xhr.errors, function(key, val){
        //                     console.log( "subject",key, val);
        //                     $('.alert-danger').show();
        //                     $('.alert-danger').append('<p>'+value+'</p>');
        //                 });

        }



    });
});