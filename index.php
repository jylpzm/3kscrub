<?php
	require_once('layout/header.php'); 
	?>

<div text align="center">Unit of Competency/Module Title</div>

<table cellspacing="0px" cellpadding="5px">
	<tbody>
		<tr>
			<td height="50px" width="170px" text align="center" rowspan="3">NAME</td>

		</tr>
		<tr>
			
			<td text align="center" colspan="6">Basic</td>
			<td text align="center" colspan="2">Common</td>
			<td text align="center" colspan="4">Core</td>
			
		</tr>
		<tr>
			<td>S1</td>
			<td>S2</td>
			<td>S3</td>
			<td>S4</td>
			<td>S5</td>
			<td>S6</td>
			<td>S7</td>
			<td>S8</td>
			<td>S9</td>
			<td>S10</td>
			<td>S11</td>
			<td>S12</td>

		</tr>

		<?php
			for($row = 1; $row<=12	;$row++){
		?>
			 <tr>
			 	<td><?php echo $row ?></td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 	<td> </td>
			 </tr>
		<?php
			}
		?>




		</tbody>
	
</table>

<?php
	require_once('layout/footer.php'); 
?>