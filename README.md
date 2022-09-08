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

## Subsequent runs:
```
http://22.95.1.1
```

Everything should be fine. If not, please open an issue.


![lbp-homepage](https://user-images.githubusercontent.com/37613346/189113557-2204e9fa-7a62-4c58-b3be-276cad36ef37.png)
