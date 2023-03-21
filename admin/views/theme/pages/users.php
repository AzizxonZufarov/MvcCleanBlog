<?php
session_start();
?>
			<table border="1" width="500" height="200" >
				<thead>
					<tr align="center">
						<td >User Name</td>
						<td >EDIT User</td>
						<td >DELETE User</td>
					</tr>
				</thead>

				<tbody>

<?

foreach($users as $one){?>
					<tr align="center">
						<td >
							<h4><?=$one['name']?></h4>
						</td>

						<td >
							<p ><a href="?view=edituser&id=<?=$one['id']?>">Edit</a></p>
						</td>
						<td >
							<p ><a href="?view=delluser&id=<?=$one['id']?>">Delete</a></p>
						</td>
					</tr>
				<? }?>
				</tbody>
			</table>
            <h2><a href="?view=adduser">Add User</a> </h2>
