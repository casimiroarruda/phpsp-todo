GDG + PHPSP
==========

GAE e PHP, uma aplicação na prática
---

### O que precisamos localmente?

* PHP >=5.4
  * php-cgi (normalmente encontrado no pacote php5-fastcgi)
* Mysql >= 5.5
* Python **2.7** (para o SDK)
* O SDK
  * Disponível em https://developers.google.com/appengine/docs/php/gettingstarted/installing
  * ou em http://goo.gl/Tl6hwG ;)

### O que encontramos no ambiente do GAE?

#### Extensões
|        |        |         |
|--------|--------|---------|
|apc     |json    |soap     |
|bcmath  |libxml  |xml      |
|calendar|mbstring|xmlreader|
|ctype   |mcrypt  |xmlwriter|
|dom     |memcache|Zip      |
|ereg    |mysql   |zlib     |
|FTP     |OAuth   |         |
|gd      |openssl |         |
|hash    |pcre    |         |
|iconv   |shmop   |         |

#### Variáveis especiais em $_SERVER

* APPLICATION_ID
* HTTP_X_APPENGINE_CITY
* HTTP_X_APPENGINE_CITYLATLONG
* HTTP_X_APPENGINE_COUNTRY
* HTTP_X_APPENGINE_REGION
* ...

#### Streams

* file://
* glob://
* http:// (URLfetch)
* https:// (URLfetch)
* gs:// (Google Cloud Storage)
* php://
* zlib://

#### Limites

|Limite	                    |Qtde
|---------------------------|-------------------------
|request size 	             |32 Mb
|response size 	            |32 Mb
|request duration 	         |60 segundos
|Nº total de arquivos       |10.000 total
|                           |1.000 p/ folder
|Tamanho máximo de arquivo 	|32 Mb
|Tamanho total do app       |1Gb free

#### Google Cloud Storage

Primeiros 5Gb são grátis

#### Blobstorage

Primeiros 5Gb são grátis

#### Datastore

Dados: 1Gb total
Indices: 200
escritas: 50.000
leituras: 50.000

#### API de Email

100 emails, 32/minuto
