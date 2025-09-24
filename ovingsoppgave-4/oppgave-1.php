<!DOCTYPE html>
<html>
<head>
  <title>Eksempel 1</title>
</head>
<body>
  <h3>Eksempel 1</h3>

  <?php
  // sjekk om skjemaet er sendt inn
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fornavn = $_POST["fornavn"];
      $etternavn = $_POST["etternavn"];

      echo "God dag $fornavn $etternavn <br />";
  }
  ?>

  <form method="post" action="">
    Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br />
    Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
  </form>
</body>
</html>
