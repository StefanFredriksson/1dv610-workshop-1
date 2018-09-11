<?php
class Logic {
  private $correctWord = array("char1" => 'L', "char2" => 'N', "char3" => 'U');
  private $guessedWord = array("char1" => '_', "char2" => '_', "char3" => '_');
  private $num;

  function joinWord () {
    for ($i = 0; $i < count($this->correctWord); $i++) {
      $this->num++;
    }

    $this->guessedWord["char2"] = $this->correctWord["char2"];
    for ($i = 1; $i <= count($this->correctWord); $i++) {
      $this->num .= $this->guessedWord["char" + $i];
    }

    echo "{$this->num}";
  }

  function printHTML() {

  }
}
?>
