<script type="text/javascript">
    jQuery(function() {
        jQuery('.wymeditor').wymeditor();
    });
</script>

<?php foreach ($professional as $row): ?>


    <?php $id = $row['professional_id']; ?>

    <div style="float:right; width:650px;">

        <div style="clear:both;"><?= $this->load->view('admin/practice_areas') ?></div>


        <div style="clear:both;"><?= $this->load->view('admin/assign_case') ?></div>

        <div style="clear:both;"><?= $this->load->view('admin/profile_attachment') ?></div>

    </div>

    <?= form_open("admin/edit_pro/$id") ?> 
    <div style="float:left; width:290px;">

        <div class="form_label">Firstname:</div><?= form_input('firstname', $row['firstname']) ?><br/><br/>

        <div class="form_label">Middle Name:</div><?= form_input('middlename', $row['middlename']) ?><br/><br/>

        <div class="form_label">Lastname:</div><?= form_input('lastname', $row['lastname']) ?><br/><br/>

        <div class="form_label">Title:</div> <?= form_input('title', $row['title']) ?><br/><br/>

        <div class="form_label">Email:</div> <?= form_input('email', $row['email']) ?><br/><br/>
        
          <div class="form_label">Profile Image:</div> <?= form_input('image', $row['image_location']) ?><br/><br/>
          
           <div class="form_label">VCard filename:</div> <?= form_input('vcard', $row['vcard']) ?><br/><br/>

        <div class="form_label">LinkedIn Profile:</div> <?= form_input('linkedIn', $row['linkedIn']) ?><br/><br/>
        
        <div class="form_label">Active:</div> <?= form_checkbox('active', '1', $row['active']) ?>
    </div>
    <div style="clear:both;"></div>
    bio:
    <textarea cols=75 rows=20 name="content" id="content"  class='wymeditor'><?= $row['bio']; ?></textarea>
    Awards
    <textarea cols=75 rows=20 name="awards" id="awards"  class='wymeditor'><?= $row['awards']; ?></textarea>
    Professional Involvement
    <textarea cols=75 rows=20 name="involvement" id="involvement"  class='wymeditor'><?= $row['involvement']; ?></textarea>
    Education
    <textarea cols=75 rows=20 name="education" id="education"  class='wymeditor'><?= $row['education']; ?></textarea>
    Admissions
    <textarea cols=75 rows=20 name="admissions" id="admissions"  class='wymeditor'><?= $row['admissions']; ?></textarea>
    <input type="submit" class="wymupdate" />
    <?= form_close() ?> 
<?php endforeach;
?>