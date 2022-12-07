Ajax 서버랑 비동기적 통신하는 것.

1. 원하는 데이터 URL ← 서버 개발자
2. 그 URL로 GET요청

GET요청 
1. URL 로 직접입력 상남자식
2. 버튼으로 GET요청 form ~~~ type= "get"~~
   근데 이러면 브라우저가 새로고침됨
3.  Ajax 새로고침없이 get요청을 하는 js코드

  Ajax : 새로고침이 없으니 부드러운 웹을 제작가능.

 요즘 js 방식 
 fetch('get할 url작성') 
	.then((response) => { //then함수와 콜백함수 () => ~~ 
	return response.json()
	})
	.then((결과) =>{
	 console.log(결과)
	})
	.catch(() => { //에러함
	console.log('에러남')
	})

4. 외부 라이브러리 방식 Ajax 

에러 중 CORS ? api문제 등..
