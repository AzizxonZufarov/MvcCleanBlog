
        <div id="templatemo_main">


<h2 align="center">Добро пожаловать, <?=$user['login']?></h2>


<table border="1" >

			<tr  align="center" width="500" height="50">
					<td align="center">Name</td>
					<td align="center">Login</td>
					<td align="center">Password</td>
					<td align="center">Email</td>

          <td rowspan="2" width="100" > <a href="?view=editcab">edit</a></td>
          <td rowspan="2" width="100">  <a href="?view=deletecab">delete</a></td>
          <td rowspan="2" width="100">  <a href="?view=logout">Exit</a></td>
			</tr>
			<tr  align="center" width="500" height="50">
					<td align="center"><?=$user['name']?></td>
					<td align="center"><?=$user['login']?></td>
					<td align="center"><?=$user['password']?></td>
					<td align="center"><?=$user['email']?></td>


			</tr>
</table>
<br/>
<?

if($user['isAdmin'] =='1'){?>
	<a  href="admin/">Панель Администратора</a>
	<?}?>
        </div> <!-- end of main -->
<script>

  history.pushState(null, null, null);
  window.addEventListener('popstate', function () {
      history.pushState(null, null, null);
  });
</script>
