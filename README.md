# Slim Framework 3 Perfumado
    
Skeleton based on Slim 3.
    
## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project lindalberto/php-slim [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands 

	cd [my-app-name]
	php composer.phar start

Run this command in the application directory to run the test suite

	php composer.phar test

That's it! Now go build something cool.

###Estruturas criadas

    Main
        * Project - Remove o que estava na index e agrupa numa classe unica, tirando necessidade do arquivo settings, dependencies e routes.
            No run é possível adicionar tambem middlewares.
        * Rest - Classe abtrata para ser utilizada no controle dos endpoints, com o app injetado.
        * Routes - Utiliza essa classe de forma injetável para informar as rotas. Cada endpoint rest pode ter seu proprio.  
    Rest
        ** alocação das classes de controle    
    Service
        ** alocação das classes de serviço
