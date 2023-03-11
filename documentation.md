## Tp2 Laravel 


 **Le lien pour accéder à votre site sur webdev:**
*https://e2295542.webdev.cmaisonneuve.qc.ca/laravelDev/*


1. En utilisant les lignes de commande, créer un nouveau projet Laravel nommée Maisonneuve{votre matricule}

```
    composer create-project laravel/laravel Maisonneuve2295542
```


2. En utilisant les lignes de commande, créer les modèles (model: **Etudiant**)
3. En utilisant les lignes de commande, créer les tables  (migration table: **etudiants**)
6. En utilisant les lignes de commande, créer les contrôleurs (controller: **EtudiantController** )

```
    php artisan make:model Etudiant -mrc
```




2. En utilisant les lignes de commande, créer les modèles (model: **Ville**)
3. En utilisant les lignes de commande, créer les tables  (migration table: **villes**)

```
    php artisan make:model Ville -m
```




4. En utilisant les lignes de commande, saisir 15 nouvelles villes
5. En utilisant les lignes de commande, saisir 100 nouveaux étudient

- 1 Au debut j'ai crée EtudiantFactory.php et VilleFactory.php pour mettre les paramettres des fake données

```
    php artisan make:factory EtudiantFactory --model=Etudiant
    php artisan make:factory VilleFactory --model=Ville
```

- 2 Ensuite, j'ai modifié  database/seeders/DatabaseSeeder.php  

```
  public function run()
    {
        Ville::factory()->count(15)->create();

        Etudiant::factory()->count(100)->create([
            'ville_id' => function () {
                return Ville::all()->random()->id;
            },
        ]);    
    }
```
 
 

- 3 Finalement j'ai utilisé la commande pour migrer les tables aves les fake données dans la base de données (sans oublier de mettre le nom de la BD et les params nécessaires dans le .env)


```
    php artisan db:seed 
```





        







