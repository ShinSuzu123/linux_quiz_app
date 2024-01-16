<?php
(データベースへの接続なので省略)
//出題する色を表示
foreach ($dbh->query('select * from kanyokyoka where id=1') as $row){
         }
echo '<div style="width:300px; height:200px; background-color:',$row['color'],'"></div><br>';
//出題する色の選択肢を入れ替える
$question = array();
$question = array($row['name'],$row['other1'],$row['other2'],$row['other3']);
shuffle($question);
?>
<form method="POST">
   <?php foreach($question as $value){ ?>
   <input type="radio" name="question" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer" value="<?php echo $answer ?>">
</form><br>
<?php
echo '<div style="width:300px; height:200px; background-color:',$row['color'],'"></div><br>の正解は';
echo $row['name'];
echo '<br><br>';
?>
<form method="POST"><input type="submit" value="次の問題へ"></p>
</form>