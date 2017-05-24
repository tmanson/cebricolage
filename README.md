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
> composer install --no-dev --optimize-autoloader

Création de la base de donnée cebricolage
> php app/console doctrine:database:create

Initialisation des referentiels
> php app/console assets:install

3) Livraison d'une nouvelle release
Mise à jour de la base
> php app/console doctrine:migration:migrate

Réinitialisation du cache
> php app/console cache:clear --env=prod --no-debug

Export les ressources Assetic.
> php app/console assetic:dump --env=prod --no-debug

4) Connexion à l'application
----------------------------------
Un utilisateur ayant tout les droits dans l'application est créée.
login : admin
password : admin

