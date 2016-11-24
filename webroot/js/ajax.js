$(document).ready(function(){
    $("document").on('click','#pagination_list_container .pagination li a', function(e){
      e.preventDefault();
      var link= $(this).attr('href');
      if(link!="")
      {
            $("#pagination_list_container").load(link+ "#pagination_list_container", function(){
                console.log("data loaded");
            })
      }
      return false;
    });
});