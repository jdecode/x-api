## First Run : One-command-to-rule-them-all
```
git clone git@github.com:jdecode/xdev.git \
&& cd xdev \
&& docker-compose up --build -d \
&& docker-compose exec xdev-api composer install \
&& docker-compose exec xdev-api composer run dev-setup \
&& git config core.filemode false 
```

```
http://100.10.1.1
```

Admin URL (also accessible from the above link) : `http://100.10.1.1/admin`

Admin credentials : `admin@admin.com / admin`


Everything should be working fine. If not, please open an issue.


### Quick-docs


Port mappings in `docker-compose.yml` are as following:
1. **1001 : 80**
   1. HTTP
   1. Service-and-container name = `xdev-api`
   1. IP = `100.10.1.1`
1. **1010 : 1010**
   1. Vite
   1. Config file : `vite.config.js`
1. **1100: 5432**
   1. Postgres
   1. Service-and-container name = `xdev-pg`
   1. IP = `100.10.1.2`


Files to update service/container names:
1. `docker-compose.yml`
1. `composer.json`
1. `.circleci/config.yml`
1. `.github/workflows/ci.yml`

Files to update IP address:
1. `docker-compose.yml`
1. `.env.example`
1. `.env.testing`

Files to update port numbers:
1. `vite.config.js`


#### Default landing page screenshot
<img src="https://user-images.githubusercontent.com/37613346/189156361-97fae29c-ad61-4720-9462-1e6827342391.png" width="600" />

