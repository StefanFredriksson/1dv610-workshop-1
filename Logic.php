<?php
class Logic {
  private $correctWord = array('L', 'N', 'U');
  private $guessedWord = array('_', '_', '_');
  private $word;

  function joinWord () {
    for ($i = 0; $i < count($this->correctWord); $i++) {
      $this->word .= $this->guessedWord[$i];
    }

    echo $this->word;
  }

  function checkIfLetterExists ($letter) {
    for ($i = 0; $i < count($this->correctWord); $i++) {
      if ($this->correctWord[$i] == $letter) {
        $this->guessedWord[$i] = $this->correctWord[$i];
      }
    }
  }

  function listenForGet () {
    return $_GET["guessedLetter"];
  }

  function printHTML() {
    echo "
    <p>{$this->word}</p>
    <form method='get'>
      <input type='text' name='guessedLetter'>
      <input type='submit'>
    </form>
    ";
  }
}
?>
