# Medico_Platform
To run this project please : 

# first step:
-> create an image for prediction disease service:
** docker build --tag disease_prediction .
** create an image for medical record service :
-> docker build --tag medical_record .
** create an image for web service 
-> docker build --tag web .
** create an image for authentication service 
-> docker build --tag auth .


# second step:
** build the  containers 
-> docker compose up

ps: this project have some env variables :
* cloudinay account key ;
* mongodb atlas key
* ...
