      
      //전체 선택
      $( document ).ready( function() {
        $( '.all' ).click( function() {
            $( '.chk' ).prop( 'checked', this.checked );
        } );
      } );
      
      
      
      $(document).ready(function(){
      //전체 체크 클릭 시, 나머지 체크 
      $(".all").click(function(){
      var order2Chk=$(".all").prop("checked");

          if(order2Chk){
              $(".chk").prop("checked",true);
              $("#choice_pick").css({"backgroundColor":"#ff6347","cursor":"pointer","color":"#fff"}).prop("disabled",false);
              $("#choice_hold").css({"backgroundColor":"#ff6347","cursor":"pointer","color":"#fff"}).prop("disabled",false);
          }
          else{
              $(".chk").prop("checked",false);
              $("#choice_pick").css({"backgroundColor":"#cbcbcb","cursor":"auto","color":"#303033"}).prop("disabled",true);
              $("#choice_hold").css({"backgroundColor":"#cbcbcb","cursor":"auto","color":"#303033"}).prop("disabled",true);
          }
      });

      // 모든 체크박스를 클릭하면 버튼 활성화시키기
      $('.chk').click(function(){
          var tmpp = $(this).prop('checked'); 
          //자식 체크 전체 체크시, 부모 체크박스 체크 됨
          var tt = $(".chk").length;
          var ss = $(".chk:checked").length;

          //선택한 체크박스 값이 true 이거나 체크박스 1개 이상 체크시 버튼 활성화시키기
          if(tmpp==true || ss>0){
          $("#choice_pick").css({"backgroundColor":"#ff6347","cursor":"pointer","color":"#fff"}).prop("disabled",false);
          $("#choice_hold").css({"backgroundColor":"#ff6347","cursor":"pointer","color":"#fff"}).prop("disabled",false);
          }
          else{
          $("#choice_pick").css({"backgroundColor":"#cbcbcb","cursor":"auto","color":"#303033"}).prop("disabled",true);
          $("#choice_hold").css({"backgroundColor":"#cbcbcb","cursor":"auto","color":"#303033"}).prop("disabled",true);
          }


          // 체크박스가 모두 선택되었을 때 상위 체크박스 선택되도록 설정
          if(tt == ss){
            $(".all").prop("checked",true);
          }else{
            $(".all").prop("checked",false);
          }

        });


      });


- [출처](https://coding-designer.tistory.com/2)
