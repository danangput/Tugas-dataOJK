<?php
$data=file_get_contents ('https://ojk-invest-api.vercel.app/api/illegals');
$ojk=json_decode($data);

//echo "<pre>"; print_r($data_ojk->list_data);

$table = "<h1><center>Data OJK</center></h1>";
$table .= "<table border = 1>";
$table .= "<tr><td>No</td>
				<td>NAMA PT</td>
				<td>ALAMAT</td>
				<td>Type</td>
                <td>Date</td>";

for ($i = 0; $i <count($ojk->data->illegals); $i++){
	$no = $i+1;
	$table .= "<tr>
				<td>{$no}</td>
				<td>{$ojk->data->illegals[$i]->name}</td>
				<td>{$ojk->data->illegals[$i]->address}</td>
				<td>{$ojk->data->illegals[$i]->type}</td>
                <td>{$ojk->data->illegals[$i]->inputDate}</td>
				</tr>";
}
$table .="</table>";
echo $table;

?>