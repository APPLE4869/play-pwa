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

    alert(navigator.standalone);
  })();

  // service-worker.js
  self.addEventListener('install', function(e) {
    console.log('[ServiceWorker] Install');
  });

  self.addEventListener('activate', function(e) {
    console.log('[ServiceWorker] Activate');
  });

  // 現状では、この処理を書かないとService Workerが有効と判定されないようです
  self.addEventListener('fetch', function(event) {});
</script>
