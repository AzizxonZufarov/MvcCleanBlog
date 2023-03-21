<?php
session_start();
?>

			<table border="1" width="500" height="200" >
				<thead>
					<tr align="center">
						<td >Comment Id</td>
						<td >Comment Author</td>
						<td >Comment Text</td>
						<td >Comment Status</td>
						<td >Confirm Comment</td>
						<td >DELETE Comment</td>
					</tr>
				</thead>

				<tbody>

<?

foreach($comments as $one){?>
					<tr align="center">
						<td >
							<h4><?=$one['id']?></h4>
						</td>
						<td >
							<h4><?=$one['author']?></h4>
						</td>
						<td >
							<h4><?=$one['text']?></h4>
						</td>
						<td style="font-size:0" ><?=$one['status']?></td>
						<td >
							<p ><a id="confirm" href="?view=confirmcomment&id=<?=$one['id']?>">Confirm</a></p>
						</td>
						<td >
							<p ><a href="?view=dellcomment&id=<?=$one['id']?>">Delete</a></p>
						</td>
					</tr>
				<? }?>
				</tbody>
			</table>

			<script>

			      $("td").each(function(){
							if($(this).text() == "0"){
								$(this).css("background-color", "red");
							}
			        if($(this).text() == "1"){
			          $(this).css("background-color", "green");
			        }

			      })

			</script>
