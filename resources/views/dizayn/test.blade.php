<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta name="csrf-token" content="<?php echo csrf_token() ?>"> -->
    <title></title>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
     </script>
    <script>
  		 function getSer(){
         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': '<?php echo csrf_token() ?>',
            }
        })
  				$.ajax({
  					 type:'POST',
  					 url:'/test',
  					data:{''},
  					 success:function(data){
  							$("#ser").html(data.ser);
  					 }
  				});
  		 }

  		 </script>
  </head>
  <body>
<div id="ser"></div>
<button type="button" name="button" onclick="getSer()">SADASD</button>
  </body>
</html>
