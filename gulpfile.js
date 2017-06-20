"use strict";

var gulp     = require('gulp'),
    gulpExec = require('gulp-exec'),
    exec     = require('child_process').exec,
    merge    = require('merge-stream'),
    compass  = require('gulp-for-compass');

/**
 * ============================================================================
 * KONFIGURASI DATABASE
 * ============================================================================
 */
var DB = {
  host: "10.0.2.2",                 // Host Database
  name: "basii2_basic",             // Nama Database
  nameTest: "basii2_basic_test",    // Nama Database Test
  user: "basii2_basic",             // User Database
  password: "basii2_basic"          // Password Database
};

/**
 * ============================================================================
 * INIT TASK
 * ============================================================================
 */
gulp.task('init', [ 'initDb', 'initDbTest' ], function() {
  // Init Database
  // Init Test Database
});

/**
 * ============================================================================
 * Init Database Utama
 * ============================================================================
 */
gulp.task('initDb', [ 'migrateMasterData' ], function() {
  // Migrasi Yii, Import Data, dll.
});
// Migrasi modul User ke database utama
gulp.task('migrateUser', function(cb) {
  exec("./yii migrate/up --migrationPath='@vendor/noyii/user/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Migrasi modul Setting ke database utama
gulp.task('migrateSetting', [ 'migrateUser' ], function(cb) {
  exec("./yii migrate/up --migrationPath='@vendor/noyii/settings/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Migrasi modul Master ke database utama
gulp.task('migrateMaster', [ 'migrateSetting' ], function(cb) {
  exec("./yii migrate/up --migrationPath='@vendor/noyii/master/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Import data2 modul Master ke database utama
gulp.task('migrateMasterData', [ 'migrateMaster' ], function(cb) {
  return gulp.src('./vendor/noyii/master/migrations/sql/*.sql')
    .pipe(gulpExec("mysql -h " + DB.host + " -u " + DB.user + " -p" + DB.password + " " + DB.name + " < <%= file.path %>"))
    .pipe(gulpExec.reporter());
});

/**
 * ============================================================================
 * Init Database Test
 * ============================================================================
 */
gulp.task('initDbTest', [ 'migrateMasterDataTest' ], function() {
  // Migrasi Yii, Import Data, dll.
});
// Migrasi modul User ke database test
gulp.task('migrateUserTest', function(cb) {
  exec("./tests/bin/yii migrate/up --migrationPath='@vendor/noyii/user/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Migrasi modul Setting ke database test
gulp.task('migrateSettingTest', [ 'migrateUserTest' ], function(cb) {
  exec("./tests/bin/yii migrate/up --migrationPath='@vendor/noyii/settings/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Migrasi modul Master ke database test
gulp.task('migrateMasterTest', [ 'migrateSettingTest' ], function(cb) {
  exec("./tests/bin/yii migrate/up --migrationPath='@vendor/noyii/master/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Import data2 modul Master ke database test
gulp.task('migrateMasterDataTest', [ 'migrateMasterTest' ], function(cb) {
  return gulp.src('./vendor/noyii/master/migrations/sql/*.sql')
    .pipe(gulpExec("mysql -h " + DB.host + " -u " + DB.user + " -p" + DB.password + " " + DB.nameTest + " < <%= file.path %>"))
    .pipe(gulpExec.reporter());
});

/**
 * ============================================================================
 * CSS TASK
 * ============================================================================
 */
gulp.task('css', function() {
  var main = gulp.src('./web/sass/*.scss')
    .pipe(compass({
      sassDir: "web/sass",
      cssDir: "web/css",
      fontsDir: "web/fonts",
      imagesDir: "web/img",
      javascriptsDir: "web/js",
      outputStyle: "compressed",
      relativeAssets: true,
      noLineComments: true,
      force: true
    }));

  return main;
});
gulp.task('cssDev', function() {
  var main = gulp.src('./web/sass/*.scss')
    .pipe(compass({
      sassDir: "web/sass",
      cssDir: "web/css",
      fontsDir: "web/fonts",
      imagesDir: "web/img",
      javascriptsDir: "web/js",
      outputStyle: "nested",
      relativeAssets: true,
      noLineComments: false,
      force: true
    }));

  return main;
});

/**
 * ============================================================================
 * DEFAULT TASK
 * ============================================================================
 */
gulp.task('default', [ 'css' ], function() {});

/**
 * ============================================================================
 * WATCH TASK
 * ============================================================================
 */
gulp.task('w', function() {
  gulp.watch('./web/sass/*.scss', [ 'cssDev' ]);
});
