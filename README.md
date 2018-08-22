## Testing Suite

**PHP testing** with [Codeception](https://codeception.com/) provides high-level domain language for tests. Tests are represented as a set of user's actions.

This repo uses a [WordPress extension](https://codeception.com/for/wordpress) off of Codeception.

**Includes:** Browser Testing , Framework Testing, API Testing, Unit and Integration Testing, Behavior Driven Development

### Requirements
- Homebrew
- Composer

Setup is based off the [wiki WordPress mulitsite](https://wiki.formulafolios.com/view/WordPress_Multisite#) setup.

### Setup

- **Clone Repo**

       git clone git@github.com:spence-man/ff-wp-testing-suite.git

- **Install Codeception with WordPress**

      composer install
      composer update
      echo "alias codecept=./vendor/bin/codecept" >> ~/.bash_profile
      codecept --version

- **Install Testing Tools**

      brew update
      brew install selenium-server-standalone
      brew services start selenium-server-standalone
      brew cask install chromedriver
      brew install phantomjs

- **Setup test database in MAMP MySQL**

      # /Applications/MAMP/Library/bin/mysql
      CREATE DATABASE ffwpcore_test;
      GRANT ALL PRIVILEGES ON ffwpcore_test.* TO "user"@"localhost" IDENTIFIED BY "password";

      FLUSH PRIVILEGES;
      EXIT

- **Create WordPress Dump and move to `/tests/_data`:**

      /Applications/MAMP/Library/bin/mysqldump -u yourUser -p --opt yourdb > dump.sql
      mv dump.sql ~/ff-wp-testing-suite/tests/_data/dump.sql

- **Based on your setup, verify and/or modify configuration set in `ff-wp-testing-suite/.env`**

      # Example
      WP_ROOT_FOLDER="/path/to/your/wordpress"
      DB_USER="your WordPress DB User"
      DB_PASSWORD="your WordPress DB Password"
      WP_URL="http://localhost"

### Run Automated Tests

**Run:**

    codecept run acceptanceRWA
    codecept run acceptanceRWA expectAdminLoginCest.php  # Run a specific file

This command will run the acceptance test for Retirement Wealth Academy.
Replace `acceptanceRWA` with `acceptanceBrowserRWA`,`acceptancePhantomJsRWA`, `functionalRWA`,`unitRWA`,`wpunitRWA` to run those suites.


