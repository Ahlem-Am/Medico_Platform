# step 1
  * create landing-page image and prediction-disease image
# step 2
  * create docker-compose.yml 

    version: "3"
        services:
        landing_page:
        # local image
            image: nodejs-local-image
            
            ports:
            - "3000:3000"
        prediction_disease :
        # local image
            image: python-local-image
            ports:
            - "5000:5000"


    * run the docker-compose
      # docker compose up
    * open in the browser 
      # 
    
    