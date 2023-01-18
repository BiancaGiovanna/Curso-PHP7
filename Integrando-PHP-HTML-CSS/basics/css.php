<h2>Integração CSS & PHP</h2>

<h1>
  <?php
  echo 'Olá';
  echo '<small>';
  echo ' Mundo';
  echo '</small>';
  ?>
</h1>
<br>
<div><button><?= "Legal" ?></button></div>
<style>
  button {
    padding: 5px 20px;
    background-color: #4286fa;
    color: #EEE;
    border-radius: 10px;
  }
</style>