<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
	$(document).ready(function() {
        $("select[name='country']").bind("change", function (){
			$("select[name='city']").empty();
			$.get("countryCheck.php", {country:$("select[name='country']").val()}, function (data){
				data = JSON.parse(data);
				for (var id in data){
					$("select[name='city']").append($("<option value='" + id +"'>" + data[id] + "</option>"));
				};
			});	
		});
    });
</script>
</head>

<body>
	<label>Укажите страну</label>
    <select name="country">
    	<option value="0" selected="selected"></option>
        <option value="1">США</option>
        <option value="2">Франция</option>
    </select>
    <label>Города</label>
    <select name="city">
		<option value="0"></option>    
    </select>
</body>
</html>