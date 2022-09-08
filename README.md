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

## Subsequent runs:
```
http://22.95.1.1
```

Everything should be fine. If not, please open an issue.
