# Kirby-Bootstrap-Starterkit

- Blueprints with enhanced SEO fields and links to Kirbytext documentation
- Bootstrap via Bower
- Contactform with honeypot
- Columns Kirby plugin with Bootstrap adjustments
- Favicons snippet and demo files
- Grunt minification tasks
- humans.txt
- htaccess redirect non-www to www snippet
- jQuery via Bower
- jQuery snippets for targeting specific classes
- Kirby as submodules
- Kirbytext documentation with tips
- Navbar toogle animation styles

Kudos to all good people mentioned in [humans.txt](https://github.com/NECKRHINOS/kirby-bootstrap-starterkit/blob/master/humans.txt)

Favicons via <http://realfavicongenerator.net>

## About

This is my personal starterkit when working on website projects that are made with Kirby and Bootstrap.

## Requirements

- bower
- git
- npm

## Installation

Execute the following steps in your console at the location where you want the repository to be.

Clone this repository **recursively**, as it includes Kirby as submodules:

    git clone --recursive https://github.com/NECKRHINOS/kirby-bootstrap-starterkit.git

Install npm and bower. This will get you everything provided with the .json files, including Bootstrap and jQuery:

    npm install && bower install

## Done

Start working by creating and modifying .css and .js files in the **partial folders** and make sure you are running Grunt.

    grunt

## Updates

Updating Kirby:

    git submodule foreach --recursive git checkout master
    git submodule foreach --recursive git pull

Updating Bootstrap and jQuery:

    bower update --save

Updating Grunt components:

    npm update --save

## Buy a Kirby license

Don't forget: Kirby's not for free. Please support Bastian's work by buying a license when going live with a site.

http://getkirby.com/buy
