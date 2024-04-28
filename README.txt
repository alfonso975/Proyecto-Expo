README
Para comenzar con la ejecucion del sitio web se coloca la carpeta proyecto en la siguiente ruta:
C:\xampp\htdocs
es importante que se activen los servicios de apache y mysql que proporciona XAMPP.

una vez colocada la carpeta, se abre el navegador y escribe en la siguiente ruta
localhost/proyecto/index.php
de esa manera se visualizará el sitio. 
Para la base de datos abrimos workbench MySql iniciando con el usuario 'root' y la contraseña
'escom' (esto es para la ejecucion en el laboratorio de computo).
Creamos una base de datos de la siguente manera:
	create database users;
	use users;
Se ejecutará la conexión y las tablas se crearan de manera automatica con la ejecuacion del proyecto.

**Título del Proyecto:** Proyecto Expo: Plataforma de Apoyo para Curso Digital de Fundamentos de Diseño Digital

**Descripción:**
Proyecto Expo es una plataforma diseñada para brindar apoyo a un curso digital centrado en la materia de fundamentos de diseño digital. Con un enfoque dinámico que incorpora juegos, materiales de apoyo como videos y libros en formato PDF, la plataforma proporciona una experiencia educativa interactiva y enriquecedora para los usuarios. Además, Proyecto Expo permite la administración eficiente de la información de los usuarios, incluyendo la gestión de perfiles, puntuaciones y progreso del curso.

**Características Clave:**
1. **Juegos Dinámicos:** Incorporación de juegos interactivos para mejorar la experiencia de aprendizaje y fomentar la participación de los usuarios.
2. **Material de Apoyo:** Acceso a videos y libros en formato PDF que complementan el contenido del curso, proporcionando recursos adicionales para el aprendizaje.
3. **Gestión de Usuarios:** Funciones de PHP para manejar el envío y almacenamiento de imágenes de perfil de usuario, así como para administrar la información de manera eficiente.
4. **Puntuación y Progreso:** Sistema de puntuación para evaluar el desempeño de los usuarios y seguimiento del progreso del curso a lo largo del tiempo.
5. **Autenticación y Sesiones:** Utilización de sesiones de PHP para mantener el estado del usuario y validar la autenticación del administrador, garantizando la seguridad y la privacidad de la plataforma.
6. **Gestión de Contenido Multimedia:** Funciones de PHP para leer y almacenar contenido multimedia, como imágenes, utilizando técnicas de seguridad para proteger la integridad de los datos.

**Tecnologías Utilizadas:**
- **PHP:** Para el manejo de la lógica del servidor y la interacción con la base de datos, incluyendo funciones para el manejo de sesiones, autenticación y gestión de contenido multimedia.
- **HTML y CSS:** Para la estructura y el diseño de la plataforma web, asegurando una presentación visual atractiva y coherente.
- **JavaScript:** Para la implementación de funcionalidades interactivas y dinámicas en el lado del cliente.
- **MySQL:** Para el almacenamiento eficiente y seguro de la información de los usuarios y el contenido del curso.
- **Técnicas de Seguridad PHP:** Uso de funciones como addslashes() para escapar caracteres especiales y prevenir inyecciones de SQL, garantizando la integridad de los datos almacenados en la base de datos.

**Objetivo Final:** 
Facilitar el aprendizaje y la enseñanza de los fundamentos de diseño digital a través de una plataforma interactiva y educativa. Con Proyecto Expo, los estudiantes tienen acceso a recursos variados y actividades dinámicas que enriquecen su experiencia de aprendizaje de manera significativa.

