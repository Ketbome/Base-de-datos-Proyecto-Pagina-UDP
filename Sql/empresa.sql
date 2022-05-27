create DATABASE empresa;

-- list database
-- \l

-- conectar o usar base de datos
-- \c

create table corredor(
    Rut INTEGER NOT NULL,
    Nombre VARCHAR(255) NOT NULL,
    Edad INTEGER NOT NULL,
    Mail VARCHAR(50) NOT NULL,
    Telefono INTEGER NOT NULL,
    Cant_max INTEGER NOT NULL,
    Experiencia INTEGER NOT NULL,
    PRIMARY KEY(Rut)
);
create table cliente(
    Rut INTEGER NOT NULL,
    Nombre VARCHAR(255) NOT NULL,
    Edad INTEGER NOT NULL,
    Mail VARCHAR(50) NOT NULL,
    Domicilio VARCHAR(255) NOT NULL,
    Telefono INTEGER NOT NULL,
    Sueldo INTEGER,
    Rut_corredor INTEGER,
    PRIMARY KEY(Rut),
    FOREIGN KEY(Rut_corredor) REFERENCES corredor(Rut)
);
create table propietario(
    Rut INTEGER NOT NULL,
    Nombre VARCHAR(255) NOT NULL,
    Edad INTEGER NOT NULL,  
    Mail VARCHAR(50) NOT NULL,
    Domicilio VARCHAR(255) NOT NULL,
    Telefono INTEGER NOT NULL,
    Sueldo INTEGER,
    Rut_corredor INTEGER,
    PRIMARY KEY(Rut),
    FOREIGN KEY(Rut_corredor) REFERENCES corredor(Rut)
);
create table vivienda(
    Id INTEGER,
    Rut_propietario INTEGER,
    Inmueble VARCHAR(50) NOT NULL,
    Servicio VARCHAR(50) NOT NULL,
    Region VARCHAR(50) NOT NULL,
    Provincia VARCHAR(50) NOT NULL,
    Comuna text NOT NULL,
    Metros_cuad INTEGER NOT NULL,
    n_hab INTEGER NOT NULL, 
    n_banios INTEGER NOT NULL,
    Precio INTEGER,
    PRIMARY KEY(Id),
    FOREIGN KEY(Rut_propietario) REFERENCES propietario(Rut)
);

-- descripcion de la tabla \d books

-- insertar datos
INSERT INTO corredor VALUES
(16524896,'Maribel Sandoval',45,'MaribelCorred@hotmail.com',985487588,5,16),
(15365213, 'Javiera Correa', 35, 'javiera.correa@gmail.com', 985213654, 5, 10);

INSERT INTO propietario VALUES
(20185876,'Bernardo Sandoval',57,'bernard@gmail.com','Recoleta, Santiago',956816548,1250000,16524896),
(5426512,'Javier Molina',51,'molina123@gmail.com','La Florida, Santiago',956324891,2550000,16524896),
(13256965,'Alex Parada',65,'alexitado@gmail.com','Recoleta, Santiago',974863129,500000,15365213),
(8526354,'Cristobal Peñaloza',35,'wataka@gmail.com','Recoleta, Santiago',959127596,650000,15365213),
(15265632,'Cristian Contreras',67,'Cris1512@gmail.com','Providencia, Santiago',953614884,950000,15365213),
(16254596,'Fernando Salazar',81,'feño@gmail.com','La Florida, Santiago',944631589,750000,15365213),
(9632541,'Sebastian Moraga',49,'faja123@gmail.com','Curico',974956325,550000,16524896),
(15269854,'Tamara Merino',25,'tammy@gmail.com','Chiloe',985874863,1450000,16524896),
(16548563,'Thomas Muños',72,'thomy@gmail.com','Providencia, Santiago',915689574,3250000,16524896),
(17526548,'Isidora Molina',32,'isis@gmail.com','Macul, Santiago',954152635,450000,16524896),
(13548652,'Sara Bahamondes',47,'sara@gmail.com','Puente alto, Santiago',965485215,520000,16524896),
(104017576, 'Raúl Andrés Soto Aguilar', 50, 'raul.andres@gmail.com', 'Pasaje 50, 5463', 987654321, 2000000, 15365213),
(197787317, 'Felipe Andres Castro Espinoza', 22, 'felipe.castro3@mail.udp.cl', 'Primera transversal 5491', 965004665, 1500000, 15365213),
(201234567, 'José Pérez Muñoz', 20, 'jose.perez@gmail.com', 'Las acacias 4582', 965235412, 800000, 15365213);

insert into vivienda values 
(1,20185876,'Casa','Venta','Metropolitana','Santiago','La Florida',450,3,1,25000000),
(2,20185876,'Departamento','Arriendo','Metropolitana','Santiago','Puente Alto',250,2,1,350000),
(3,5426512,'Casa','Arriendo','Metropolitana','Santiago','Providencia',350,4,2,650000),
(4,13256965,'Departamento','Venta','Valparaiso','San Antonio','Santo Domingo',450,3,1,23000000),
(5,8526354,'Departamento','Arriendo','Maule','Curico','Licanten',225,1,1,150000),
(6,15265632,'Casa','Arriendo','Ñuble','San Carlos','Coihueco',200,2,1,180000),
(7,15265632,'Casa','Venta','Araucania','Temuco','Gorbea',325,3,1,30000000),
(8,16254596,'Departamento','Arriendo','Araucania','Temuco','Temuco',800,5,3,700000),
(9,9632541,'Casa','Arriendo','Los Lagos','Osorno','Rio Negro',375,2,2,280000),
(10,15269854,'Casa','Venta','Los Rios','Valdivia','Valdivia',650,4,2,40000000),
(11,15269854,'Departamento','Arriendo','Magallanes','Punta Arenas','Rio Verde',1250,6,4,900000),
(12,16548563,'Casa','Arriendo','Metropolitana','Santiago','Macul',200,1,1,150000),
(13,17526548,'Casa','Venta','Metropolitana','Santiago','Peñalolen',525,3,2,32500000),
(14,13548652,'Departamento','Arriendo','Maule','Curico','Curico',325,1,1,150000),
(15,13548652,'Departamento','Arriendo','Metropolitana','Santiago','Renca',750,4,2,500000),
(16, 197787317, 'Casa', 'Venta', 'Metropolitana', 'Santiago', 'La Florida', 450, 3, 1, 25000000),
(17, 201234567, 'Departamento', 'Arriendo', 'Metropolitana', 'Santiago', 'Puente Alto', 250, 2, 1, 230000),
(18, 104017576, 'Casa', 'Arriendo', 'Metropolitana', 'Santiago', 'Providencia', 350, 4, 2, 450000);

INSERT INTO cliente VALUES
(25241523,'Pablo Puebla',57,'pablox@gmail.com','San Joaquin, Santiago',995847632,1250000,16524896),
(8526352,'Benjamin Molina',51,'benjita@gmail.com','Peñalolen, Santiago',935154862,1250000,15365213),
(14523632,'Antonio Parada',65,'antonix@gmail.com','Peñaflor, Santiago',966548821,1250000,16524896),
(9852765,'Carlos Peñaloza',35,'chalata@gmail.com','Valparaiso',965489556,1250000,16524896),
(15523652,'Fernando Contreras',67,'ketbome@gmail.com','mar 3984',965153255,1250000,15365213),
(16452632,'Tomas Salazar',81,'veko234@gmail.com','Mar 8763',975489615,1250000,16524896),
(16485965,'Denise Moraga',49,'marin234@gmail.com','Av. La Florida 4563',935241536,1250000,15365213),
(15875326,'Catalina Merino',25,'catalina234@gmail.com','Providencia, Santiago',936528556,1250000,16524896),
(16698712,'Noemi Muños',72,'noem3748@gmail.com','La Florida, Santiago',966253365,1250000,16524896),
(17665823,'Ximena Molina',32,'cota2344@gmail.com','Quilicura, Santiago',923879752,1250000,15365213),
(13542156,'Genesis Bahamondes',47,'Genesis3495@gmail.com','Curico 5647',925415695,1250000,15365213),
(12321654, 'Barbara Acevedo Silva', 45, 'barbara.acevedo@gmail.com', 'Quilimari 02114', 985236548, 1450000, 15365213);

