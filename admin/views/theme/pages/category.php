<?php
session_start();
?>
			<table border="1" width="500" height="200" >
				<thead>
					<tr align="center">
						<td >Category Name</td>
						<td >EDIT CATEGORY</td>
						<td >DELETE CATEGORY</td>
					</tr>
				</thead>

				<tbody>

<?

foreach($categories as $item){?>
					<tr align="center">
						<td >
							<h4><?=$item['title']?></h4>
						</td>

						<td >
							<p ><a href="?view=editcat&id=<?=$item['id']?>">Edit</a></p>
						</td>
						<td >
							<p ><a href="?view=dellcat&id=<?=$item['id']?>">Delete</a></p>
						</td>
					</tr>
				<? }?>
				</tbody>
			</table>
            <h2><a href="?view=addcat">Add category</a> </h2>
