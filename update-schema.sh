[honza@allpassed article_repository]$ sudo docker-compose run php bash
Starting database_host ... done
root@76cfa7b6cffa:/var/www/html# ls
root@76cfa7b6cffa:/var/www/html# cd /code
root@76cfa7b6cffa:/code# /code/vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
Nothing to update - your database is already in sync with the current entity metadata.
root@76cfa7b6cffa:/code# 
