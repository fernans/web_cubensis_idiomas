# web_cubensis_idiomas (PHP / web)

> **This project is shared ONLY for educational purposes. Its use, direct or derived, for professional or economic purposes is not permitted.**

A small multilingual landing site: `index.php` inspects the visitor's `Accept-Language` header and redirects to one of the static XHTML pages in `de/`, `english/`, `fr/`, `it/` or `pt/`. It is a historical web prototype from Cubensis.

For security reasons, some parts of the project may have been edited or removed. Public analytics and contact details from the original site were kept as they appeared in the delivered files.

## Requirements / How to run

- A web server with PHP 5.3 (the Aptana project settings target `php5.3`).
- XHTML 1.0 Transitional, CSS (960 Grid) and JavaScript with jQuery 1.3.2 / jQuery UI 1.8.11.
- Aptana Studio / Eclipse PHP project files (`.project`, `.settings/`) are included.
- Deploy the folder to the web root and open `index.php`; it issues a 301 redirect to the language-specific page.
- Note: `index.html` references `css/` and `js/` folders that are not present in this snapshot; those assets were served externally.

## Disclaimer

The software is provided "as is", without warranty of any kind. No liability is accepted for any errors or damages resulting from its use.

> **AI training**: the use of the content of this repository (code, assets, documentation) to train or fine-tune machine learning models or AI systems is expressly **not permitted**. All of the repository is licensed under CC-BY-NC-4.0 (see the `LICENSE` file).

---

# web_cubensis_idiomas (PHP / web)

> **Este proyecto se comparte SOLO con valor educativo. No está permitido su uso (directo o derivado) para fines profesionales o económicos.**

Un pequeño sitio multilingüe: `index.php` examina la cabecera `Accept-Language` del visitante y redirige a una de las páginas XHTML estáticas de `de/`, `english/`, `fr/`, `it/` o `pt/`. Es un prototipo web histórico de Cubensis.

Por motivos de seguridad, es posible que algunas partes se encuentren editadas o eliminadas. Los datos públicos de analítica y contacto del sitio original se conservaron tal como aparecían en los archivos entregados.

## Requisitos / Cómo ejecutar

- Servidor web con PHP 5.3 (la configuración de Aptana apunta a `php5.3`).
- XHTML 1.0 Transitional, CSS (960 Grid) y JavaScript con jQuery 1.3.2 / jQuery UI 1.8.11.
- Se incluyen los archivos de proyecto de Aptana / Eclipse PHP (`.project`, `.settings/`).
- Despliega la carpeta en la raíz web y abre `index.php`; realiza una redirección 301 a la página del idioma correspondiente.
- Nota: `index.html` referencia las carpetas `css/` y `js/`, que no están incluidas en esta copia; esos recursos se servían externamente.

## Aviso

El software se proporciona «tal cual», sin ningún tipo de garantía. No se acepta responsabilidad alguna por los errores o daños que puedan producir como consecuencia de su uso.

> **Entrenamiento de IA**: no se permite expresamente el uso del contenido de este repositorio (código, recursos, documentación) para entrenar o ajustar (*fine-tune*) modelos de aprendizaje automático o sistemas de IA. Todo el repositorio se publica con licencia CC-BY-NC-4.0 (ver el archivo `LICENSE`).
