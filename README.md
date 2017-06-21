Basii 2 &mdash; Custom Yii 2 Basic Base Template
================================================

Basii, _basic yii_. Begitulah saya menyebutnya.

Repo ini adalah Basic Template dalam membangun sistem yang saya gunakan untuk
keperluan pribadi. Use at your own risk :p

FITUR
-----
- Extension NoYii Dashboard
- Extension NoYii Common
- Extension NoYii Setting
- Extension NoYii Master
- Extension NoYii User
- Integrasi dengan AdminLTE

STRUKTUR DIREKTORI
------------------

Struktur direktori yang sama dengan [Yii2 Basic Project Template](https://github.com/yiisoft/yii2-app-basic).

REQUIREMENTS
------------

- Vagrant
- Nginx
- PHP 5.4
- MariaDB 10.x
- NPM
- Ruby 2.x

INSTALASI
---------

Buat proyek menggunakan composer

~~~
$ composer create-project --prefer-dist --stability=stable noyii/basii2-basic app
~~~

Install NPM packages

~~~
$ npm install --save-dev
~~~

Install Gulp CLI

~~~
$ npm install -g gulp-cli
~~~

Jalankan init task

~~~
$ gulp init
~~~

LICENSE
-------

The Yii framework is free software. It is released under the terms of
the following BSD License.

Copyright © 2008 by Yii Software LLC (http://www.yiisoft.com)
All rights reserved.

Copyright © 2015 by Novrian Y.F.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.
 * Neither the name of Yii Software LLC nor the names of its
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
