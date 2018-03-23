-- Sur la page d’accueil, afficher dans un tableau la liste de toutes les randonnées 
-- (nom, difficulté, distance, durée, dénivelé, praticable).

    SELECT * 
    FROM hiking;

--  En cliquant sur un bouton, être redirigé sur une nouvelle page qui me permet 
-- de créer une randonnées répondant aux informations listées au point précédent.

INSERT INTO hiking(name, difficulty, distance, duration, height_diference, available)
VALUE (:nom, :difficulte, :distance, :duree, :denivele, :praticable);

-- En cliquant sur le nom d’une randonnée, être redirigé vers une page qui me permet 
-- de modifier les informations de cette randonnée. Les champs affichés doivent être pré-remplis et le cas échéant pré-sélectionnés.

-- En cliquant sur un bouton présent sur chaque ligne du tableau de la page d’accueil, 
-- supprimer la randonnée associée. La page se met à jour automatiquement.

-- Etre notifié par un message que chaque opération en lien avec la base de données et 
-- que je viens d’effectuer s’est exécutée avec succès.
