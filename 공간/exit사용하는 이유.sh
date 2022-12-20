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
