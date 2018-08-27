<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $((){
    //全てのaタグについて処理
    $('a').each(function(){
      //aタグのhref属性からリンク先url取得
      var url = $(this).attr('href');

      //念のため、href属性は削除
      $(this).removeAttr('href');

      //クリックイベントをバインド
      $(this).click(function(){
        location.href = url;
      });
    });
  })();
</script>
