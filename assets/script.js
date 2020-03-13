$('#add').on('submit', function(){
var that = $(this),
contents = serialize();

$.ajax({
    url: 'add.php',
    dataType:'json',
     data :contents,
    success: function(data){
       if(data.success){
         alert('the result is ' + data.result);
       }
    }
});

});