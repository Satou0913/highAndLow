<?php
//array関数を使ってトランプの画像名を配列で作成
$cards=array(
    "<img src='../cards/Jk.png'>","<img src='../cards/01.png'>","<img src='../cards/02.png'>",
    "<img src='../cards/03.png'>","<img src='../cards/04.png'>","<img src='../cards/05.png'>",
    "<img src='../cards/06.png'>","<img src='../cards/07.png'>","<img src='../cards/08.png'>",
    "<img src='../cards/09.png'>","<img src='../cards/10.png'>","<img src='../cards/11.png'>",
    "<img src='../cards/12.png'>","<img src='../cards/13.png'>");
$num=mt_rand(0,13);
$leftCard=$cards[$num];
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

		.choice{
		     margin-top: 10px;
		}

		.decision{
		     margin-top: 10px;
		}
		</style>
	</head>

	<body>
		<div class="title">
			 High＆Lowゲーム
		</div>

			<?php
		      print'<hr>';
		    ?>

		<form action="highAndLowS07.php" method="post">
			<?php
		      echo"$leftCard";
		     ?>
		     &nbsp;&nbsp;&nbsp;&nbsp;
		    <?php
		      echo"<img src='../cards/bg.png'>";
	        ?><br>

	    <div class="choice">
	    <input type="radio" name="select" value="High">High &nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio" name="select" value="Low">Low<br>
	    </div>

	    <div class="decision">
	    <input type="hidden" name="leftCard" value="<?=$num?>">
	    <input type="submit" value="決定">
	    </div>

		</form>
	</body>
</html>