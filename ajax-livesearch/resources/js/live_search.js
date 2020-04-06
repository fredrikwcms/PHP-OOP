$(document).ready(function(){

    fetch_posts();
   
    function fetch_posts(query = '')
    {
     $.ajax({
      url:"{{ route('search') }}",
      method:'GET',
      data:{query:query},
      dataType:'json',
      success:function(data)
      {
       console.log(data);
      }
     })
    }
   
    $(document).on('keyup', '#search', function(){
     var query = $(this).val();
     fetch_posts(query);
    });
   });