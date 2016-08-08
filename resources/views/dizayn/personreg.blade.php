@extends('layouts.dizayn')

@section('basliq')
<h2>Uğurlar</h2>
@endsection


@section('content')

<script type="text/javascript">
$(document).ready(function(){
	var maxField = 10; //Input fields increment limitation
	var addButton = $('.add_button'); //Add button selector
	var wrapper = $('.field_wrapper'); //Input field wrapper
	var fieldHTML = '<div><input id="inp"  type="text" name="field_name[]" value="" placeholder="Ad" /><input  id="inp"  placeholder="Soyad" type="text" name="field_name[]" value=""/><input id="inp"  placeholder="Ata adı	" type="text" name="field_name[]" value=""/><input id="inp"  type="date" name="field_name[]" value=""/><input id="inp"  placeholder="Şəxsiyyət Vəsiqəsinin nömrəsi" type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="/dizayn/img/remove-icon.png"/></a></div>'; //New input field html
	var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove();
		 //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<style type="text/css">
input{
	margin-left:10px;
}
input[type="submit"]{ width: 40%;}
input[type="date"]{ width: 40%;height:40px; vertical-align:top;}
#inp{height:40px; vertical-align:top; width:40%;}
.field_wrapper div{ margin-bottom:10px;}
.add_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
.remove_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
</style>


<form name="codexworld_frm" action="" method="post">
<div class="field_wrapper">
	<div>
    	<input id="inp" placeholder="Ad" type="text" name="field_name[]" value=""/><input id="inp" placeholder="Soyad" type="text" name="field_name[]" value=""/><input id="inp" placeholder="Ata adı	" type="text" name="field_name[]" value=""/><input id="inp" type="date" name="field_name[]" value=""/> <input id="inp" placeholder="Şəxsiyyət Vəsiqəsinin nömrəsi" type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="add_button" title="Add field"><img src="/dizayn/img/add-icon.png"/></a>

    </div>

</div>
<input type="submit" name="submit" value="Ödəmə"/>
</form>


@stop
