# VulnWebAppXssTKF
Token Forgery, XSS Vulnerabilities, Hash Cracking to access admin account 


## Introduction

Bienvenue sur **VulnWebAppXssTKF**, une application PHP vulnérable créée pour tester diverses failles de sécurité telles que le Cross-Site Scripting (XSS), le Cross-Site Request Forgery (CSRF ou Token Forgery), et le crack de hash de mot de passe. Cette application est conçue à des fins éducatives pour apprendre et comprendre les risques de ces vulnérabilités et comment s'en protéger.

## Installation

1. Clonez le repository sur votre machine locale :

    ```
    git clone https://github.com/nathanbvn/VulnWebAppXssTKF.git
    ```

2. Accédez au répertoire du projet :

    ```
    cd VulnWebAppXssTKF
    ```

## Lancement du serveur PHP

Pour exécuter cette application localement, vous pouvez utiliser le serveur PHP intégré. Si vous avez PHP installé sur votre machine, lancez le serveur en utilisant la commande suivante :

```
php -S localhost:8000 -t public
```

## Accès au site

Une fois le serveur lancé, ouvrez votre navigateur et accédez à l'URL suivante :

```

http://localhost:8000/login
```

## Informations de connexion
```
    User :
        Identifiant : user
        Mot de passe : user

    Admin :
        Identifiant : admin
        Mot de passe : abc123
```
## Explication du jeu

Le but de cet exercice est de trouver un moyen de se connecter avec le compte administrateur depuis le compte utilisateur sans disposer du mot de passe admin.
Scénario

    Connectez-vous en tant qu'utilisateur avec les informations suivantes :
        Identifiant : user
        Mot de passe : user

    Ouvrez une nouvelle session de navigation privée et connectez-vous en tant qu'admin :
        Identifiant : admin
        Mot de passe : abc123

    L'administrateur se rend sur le forum pour consulter les messages. En tant qu'attaquant (jouant le rôle de l'utilisateur), vous devez exploiter une vulnérabilité pour usurper l'identité de l'administrateur ou accéder à son compte sans connaître son mot de passe.

Explorez les fonctionnalités de l'application et les mécanismes de sécurité, pour identifier et exploiter les failles potentielles. Bonne chance !
