$(document).ready(function(){

    $('#input').keyup(function(){

        var input=$(this).val();

        if(input !=""){

            $.ajax({

                url:"search.php",
                method:"post",
                data:{input:input},
                

                success:function(data){
                    $('#result').html(data);
                }
            })
            }
        else {
            $('#result').css("display","none");
        }    
    });
});
