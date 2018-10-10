USE db_avan_ni;
CREATE TABLE IF NOT EXISTS ft_table (
    id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    login varchar(8) NOT NULL DEFAULT 'toto',
    `group` ENUM('staff', 'student', 'other') NOT NULL,
    creation_date date NOT NULL
    );