
<a href="/displayUsers">User list</a>

<form method="post" action="addUser">
	<table>
		<tr>
			<td><label for="name">Name:</label></td>
			<td>
			<input id="name" type="text" name="name" value="<?= $name ?>">
			<?= $nameErr ?>
			</td>
		</tr>
		<tr>
			<td><label for="age">Age:</label></td>
			<td>
			<input id="age" type="text" name="age" value="<?= $age ?>">
			<?= $ageErr ?>
			</td>
		</tr>
		<tr>
		<input type="submit" name="userInfoSubmit">
		</tr>
	</table>
</form>

