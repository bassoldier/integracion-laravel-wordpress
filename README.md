# integracion-laravel-wordpress
Sitio de postulación para Ilógica. Aplicación desarrollada con Laravel 8 y alimentada por páginas creadas desde Wordpress a través de WP API REST.

# Comenzando 🚀
Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

# Pre-requisitos 📋

- PHP 7.4 o superior
- Servidor Apache
- MySQL
- Composer

# Instalación 🔧
- Clonar el repositorio en el directirio htdocs de tu servidor
```
git clone https://github.com/bassoldier/integracion-laravel-wordpress.git
```
- Entrar al directorio app-ilogica\best-ilogica y crear archivo .env (Basarse en el archivo .env.example)
- Definir la ruta de la APP:
```
APP_URL=<URL DIRECTORIO RAÍZ>/app_ilogica/best-ilogica/public/
```
- Agregar KEYS a archivo .env:
```
APPLICATION_PASSWORD_USERNAME = "manager"
APPLICATION_PASSWORD = "8TsN MJxJ Fine prfb Wx8q lKM2"
WORDPRESS_PASSWORD = "123"
```
- Desde la consola de comandos situarse en el directorio: app_ilogica/best-ilogica y ejecutar
```
compsoer install
```
- Crear BDD de nombre wordpress y cargar la bd adjunta en el directorio dump
- Ingresar nombres y credenciales de la BD en el fichero wp-config.php del directorio wordpress
- Para administrar el contenido de la aplicación ingresar a:
```
<URL DIRECTORIO RAÍZ>/worpress/wp-admin
```

Utilizando las credenciales:
- User: "manager"
- Pass: "123"

(Revisar páginas de ejemplo)
