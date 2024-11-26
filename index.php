

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style>
		body{
			font-style:Tahoma;
		}
		header{
			background-color: #7da453;
			color:white;
			height: 120px;
		}
		.left,.mid{
			width: 40%;
		}
		.right{
			width: 20%;
		}
		main{
			display:flex;
			flex-wrap:wrap;
			justify-content:space-between;

		}
		
		.block{
			background-color: #aed581;
			width: 200px;
			height: 100px;
			margin:7px;
			border: 1px solid #7da453;
			text-align:center;
		}
	</style>
</head>
<body>
	<header>
		<section class="left">Organizer Sierpień</section>
		<section class="mid"><form action="#" method="post"><label for="wyd">Zapisz wydarzenie <input type="text" name="wyd"></label><button type="submit">OK</button></form>
		
		</section>
		<section class="right"><img src="logo2.png" alt="sierpień"></section>
	</header>
	<main>
		<?php
        	$conn=mysqli_connect('localhost','root','','kalendarz');
		
            if(isset($_POST['wyd'])){
           
            $wyd=$_POST['wyd'];
            $query=mysqli_query($conn,"update zadania set wpis='$wyd' where dataZadania='2020-08-09';");
            }
            	$query=mysqli_query($conn,"SELECT dataZadania,wpis FROM `zadania` where miesiac='sierpien';");
		    while($blok=mysqli_fetch_row($query)){
			echo "<section class='block'> <h5>$blok[0]</h5><p>$blok[1]</p></section>";}
            mysqli_close($conn);
		?>
	</main>
    
</body>
</html>
