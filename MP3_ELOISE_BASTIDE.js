function calculerleprixcommande() {
    var affichageCommande = document.getElementById("afficherPrix");

    var prixCommandeString = document.getElementById("prixCommande").value;
    var tauxPourboireString = document.getElementById("tauxPourboire").value;

    var prixCommande = Number(prixCommandeString);
    var tauxPourboire = Number(tauxPourboireString);
    if (prixCommande <= 0 || isNaN(prixCommande)) {
        alert("La commande doit être renseignée et positive !");
        return;
    }
    if (tauxPourboireString == "") {
        tauxPourboire = 10;  
    }

    if (tauxPourboire < 0 || tauxPourboire > 50) {
        alert("Le pourboire doit être compris entre 0 et 50%.");
        return;
    }
    tauxPourboire = tauxPourboire * 0.01;

    var prixPourboire = prixCommande * tauxPourboire;
    var prixTotal = prixCommande + prixPourboire;

    affichageCommande.value =
        "Merci pour le pourboire, il s'élève à : " + prixPourboire.toFixed(2) + " euros.\n" +
        "Ce qui vous fait un prix total de : " + prixTotal.toFixed(2) + " euros.";
}


function encoreunefois() {
    document.getElementById("afficherPrix").value = "";
    document.getElementById("prixCommande").value = "";
    document.getElementById("tauxPourboire").value = "";
}
