<?php include 'header.php'?>

    <div class="formulaire">
        <form class="formcontent">
            <h3><?php echo form; ?></h3>
            <input type="text" name="a" id="a" autocomplete='off' placeholder="<?php echo chname; ?>" class='info'><br>
            <input type="number" min='1' max="60" name="b" id="b" autocomplete='off' placeholder="<?php echo lvl; ?>" class='info'><br>
            <textarea type="text" name="c" id="c" placeholder="<?php echo reas; ?>" class='info'></textarea><br>
            <button class="formBtn" type="button"><?php echo send; ?></button>
        </form>
        <div class="confirmation">
            <?php echo confirm; ?>
        </div>
    </div>

<?php include 'footer.php'?>