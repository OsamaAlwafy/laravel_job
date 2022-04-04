
$(document).ready(function(){
var inputDatSearch=$("#input-search");
var nameJobs=$(".name-job");
var rsearch=$("#search-result");
var flag=0; 

$("#serach-btn").click(function(){
    var input=inputDatSearch.val();
    console.log(nameJobs.text(function(index ,content){
        content=$.trim(content);
      

      
       
        if(input==content)
        {   console.log($(this));
            
            rsearch.append($(this).closest(".parent"));
            $("#city-select").prop('disabled', false);
           
            flag=1;

        }
        

        
    }));
    if(flag==1)
  {
      $("#all-job").hide();
  }
  });

  $("#city-select").change(function(){
    var conceptName = $('#city-select').val();
    
    var hold=[];
    var i=0;
    $("#search-result").find(".name-city").text(function(index,content){
        content=$.trim(content);
        if(content==conceptName)
        {
            console.log("yes"+$(this).closest(".parent"));
            hold[i]=$(this).parents(".parent");
            i++;
        }

       
    });
    console.log(hold);
    
    $("#search-result").empty();
    if(i>0)
    { alert("yse2");
        $("#search-result").append(hold);
    }
  
});
});