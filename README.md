# Proyecto Tienda de Zapatillas Skechers

**Estado:** En construccion. El proyecto esta migrando su logica de backend para enfocarse en **Java**, dejando atras el enfoque anterior en PHP.

## Descripcion

Aplicacion web de comercio electronico para una tienda de zapatillas. Actualmente cuenta con una base construida en PHP y MySQL que se esta reestructurando para migrar la logica de negocio a Java, manteniendo una arquitectura modular que separa responsabilidades y facilita el mantenimiento.

## Que resuelve

- Gestion de catalogo: productos listados, creacion y eliminacion con soporte para datos de inventario.
- Carrito de compras: manejo de sesion para sumar productos y preparar pedidos.
- Compra final: confirmacion de venta y registro en la base de datos.
- Acceso a datos desacoplado: clases DAO para encapsular las consultas y transacciones SQL.

## Que aporta al negocio

- Mejora de la experiencia de usuario al mantener el carrito activo durante la sesion.
- Codigo mas facil de escalar gracias a una separacion limpia entre logica de negocio, datos y presentacion.
- Base solida para futuros modulos, como login, catalogo avanzado o administracion de stock.

## Tecnologias

- Java (en migracion, futuro nucleo del backend)
- PHP (implementacion actual, en proceso de reemplazo)
- MySQL (persistencia)
- HTML/CSS para la interfaz de usuario
- Estructura modular: `business`, `data`, `service`, `controller`, `public`

## Roadmap

- [ ] Migrar la logica de negocio de PHP a Java
- [ ] Consolidar el acceso a datos bajo un unico enfoque (DAO en Java)
- [ ] Ampliar pruebas y documentacion tecnica

## Como usarlo (version actual)

1. Coloca el proyecto en un servidor PHP local o remoto.
2. Configura la base de datos `tienda_zapatillas` en MySQL (ver `Tienda.sql`).
3. Accede a los archivos desde la carpeta `Front`.
4. Asegurate de que las rutas a imagenes y recursos esten bajo `Front/img`.

## Por que presentarlo

Este proyecto demuestra una implementacion practica de comercio electronico, con enfasis en diseno modular, flujo de compra y manejo de datos, ademas de un proceso activo de migracion tecnologica hacia Java.
