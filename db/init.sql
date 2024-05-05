CREATE TABLE users (
    usu_id SERIAL PRIMARY KEY,
    usu_cod TEXT NOT NULL UNIQUE,
    usu_name TEXT NOT NULL,
    usu_doc TEXT NOT NULL UNIQUE,
    usu_email TEXT NOT NULL UNIQUE,
    usu_phone TEXT NOT NULL,
    usu_salt TEXT NOT NULL,
    usu_password TEXT NOT NULL
);
CREATE TABLE address(
    add_id SERIAL PRIMARY KEY,
    add_cidade TEXT NOT NULL,
    add_cep TEXT NOT NULL,
    add_logradouro TEXT NOT NULL,
    add_numero TEXT NOT NULL,
    add_complemento TEXT,
    add_bairro 

);
-- Bairro  = dto.Bairro,
-- Uf = dto.Uf,
-- Clienteid = dto.ClienteId,
-- Status = dto.Status,
CREATE TABLE accounts (
    acc_id SERIAL PRIMARY KEY,
    acc_numero TEXT NOT NULL,
    acc_userId INTEGER NOT NULL,
    acc_userDoc TEXT NOT NULL,
    acc_amount DOUBLE PRECISION NOT NULL,
    acc_created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    acc_status TEXT NOT NULL,
    FOREIGN KEY (acc_userId) REFERENCES users(usu_id)
    FOREIGN KEY (acc_userDoc) REFERENCES users(usu_doc)
);
CREATE TABLE transactions (
    trans_id SERIAL PRIMARY KEY,
    trans_accId INTEGER NOT NULL,
    trans_typeId INTEGER NOT NULL,
    trans_amount DOUBLE PRECISION NOT NULL,
    trans_date TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    trans_description TEXT NOT NULL,
    trans_status TEXT NOT NULL,
    -- FOREIGN KEY (trans_accId) REFERENCES accounts(acc_id),
    FOREIGN KEY (trans_typeId) REFERENCES types_payment(type_id)
);
CREATE TABLE rules (
    rule_id SERIAL PRIMARY KEY,
    rule_name TEXT NOT NULL,
    rule_description TEXT,
    rule_typeId INTEGER NOT NULL,
    rule_effect TEXT NOT NULL,
      BOOLEAN NOT NULL,
    FOREIGN KEY (rule_typeId) REFERENCES types_payment(type_id)
);
CREATE TABLE types_payment (
    type_id SERIAL PRIMARY KEY,
    type_name TEXT NOT NULL,
    type_description TEXT,
    type_code TEXT NOT NULL,
    type_active BOOLEAN NOT NULL
);
CREATE TABLE products (
    prod_id SERIAL PRIMARY KEY,
    prod_name TEXT NOT NULL,
    prod_description TEXT,
    prod_price DOUBLE PRECISION NOT NULL,
    prod_stock INTEGER NOT NULL,
    prod_active BOOLEAN NOT NULL
);
CREATE TABLE transactions_products (
    trans_id INTEGER NOT NULL,
    prod_id INTEGER NOT NULL,
    quantity INTEGER NOT NULL,
    PRIMARY KEY (trans_id, prod_id),
    FOREIGN KEY (trans_id) REFERENCES transactions(trans_id),
    FOREIGN KEY (prod_id) REFERENCES products(prod_id)
);
CREATE TABLE payment_rules_accounts (
    rule_id INTEGER NOT NULL,
    acc_id INTEGER NOT NULL,
    effect_date TIMESTAMP WITH TIME ZONE,
    PRIMARY KEY (rule_id, acc_id),
    FOREIGN KEY (rule_id) REFERENCES rules(rule_id),
    FOREIGN KEY (acc_id) REFERENCES accounts(acc_id)
);
