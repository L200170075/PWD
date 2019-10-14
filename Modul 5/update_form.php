		<?php
			$conn = mysqli_connect('localhost', 'root','','informatika');
			$nim = $_GET['NIM'];
			$cari = "select * from mahasiswa where NIM= '$nim'";
			$hasil_cari = mysqli_query($conn,$cari);
			$data = mysqli_fetch_array($hasil_cari);
			//membuat aktif radio button
			function active_radio_button($value,$input){
				$result = $value==$input? 'checked':'';
				return $result;
			}
			
			if($data > 0){
				
			
		?>
		
<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
		<body>
			<center>
				<h3>Update Data Mahasiswa :</h3>
					<table border='0' width='30%'>
					<form method='POST' action = 'update.php'>
						<tr>
							<td width='25%'>NIM</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='nim' size='10'value="<?php echo $data['NIM']?>"></td>
						</tr>
						<tr>
							<td width='25%'>Nama</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='nama' size='30'value="<?=$data['Nama']?>"></td>
						</tr>
						<tr>
							<td width='25%'>Kelas</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='radio' value='A' name='kelas'<?php echo active_radio_button('A', $data["Kelas"])?>>A
											<input type='radio' value='B' name='kelas'<?php echo active_radio_button('B', $data["Kelas"])?>>B
											<input type='radio' value='C' name='kelas'<?php echo active_radio_button('C', $data["Kelas"])?>>C
							</td>
						</tr>
						<tr>
							<td width='25%'>Alamat</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='alamat' size='40'value="<?=$data['Alamat']?>"></td>
						</tr>
					</table>
					<input type='submit' value='Update Data' name='submit'>
					</form>
				</center>
				<?php
				}
				?>
				
			</body>
		</html>	