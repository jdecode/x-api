## First Run : One-command-to-rule-them-all
```
git clone git@github.com:founderandlightning/fl-laravel_boilerplate.git \
&& cd fl-laravel_boilerplate \
&& docker-compose up --build -d \
&& docker-compose exec laravel-api composer install \
&& docker-compose exec laravel-api composer run dev-setup \
&& git config core.filemode false 
```

```
http://22.95.1.1
```

Admin URL (also accessible from the above link) : `http://22.95.1.1/admin`

Admin credentials : `admin@admin.com / admin`


Everything should be working fine. If not, please open an issue.


### Quick-docs


Port mappings in `docker-compose.yml` are as following:
1. **295 : 80**
   1. HTTP
   1. Service-and-container name = `laravel-api`
   1. IP = `22.95.1.1`
1. **296 : 296**
   1. Vite
   1. Config file : `vite.config.js`
1. **297: 5432**
   1. Postgres
   1. Service-and-container name = `laravel-pg`
   1. IP = `22.95.1.2`


Files to update service/container names:
1. `docker-compose.yml`
1. `composer.json`
1. `.circleci/config.yml`
1. `.github/workflows/ci.yml`

Files to update IP address:
1. `.env.example`
1. `.env.testing`

Files to update port numbers:
1. `vite.config.js`


### Screenshots

#### Homepage
![lbp-homepage](https://user-images.githubusercontent.com/37613346/189113557-2204e9fa-7a62-4c58-b3be-276cad36ef37.png)

#### Footer
![lbp-footer](https://user-images.githubusercontent.com/37613346/189152124-2b6aca2f-a0d9-4ae1-ad30-39c1fd06e234.png)

