USE vend;

CREATE TABLE item ( item_ref MEDIUMINT NOT NULL AUTO_INCREMENT,
					item_name VARCHAR(30) NOT NULL,
					item_stock INT(10) NOT NULL,
					item_price DECIMAL(10,2) NOT NULL,
					item_desc VARCHAR(50) NOT NULL,
					PRIMARY KEY ( item_ref )
)
ENGINE=InooDB;
