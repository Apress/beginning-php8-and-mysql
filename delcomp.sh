#!/bin/bash
# Stop all containers
docker stop $(docker ps -a -q)
# Delete all containers
docker rm $(docker ps -a -q)
# Delete all images
# docker rmi $(docker images -q)
docker system prune -a -f
docker volume prune -f
