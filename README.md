To skip wordpress and matomo configuration run "bash restore_docker_volumes.sh"

Then run "docker-compose up"


matomo - http://localhost:8080/

wordpress - http://localhost:8081/


If restored volumes are used credentials for wordpress and matomo are the same:

username: hackmotion
password: ^9$(ZdXhISZKB8!Tna

If you are not using volumes provided then you have to setup matomo with Tag manager enabled.
Add a trigger with event name "full-video-watch" and Tag that is triggered by that trigger.
Add a tag manager script in the head section of header.php for the wordpress theme.

Allowed dynamic options are controlled by creating wordpress page with that title.
