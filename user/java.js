function check(form)
{
    var errors=[];
    if(form.search.value=="")
        {
            errors.push("please enter the keyword!");
        
        }
    
    
    if(errors.length>0)
        {
            var msg="ERRORS:\n\n";
            for(var i=0;i<errors.length;i++){
               msg+=errors[i]+"\n";
            }
         alert(msg);
         return false;
        }
}