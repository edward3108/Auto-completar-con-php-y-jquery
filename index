<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    Auto completar

  </title>

  <link rel="stylesheet" type="text/css" href="css/estilo_1.css">

  <link rel="stylesheet" type="text/css" href="css/estil.css">
  <!-- <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> -->
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>

	<script type="text/javascript">
$(function() {
    $(".buscar_usuarios").autocomplete({
        source: "alias.php",
        select: function(event, ui) {
            var storeid = val(ui.item.id);
            $.ajax({
               url: "alias.php",
               type: "GET",
               data: {term : storeid},
               dataType: "html",                               
               success: function(msg){
                            //Display html
                                $("#resultados").html(msg);
                           },
                           error: function (request, status, error) {
                                alert(request.responseText);
                            }
                         });
                    }
                });
            });
</script>
</head>
<body> 

	<div id="busqueda">
		<form method="post" action="">
			<input type="text" class="buscar_usuarios" name="buscar_usuarios">
		</form>
	</div>
	<div id="resultados">


	</div>


</body>
</html>
