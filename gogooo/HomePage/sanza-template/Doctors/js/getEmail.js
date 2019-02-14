$("#ID").on("change",function(){
    var FName = $("#firstname").val();
    var ID = $("#ID").val();
    
    if(ID != "")
        $("#email").val(FName+ID+"@miuegypt.edu.eg");
});