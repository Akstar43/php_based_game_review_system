<form action="" method="post">
    <label for="game_name">Game Name</label>
    <textarea name="game_name" rows="3" cols="40"></textarea>
    <label for="game_price">Game price</label>
    <input type="text" name="game_price" placeholder="Game price">

    <select name="categories">
        <option value="">Select game Category</option>
        <?php foreach($categories as $category):?>
            <option value="<?=htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8') ?>">
            <?= htmlspecialchars($category['category_name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
            <?php endforeach;?>
    </select>

    <select name="game_companies">
        <option value="">Select game Company </option>
        <?php foreach($game_companies as $game_company):?>
        <option value="<?=htmlspecialchars($game_company['id'], ENT_QUOTES, 'UTF-8') ?>">
        <?= htmlspecialchars($game_company['game_company_name'], ENT_QUOTES, 'UTF-8')?>
        </option>
        <?php endforeach;?>
    </select>
    <input type="submit" name="submit" value="Add Game">
</form>