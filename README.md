# Hackoustic

### page "Mesure"
  contenu:
  
    - visualisation du niveau sonore
    - bouton submit
    
  action: traitement des données renvoyé vers la page "Infos son"
  
  données à traiter: niveau sonore, lieux
  
  
### page "Infos son"
  contenu: 
  
    - quote / blagues
    - infos relatives au son (smiley de couleurs différentes)
    - infos relatives au lieu
    - lien page "Infos sensibilisation"
    - possibilité d'ajout à la page "Map"
    
  action: vers la page "Maps" ou vers la page "Infos sensibilisation"
  
### page "Map"
  contenu:
  
    - lieux repertoriés via API
    - lieux ajoutés par l'utilisateur
    
  action: vers la page "Infos lieux"

  
### page "Infos lieux"
  contenu:
  
    - niveau sonore selon des plages horaires
    - lien ves la page "Infos sensibilisation"
    
  action: vers la page "Infos sensibilisation"

  
### page "Infos sensibilisation
  contenu:
  
    - conseils selon le niveau recupéré
  
