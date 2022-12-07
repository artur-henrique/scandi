CREATE DATABASE scandiweb;

CREATE TABLE produtos (
	sku varchar(100) NOT NULL UNIQUE,
    name varchar(100) NOT NULL,
    price float NOT NULL,
    type varchar(100) NOT NULL,
    attribute varchar(100) NOT NULL,
    
    PRIMARY KEY (sku)
);

INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('abcd-1234-klçkl', 'Jackson 5', 78.90, 'dvd', '300');

INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('ertty-888-iopio', 'Clean Code', 387, 'book', '0.85');

INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('34234-999-mbnhg', 'Monaco table', 197.56, 'furniture', '120x145x65');

INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('abcd-0001-xyz', 'Jackson 5', 78.90, 'dvd', '300');

INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('abcd-0002-xyz', 'Clean Code', 387, 'book', '0.85');

INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('abcd-0003-xyz', 'Monaco table', 197.56, 'furniture', '120x145x65');
                
INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('abcd-0004-xyz', 'Monaco table', 197.56, 'furniture', '120x145x65');
                
INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('abcd-0005-xyz', 'Monaco table', 197.56, 'furniture', '120x145x65');
                
INSERT INTO produtos (sku, name, price, type, attribute) 
				VALUES ('abcd-0006-xyz', 'Monaco table', 197.56, 'furniture', '120x145x65');