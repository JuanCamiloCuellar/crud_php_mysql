# CRUD PHP MYSQL
-------------------
 
## -- Crear la tabla PRO_PROCESO --
------------------------------------
`CREATE TABLE PRO_PROCESO (
  PRO_ID INT NOT NULL PRIMARY KEY,
  PRO_NOMBRE VARCHAR(60) NOT NULL,
  PRO_PREFIJO VARCHAR(20) NOT NULL
);
`
## -- Insertar algunos datos de ejemplo --
--------------------------------------------
`INSERT INTO PRO_PROCESO (PRO_ID, PRO_NOMBRE, PRO_PREFIJO) VALUES
  (1, 'Ingeniería', 'ING'),
  (2, 'Recursos Humanos', 'RH'),
  (3, 'Ventas', 'VEN'),
  (4, 'Marketing', 'MK'),
  (5, 'Finanzas', 'FIN');
`
## -- Crear la tabla TIP_TIPO_DOC--
----------------------------------------
`CREATE TABLE TIP_TIPO_DOC (
  TIP_ID INT NOT NULL PRIMARY KEY,
  TIP_NOMBRE VARCHAR(60) NOT NULL,
  TIP_PREFIJO VARCHAR(20) NOT NULL
);
`
## -- Insertar algunos datos de ejemplo --
--------------------------------------------
`INSERT INTO TIP_TIPO_DOC (TIP_ID, TIP_NOMBRE, TIP_PREFIJO) VALUES
  (1, 'Instructivo', 'INS'),
  (2, 'Reporte', 'REP'),
  (3, 'Contrato', 'CON'),
  (4, 'Factura', 'FAC'),
  (5, 'Memorándum', 'MEM');
`
## -- Crear la tabla DOC_DOCUMENTO --
--------------------------------------
`CREATE TABLE DOC_DOCUMENTO (
  DOC_ID INT NOT NULL PRIMARY KEY,
  DOC_NOMBRE VARCHAR(60) NOT NULL,
  DOC_CODIGO VARCHAR(60) NOT NULL,
  DOC_CONTENIDO VARCHAR(4000) NOT NULL,
  DOC_ID_TIPO INT NOT NULL,
  DOC_ID_PROCESO INT NOT NULL,
  CONSTRAINT FK_DOC_TIPO FOREIGN KEY (DOC_ID_TIPO) REFERENCES TIP_TIPO_DOC(TIP_ID),
  CONSTRAINT FK_DOC_PROCESO FOREIGN KEY (DOC_ID_PROCESO) REFERENCES PRO_PROCESO(PRO_ID)
);
`