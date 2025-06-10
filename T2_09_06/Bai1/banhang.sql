-- Bảng users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    created_at DATETIME
);

-- Bảng categories
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

-- Bảng products
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    user_id INT,
    category_id INT,
    created_at DATETIME,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
-- Thêm users
INSERT INTO users (name, email, created_at) VALUES
('Nguyen Van A', 'a@example.com', NOW()),
('Tran Thi B', 'b@example.com', NOW()),
('Le Van C', 'c@example.com', NOW()),
('Pham Thi D', 'd@example.com', NOW()),
('Hoang Van E', 'e@example.com', NOW());

-- Thêm categories
INSERT INTO categories (name) VALUES
('Điện thoại'),
('Laptop'),
('Phụ kiện'),
('TV'),
('Đồng hồ');

-- Thêm products
INSERT INTO products (name, price, user_id, category_id, created_at) VALUES
('iPhone 14', 20000000, 1, 1, NOW()),
('MacBook Pro', 35000000, 2, 2, NOW()),
('Ốp lưng iPhone', 200000, 3, 3, NOW()),
('Smart TV LG', 15000000, 4, 4, NOW()),
('Apple Watch', 10000000, 5, 5, NOW());
