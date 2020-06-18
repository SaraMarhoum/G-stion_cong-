<input type="checkbox" id="check">
<label for="check" style="display: inline;">
  <i class="fas fa-bars" id="btn"></i>
  <i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar">
  <header>LM salarié</header>
  <ul>
    <li><a href="salarié.php"><i class="fas fa-qrcode"></i>Tableau de bord</a></li>
    <li><a href="changermdpsal.php"><i class="fas fa-user"></i>Mon profile</a></li>
    <li class="dropdown-btn"><a href="#"><i class="fas fa-sliders-h"></i>Congés<i class="fa fa-caret-down"></i></a></li>
    <div class="dropdown-container">
      <li><a class="dropdownli" href="demandeconge.php">Faire une demande</a></li>
      <li><a class="dropdownli" href="historique.php">Historique des demandes</a></li>
    </div>
    <li class="dropdown-btn"><a href="#"><i class="fas fa-stream"></i>Document<i class="fa fa-caret-down"></i></a></li>
    <div class="dropdown-container">
      <li><a class="dropdownli" href="PDFbdp.php">Bulletin de paiement </a></li>
      <li><a class="dropdownli" href="PDFattes.php">Attestation de travail</a></li>
    </div>
    <li><a href="calandrierSal.php"><i class="fas fa-calendar-week"></i>Calendrier</a></li>
    <li><a href="déconnection.php"><i class="far fa-arrow-alt-circle-left"></i>Déconnection</a></li>
  </ul>
</div>

<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
</script>