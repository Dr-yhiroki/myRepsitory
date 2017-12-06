<!DOCTYPE html>
<html lang="ja">
<link href="css/ecsite.css" type="text/css" rel="stylesheet" >

<head>
<title>ECサイト</title>
</head>

<body>
<h1>ECサイト(仮称)</h1>
<p>aaaaa</p>
  <div class="container">
    <?php foreach($items as $item): ?>
      <div class="item">
          <?= $item->name ?><br>
          <?= $item->price ?> 円
          <a href="/detail/<?= $item->id ?>"> 詳細 </a>
      </div>
    <?php endforeach; ?>
  </div>

<p>bbbbb</p>
<div class="container">
  <?php foreach($items as $item): ?>
        <div class="item">
        <?= $item->name ?><br>
        <?= $item->price ?> 円
        <a href="/detail/<?= $item->id ?>"> 詳細 </a>
    </div>
  <?php endforeach; ?>
</div>
<!--<p>ccccc</p>
<div class="container">
  <?php foreach($items as $item): ?>
    <div class="item">
        <?= $item->name ?><br>
        <?= $item->price ?> 円
        <a href="/detail/<?= $item->id ?>"> 詳細 </a>
    </div>
  <?php endforeach; ?>
</div>
-->
</body>
</html>
