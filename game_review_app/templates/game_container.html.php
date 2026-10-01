<p><?=$totalgames?> games uploaded to internet games database</p>
<?php foreach($games as $game): ?>
    <blockquote>
    <?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?> ,
    <?= htmlspecialchars($game['game_price'], ENT_QUOTES, 'UTF-8') ?> ,
    <?= htmlspecialchars($game['game_company_name'], ENT_QUOTES, 'UTF-8') ?> ,
        <?= htmlspecialchars($game['category_name'], ENT_QUOTES, 'UTF-8') ?>
    
    </blockquote>


    <?php endforeach; ?>
