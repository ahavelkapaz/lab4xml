<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php


$preguntas=simplexml_load_file('preguntas.xml');

echo '<table class="table table-bordered"><tr><th>Pregunta</th> <th>Complejidad</th><th>Tematica</th></td><tr>';
foreach ($preguntas->assessmentItem as $pregunta) {//$preguntas->xpath('//assessmentItem');
	echo '<tr><td>';
   echo $pregunta->itemBody->p, '</td> <td>  ', $pregunta['complexity'],'</td><td>',$pregunta['subject'],'</td>';
	echo '</tr>';
   }
echo '</table>';

	echo "<br><br><a href='insertarPregunta.php'>Inserta más preguntas</a><br>";
	echo "<br><a href='layout.php'>...o vuelve a la página principal</a>";
?>
