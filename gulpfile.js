"use strict";

var gulp     = require('gulp'),
    gulpExec = require('gulp-exec'),
    exec     = require('child_process').exec,
    merge    = require('merge-stream');

/**
 * ============================================================================
 * KONFIGURASI DATABASE
 * ============================================================================
 */
var DB = {
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
gulp.task('init', [ 'gulpModulUser' ], function() {
  // Install package NPM yang dibutuhkan
  // Init Database
  // Init Test Database
});

/**
 * ============================================================================
 * Init Database
 * ============================================================================
 *
gulp.task('initDb', shell.task(
  [
    // Migrasi modul User
    './yii migrate/up --migrationPath="@vendor/noyii/user/migrations" --interactive=0',
    // Migrasi modul Setting
    './yii migrate/up --migrationPath="@vendor/noyii/settings/migrations" --interactive=0',
    // Migrasi modul master
    './yii migrate/up --migrationPath="@vendor/noyii/master/migrations" --interactive=0',
    // Import data2 modul master
    'gulp --gulpfile="vendor/noyii/master/gulpfile.js" initSql --db ' + DB.name + ' -u ' + DB.user + ' -p ' + DB.password,
  ],
  {
    cwd: "./app",
    verbose: true
  }
));
gulp.task('initTestDb', shell.task(
  [
    // Migrasi modul User
    './tests/bin/yii migrate/up --migrationPath="@vendor/noyii/user/migrations" --interactive=0',
    // Migrasi modul Setting
    './tests/bin/yii migrate/up --migrationPath="@vendor/noyii/settings/migrations" --interactive=0',
    // Migrasi modul master
    './tests/bin/yii migrate/up --migrationPath="@vendor/noyii/master/migrations" --interactive=0',
    // Import data2 modul master
    'gulp --gulpfile="vendor/noyii/master/gulpfile.js" initSql --db ' + DB.nameTest + ' -u ' + DB.user + ' -p ' + DB.password,
  ],
  {
    cwd: "./app",
    verbose: true
  }
));
*/
gulp.task('initDb', [ 'migrateMasterData' ]);
// Migrasi modul User
gulp.task('migrateUser', function(cb) {
  exec("./yii migrate/up --migrationPath='@vendor/noyii/user/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Migrasi modul Setting
gulp.task('migrateSetting', [ 'migrateUser' ], function(cb) {
  exec("./yii migrate/up --migrationPath='@vendor/noyii/settings/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Migrasi modul Master
gulp.task('migrateMaster', [ 'migrateSetting' ], function(cb) {
  exec("./yii migrate/up --migrationPath='@vendor/noyii/master/migrations' --interactive=0", function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
// Import data2 modul Master
gulp.task('migrateMasterData', [ 'migrateMaster' ], function(cb) {
  exec("gulp --gulpfile='vendor/noyii/master/gulpfile.js' initSql --db " + DB.name + " -u " + DB.user + " -p " + DB.password, function(err, stdout, stderr) {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});
