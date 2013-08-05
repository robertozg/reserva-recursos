--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.4
-- Dumped by pg_dump version 9.2.4
-- Started on 2013-08-04 18:03:25

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 172 (class 3079 OID 11727)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 1950 (class 0 OID 0)
-- Dependencies: 172
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 169 (class 1259 OID 25011)
-- Name: recursos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--


-- Database: pro

-- DROP DATABASE proyecto;

CREATE DATABASE proyecto
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Spanish_Chile.1252'
       LC_CTYPE = 'Spanish_Chile.1252'
       CONNECTION LIMIT = -1;



CREATE TABLE recursos (
    id_recurso integer NOT NULL,
    tipo integer NOT NULL,
    descripcion text NOT NULL,
    encargado integer NOT NULL,
    estado boolean NOT NULL,
    nombre_recurso character varying(255) NOT NULL
);


ALTER TABLE public.recursos OWNER TO postgres;

--
-- TOC entry 1951 (class 0 OID 0)
-- Dependencies: 169
-- Name: COLUMN recursos.id_recurso; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN recursos.id_recurso IS 'Id del recurso.';


--
-- TOC entry 1952 (class 0 OID 0)
-- Dependencies: 169
-- Name: COLUMN recursos.tipo; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN recursos.tipo IS 'Para diferenciar al recurso, si es computador, proyector, etc.';


--
-- TOC entry 1953 (class 0 OID 0)
-- Dependencies: 169
-- Name: COLUMN recursos.descripcion; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN recursos.descripcion IS 'características del recurso.';


--
-- TOC entry 1954 (class 0 OID 0)
-- Dependencies: 169
-- Name: COLUMN recursos.encargado; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN recursos.encargado IS 'Persona responsable del recurso.';


--
-- TOC entry 1955 (class 0 OID 0)
-- Dependencies: 169
-- Name: COLUMN recursos.estado; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN recursos.estado IS 'Indica si el recurso está disponible o no.';


--
-- TOC entry 171 (class 1259 OID 25021)
-- Name: reservas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE reservas (
    id_reserva integer NOT NULL,
    usuario integer NOT NULL,
    recurso integer NOT NULL,
    inicio_reserva timestamp without time zone NOT NULL,
    fin_reserva timestamp without time zone NOT NULL
);


ALTER TABLE public.reservas OWNER TO postgres;

--
-- TOC entry 1956 (class 0 OID 0)
-- Dependencies: 171
-- Name: COLUMN reservas.id_reserva; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN reservas.id_reserva IS 'id de la reserva.';


--
-- TOC entry 1957 (class 0 OID 0)
-- Dependencies: 171
-- Name: COLUMN reservas.usuario; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN reservas.usuario IS 'Usuario que realiza la reserva.';


--
-- TOC entry 1958 (class 0 OID 0)
-- Dependencies: 171
-- Name: COLUMN reservas.recurso; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN reservas.recurso IS 'Recurso que es reservado.';


--
-- TOC entry 170 (class 1259 OID 25019)
-- Name: reservas_id_reserva_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE reservas_id_reserva_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.reservas_id_reserva_seq OWNER TO postgres;

--
-- TOC entry 1959 (class 0 OID 0)
-- Dependencies: 170
-- Name: reservas_id_reserva_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE reservas_id_reserva_seq OWNED BY reservas.id_reserva;


--
-- TOC entry 168 (class 1259 OID 25003)
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios (
    id_usuario integer NOT NULL,
    nombre_usuario character varying(255) NOT NULL,
    perfil_usuario integer NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    telefono numeric NOT NULL
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- TOC entry 1960 (class 0 OID 0)
-- Dependencies: 168
-- Name: TABLE usuarios; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE usuarios IS 'Tabla que contiene a todos los usuarios del sistema de reservas, alumnos, ayudantes, profesores,etc.';


--
-- TOC entry 1961 (class 0 OID 0)
-- Dependencies: 168
-- Name: COLUMN usuarios.id_usuario; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.id_usuario IS 'Rut del usuario.';


--
-- TOC entry 1962 (class 0 OID 0)
-- Dependencies: 168
-- Name: COLUMN usuarios.nombre_usuario; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.nombre_usuario IS 'Nombre del usuario.';


--
-- TOC entry 1963 (class 0 OID 0)
-- Dependencies: 168
-- Name: COLUMN usuarios.perfil_usuario; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.perfil_usuario IS 'Para distinguir a los usuarios, entre alumnos, ayudantes, profesores, etc.';


--
-- TOC entry 1964 (class 0 OID 0)
-- Dependencies: 168
-- Name: COLUMN usuarios.email; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.email IS 'email del usuario.';


--
-- TOC entry 1965 (class 0 OID 0)
-- Dependencies: 168
-- Name: COLUMN usuarios.password; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.password IS 'password del usuario.';


--
-- TOC entry 1966 (class 0 OID 0)
-- Dependencies: 168
-- Name: COLUMN usuarios.direccion; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN usuarios.direccion IS 'Dirección del usuario.';


--
-- TOC entry 1926 (class 2604 OID 25024)
-- Name: id_reserva; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reservas ALTER COLUMN id_reserva SET DEFAULT nextval('reservas_id_reserva_seq'::regclass);


--
-- TOC entry 1940 (class 0 OID 25011)
-- Dependencies: 169
-- Data for Name: recursos; Type: TABLE DATA; Schema: public; Owner: postgres
--


--
-- TOC entry 1942 (class 0 OID 25021)
-- Dependencies: 171
-- Data for Name: reservas; Type: TABLE DATA; Schema: public; Owner: postgres
--


--
-- TOC entry 1967 (class 0 OID 0)
-- Dependencies: 170
-- Name: reservas_id_reserva_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('reservas_id_reserva_seq', 4, true);


--
-- TOC entry 1939 (class 0 OID 25003)
-- Dependencies: 168
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--


--
-- TOC entry 1931 (class 2606 OID 25018)
-- Name: pk_recursos; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY recursos
    ADD CONSTRAINT pk_recursos PRIMARY KEY (id_recurso);


--
-- TOC entry 1935 (class 2606 OID 25026)
-- Name: pk_reservas; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY reservas
    ADD CONSTRAINT pk_reservas PRIMARY KEY (id_reserva);


--
-- TOC entry 1928 (class 2606 OID 25010)
-- Name: pk_usuarios; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT pk_usuarios PRIMARY KEY (id_usuario);


--
-- TOC entry 1929 (class 1259 OID 25040)
-- Name: fki_recurso_usuario; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_recurso_usuario ON recursos USING btree (encargado);


--
-- TOC entry 1932 (class 1259 OID 25056)
-- Name: fki_reserva_recurso; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_reserva_recurso ON reservas USING btree (recurso);


--
-- TOC entry 1933 (class 1259 OID 25062)
-- Name: fki_reserva_usuario; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_reserva_usuario ON reservas USING btree (usuario);


--
-- TOC entry 1937 (class 2606 OID 25116)
-- Name: fk_reserva_recurso; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reservas
    ADD CONSTRAINT fk_reserva_recurso FOREIGN KEY (recurso) REFERENCES recursos(id_recurso);


--
-- TOC entry 1938 (class 2606 OID 25121)
-- Name: fk_reserva_usuario; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reservas
    ADD CONSTRAINT fk_reserva_usuario FOREIGN KEY (usuario) REFERENCES usuarios(id_usuario);


--
-- TOC entry 1936 (class 2606 OID 25046)
-- Name: recursos_encargado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY recursos
    ADD CONSTRAINT recursos_encargado_fkey FOREIGN KEY (encargado) REFERENCES usuarios(id_usuario);


--
-- TOC entry 1949 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2013-08-04 18:03:25

--
-- PostgreSQL database dump complete
--

