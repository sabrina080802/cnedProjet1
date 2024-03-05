# Mediatekformation

## Présentation

Ce site, développé avec Symfony 5.4, permet d'accéder aux vidéos d'auto-formation proposées par une chaîne de médiathèques et qui sont aussi accessibles sur YouTube.<br>
Actuellement, seule la partie front office a été développée. Elle contient les fonctionnalités globales suivantes :<br>
![img1](https://github.com/CNED-SLAM/mediatekformation/assets/100127886/eed72688-c9e5-4509-ab44-7309d3e86041)

## Les différentes pages

Voici les 5 pages correspondant aux différents cas d’utilisation.

## La base de données

La base de données exploitée par le site est au format MySQL.

### Schéma conceptuel de données

Voici le schéma correspondant à la BDD.<br>
![img7](https://github.com/CNED-SLAM/mediatekformation/assets/100127886/1f1f4c83-5955-4ae9-b2f2-a030055c1d3f)
<br>video_id contient le code YouTube de la vidéo, qui permet ensuite de lancer la vidéo à l'adresse suivante :<br>
https://www.youtube.com/embed/<<<video_id>>>

### Relations issues du schéma

<code><strong>formation (id, published_at, title, video_id, description, playlist_id)</strong>
id : clé primaire
playlist_id : clé étrangère en ref. à id de playlist
<strong>playlist (id, name, description)</strong>
id : clé primaire
<strong>categorie (id, name)</strong>
id : clé primaire
<strong>formation_categorie (id_formation, id_categorie)</strong>
id_formation, id_categorie : clé primaire
id_formation : clé étrangère en ref. à id de formation
id_categorie : clé étrangère en ref. à id de categorie</code>

## Démonstration

Pour voir MediaTek Formation en action, cliquez sur le lien suivant : [Voir la démo](#).

## Étapes de Développement

Le développement de MediaTek Formation s'est articulé autour de plusieurs missions clés :

### Mission 0 : Préparer l'environnement de travail

- Configuration initiale de l'environnement de développement.
- Mise en place d'un système de contrôle de version pour le projet.

### Mission 1 : Ajouter les niveaux

- Design et implémentation de la hiérarchie des niveaux pour les cours et formations proposés.

### Mission 2 : Coder la partie back-office

- Développement des fonctionnalités administratives pour la gestion des contenus.

### Mission 3 : Créer une vidéo de démonstration

- Réalisation d'une vidéo explicative pour montrer l'utilisation de l'application du point de vue des utilisateurs.

### Mission Bilan : Déploiement et documentation

- Déploiement final de l'application.
- Rédaction du rapport de projet et de la documentation technique.
- Création d'une page de portfolio pour présenter le projet.

## Documentation

- **Documentation Utilisateur :** Un guide pour aider les utilisateurs à naviguer dans l'application.
- **Documentation Technique :** Informations détaillées sur l'architecture du système, les choix technologiques, et les instructions pour les développeurs souhaitant contribuer au projet.

## Portfolio

Pour plus d'informations sur le projet MediaTek Formation, y compris des captures d'écran et des détails supplémentaires, visitez la page :

---

© 2022 Sabrina AL HAMMUTI. Tous droits réservés.
