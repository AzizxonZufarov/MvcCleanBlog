<?php
session_start();
?>
			<table border="1" width="500" height="200" >
				<thead>
					<tr align="center">
						<td >Post Name</td>
						<td >EDIT Post</td>
						<td >DELETE Post</td>
					</tr>
				</thead>

				<tbody>

<?

foreach($posts as $one){?>
					<tr align="center">
						<td >
							<h6><?=$one['title']?></h6>
						</td>

						<td >
							<p ><a href="?view=editpost&id=<?=$one['id']?>">Edit</a></p>
						</td>
						<td >
							<p ><a href="?view=dellpost&id=<?=$one['id']?>">Delete</a></p>
						</td>
					</tr>
				<? }?>
				</tbody>
			</table>
            <h2><a href="?view=addpost">Add post</a> </h2>
