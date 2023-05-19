DROP TABLE IF EXISTS jogos;

CREATE TABLE IF NOT EXISTS jogos (
    id              INTEGER PRIMARY KEY,
    nome            TEXT    NOT NULL,
    categoria  TEXT,
    datal          TEXT,
    desenvolvedor TEXT,
    classificacao INT
);
