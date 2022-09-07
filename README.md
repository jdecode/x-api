## First Run : One-command-to-rule-them-all
```
git clone git@github.com:jdecode/the-dark-light.git \
&& cd the-dark-light \
&& docker-compose up --build -d \
&& docker-compose exec the-dark-light-api composer install \
&& docker-compose exec the-dark-light-api composer run dev-setup \
&& git config core.filemode false 
```

```
http://220.95.1.1
```

## Subsequent runs:
```
http://220.95.1.1
```

Everything should be fine. If not, please open an issue.
