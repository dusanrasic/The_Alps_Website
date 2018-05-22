<section id="seventh">

	<div class="content">
	<h1>Admin Panel</h1>
	<h2>List of users</h2>
	<form action="functions.php" method="POST">
	<table>
		<thead>
		<tr>
				<th>User_id</th>
				<th>User_name</th>
				<th>Password</th>
				<th>Email</th>
				<th>Function</th>
				<th>Operation</th>
			</tr>
		</thead>
		<tbody>
	<?php
		   $user_query="SELECT * FROM users u JOIN user_function uf ON u.id_user=uf.id_user JOIN function f ON f.id_function=uf.id_function";
			 $result_user=mysqli_query($konekcija , $user_query);
			 while($u=mysqli_fetch_array($result_user)){
				echo "<tr>
								    <td><input type='text' name='id' value='{$u['id_user']}' class='inpText' readonly></td>
								    <td><input type='text' name='name' value='{$u['user_name']}' class='inpText'></td>
								    <td><input type='text' name='pasword' value='{$u['password']}' class='inpText'></td>
								    <td><input type='text' name='mail' value='{$u['mail']}' class='inpText'></td>
								    <td><input type='text' name='fn' value='{$u['function_name']}' class='inpText' readonly></td>
										<td><input type='submit' name='userUpdate' value='Update' class='btnDelete'></td>
								  </tr>
								";
			 }
	 ?>
	 <tr>
		 <td colspan="5">
			 <input type="text" name="inpText" placeholder="Type id of user" class="inpText">
		 </td>
		 <td>
			 <input type="submit" name="btnDelete" value="DELETE" class="btnDelete">
		 </td>
	 </tr>
	 <tr>
		 <td colspan="2">
			 <input type="text" name="nickname" placeholder="Type user_name" class="inpText">
		 </td>
		 <td>
			 <input type="text" name="password" placeholder="Type password" class="inpText">
		 </td>
		 <td colspan="2">
			 <input type="text" name="email" placeholder="Type email" class="inpText">
		 </td>
		 <td>
			 <input type="submit" name="btnAdd" value="ADD" class="btnDelete">
		 </td>
	 </tr>
	 </tbody>
	 </table>
 </form>
 <h2>Comments</h2>
 <form action="functions.php" method="POST">
 <table>
 	<thead>
 		<tr>
 			<th>Comment Id</th>
 			<th>Comment text</th>
 			<th>Comment time</th>
 			<th>Comment user</th>
 			<th>Operations</th>
 		</tr>
 	</thead>
 	<tbody>
 	<tr>
 	<?php
 		$comm_query="SELECT * FROM comments";
 		$comm_result=mysqli_query($konekcija, $comm_query);
 		while($co=mysqli_fetch_array($comm_result)){
 		 echo "<tr>
 		 						<td><input type='text' name='comID' value='{$co['commentID']}' class='inpText' readonly></td>
 								<td><input type='text' name='comTxt' value='{$co['commentText']}' class='inpText' readonly></td>
 								<td><input type='text' name='comTime' value='{$co['commentTime']}' class='inpText' readonly></td>
 								<td><input type='text' name='comUser' value='{$co['userName']}' class='inpText' readonly></td>
 								<td><input type='submit' name='btnDeleteComment' value='DELETE' class='btnDelete'></td>
 							 </tr>
 						 ";
 		}?>
 	</tr>
 	</tbody>
 	</table>
 </form>
	<h2>Gallery</h2>
	<form method="POST" action="functions.php">
		<table>
			<thead>
				<tr>
						<th>Gallery ID</th>
						<th>Gallery Name</th>
						<th>Gallery Location</th>
						<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php
				$gal_query="SELECT * FROM gallery";
				$gal_result=mysqli_query($konekcija, $gal_query);
				while($ga=mysqli_fetch_array($gal_result)){
				 echo "<tr>
				 						<td><input type='text' name='gal_id' value='{$ga['galID']}' class='inpText' readonly></td>
										<td><input type='text' name='gal_name' value='{$ga['galName']}' class='inpText' readonly></td>
										<td><input type='text' name='gal_location' value='{$ga['galImg']}' class='inpText' readonly></td>
										<td><input type='submit' name='btnDeleteGallery' value='DELETE' class='btnDelete' readonly></td>
									 </tr>
								 ";
				}?>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name="galName" placeholder="Type name of image" class="inpText">
				</td>
				<td>
					<input type="text" name="galLoc" placeholder="Type image location" class="inpText">
				</td>
			<td >
				<input type="submit" name="btnUpdateGallery" value="ADD" class="btnDelete">
			</td>
		</tr>
			</tbody>
		</table>
	</form>
	<h2>About me section</h2>
	<form method="POST" action="functions.php">
		<table>
			<thead>
				<tr>
						<th>About Id</th>
						<th>AboutMe text</th>
						<th>Facebook link</th>
						<th>Instagram link</th>
						<th>Google plus link</th>
						<th>Outlook link</th>
						<th>Operation</th>
					</tr>
			</thead>
			<tbody>
				<tr>
				<?php
				 $about_me_query="SELECT * FROM aboutme";
						 $about_result=mysqli_query($konekcija, $about_me_query);
						 while($ar=mysqli_fetch_array($about_result)){
							echo "<td><input type='text' name='id' value='{$ar['aboutID']}' class='inpText' readonly></td>
							<td><textarea name='text' maxlength='500' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$ar['aboutText']}</textarea></td>
							<td><input type='text' name='fb' class='inpText' value='{$ar['aboutFB']}'></td>
							<td><input type='text' name='insta' class='inpText' value='{$ar['aboutInsta']}'></td>
							<td><input type='text' name='gplus' class='inpText' value='{$ar['aboutG']}'></td>
							<td><input type='text' name='out' class='inpText' value='{$ar['aboutOut']}'></td>
							<td><input type='submit' name='btnUpdateAbout' value='UPDATE' class='btnDelete'></td>
							";
						 } ?>
		</tr>
	</tbody>
	</table>
	</form>
	<h2>History section</h2>
	<form action="functions.php" method="POST">
		<table>
			<thead>
				<tr>
						<th>Paragraf Id </th>
						<th>Paragraf (h1)</th>
						<th>Paragraf #1</th>
						<th>Paragraf #2</th>
						<th>Paragraf #3</th>
						<th>Operation</th>
					</tr>
			</thead>
			<tbody>
				<tr>
				<?php
				 		$histo_query="SELECT * FROM history";
						 $histo_result=mysqli_query($konekcija, $histo_query);
						 while($h=mysqli_fetch_array($histo_result)){
							echo "<td><input type='text' name='id' class='inpText' value='{$h['hi_id']}' readonly></td>
							<td><input type='text' name='naslov' class='inpText' value='{$h['hi_naslov']}'></td>
							<td><textarea name='prvi' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$h['hi_prvi']}</textarea></td>
							<td><textarea name='drugi' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$h['hi_drugi']}</textarea></td>
							<td><textarea name='treci' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$h['hi_treci']}</textarea></td>
							";
						 } ?>
			<td>
				<input type="submit" name="btnUpdateHistory" value="UPDATE" class="btnDelete">
			</td>
		</tr>
			</tbody>
		</table>
	</form>
	<h2>Facts section</h2>
	<form action="functions.php" method="POST">
		<table>
			<thead>
				<tr>
						<th>Fact Id </th>
						<th>Fact #1</th>
						<th>Fact #1 (h2)</th>
						<th>Fact #2</th>
						<th>Fact #2 (h2)</th>
						<th>Fact #3</th>
						<th>Fact #3 (h2)</th>
						<th>Operation</th>
					</tr>
			</thead>
			<tbody>
				<tr>
				<?php
				 		$fact_query="SELECT * FROM facts";
						 $fact_result=mysqli_query($konekcija, $fact_query);
						 while($f=mysqli_fetch_array($fact_result)){
							echo "<td><input type='text' name='id' value='{$f['fact_id']}' class='inpText' readonly></td>
							<td><textarea name='prva' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$f['row_jedan']}</textarea></td>
							<td><input type='text' name='prvi' class='inpText' value='{$f['row_jedan_naslov']}'></td>
							<td><textarea name='druga' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$f['row_dva']}</textarea></td>
							<td><input type='text' name='drugi' class='inpText' value='{$f['row_dva_naslov']}'></td>
							<td><textarea name='treca' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$f['row_tri']}</textarea></td>
							<td><input type='text' name='treci' class='inpText' value='{$f['row_tri_naslov']}'></td>";
						 } ?>
			<td>
				<input type="submit" name="btnUpdateFacts" value="UPDATE" class="btnDelete">
			</td>
		</tr>
			</tbody>
		</table>
	</form>
</div>
</section>
