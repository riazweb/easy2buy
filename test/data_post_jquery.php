<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>

$(document).ready(function(){
	
	//alert('ready');
//	$('input[type=text]').val('riazahmed');
//	$('.req,.man').val('riazahmed');

$('#submit3').click(function getdetails(){
	//var inpute = $('input[type=text]').val();
	//alert(inpute);
	
	$("input[type=text],.man").each(function(){
 		var input = $(this); // This is the jquery object of the input, do what you will
		
		alert('Type: ' + input.attr('class'));
		
		// + 'Name: ' + input.attr('name') + 'Value: ' + input.val());
		//if($(this).val()==""){
		//	alert('invalid');
		//	}
	
	});
	
	
});
$('#submit2').click(function getdetails(){
	
	var name = $('#name').val();
	
	if(name == '')
	{
		$('#iderror').html('invalid');
	}
	else
	{
		$('#iderror').html('');	
	}
	
	
	
	console.log('click submit2 buttton....');
	
	
	});
	
	
	});
	
	



function getdetails(str){
	 var name = $('#name').val();
//	 			document.getElementById('name').value;
	 var rno = $('#rno').val();
		 
		 $.ajax({
		 type: "POST",
		 url: "details.php?func=ctryFilter",
		 data: {ctryname:str}
		 }).done(function( result ) {


//			 $("#msg").html( rno +" is "+result );
		 }).fail(function() {
    		alert( "error" );
  		});
}



function getdetails(){
	 var name = $('#name').val();
//	 			document.getElementById('name').value;
	 var rno = $('#rno').val();
		 
		 $.ajax({
		 type: "POST",
		 url: "details.php",
		 data: {fname:name, id:rno}
		 }).done(function( result ) {
			 console.log('res :>  '+result);
			 //alert('res ::> ' +result);
			 
			 var res=result.substring(0,result.length-1);
			  //alert('res ::> ' +res);
			  var sptArray=res.split(',');
			 
			 $('#email1').val(sptArray[0]);
			 $('#email2').val(sptArray[1]);
			 
			 //$('#email').val(result);
			 //alert($('#email').val());
			 
//			 alert('res:::: '+result);
//			 $("#msg").html( rno +" is "+result );
		 }).fail(function() {
    		alert( "error" );
  		});
}
</script>
</head>
<body>
<table>
<tr>
<td>Your Name:</td>
<td><input type="text" name="name" class="man" id="name" />
<label id="iderror"></label>
<td>
</tr>
<tr>
<td>Roll Number:</td>
<td><input type="text" name="rno" id="rno" /><td>
</tr>
<tr>
<td></td>
<td><input type="button" name="submit" id="submit" value="submit" onClick = "getdetails()" /></td>
</tr>
</table>
<input type="text" name="email1" class="req" id="email1" />
<input type="text" name="email2" class="req" id="email2" />

<input type="button" name="submit" id="submit2" value="submit"  />

<input type="button" name="submit" id="submit3" value="Check"  />

<div id="msg"></div>
</body>
</html>