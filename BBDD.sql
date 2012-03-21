-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-03-2012 a las 16:13:54
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `news`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `total_votes` int(11) DEFAULT '0',
  `total_coment` int(11) DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `public` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `link`, `image`, `total_votes`, `total_coment`, `user_id`, `public`) VALUES
(1, 'Â¿Se recalienta el nuevo iPad?', 'El nuevo iPad de Apple, como ha ocurrido anteriormente con otros productos de la compaÃ±Ã­a, ha llegado al mercado acompaÃ±ado de cierta polÃ©mica. En este caso, el problema es que los dispositivos parecen recalentarse cuando ejecutan tareas que hacen que su nuevo chip, A5X, rinda al mÃ¡ximo. No obstante, este calentamiento no parece acercarse en absoluto a temperaturas alarmantes.', 'http://www.abc.es/20120321/tecnologia/rww-abci-recalienta-nuevo-ipad-201203211206.html', 'http://www.abc.es/Media/201203/21/nuevo_ipad--644x362.jpg', 10, 2, 1, 1),
(2, 'La ComisiÃ³n de Propiedad Intelectual ha recibido cerca de 60 solicitudes de cierre de webs', 'La ComisiÃ³n de Propiedad Intelectual ha recibido desde su puesta en marcha cerca de 60 solicitudes de cierre de pÃ¡ginas web, que se suman a las 210 que se presentaron el primer dÃ­a en el registro del Ministerio de Cultura a modo de "protesta" contra este Ã³rgano.', 'http://www.20minutos.es/noticia/1345313/0/comision-de-propiedad-intelectual/cierre/ley-sinde/', 'http://estaticos.20minutos.es/img2/recortes/2011/07/15/26483-620-282.jpg?v=20120315143442', 0, 0, 1, 0),
(3, 'El coche que se aparca solo', 'Audi ha presentado su sistema Garage Parking Pilot, que permite al conductor bajarse del coche y dejar que se ocupe Ã©l solo de la tediosa tarea del aparcamiento.', 'http://www.as.com/motor-mercado/articulo/garage-parking-pilot-aparcamiento-audi/20120321dasdasmme_4/Tes', 'http://s5.as.com/recorte/20120321dasdasmme_8/LCO/Ies/Automatizado_Garage_Parking_Pilot_permite.jpg', 10, 1, 1, 1),
(4, 'Hallan 200.000 galaxias en la imagen del cielo con mayor ancho de campo', 'El telescopio VISTA, del Observatorio Europeo Austral (ESO), ha logrado captar 200.000 galaxias lejanas en la que es la imagen profunda del cielo con mayor ancho de campo jamÃ¡s obtenida. Esta fotografÃ­a se ha podido realizar gracias a la luz infrarroja.', 'http://www.europapress.es/sociedad/ciencia/noticia-hallan-200000-galaxias-imagen-cielo-mayor-ancho-campo-20120321131347.html', 'http://img.europapress.net/fotoweb/fotonoticia_20120321131347_470.jpg', 0, 0, 2, 0),
(5, 'Las apps gratuitas de los smartphones gastan mÃ¡s baterÃ­a', 'Una de las principales causas de esto es que estas apps generalmente buscan la localizaciÃ³n de su propietario para de ese modo poder enviarle publicidad relevante en funciÃ³n de su ubicaciÃ³n geogrÃ¡fica teniendo en cuenta su perfil de consumo. Los estudios se han realizado con una herramienta llamada Eprof sobre seis de las diez aplicaciones mÃ¡s descargadas actualmente en los sistemas operativos mÃ³viles Android y Windows Phone.', 'http://www.pcactual.com/articulo/actualidad/noticias/10642/las_apps_gratuitas_los_smartphones_gastan_mas_bateria.html', 'http://www.pcactual.com/medio/2012/03/21/bateria_app_618x618.jpg', 11, 1, 3, 1),
(6, 'Windows 8 estarÃ¡ disponible en pocos dispositivos de ARM', 'Click here!\r\n\r\nEl lanzamiento de Windows 8, previsto para finales de este aÃ±o, encontrarÃ¡ muy pocos equipos basados en ARM disponibles y sÃ³lo tres de ellos serÃ¡n tablets tÃ¡ctiles de un solo panel. En cambio, podrÃ¡n adquirirse mÃ¡s de 40 mÃ¡quinas Windows 8 distintas con chips Intel, segÃºn un informe de Bloomberg.', 'http://www.idg.es/pcworld/Windows-8-estara-disponible-en-pocos-dispositivos-/doc120054-Actualidad.htm', 'http://www.idg.es/BBDD_IMAGEN/windows_8_logo.jpg', 0, 0, 3, 0),
(7, 'El congreso iRedes premia a la FundaciÃ³n del EspaÃ±ol Urgente', 'La FundaciÃ³n del EspaÃ±ol Urgente, FundÃ©u BBVA, recibirÃ¡ uno de los premios que entregarÃ¡ en su segunda ediciÃ³n el Congreso Iberoamericano iRedes, dedicado a las redes telemÃ¡ticas como forma de transmisiÃ³n de informaciÃ³n y conocimiento.', 'http://www.que.es/cultura/201203211233-congreso-iredes-premia-fundacion-espanol-efe.html', 'http://www.que.es/archivos/201203/4456457w-365xXx80.jpg', 11, 0, 4, 1),
(8, 'Gmail explicarÃ¡ por quÃ© envÃ­a algunos correos a la carpeta spam', 'Madrid (EFE). Gmail, el correo electrÃ³nico de Google, explicarÃ¡ a partir de ahora a los usuarios la razÃ³n por la que envÃ­a cada mensaje a la carpeta de spam o correo basura. ', 'elcomercio.pe/tecnologia/1390492/noticia-gmail-explicara-que-envia-algunos-correos-carpeta-spam', 'http://elcomercio.e3.pe/66/ima/0/0/3/9/7/397720.jpg', 11, 2, 4, 1),
(9, 'La nieve complica la circulaciÃ³n en una docena de carreteras de Segovia', 'La intensa nevada que ha caÃ­do esta maÃ±ana en toda la provincia de Segovia complica la circulaciÃ³n en casi todas las carreteras de las redes nacional, autonÃ³mica y provincial. La SubdelegaciÃ³n del Gobierno en Segovia ha comunicado el corte de la carretera del puerto de Navacerrada, CL-601, a la altura de la localidad de ValsaÃ­n, mientras que las lÃ­neas de trenes de alta velocidad estÃ¡n acumulando retrasos debido a la presencia de nieve en las vÃ­as.', 'http://www.elnortedecastilla.es/20120321/local/segovia/nieve-complica-circulacion-docena-201203211151.html', 'http://www.elnortedecastilla.es/noticias/201203/21/Media/15510222.jpg', 11, 0, 4, 1),
(10, 'Resident Evil: Operation Racoon City, trailer de lanzamiento', 'Capcom, uno de los lÃ­deres mundiales en la ediciÃ³n y desarrollo de software de entretenimiento, anuncia el prÃ³ximo lanzamiento de Resident Evil Operation Raccoon City en toda Europa el viernes 23 de Marzo en Xbox 360 y PlayStation 3. El juego estarÃ¡ disponible en formato Windows PC el prÃ³ximo 18 de Mayo. Con motivo del anuncio, Capcom ha distribuido un impactante trÃ¡iler oficial con motivo de su comercializaciÃ³n. ', 'http://noticias.lainformacion.com/arte-cultura-y-espectaculos/videojuegos/resident-evil-operation-racoon-city-trailer-de-lanzamiento_6StPdgOyliv829nofbDlB7/', 'http://images.lainformacion.com/cms/operation-racoon-city/2012_3_21_PHOTO-f9fe31bd7455ec13591b02910794865f-1332329234-2.jpg?width=223&height=160&type=auto&id=ZyHTo3Jz7zDF1LtZkSExx4&time=1332329223&project=lainformacion', 0, 0, 5, 0),
(11, 'Una pared virtual para manipular imÃ¡genes 3D', 'Los dibujos animados Ã‰rase una vezâ€¦ la vida (1987) ayudaban a los niÃ±os a entender el funcionamiento interno del cuerpo humano. Sus creadores permitÃ­an imaginarse cÃ³mo serÃ­a meterse dentro del aparato digestivo o del corazÃ³n, por ejemplo. Ahora, el equipo de investigaciÃ³n en ModelizaciÃ³n, VisualizaciÃ³n, InteracciÃ³n y Realidad Virtual (MOVING) de la Universitat PolitÃ¨cnica de Catalunya presenta EstereoWall, una pared virtual donde se proyectan imÃ¡genes y en la que cualquiera, equipado con un mando y unas gafas 3D, puede adentrarse en el hÃ­gado de otro, o en su boca, o en el mismo cerebro.', 'http://tecnologia.elpais.com/tecnologia/2012/03/20/actualidad/1332254449_162430.html', 'http://ep01.epimg.net/tecnologia/imagenes/2012/03/20/actualidad/1332254449_162430_1332254719_noticia_normal.jpg', 10, 0, 5, 1),
(12, 'Coge el telÃ©fono, te estÃ¡ vibrando el tatuajeâ€™: Nokia patenta una tecnologÃ­a para que nunca perdamos una llamada', 'Desde la llegada de la generaciÃ³n â€˜smartphoneâ€™ a la telefonÃ­a mÃ³vil, Nokia ha ido perdiendo su posiciÃ³n casi hegemÃ³nica en el sector hasta convertirse en poco mÃ¡s que una comparsa de lujo en el mercado de los terminales inteligentes, al menos hasta ahora: la compaÃ±Ã­a finlandesa quiere colarse debajo de la piel de los usuarios con una novedosa tecnologÃ­a que permitirÃ­a usar un tatuaje como dispositivo de aviso e identificaciÃ³n de llamada. ', 'http://noticias.lainformacion.com/ciencia-y-tecnologia/coge-el-telefono-te-esta-vibrando-el-tatuaje-nokia-patenta-una-tecnologia-para-que-nunca-perdamos-una-llamada_KZpTcwu3t6Y6ZsWNeCJnX5/', 'http://images.lainformacion.com/cms/coge-el-telefono-te-esta-vibrando-el-tatuaje-nokia-patenta-una-tecnologia-para-que-nunca-perdamos-una-llamada/2012_3_21_PHOTO-c9c5cc45d3ebde839dce9e7ba6655dfc-1332333185-22.jpg?width=645&height=645&type=flat&id=mCy355a6', 0, 0, 5, 0),
(13, 'Los animales colonizaron Madagascar atravesando el ocÃ©ano', 'Una investigaciÃ³n internacional, con participaciÃ³n espaÃ±ola, revela que la mayor parte de la fauna de Madagascar llegÃ³ a la isla a travÃ©s de repetidas dispersiones oceÃ¡nicas despuÃ©s de la separaciÃ³n del supercontinente Gondwana. Fuertes ciclones pudieron arrastrar hasta tierra firme grandes troncos o islas flotantes de vegetaciÃ³n con los primeros colonizadores.', 'http://noticiasdelaciencia.com/not/3790/los_animales_colonizaron_madagascar_atravesando_el_oceano/', 'http://noticiasdelaciencia.com/upload/img/periodico/img_7296.jpg', 10, 0, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `badges`
--

CREATE TABLE IF NOT EXISTS `badges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `badge1` int(11) NOT NULL DEFAULT '0',
  `badge2` int(11) NOT NULL DEFAULT '0',
  `badge3` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `badges`
--

INSERT INTO `badges` (`id`, `user_id`, `badge1`, `badge2`, `badge3`) VALUES
(1, 1, 1, 0, 1),
(2, 2, 1, 0, 0),
(3, 3, 1, 1, 1),
(4, 4, 1, 0, 1),
(5, 5, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `content`) VALUES
(1, 1, 3, 'Muy interesante'),
(2, 5, 3, 'Me gusta'),
(3, 8, 3, 'Me parece bien'),
(4, 3, 5, 'No puede ser!'),
(5, 1, 5, 'Tampoco es tan malo'),
(6, 8, 5, 'No puede ser');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `mail`, `bio`) VALUES
(1, 'Juan', 'e10adc3949ba59abbe56e057f20f883e', 'Juan@mail.com', 'Soy juan'),
(2, 'Luis', 'e10adc3949ba59abbe56e057f20f883e', 'luis@gmail.com', 'Me llamo Luis'),
(3, 'Pepito', 'e10adc3949ba59abbe56e057f20f883e', 'pepito@mail.com', 'Pepito me gusta el queso'),
(4, 'Lis', 'e10adc3949ba59abbe56e057f20f883e', 'lis@mail.com', 'Soy lis...'),
(5, 'Eli', 'e10adc3949ba59abbe56e057f20f883e', 'eli@mail.com', 'Me llamo Eli');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- Volcado de datos para la tabla `votes`
--

INSERT INTO `votes` (`id`, `article_id`, `user_id`, `ip`) VALUES
(1, 1, 5, '127.0.0.1'),
(2, 1, 5, '127.0.0.1'),
(3, 1, 5, '127.0.0.1'),
(4, 1, 5, '127.0.0.1'),
(5, 1, 5, '127.0.0.1'),
(6, 1, 5, '127.0.0.1'),
(7, 1, 5, '127.0.0.1'),
(8, 1, 5, '127.0.0.1'),
(9, 1, 5, '127.0.0.1'),
(10, 1, 5, '127.0.0.1'),
(11, 3, 5, '127.0.0.1'),
(12, 3, 5, '127.0.0.1'),
(13, 3, 5, '127.0.0.1'),
(14, 3, 5, '127.0.0.1'),
(15, 3, 5, '127.0.0.1'),
(16, 3, 5, '127.0.0.1'),
(17, 3, 5, '127.0.0.1'),
(18, 3, 5, '127.0.0.1'),
(19, 3, 5, '127.0.0.1'),
(20, 3, 5, '127.0.0.1'),
(21, 5, 5, '127.0.0.1'),
(22, 5, 5, '127.0.0.1'),
(23, 5, 5, '127.0.0.1'),
(24, 5, 5, '127.0.0.1'),
(25, 5, 0, '127.0.0.1'),
(26, 5, 0, '127.0.0.1'),
(27, 5, 0, '127.0.0.1'),
(28, 5, 0, '127.0.0.1'),
(29, 5, 0, '127.0.0.1'),
(30, 5, 0, '127.0.0.1'),
(31, 5, 0, '127.0.0.1'),
(32, 11, 0, '127.0.0.1'),
(33, 11, 0, '127.0.0.1'),
(34, 11, 0, '127.0.0.1'),
(35, 11, 0, '127.0.0.1'),
(36, 11, 0, '127.0.0.1'),
(37, 11, 0, '127.0.0.1'),
(38, 11, 0, '127.0.0.1'),
(39, 11, 0, '127.0.0.1'),
(40, 11, 0, '127.0.0.1'),
(41, 11, 0, '127.0.0.1'),
(42, 13, 0, '127.0.0.1'),
(43, 13, 0, '127.0.0.1'),
(44, 13, 0, '127.0.0.1'),
(45, 13, 0, '127.0.0.1'),
(46, 13, 0, '127.0.0.1'),
(47, 13, 0, '127.0.0.1'),
(48, 13, 0, '127.0.0.1'),
(49, 13, 0, '127.0.0.1'),
(50, 13, 0, '127.0.0.1'),
(51, 13, 0, '127.0.0.1'),
(52, 8, 0, '127.0.0.1'),
(53, 8, 0, '127.0.0.1'),
(54, 8, 0, '127.0.0.1'),
(55, 8, 0, '127.0.0.1'),
(56, 8, 0, '127.0.0.1'),
(57, 8, 0, '127.0.0.1'),
(58, 8, 0, '127.0.0.1'),
(59, 8, 0, '127.0.0.1'),
(60, 8, 0, '127.0.0.1'),
(61, 8, 0, '127.0.0.1'),
(62, 8, 0, '127.0.0.1'),
(63, 7, 0, '127.0.0.1'),
(64, 7, 0, '127.0.0.1'),
(65, 7, 0, '127.0.0.1'),
(66, 7, 0, '127.0.0.1'),
(67, 7, 0, '127.0.0.1'),
(68, 7, 0, '127.0.0.1'),
(69, 7, 0, '127.0.0.1'),
(70, 7, 0, '127.0.0.1'),
(71, 7, 0, '127.0.0.1'),
(72, 7, 0, '127.0.0.1'),
(73, 7, 0, '127.0.0.1'),
(74, 9, 0, '127.0.0.1'),
(75, 9, 0, '127.0.0.1'),
(76, 9, 0, '127.0.0.1'),
(77, 9, 0, '127.0.0.1'),
(78, 9, 0, '127.0.0.1'),
(79, 9, 0, '127.0.0.1'),
(80, 9, 0, '127.0.0.1'),
(81, 9, 0, '127.0.0.1'),
(82, 9, 0, '127.0.0.1'),
(83, 9, 0, '127.0.0.1'),
(84, 9, 0, '127.0.0.1');
