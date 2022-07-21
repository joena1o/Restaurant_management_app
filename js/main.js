$(document).ready(function(){

  $(".loginbtn").on("click",function(){
  Validate();
  });

});



function Validate(){

var username = $(".username").val();
var password = $(".password").val();

$.ajax({

   url:"../restaurant/validate/validate.php",
   method:"post",
   data:{username:username,password:password},

   success:function(data){

      if(data !='Success'){

          $(".status").css("display","block");
          $(".status").html(data);


      }else{

       window.location.replace("../restaurant/main/dash.php");
       

      }
       

   }

})

}