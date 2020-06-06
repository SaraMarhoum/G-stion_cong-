<input type="checkbox" id="check">
<label for="check" style="display: inline;">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar">
    <header>LM Admin</header>
    <ul>
        <li><a href="admin.php"><i class="fas fa-qrcode"></i>Tableau de bord</a></li>
        <li><a href="admin.php"><i class="fas fa-user"></i>Mon profile</a></li>
        <li class="dropdown-btn"><a href="#"><i class="fas fa-users"></i>Salariés<i class="fa fa-caret-down"></i></a>
        </li>
        <div class="dropdown-container">
            <li><a href="addsalarié.php" class="dropdownli" >Ajouter un salarié</a></li>
            <li><a href="managesalarié.php" class="dropdownli" >Gérer les salariés</a></li>
        </div>
        <li class="dropdown-btn"><a href="#"><i class="fas fa-desktop"></i>Congés<i class="fa fa-caret-down"></i></a>
        </li>
        <div class="dropdown-container">
            <li><a class="dropdownli" href="#">Status des congés</a></li>
            <li><a class="dropdownli" href="#">Congés en attente</a></li>
            <li><a class="dropdownli" href="#">Congés approuvés</a></li>
            <li><a class="dropdownli" href="#">Congés refusés</a></li>
        </div>
        <li><a href="admin.php"><i class="fas fa-calendar-week"></i>Calendrier</a></li>
        <li><a href="../déconnection.php"><i class="far fa-arrow-alt-circle-left"></i>Déconnection</a></li>
    </ul>
</div>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
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