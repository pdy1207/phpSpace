//배열 

<?php
    function get_members(){
    	return ['egoing','k8805','sorialgi'];
    }
    echo get_members()[1]; 
    //php 5.4이후 버전에따라 안될수도있음!!
 	출력 결과 : 'k8805';
?>
//#2
<?php
function get_members(){
		return ['egoing','k8805','sorialgi'];
}
	
$members = get_members();
	
for($i = 0; $i < count($members); $i++){
		echo ucfirst($members[$i].'<br/>');
	ucfirst ?? 출력하게 되면 첫번째 글자가 대문자로 변환된다
	출력결과 : Egoing K8805 Sorialgi
}
?>

==================외울필요는 없지만 잘 알아두자.

배열에 추가하기 -> push

<?php 
	$li = ['a', 'b', 'c', 'd', 'e'];
	array_push($li, 'f');
	var_dump($li);
?>

시작점에 추가하기 -> unshift
	array_unshift($li, 'z');

첫번째 배열 삭제하기 -> shift
	array_shift($li);

가장 끝 배열 삭제하기-> pop
	array_pop($li);

배열 정렬하기 -> sort
	sort($li);

배열 반대 정렬하기 -> rsort
	rsort($li);

php도 따로 숫자나 문자를 구분하지 않는다.
