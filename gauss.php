
 
<?php
    $filas = $_POST['Matriz']['filas'];
    $columnas = $_POST['Matriz']['columnas'];
?>
 
<form action="gaussiana.php" method="post">
	<table>
    <?php for($i = 1; $i <= $filas; $i++ ) { ?>
		<tr>
	    <?php for($j = 1; $j <= $columnas; $j++ ) { ?>
		    <td>
			<input type="text" name="A[<?php echo $i ?>][<?php echo $j ?>]"/>
		    </td>
	    <?php } ?>
		</tr>
    <?php } ?>
		<tr>
			<td colspan="<?php echo $columnas ?>">
				<p><input type="submit" class="submit" value=" Resolver matriz"/></p>
			</td>
		</tr>
	</table>
	<input type="hidden" name="filas" value="<?php echo $filas ?>"/>
	<input type="hidden" name="columnas" value="<?php echo $columnas ?>"/>
</form>