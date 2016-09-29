# Materialize Sage
WordPress starter theme with a modern front-end development workflow. Based on HTML5 Boilerplate, gulp, Bower, and Materialize! You can learn more about the front end Materialize css framework here: http://materializecss.com/ 

## Requirements

Make sure all dependencies have been installed before moving on:

* PHP >= 5.5.x
* Composer
* Node.js >= 4.5

## Theme development
Materialize Sage uses gulp as its build system and Bower to manage front-end packages.

#### Install gulp and Bower
Building the theme requires node.js. We recommend you update to the latest version of npm: npm install -g npm@latest.

#### From the command line:
Install gulp and Bower globally with 
```
npm install -g gulp bower
```
Navigate to the theme directory, then run  
```
npm install && bower install && gulp
```
You now have all the necessary dependencies to run the build process.
#### Available gulp commands
* gulp — Compile and optimize the files in your assets directory
* gulp watch — Compile assets when file changes are made
* gulp --production — Compile assets for production (no source maps).
