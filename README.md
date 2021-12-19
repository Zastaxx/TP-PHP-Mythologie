# Mythologie - TP php Adrar 19/12/2021

Evaluation :
Jean Client désire créer un blog sur la mythologie grecque.
Pour les contenus vous êtes bien sûr autorisés à faire du lorem ipsum.



- Le site doit contenir une page d’accueil avec une liste de tous les articles. (Accessible
tout utilisateur même non inscrit)

Le titre et un résumé de l’article, si on clique sur l’article cela nous ramène vers la page
de l’article ou il est possible de le voir en entier.



- Une page de création d’articles (uniquement accessible à un membre admin)

Titre obligatoire, contenu de l’article obligatoire et minimum 100 caractères, image
obligatoire, la date et l’heure sont remplis automatiquement par sql. L’user qui a crée
l’article, c’est à vous de créer cette automatisme. (Il y a une jointure entre la table user
et article, étudiez la bdd)



- Page Article (accessible à tous)

Sur cette page nous voyons le titre de l’article, son contenu, en bas de pages le pseudo
du créateur ainsi que la date et l’heure de création au format : jour/mois/année
heures : minutes
Pour l’admin un bouton (ou lien au choix) sera disponible afin de supprimer l’article.
En cas de suppression une validation est demandée et l’admin sera renvoyé sur la page
d’accueil en cas de suppression.



- Une page de connexion (visible uniquement pour les non connectés)

Avec la possibilité de se rappeler de l’utilisateur pendant 1 an. (remember me)



- Une page d’inscription
Vous pouvez créer le compte de l’admin directement dans la base de données (attention
à ce que le mot de passe soit bien hachée quand même)
Sinon inscription classique avec pour tous un statut d’utilisateur classique, il n’y aura qu’un
seul admin pour le moment (pseudo mot de passe et vérification de mot de passe)



Visuellement le site doit être propre, utilisez bootstrap ! Site harmonieux, images de même
dimension automatiquement, éléments centrés…



Exo bonus pour les plus téméraires :
Un espace commentaires sera disponible sur les articles
Pour les non-inscrits : Il n’est pas possible d’écrire de commentaires mais ils peuvent les lire.
Pour les utilisateurs : Ils peuvent écrire des commentaires et les lire.
Pour les admin : ils peuvent également écrire et lire les commentaires.
