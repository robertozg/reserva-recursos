--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.4
-- Dumped by pg_dump version 9.2.4
-- Started on 2013-08-13 03:30:42

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 178 (class 3079 OID 11727)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 1984 (class 0 OID 0)
-- Dependencies: 178
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 176 (class 1259 OID 16511)
-- Name: tbl_elimina; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_elimina (
    id_elimina integer NOT NULL,
    id_inicia integer NOT NULL,
    id_recurso integer NOT NULL,
    fecha_elim date NOT NULL
);


ALTER TABLE public.tbl_elimina OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 16507)
-- Name: tbl_elimina_id_elimina_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_elimina_id_elimina_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_elimina_id_elimina_seq OWNER TO postgres;

--
-- TOC entry 1985 (class 0 OID 0)
-- Dependencies: 174
-- Name: tbl_elimina_id_elimina_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_elimina_id_elimina_seq OWNED BY tbl_elimina.id_elimina;


--
-- TOC entry 175 (class 1259 OID 16509)
-- Name: tbl_elimina_id_inicia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_elimina_id_inicia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_elimina_id_inicia_seq OWNER TO postgres;

--
-- TOC entry 1986 (class 0 OID 0)
-- Dependencies: 175
-- Name: tbl_elimina_id_inicia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_elimina_id_inicia_seq OWNED BY tbl_elimina.id_inicia;


--
-- TOC entry 177 (class 1259 OID 16528)
-- Name: tbl_encargado; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_encargado (
    rut integer NOT NULL,
    nombre character varying(255),
    fono numeric NOT NULL,
    direccion character varying NOT NULL,
    email character varying(255) NOT NULL,
    usuario character varying(255) NOT NULL,
    pass character varying(255) NOT NULL
);


ALTER TABLE public.tbl_encargado OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 16480)
-- Name: tbl_ingresa; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_ingresa (
    id_ini integer NOT NULL,
    id_recurso integer NOT NULL,
    fecha_ini date NOT NULL
);


ALTER TABLE public.tbl_ingresa OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 16478)
-- Name: tbl_ingresa_id_ini_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_ingresa_id_ini_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_ingresa_id_ini_seq OWNER TO postgres;

--
-- TOC entry 1987 (class 0 OID 0)
-- Dependencies: 172
-- Name: tbl_ingresa_id_ini_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_ingresa_id_ini_seq OWNED BY tbl_ingresa.id_ini;


--
-- TOC entry 168 (class 1259 OID 16439)
-- Name: tbl_recurso; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_recurso (
    id_recursos integer NOT NULL,
    tipo integer NOT NULL,
    descripcion text NOT NULL,
    estado boolean NOT NULL,
    nombre_recurso character varying NOT NULL,
    id_encargado integer NOT NULL
);


ALTER TABLE public.tbl_recurso OWNER TO postgres;

--
-- TOC entry 170 (class 1259 OID 16449)
-- Name: tbl_reservas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_reservas (
    id_reserva integer NOT NULL,
    id_usuario integer NOT NULL,
    id_recurso integer NOT NULL,
    fech_ter date NOT NULL,
    fech_ini date NOT NULL
);


ALTER TABLE public.tbl_reservas OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 16447)
-- Name: tbl_reservas_id_reserva_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_reservas_id_reserva_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_reservas_id_reserva_seq OWNER TO postgres;

--
-- TOC entry 1988 (class 0 OID 0)
-- Dependencies: 169
-- Name: tbl_reservas_id_reserva_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_reservas_id_reserva_seq OWNED BY tbl_reservas.id_reserva;


--
-- TOC entry 171 (class 1259 OID 16460)
-- Name: tbl_usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_usuarios (
    id_usuario integer NOT NULL,
    nombre_user character varying(255) NOT NULL,
    perfil integer NOT NULL,
    email character varying(255) NOT NULL,
    pass character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    fono numeric NOT NULL
);


ALTER TABLE public.tbl_usuarios OWNER TO postgres;

--
-- TOC entry 1947 (class 2604 OID 16514)
-- Name: id_elimina; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_elimina ALTER COLUMN id_elimina SET DEFAULT nextval('tbl_elimina_id_elimina_seq'::regclass);


--
-- TOC entry 1948 (class 2604 OID 16515)
-- Name: id_inicia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_elimina ALTER COLUMN id_inicia SET DEFAULT nextval('tbl_elimina_id_inicia_seq'::regclass);


--
-- TOC entry 1946 (class 2604 OID 16483)
-- Name: id_ini; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_ingresa ALTER COLUMN id_ini SET DEFAULT nextval('tbl_ingresa_id_ini_seq'::regclass);


--
-- TOC entry 1945 (class 2604 OID 16452)
-- Name: id_reserva; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_reservas ALTER COLUMN id_reserva SET DEFAULT nextval('tbl_reservas_id_reserva_seq'::regclass);


--
-- TOC entry 1975 (class 0 OID 16511)
-- Dependencies: 176
-- Data for Name: tbl_elimina; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tbl_elimina (id_elimina, id_inicia, id_recurso, fecha_elim) FROM stdin;
\.


--
-- TOC entry 1989 (class 0 OID 0)
-- Dependencies: 174
-- Name: tbl_elimina_id_elimina_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_elimina_id_elimina_seq', 1, false);


--
-- TOC entry 1990 (class 0 OID 0)
-- Dependencies: 175
-- Name: tbl_elimina_id_inicia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_elimina_id_inicia_seq', 1, false);


--
-- TOC entry 1976 (class 0 OID 16528)
-- Dependencies: 177
-- Data for Name: tbl_encargado; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tbl_encargado (rut, nombre, fono, direccion, email, usuario, pass) FROM stdin;
\.


--
-- TOC entry 1972 (class 0 OID 16480)
-- Dependencies: 173
-- Data for Name: tbl_ingresa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tbl_ingresa (id_ini, id_recurso, fecha_ini) FROM stdin;
\.


--
-- TOC entry 1991 (class 0 OID 0)
-- Dependencies: 172
-- Name: tbl_ingresa_id_ini_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_ingresa_id_ini_seq', 1, false);


--
-- TOC entry 1967 (class 0 OID 16439)
-- Dependencies: 168
-- Data for Name: tbl_recurso; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tbl_recurso (id_recursos, tipo, descripcion, estado, nombre_recurso, id_encargado) FROM stdin;
\.


--
-- TOC entry 1969 (class 0 OID 16449)
-- Dependencies: 170
-- Data for Name: tbl_reservas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tbl_reservas (id_reserva, id_usuario, id_recurso, fech_ter, fech_ini) FROM stdin;
\.


--
-- TOC entry 1992 (class 0 OID 0)
-- Dependencies: 169
-- Name: tbl_reservas_id_reserva_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_reservas_id_reserva_seq', 1, false);


--
-- TOC entry 1970 (class 0 OID 16460)
-- Dependencies: 171
-- Data for Name: tbl_usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tbl_usuarios (id_usuario, nombre_user, perfil, email, pass, direccion, fono) FROM stdin;
\.


--
-- TOC entry 1950 (class 2606 OID 16446)
-- Name: Recurso_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_recurso
    ADD CONSTRAINT "Recurso_pkey" PRIMARY KEY (id_recursos);


--
-- TOC entry 1958 (class 2606 OID 16517)
-- Name: tbl_elimina_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_elimina
    ADD CONSTRAINT tbl_elimina_pkey PRIMARY KEY (id_elimina);


--
-- TOC entry 1960 (class 2606 OID 16535)
-- Name: tbl_encargado_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_encargado
    ADD CONSTRAINT tbl_encargado_pkey PRIMARY KEY (rut);


--
-- TOC entry 1956 (class 2606 OID 16485)
-- Name: tbl_ingresa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_ingresa
    ADD CONSTRAINT tbl_ingresa_pkey PRIMARY KEY (id_ini);


--
-- TOC entry 1952 (class 2606 OID 16454)
-- Name: tbl_reservas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_reservas
    ADD CONSTRAINT tbl_reservas_pkey PRIMARY KEY (id_reserva);


--
-- TOC entry 1954 (class 2606 OID 16467)
-- Name: tbl_usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_usuarios
    ADD CONSTRAINT tbl_usuarios_pkey PRIMARY KEY (id_usuario);


--
-- TOC entry 1965 (class 2606 OID 16518)
-- Name: tbl_elimina_id_inicia_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_elimina
    ADD CONSTRAINT tbl_elimina_id_inicia_fkey FOREIGN KEY (id_inicia) REFERENCES tbl_ingresa(id_ini);


--
-- TOC entry 1966 (class 2606 OID 16523)
-- Name: tbl_elimina_id_recurso_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_elimina
    ADD CONSTRAINT tbl_elimina_id_recurso_fkey FOREIGN KEY (id_recurso) REFERENCES tbl_recurso(id_recursos);


--
-- TOC entry 1964 (class 2606 OID 16486)
-- Name: tbl_ingresa_id_recurso_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_ingresa
    ADD CONSTRAINT tbl_ingresa_id_recurso_fkey FOREIGN KEY (id_recurso) REFERENCES tbl_recurso(id_recursos);


--
-- TOC entry 1961 (class 2606 OID 16536)
-- Name: tbl_recurso_id_encargado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_recurso
    ADD CONSTRAINT tbl_recurso_id_encargado_fkey FOREIGN KEY (id_encargado) REFERENCES tbl_encargado(rut);


--
-- TOC entry 1962 (class 2606 OID 16468)
-- Name: tbl_reservas_id_recurso_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_reservas
    ADD CONSTRAINT tbl_reservas_id_recurso_fkey FOREIGN KEY (id_recurso) REFERENCES tbl_recurso(id_recursos);


--
-- TOC entry 1963 (class 2606 OID 16473)
-- Name: tbl_reservas_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_reservas
    ADD CONSTRAINT tbl_reservas_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES tbl_usuarios(id_usuario);


--
-- TOC entry 1983 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2013-08-13 03:30:43

--
-- PostgreSQL database dump complete
--

