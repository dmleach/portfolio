# Create the .env file if needed
if [[ ! -f ./.env ]];
then
  echo "Creating environment file from example";
  cp ./.env.example ./.env;
fi

# Install the Composer dependencies
echo "Installing dependencies via Composer";
composer install --quiet;

# Generate the site's encryption key
php -q artisan key:generate;

# Install the site
echo "Installing the site";
npm install --silent;

# Run the site in development mode
echo "Running the site in development mode";
npm run dev --silent;

# Reset the cache
echo "Clearing the cache";
php -q artisan cache:clear;

# Change the owner of everything in the directory to the Apache user and group
echo "Changing ownership of the directory to the Apache user and group";
chown www-data:www-data . -R --silent;
