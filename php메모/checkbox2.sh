id는 유일해야 합니다.
<input id="chk" class="chk" type="checkbox" name="url_num" value="<?=$list_row['no']?>">
$list_row['no']를 이용하거나 순차번호 등을 이용하면 됩니다.

‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥

아래의 경우 끝 쪽에 exit; 붙여줘야 합니다.
        echo "<script>
        alert('로그인하십시오.');
        </script>";
        echo "<script>
        document.location.href = 'index.php';
        </script>";
        exit; // ★ 그래야 그 아래쪽의 코드가 수행되지 않습니다.

코드1
if ( 0 ) { // 조건이 거짓, 예를 들어 미로그인
    코드2
} else {
    코드3
}
코드4
→ 코드1 > 코드3 > 코드4 실행됩니다.

코드1
if ( 0 ) {
    코드2
} else {
    코드3
    exit;
}
코드4
→ 코드1 > 코드3 끝.

‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥‥

보류와 삭제가 문제죠?

<button type="button" id="choice_hold" onclick="hold()">보류</button>
<button type="button" id="choice_delete" onclick="del()">삭제</button>

성격에 맞게 list_hold.php와 list_del.php로 "체크"된 사람의 정보만 넘겨주면 되겠죠?

<input class="chk" type="checkbox" name="url_num" value="<?=$row['no']?>"> // ★ 회원의 고유번호
: 반복이라고 치고, name은 url_num 그대로 사용합니다. // url_num[]처럼 배열 형태로 지정 가능

넘기는 방법도 다양한데, 기존 소스에서 최소화하겠다면 아래 스크립트 사용해보세요. 편의상 보류 하나만….

function hold() {
  const checked = document.querySelectorAll('[name="url_num"]:checked');
  if ( !checked.length ) {
    alert("선택해주세요.");
    return false;
  }
  let form = document.createElement("form");
  form.method = "POST"; // 또는 GET, PUT 등등
  form.action = "list_hold.php";
  let input = document.createElement("input");
  input.type = "hidden";
  input.name = "data";
  input.value = Array.from(checked).map(o=>o.value).join("구분자");
  form.appendChild(input);
  document.body.appendChild(form);
  form.submit();
}
설명이 따로 필요할까 싶은 짧은 코드입니다만 간단하게 덧붙이자면…
선택된 체크박스 없으면 경고 중단, 있으면 구분자로 결합, 동적으로 폼 생성해 던져주는 형태입니다.
그래서 페이지 이동이 일어나고요.

list_del.php에서는 $_POST['data'] 사용하면 됩니다.
콤마를 구분자로 사용하면 WHERE 고유번호필드명 IN (전송받은값) 그대로 사용해도 되는데,
그냥 그대로 사용하면 보안 문제 발생할 수 있으니 별도의 처리가 필요합니다. ★
$arr = explode('구분자', $_POST['data']); 처럼 분리해서 처리해줘도 되고요.

숫자와 구분자만 사용되었는지 체크하거나, 아래 페이지 참고하면 됩니다.
- https://www.php.net/manual/en/mysqli-stmt.bind-param.php

페이지 이동이 보기 흉하다 싶으면, Ajax 등을 검색해보면 됩니다.
- https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
- https://developer.mozilla.org/ko/docs/Web/API/Fetch_API/Using_Fetch
