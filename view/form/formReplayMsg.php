<?php
// session_start();
$userId = $_SESSION["user"]["ID"];
$message = getMessages($userId);
?>
<a href="listeMsg.php" class="mx-5">Retour à la liste des message</a>

<form action="" methode="post">
  <div class="form-group col-11 col-md-9 col-lg-8">
    <label for="destinataire">Destinataire</label>
    <select name="recipient" id="destinataire">
    <?php 
        foreach ($message as $key => $value) {
    ?>
    <option value=""><?php echo (isset($value)?$value["name"]:""); ?></option>
    <!-- <input type="text" class="form-control" id="destinataire" name="recipient" value="<?php echo (isset($value)?$value["name"]:""); ?>"> -->
    <?php
        }
    ?>
    </select>
  </div>
  <div class="form-group col-11 col-md-9 col-lg-8">
    <label for="objet">Objet</label>
    <input type="text" class="form-control" name="object" id="objet" placeholder="Objet">
  </div>
  <div class="form-group col-11 col-md-9 col-lg-8">
    <label for="msg">Message</label>
    <textarea class="form-control"name="msg" id="msg" placeholder="Votre message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>