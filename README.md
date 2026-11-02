# \# TP 3 : Gestion collaborative des versions avec Git et GitHub

# 

# \*\*Université Cadi Ayyad – Faculté des Sciences Semlalia\*\*

# \*\*Département : Informatique\*\*

# \*\*Module : Méthodologies de développement et Ateliers en PHP\*\*

# \*\*Niveau : Master ISI – S1\*\*

# \*\*Professeur : Prof. Ikidid Abdelouafi\*\*

# 

# \---

# 

# \## 1. Présentation du TP

# 

# \### Objectif

# 

# L'objectif de ce TP est d'apprendre à gérer un projet informatique en équipe en utilisant Git et GitHub.

# 

# Ce travail permet de :

# 

# \- Installer et configurer Git.

# \- Créer et gérer un dépôt GitHub.

# \- Utiliser l'authentification SSH.

# \- Cloner un dépôt distant.

# \- Créer des branches individuelles.

# \- Travailler en parallèle sur un projet PHP.

# \- Utiliser les Pull Requests pour intégrer les modifications.

# \- Effectuer une revue de code.

# \- Comprendre et résoudre les conflits de fusion.

# 

# \### Présentation du projet

# 

# Le projet consiste à développer une mini-application PHP intitulée \*\*ISI Student Manager\*\*.

# 

# Cette application permet de présenter une liste d'étudiants et une liste de projets, avec une page d'accueil et une mise en forme CSS.

# 

# \### Organisation du groupe

# 

# | Membre                  | Responsabilité                   | Fichier       | Branche           |

# | ----------              | -------------------------------- | ------------- | ----------------- |

# | Étudiant A              | Chef de projet et page d'accueil | index.php     | feature/accueil   |

# | Étudiant B              | Liste des étudiants              | etudiants.php | feature/etudiants |

# | Étudiant C              | Liste des projets                | projets.php   | feature/projets   |

# | Étudiant EL BARKI Razan | CSS et navigation                | style.css     | feature/style     |

# 

# 

# 

# \---

# 

# \# PARTIE A — Réalisation du TP

# 

# \## Exercice 1 — Installation et configuration de Git

# 

# \### 1. Vérifier que Git est installé

# 

!\[Capture d'écran 1.3](captures/exercice1-version.png)

# 

# Cette commande permet de vérifier l'installation de Git et d'afficher sa version.

# 

# \### 2. Configurer le nom et l'adresse e-mail

# 

!\[Capture 1](captures/exercice1-configuration.png)





# ```

# 

# Ces informations seront associées aux commits réalisés sur cet ordinateur.

# 

# \### 3. Afficher les paramètres



!\[Capture 1](captures/1.3.png)



# Cette commande affiche les paramètres de configuration globaux de Git.

# 

# \### 

# 

# \*\* 1 : Quel est le rôle de user.name ?\*\*

# 

# `user.name` permet de définir le nom de l'auteur qui sera enregistré dans les commits Git.

# 

# \*\* 2 : Quel est le rôle de user.email ?\*\*

# 

# `user.email` permet de définir l'adresse e-mail associée à l'auteur des commits. Elle permet notamment d'associer les contributions à un compte GitHub lorsque l'adresse est reconnue par GitHub.

# \---

# 

# \## Exercice 2 — Création du dépôt commun sur GitHub

# 

# \### 1. Connexion à GitHub

# 

# L'étudiant A se connecte à son compte GitHub :

# 

# \[https://github.com/](https://github.com/)

# 

# \### 2. Création du dépôt

# 

# L'étudiant A crée un nouveau dépôt avec les paramètres suivants :

# 

# \- Repository name : `ISI-Student-Manager-Groupe9`

# \- Visibility : Public

# \- Option : Add a README file

# 

# Le dépôt est ensuite créé en cliquant sur \*\*Create repository\*\*.

# 

# \### 3. Invitation des collaborateurs

# 

# Dans le dépôt :

# 

# 1\. Ouvrir Settings.

# 2\. Accéder à Collaborators.

# 3\. Cliquer sur Add people.

# 4\. Rechercher les comptes GitHub des autres étudiants.

# 5\. Envoyer les invitations.





!\[Capture 1](captures/exercice2-depot.png)

# 

# \### 4. Acceptation des invitations

# 

# Les étudiants B, C et D se connectent à leurs comptes GitHub et acceptent les invitations.

# 

!\[Capture 1](captures/exercice2-collaborateurs.png)

# 

# \*\* 1 : Pourquoi créer un dépôt commun ?\*\*

# 

# Le dépôt commun permet de centraliser le code source du projet et de faciliter la collaboration entre les différents membres du groupe.

# 

# \---

# 

# \## Exercice 3 — Clonage et premier commit

# 

# \### 1. Chaque étudiant clone le dépôt sur sa machine.



&#x20;             Etudiant A :

&#x20;         

!\[Capture 1](captures/Ex3.1.1.png)

!\[Capture 1](captures/Ex3.1.2.png)

!\[Capture 1](captures/Ex3.1.3.png)

&#x20;                 

&#x20;              Etudiant D :

!\[Capture 1](captures/Ex3.4.1.png)

!\[Capture 1](captures/Ex3.4.2.png)

!\[Capture 1](captures/Ex3.4.5.png)

!\[Capture 1](captures/Ex3.4.4.png)



# \### 2. Afficher l’adresse origin, les branches locales et distantes et le statut.

&#x20;               Etudiant A :

!\[Capture 1](captures/Ex3.Q2.1.png)

&#x20;               Etudiant D :

!\[Capture 1](captures/Ex3.Q2.4.1.png)

!\[Capture 1](captures/Ex3.Q2.4.2.png)

!\[Capture 1](captures/Ex3.Q2.4.3.png)

!\[Capture 1](captures/Ex3.Q2.4.4.png)

# \### 3. Expliquer clone, origin, main, origin/main et HEAD.

# 

# La commande `git clone` permet de copier un dépôt distant sur l'ordinateur local. Elle récupère les fichiers ainsi que l'historique des commits.

# 

# `origin` est le nom par défaut donné au dépôt distant lors du clonage. Il permet de communiquer avec le dépôt hébergé sur GitHub.

# 

# `main` est la branche principale du projet. Elle contient la version commune et intégrée de l'application.

# 

# `origin/main` est la référence locale représentant l'état de la branche `main` sur le dépôt distant.

# 

# `HEAD` est une référence qui indique la position actuelle dans le dépôt Git, généralement le commit de la branche actuellement sélectionnée.

# \---

# 

# \## Exercice 4 — Commit initial

# 

# \### 1. Création du fichier index.php

# 

# L'étudiant A crée le fichier `index.php` :

# 

&#x20;               Etudiant A :

!\[Capture 1](captures/Ex4.1.1.png)

!\[Capture 1](captures/Ex4.1.2.png)

!\[Capture 1](captures/Ex4.1.3.png)

!\[Capture 1](captures/Ex4.1.4.png)



# Les autres étudiants récupèrent la version initiale :

&#x20;               Etudiant A :

!\[Capture 1](captures/Ex4.4.1.png)

!\[Capture 1](captures/Ex4.4.2.png)



# 

# \*\*Quelle est la différence entre commit et push ?\*\*

# 

# \- `git commit` permet d'enregistrer les modifications dans l'historique du dépôt local.

# \- `git push` permet d'envoyer les commits locaux vers le dépôt distant sur GitHub.

# 

# Ainsi, un commit est un enregistrement local, tandis qu'un push permet de partager cet enregistrement avec les autres membres du groupe.

# pôt par les autres membres.

# \---

# 

# \## Exercice 5 — Création des branches individuelles

# 

# Chaque étudiant crée sa branche à partir d'une branche `main` à jour.

# 

&#x20;                 Etudiant A :

!\[Capture 1](captures/Ex5.1.1.png)

!\[Capture 1](captures/Ex5.1.2.png)



&#x20;                 Etudiant D :

!\[Capture 1](captures/Ex5.4.1.png)

!\[Capture 1](captures/Ex5.4.2.png)



# ```

# 

# La branche permet à chaque étudiant de développer sa fonctionnalité indépendamment, sans modifier directement la branche principale.

# 

# La commande `git branch` affiche les branches locales. L'étoile indique la branche active.

# \---

# 

# \## Exercice 6 — Développement en parallèle

# 

# Chaque étudiant développe sa fonctionnalité sur sa propre branche.

# 

&#x20;                 Etudiant D :

!\[Capture 1](captures/Ex6.4.1.png)

!\[Capture 1](captures/Ex6.4.2.png)

!\[Capture 1](captures/Ex6.4.3.png)

!\[Capture 1](captures/Ex6.4.4.png)

# \---

# 

# \## Exercice 7 — Pull Requests et revue de code

# 

# \### 1. Création des Pull Requests

# 

# Chaque étudiant ouvre GitHub et crée une Pull Request.

# 

# Les Pull Requests sont :

# 

# | Auteur | Branche source    | Branche cible |

# | ------ | ----------------- | ------------- |

# | A      | feature/accueil   | main          |

# | B      | feature/etudiants | main          |

# | C      | feature/projets   | main          |

# | D      | feature/style     | main          |

# 

&#x20;                 Etudiant A :

!\[Capture 1](captures/Ex7.1.1.png)

&#x20;                 Etudiant D :

!\[Capture 1](captures/Ex7.4.1.png)

!\[Capture 1](captures/Ex7.4.2.png)

!\[Capture 1](captures/Ex7.4.3.png)

!\[Capture 1](captures/Ex7.4.4.png)





# Une Pull Request permet de proposer des modifications avant leur intégration dans la branche principale.

# 

# Elle présente plusieurs avantages :

# 

# \- Permettre la revue du code par les autres membres.

# \- Détecter les erreurs avant la fusion.

# \- Ajouter des commentaires et des suggestions.

# \- Faciliter la communication entre les développeurs.

# \- Maintenir une branche principale plus stable.

# \- Conserver une trace des contributions de chaque membre.

# 

# Un push direct sur `main` ne permet pas d'effectuer cette étape de validation collective avant l'intégration.

# \---

# 

# \## Exercice 8 — Conflit de fusion contrôlé

# 

# \### Provoquer volontairement un conflit de fusion afin de comprendre pourquoi Git ne peut pas toujours fusionner automatiquement les modifications.

# 

# \### 1. Création du fichier configuration.txt par A



&#x20;                 Etudiant A :

!\[Capture 1](captures/Ex8.1.1.png)

!\[Capture 1](captures/Ex8.1.2.png)

!\[Capture 1](captures/Ex8.1.3.png)

# 

# \### 2. Création des branches B et C

# 

# Les étudiants B et C récupèrent le même état initial de `main`.

# 

# Étudiant B :

# 

# ```bash

# git switch main

# git pull origin main

# git switch -c feature/version-b

# ```

# 

# Étudiant C :

# 

# ```bash

# git switch main

# git pull origin main

# git switch -c feature/version-c

# ```

# 

# \### . Modification par B

# 

# B remplace la ligne :

# 

# ```text

# Version : 1.0

# ```

# 

# par :

# 

# ```text

# Version : 2.0 - Etudiant B

# ```

# 

# Puis il exécute :

# 

# ```bash

# git add configuration.txt

# git commit -m "Modification de version par B"

# git push -u origin feature/version-b

# ```

# 

# \### . Modification par C

# 

# C remplace la même ligne par :

# 

# ```text

# Version : 3.0 - Etudiant C

# ```

# 

# Puis il exécute :

# 

# ```bash

# git add configuration.txt

# git commit -m "Modification de version par C"

# git push -u origin feature/version-c

# ```

# 

# \### 5. Fusion de la Pull Request de C

# 

# C crée une Pull Request :

# 

# \- Source : `feature/version-c`

# \- Destination : `main`

# 

# Après revue, la Pull Request est fusionnée.

# 

# La branche `main` contient maintenant :

# 

# ```text

# Nom du projet : ISI Student Manager

# Version : 3.0 - Etudiant C

# Responsable : Groupe ISI

# ```

# 

# \### . Récupération de main par B

# 

# B revient sur sa branche :

# 

# ```bash

# git switch feature/version-b

# git fetch origin

# git merge origin/main

# ```

# 

# Git détecte un conflit parce que B et C ont modifié la même ligne du même fichier.

# 

# \### . Résolution du conflit

# 

# B ouvre le fichier :

# 

# ```bash

# notepad configuration.txt

# ```

# 

# Git affiche des marqueurs de conflit similaires à ceux-ci :

# 

# ```text

# <<<<<<< HEAD

# Version : 2.0 - Etudiant B

# =======

# Version : 3.0 - Etudiant C

# >>>>>>> origin/main

# ```

# 

# B supprime les marqueurs et choisit la version commune demandée :

# 

# ```text

# Nom du projet : ISI Student Manager

# Version : 3.0 - Version collaborative

# Responsable : Groupe ISI

# ```

# 

# \### . Finalisation de la résolution

# 

# B enregistre le fichier et exécute :

# 

# ```bash

# git add configuration.txt

# git commit -m "Resolution du conflit de version"

# git push origin feature/version-b

# ```

# 

# Ensuite, B crée une nouvelle Pull Request :

# 

# \- Source : `feature/version-b`

# \- Destination : `main`

# 

# Après revue et validation, la Pull Request est fusionnée.

# \---

# 

# \## Exercice 9 — Vérification et livrables

# 

# \### 1. Afficher l'historique graphique des commits et les branches

# 

# Nous exécutons :

# 

# ```bash

# git log --oneline --graph --all --decorate

# ```

# 

# Cette commande affiche l'historique des commits sous forme graphique, avec les différentes branches et les fusions.

# 

# Pour afficher les branches :

# 

# ```bash

# git branch -a

# ```

# 

# \### 2. Vérifier que main est à jour

# 

# ```bash

# git switch main

# git pull origin main

# git status

# ```

# 

# La commande `git status` permet de vérifier l'état du dépôt local.

# 

# \### 3. Vérifier les fichiers du projet

# 

# Les fichiers attendus sont :

# 

# ```text

# ISI-Student-Manager-GroupeXX/

# │

# ├── README.md

# ├── index.php

# ├── etudiants.php

# ├── projets.php

# ├── style.css

# └── configuration.txt

# ```

# 

# 

# \### Livrables demandés

# 

# \*\*a. URL du dépôt GitHub du groupe :\*\*

# 

# \[Insérer ici le lien réel du dépôt GitHub]

# 

# \*\*b. Fichier README.md :\*\*

# 

# Ce fichier contient la présentation du groupe, les informations d'installation, les commandes Git utilisées, les réponses aux questions et les étapes de réalisation du TP.

# 

# \---

# 

# \# Conclusion générale

# 

# Ce TP nous a permis de découvrir et de pratiquer la gestion collaborative des versions avec Git et GitHub.

# 

# Nous avons appris à configurer Git, créer un dépôt distant, utiliser SSH, cloner un projet, créer des branches individuelles et travailler simultanément sur différentes fonctionnalités.

# 

# Nous avons également utilisé les Pull Requests pour effectuer des revues de code et intégrer les contributions dans la branche principale.

# 

# Enfin, nous avons provoqué et résolu un conflit de fusion afin de comprendre comment Git gère les modifications concurrentes.

# 

# Cette expérience nous a permis de mieux comprendre l'importance du travail collaboratif, du suivi des modifications et de l'organisation du développement logiciel en équipe.

# 

# \---

# 

# \*\*Fin du TP 3 — Gestion collaborative des versions avec Git et GitHub.\*\*



