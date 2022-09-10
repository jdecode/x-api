# Heroku apps
provider "heroku" {
  email   = var.heroku_account_email
  api_key = var.heroku_api_key
}

resource "heroku_app" "staging" {
  name   = var.heroku_staging_app
  region = var.heroku_region

  #set config variables
  config_vars = {
    APP_NAME = "lbp-staging"
    APP_DEBUG = "false"
    APP_ENV = "staging"
    APP_KEY = "staging-app-key"
    DB_CONNECTION = "pgsql"
    QUEUE_CONNECTION = "database"
    CACHE_DRIVER = "database"
    GITHUB_USERNAME: 'founderandlightning'
    GITHUB_REPONAME: 'fl-laravel_boilerplate'
  }

  buildpacks = var.heroku_app_buildpacks
}

resource "heroku_app" "production" {
  name   = var.heroku_production_app
  region = var.heroku_region

  #set config variables
  config_vars = {
    APP_NAME = "lbp-production"
    APP_DEBUG = "false"
    APP_ENV = "production"
    APP_KEY = "production-app-key"
    QUEUE_CONNECTION = "database"
    CACHE_DRIVER = "database"
    GITHUB_USERNAME: 'founderandlightning'
    GITHUB_REPONAME: 'fl-laravel_boilerplate'
  }

  buildpacks = var.heroku_app_buildpacks
}
