<h1>Hello world</h1>
<p>Меня зовут <?=$data['name']?>, мне <?=$data['age']?></p>
<?php foreach ($posts as $post): ?>
    <h3><?=$post['title']?></h3>
<?php endforeach; ?>
