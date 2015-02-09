<html>
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

		</body>
	<center><h2><b>Library</b></h2></center>
	<form action = "t.php" method ="get">
		<hr>
		<b> Book ID <input type = "text/number" name = "id"/>
		Book name  <input  type = "text" name = "term"/>
		Author <input type = "text" name = "author"/>
		Status <input type = "text" name = "status"/>
		Issued To <input type = "text" name = "issued"/></b>
		<input type="submit" value = "Search" name="submit"/>
	</form>

<?php
		if(isset($_GET['submit'])){
		$t= $_GET['term'];
		$i= (int)$_GET['id'];
		$a= $_GET['author'];
		$s= $_GET['status'];
		$x= $_GET['issued'];
	
		if(empty($_GET['term']))
			$t="null"; 
		if(empty($_GET['author']))
			$a="null";
		if(empty($_GET['status']))
		$s="null";
		if(empty($_GET['issued']))
		$x="null";


		mysql_connect("localhost","nirjas","nirja");
		mysql_select_db("nirja");
	
		$sql = mysql_query("select * from library_book where Book_Name like '%$t%' or Book_ID  = $i or Author like '%$a%'or Book_Status like '%$s%' or Issued_To like '%$x%' ");
		
		echo "<hr><br><br><table border=2 align=center><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>Issued To</th><th>Issued Date</th><th>Status</th><th>HR Action</th></tr>";
		while($ser = mysql_fetch_array($sql)){
			$bid =$ser['Book_ID'];
			$bnm = $ser['Book_Name'];
			$author =$ser['Author'];
			$pub = $ser['Publication'];
			$ito= $ser['Issued_To'];
			$idt = $ser['Issued_Date'];
			echo "<tr><td>";
			echo $bid;
			echo "</td><td>";
			echo $bnm;
			echo "</td><td>";
			echo $author;
			echo "</td><td>";
			echo $pub;
			echo "</td><td>";
			echo $ito;
			echo "</td><td>";
			echo $idt;
			echo "</td><td>";
			echo $ser['Book_Status'];
			echo "</td><td>";
			if($ser['Book_Status']=='Book Issued'){
				
					echo "<a href='return.php?id=$bid&bnm=$bnm&author=$author&pub=$pub&ito=$ito&idt=$idt'>Return";
					
			}
			else{
				
				echo "<a href='issue.php?id=$bid&bnm=$bnm&author=$author&pub=$pub'>Issue";
			}
			echo "</td></tr>";
			
			
			
		}
		echo "</table>";
	}
	
?>
</html>
