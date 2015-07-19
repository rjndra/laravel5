$(document).ready(function() {
    
    var wrapper         = $(".form-js");          
    var add_button      = $(".add_field_button");   
   
    $(add_button).click(function(e){ 

        e.preventDefault();
                    
        $(wrapper).append('<div><input name="afile[]" type="file" class="form-group" required/><a href="#" class="remove_field"><i class="fa fa-times-circle" style="color:red"></a></div>'); 
  
    });
                
    $(wrapper).on("click",".remove_field", function(e){ 
         e.preventDefault(); 
         $(this).parent('div').remove(); 
    })

});