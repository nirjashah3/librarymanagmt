<html>
<? ob_start(); ?>
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.simple-dtpicker.js"></script>
	<link type="text/css" href="jquery.simple-dtpicker.css" rel="stylesheet" />
	
	<style type="text/css">
		body { background-color: #fefefe; padding-left: 2%; padding-bottom: 100px; color: #101010; }
		footer{ font-size:small;position:fixed;right:5px;bottom:5px; }
		a:link, a:visited  { color: #0000ee; }
		pre{ background-color: #eeeeee; margin-left: 1%; margin-right: 2%; padding: 2% 2% 2% 5%; }
		p { font-size: 0.9rem; }
		ul { font-size: 0.9rem; }
		hr { border: 2px solid #eeeeee; margin: 2% 0% 2% -3%; }
		h3 { border-bottom: 2px solid #eeeeee; margin: 2rem 0 2rem -1%; padding-left: 1%; padding-bottom: 0.1em; }
		h4 { border-bottom: 1px solid #eeeeee; margin-top: 2rem; margin-left: -1%; padding-left: 1%; padding-bottom: 0.1em; }
	</style>
	
	
</head>
<body>
	<img src="syn-logo-withTagLine.png" width="283" height="56"/>
	
	<?php	
		$id = $_GET['id']; 
		$nm = $_GET['bnm'];
		$author = $_GET['author'];
		$pub = $_GET['pub'];
		$ito = $_GET['ito'];
		$idt = $_GET['idt'];
		?>
	<center><h2><b>Return Form</b></h2></center>
	<form action = "return.php" method ="get">
		<hr>
		<br><br>
		<table align="center">
			<tr>
				<th>Book ID</th>
				<td><input type="text" name="bid" value =" <?php echo $id; ?> ">
			</tr>
			<tr>
				<th>Book Name</th>
				<td><input type="text" id="bnm" value = "<?php echo $nm; ?> " >
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" id="author" value = "<?php echo $author; ?> ">
			</tr>
			<tr>
				<th>Publication</th>
				<td><input type="text" id="pub" value=" <?php echo $pub; ?> ">
			</tr>
			<tr>
				<th>Issued To</th>
				<td><input type="text" id="ito" value="<?php echo $ito; ?> ">
			</tr>
			<tr>
				<th>Issue Date </th>
				<td>
					<input type="text" name="idt" value="<?php echo $idt; ?>">
				</td>
			</tr>
			
			<tr>
				<th>Return</th>
				<td>
				<input type="text" name="return" value="">
				<script type="text/javascript">
						$(function(){
							$('*[name=return]').appendDtpicker({
								"inline": true,
								"dateOnly": true,
								"dateFormat": "YYYY-MM-DD"
							});
						});			
					</script>
				</td>
			</tr>
			<tr>
				<td colspan=4 align = "center"><input type="submit" name="submit"  value="Return">
			</tr>
		</table>
	</form>
<?php
	if(isset($_GET['submit'])){
		mysql_connect("localhost","nirjas","nirja");
		mysql_select_db("nirja");
		
		$itd = $_GET['return'];
		$bid = $_GET['bid'];
		$sql = mysql_query("UPDATE library_book SET Issued_Date = '0000-00-00',Issued_To = ' ',Book_Status = 'In Library',hr_action='Issue' where Book_ID=$bid");
?>
		<script type="text/javascript">
                window.location = "t.php";
        </script>
	 

<?php		
	
	}
?>
</body>
</html>
