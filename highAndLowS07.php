<?php
//array関数を使ってトランプの画像名を配列で作成
$cards=array(
    "<img src='../cards/Jk.png'>","<img src='../cards/01.png'>","<img src='../cards/02.png'>",
    "<img src='../cards/03.png'>","<img src='../cards/04.png'>","<img src='../cards/05.png'>",
    "<img src='../cards/06.png'>","<img src='../cards/07.png'>","<img src='../cards/08.png'>",
    "<img src='../cards/09.png'>","<img src='../cards/10.png'>","<img src='../cards/11.png'>",
    "<img src='../cards/12.png'>", "<img src='../cards/13.png'>");
$num2=$_POST['leftCard'];
$num3=mt_rand(1,13);
$leftCard=$cards[$num2];
$rightCard=$cards[$num3];
$select=$_POST['select'];
$result=$select
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<style>
		body{
		text-align: center;
		}

		.title{
        	font-size: xx-large;
        	text-align: center;
		}
        .select{
		     margin-top: 10px;
		}

		.link{
		     margin-top: 10px;
		}

		.result{
		     margin-top: 10px;
		}
		</style>
	</head>

	<body>
		<div class="title">
			 High＆Lowゲーム
		</div>

		<?php print'<hr>';?>

		    <?php
		        echo"$leftCard";
		    ?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<?php
			    echo"$rightCard";
            ?><br>

         <div class="select">
            <?php
			   //echo"「$select」を選択しました。";
			    echo"「","$select","」を選択しました。";
			?><br>
		</div>

		<div class="result">
			<?php
			    if($num2 < $num3){ $result="High";}
			    elseif($num2 > $num3){$result="Low";}
			    else{$result=$select;}

			    if($select == $result){echo"You Win!";}
			    else{echo"You Lose...";}
			?><br>
		</div>

		<div class="link">
			<a href="highandLowS03.php">もう一度挑戦</a>
		</div>
	</body>
</html>