# framework-generator

> A quick and dirty front-end framework/styleguide generator.


## Getting Started

Requirements: npm, gulp-cli

- __Setup:__ `npm install`
- __Development:__ `npm start`
- __Production:__ `npm run build`


## Documentation

### Data
1. Add your own variables/functions to `./src/_includes/app-functions.php`
2. Use them in __Pages__ or __Pattern__ files, ex: `<?php echo $your-variable; ?>`

### Pages
1. Create new pages in `./src/`
2. Update the app menu in `./src/_includes/app-menu.php`

### Patterns
1. Create new patterns in `./src/_patterns/`
2. Use snippet within pages, ex: `<?php require '_patterns/your-pattern.php' ?>`

### Styles
- Create SCSS files in `./src/sass/`

### Scripts
- Create Javascript files in `./src/js/`
