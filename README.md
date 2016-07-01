CE bricolage
========================

Outil pour la gestion de pret de matériel. Idéal pour un CE, une association ou aautre organisaation qui prête du matériel.

1) Fonctionalité
----------------------------------
- Gestion des reservation
- Gestion du matériel emprunté
- Gestion des utilisateurs/emprunteur

A venir :
- Catalogue pour les membres
- Gestion de catégorie de matériel
- Historique
- Statistique
- Gestion d'une liste l'achat avec priorité

2) Installation
----------------------------------
Récupération d'une copie de l'application
> git clone https://github.com/tmanson/cebricolage.git

Dans le répertoire cebricolage, exécuter les commandes suivantes.

Récupération des vendors
> composer install

Création de la base de donnée cebricolage
> php app/console doctrine:database:create

Initialisation des réfrentiels
> php app/console doctrine:migration:migrate

3) Connexion à l'application
Un utilisateur ayant tout les droits dans l'application est créée.
login : admin
password : admin

