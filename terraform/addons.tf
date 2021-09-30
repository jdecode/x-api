# Addons

# staging Addons
resource "heroku_addon" "database-staging" {
  app  = heroku_app.staging.name
  plan = var.heroku_staging_database
}
resource "heroku_addon" "newrelic-staging" {
  app = heroku_app.staging.name
  plan = var.heroku_staging_newrelic
}
resource "heroku_addon" "papertrail-staging" {
  app = heroku_app.staging.name
  plan = var.heroku_staging_papertrail
}
resource "heroku_addon" "rollbar-staging" {
  app = heroku_app.staging.name
  plan = var.heroku_staging_rollbar
}



# Production Addons
resource "heroku_addon" "database-production" {
  app  = heroku_app.production.name
  plan = var.heroku_production_database
}
resource "heroku_addon" "newrelic-production" {
  app  = heroku_app.production.name
  plan = var.heroku_production_newrelic
}
resource "heroku_addon" "papertrail-production" {
  app  = heroku_app.production.name
  plan = var.heroku_production_papertrail
}
resource "heroku_addon" "rollbar-production" {
  app  = heroku_app.production.name
  plan = var.heroku_production_rollbar
}

