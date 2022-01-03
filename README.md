## 1. Installation

### Step 1: Cloner le projet

``` bash
$ git clone https://github.com/mb-x/antadis.git
```

### Step 2: Installer les repos
Il faut se déplacer dans le dossier de projet
``` bash
$ cd antadis
```
Ensuite, installer les repos avec composer
``` bash
$ composer install 
```

### Step 3: Modifier le fichier .env
Dans le fichier .env, modifier cette ligne pour mettre les bonnes valeurs :

``` bash
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
```

Je ne voulais pas mettre les valeurs qui m'ont été communiquées car c'est un repo public.
