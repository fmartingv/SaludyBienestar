# 🌿 Salud y Bienestar - Desarrollo de Sitio Web 🌐

¡Bienvenido al repositorio del proyecto **Salud y Bienestar**! Este sitio web combina funcionalidad, diseño y tecnología moderna para ofrecer una experiencia optimizada para los usuarios. 🚀

## 🗂️ Estructura del Sitio Web

El sitio incluye las siguientes páginas clave:

1. **🏠 Inicio**:  
   - Vista general del sitio.  
   - Ofertas especiales destacadas.  
   - Mapa interactivo que muestra la ubicación en Santiago.  

2. **🛍️ Productos**:  
   - Catálogo de productos almacenados en la base de datos.  

3. **👥 Nuestro Equipo**:  
   - Información sobre las personas que forman parte de la empresa.  

4. **📩 Contacto**:  
   - Formulario para enviar mensajes con nombre y correo electrónico.  
   - Los mensajes se almacenan en la base de datos.  

5. **ℹ️ Información**:  
   - Detalles sobre las políticas de la empresa.  

---

## ⚙️ Configuración del Sistema

El servidor web está configurado con **Nginx**, y la base de datos utiliza **PostgreSQL**. Para inicializar el sistema, se utiliza un script que carga datos iniciales, como los productos, el equipo de trabajo y los mensajes.

---

## 🐳 Contenerización con Docker

El proyecto está completamente contenerizado con **Docker**. Esto incluye:  
- Un servidor web basado en Nginx.  
- Una base de datos PostgreSQL para almacenar información.  
- Herramientas de monitorización como Grafana y Prometheus.  
- Un sistema de logs configurado con ELK Stack (Elasticsearch, Logstash, Kibana).  

---

## ☁️ Despliegue en AWS

El proyecto se despliega en AWS creando una instancia configurada con Docker y Git. Una vez configurada, los contenedores se ejecutan para lanzar el sitio web. Los usuarios pueden acceder al sitio mediante la dirección IP pública asignada a la instancia.

---

## 📊 Monitorización en Producción

El sistema incluye monitorización avanzada:  
- **Prometheus y Grafana**: Exportadores configurados para recopilar métricas de Nginx y PostgreSQL. Los datos se visualizan en dashboards de Grafana.  
- **ELK Stack**: Gestiona los logs de la página web, proporcionando detalles de las sesiones y actividades de los usuarios.

---

## 📋 Requisitos

Para ejecutar este proyecto, necesitas:  
- Tener Docker y Docker Compose instalados.  
- Acceso a una instancia de AWS configurada para el despliegue.  
- Configuración de credenciales para la base de datos PostgreSQL.

---

## 💻 Tecnologías Usadas

- Docker  
- Nginx  
- PostgreSQL  
- Prometheus & Grafana  
- ELK Stack (Elasticsearch, Logstash, Kibana)  

---

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Si deseas colaborar, abre un issue o crea un pull request.


---


🎉 ¡Gracias por visitar este proyecto!
