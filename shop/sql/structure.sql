CREATE TABLE users (
                       id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                       name VARCHAR(50) NOT NULL ,
                       login VARCHAR(50) NOT NULL UNIQUE ,
                       password VARCHAR(255) NOT NULL,
                       role ENUM ('admin','user') NOT NULL DEFAULT 'user',
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       updated_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE categories (
                            id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            title VARCHAR(100) NOT NULL UNIQUE ,
                            parent_category_id SMALLINT UNSIGNED NULL ,
                            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                            updated_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
                            CONSTRAINT 'fk-categories-parent_category_id-categories-id' FOREIGN KEY (parent_category_id) REFERENCES categories(id)
);

CREATE TABLE products (
                          id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                          title VARCHAR(100) NOT NULL UNIQUE ,
                          price DECIMAL (8, 2) UNSIGNED NOT NULL ,
                          category_id SMALLINT UNSIGNED NOT NULL ,
                          quantity SMALLINT NOT NULL DEFAULT 0,
                          created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                          updated_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
                          CONSTRAINT 'fk-products-category_id-categories-id' FOREIGN KEY (category_id) REFERENCES categories(id)
);


CREATE TABLE orders(
                       id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                       user_id SMALLINT UNSIGNED NOT NULL,
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       CONSTRAINT 'fk-orders-user_id-users-id' FOREIGN KEY (user_id) REFERENCES users(id)

);

CREATE TABLE product_to_order(
                                 product_id SMALLINT UNSIGNED NOT NULL,
                                 order_id SMALLINT UNSIGNED NOT NULL,
                                 quantity SMALLINT UNSIGNED NOT NULL,
                                 CONSTRAINT `fk-product_to_order-product_id-products-id` FOREIGN KEY (product_id) REFERENCES products(id),
                                 CONSTRAINT `fk-product_to_order-order_id-orders-id` FOREIGN KEY (order_id) REFERENCES orders(id)
);
