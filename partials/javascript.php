<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  (function() {
    // リンクを全てJS処理での画面遷移に置き換える処理
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

    // alert(navigator.standalone);
  })();

  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js').then(function(registration) {
      // 登録成功
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }).catch(function(err) {
      // 登録失敗 :(
      console.log('ServiceWorker registration failed: ', err);
    });
  }
</script>
