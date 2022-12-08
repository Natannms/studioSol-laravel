
<p  align="center"><a  href="https://laravel.com"  target="_blank"><img  src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"  width="400"  alt="Laravel Logo"></a></p>

  ##  Studio Sol Api 

<p  align="center">

<a  href="https://travis-ci.org/laravel/framework"><img  src="https://travis-ci.org/laravel/framework.svg"  alt="Build Status"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://img.shields.io/packagist/dt/laravel/framework"  alt="Total Downloads"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://img.shields.io/packagist/v/laravel/framework"  alt="Latest Stable Version"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://img.shields.io/packagist/l/laravel/framework"  alt="License"></a>

</p>

  


### Requisitos

-  [PHP 8.0.2 ou superior ](https://www.php.net/archive/2022.php#2022-12-08-1).

-  [Composer](https://getcomposer.org/download/).

- Laravel 9 ou superior [Laravel Document](https://laravel.com/docs/9.x) 

##  Running Api

 ### Clonando o projeto
 
  <code>
	 git clone https://github.com/Natannms/studioSol-laravel.git
</code>

### Rodando o Projeto
Acesse o diretório do projeto
<code>
	cd studioSol-laravel
</code>
use os comando
<code>
composer install
</code>

caso necessário use o comando
<code>
composer update
</code>

Rode o projeto com o comando laravel
<code>
php artisan serve
</code>
  
a Api pode ser acessada via postman, insominia thunderclient, entre outros programas do tipo, de sua preferência.

##  URL REQUEST:
http://localhost:8000/verify

Exemplo de requisição:
URL: http://localhost:8080/verify 
Method: POST
<code>
{ 
"password": "TesteSenhaForte!123&", 
"rules": [ 
		{"rule": "minSize","value": 8}, 
		{"rule": "minSpecialChars","value": 2}, 
		{"rule": "noRepeted","value": 0},
		 {"rule": "minDigit","value": 4} 
		 ] 
	}
</code>

Exemplo de resposta:
<code>
	{
	"verify": false,
	"noMatch": [
		"minDigit"
	]
}
</code>
