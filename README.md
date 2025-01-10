# Chall_Reseau_Moyen

Pour build l'image docker <br>
>  docker build -t name_of_image . <br>
Exemple <br>
>  docker build -t socket . <br><br>

Pour lancer l'image <br>
>  docker run -d -p 8080:80 -p 12345:12345 --name socket socket <br>
