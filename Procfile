#release: bash ./.deploy/commands/check_last_commit_status.sh && bash ./.deploy/commands/check_commits_stats.sh && bash ./.deploy/commands/backup_database.sh && 
release: php artisan migrate --force
web: vendor/bin/heroku-php-apache2 public/
worker: php artisan queue:listen --tries=3 --timeout=3600

