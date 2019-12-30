# Project for telenor interview

Here the specified task is completed but there are some lackings . Both of them will be discussed below .

## Procedure

1) The api is built with laravel and tested with postman.
2) The common endpoint is /values.
3) The ttl feature can be activated by visitinng the endpoint /delete.
4) The sql file is inserted with the project

## Lackins
1) It doesn't autometically delete the expired data . To do that automnaticallt  First i wanted to schedule a artisan command call (queue:work).
2) Then it will periodically run the queued jobs . But i couldn't add cronjob locally . So did it manually . 
