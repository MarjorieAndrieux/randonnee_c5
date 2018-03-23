### Objectifs
Créer des scripts afin d’accéder aux et mettre à jour les informations présentes dans la base de données.

### Temporalité
1j

### Consignes
A partir des histoires utilisateur, créer les scripts répondants aux histoires utilisateur.
La base de données MySQL vous est fournie, exécutez le script reunion_island.sql. Vous êtes libre du rendu visuel de votre application.

### Histoires utilisateur
En tant qu’utilisateur je dois pouvoir :
- Sur la page d’accueil, afficher dans un tableau la liste de toutes les randonnées (nom, difficulté, distance, durée, dénivelé, praticable).
- En cliquant sur un bouton, être redirigé sur une nouvelle page qui me permet de créer une randonnées répondant aux informations listées au point précédent.
- En cliquant sur le nom d’une randonnée, être redirigé vers une page qui me permet de modifier les informations de cette randonnée. Les champs affichés doivent être pré-remplis et le cas échéant pré-sélectionnés.
- En cliquant sur un bouton présent sur chaque ligne du tableau de la page d’accueil, supprimer la randonnée associée. La page se met à jour automatiquement.
- Etre notifié par un message que chaque opération en lien avec la base de données et que je viens d’effectuer s’est exécutée avec succès.

### Contraintes :
- Vous vérifierez que les informations envoyées par les formulaires sont valides avant l’ajout en base de données.
- Il ne doit y avoir qu’un seul script pour se connecter à la base de données.
- Utiliser au moins une fois include()
- Toutes les informations affichées sont comprises sans difficulté d’interprétation par un humain.
- Vous êtes libre de la manière d’afficher le message de notification.

### Compétence couverte
C5 - Développer des composants d’accès aux données.

### Ressources fournies
Script SQL de la base de données.