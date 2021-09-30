# Heroku apps

resource "heroku_app" "staging" {
  name   = var.heroku_staging_app
  region = var.heroku_region

  #set config variables
  config_vars = {
    APP_ENV = "staging"
    DB_CONNECTION = "pgsql"
    APP_KEY = "enter-app-key-here"
  }

  buildpacks = var.heroku_app_buildpacks
}

resource "heroku_app" "production" {
  name   = var.heroku_production_app
  region = var.heroku_region

  #set config variables
  config_vars = {
    APP_ENV = "production"
    DB_CONNECTION = "pgsql"
    APP_KEY = "enter-app-key-here"
  }

  buildpacks = var.heroku_app_buildpacks
}
