# tambourine-backend
#### Camilo Rincón
#### email carincon@gmail.com
#### Teléfono de contacto: 3203443989

Este repositorio fue creado para prueba de intelcost:

- PHP version 7.2.20
- MySql 5.7.26
- This work with my custom MVC
- Servidor Web ninx/1.17.1

### Url configurada localmente, se creo un virtual host.
```sh
http://tambourine.test/
```

### Archivos importantes y rutas
mi MVC el path apunta a la siguientes carpeta, en esta carpeta se tiene que apuntar el document root, esta carpeta cuenta con los assets como lo son js y css
```bash
/Sites/tambourine/public
```
#### Controlladores
Los controladores se encuentran en las siguientes carpeta:
```bash
/Sites/tambourine/app/controllers
```
Aqui esta un controlador para la primera parte del test-backend, otro para Game Rock–paper–scissors y el último para Stop gninnipS My sdroW!

#### Vista
Las views esta configurado por defecto los archivos html se encuentran en las siguientes carpeta:
```bash
/Sites/tambourine/app/views
```

#### Script de base de datos
La base de datos es muy sencilla, tiene una única tabla
y la base de datos se llama tambourine
```bash
CREATE TABLE `people` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_eamil` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

La conexión a la base de datos esta en el archivos
```bash
/Sites/tambourine/app/db/db.php
```