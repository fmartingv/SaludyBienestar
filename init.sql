-- Create categorias table
CREATE TABLE IF NOT EXISTS categorias (
 id SERIAL PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL
);

-- Create productos table
CREATE TABLE IF NOT EXISTS productos (
 id SERIAL PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL,
 descripcion TEXT,
 precio DECIMAL(10,2) NOT NULL,
 categoria_id INTEGER REFERENCES categorias(id),
 stock INTEGER NOT NULL,
 es_destacado BOOLEAN DEFAULT false,
 marca VARCHAR(100),
 origen VARCHAR(100),
 fecha_agregado TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Nueva columna
);

-- Create mensajes_contacto table
CREATE TABLE IF NOT EXISTS mensajes_contacto (
 id SERIAL PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL,
 email VARCHAR(100) NOT NULL,
 mensaje TEXT NOT NULL,
 fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 procesado BOOLEAN DEFAULT false,
 respuesta TEXT
);

-- Create trabajadores table
CREATE TABLE IF NOT EXISTS trabajadores (
 id SERIAL PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL,
 cargo VARCHAR(100) NOT NULL,
 descripcion TEXT,
 imagen_url VARCHAR(255)
);

-- Insertar categorías
INSERT INTO categorias (nombre) VALUES
 ('Frutas y Verduras'),
 ('Lácteos y Huevos'),
 ('Carnes'),
 ('Pescados'),
 ('Panadería'),
 ('Congelados'),
 ('Bebidas'),
 ('Snacks'),
 ('Conservas');

-- Insertar productos
INSERT INTO productos (nombre, descripcion, precio, categoria_id, stock, es_destacado, marca, origen) VALUES
 ('Manzanas', 'Manzanas frescas de temporada', 1.50, 1, 200, true, 'Frutas Galicia', 'Galicia'),
 ('Leche Fresca', 'Leche 100% gallega', 0.80, 2, 150, true, 'Granja Local', 'Galicia'),
 ('Pollo de Corral', 'Pollo criado en libertad', 5.00, 3, 50, false, 'Avícola del Norte', 'Asturias'),
 ('Pan Integral', 'Pan artesanal integral', 2.20, 5, 100, true, 'Panadería Artesana', 'Galicia'),
 ('Empanada de carne', 'Empanada con relleno de carne', 11.00, 5, 9, false, 'Panadería Pepito', 'Galicia'),
 ('Licorcafé', 'Botella de 1l de licorcafé casero', 8.55, 7, 45, true, 'Destilerías Ourense', 'Ourense');

-- Insertar mensajes de contacto
INSERT INTO mensajes_contacto (nombre, email, mensaje, procesado) VALUES
 ('Juan Pérez', 'juan@example.com', 'Consulta sobre productos frescos', false),
 ('María García', 'maria@example.com', 'Quería saber sobre envíos', false),
 ('Carlos Rodríguez', 'carlos@example.com', 'Sugerencia para nuevos productos', true);

-- Insertar trabajadores
INSERT INTO trabajadores (nombre, cargo, descripcion, imagen_url) VALUES
 ('Dario Burneo', 'Jefe', 'Expertologo y filantropo.', '/img/maria.jpg'),
 ('Tasos Douvikas', 'Jefe de Compras', 'Especialista en productos locales', '/img/carlos.jpg'),
 ('Marian Mouriño', 'Responsable de Atención al Cliente', 'Comprometida con la satisfacción del cliente', '/img/ana.jpg');
('Galloso', 'Influencer', 'Encargado de dar pblicidad al supermercado', '/img/carlos.jpg'),
 ('Elon Musk', 'Experto en materiales frescos', 'Dispuesto a darnos la mejor calidad', '/img/ana.jpg');
