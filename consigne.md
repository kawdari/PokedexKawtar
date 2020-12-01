Exercice ForeignKey
Notions :

Relation foreign key
Crud complet
index
show
create
store
edit
update
destroy
Storage file
Route nomées
old
validate(request)
Consignes :

Un crud pour y inscrire des pokémons
Chaque pokémon possède :

- un nom(Le nom des pokémons doivent etre unique)
- un type
- une image
- niveau entre 1 et 100

Un crud pour créer des types exemples :
- Normal
- Combat
- Vol
Poison
Sol
Roche
Insecte
Spectre
Acier
Feu
Eau
Plante
Electrik
Psy
Glace
Dragon
Ténèbres
Fée


Page Index :
On y voit un bouton create et la liste des pokemons avec un bouton show par Pokemon
Pikatchu Electrique Show.
Salameche Feu Show
Carapuce Eau Show
Bulbizare Plante Show
Quand on clique sur show
Page Show :
on doit y voir : l’image , le nom , le type , le niveau et un bouton Edit et Delete
Page Edit :
La même chose que sur show mais dans des inputs avec un bouton UPDATE uniquement
A savoir:
Si on supprime un type d'élément tous les pokémons ayant ce type là se retrouvent avec le type " Sans élément "
Quand on edit un pokémon le select du type doit déjà etre par defaut sur le type du pokémon