	<?
	echo '<br>';
	echo 'ARRAYS';
	echo '<br>';
	echo '<br>';
	echo' I. First task';
	echo '<br>';
	echo'array:';


	$arr = array(1, 2, 3, 7, 31, 4, 1, 8, 6);

	echo json_encode($arr);
	echo '<br>';
	echo '<br>';
//1) порахувати довжину масиву

	echo '1)порахувати довжину масиву';
	$arr_length=count($arr);
	echo '<br>';
	echo 'array length is:'.$arr_length;
	echo '<br>';
//2) перемістити перші 4 елементи масиву в кінець масиву
	echo'2) перемістити перші 4 елементи масиву в кінець масиву';
	echo '<br>';
	$arr2=array_slice($arr,0,4);
	//var_dump ($arr2);
	$arr3=array_merge(array_slice($arr,4,count($arr)), $arr2);
	//var_dump ($arr3);
	echo json_encode($arr3);												 //вивід лише елементів масиву, без додаткової інфо
	echo '<br>';
//3) знайти суму 4,5,6 елементів	
	echo'3) знайти суму 4,5,6 елементів';
	echo '<br>';
	$sum=array_sum(array_slice($arr,4,3));
	var_dump("sum=".$sum);
	echo '<br>';
	echo '<br>';

	echo'II. Second task';

	echo '<br>';
	echo '<br>';
	echo'first array:';
	echo '<br>';
			$firstArr = array('one' => 1,

			  'two' => 2,

			  'three' => 3,

			  'foure' => 5,

			  'five' => 12,
			  );
			  echo json_encode($firstArr);
echo '<br>';
echo '<br>';
			  

echo'second array:';
echo '<br>';

			$secondArr = array(

			  'one' => 1,

			  'seven' => 22,

			  'three' => 32,

			  'foure' => 5,

			  'five' => 13,

			  'six' => 37,

			);
echo json_encode($secondArr);
echo '<br>';
echo '<br>';

	//1)
	echo'1) знайти всі елементи, які відсутні в 1 масиві і присутні в 2';
	echo '<br>';
	$res1=array_diff_key($firstArr,$secondArr);
	var_dump ($res1);
	echo '<br>';
	//2)
	echo'2) знайти всі елементи, які відсутні в 2 масиві і присутні в 1';
	echo '<br>';
	$res2=array_diff_key($secondArr,$firstArr);
	var_dump($res2);
	echo '<br>';
	
	//3
	echo'3) знайти всі елементи(ключі) , значення яких співпадає)';
	echo '<br>';
	$res3=array_intersect_assoc($firstArr,$secondArr);
	var_dump($res3);
	echo '<br>';
	//4
	echo'4) знайти всі елементи(ключі) , значення яких відрізняється )';
	echo '<br>';
	$res4=array_diff_assoc($secondArr,$firstArr);
	var_dump($res4);
	echo '<br>';
	echo '<br>';



	echo'III. Third task';

	echo '<br>';
	echo '<br>';
	echo' array:';
	echo '<br>';
	
	$firstArr = array(

		'one' => 1,

		'two' => array(

		'one' => 1,

		'seven' => 22,

		'three' => 32,

		),

		'three' => array(

	'one' => 1,

	'two' => 2,

		),

		'foure' => 5,

		'five' =>array(

		'three' => 32,

		'foure' => 5,

		'five' => 12,

	),  

	);

	echo json_encode($firstArr);

	echo '<br>';
//	var_dump($firstArr );
	echo '<br>';
	echo '<br>';

// 1)
  echo' 1) отримати всі другі елементи вложених масивів';
  echo '<br>';
		foreach ($firstArr as $v1) {
			if(is_array($v1)){
				var_dump (array_slice($v1,1,1));
			}
		}
echo '<br>';

// 2) 	
	echo' 2) отримати загальну кількість елементів в масиві';	
	echo '<br>';
		var_dump(count($firstArr,COUNT_RECURSIVE));
		echo '<br>';

		
		
		function multisum($arr){
			$sum= array_sum($arr);
			foreach($arr as $el){
				$sum +=is_array($el)?multisum($el):0;
			}
			return $sum;
		}
	echo' 3) отримати суму всіх елементів масиву';	
		echo '<br>';
		var_dump(multisum($firstArr));
			echo '<br>';
		
		?>