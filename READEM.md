Qu'est-ce qu'une API ?

API signifie « interface de programmation d'application » en français. Les API sont un ensemble de fonctions et de procédures qui permettent de créer des applications. Elles accèdent aux données et aux fonctionnalités d'autres applications, services ou systèmes d'exploitation.
elle permettre de dialoguer entre deux applications elle a un rôle d'intermédiare aussi facilite l'accés aux services d'une application .
Les API representent une façade grace à laquelle d'autre application propose des service web  elle permettent d'établir une communication avec la base de données et recupérer les données en fonction ce que nous avons besoin.

Le fonctionnement et utilisation:

Les API permettent d'accéder au fonctions ou aux données d'une application à distance à partir d'une autre application intermédiare:
dans le cas de notre TP j'ai crée un API qui va nous permettre de récupérer Nom , code postal , longitude et latitude de l'ensemble des villes sur le territoire Français sous fichier json.
j'ai utilisé l'application POSTMAN  j'ai pu récupérer les données de toutes les villes par la methode GET COLLECTION ou une seule ville par la methode GET {id}.

{
    "@context": "/api/contexts/City",
    "@id": "/api/cities/55",
    "@type": "City",
    "id": 55,
    "name": "Meunier",
    "zip": "15746",
    "lon": "23.84748",
    "lat": "83.70181"
}
