CREATE DATABASE IF NOT EXISTS aquatrack_db;
USE aquatrack_db;
CREATE TABLE IF NOT EXISTS issue_reports(
 id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100) NOT NULL,area VARCHAR(150) NOT NULL,
 issue_type VARCHAR(100) NOT NULL,description TEXT NOT NULL,status VARCHAR(30) DEFAULT 'Open',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE IF NOT EXISTS water_usage(
 id INT AUTO_INCREMENT PRIMARY KEY,usage_date DATE NOT NULL,litres_used INT DEFAULT 0,
 litres_saved INT DEFAULT 0,department VARCHAR(150) NOT NULL);
INSERT INTO water_usage(usage_date,litres_used,litres_saved,department)
SELECT CURDATE(),12450,2180,'Production Unit'
WHERE NOT EXISTS(SELECT 1 FROM water_usage WHERE usage_date=CURDATE());