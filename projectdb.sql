CREATE DATABASE project_db;

CREATE TABLE districts (
    did INT,
    dname VARCHAR(100),
    dvoters INT,
    PRIMARY KEY (did)
);

CREATE TABLE candidates (
    cid INT,
    cname VARCHAR(100),
    cvotes INT,
    cvrate FLOAT,
    PRIMARY KEY (cid)
);

CREATE TABLE nom_in (
    did INT,
    cid INT,
    FOREIGN KEY (did) REFERENCES districts(did),
    FOREIGN KEY (cid) REFERENCES candidates(cid)
);

CREATE TABLE parties (
    pid INT,
    pname VARCHAR(100),
    pvotes INT,
    pvrate FLOAT,
    PRIMARY KEY (pid)
);

CREATE TABLE nom_by (
    cid INT,
    pid INT,
    FOREIGN KEY (cid) REFERENCES candidates(cid),
    FOREIGN KEY (pid) REFERENCES parties(pid)
);