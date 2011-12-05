<h1>Litigation Matters</h1>
<div>

   
<?php foreach($litigation as $row):?>
    

    
    
    
        <p><a href="<?= base_url() ?>welcome/content/<?= $row['menu_title'] ?>"><span><h3><?= $row['title'] ?></h3></span></a>
            <?= $row['content'] ?>

        </p>
    <?php endforeach; ?>

</div>

<h1>Transactional Matters</h1>
<div>
   <?php foreach($transaction as $row):?>
    

    
    
    
        <p><a href="<?= base_url() ?>welcome/content/<?= $row['menu_title'] ?>"><span><h3><?= $row['title'] ?></h3></span></a>
            <?= $row['content'] ?>

        </p>
    <?php endforeach; ?>

</div>