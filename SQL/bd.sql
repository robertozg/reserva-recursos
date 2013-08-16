
SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

COMMENT ON DATABASE postgres IS 'default administrative connection database';

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

CREATE TABLE tbl_eliminar (
    id_elimina integer NOT NULL,
    id_recurso integer NOT NULL,
    fecha_elim date NOT NULL,
    nombre_recurso character varying(255) NOT NULL
);


ALTER TABLE public.tbl_eliminar OWNER TO postgres;

CREATE SEQUENCE tbl_elimina_id_elimina_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_elimina_id_elimina_seq OWNER TO postgres;

ALTER SEQUENCE tbl_elimina_id_elimina_seq OWNED BY tbl_eliminar.id_elimina;

CREATE TABLE tbl_horario (
    id_horario integer NOT NULL,
    hora_inicio time with time zone NOT NULL,
    hora_fin time with time zone NOT NULL
);


ALTER TABLE public.tbl_horario OWNER TO postgres;

CREATE SEQUENCE tbl_horario_id_horario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_horario_id_horario_seq OWNER TO postgres;

ALTER SEQUENCE tbl_horario_id_horario_seq OWNED BY tbl_horario.id_horario;

CREATE TABLE tbl_ingresar (
    id_recurso integer NOT NULL,
    fecha_ini date NOT NULL,
    nombre_recurso character varying(255) NOT NULL,
    id_ingreso integer NOT NULL
);


ALTER TABLE public.tbl_ingresar OWNER TO postgres;

CREATE SEQUENCE tbl_ingresar_id_ingreso_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_ingresar_id_ingreso_seq OWNER TO postgres;

ALTER SEQUENCE tbl_ingresar_id_ingreso_seq OWNED BY tbl_ingresar.id_ingreso;

CREATE TABLE tbl_recurso (
    id_recursos integer NOT NULL,
    tipo integer NOT NULL,
    descripcion text NOT NULL,
    estado boolean NOT NULL,
    nombre_recurso character varying NOT NULL,
    id_encargado integer NOT NULL
);


ALTER TABLE public.tbl_recurso OWNER TO postgres;

CREATE TABLE tbl_reservas (
    id_reserva integer NOT NULL,
    id_usuario integer NOT NULL,
    id_recurso integer NOT NULL,
    fech_ini date NOT NULL,
    horario integer NOT NULL
);


ALTER TABLE public.tbl_reservas OWNER TO postgres;


COMMENT ON COLUMN tbl_reservas.horario IS 'periodo';

CREATE SEQUENCE tbl_reservas_id_reserva_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_reservas_id_reserva_seq OWNER TO postgres;

ALTER SEQUENCE tbl_reservas_id_reserva_seq OWNED BY tbl_reservas.id_reserva;

CREATE TABLE tbl_usuarios (
    id_usuario integer NOT NULL,
    nombre_user character varying(255) NOT NULL,
    perfil integer NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    fono numeric NOT NULL
);


ALTER TABLE public.tbl_usuarios OWNER TO postgres;

ALTER TABLE ONLY tbl_eliminar ALTER COLUMN id_elimina SET DEFAULT nextval('tbl_elimina_id_elimina_seq'::regclass);


ALTER TABLE ONLY tbl_horario ALTER COLUMN id_horario SET DEFAULT nextval('tbl_horario_id_horario_seq'::regclass);


ALTER TABLE ONLY tbl_ingresar ALTER COLUMN id_ingreso SET DEFAULT nextval('tbl_ingresar_id_ingreso_seq'::regclass);


ALTER TABLE ONLY tbl_reservas ALTER COLUMN id_reserva SET DEFAULT nextval('tbl_reservas_id_reserva_seq'::regclass);


SELECT pg_catalog.setval('tbl_elimina_id_elimina_seq', 10, true);


SELECT pg_catalog.setval('tbl_horario_id_horario_seq', 1, false);


SELECT pg_catalog.setval('tbl_ingresar_id_ingreso_seq', 7, true);


SELECT pg_catalog.setval('tbl_reservas_id_reserva_seq', 1, false);



ALTER TABLE ONLY tbl_recurso
    ADD CONSTRAINT "Recurso_pkey" PRIMARY KEY (id_recursos);



ALTER TABLE ONLY tbl_eliminar
    ADD CONSTRAINT tbl_elimina_pkey PRIMARY KEY (id_elimina);


ALTER TABLE ONLY tbl_horario
    ADD CONSTRAINT tbl_horario_pkey PRIMARY KEY (id_horario);



ALTER TABLE ONLY tbl_ingresar
    ADD CONSTRAINT tbl_ingresar_pkey PRIMARY KEY (id_ingreso);



ALTER TABLE ONLY tbl_reservas
    ADD CONSTRAINT tbl_reservas_pkey PRIMARY KEY (id_reserva);



ALTER TABLE ONLY tbl_usuarios
    ADD CONSTRAINT tbl_usuarios_pkey PRIMARY KEY (id_usuario);



CREATE INDEX "fki_llave foranea" ON tbl_reservas USING btree (horario);


CREATE INDEX "fki_llave foranea2" ON tbl_ingresar USING btree (id_recurso);


ALTER TABLE ONLY tbl_reservas
    ADD CONSTRAINT "llave foranea" FOREIGN KEY (horario) REFERENCES tbl_horario(id_horario);


ALTER TABLE ONLY tbl_recurso
    ADD CONSTRAINT tbl_recurso_id_encargado_fkey FOREIGN KEY (id_encargado) REFERENCES tbl_usuarios(id_usuario);



ALTER TABLE ONLY tbl_reservas
    ADD CONSTRAINT tbl_reservas_id_recurso_fkey FOREIGN KEY (id_recurso) REFERENCES tbl_recurso(id_recursos);

ALTER TABLE ONLY tbl_reservas
    ADD CONSTRAINT tbl_reservas_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES tbl_usuarios(id_usuario);


REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;

