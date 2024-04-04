-- Actores
CREATE TABLE actores (
    id_actor varchar(50) PRIMARY KEY,
    nomb_actor varchar(50)
);

-- Clientes
CREATE TABLE clientes (
    id_cliente varchar(50) PRIMARY KEY,
    nomb_cliente varchar(50),
    ape_cliente varchar(50),
    correo_cliente varchar(50),
    telefono_cliente varchar(50)
);

-- Directores
CREATE TABLE directores (
    id_director varchar(50) PRIMARY KEY,
    nomb_director varchar(30)
);
 
-- Películas
CREATE TABLE peliculas (
    id_pelicula varchar(50) PRIMARY KEY,
    titulo varchar(50),
    genero varchar(50),
    duracion varchar,
    añolanzamiento varchar,
    foto varchar,
    id_director varchar(50),
    FOREIGN KEY (id_director) REFERENCES directores(id_director) ON UPDATE CASCADE
);

-- Actúa
CREATE TABLE actua (
    personaje varchar(50),
    id_actor varchar(50),
    id_pelicula varchar(50),
    PRIMARY KEY (id_actor, id_pelicula),
    FOREIGN KEY (id_actor) REFERENCES actores(id_actor),
    FOREIGN KEY (id_pelicula) REFERENCES peliculas(id_pelicula)
);

-- Salas
CREATE TABLE salas (
    id_sala varchar(50) PRIMARY KEY,
    nomb_sala varchar(50),
    capacidad int
);

-- Funciones
CREATE TABLE funciones (
    id_funcion varchar(50) PRIMARY KEY,
    hora_inicio TIME,
    fecha DATE,
    precio_entrada int,
    id_pelicula varchar(50),
    id_sala varchar(50),
    FOREIGN KEY (id_pelicula) REFERENCES peliculas(id_pelicula),
    FOREIGN KEY (id_sala) REFERENCES salas(id_sala)
);


-- Asientos
CREATE TABLE asientos (
    id_asiento varchar(50) PRIMARY KEY,
    estado varchar(50),
    clase_asiento varchar(50),
    precio_asiento int,
    id_sala varchar(50),
    FOREIGN KEY (id_sala) REFERENCES salas(id_sala) ON UPDATE CASCADE
);

-- Ventas
CREATE TABLE ventas (
    id_venta varchar(50) PRIMARY KEY,
    fecha_venta DATE,
    id_asiento varchar(50),
    id_cliente varchar(50),
    FOREIGN KEY (id_asiento) REFERENCES asientos(id_asiento),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

-- Venta Función
CREATE TABLE ventafuncion (
    id_venta varchar(50),
    id_funcion varchar(50),
    PRIMARY KEY (id_venta, id_funcion),
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta),
    FOREIGN KEY (id_funcion) REFERENCES funciones(id_funcion)
);

