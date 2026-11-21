-- The database ONLY stores messages from the contact form.
-- All your page content (name, about, skills, education, links) is in includes/content.php
DROP DATABASE IF EXISTS portfolio;   -- removes the old version so you can re-import
CREATE DATABASE portfolio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE portfolio;

CREATE TABLE messages (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  name       VARCHAR(100) NOT NULL,
  email      VARCHAR(150) NOT NULL,
  message    TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
