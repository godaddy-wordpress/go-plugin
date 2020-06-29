
## Development

1. Clone the GitHub repository: `git@github.com:godaddy-wordpress/go-plugin.git` into your WordPress installations `wp-content/plugins` directory. The folder name should be `go-plugin`.
2. Browse to the folder in the command line.
3. Run the `composer install` command to install the plugin's development dependencies.

## Development Commands

**Linting and auto-formatting:**

Run `composer lint` to run code styling checks and `composer format` for the auto-formatter to fix what it can.

**Generating the .pot file:**

Run `composer makepot` to generate a new translation `langauges/go-plugin.pot` file.

**Build a release zip file**

Run `composer build-release` to generate a production ready .zip file should you need to.

## Releasing a new version

This repo is utilizing GitHub Actions and the [`10up/action-wordpress-plugin-deploy`](https://github.com/10up/action-wordpress-plugin-deploy) action to push new deployments to the plugin repo. Simply tagging a new release will trigger the workflow and deploy a new version.