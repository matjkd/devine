

<?php foreach ($professional as $profile): ?>

    <h1>Biography 

        <?php
        if (isset($edit)) {
            echo "  <a href='" . base_url() . "admin/editpro/" . $profile['professional_id'] . "'><img width='20px' height='20px' alt='edit' src='" . base_url() . "images/icons/edit_page.png'></a>";
        }
    endforeach;
    ?>
</h1>
<?php foreach ($professional as $row): ?>


    <div style="float:left; padding:0 5px 5px 0;">
        
        <img alt="profile image"  width="120px" height="119px" src="<?= base_url() ?>images/profiles/<?= $row['image_location']; ?>"><br/>

     <?php if($row['linkedIn'] != NULL) {?>
        
        <a href="<?=$row['linkedIn']?>">
      
          <img src="http://www.linkedin.com/img/webpromo/btn_viewmy_120x33.png" width="120" height="33" border="0" alt="View Mat Sadler's profile on LinkedIn">
        
    </a>
        <?php } ?>


    </div>

    <strong><?= $row['firstname']; ?> <?= $row['middlename']; ?>. <?= $row['lastname']; ?></strong><br/>
    <?= $row['title']; ?><br/>


    <a target="_blank" href="<?= base_url() ?>images/vcards/<?= $row['vcard']; ?>">Download Vcard</a><br/>


    <a href="mailto:<?= $row['email']; ?>">email:<?= $row['email'] ?></a>



    <br/><br/>


    <div style="float:left;"><a alt="download pdf" href="<?= base_url() ?>professionals/pdf_profile/<?= $profile['professional_id'] ?>"><img alt="print pdf of this profile"  src="<?= base_url() ?>images/icons/pdf2.png"/></a> <?= $this->load->view('popups/emailpage') ?></div>




    <div style="clear:both;">
        <?php $bio = $row['bio']; ?>
        <?php $bio = str_replace("[break]", "<span><span/>", $bio); ?>
        <?= $bio ?>
    </div>
<?php endforeach; ?>

<!--
start of selected cases
-->
<?php
if ($cases == NULL) {
    
} else {
    ?>
    <h3>Selected Cases</h3>
    <table>

        <?php foreach ($cases as $case): ?>

            <tr style="padding-bottom:3px;">
                <td><img src="<?= base_url() ?>images/pdf.png" width="28px"></td>
                <td style="border-bottom:0px #aabbc8 solid; "><a href="<?= base_url() ?>uploads/<?= $case['case_file']; ?>"><?= $case['case_title']; ?></a></td>
            </tr>

        <?php endforeach; ?>

    </table>
<?php } ?>

<?php
if ($attachments == NULL) {
    
} else {
    ?>
    <h3>Select Publications</h3>
    <?= $this->load->view('pages/list_attachments') ?>
<?php } ?>






