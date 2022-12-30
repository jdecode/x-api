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

## Subsequent Run : E.g. after system restart (if the container is not up already)
```
docker-compose up -d
```


Admin URL (also accessible from the above link) : `http://100.10.1.1/admin`

Admin credentials : `admin@admin.com / admin`



Everything should be working fine. If not, please open an issue.


