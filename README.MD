## Install

``` git clone https://github.com/tony-garand/docker-wordpress.git```

``` docker compose up```

go to:

```localhost:8000```

install wordpress

## Repo Structure

backend (houses wordpress includes/admin)
frontend (houses plugins and themes)

## Important

If MySQL does not load with the docker image and if you have the newest mac with the M1 remove line 12 in the docker-compose.yml file
```platform: linux/amd64```
