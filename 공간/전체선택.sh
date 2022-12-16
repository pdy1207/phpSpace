<label for="all" style="color: tomato; cursor: pointer;">
<input id="all" type="checkbox" name="all" class="all" style="display: none;" > 전체 선택 </label> 

label for= "input 아이디와 동일하게 작성하기!"


<input class="chk" type="checkbox" name="url_num" value="<?=$list_row['no']?>">

$( document ).ready( function() {
      $( '.all' ).click( function() {
          $( '.chk' ).prop( 'checked', this.checked );
      } );
  } );
