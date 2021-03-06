<div class="wrap">
    <h1>UpFront Lifesaver</h1>
    <h2>Headway or BloxTheme to UpFront</h2>
    <hr class="wp-header-end">
    <br />
    <p></p>
    <form method="POST">
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>" />
        <div>
            <input type="checkbox" id="widgets" name="widgets" checked="checked" /><label for="widgets" style="vertical-align: top;">Include widgets</label>
        </div>
        <br />
        <div>
            <label for="template"><?php echo ucfirst($_SESSION['upfront-lifesaver-source']); ?> Template:</label>
            <select id="template" name="template">
                <?php foreach($templates as $template): ?>
                <option value="<?php echo $template['id']; ?>"><?php echo $template['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br />
        <input class="button button-primary" type="submit" name="UpFrontLifesaver" value="Start Conversion" <?php if(! $source_exist || ! $upfront_exist): ?>disabled="disabled"<?php endif; ?> />
    </form>
</div>