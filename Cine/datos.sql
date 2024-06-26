-- Insertar actores
INSERT INTO actores (id_actor, nomb_actor) VALUES
  ('1', 'Andrew Garfield'),
  ('2', 'Emma Stone'),
  ('3', 'Stan Lee'),
  ('4', 'Sally Field'),
  ('5', 'Dwayme Johnson'),
  ('6', 'Malin Arkeman'),
  ('7', 'Naomie Harris'),
  ('8', 'Breanne Hill'),
  ('9','Neve Campbell'),
  ('10','Chin Han'), 
  ('11','Elfina Luk'),
  ('12','Robert Downey Jr'),
  ('13','Scarlett Johansson '),
  ('14','Chris Evans'),
  ('15','Chris Hemsworth'),
  ('16','Jon Favreau'),
  ('17','Don Cheadle');

  -- Añadir actores para las otras películas según sea necesario;

-- Insertar clientes
INSERT INTO clientes (id_cliente, nomb_cliente, ape_cliente, correo_cliente, telefono_cliente) VALUES
  ('1', 'Julian ', 'Gonzalez', 'juliangonzalez@gmail.com.', '3015126127'),
  ('2', 'Valeria ', 'Pineda', 'valeriapineda@gmail.com.', '311111111');
  -- Añadir clientes según sea necesario;

-- Insertar directores
INSERT INTO directores (id_director, nomb_director) VALUES
  ('1', 'Marc Webb'),
  ('2', 'Brad Peyton'),
  ('3','Rauuson Marshall'),
  ('4','Joe Russo'),
  ('5','Joe Favreau'),
  ('6', 'Ryan Coogler'),
  ('7', 'Anthony Russo'),
  ('8', 'David Leitch'),
  ('9', 'Bryan Singer'),
  ('11', 'Bradley Cooper');
  -- Añadir directores según sea necesario;

-- Insertar películas
INSERT INTO peliculas (id_pelicula, titulo, genero, duracion, añolanzamiento, foto, id_director) VALUES
  ('1', 'The Amazing Spiderman', 'Acción', '136', '2012', 'spiderman.jpg', '1'),
  ('2', 'Rampage', 'Aventura', '107', '2018', 'rampage.jpg', '2'),
  ('3', 'Rascacielos', 'Acción', '103', '2018', 'rascacielos.jpg','3'),
  ('4', 'The Avengers', 'Acción', '142', '2012', 'avengers.jpg','4'),
  ('5', 'Iron Man 2', 'Acción', '125', '2010', 'iron man.jpg','5'),
  ('6', 'Black Panther', 'Acción', '134', '2018', 'blackpanther.jpg', '6'),
  ('7', 'Avengers: Infinity War', 'Acción', '149', '2018', 'infinitywar.jpg', '7'),
  ('8', 'Deadpool 2', 'Acción', '119', '2018', 'deadpool2.jpg', '8'),
  ('9', 'Bohemian Rhapsody', 'Biografía', '134', '2018', 'bohemianrhapsody.jpg', '9'),
  ('10', 'A Star is Born', 'Drama', '136', '2018', 'astarisborn.jpg', '11');


-- Insertar actores que participan en las películas
INSERT INTO actua (personaje, id_actor, id_pelicula) VALUES
  ('Peter Parker', '1', '1'),
  ('Gwen Stacy', '2', '1'),
  ('Bibliotecario', '3', '1'),
  ('May Parker', '4', '1'), 
  ('Davis Okoye','5','2'),
  ('Claire Wyden','6','2'),
  ('Doctora Kate','7','2'),
  ('Amy','8','2'),
  ('Will Sawyer','5','3'),
  ('Sarah Sawyer','9','3'),
  ('Zhao Long','10','3'),
  ('Sergeant Han','11','3'),
  ('Iron Man','12','4'),
  ('Natasha Romanoff','13','4'),
  ('Capitan America','14','4'),
  ('Thor','15','4'),
  ('Iron Man','12','5'),
  ('Natasha Romanoff','13','5'),
  ('Happy Hogan','16','5'),
  ('Iron Patriot','17','5'),
  ('Challa / Black Panther', '1', '6'),
  ('Erik Killmonger', '5', '6'),
  ('Nakia', '7', '6'),
  ('Okoye', '8', '6'),
  
  ('Iron Man / Tony Stark', '12', '7'),
  ('Thor', '15', '7'),
  ('Capitan America / Steve Rogers', '14', '7'),
  ('Black Widow / Natasha Romanoff', '13', '7'),
  
  ('Deadpool / Wade Wilson', '8', '8'),
  ('Cable / Nathan Summers', '10', '8'),
  ('Domino', '11', '8'),
  ('Russell / Firefist', '6', '8'),
  
  ('Freddie Mercury', '9', '9'),
  ('Brian May', '10', '9'),
  ('Roger Taylor', '11', '9'),
  ('John Deacon', '12', '9'),
  
  ('Ally Maine', '13', '10'),
  ('Jackson Maine', '12', '10'),
  ('Lorenzo Campana', '14', '10'),
  ('George "Noodles" Stone', '16', '10');
  -- Añadir actores para las otras películas según sea necesario;

-- Insertar salas
INSERT INTO salas (id_sala, nomb_sala, capacidad) VALUES
  ('1', 'Sala 1', 100),
  ('2', 'Sala 2', 100),
  ('3', 'Sala 3', 100);
  -- Añadir salas según sea necesario;

-- Insertar funciones
INSERT INTO funciones (id_funcion, hora_inicio, fecha, precio_entrada, id_pelicula, id_sala) VALUES
  ('1', '14:00', '2023-01-01', 10, '1', '1'),
  ('2', '16:00', '2023-01-01', 10, '2', '2'),
  ('3', '18:00', '2023-01-01', 10, '3', '3'),
  ('4', '20:00', '2023-01-01', 10, '4', '1'),
  ('5', '22:00', '2023-01-01', 10, '5', '2');

-- Martes
INSERT INTO funciones (id_funcion, hora_inicio, fecha, precio_entrada, id_pelicula, id_sala) VALUES
  ('6', '14:00', '2023-01-02', 10, '2', '1'),
  ('7', '16:00', '2023-01-02', 10, '3', '2'),
  ('8', '18:00', '2023-01-02', 10, '4', '3'),
  ('9', '20:00', '2023-01-02', 10, '5', '1'),
  ('10', '22:00', '2023-01-02', 10, '1', '2');

-- Miércoles
INSERT INTO funciones (id_funcion, hora_inicio, fecha, precio_entrada, id_pelicula, id_sala) VALUES
  ('11', '14:00', '2023-01-03', 10, '3', '1'),
  ('12', '16:00', '2023-01-03', 10, '4', '2'),
  ('13', '18:00', '2023-01-03', 10, '5', '3'),
  ('14', '20:00', '2023-01-03', 10, '1', '1'),
  ('15', '22:00', '2023-01-03', 10, '2', '2');

-- Jueves
INSERT INTO funciones (id_funcion, hora_inicio, fecha, precio_entrada, id_pelicula, id_sala) VALUES
  ('16', '14:00', '2023-01-04', 10, '4', '1'),
  ('17', '16:00', '2023-01-04', 10, '5', '2'),
  ('18', '18:00', '2023-01-04', 10, '1', '3'),
  ('19', '20:00', '2023-01-04', 10, '2', '1'),
  ('20', '22:00', '2023-01-04', 10, '3', '2');

-- Viernes
INSERT INTO funciones (id_funcion, hora_inicio, fecha, precio_entrada, id_pelicula, id_sala) VALUES
  ('21', '14:00', '2023-01-05', 10, '5', '1'),
  ('22', '16:00', '2023-01-05', 10, '1', '2'),
  ('23', '18:00', '2023-01-05', 10, '2', '3'),
  ('24', '20:00', '2023-01-05', 10, '3', '1'),
  ('25', '22:00', '2023-01-05', 10, '4', '2');

-- Sábado
INSERT INTO funciones (id_funcion, hora_inicio, fecha, precio_entrada, id_pelicula, id_sala) VALUES
  ('26', '14:00', '2023-01-06', 10, '1', '1'),
  ('27', '16:00', '2023-01-06', 10, '2', '2'),
  ('28', '18:00', '2023-01-06', 10, '3', '3'),
  ('29', '20:00', '2023-01-06', 10, '4', '1'),
  ('30', '22:00', '2023-01-06', 10, '5', '2');

-- Domingo
INSERT INTO funciones (id_funcion, hora_inicio, fecha, precio_entrada, id_pelicula, id_sala) VALUES
  ('31', '14:00', '2023-01-07', 10, '2', '1'),
  ('32', '16:00', '2023-01-07', 10, '3', '2'),
  ('33', '18:00', '2023-01-07', 10, '4', '3'),
  ('34', '20:00', '2023-01-07', 10, '5', '1'),
  ('35', '22:00', '2023-01-07', 10, '1', '2');
  -- Añadir funciones según sea necesario;

-- Insertar asientos
INSERT INTO asientos (id_asiento, estado, clase_asiento, precio_asiento, id_sala) VALUES
  ('1', 'Disponible', 'Normal', 10, '1'),
  ('2', 'Disponible', 'Normal', 10, '1'),
  ('3', 'Disponible', 'Normal', 10, '1'),
  ('4', 'Disponible', 'Normal', 10, '1'),
  ('5', 'Disponible', 'Normal', 10, '1'),
  ('6', 'Disponible', 'Normal', 10, '1'),
  ('7', 'Disponible', 'Normal', 10, '1'),
  ('8', 'Disponible', 'Normal', 10, '1'),
  ('9', 'Disponible', 'Normal', 10, '1'),
  ('10', 'Disponible', 'Normal', 10, '1'),
  ('11', 'Disponible', 'Normal', 10, '1'),
  ('12', 'Disponible', 'Normal', 10, '1'),
  ('13', 'Disponible', 'Normal', 10, '1'),
  ('14', 'Disponible', 'Normal', 10, '1'),
  ('15', 'Disponible', 'Normal', 10, '1'),
  ('16', 'Disponible', 'Normal', 10, '1'),
  ('17', 'Disponible', 'Normal', 10, '1'),
  ('18', 'Disponible', 'Normal', 10, '1'),
  ('19', 'Disponible', 'Normal', 10, '1'),
  ('20', 'Disponible', 'Normal', 10, '1'),
  ('21', 'Disponible', 'Normal', 10, '1'),
  ('22', 'Disponible', 'Normal', 10, '1'),
  ('23', 'Disponible', 'Normal', 10, '1'),
  ('24', 'Disponible', 'Normal', 10, '1'),
  ('25', 'Disponible', 'Normal', 10, '1'),
  ('26', 'Disponible', 'Normal', 10, '1'),
  ('27', 'Disponible', 'Normal', 10, '1'),
  ('28', 'Disponible', 'Normal', 10, '1'),
  ('29', 'Disponible', 'Normal', 10, '1'),
  ('30', 'Disponible', 'Normal', 10, '1'),
  ('31', 'Disponible', 'Normal', 10, '1'),
  ('32', 'Disponible', 'Normal', 10, '1'),
  ('33', 'Disponible', 'Normal', 10, '1'),
  ('34', 'Disponible', 'Normal', 10, '1'),
  ('35', 'Disponible', 'Normal', 10, '1'),
  ('36', 'Disponible', 'Normal', 10, '1'),
  ('37', 'Disponible', 'Normal', 10, '1'),
  ('38', 'Disponible', 'Normal', 10, '1'),
  ('39', 'Disponible', 'Normal', 10, '1'),
  ('40', 'Disponible', 'Normal', 10, '1'),
  ('41', 'Disponible', 'Normal', 10, '1'),
  ('42', 'Disponible', 'Normal', 10, '1'),
  ('43', 'Disponible', 'Normal', 10, '1'),
  ('44', 'Disponible', 'Normal', 10, '1'),
  ('45', 'Disponible', 'Normal', 10, '1'),
  ('46', 'Disponible', 'Normal', 10, '1'),
  ('47', 'Disponible', 'Normal', 10, '1'),
  ('48', 'Disponible', 'Normal', 10, '1'),
  ('49', 'Disponible', 'Normal', 10, '1'),
  ('50', 'Disponible', 'Normal', 10, '1'),
  ('51', 'Disponible', 'Normal', 10, '1'),
  ('52', 'Disponible', 'Normal', 10, '1'),
  ('53', 'Disponible', 'Normal', 10, '1'),
  ('54', 'Disponible', 'Normal', 10, '1'),
  ('55', 'Disponible', 'Normal', 10, '1'),
  ('56', 'Disponible', 'Normal', 10, '1'),
  ('57', 'Disponible', 'Normal', 10, '1'),
  ('58', 'Disponible', 'Normal', 10, '1'),
  ('59', 'Disponible', 'Normal', 10, '1'),
  ('60', 'Disponible', 'Normal', 10, '1'),
  ('61', 'Disponible', 'Normal', 10, '1'),
  ('62', 'Disponible', 'Normal', 10, '1'),
  ('63', 'Disponible', 'Normal', 10, '1'),
  ('64', 'Disponible', 'Normal', 10, '1'),
  ('65', 'Disponible', 'Normal', 10, '1'),
  ('66', 'Disponible', 'Normal', 10, '1'),
  ('67', 'Disponible', 'Normal', 10, '1'),
  ('68', 'Disponible', 'Normal', 10, '1'),
  ('69', 'Disponible', 'Normal', 10, '1'),
  ('70', 'Disponible', 'Normal', 10, '1'),
  ('71', 'Disponible', 'Normal', 10, '1'),
  ('72', 'Disponible', 'Normal', 10, '1'),
  ('73', 'Disponible', 'Normal', 10, '1'),
  ('74', 'Disponible', 'Normal', 10, '1'),
  ('75', 'Disponible', 'Normal', 10, '1'),
  ('76', 'Disponible', 'Normal', 10, '1'),
  ('77', 'Disponible', 'Normal', 10, '1'),
  ('78', 'Disponible', 'Normal', 10, '1'),
  ('79', 'Disponible', 'Normal', 10, '1'),
  ('80', 'Disponible', 'Normal', 10, '1'),
  ('81', 'Disponible', 'VIP', 15, '1'),
  ('82', 'Disponible', 'VIP', 15, '1'),
  ('83', 'Disponible', 'VIP', 15, '1'),
  ('84', 'Disponible', 'VIP', 15, '1'),
  ('85', 'Disponible', 'VIP', 15, '1'),
  ('86', 'Disponible', 'VIP', 15, '1'),
  ('87', 'Disponible', 'VIP', 15, '1'),
  ('88', 'Disponible', 'VIP', 15, '1'),
  ('89', 'Disponible', 'VIP', 15, '1'),
  ('90', 'Disponible', 'VIP', 15, '1'),
  ('91', 'Disponible', 'VIP', 15, '1'),
  ('92', 'Disponible', 'VIP', 15, '1'),
  ('93', 'Disponible', 'VIP', 15, '1'),
  ('94', 'Disponible', 'VIP', 15, '1'),
  ('95', 'Disponible', 'VIP', 15, '1'),
  ('96', 'Disponible', 'VIP', 15, '1'),
  ('97', 'Disponible', 'VIP', 15, '1'),
  ('98', 'Disponible', 'VIP', 15, '1'),
  ('99', 'Disponible', 'VIP', 15, '1'),
  ('100', 'Disponible', 'VIP', 15, '1');
------------------------------------------------------
INSERT INTO asientos (id_asiento, estado, clase_asiento, precio_asiento, id_sala) VALUES
  ('101', 'Disponible', 'Normal', 10, '2'),
  ('102', 'Disponible', 'Normal', 10, '2'),
  ('103', 'Disponible', 'Normal', 10, '2'),
  ('104', 'Disponible', 'Normal', 10, '2'),
  ('105', 'Disponible', 'Normal', 10, '2'),
  ('106', 'Disponible', 'Normal', 10, '2'),
  ('107', 'Disponible', 'Normal', 10, '2'),
  ('108', 'Disponible', 'Normal', 10, '2'),
  ('109', 'Disponible', 'Normal', 10, '2'),
  ('110', 'Disponible', 'Normal', 10, '2'),
  ('111', 'Disponible', 'Normal', 10, '2'),
  ('112', 'Disponible', 'Normal', 10, '2'),
  ('113', 'Disponible', 'Normal', 10, '2'),
  ('114', 'Disponible', 'Normal', 10, '2'),
  ('115', 'Disponible', 'Normal', 10, '2'),
  ('116', 'Disponible', 'Normal', 10, '2'),
  ('117', 'Disponible', 'Normal', 10, '2'),
  ('118', 'Disponible', 'Normal', 10, '2'),
  ('119', 'Disponible', 'Normal', 10, '2'),
  ('120', 'Disponible', 'Normal', 10, '2'),
  ('121', 'Disponible', 'Normal', 10, '2'),
  ('122', 'Disponible', 'Normal', 10, '2'),
  ('123', 'Disponible', 'Normal', 10, '2'),
  ('124', 'Disponible', 'Normal', 10, '2'),
  ('125', 'Disponible', 'Normal', 10, '2'),
  ('126', 'Disponible', 'Normal', 10, '2'),
  ('127', 'Disponible', 'Normal', 10, '2'),
  ('128', 'Disponible', 'Normal', 10, '2'),
  ('129', 'Disponible', 'Normal', 10, '2'),
  ('130', 'Disponible', 'Normal', 10, '2'),
  ('131', 'Disponible', 'Normal', 10, '2'),
  ('132', 'Disponible', 'Normal', 10, '2'),
  ('133', 'Disponible', 'Normal', 10, '2'),
  ('134', 'Disponible', 'Normal', 10, '2'),
  ('135', 'Disponible', 'Normal', 10, '2'),
  ('136', 'Disponible', 'Normal', 10, '2'),
  ('137', 'Disponible', 'Normal', 10, '2'),
  ('138', 'Disponible', 'Normal', 10, '2'),
  ('139', 'Disponible', 'Normal', 10, '2'),
  ('140', 'Disponible', 'Normal', 10, '2'),
  ('141', 'Disponible', 'Normal', 10, '2'),
  ('142', 'Disponible', 'Normal', 10, '2'),
  ('143', 'Disponible', 'Normal', 10, '2'),
  ('144', 'Disponible', 'Normal', 10, '2'),
  ('145', 'Disponible', 'Normal', 10, '2'),
  ('146', 'Disponible', 'Normal', 10, '2'),
  ('147', 'Disponible', 'Normal', 10, '2'),
  ('148', 'Disponible', 'Normal', 10, '2'),
  ('149', 'Disponible', 'Normal', 10, '2'),
  ('150', 'Disponible', 'Normal', 10, '2'),
  ('151', 'Disponible', 'Normal', 10, '2'),
  ('152', 'Disponible', 'Normal', 10, '2'),
  ('153', 'Disponible', 'Normal', 10, '2'),
  ('154', 'Disponible', 'Normal', 10, '2'),
  ('155', 'Disponible', 'Normal', 10, '2'),
  ('156', 'Disponible', 'Normal', 10, '2'),
  ('157', 'Disponible', 'Normal', 10, '2'),
  ('158', 'Disponible', 'Normal', 10, '2'),
  ('159', 'Disponible', 'Normal', 10, '2'),
  ('160', 'Disponible', 'Normal', 10, '2'),
  ('161', 'Disponible', 'Normal', 10, '2'),
  ('162', 'Disponible', 'Normal', 10, '2'),
  ('163', 'Disponible', 'Normal', 10, '2'),
  ('164', 'Disponible', 'Normal', 10, '2'),
  ('165', 'Disponible', 'Normal', 10, '2'),
  ('166', 'Disponible', 'Normal', 10, '2'),
  ('167', 'Disponible', 'Normal', 10, '2'),
  ('168', 'Disponible', 'Normal', 10, '2'),
  ('169', 'Disponible', 'Normal', 10, '2'),
  ('170', 'Disponible', 'Normal', 10, '2'),
  ('171', 'Disponible', 'Normal', 10, '2'),
  ('172', 'Disponible', 'Normal', 10, '2'),
  ('173', 'Disponible', 'Normal', 10, '2'),
  ('174', 'Disponible', 'Normal', 10, '2'),
  ('175', 'Disponible', 'Normal', 10, '2'),
  ('176', 'Disponible', 'Normal', 10, '2'),
  ('177', 'Disponible', 'Normal', 10, '2'),
  ('178', 'Disponible', 'Normal', 10, '2'),
  ('179', 'Disponible', 'Normal', 10, '2'),
  ('180', 'Disponible', 'Normal', 10, '2'),
  ('181', 'Disponible', 'VIP', 15, '2'),
  ('182', 'Disponible', 'VIP', 15, '2'),
  ('183', 'Disponible', 'VIP', 15, '2'),
  ('184', 'Disponible', 'VIP', 15, '2'),
  ('185', 'Disponible', 'VIP', 15, '2'),
  ('186', 'Disponible', 'VIP', 15, '2'),
  ('187', 'Disponible', 'VIP', 15, '2'),
  ('188', 'Disponible', 'VIP', 15, '2'),
  ('189', 'Disponible', 'VIP', 15, '2'),
  ('190', 'Disponible', 'VIP', 15, '2'),
  ('191', 'Disponible', 'VIP', 15, '2'),
  ('192', 'Disponible', 'VIP', 15, '2'),
  ('193', 'Disponible', 'VIP', 15, '2'),
  ('194', 'Disponible', 'VIP', 15, '2'),
  ('195', 'Disponible', 'VIP', 15, '2'),
  ('196', 'Disponible', 'VIP', 15, '2'),
  ('197', 'Disponible', 'VIP', 15, '2'),
  ('198', 'Disponible', 'VIP', 15, '2'),
  ('199', 'Disponible', 'VIP', 15, '2'),
  ('200', 'Disponible', 'VIP', 15, '2');
  -----------------------------------------------------
  INSERT INTO asientos (id_asiento, estado, clase_asiento, precio_asiento, id_sala) VALUES
  ('201', 'Disponible', 'Normal', 10, '3'),
  ('202', 'Disponible', 'Normal', 10, '3'),
  ('203', 'Disponible', 'Normal', 10, '3'),
  ('204', 'Disponible', 'Normal', 10, '3'),
  ('205', 'Disponible', 'Normal', 10, '3'),
  ('206', 'Disponible', 'Normal', 10, '3'),
  ('207', 'Disponible', 'Normal', 10, '3'),
  ('208', 'Disponible', 'Normal', 10, '3'),
  ('209', 'Disponible', 'Normal', 10, '3'),
  ('210', 'Disponible', 'Normal', 10, '3'),
  ('211', 'Disponible', 'Normal', 10, '3'),
  ('212', 'Disponible', 'Normal', 10, '3'),
  ('213', 'Disponible', 'Normal', 10, '3'),
  ('214', 'Disponible', 'Normal', 10, '3'),
  ('215', 'Disponible', 'Normal', 10, '3'),
  ('216', 'Disponible', 'Normal', 10, '3'),
  ('217', 'Disponible', 'Normal', 10, '3'),
  ('218', 'Disponible', 'Normal', 10, '3'),
  ('219', 'Disponible', 'Normal', 10, '3'),
  ('220', 'Disponible', 'Normal', 10, '3'),
  ('221', 'Disponible', 'Normal', 10, '3'),
  ('222', 'Disponible', 'Normal', 10, '3'),
  ('223', 'Disponible', 'Normal', 10, '3'),
  ('224', 'Disponible', 'Normal', 10, '3'),
  ('225', 'Disponible', 'Normal', 10, '3'),
  ('226', 'Disponible', 'Normal', 10, '3'),
  ('227', 'Disponible', 'Normal', 10, '3'),
  ('228', 'Disponible', 'Normal', 10, '3'),
  ('229', 'Disponible', 'Normal', 10, '3'),
  ('230', 'Disponible', 'Normal', 10, '3'),
  ('231', 'Disponible', 'Normal', 10, '3'),
  ('232', 'Disponible', 'Normal', 10, '3'),
  ('233', 'Disponible', 'Normal', 10, '3'),
  ('234', 'Disponible', 'Normal', 10, '3'),
  ('235', 'Disponible', 'Normal', 10, '3'),
  ('236', 'Disponible', 'Normal', 10, '3'),
  ('237', 'Disponible', 'Normal', 10, '3'),
  ('238', 'Disponible', 'Normal', 10, '3'),
  ('239', 'Disponible', 'Normal', 10, '3'),
  ('240', 'Disponible', 'Normal', 10, '3'),
  ('241', 'Disponible', 'Normal', 10, '3'),
  ('242', 'Disponible', 'Normal', 10, '3'),
  ('243', 'Disponible', 'Normal', 10, '3'),
  ('244', 'Disponible', 'Normal', 10, '3'),
  ('245', 'Disponible', 'Normal', 10, '3'),
  ('246', 'Disponible', 'Normal', 10, '3'),
  ('247', 'Disponible', 'Normal', 10, '3'),
  ('248', 'Disponible', 'Normal', 10, '3'),
  ('249', 'Disponible', 'Normal', 10, '3'),
  ('250', 'Disponible', 'Normal', 10, '3'),
  ('251', 'Disponible', 'Normal', 10, '3'),
  ('252', 'Disponible', 'Normal', 10, '3'),
  ('253', 'Disponible', 'Normal', 10, '3'),
  ('254', 'Disponible', 'Normal', 10, '3'),
  ('255', 'Disponible', 'Normal', 10, '3'),
  ('256', 'Disponible', 'Normal', 10, '3'),
  ('257', 'Disponible', 'Normal', 10, '3'),
  ('258', 'Disponible', 'Normal', 10, '3'),
  ('259', 'Disponible', 'Normal', 10, '3'),
  ('260', 'Disponible', 'Normal', 10, '3'),
  ('261', 'Disponible', 'Normal', 10, '3'),
  ('262', 'Disponible', 'Normal', 10, '3'),
  ('263', 'Disponible', 'Normal', 10, '3'),
  ('264', 'Disponible', 'Normal', 10, '3'),
  ('265', 'Disponible', 'Normal', 10, '3'),
  ('266', 'Disponible', 'Normal', 10, '3'),
  ('267', 'Disponible', 'Normal', 10, '3'),
  ('268', 'Disponible', 'Normal', 10, '3'),
  ('269', 'Disponible', 'Normal', 10, '3'),
  ('270', 'Disponible', 'Normal', 10, '3'),
  ('271', 'Disponible', 'Normal', 10, '3'),
  ('272', 'Disponible', 'Normal', 10, '3'),
  ('273', 'Disponible', 'Normal', 10, '3'),
  ('274', 'Disponible', 'Normal', 10, '3'),
  ('275', 'Disponible', 'Normal', 10, '3'),
  ('276', 'Disponible', 'Normal', 10, '3'),
  ('277', 'Disponible', 'Normal', 10, '3'),
  ('278', 'Disponible', 'Normal', 10, '3'),
  ('279', 'Disponible', 'Normal', 10, '3'),
  ('280', 'Disponible', 'Normal', 10, '3'),
  ('281', 'Disponible', 'VIP', 15, '3'),
  ('282', 'Disponible', 'VIP', 15, '3'),
  ('283', 'Disponible', 'VIP', 15, '3'),
  ('284', 'Disponible', 'VIP', 15, '3'),
  ('285', 'Disponible', 'VIP', 15, '3'),
  ('286', 'Disponible', 'VIP', 15, '3'),
  ('287', 'Disponible', 'VIP', 15, '3'),
  ('288', 'Disponible', 'VIP', 15, '3'),
  ('289', 'Disponible', 'VIP', 15, '3'),
  ('290', 'Disponible', 'VIP', 15, '3'),
  ('291', 'Disponible', 'VIP', 15, '3'),
  ('292', 'Disponible', 'VIP', 15, '3'),
  ('293', 'Disponible', 'VIP', 15, '3'),
  ('294', 'Disponible', 'VIP', 15, '3'),
  ('295', 'Disponible', 'VIP', 15, '3'),
  ('296', 'Disponible', 'VIP', 15, '3'),
  ('297', 'Disponible', 'VIP', 15, '3'),
  ('298', 'Disponible', 'VIP', 15, '3'),
  ('299', 'Disponible', 'VIP', 15, '3'),
  ('300', 'Disponible', 'VIP', 15, '3');




  
  -- Añadir asientos según sea necesario;

-- Insertar ventas
INSERT INTO ventas (id_venta, fecha_venta, id_asiento, id_cliente) VALUES
  ('1', '2023-01-01', '1', '1'),
  ('2', '2023-01-02', '2', '2');
  -- Añadir ventas según sea necesario;

-- Insertar relación entre ventas y funciones
INSERT INTO ventafuncion (id_venta, id_funcion) VALUES
  ('1', '1'),
  ('2', '2');
  -- Añadir más relaciones según sea necesario;


