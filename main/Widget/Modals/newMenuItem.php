<div class="modal hide fade" tab-index="-1"
  aria-hidden='true' style='display:none;'
role="dialog" id="exampleModal">
<div class="modal-dialog " role="document">
  <div class="modal-content " style="opacity: 0.9;  margin-top: 50px; height: 400px;">

   
      

      <button class="close top" style="padding: 10px; background-color: darkgreen" data-dismiss='modal'
        aria-label="close"
        >

        <span aria-hidden="true" class='text-light'>
          &times;
        </span>
          
        </button>

    

    
      <div class="modal-body bg-light text-dark bg-success" >

            
              <form  method="post" action="../main/menu.php" enctype="multipart/form-data" style="padding: 50px;">

                <input type="text" class="form-control outline-light text-dark" placeholder="Name" name='title' ><br>
                <input class='form-control' height='10' placeholder='Menu Description' name='desc'>

                <br>
                
                <select class='form-control' name='catId'>
                    <option value='1'>Snacks</option>
                    <option value='6'>Drinks</option>
                    <option value='2'>Dish</option>
                    <option value='5'>Dessert</option>
                </select><br>
                <input type='number' min='1' name='price' class='form-control' height='10' placeholder='Price'>

                <br>
                <input class='form-control' type='file' name='image'><br>

                <!-- <br>
                <input class='form-control' type='file'>

                <br>
                <input class='form-control' type='file'>

                <br> -->
                <button class="btn btn-success  rounded-5 text-center" name="add"><i class="fa fa-plus"></i> Add</button>
                
              </form>

      
      </div>
    </div>
  </div>  
</div>