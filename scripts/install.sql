-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2020 a las 02:21:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hseq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_economica`
--

CREATE TABLE `actividad_economica` (
  `id_actividad` int(11) NOT NULL,
  `nombre_actividad` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_economica`
--

INSERT INTO `actividad_economica` (`id_actividad`, `nombre_actividad`) VALUES
(111, 'Cultivo de cereales (excepto arroz), legumbres y semillas oleaginosas'),
(112, 'Cultivo de arroz'),
(113, 'Cultivo de hortalizas, raíces y tubérculos'),
(114, 'Cultivo de tabaco'),
(115, 'Cultivo de plantas textiles'),
(119, 'Otros cultivos transitorios n.c.p.'),
(121, 'Cultivo de frutas tropicales y subtropicales'),
(122, 'Cultivo de plátano y banano'),
(123, 'Cultivo de café'),
(124, 'Cultivo de caña de azúcar'),
(125, 'Cultivo de flor de corte'),
(126, 'Cultivo de palma para aceite (palma africana) y otros frutos oleaginosos'),
(127, 'Cultivo de plantas con las que se preparan bebidas'),
(128, 'Cultivo de especias y de plantas aromáticas y medicinales'),
(129, 'Otros cultivos permanentes n.c.p.'),
(130, 'Propagación de plantas (actividades de los viveros, excepto viveros forestales)'),
(141, 'Cría de ganado bovino y bufalino'),
(142, 'Cría de caballos y otros equinos'),
(143, 'Cría de ovejas y cabras'),
(144, 'Cría de ganado porcino'),
(145, 'Cría de aves de corral'),
(149, 'Cría de otros animales n.c.p.'),
(150, 'Explotación mixta (agrícola y pecuaria)'),
(161, 'Actividades de apoyo a la agricultura'),
(162, 'Actividades de apoyo a la ganadería'),
(163, 'Actividades posteriores a la cosecha'),
(164, 'Tratamiento de semillas para propagación'),
(170, 'Caza ordinaria y mediante trampas y actividades de servicios conexas'),
(210, 'Silvicultura y otras actividades forestales'),
(220, 'Extracción de madera'),
(230, 'Recolección de productos forestales diferentes a la madera'),
(240, 'Servicios de apoyo a la silvicultura'),
(311, 'Pesca marítima'),
(312, 'Pesca de agua dulce'),
(321, 'Acuicultura marítima'),
(322, 'Acuicultura de agua dulce'),
(510, 'Extracción de hulla (carbón de piedra)'),
(520, 'Extracción de carbón lignito'),
(610, 'Extracción de petróleo crudo'),
(620, 'Extracción de gas natural'),
(710, 'Extracción de minerales de hierro'),
(721, 'Extracción de minerales de uranio y de torio'),
(722, 'Extracción de oro y otros metales preciosos'),
(723, 'Extracción de minerales de níquel'),
(729, 'Extracción de otros minerales metalíferos no ferrosos n.c.p.'),
(811, 'Extracción de piedra, arena, arcillas comunes, yeso y anhidrita'),
(812, 'Extracción de arcillas de uso industrial, caliza, caolín y bentonitas'),
(820, 'Extracción de esmeraldas, piedras preciosas y semipreciosas'),
(891, 'Extracción de minerales para la fabricación de abonos y productos químicos'),
(892, 'Extracción de halita (sal)'),
(899, 'Extracción de otros minerales no metálicos n.c.p.'),
(910, 'Actividades de apoyo para la extracción de petróleo y de gas natural'),
(990, 'Actividades de apoyo para otras actividades de explotación de minas y canteras'),
(1011, 'Procesamiento y conservación de carne y productos cárnicos'),
(1012, 'Procesamiento y conservación de pescados, crustáceos y moluscos'),
(1020, 'Procesamiento y conservación de frutas, legumbres, hortalizas y tubérculos'),
(1030, 'Elaboración de aceites y grasas de origen vegetal y animal'),
(1040, 'Elaboración de productos lácteos'),
(1051, 'Elaboración de productos de molinería'),
(1052, 'Elaboración de almidones y productos derivados del almidón'),
(1061, 'Trilla de café'),
(1062, 'Descafeinado, tostión y molienda del café'),
(1063, 'Otros derivados del café'),
(1071, 'Elaboración y refinación de azúcar'),
(1072, 'Elaboración de panela'),
(1081, 'Elaboración de productos de panadería'),
(1082, 'Elaboración de cacao, chocolate y productos de confitería'),
(1083, 'Elaboración de macarrones, fideos, alcuzcuz y productos farináceos similares'),
(1084, 'Elaboración de comidas y platos preparados'),
(1089, 'Elaboración de otros productos alimenticios n.c.p.'),
(1090, 'Elaboración de alimentos preparados para animales'),
(1101, 'Destilación, rectificación y mezcla de bebidas alcohólicas'),
(1102, 'Elaboración de bebidas fermentadas no destiladas'),
(1103, 'Producción de malta, elaboración de cervezas y otras bebidas malteadas'),
(1104, 'Elaboración de bebidas no alcohólicas, producción de aguas minerales y de otras aguas embotelladas'),
(1200, 'Elaboración de productos de tabaco'),
(1311, 'Preparación e hilatura de fibras textiles'),
(1312, 'Tejeduría de productos textiles'),
(1313, 'Acabado de productos textiles'),
(1391, 'Fabricación de tejidos de punto y ganchillo'),
(1392, 'Confección de artículos con materiales textiles, excepto prendas de vestir'),
(1393, 'Fabricación de tapetes y alfombras para pisos'),
(1394, 'Fabricación de cuerdas, cordeles, cables, bramantes y redes'),
(1399, 'Fabricación de otros artículos textiles n.c.p.'),
(1410, 'Confección de prendas de vestir, excepto prendas de piel'),
(1420, 'Fabricación de artículos de piel'),
(1430, 'Fabricación de artículos de punto y ganchillo'),
(1511, 'Curtido y recurtido de cueros; recurtido y teñido de pieles'),
(1512, 'Fabricación de artículos de viaje, bolsos de mano y artículos similares elaborados en cuero, y fabricación de artículos de talabartería y guarnicionería'),
(1513, 'Fabricación de artículos de viaje, bolsos de mano y artículos similares; artículos de talabartería y guarnicionería elaborados en otros materiales'),
(1521, 'Fabricación de calzado de cuero y piel, con cualquier tipo de suela'),
(1522, 'Fabricación de otros tipos de calzado, excepto calzado de cuero y piel'),
(1523, 'Fabricación de partes del calzado'),
(1610, 'Aserrado, acepillado e impregnación de la madera'),
(1620, 'Fabricación de hojas de madera para enchapado; fabricación de tableros contrachapados, tableros laminados, tableros de partículas y otros tableros y paneles'),
(1630, 'Fabricación de partes y piezas de madera, de carpintería y ebanistería para la construcción'),
(1640, 'Fabricación de recipientes de madera'),
(1690, 'Fabricación de otros productos de madera; fabricación de artículos de corcho, cestería y espartería'),
(1701, 'Fabricación de pulpas (pastas) celulósicas; papel y cartón'),
(1702, 'Fabricación de papel y cartón ondulado (corrugado); fabricación de envases, empaques y de embalajes de papel y cartón.'),
(1709, 'Fabricación de otros artículos de papel y cartón'),
(1811, 'Actividades de impresión'),
(1812, 'Actividades de servicios relacionados con la impresión'),
(1820, 'Producción de copias a partir de grabaciones originales'),
(1910, 'Fabricación de productos de hornos de coque'),
(1921, 'Fabricación de productos de la refinación del petróleo'),
(1922, 'Actividad de mezcla de combustibles'),
(2011, 'Fabricación de sustancias y productos químicos básicos'),
(2012, 'Fabricación de abonos y compuestos inorgánicos nitrogenados'),
(2013, 'Fabricación de plásticos en formas primarias'),
(2014, 'Fabricación de caucho sintético en formas primarias'),
(2021, 'Fabricación de plaguicidas y otros productos químicos de uso agropecuario'),
(2022, 'Fabricación de pinturas, barnices y revestimientos similares, tintas para impresión y masillas'),
(2023, 'Fabricación de jabones y detergentes, preparados para limpiar y pulir; perfumes y preparados de tocador'),
(2029, 'Fabricación de otros productos químicos n.c.p.'),
(2030, 'Fabricación de fibras sintéticas y artificiales'),
(2100, 'Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico'),
(2211, 'Fabricación de llantas y neumáticos de caucho'),
(2212, 'Reencauche de llantas usadas'),
(2219, 'Fabricación de formas básicas de caucho y otros productos de caucho n.c.p.'),
(2221, 'Fabricación de formas básicas de plástico'),
(2229, 'Fabricación de artículos de plástico n.c.p.'),
(2310, 'Fabricación de vidrio y productos de vidrio'),
(2391, 'Fabricación de productos refractarios'),
(2392, 'Fabricación de materiales de arcilla para la construcción'),
(2393, 'Fabricación de otros productos de cerámica y porcelana'),
(2394, 'Fabricación de cemento, cal y yeso'),
(2395, 'Fabricación de artículos de hormigón, cemento y yeso'),
(2396, 'Corte, tallado y acabado de la piedra'),
(2399, 'Fabricación de otros productos minerales no metálicos n.c.p.'),
(2410, 'Industrias básicas de hierro y de acero'),
(2421, 'Industrias básicas de metales preciosos'),
(2429, 'Industrias básicas de otros metales no ferrosos'),
(2431, 'Fundición de hierro y de acero'),
(2432, 'Fundición de metales no ferrosos'),
(2511, 'Fabricación de productos metálicos para uso estructural'),
(2512, 'Fabricación de tanques, depósitos y recipientes de metal, excepto los utilizados para el envase o transporte de mercancías'),
(2513, 'Fabricación de generadores de vapor, excepto calderas de agua caliente para calefacción central'),
(2520, 'Fabricación de armas y municiones'),
(2591, 'Forja, prensado, estampado y laminado de metal; pulvimetalurgia'),
(2592, 'Tratamiento y revestimiento de metales; mecanizado'),
(2593, 'Fabricación de artículos de cuchillería, herramientas de mano y artículos de ferretería'),
(2599, 'Fabricación de otros productos elaborados de metal n.c.p.'),
(2610, 'Fabricación de componentes y tableros electrónicos'),
(2620, 'Fabricación de computadoras y de equipo periférico'),
(2630, 'Fabricación de equipos de comunicación'),
(2640, 'Fabricación de aparatos electrónicos de consumo'),
(2651, 'Fabricación de equipo de medición, prueba, navegación y control'),
(2652, 'Fabricación de relojes'),
(2660, 'Fabricación de equipo de irradiación y equipo electrónico de uso médico y terapéutico'),
(2670, 'Fabricación de instrumentos ópticos y equipo fotográfico'),
(2680, 'Fabricación de medios magnéticos y ópticos para almacenamiento de datos'),
(2711, 'Fabricación de motores, generadores y transformadores eléctricos'),
(2712, 'Fabricación de aparatos de distribución y control de la energía eléctrica'),
(2720, 'Fabricación de pilas, baterías y acumuladores eléctricos'),
(2731, 'Fabricación de hilos y cables eléctricos y de fibra óptica'),
(2732, 'Fabricación de dispositivos de cableado'),
(2740, 'Fabricación de equipos eléctricos de iluminación'),
(2750, 'Fabricación de aparatos de uso doméstico'),
(2790, 'Fabricación de otros tipos de equipo eléctrico n.c.p.'),
(2811, 'Fabricación de motores, turbinas, y partes para motores de combustión interna'),
(2812, 'Fabricación de equipos de potencia hidráulica y neumática'),
(2813, 'Fabricación de otras bombas, compresores, grifos y válvulas'),
(2814, 'Fabricación de cojinetes, engranajes, trenes de engranajes y piezas de transmisión'),
(2815, 'Fabricación de hornos, hogares y quemadores industriales'),
(2816, 'Fabricación de equipo de elevación y manipulación'),
(2817, 'Fabricación de maquinaria y equipo de oficina (excepto computadoras y equipo periférico)'),
(2818, 'Fabricación de herramientas manuales con motor'),
(2819, 'Fabricación de otros tipos de maquinaria y equipo de uso general n.c.p.'),
(2821, 'Fabricación de maquinaria agropecuaria y forestal'),
(2822, 'Fabricación de máquinas formadoras de metal y de máquinas herramienta'),
(2823, 'Fabricación de maquinaria para la metalurgia'),
(2824, 'Fabricación de maquinaria para explotación de minas y canteras y para obras de construcción'),
(2825, 'Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco'),
(2826, 'Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros'),
(2829, 'Fabricación de otros tipos de maquinaria y equipo de uso especial n.c.p.'),
(2910, 'Fabricación de vehículos automotores y sus motores'),
(2920, 'Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques'),
(2930, 'Fabricación de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores'),
(3011, 'Construcción de barcos y de estructuras flotantes'),
(3012, 'Construcción de embarcaciones de recreo y deporte'),
(3020, 'Fabricación de locomotoras y de material rodante para ferrocarriles'),
(3030, 'Fabricación de aeronaves, naves espaciales y de maquinaria conexa'),
(3040, 'Fabricación de vehículos militares de combate'),
(3091, 'Fabricación de motocicletas'),
(3092, 'Fabricación de bicicletas y de sillas de ruedas para personas con discapacidad'),
(3099, 'Fabricación de otros tipos de equipo de transporte n.c.p.'),
(3110, 'Fabricación de muebles'),
(3120, 'Fabricación de colchones y somieres'),
(3210, 'Fabricación de joyas, bisutería y artículos conexos'),
(3220, 'Fabricación de instrumentos musicales'),
(3230, 'Fabricación de artículos y equipo para la práctica del deporte'),
(3240, 'Fabricación de juegos, juguetes y rompecabezas'),
(3250, 'Fabricación de instrumentos, aparatos y materiales médicos y odontológicos (incluido mobiliario)'),
(3290, 'Otras industrias manufactureras n.c.p.'),
(3311, 'Mantenimiento y reparación especializado de productos elaborados en metal'),
(3312, 'Mantenimiento y reparación especializado de maquinaria y equipo'),
(3313, 'Mantenimiento y reparación especializado de equipo electrónico y óptico'),
(3314, 'Mantenimiento y reparación especializado de equipo eléctrico'),
(3315, 'Mantenimiento y reparación especializado de equipo de transporte, excepto los vehículos automotores, motocicletas y bicicletas'),
(3319, 'Mantenimiento y reparación de otros tipos de equipos y sus componentes n.c.p.'),
(3320, 'Instalación especializada de maquinaria y equipo industrial'),
(3511, 'Generación de energía eléctrica'),
(3512, 'Transmisión de energía eléctrica'),
(3513, 'Distribución de energía eléctrica'),
(3514, 'Comercialización de energía eléctrica'),
(3520, 'Producción de gas; distribución de combustibles gaseosos por tuberías'),
(3530, 'Suministro de vapor y aire acondicionado'),
(3600, 'Captación, tratamiento y distribución de agua'),
(3700, 'Evacuación y tratamiento de aguas residuales'),
(3811, 'Recolección de desechos no peligrosos'),
(3812, 'Recolección de desechos peligrosos'),
(3821, 'Tratamiento y disposición de desechos no peligrosos'),
(3822, 'Tratamiento y disposición de desechos peligrosos'),
(3830, 'Recuperación de materiales'),
(3900, 'Actividades de saneamiento ambiental y otros servicios de gestión de desechos'),
(4111, 'Construcción de edificios residenciales'),
(4112, 'Construcción de edificios no residenciales'),
(4210, 'Construcción de carreteras y vías de ferrocarril'),
(4220, 'Construcción de proyectos de servicio público'),
(4290, 'Construcción de otras obras de ingeniería civil'),
(4311, 'Demolición'),
(4312, 'Preparación del terreno'),
(4321, 'Instalaciones eléctricas'),
(4322, 'Instalaciones de fontanería, calefacción y aire acondicionado'),
(4329, 'Otras instalaciones especializadas'),
(4330, 'Terminación y acabado de edificios y obras de ingeniería civil'),
(4390, 'Otras actividades especializadas para la construcción de edificios y obras de ingeniería civil'),
(4511, 'Comercio de vehículos automotores nuevos'),
(4512, 'Comercio de vehículos automotores usados'),
(4520, 'Mantenimiento y reparación de vehículos automotores'),
(4530, 'Comercio de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores'),
(4541, 'Comercio de motocicletas y de sus partes, piezas y accesorios'),
(4542, 'Mantenimiento y reparación de motocicletas y de sus partes y piezas'),
(4610, 'Comercio al por mayor a cambio de una retribución o por contrata'),
(4620, 'Comercio al por mayor de materias primas agropecuarias; animales vivos'),
(4631, 'Comercio al por mayor de productos alimenticios'),
(4632, 'Comercio al por mayor de bebidas y tabaco'),
(4641, 'Comercio al por mayor de productos textiles, productos confeccionados para uso doméstico'),
(4642, 'Comercio al por mayor de prendas de vestir'),
(4643, 'Comercio al por mayor de calzado'),
(4644, 'Comercio al por mayor de aparatos y equipo de uso doméstico'),
(4645, 'Comercio al por mayor de productos farmacéuticos, medicinales, cosméticos y de tocador'),
(4649, 'Comercio al por mayor de otros utensilios domésticos n.c.p.'),
(4651, 'Comercio al por mayor de computadores, equipo periférico y programas de informática'),
(4652, 'Comercio al por mayor de equipo, partes y piezas electrónicos y de telecomunicaciones'),
(4653, 'Comercio al por mayor de maquinaria y equipo agropecuarios'),
(4659, 'Comercio al por mayor de otros tipos de maquinaria y equipo n.c.p.'),
(4661, 'Comercio al por mayor de combustibles sólidos, líquidos, gaseosos y productos conexos'),
(4662, 'Comercio al por mayor de metales y productos metalíferos'),
(4663, 'Comercio al por mayor de materiales de construcción, artículos de ferretería, pinturas, productos de vidrio, equipo y materiales de fontanería y calefacción'),
(4664, 'Comercio al por mayor de productos químicos básicos, cauchos y plásticos en formas primarias y productos químicos de uso agropecuario'),
(4665, 'Comercio al por mayor de desperdicios, desechos y chatarra'),
(4669, 'Comercio al por mayor de otros productos n.c.p.'),
(4690, 'Comercio al por mayor no especializado'),
(4711, 'Comercio al por menor en establecimientos no especializados con surtido compuesto principalmente por alimentos, bebidas o tabaco'),
(4719, 'Comercio al por menor en establecimientos no especializados, con surtido compuesto principalmente por productos diferentes de alimentos (víveres en general), bebidas y tabaco'),
(4721, 'Comercio al por menor de productos agrícolas para el consumo en establecimientos especializados'),
(4722, 'Comercio al por menor de leche, productos lácteos y huevos, en establecimientos especializados'),
(4723, 'Comercio al por menor de carnes (incluye aves de corral), productos cárnicos, pescados y productos de mar, en establecimientos especializados'),
(4724, 'Comercio al por menor de bebidas y productos del tabaco, en establecimientos especializados'),
(4729, 'Comercio al por menor de otros productos alimenticios n.c.p., en establecimientos especializados'),
(4731, 'Comercio al por menor de combustible para automotores'),
(4732, 'Comercio al por menor de lubricantes (aceites, grasas), aditivos y productos de limpieza para vehículos automotores'),
(4741, 'Comercio al por menor de computadores, equipos periféricos, programas de informática y equipos de telecomunicaciones en establecimientos especializados'),
(4742, 'Comercio al por menor de equipos y aparatos de sonido y de video, en establecimientos especializados'),
(4751, 'Comercio al por menor de productos textiles en establecimientos especializados'),
(4752, 'Comercio al por menor de artículos de ferretería, pinturas y productos de vidrio en establecimientos especializados'),
(4753, 'Comercio al por menor de tapices, alfombras y cubrimientos para paredes y pisos en establecimientos especializados'),
(4754, 'Comercio al por menor de electrodomésticos y gasodomésticos de uso doméstico, muebles y equipos de iluminación'),
(4755, 'Comercio al por menor de artículos y utensilios de uso doméstico'),
(4759, 'Comercio al por menor de otros artículos domésticos en establecimientos especializados'),
(4761, 'Comercio al por menor de libros, periódicos, materiales y artículos de papelería y escritorio, en establecimientos especializados'),
(4762, 'Comercio al por menor de artículos deportivos, en establecimientos especializados'),
(4769, 'Comercio al por menor de otros artículos culturales y de entretenimiento n.c.p. en establecimientos especializados'),
(4771, 'Comercio al por menor de prendas de vestir y sus accesorios (incluye artículos de piel) en establecimientos especializados'),
(4772, 'Comercio al por menor de todo tipo de calzado y artículos de cuero y sucedáneos del cuero en establecimientos especializados.'),
(4773, 'Comercio al por menor de productos farmacéuticos y medicinales, cosméticos y artículos de tocador en establecimientos especializados'),
(4774, 'Comercio al por menor de otros productos nuevos en establecimientos especializados'),
(4775, 'Comercio al por menor de artículos de segunda mano'),
(4781, 'Comercio al por menor de alimentos, bebidas y tabaco, en puestos de venta móviles'),
(4782, 'Comercio al por menor de productos textiles, prendas de vestir y calzado, en puestos de venta móviles'),
(4789, 'Comercio al por menor de otros productos en puestos de venta móviles'),
(4791, 'Comercio al por menor realizado a través de Internet'),
(4792, 'Comercio al por menor realizado a través de casas de venta o por correo'),
(4799, 'Otros tipos de comercio al por menor no realizado en establecimientos, puestos de venta o mercados.'),
(4911, 'Transporte férreo de pasajeros'),
(4912, 'Transporte férreo de carga'),
(4921, 'Transporte de pasajeros'),
(4922, 'Transporte mixto'),
(4923, 'Transporte de carga por carretera'),
(4930, 'Transporte por tuberías'),
(5011, 'Transporte de pasajeros marítimo y de cabotaje'),
(5012, 'Transporte de carga marítimo y de cabotaje'),
(5021, 'Transporte fluvial de pasajeros'),
(5022, 'Transporte fluvial de carga'),
(5111, 'Transporte aéreo nacional de pasajeros'),
(5112, 'Transporte aéreo internacional de pasajeros'),
(5121, 'Transporte aéreo nacional de carga'),
(5122, 'Transporte aéreo internacional de carga'),
(5210, 'Almacenamiento y depósito'),
(5221, 'Actividades de estaciones, vías y servicios complementarios para el transporte terrestre'),
(5222, 'Actividades de puertos y servicios complementarios para el transporte acuático'),
(5223, 'Actividades de aeropuertos, servicios de navegación aérea y demás actividades conexas al transporte aéreo'),
(5224, 'Manipulación de carga'),
(5229, 'Otras actividades complementarias al transporte'),
(5310, 'Actividades postales nacionales'),
(5320, 'Actividades de mensajería'),
(5511, 'Alojamiento en hoteles'),
(5512, 'Alojamiento en apartahoteles'),
(5513, 'Alojamiento en centros vacacionales'),
(5514, 'Alojamiento rural'),
(5519, 'Otros tipos de alojamientos para visitantes'),
(5520, 'Actividades de zonas de camping y parques para vehículos recreacionales'),
(5530, 'Servicio por horas'),
(5590, 'Otros tipos de alojamiento n.c.p.'),
(5611, 'Expendio a la mesa de comidas preparadas'),
(5612, 'Expendio por autoservicio de comidas preparadas'),
(5613, 'Expendio de comidas preparadas en cafeterías'),
(5619, 'Otros tipos de expendio de comidas preparadas n.c.p.'),
(5621, 'Catering para eventos'),
(5629, 'Actividades de otros servicios de comidas'),
(5630, 'Expendio de bebidas alcohólicas para el consumo dentro del establecimiento'),
(5811, 'Edición de libros'),
(5812, 'Edición de directorios y listas de correo'),
(5813, 'Edición de periódicos, revistas y otras publicaciones periódicas'),
(5819, 'Otros trabajos de edición'),
(5820, 'Edición de programas de informática (software)'),
(5911, 'Actividades de producción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(5912, 'Actividades de posproducción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(5913, 'Actividades de distribución de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(5914, 'Actividades de exhibición de películas cinematográficas y videos'),
(5920, 'Actividades de grabación de sonido y edición de música'),
(6010, 'Actividades de programación y transmisión en el servicio de radiodifusión sonora'),
(6020, 'Actividades de programación y transmisión de televisión'),
(6110, 'Actividades de telecomunicaciones alámbricas'),
(6120, 'Actividades de telecomunicaciones inalámbricas'),
(6130, 'Actividades de telecomunicación satelital'),
(6190, 'Otras actividades de telecomunicaciones'),
(6201, 'Actividades de desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas)'),
(6202, 'Actividades de consultoría informática y actividades de administración de instalaciones informáticas'),
(6209, 'Otras actividades de tecnologías de información y actividades de servicios informáticos'),
(6311, 'Procesamiento de datos, alojamiento (hosting) y actividades relacionadas'),
(6312, 'Portales web'),
(6391, 'Actividades de agencias de noticias'),
(6399, 'Otras actividades de servicio de información n.c.p.'),
(6411, 'Banco Central'),
(6412, 'Bancos comerciales'),
(6421, 'Actividades de las corporaciones financieras'),
(6422, 'Actividades de las compañías de financiamiento'),
(6423, 'Banca de segundo piso'),
(6424, 'Actividades de las cooperativas financieras'),
(6431, 'Fideicomisos, fondos y entidades financieras similares'),
(6432, 'Fondos de cesantías'),
(6491, 'Leasing financiero (arrendamiento financiero)'),
(6492, 'Actividades financieras de fondos de empleados y otras formas asociativas del sector solidario'),
(6493, 'Actividades de compra de cartera o factoring'),
(6494, 'Otras actividades de distribución de fondos'),
(6495, 'Instituciones especiales oficiales'),
(6499, 'Otras actividades de servicio financiero, excepto las de seguros y pensiones n.c.p.'),
(6511, 'Seguros generales'),
(6512, 'Seguros de vida'),
(6513, 'Reaseguros'),
(6514, 'Capitalización'),
(6521, 'Servicios de seguros sociales de salud'),
(6522, 'Servicios de seguros sociales de riesgos profesionales'),
(6531, 'Régimen de prima media con prestación definida (RPM)'),
(6532, 'Régimen de ahorro individual (RAI)'),
(6611, 'Administración de mercados financieros'),
(6612, 'Corretaje de valores y de contratos de productos básicos'),
(6613, 'Otras actividades relacionadas con el mercado de valores'),
(6614, 'Actividades de las casas de cambio'),
(6615, 'Actividades de los profesionales de compra y venta de divisas'),
(6619, 'Otras actividades auxiliares de las actividades de servicios financieros n.c.p.'),
(6621, 'Actividades de agentes y corredores de seguros'),
(6629, 'Evaluación de riesgos y daños, y otras actividades de servicios auxiliares'),
(6630, 'Actividades de administración de fondos'),
(6810, 'Actividades inmobiliarias realizadas con bienes propios o arrendados'),
(6820, 'Actividades inmobiliarias realizadas a cambio de una retribución o por contrata'),
(6910, 'Actividades jurídicas'),
(6920, 'Actividades de contabilidad, teneduría de libros, auditoría financiera y asesoría tributaria'),
(7010, 'Actividades de administración empresarial'),
(7020, 'Actividades de consultaría de gestión'),
(7110, 'Actividades de arquitectura e ingeniería y otras actividades conexas de consultoría técnica'),
(7120, 'Ensayos y análisis técnicos'),
(7210, 'Investigaciones y desarrollo experimental en el campo de las ciencias naturales y la ingeniería'),
(7220, 'Investigaciones y desarrollo experimental en el campo de las ciencias sociales y las humanidades'),
(7310, 'Publicidad'),
(7320, 'Estudios de mercado y realización de encuestas de opinión pública'),
(7410, 'Actividades especializadas de diseño'),
(7420, 'Actividades de fotografía'),
(7490, 'Otras actividades profesionales, científicas y técnicas n.c.p.'),
(7500, 'Actividades veterinarias'),
(7710, 'Alquiler y arrendamiento de vehículos automotores'),
(7721, 'Alquiler y arrendamiento de equipo recreativo y deportivo'),
(7722, 'Alquiler de videos y discos'),
(7729, 'Alquiler y arrendamiento de otros efectos personales y enseres domésticos n.c.p.'),
(7730, 'Alquiler y arrendamiento de otros tipos de maquinaria, equipo y bienes tangibles n.c.p.'),
(7740, 'Arrendamiento de propiedad intelectual y productos similares, excepto obras protegidas por derechos de autor'),
(7810, 'Actividades de agencias de empleo'),
(7820, 'Actividades de agencias de empleo temporal'),
(7830, 'Otras actividades de suministro de recurso humano'),
(7911, 'Actividades de las agencias de viaje'),
(7912, 'Actividades de operadores turísticos'),
(7990, 'Otros servicios de reserva y actividades relacionadas'),
(8010, 'Actividades de seguridad privada'),
(8020, 'Actividades de servicios de sistemas de seguridad'),
(8030, 'Actividades de detectives e investigadores privados'),
(8110, 'Actividades combinadas de apoyo a instalaciones'),
(8121, 'Limpieza general interior de edificios'),
(8129, 'Otras actividades de limpieza de edificios e instalaciones industriales'),
(8130, 'Actividades de paisajismo y servicios de mantenimiento conexos'),
(8211, 'Actividades combinadas de servicios administrativos de oficina'),
(8219, 'Fotocopiado, preparación de documentos y otras actividades especializadas de apoyo a oficina'),
(8220, 'Actividades de centros de llamadas (Call center)'),
(8230, 'Organización de convenciones y eventos comerciales'),
(8291, 'Actividades de agencias de cobranza y oficinas de calificación crediticia'),
(8292, 'Actividades de envase y empaque'),
(8299, 'Otras actividades de servicio de apoyo a las empresas n.c.p.'),
(8411, 'Actividades legislativas de la administración pública'),
(8412, 'Actividades ejecutivas de la administración pública'),
(8413, 'Regulación de las actividades de organismos que prestan servicios de salud, educativos, culturales y otros servicios sociales, excepto servicios de seguridad social'),
(8414, 'Actividades reguladoras y facilitadoras de la actividad económica'),
(8415, 'Actividades de los otros órganos de control'),
(8421, 'Relaciones exteriores'),
(8422, 'Actividades de defensa'),
(8423, 'Orden público y actividades de seguridad'),
(8424, 'Administración de justicia'),
(8430, 'Actividades de planes de seguridad social de afiliación obligatoria'),
(8511, 'Educación de la primera infancia'),
(8512, 'Educación preescolar'),
(8513, 'Educación básica primaria'),
(8521, 'Educación básica secundaria'),
(8522, 'Educación media académica'),
(8523, 'Educación media técnica y de formación laboral'),
(8530, 'Establecimientos que combinan diferentes niveles de educación'),
(8541, 'Educación técnica profesional'),
(8542, 'Educación tecnológica'),
(8543, 'Educación de instituciones universitarias o de escuelas tecnológicas'),
(8544, 'Educación de universidades'),
(8551, 'Formación académica no formal'),
(8552, 'Enseñanza deportiva y recreativa'),
(8553, 'Enseñanza cultural'),
(8559, 'Otros tipos de educación n.c.p.'),
(8560, 'Actividades de apoyo a la educación'),
(8610, 'Actividades de hospitales y clínicas, con internación'),
(8621, 'Actividades de la práctica médica, sin internación'),
(8622, 'Actividades de la práctica odontológica'),
(8691, 'Actividades de apoyo diagnóstico'),
(8692, 'Actividades de apoyo terapéutico'),
(8699, 'Otras actividades de atención de la salud humana'),
(8710, 'Actividades de atención residencial medicalizada de tipo general'),
(8720, 'Actividades de atención residencial, para el cuidado de pacientes con retardo mental, enfermedad mental y consumo de sustancias psicoactivas'),
(8730, 'Actividades de atención en instituciones para el cuidado de personas mayores y/o discapacitadas'),
(8790, 'Otras actividades de atención en instituciones con alojamiento'),
(8810, 'Actividades de asistencia social sin alojamiento para personas mayores y discapacitadas'),
(8890, 'Otras actividades de asistencia social sin alojamiento'),
(9001, 'Creación literaria'),
(9002, 'Creación musical'),
(9003, 'Creación teatral'),
(9004, 'Creación audiovisual'),
(9005, 'Artes plásticas y visuales'),
(9006, 'Actividades teatrales'),
(9007, 'Actividades de espectáculos musicales en vivo'),
(9008, 'Otras actividades de espectáculos en vivo'),
(9101, 'Actividades de bibliotecas y archivos'),
(9102, 'Actividades y funcionamiento de museos, conservación de edificios y sitios históricos'),
(9103, 'Actividades de jardines botánicos, zoológicos y reservas naturales'),
(9200, 'Actividades de juegos de azar y apuestas'),
(9311, 'Gestión de instalaciones deportivas'),
(9312, 'Actividades de clubes deportivos'),
(9319, 'Otras actividades deportivas'),
(9321, 'Actividades de parques de atracciones y parques temáticos'),
(9329, 'Otras actividades recreativas y de esparcimiento n.c.p.'),
(9411, 'Actividades de asociaciones empresariales y de empleadores'),
(9412, 'Actividades de asociaciones profesionales'),
(9420, 'Actividades de sindicatos de empleados'),
(9491, 'Actividades de asociaciones religiosas'),
(9492, 'Actividades de asociaciones políticas'),
(9499, 'Actividades de otras asociaciones n.c.p.'),
(9511, 'Mantenimiento y reparación de computadores y de equipo periférico'),
(9512, 'Mantenimiento y reparación de equipos de comunicación'),
(9521, 'Mantenimiento y reparación de aparatos electrónicos de consumo'),
(9522, 'Mantenimiento y reparación de aparatos y equipos domésticos y de jardinería'),
(9523, 'Reparación de calzado y artículos de cuero'),
(9524, 'Reparación de muebles y accesorios para el hogar'),
(9529, 'Mantenimiento y reparación de otros efectos personales y enseres domésticos'),
(9601, 'Lavado y limpieza, incluso la limpieza en seco, de productos textiles y de piel'),
(9602, 'Peluquería y otros tratamientos de belleza'),
(9603, 'Pompas fúnebres y actividades relacionadas'),
(9609, 'Otras actividades de servicios personales n.c.p.'),
(9700, 'Actividades de los hogares individuales como empleadores de personal doméstico'),
(9810, 'Actividades no diferenciadas de los hogares individuales como productores de bienes para uso propio'),
(9820, 'Actividades no diferenciadas de los hogares individuales como productores de servicios para uso propio'),
(9900, 'Actividades de organizaciones y entidades extraterritoriales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_empresa`
--

CREATE TABLE `actividad_empresa` (
  `id_actividad_empresa` int(11) NOT NULL,
  `id_empresa` bigint(15) NOT NULL,
  `id_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad_empresa`
--

INSERT INTO `actividad_empresa` (`id_actividad_empresa`, `id_empresa`, `id_actividad`) VALUES
(1, 123, 161),
(2, 1075, 122),
(3, 1075, 124),
(4, 1075685565, 9700);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE `auditoria` (
  `id_auditoria` int(11) NOT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `id_empresa` bigint(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id_auditoria`, `puntaje`, `id_empresa`, `status`) VALUES
(3, NULL, 1075685565, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `nombre_ciudad` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `id_departamento`, `nombre_ciudad`) VALUES
(5001, 5, 'Medellín'),
(5002, 5, 'Abejorral'),
(5004, 5, 'Abriaquí'),
(5021, 5, 'Alejandría'),
(5030, 5, 'Amagá'),
(5031, 5, 'Amalfi'),
(5034, 5, 'Andes'),
(5036, 5, 'Angelópolis'),
(5038, 5, 'Angostura'),
(5040, 5, 'Anorí'),
(5042, 5, 'Santafé de Antioquia'),
(5044, 5, 'Anza'),
(5045, 5, 'Apartadó'),
(5051, 5, 'Arboletes'),
(5055, 5, 'Argelia'),
(5059, 5, 'Armenia'),
(5079, 5, 'Barbosa'),
(5086, 5, 'Belmira'),
(5088, 5, 'Bello'),
(5091, 5, 'Betania'),
(5093, 5, 'Betulia'),
(5101, 5, 'Ciudad Bolívar'),
(5107, 5, 'Briceño'),
(5113, 5, 'Buriticá'),
(5120, 5, 'Cáceres'),
(5125, 5, 'Caicedo'),
(5129, 5, 'Caldas'),
(5134, 5, 'Campamento'),
(5138, 5, 'Cañasgordas'),
(5142, 5, 'Caracolí'),
(5145, 5, 'Caramanta'),
(5147, 5, 'Carepa'),
(5148, 5, 'El Carmen de Viboral'),
(5150, 5, 'Carolina'),
(5154, 5, 'Caucasia'),
(5172, 5, 'Chigorodó'),
(5190, 5, 'Cisneros'),
(5197, 5, 'Cocorná'),
(5206, 5, 'Concepción'),
(5209, 5, 'Concordia'),
(5212, 5, 'Copacabana'),
(5234, 5, 'Dabeiba'),
(5237, 5, 'Don Matías'),
(5240, 5, 'Ebéjico'),
(5250, 5, 'El Bagre'),
(5264, 5, 'Entrerrios'),
(5266, 5, 'Envigado'),
(5282, 5, 'Fredonia'),
(5284, 5, 'Frontino'),
(5306, 5, 'Giraldo'),
(5308, 5, 'Girardota'),
(5310, 5, 'Gómez Plata'),
(5313, 5, 'Granada'),
(5315, 5, 'Guadalupe'),
(5318, 5, 'Guarne'),
(5321, 5, 'Guatapé'),
(5347, 5, 'Heliconia'),
(5353, 5, 'Hispania'),
(5360, 5, 'Itagui'),
(5361, 5, 'Ituango'),
(5364, 5, 'Jardín'),
(5368, 5, 'Jericó'),
(5376, 5, 'La Ceja'),
(5380, 5, 'La Estrella'),
(5390, 5, 'La Pintada'),
(5400, 5, 'La Unión'),
(5411, 5, 'Liborina'),
(5425, 5, 'Maceo'),
(5440, 5, 'Marinilla'),
(5467, 5, 'Montebello'),
(5475, 5, 'Murindó'),
(5480, 5, 'Mutatá'),
(5483, 5, 'Nariño'),
(5490, 5, 'Necoclí'),
(5495, 5, 'Nechí'),
(5501, 5, 'Olaya'),
(5541, 5, 'Peñol'),
(5543, 5, 'Peque'),
(5576, 5, 'Pueblorrico'),
(5579, 5, 'Puerto Berrío'),
(5585, 5, 'Puerto Nare'),
(5591, 5, 'Puerto Triunfo'),
(5604, 5, 'Remedios'),
(5607, 5, 'Retiro'),
(5615, 5, 'Rionegro'),
(5628, 5, 'Sabanalarga'),
(5631, 5, 'Sabaneta'),
(5642, 5, 'Salgar'),
(5647, 5, 'San Andrés de Cuerquía'),
(5649, 5, 'San Carlos'),
(5652, 5, 'San Francisco'),
(5656, 5, 'San Jerónimo'),
(5658, 5, 'San José de La Montaña'),
(5659, 5, 'San Juan de Urabá'),
(5660, 5, 'San Luis'),
(5664, 5, 'San Pedro'),
(5665, 5, 'San Pedro de Uraba'),
(5667, 5, 'San Rafael'),
(5670, 5, 'San Roque'),
(5674, 5, 'San Vicente'),
(5679, 5, 'Santa Bárbara'),
(5686, 5, 'Santa Rosa de Osos'),
(5690, 5, 'Santo Domingo'),
(5697, 5, 'El Santuario'),
(5736, 5, 'Segovia'),
(5756, 5, 'Sonsón'),
(5761, 5, 'Sopetrán'),
(5789, 5, 'Támesis'),
(5790, 5, 'Tarazá'),
(5792, 5, 'Tarso'),
(5809, 5, 'Titiribí'),
(5819, 5, 'Toledo'),
(5837, 5, 'Turbo'),
(5842, 5, 'Uramita'),
(5847, 5, 'Urrao'),
(5854, 5, 'Valdivia'),
(5856, 5, 'Valparaíso'),
(5858, 5, 'Vegachí'),
(5861, 5, 'Venecia'),
(5873, 5, 'Vigía del Fuerte'),
(5885, 5, 'Yalí'),
(5887, 5, 'Yarumal'),
(5890, 5, 'Yolombó'),
(5893, 5, 'Yondó'),
(5895, 5, 'Zaragoza'),
(8001, 8, 'Barranquilla'),
(8078, 8, 'Baranoa'),
(8137, 8, 'Campo de La Cruz'),
(8141, 8, 'Candelaria'),
(8296, 8, 'Galapa'),
(8372, 8, 'Juan de Acosta'),
(8421, 8, 'Luruaco'),
(8433, 8, 'Malambo'),
(8436, 8, 'Manatí'),
(8520, 8, 'Palmar de Varela'),
(8549, 8, 'Piojó'),
(8558, 8, 'Polonuevo'),
(8560, 8, 'Ponedera'),
(8573, 8, 'Puerto Colombia'),
(8606, 8, 'Repelón'),
(8634, 8, 'Sabanagrande'),
(8638, 8, 'Sabanalarga'),
(8675, 8, 'Santa Lucía'),
(8685, 8, 'Santo Tomás'),
(8758, 8, 'Soledad'),
(8770, 8, 'Suan'),
(8832, 8, 'Tubará'),
(8849, 8, 'Usiacurí'),
(11001, 11, 'Bogotá D.C.'),
(13001, 13, 'Cartagena'),
(13006, 13, 'Achí'),
(13030, 13, 'Altos del Rosario'),
(13042, 13, 'Arenal'),
(13052, 13, 'Arjona'),
(13062, 13, 'Arroyohondo'),
(13074, 13, 'Barranco de Loba'),
(13140, 13, 'Calamar'),
(13160, 13, 'Cantagallo'),
(13188, 13, 'Cicuco'),
(13212, 13, 'Córdoba'),
(13222, 13, 'Clemencia'),
(13244, 13, 'El Carmen de Bolívar'),
(13248, 13, 'El Guamo'),
(13268, 13, 'El Peñón'),
(13300, 13, 'Hatillo de Loba'),
(13430, 13, 'Magangué'),
(13433, 13, 'Mahates'),
(13440, 13, 'Margarita'),
(13442, 13, 'María la Baja'),
(13458, 13, 'Montecristo'),
(13468, 13, 'Mompós'),
(13473, 13, 'Morales'),
(13490, 13, 'Norosí'),
(13549, 13, 'Pinillos'),
(13580, 13, 'Regidor'),
(13600, 13, 'Río Viejo'),
(13620, 13, 'San Cristóbal'),
(13647, 13, 'San Estanislao'),
(13650, 13, 'San Fernando'),
(13654, 13, 'San Jacinto'),
(13655, 13, 'San Jacinto del Cauca'),
(13657, 13, 'San Juan Nepomuceno'),
(13667, 13, 'San Martín de Loba'),
(13670, 13, 'San Pablo de Borbur'),
(13673, 13, 'Santa Catalina'),
(13683, 13, 'Santa Rosa'),
(13688, 13, 'Santa Rosa del Sur'),
(13744, 13, 'Simití'),
(13760, 13, 'Soplaviento'),
(13780, 13, 'Talaigua Nuevo'),
(13810, 13, 'Tiquisio'),
(13836, 13, 'Turbaco'),
(13838, 13, 'Turbaná'),
(13873, 13, 'Villanueva'),
(13894, 13, 'Zambrano'),
(15001, 15, 'Tunja'),
(15022, 15, 'Almeida'),
(15047, 15, 'Aquitania'),
(15051, 15, 'Arcabuco'),
(15087, 15, 'Belén'),
(15090, 15, 'Berbeo'),
(15092, 15, 'Betéitiva'),
(15097, 15, 'Boavita'),
(15104, 15, 'Boyacá'),
(15106, 15, 'Briceño'),
(15109, 15, 'Buena Vista'),
(15114, 15, 'Busbanzá'),
(15131, 15, 'Caldas'),
(15135, 15, 'Campohermoso'),
(15162, 15, 'Cerinza'),
(15172, 15, 'Chinavita'),
(15176, 15, 'Chiquinquirá'),
(15180, 15, 'Chiscas'),
(15183, 15, 'Chita'),
(15185, 15, 'Chitaraque'),
(15187, 15, 'Chivatá'),
(15189, 15, 'Ciénega'),
(15204, 15, 'Cómbita'),
(15212, 15, 'Coper'),
(15215, 15, 'Corrales'),
(15218, 15, 'Covarachía'),
(15223, 15, 'Cubará'),
(15224, 15, 'Cucaita'),
(15226, 15, 'Cuítiva'),
(15232, 15, 'Chíquiza'),
(15236, 15, 'Chivor'),
(15238, 15, 'Duitama'),
(15244, 15, 'El Cocuy'),
(15248, 15, 'El Espino'),
(15272, 15, 'Firavitoba'),
(15276, 15, 'Floresta'),
(15293, 15, 'Gachantivá'),
(15296, 15, 'Gameza'),
(15299, 15, 'Garagoa'),
(15317, 15, 'Guacamayas'),
(15322, 15, 'Guateque'),
(15325, 15, 'Guayatá'),
(15332, 15, 'Güicán'),
(15362, 15, 'Iza'),
(15367, 15, 'Jenesano'),
(15368, 15, 'Jericó'),
(15377, 15, 'Labranzagrande'),
(15380, 15, 'La Capilla'),
(15401, 15, 'La Victoria'),
(15403, 15, 'La Uvita'),
(15407, 15, 'Villa de Leyva'),
(15425, 15, 'Macanal'),
(15442, 15, 'Maripí'),
(15455, 15, 'Miraflores'),
(15464, 15, 'Mongua'),
(15466, 15, 'Monguí'),
(15469, 15, 'Moniquirá'),
(15476, 15, 'Motavita'),
(15480, 15, 'Muzo'),
(15491, 15, 'Nobsa'),
(15494, 15, 'Nuevo Colón'),
(15500, 15, 'Oicatá'),
(15507, 15, 'Otanche'),
(15511, 15, 'Pachavita'),
(15514, 15, 'Páez'),
(15516, 15, 'Paipa'),
(15518, 15, 'Pajarito'),
(15522, 15, 'Panqueba'),
(15531, 15, 'Pauna'),
(15533, 15, 'Paya'),
(15537, 15, 'Paz de Río'),
(15542, 15, 'Pesca'),
(15550, 15, 'Pisba'),
(15572, 15, 'Puerto Boyacá'),
(15580, 15, 'Quípama'),
(15599, 15, 'Ramiriquí'),
(15600, 15, 'Ráquira'),
(15621, 15, 'Rondón'),
(15632, 15, 'Saboyá'),
(15638, 15, 'Sáchica'),
(15646, 15, 'Samacá'),
(15660, 15, 'San Eduardo'),
(15664, 15, 'San José de Pare'),
(15667, 15, 'San Luis de Gaceno'),
(15673, 15, 'San Mateo'),
(15676, 15, 'San Miguel de Sema'),
(15681, 15, 'San Pablo de Borbur'),
(15686, 15, 'Santana'),
(15690, 15, 'Santa María'),
(15693, 15, 'Santa Rosa de Viterbo'),
(15696, 15, 'Santa Sofía'),
(15720, 15, 'Sativanorte'),
(15723, 15, 'Sativasur'),
(15740, 15, 'Siachoque'),
(15753, 15, 'Soatá'),
(15755, 15, 'Socotá'),
(15757, 15, 'Socha'),
(15759, 15, 'Sogamoso'),
(15761, 15, 'Somondoco'),
(15762, 15, 'Sora'),
(15763, 15, 'Sotaquirá'),
(15764, 15, 'Soracá'),
(15774, 15, 'Susacón'),
(15776, 15, 'Sutamarchán'),
(15778, 15, 'Sutatenza'),
(15790, 15, 'Tasco'),
(15798, 15, 'Tenza'),
(15804, 15, 'Tibaná'),
(15806, 15, 'Tibasosa'),
(15808, 15, 'Tinjacá'),
(15810, 15, 'Tipacoque'),
(15814, 15, 'Toca'),
(15816, 15, 'Togüí'),
(15820, 15, 'Tópaga'),
(15822, 15, 'Tota'),
(15832, 15, 'Tununguá'),
(15835, 15, 'Turmequé'),
(15837, 15, 'Tuta'),
(15839, 15, 'Tutazá'),
(15842, 15, 'Umbita'),
(15861, 15, 'Ventaquemada'),
(15879, 15, 'Viracachá'),
(15897, 15, 'Zetaquira'),
(17001, 17, 'Manizales'),
(17013, 17, 'Aguadas'),
(17042, 17, 'Anserma'),
(17050, 17, 'Aranzazu'),
(17088, 17, 'Belalcázar'),
(17174, 17, 'Chinchiná'),
(17272, 17, 'Filadelfia'),
(17380, 17, 'La Dorada'),
(17388, 17, 'La Merced'),
(17433, 17, 'Manzanares'),
(17442, 17, 'Marmato'),
(17444, 17, 'Marquetalia'),
(17446, 17, 'Marulanda'),
(17486, 17, 'Neira'),
(17495, 17, 'Norcasia'),
(17513, 17, 'Pácora'),
(17524, 17, 'Palestina'),
(17541, 17, 'Pensilvania'),
(17614, 17, 'Riosucio'),
(17616, 17, 'Risaralda'),
(17653, 17, 'Salamina'),
(17662, 17, 'Samaná'),
(17665, 17, 'San José'),
(17777, 17, 'Supía'),
(17867, 17, 'Victoria'),
(17873, 17, 'Villamaría'),
(17877, 17, 'Viterbo'),
(18001, 18, 'Florencia'),
(18029, 18, 'Albania'),
(18094, 18, 'Belén de Los Andaquies'),
(18150, 18, 'Cartagena del Chairá'),
(18205, 18, 'Curillo'),
(18247, 18, 'El Doncello'),
(18256, 18, 'El Paujil'),
(18410, 18, 'La Montañita'),
(18460, 18, 'Milán'),
(18479, 18, 'Morelia'),
(18592, 18, 'Puerto Rico'),
(18610, 18, 'San José del Fragua'),
(18753, 18, 'San Vicente del Caguán'),
(18756, 18, 'Solano'),
(18785, 18, 'Solita'),
(18860, 18, 'Valparaíso'),
(19001, 19, 'Popayán'),
(19022, 19, 'Almaguer'),
(19050, 19, 'Argelia'),
(19075, 19, 'Balboa'),
(19100, 19, 'Bolívar'),
(19110, 19, 'Buenos Aires'),
(19130, 19, 'Cajibío'),
(19137, 19, 'Caldono'),
(19142, 19, 'Caloto'),
(19212, 19, 'Corinto'),
(19256, 19, 'El Tambo'),
(19290, 19, 'Florencia'),
(19300, 19, 'Guachené'),
(19318, 19, 'Guapi'),
(19355, 19, 'Inzá'),
(19364, 19, 'Jambaló'),
(19392, 19, 'La Sierra'),
(19397, 19, 'La Vega'),
(19418, 19, 'López'),
(19450, 19, 'Mercaderes'),
(19455, 19, 'Miranda'),
(19473, 19, 'Morales'),
(19513, 19, 'Padilla'),
(19517, 19, 'Páez'),
(19532, 19, 'Patía'),
(19533, 19, 'Piamonte'),
(19548, 19, 'Piendamó'),
(19573, 19, 'Puerto Tejada'),
(19585, 19, 'Puracé'),
(19622, 19, 'Rosas'),
(19693, 19, 'San Sebastián'),
(19698, 19, 'Santander de Quilichao'),
(19701, 19, 'Santa Rosa'),
(19743, 19, 'Silvia'),
(19760, 19, 'Sotara'),
(19780, 19, 'Suárez'),
(19785, 19, 'Sucre'),
(19807, 19, 'Timbío'),
(19809, 19, 'Timbiquí'),
(19821, 19, 'Toribio'),
(19824, 19, 'Totoró'),
(19845, 19, 'Villa Rica'),
(20001, 20, 'Valledupar'),
(20011, 20, 'Aguachica'),
(20013, 20, 'Agustín Codazzi'),
(20032, 20, 'Astrea'),
(20045, 20, 'Becerril'),
(20060, 20, 'Bosconia'),
(20175, 20, 'Chimichagua'),
(20178, 20, 'Chiriguaná'),
(20228, 20, 'Curumaní'),
(20238, 20, 'El Copey'),
(20250, 20, 'El Paso'),
(20295, 20, 'Gamarra'),
(20310, 20, 'González'),
(20383, 20, 'La Gloria'),
(20400, 20, 'La Jagua de Ibirico'),
(20443, 20, 'Manaure'),
(20517, 20, 'Pailitas'),
(20550, 20, 'Pelaya'),
(20570, 20, 'Pueblo Bello'),
(20614, 20, 'Río de Oro'),
(20621, 20, 'La Paz'),
(20710, 20, 'San Alberto'),
(20750, 20, 'San Diego'),
(20770, 20, 'San Martín'),
(20787, 20, 'Tamalameque'),
(23001, 23, 'Montería'),
(23068, 23, 'Ayapel'),
(23079, 23, 'Buenavista'),
(23090, 23, 'Canalete'),
(23162, 23, 'Cereté'),
(23168, 23, 'Chimá'),
(23182, 23, 'Chinú'),
(23189, 23, 'Ciénaga de Oro'),
(23300, 23, 'Cotorra'),
(23350, 23, 'La Apartada'),
(23417, 23, 'Lorica'),
(23419, 23, 'Los Córdobas'),
(23464, 23, 'Momil'),
(23466, 23, 'Montelíbano'),
(23500, 23, 'Moñitos'),
(23555, 23, 'Planeta Rica'),
(23570, 23, 'Pueblo Nuevo'),
(23574, 23, 'Puerto Escondido'),
(23580, 23, 'Puerto Libertador'),
(23586, 23, 'Purísima'),
(23660, 23, 'Sahagún'),
(23670, 23, 'San Andrés Sotavento'),
(23672, 23, 'San Antero'),
(23675, 23, 'San Bernardo del Viento'),
(23678, 23, 'San Carlos'),
(23682, 23, 'San José de Uré'),
(23686, 23, 'San Pelayo'),
(23807, 23, 'Tierralta'),
(23815, 23, 'Tuchín'),
(23855, 23, 'Valencia'),
(25001, 25, 'Agua de Dios'),
(25019, 25, 'Albán'),
(25035, 25, 'Anapoima'),
(25040, 25, 'Anolaima'),
(25053, 25, 'Arbeláez'),
(25086, 25, 'Beltrán'),
(25095, 25, 'Bituima'),
(25099, 25, 'Bojacá'),
(25120, 25, 'Cabrera'),
(25123, 25, 'Cachipay'),
(25126, 25, 'Cajicá'),
(25148, 25, 'Caparrapí'),
(25151, 25, 'Caqueza'),
(25154, 25, 'Carmen de Carupa'),
(25168, 25, 'Chaguaní'),
(25175, 25, 'Chía'),
(25178, 25, 'Chipaque'),
(25181, 25, 'Choachí'),
(25183, 25, 'Chocontá'),
(25200, 25, 'Cogua'),
(25214, 25, 'Cota'),
(25224, 25, 'Cucunubá'),
(25245, 25, 'El Colegio'),
(25258, 25, 'El Peñón'),
(25260, 25, 'El Rosal'),
(25269, 25, 'Facatativá'),
(25279, 25, 'Fomeque'),
(25281, 25, 'Fosca'),
(25286, 25, 'Funza'),
(25288, 25, 'Fúquene'),
(25290, 25, 'Fusagasugá'),
(25293, 25, 'Gachala'),
(25295, 25, 'Gachancipá'),
(25297, 25, 'Gachetá'),
(25299, 25, 'Gama'),
(25307, 25, 'Girardot'),
(25312, 25, 'Granada'),
(25317, 25, 'Guachetá'),
(25320, 25, 'Guaduas'),
(25322, 25, 'Guasca'),
(25324, 25, 'Guataquí'),
(25326, 25, 'Guatavita'),
(25328, 25, 'Guayabal de Siquima'),
(25335, 25, 'Guayabetal'),
(25339, 25, 'Gutiérrez'),
(25368, 25, 'Jerusalén'),
(25372, 25, 'Junín'),
(25377, 25, 'La Calera'),
(25386, 25, 'La Mesa'),
(25394, 25, 'La Palma'),
(25398, 25, 'La Peña'),
(25402, 25, 'La Vega'),
(25407, 25, 'Lenguazaque'),
(25426, 25, 'Macheta'),
(25430, 25, 'Madrid'),
(25436, 25, 'Manta'),
(25438, 25, 'Medina'),
(25473, 25, 'Mosquera'),
(25483, 25, 'Nariño'),
(25486, 25, 'Nemocón'),
(25488, 25, 'Nilo'),
(25489, 25, 'Nimaima'),
(25491, 25, 'Nocaima'),
(25506, 25, 'Venecia'),
(25513, 25, 'Pacho'),
(25518, 25, 'Paime'),
(25524, 25, 'Pandi'),
(25530, 25, 'Paratebueno'),
(25535, 25, 'Pasca'),
(25572, 25, 'Puerto Salgar'),
(25580, 25, 'Pulí'),
(25592, 25, 'Quebradanegra'),
(25594, 25, 'Quetame'),
(25596, 25, 'Quipile'),
(25599, 25, 'Apulo'),
(25612, 25, 'Ricaurte'),
(25645, 25, 'San Antonio del Tequendama'),
(25649, 25, 'San Bernardo'),
(25653, 25, 'San Cayetano'),
(25658, 25, 'San Francisco'),
(25662, 25, 'San Juan de Río Seco'),
(25718, 25, 'Sasaima'),
(25736, 25, 'Sesquilé'),
(25740, 25, 'Sibaté'),
(25743, 25, 'Silvania'),
(25745, 25, 'Simijaca'),
(25754, 25, 'Soacha'),
(25758, 25, 'Sopó'),
(25769, 25, 'Subachoque'),
(25772, 25, 'Suesca'),
(25777, 25, 'Supatá'),
(25779, 25, 'Susa'),
(25781, 25, 'Sutatausa'),
(25785, 25, 'Tabio'),
(25793, 25, 'Tausa'),
(25797, 25, 'Tena'),
(25799, 25, 'Tenjo'),
(25805, 25, 'Tibacuy'),
(25807, 25, 'Tibirita'),
(25815, 25, 'Tocaima'),
(25817, 25, 'Tocancipá'),
(25823, 25, 'Topaipí'),
(25839, 25, 'Ubalá'),
(25841, 25, 'Ubaque'),
(25843, 25, 'Villa de San Diego de Ubate'),
(25845, 25, 'Une'),
(25851, 25, 'Útica'),
(25862, 25, 'Vergara'),
(25867, 25, 'Vianí'),
(25871, 25, 'Villagómez'),
(25873, 25, 'Villapinzón'),
(25875, 25, 'Villeta'),
(25878, 25, 'Viotá'),
(25885, 25, 'Yacopí'),
(25898, 25, 'Zipacón'),
(25899, 25, 'Zipaquirá'),
(27001, 27, 'Quibdó'),
(27006, 27, 'Acandí'),
(27025, 27, 'Alto Baudo'),
(27050, 27, 'Atrato'),
(27073, 27, 'Bagadó'),
(27075, 27, 'Bahía Solano'),
(27077, 27, 'Bajo Baudó'),
(27086, 27, 'Belén de Bajira'),
(27099, 27, 'Bojaya'),
(27135, 27, 'El Cantón del San Pablo'),
(27150, 27, 'Carmen del Darien'),
(27160, 27, 'Cértegui'),
(27205, 27, 'Condoto'),
(27245, 27, 'El Carmen de Atrato'),
(27250, 27, 'El Litoral del San Juan'),
(27361, 27, 'Istmina'),
(27372, 27, 'Juradó'),
(27413, 27, 'Lloró'),
(27425, 27, 'Medio Atrato'),
(27430, 27, 'Medio Baudó'),
(27450, 27, 'Medio San Juan'),
(27491, 27, 'Nóvita'),
(27495, 27, 'Nuquí'),
(27580, 27, 'Río Iro'),
(27600, 27, 'Río Quito'),
(27615, 27, 'Riosucio'),
(27660, 27, 'San José del Palmar'),
(27745, 27, 'Sipí'),
(27787, 27, 'Tadó'),
(27800, 27, 'Unguía'),
(27810, 27, 'Unión Panamericana'),
(41001, 41, 'Neiva'),
(41006, 41, 'Acevedo'),
(41013, 41, 'Agrado'),
(41016, 41, 'Aipe'),
(41020, 41, 'Algeciras'),
(41026, 41, 'Altamira'),
(41078, 41, 'Baraya'),
(41132, 41, 'Campoalegre'),
(41206, 41, 'Colombia'),
(41244, 41, 'Elías'),
(41298, 41, 'Garzón'),
(41306, 41, 'Gigante'),
(41319, 41, 'Guadalupe'),
(41349, 41, 'Hobo'),
(41357, 41, 'Iquira'),
(41359, 41, 'Isnos'),
(41378, 41, 'La Argentina'),
(41396, 41, 'La Plata'),
(41483, 41, 'Nátaga'),
(41503, 41, 'Oporapa'),
(41518, 41, 'Paicol'),
(41524, 41, 'Palermo'),
(41530, 41, 'Palestina'),
(41548, 41, 'Pital'),
(41551, 41, 'Pitalito'),
(41615, 41, 'Rivera'),
(41660, 41, 'Saladoblanco'),
(41668, 41, 'San Agustín'),
(41676, 41, 'Santa María'),
(41770, 41, 'Suaza'),
(41791, 41, 'Tarqui'),
(41797, 41, 'Tesalia'),
(41799, 41, 'Tello'),
(41801, 41, 'Teruel'),
(41807, 41, 'Timaná'),
(41872, 41, 'Villavieja'),
(41885, 41, 'Yaguará'),
(44001, 44, 'Riohacha'),
(44035, 44, 'Albania'),
(44078, 44, 'Barrancas'),
(44090, 44, 'Dibula'),
(44098, 44, 'Distracción'),
(44110, 44, 'El Molino'),
(44279, 44, 'Fonseca'),
(44378, 44, 'Hatonuevo'),
(44420, 44, 'La Jagua del Pilar'),
(44430, 44, 'Maicao'),
(44560, 44, 'Manaure'),
(44650, 44, 'San Juan del Cesar'),
(44847, 44, 'Uribia'),
(44855, 44, 'Urumita'),
(44874, 44, 'Villanueva'),
(47001, 47, 'Santa Marta'),
(47030, 47, 'Algarrobo'),
(47053, 47, 'Aracataca'),
(47058, 47, 'Ariguaní'),
(47161, 47, 'Cerro San Antonio'),
(47170, 47, 'Chivolo'),
(47189, 47, 'Ciénaga'),
(47205, 47, 'Concordia'),
(47245, 47, 'El Banco'),
(47258, 47, 'El Piñon'),
(47268, 47, 'El Retén'),
(47288, 47, 'Fundación'),
(47318, 47, 'Guamal'),
(47460, 47, 'Nueva Granada'),
(47541, 47, 'Pedraza'),
(47545, 47, 'Pijiño del Carmen'),
(47551, 47, 'Pivijay'),
(47555, 47, 'Plato'),
(47570, 47, 'Pueblo Viejo'),
(47605, 47, 'Remolino'),
(47660, 47, 'Sabanas de San Angel'),
(47675, 47, 'Salamina'),
(47692, 47, 'San Sebastián de Buenavista'),
(47703, 47, 'San Zenón'),
(47707, 47, 'Santa Ana'),
(47720, 47, 'Santa Bárbara de Pinto'),
(47745, 47, 'Sitionuevo'),
(47798, 47, 'Tenerife'),
(47960, 47, 'Zapayán'),
(47980, 47, 'Zona Bananera'),
(50001, 50, 'Villavicencio'),
(50006, 50, 'Acacias'),
(50110, 50, 'Barranca de Upía'),
(50124, 50, 'Cabuyaro'),
(50150, 50, 'Castilla la Nueva'),
(50223, 50, 'Cubarral'),
(50226, 50, 'Cumaral'),
(50245, 50, 'El Calvario'),
(50251, 50, 'El Castillo'),
(50270, 50, 'El Dorado'),
(50287, 50, 'Fuente de Oro'),
(50313, 50, 'Granada'),
(50318, 50, 'Guamal'),
(50325, 50, 'Mapiripán'),
(50330, 50, 'Mesetas'),
(50350, 50, 'La Macarena'),
(50370, 50, 'Uribe'),
(50400, 50, 'Lejanías'),
(50450, 50, 'Puerto Concordia'),
(50568, 50, 'Puerto Gaitán'),
(50573, 50, 'Puerto López'),
(50577, 50, 'Puerto Lleras'),
(50590, 50, 'Puerto Rico'),
(50606, 50, 'Restrepo'),
(50680, 50, 'San Carlos de Guaroa'),
(50683, 50, 'San Juan de Arama'),
(50686, 50, 'San Juanito'),
(50689, 50, 'San Martín'),
(50711, 50, 'Vista Hermosa'),
(52001, 52, 'Pasto'),
(52019, 52, 'Albán'),
(52022, 52, 'Aldana'),
(52036, 52, 'Ancuyá'),
(52051, 52, 'Arboleda'),
(52079, 52, 'Barbacoas'),
(52083, 52, 'Belén'),
(52110, 52, 'Buesaco'),
(52203, 52, 'Colón'),
(52207, 52, 'Consaca'),
(52210, 52, 'Contadero'),
(52215, 52, 'Córdoba'),
(52224, 52, 'Cuaspud'),
(52227, 52, 'Cumbal'),
(52233, 52, 'Cumbitara'),
(52240, 52, 'Chachagüí'),
(52250, 52, 'El Charco'),
(52254, 52, 'El Peñol'),
(52256, 52, 'El Rosario'),
(52258, 52, 'El Tablón de Gómez'),
(52260, 52, 'El Tambo'),
(52287, 52, 'Funes'),
(52317, 52, 'Guachucal'),
(52320, 52, 'Guaitarilla'),
(52323, 52, 'Gualmatán'),
(52352, 52, 'Iles'),
(52354, 52, 'Imués'),
(52356, 52, 'Ipiales'),
(52378, 52, 'La Cruz'),
(52381, 52, 'La Florida'),
(52385, 52, 'La Llanada'),
(52390, 52, 'La Tola'),
(52399, 52, 'La Unión'),
(52405, 52, 'Leiva'),
(52411, 52, 'Linares'),
(52418, 52, 'Los Andes'),
(52427, 52, 'Magüí'),
(52435, 52, 'Mallama'),
(52473, 52, 'Mosquera'),
(52480, 52, 'Nariño'),
(52490, 52, 'Olaya Herrera'),
(52506, 52, 'Ospina'),
(52520, 52, 'Francisco Pizarro'),
(52540, 52, 'Policarpa'),
(52560, 52, 'Potosí'),
(52565, 52, 'Providencia'),
(52573, 52, 'Puerres'),
(52585, 52, 'Pupiales'),
(52612, 52, 'Ricaurte'),
(52621, 52, 'Roberto Payán'),
(52678, 52, 'Samaniego'),
(52683, 52, 'Sandoná'),
(52685, 52, 'San Bernardo'),
(52687, 52, 'San Lorenzo'),
(52693, 52, 'San Pablo'),
(52694, 52, 'San Pedro de Cartago'),
(52696, 52, 'Santa Bárbara'),
(52699, 52, 'Santacruz'),
(52720, 52, 'Sapuyes'),
(52786, 52, 'Taminango'),
(52788, 52, 'Tangua'),
(52835, 52, 'San Andrés de Tumaco'),
(52838, 52, 'Túquerres'),
(52885, 52, 'Yacuanquer'),
(54001, 54, 'Cúcuta'),
(54003, 54, 'Abrego'),
(54051, 54, 'Arboledas'),
(54099, 54, 'Bochalema'),
(54109, 54, 'Bucarasica'),
(54125, 54, 'Cácota'),
(54128, 54, 'Cachirá'),
(54172, 54, 'Chinácota'),
(54174, 54, 'Chitagá'),
(54206, 54, 'Convención'),
(54223, 54, 'Cucutilla'),
(54239, 54, 'Durania'),
(54245, 54, 'El Carmen'),
(54250, 54, 'El Tarra'),
(54261, 54, 'El Zulia'),
(54313, 54, 'Gramalote'),
(54344, 54, 'Hacarí'),
(54347, 54, 'Herrán'),
(54377, 54, 'Labateca'),
(54385, 54, 'La Esperanza'),
(54398, 54, 'La Playa'),
(54405, 54, 'Los Patios'),
(54418, 54, 'Lourdes'),
(54480, 54, 'Mutiscua'),
(54498, 54, 'Ocaña'),
(54518, 54, 'Pamplona'),
(54520, 54, 'Pamplonita'),
(54553, 54, 'Puerto Santander'),
(54599, 54, 'Ragonvalia'),
(54660, 54, 'Salazar'),
(54670, 54, 'San Calixto'),
(54673, 54, 'San Cayetano'),
(54680, 54, 'Santiago'),
(54720, 54, 'Sardinata'),
(54743, 54, 'Silos'),
(54800, 54, 'Teorama'),
(54810, 54, 'Tibú'),
(54820, 54, 'Toledo'),
(54871, 54, 'Villa Caro'),
(54874, 54, 'Villa del Rosario'),
(63001, 63, 'Armenia'),
(63111, 63, 'Buenavista'),
(63130, 63, 'Calarcá'),
(63190, 63, 'Circasia'),
(63212, 63, 'Córdoba'),
(63272, 63, 'Filandia'),
(63302, 63, 'Génova'),
(63401, 63, 'La Tebaida'),
(63470, 63, 'Montenegro'),
(63548, 63, 'Pijao'),
(63594, 63, 'Quimbaya'),
(63690, 63, 'Salento'),
(66001, 66, 'Pereira'),
(66045, 66, 'Apía'),
(66075, 66, 'Balboa'),
(66088, 66, 'Belén de Umbría'),
(66170, 66, 'Dosquebradas'),
(66318, 66, 'Guática'),
(66383, 66, 'La Celia'),
(66400, 66, 'La Virginia'),
(66440, 66, 'Marsella'),
(66456, 66, 'Mistrató'),
(66572, 66, 'Pueblo Rico'),
(66594, 66, 'Quinchía'),
(66682, 66, 'Santa Rosa de Cabal'),
(66687, 66, 'Santuario'),
(68001, 68, 'Bucaramanga'),
(68013, 68, 'Aguada'),
(68020, 68, 'Albania'),
(68051, 68, 'Aratoca'),
(68077, 68, 'Barbosa'),
(68079, 68, 'Barichara'),
(68081, 68, 'Barrancabermeja'),
(68092, 68, 'Betulia'),
(68101, 68, 'Bolívar'),
(68121, 68, 'Cabrera'),
(68132, 68, 'California'),
(68147, 68, 'Capitanejo'),
(68152, 68, 'Carcasí'),
(68160, 68, 'Cepitá'),
(68162, 68, 'Cerrito'),
(68167, 68, 'Charalá'),
(68169, 68, 'Charta'),
(68176, 68, 'Chimá'),
(68179, 68, 'Chipatá'),
(68190, 68, 'Cimitarra'),
(68207, 68, 'Concepción'),
(68209, 68, 'Confines'),
(68211, 68, 'Contratación'),
(68217, 68, 'Coromoro'),
(68229, 68, 'Curití'),
(68235, 68, 'El Carmen de Chucurí'),
(68245, 68, 'El Guacamayo'),
(68250, 68, 'El Peñón'),
(68255, 68, 'El Playón'),
(68264, 68, 'Encino'),
(68266, 68, 'Enciso'),
(68271, 68, 'Florián'),
(68276, 68, 'Floridablanca'),
(68296, 68, 'Galán'),
(68298, 68, 'Gambita'),
(68307, 68, 'Girón'),
(68318, 68, 'Guaca'),
(68320, 68, 'Guadalupe'),
(68322, 68, 'Guapotá'),
(68324, 68, 'Guavatá'),
(68327, 68, 'Güepsa'),
(68344, 68, 'Hato'),
(68368, 68, 'Jesús María'),
(68370, 68, 'Jordán'),
(68377, 68, 'La Belleza'),
(68385, 68, 'Landázuri'),
(68397, 68, 'La Paz'),
(68406, 68, 'Lebríja'),
(68418, 68, 'Los Santos'),
(68425, 68, 'Macaravita'),
(68432, 68, 'Málaga'),
(68444, 68, 'Matanza'),
(68464, 68, 'Mogotes'),
(68468, 68, 'Molagavita'),
(68498, 68, 'Ocamonte'),
(68500, 68, 'Oiba'),
(68502, 68, 'Onzaga'),
(68522, 68, 'Palmar'),
(68524, 68, 'Palmas del Socorro'),
(68533, 68, 'Páramo'),
(68547, 68, 'Piedecuesta'),
(68549, 68, 'Pinchote'),
(68572, 68, 'Puente Nacional'),
(68573, 68, 'Puerto Parra'),
(68575, 68, 'Puerto Wilches'),
(68615, 68, 'Rionegro'),
(68655, 68, 'Sabana de Torres'),
(68669, 68, 'San Andrés'),
(68673, 68, 'San Benito'),
(68679, 68, 'San Gil'),
(68682, 68, 'San Joaquín'),
(68684, 68, 'San José de Miranda'),
(68686, 68, 'San Miguel'),
(68689, 68, 'San Vicente de Chucurí'),
(68705, 68, 'Santa Bárbara'),
(68720, 68, 'Santa Helena del Opón'),
(68745, 68, 'Simacota'),
(68755, 68, 'Socorro'),
(68770, 68, 'Suaita'),
(68773, 68, 'Sucre'),
(68780, 68, 'Suratá'),
(68820, 68, 'Tona'),
(68855, 68, 'Valle de San José'),
(68861, 68, 'Vélez'),
(68867, 68, 'Vetas'),
(68872, 68, 'Villanueva'),
(68895, 68, 'Zapatoca'),
(70001, 70, 'Sincelejo'),
(70110, 70, 'Buenavista'),
(70124, 70, 'Caimito'),
(70204, 70, 'Coloso'),
(70215, 70, 'Corozal'),
(70221, 70, 'Coveñas'),
(70230, 70, 'Chalán'),
(70233, 70, 'El Roble'),
(70235, 70, 'Galeras'),
(70265, 70, 'Guaranda'),
(70400, 70, 'La Unión'),
(70418, 70, 'Los Palmitos'),
(70429, 70, 'Majagual'),
(70473, 70, 'Morroa'),
(70508, 70, 'Ovejas'),
(70523, 70, 'Palmito'),
(70670, 70, 'Sampués'),
(70678, 70, 'San Benito Abad'),
(70702, 70, 'San Juan de Betulia'),
(70708, 70, 'San Marcos'),
(70713, 70, 'San Onofre'),
(70717, 70, 'San Pedro'),
(70742, 70, 'San Luis de Sincé'),
(70771, 70, 'Sucre'),
(70820, 70, 'Santiago de Tolú'),
(70823, 70, 'Tolú Viejo'),
(73001, 73, 'Ibagué'),
(73024, 73, 'Alpujarra'),
(73026, 73, 'Alvarado'),
(73030, 73, 'Ambalema'),
(73043, 73, 'Anzoátegui'),
(73055, 73, 'Armero'),
(73067, 73, 'Ataco'),
(73124, 73, 'Cajamarca'),
(73148, 73, 'Carmen de Apicala'),
(73152, 73, 'Casabianca'),
(73168, 73, 'Chaparral'),
(73200, 73, 'Coello'),
(73217, 73, 'Coyaima'),
(73226, 73, 'Cunday'),
(73236, 73, 'Dolores'),
(73268, 73, 'Espinal'),
(73270, 73, 'Falan'),
(73275, 73, 'Flandes'),
(73283, 73, 'Fresno'),
(73319, 73, 'Guamo'),
(73347, 73, 'Herveo'),
(73349, 73, 'Honda'),
(73352, 73, 'Icononzo'),
(73408, 73, 'Lérida'),
(73411, 73, 'Líbano'),
(73443, 73, 'Mariquita'),
(73449, 73, 'Melgar'),
(73461, 73, 'Murillo'),
(73483, 73, 'Natagaima'),
(73504, 73, 'Ortega'),
(73520, 73, 'Palocabildo'),
(73547, 73, 'Piedras'),
(73555, 73, 'Planadas'),
(73563, 73, 'Prado'),
(73585, 73, 'Purificación'),
(73616, 73, 'Rio Blanco'),
(73622, 73, 'Roncesvalles'),
(73624, 73, 'Rovira'),
(73671, 73, 'Saldaña'),
(73675, 73, 'San Antonio'),
(73678, 73, 'San Luis'),
(73686, 73, 'Santa Isabel'),
(73770, 73, 'Suárez'),
(73854, 73, 'Valle de San Juan'),
(73861, 73, 'Venadillo'),
(73870, 73, 'Villahermosa'),
(73873, 73, 'Villarrica'),
(76001, 76, 'Cali'),
(76020, 76, 'Alcalá'),
(76036, 76, 'Andalucía'),
(76041, 76, 'Ansermanuevo'),
(76054, 76, 'Argelia'),
(76100, 76, 'Bolívar'),
(76109, 76, 'Buenaventura'),
(76111, 76, 'Guadalajara de Buga'),
(76113, 76, 'Bugalagrande'),
(76122, 76, 'Caicedonia'),
(76126, 76, 'Calima'),
(76130, 76, 'Candelaria'),
(76147, 76, 'Cartago'),
(76233, 76, 'Dagua'),
(76243, 76, 'El Águila'),
(76246, 76, 'El Cairo'),
(76248, 76, 'El Cerrito'),
(76250, 76, 'El Dovio'),
(76275, 76, 'Florida'),
(76306, 76, 'Ginebra'),
(76318, 76, 'Guacarí'),
(76364, 76, 'Jamundí'),
(76377, 76, 'La Cumbre'),
(76400, 76, 'La Unión'),
(76403, 76, 'La Victoria'),
(76497, 76, 'Obando'),
(76520, 76, 'Palmira'),
(76563, 76, 'Pradera'),
(76606, 76, 'Restrepo'),
(76616, 76, 'Riofrío'),
(76622, 76, 'Roldanillo'),
(76670, 76, 'San Pedro'),
(76736, 76, 'Sevilla'),
(76823, 76, 'Toro'),
(76828, 76, 'Trujillo'),
(76834, 76, 'Tuluá'),
(76845, 76, 'Ulloa'),
(76863, 76, 'Versalles'),
(76869, 76, 'Vijes'),
(76890, 76, 'Yotoco'),
(76892, 76, 'Yumbo'),
(76895, 76, 'Zarzal'),
(81001, 81, 'Arauca'),
(81065, 81, 'Arauquita'),
(81220, 81, 'Cravo Norte'),
(81300, 81, 'Fortul'),
(81591, 81, 'Puerto Rondón'),
(81736, 81, 'Saravena'),
(81794, 81, 'Tame'),
(85001, 85, 'Yopal'),
(85010, 85, 'Aguazul'),
(85015, 85, 'Chámeza'),
(85125, 85, 'Hato Corozal'),
(85136, 85, 'La Salina'),
(85139, 85, 'Maní'),
(85162, 85, 'Monterrey'),
(85225, 85, 'Nunchía'),
(85230, 85, 'Orocué'),
(85250, 85, 'Paz de Ariporo'),
(85263, 85, 'Pore'),
(85279, 85, 'Recetor'),
(85300, 85, 'Sabanalarga'),
(85315, 85, 'Sácama'),
(85325, 85, 'San Luis de Gaceno'),
(85400, 85, 'Támara'),
(85410, 85, 'Tauramena'),
(85430, 85, 'Trinidad'),
(85440, 85, 'Villanueva'),
(86001, 86, 'Mocoa'),
(86219, 86, 'Colón'),
(86320, 86, 'Orito'),
(86568, 86, 'Puerto Asís'),
(86569, 86, 'Puerto Caicedo'),
(86571, 86, 'Puerto Guzmán'),
(86573, 86, 'Leguízamo'),
(86749, 86, 'Sibundoy'),
(86755, 86, 'San Francisco'),
(86757, 86, 'San Miguel'),
(86760, 86, 'Santiago'),
(86865, 86, 'Valle de Guamez'),
(86885, 86, 'Villagarzón'),
(88001, 88, 'San Andrés'),
(88564, 88, 'Providencia'),
(91001, 91, 'Leticia'),
(91263, 91, 'El Encanto'),
(91405, 91, 'La Chorrera'),
(91407, 91, 'La Pedrera'),
(91430, 91, 'La Victoria'),
(91460, 91, 'Miriti Paraná'),
(91530, 91, 'Puerto Alegría'),
(91536, 91, 'Puerto Arica'),
(91540, 91, 'Puerto Nariño'),
(91669, 91, 'Puerto Santander'),
(91798, 91, 'Tarapacá'),
(94001, 94, 'Inírida'),
(94343, 94, 'Barranco Minas'),
(94663, 94, 'Mapiripana'),
(94883, 94, 'San Felipe'),
(94884, 94, 'Puerto Colombia'),
(94885, 94, 'La Guadalupe'),
(94886, 94, 'Cacahual'),
(94887, 94, 'Pana Pana'),
(94888, 94, 'Morichal'),
(95001, 95, 'San José del Guaviare'),
(95015, 95, 'Calamar'),
(95025, 95, 'El Retorno'),
(95200, 95, 'Miraflores'),
(97001, 97, 'Mitú'),
(97161, 97, 'Caruru'),
(97511, 97, 'Pacoa'),
(97666, 97, 'Taraira'),
(97777, 97, 'Papunaua'),
(97889, 97, 'Yavaraté'),
(99001, 99, 'Puerto Carreño'),
(99524, 99, 'La Primavera'),
(99624, 99, 'Santa Rosalía'),
(99773, 99, 'Cumaribo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  `cargo_contacto` varchar(100) NOT NULL,
  `correo_contacto` varchar(50) NOT NULL,
  `telefono_contacto` bigint(15) NOT NULL,
  `celular_contacto` bigint(10) NOT NULL,
  `id_empresa` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre_contacto`, `cargo_contacto`, `correo_contacto`, `telefono_contacto`, `celular_contacto`, `id_empresa`) VALUES
(6, 'pepito', 'calidad', 'pepito@gmail.com', 123, 1234, 123),
(12, 'juanito', 'calidad', 'juanito@gmail.com', 345, 89, 1075),
(13, 'Diego Pachon', 'CALIDAD', 'dpachon@colsof.com.co', 2912000, 2912000, 1075685565);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre_departamento`) VALUES
(5, 'Antioquia'),
(8, 'Atlántico'),
(11, 'Bogotá D.C.'),
(13, 'Bolívar'),
(15, 'Boyacá'),
(17, 'Caldas'),
(18, 'Caquetá'),
(19, 'Cauca'),
(20, 'Cesar'),
(23, 'Córdoba'),
(25, 'Cundinamarca'),
(27, 'Chocó'),
(41, 'Huila'),
(44, 'La Guajira'),
(47, 'Magdalena'),
(50, 'Meta'),
(52, 'Nariño'),
(54, 'Norte de Santander'),
(63, 'Quindío'),
(66, 'Risaralda'),
(68, 'Santander'),
(70, 'Sucre'),
(73, 'Tolima'),
(76, 'Valle del Cauca'),
(81, 'Arauca'),
(85, 'Casanare'),
(86, 'Putumayo'),
(88, 'Archipiélago de San Andrés, Providencia y Santa Catalina'),
(91, 'Amazonas'),
(94, 'Guainía'),
(95, 'Guaviare'),
(97, 'Vaupés'),
(99, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `tipo_documento` varchar(3) NOT NULL,
  `id_empresa` bigint(15) NOT NULL,
  `nombre_empresa` varchar(300) NOT NULL,
  `departamento_empresa` int(11) NOT NULL,
  `ciudad_empresa` int(11) NOT NULL,
  `direccion_empresa` varchar(100) NOT NULL,
  `sucursal` varchar(10) NOT NULL,
  `nro_sucursal` int(11) NOT NULL,
  `correo_representante` varchar(60) NOT NULL,
  `riesgo_empresa` varchar(30) NOT NULL,
  `nro_trabajadores` int(11) NOT NULL,
  `nro_trabajadores_dependientes` int(11) NOT NULL,
  `nro_trabajadores_independientes` int(11) NOT NULL,
  `sedes` varchar(10) NOT NULL,
  `nro_sedes` int(11) NOT NULL,
  `prima_empresa` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`tipo_documento`, `id_empresa`, `nombre_empresa`, `departamento_empresa`, `ciudad_empresa`, `direccion_empresa`, `sucursal`, `nro_sucursal`, `correo_representante`, `riesgo_empresa`, `nro_trabajadores`, `nro_trabajadores_dependientes`, `nro_trabajadores_independientes`, `sedes`, `nro_sedes`, `prima_empresa`) VALUES
('C.C', 123, 'HSEQ', 11, 11001, 'CR 4', 'Si', 2, 'representante@gmail.com', 'I (Riesgo mínimo)', 30, 20, 10, 'Si', 2, 10),
('C.C', 1075, 'colsofp', 11, 11001, 'Cll 9 A #4-78', 'Si', 2, 'representante@gmail.com', 'I (Riesgo mínimo)', 70, 50, 20, 'Si', 2, 1),
('C.C', 1075685565, 'COLSOF', 11, 11001, 'vereda vuelta grande', 'Si', 5, 'contacto@colsof.com.co', 'V (Riesgo máximo)', 1000, 999, 1, 'No', 0, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_visita`
--

CREATE TABLE `evaluacion_visita` (
  `id_evaluacion` int(11) NOT NULL,
  `id_visita` int(11) NOT NULL,
  `id_requisito` int(11) NOT NULL,
  `evaluacion` tinyint(2) NOT NULL,
  `comentario` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `id_ficha` bigint(50) NOT NULL,
  `nombre_ficha` varchar(200) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`id_ficha`, `nombre_ficha`, `fecha_inicio`, `fecha_fin`) VALUES
(1804520, 'ADSI', '2020-05-24', '2020-05-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_evaluacion_visita` int(11) NOT NULL,
  `archivo` varchar(300) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito`
--

CREATE TABLE `requisito` (
  `id_requisito` int(11) NOT NULL,
  `nombre_requisito` varchar(300) NOT NULL,
  `status_requisito` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `requisito`
--

INSERT INTO `requisito` (`id_requisito`, `nombre_requisito`, `status_requisito`) VALUES
(1, 'Tiene definida una Política del SG-SST y esta alineada con la metas objetivos e indicadores de gestión; fue diseñada de manera participativa con los trabajadores. Evidencie registros.', '1'),
(2, 'La empresa cuenta con un Sistema de Gestión de la Seguridad y Salud en el Trabajo (SG-SST) según lo definido en la Ley 1562 del 2012 y especifico según el decreto 1443 de 2014.', '1'),
(3, 'La empresa dispone del Reglamento de Higiene y Seguridad y cuenta con los Procedimientos para Tareas de Alto Riesgo (TAR) que requiera (ejemplos: Reglamentos legales y técnicos; Reglamento Técnico Eléctrico - RETIE, Trabajo en Alturas, entre otros o que le aplique al sector económico).Otro reglament', '1'),
(4, '¿Existe evidencia que en la empresa funcione el Comité de Convivencia y el Comité Paritario de Seguridad y Salud en el Trabajo (antes COPASO), o si la empresa tiene menos de 10 trabajadores exista el Vigía SST, se encuentra capacitado en SG-SST? ', '1'),
(5, 'La empresa cuenta con Brigadas de Emergencia (Primeros Auxilios) e incluye a los contratistas.', '1'),
(6, 'Dispone de Procedimientos Operativos Normalizados (PON´s) para asegurar la continuidad de los procesos de la organización, incluye a los contratistas y partes interesadas', '1'),
(7, 'Existe evidencia que la empresa cuente con un plan de trabajo anual y un plan de capacitación en temas de Seguridad y Salud en el Trabajo', '1'),
(8, 'La empresa tiene procedimiento y lo aplica para realizar el registro, reporte de incidentes y accidentes de trabajo de sus trabajadores y contratistas.', '1'),
(9, 'El equipo investigador, esta capacitado en investigación de incidentes y accidentes de trabajo cumpliendo con el Decreto 1530 de 1996 artículo 4 y la resolución 1401 de 2007.', '1'),
(10, 'Se identifican y registran los peligros y riesgos en el trabajo a los que están expuestos los trabajadores, dispone del documento de condiciones de trabajo.', '1'),
(11, 'Existe evidencia que la empresa realiza inspecciones de seguridad de condiciones inseguras', '1'),
(12, 'La empresa tiene conocimiento para realizar el registro, prevención y reporte de las enfermedades laborales.', '1'),
(13, 'Existe evidencia que la empresa cuente con un plan de suministro y reposición de equipos o elementos de protección.', '1'),
(14, 'Existe evidencia que la empresa cuente con planes de mantenimiento de instalaciones, equipos y herramientas.', '1'),
(15, 'Existe evidencia que la empresa asigne los recursos necesarios para desarrollar las actividades Sistema de Gestión de la Seguridad y Salud en el Trabajo.', '1'),
(16, 'La empresa cuenta con diagnóstico de condiciones de salud, utiliza como base los exámenes de ingreso, periódico y auto reportes; se actualiza periódicamente.', '1'),
(17, 'Existe evidencia que la empresa dispone de un programa para fomentar los estilos de vida y trabajo saludables.', '1'),
(18, 'Tiene implementado el Plan Estratégico de Seguridad Vial \"PESVíal\"/ o No lo requiere (ver instructivo).', '1'),
(19, 'Gestiona y documenta el control de cambio en los procesos de la organización, verifique el o los cambio(s) en el sitio de implementación contra lo documental.', '1'),
(20, 'La empresa identifica y gestiona los requisitos legales aplicables en SST.', '1'),
(21, 'La organización demuestra los resultados del programa de auditoría y la revisión por la alta dirección. Revisar metodología, periodicidad, documentación y divulgación de estas actividades.', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL,
  `departamento_sede` int(11) NOT NULL,
  `ciudad_sede` int(11) NOT NULL,
  `id_empresa` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `departamento_sede`, `ciudad_sede`, `id_empresa`) VALUES
(2, 11, 11001, 123),
(3, 25, 25181, 1075);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` bigint(15) NOT NULL,
  `nombres_user` varchar(250) NOT NULL,
  `apellidos_user` varchar(250) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `cargo_user` varchar(100) NOT NULL,
  `telefono_user` bigint(10) NOT NULL,
  `ficha_user` bigint(50) NOT NULL,
  `img_user` varchar(500) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `estado_user` varchar(10) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `id_visita` int(11) NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  `id_usuario` bigint(15) NOT NULL,
  `nro_visita` int(11) NOT NULL,
  `fecha_ini` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_fin` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad_economica`
--
ALTER TABLE `actividad_economica`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  ADD PRIMARY KEY (`id_actividad_empresa`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id_auditoria`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `departamento_empresa` (`departamento_empresa`),
  ADD KEY `ciudad_empresa` (`ciudad_empresa`);

--
-- Indices de la tabla `evaluacion_visita`
--
ALTER TABLE `evaluacion_visita`
  ADD PRIMARY KEY (`id_evaluacion`),
  ADD KEY `id_requisito` (`id_requisito`),
  ADD KEY `id_visita_1` (`id_visita`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id_ficha`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `fk_foto_evaluacion_idx` (`id_evaluacion_visita`);

--
-- Indices de la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`id_requisito`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD KEY `departamento_sede` (`departamento_sede`),
  ADD KEY `ciudad_sede` (`ciudad_sede`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `ficha_user` (`ficha_user`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`id_visita`),
  ADD KEY `id_auditoria` (`id_auditoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  MODIFY `id_actividad_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id_auditoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99774;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `evaluacion_visita`
--
ALTER TABLE `evaluacion_visita`
  MODIFY `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `requisito`
--
ALTER TABLE `requisito`
  MODIFY `id_requisito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `id_visita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  ADD CONSTRAINT `actividad_empresa_ibfk_3` FOREIGN KEY (`id_actividad`) REFERENCES `actividad_economica` (`id_actividad`),
  ADD CONSTRAINT `actividad_empresa_ibfk_4` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `auditoria_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_5` FOREIGN KEY (`departamento_empresa`) REFERENCES `departamento` (`id_departamento`),
  ADD CONSTRAINT `empresa_ibfk_6` FOREIGN KEY (`ciudad_empresa`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `evaluacion_visita`
--
ALTER TABLE `evaluacion_visita`
  ADD CONSTRAINT `evaluacion_visita_ibfk_1` FOREIGN KEY (`id_requisito`) REFERENCES `requisito` (`id_requisito`),
  ADD CONSTRAINT `evaluacion_visita_ibfk_2` FOREIGN KEY (`id_visita`) REFERENCES `visita` (`id_visita`);

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_evaluacion` FOREIGN KEY (`id_evaluacion_visita`) REFERENCES `evaluacion_visita` (`id_evaluacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `sede_ibfk_1` FOREIGN KEY (`ciudad_sede`) REFERENCES `ciudad` (`id_ciudad`),
  ADD CONSTRAINT `sede_ibfk_2` FOREIGN KEY (`departamento_sede`) REFERENCES `departamento` (`id_departamento`),
  ADD CONSTRAINT `sede_ibfk_3` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ficha_user`) REFERENCES `ficha` (`id_ficha`);

--
-- Filtros para la tabla `visita`
--
ALTER TABLE `visita`
  ADD CONSTRAINT `visita_ibfk_1` FOREIGN KEY (`id_auditoria`) REFERENCES `auditoria` (`id_auditoria`),
  ADD CONSTRAINT `visita_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
