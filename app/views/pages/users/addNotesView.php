
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">

</head> 


<body>

<div class="Note_list_content">
      <h3>Notes List</h3>
      <table class="Notes">
        <tr>
            <th>Mother ID</th>
          <th>topic</th>
          <th>description</th>
          <th>date</th>
          <th>records</th>
        </tr>
        <?php foreach ($data['Notes'] as $Notes) : ?>

          <tr>
            <td><?php echo $Notes->mom_id ?></td>
            <td><?php echo $Notes->note_topic ?></td>
            <td><?php echo $Notes->note_description ?></td>
            <td><?php echo $Notes->note_date ?></td>
            <td><?php echo $Notes->note_records ?></td>
            <td>
                <a href="<?php echo URLROOT; ?>Notes/addNotes/<?php echo $Notes->ped_note_id; ?>"><span id="add" class="material-symbols-outlined">
                    add Notes
                    </span></a>
              <a href="<?php echo URLROOT; ?>Notes/editNotes/<?php echo $Notes->ped_note_id; ?>"><span id="edit" class="material-symbols-outlined">
                  edit
                </span></a>
            <td>
              <a href="<?php echo URLROOT; ?>Notes/deleteNotes/<?php echo $Notes->ped_note_id; ?>"><span id="delete" class="material-symbols-outlined">
                  delete
                </span></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

<div class="note-dash">
<form action="<?php echo URLROOT; ?> Notes/addNotes" method="post">
    <div class="form-group">
        <label for="title">Doctor ID: </label>
        <input type="text" name="doc_id" class="form-control form-control-lg ">
        <span class="invalid-feedback"></span>
    <div class="form-group">
        <label for="title">Mother ID: </label>
        <input type="text" name="mom_id" class="form-control form-control-lg ">
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label for="title">Topic: </label>
        <input type="text" name="note_topic" class="form-control form-control-lg ">
        <span class="invalid-feedback"></span>

    <div class="form-group">
        <label for="body">Description: </label>
        <textarea name="note_description" class="form-control form-control-lg "></textarea>
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label for="body">Date: </label>
        <input type="date" name="note_date" class="form-control form-control-lg ">
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label for="body">Records: </label>
        <input type="text" name="note_records" class="form-control form-control-lg ">
        <span class="invalid-feedback"></span>
    <div class="row">
        <div class="col">
            <input type="submit" value="Add Note" class="btn btn-success btn-block">
            <a href="" class="btn btn-light btn-block">View Notes</a>
            <a href="" class="btn btn-light btn-block">edit</a>
            <a href="" class="btn btn-light btn-block">delete</a>
        </div>
</div>
</body>









