<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1476095238.
 * Generated on 2016-10-10 18:27:18 by jarnielcataluna
 */
class PropelMigration_1476095238
{

    public function preUp($manager)
    {
        // add the pre-migration code here
    }

    public function postUp($manager)
    {
        // add the post-migration code here
    }

    public function preDown($manager)
    {
        // add the pre-migration code here
    }

    public function postDown($manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `accounts`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `contact_person` VARCHAR(255),
    `contact_number` VARCHAR(45),
    `address` VARCHAR(255),
    `latitude` VARCHAR(255),
    `longitude` VARCHAR(255),
    `best_from` VARCHAR(100),
    `best_to` VARCHAR(100),
    `area_id` INTEGER(11),
    `city_id` INTEGER(11),
    `frequency` VARCHAR(100),
    `category_id` INTEGER(11),
    `channel` VARCHAR(255),
    `bracket_number` VARCHAR(255),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `accounts_FI_1` (`area_id`),
    INDEX `accounts_FI_2` (`city_id`),
    INDEX `accounts_FI_3` (`category_id`)
) ENGINE=MyISAM;

CREATE TABLE `area`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `area` VARCHAR(255),
    `city_id` INTEGER(11),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `area_FI_1` (`city_id`)
) ENGINE=MyISAM;

CREATE TABLE `bower`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `fname` VARCHAR(255),
    `lname` VARCHAR(255),
    `contact_number` VARCHAR(255),
    `bdate` VARCHAR(255),
    `username` VARCHAR(255),
    `password` VARCHAR(255),
    `area_id` INTEGER(100),
    `status` INTEGER(11),
    `bower_id` VARCHAR(255),
    `distributor` VARCHAR(255),
    `nestle_region` INTEGER(11),
    `distributor_id` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `bower_FI_1` (`distributor_id`),
    INDEX `bower_FI_2` (`nestle_region`),
    INDEX `bower_FI_3` (`area_id`)
) ENGINE=MyISAM;

CREATE TABLE `bower_account`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `bower_id` INTEGER(11),
    `account_id` INTEGER(11),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `bower_account_FI_1` (`bower_id`),
    INDEX `bower_account_FI_2` (`account_id`)
) ENGINE=MyISAM;

CREATE TABLE `brand`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `brand` VARCHAR(255),
    `status` INTEGER(100),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `brand_product`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `brand_id` INTEGER(100),
    `product_id` INTEGER(100),
    PRIMARY KEY (`id`),
    INDEX `brand_product_FI_1` (`brand_id`),
    INDEX `brand_product_FI_2` (`product_id`)
) ENGINE=MyISAM;

CREATE TABLE `category`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `category` VARCHAR(255),
    `status` INTEGER(11),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `city`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `city` VARCHAR(255),
    `province_id` INTEGER(11),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `city_FI_1` (`province_id`)
) ENGINE=MyISAM;

CREATE TABLE `product`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `product_category_id` INTEGER(100),
    `sku` VARCHAR(255),
    `name` VARCHAR(255),
    `background_color` VARCHAR(255),
    `font_color` VARCHAR(255),
    `image` VARCHAR(255),
    `thumbnail` VARCHAR(255),
    `base_price` FLOAT,
    `vat` FLOAT,
    `date_added` VARCHAR(255),
    `status` INTEGER(100),
    `type` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `product_FI_1` (`product_category_id`)
) ENGINE=MyISAM;

CREATE TABLE `product_category`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `product_category` VARCHAR(255),
    `status` INTEGER(100),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `province`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `province` VARCHAR(255),
    `region_id` INTEGER(100),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `province_FI_1` (`region_id`)
) ENGINE=MyISAM;

CREATE TABLE `day`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `day` VARCHAR(255),
    `bracket_number` INTEGER(11),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `invoices`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `receipt_id` VARCHAR(255),
    `invoice_date` VARCHAR(255),
    `account_id` INTEGER(11),
    `sold_to` VARCHAR(255),
    `bower_id` INTEGER(11),
    `sales` FLOAT(100),
    `skus` INTEGER(11),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `invoices_FI_1` (`account_id`),
    INDEX `invoices_FI_2` (`bower_id`)
) ENGINE=MyISAM;

CREATE TABLE `invoice_item`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `invoice_id` INTEGER(11),
    `product_id` INTEGER(11),
    `unit_price` FLOAT(100),
    `qty` INTEGER(11),
    `total_sales` FLOAT(100),
    PRIMARY KEY (`id`),
    INDEX `invoice_item_FI_1` (`invoice_id`),
    INDEX `invoice_item_FI_2` (`product_id`)
) ENGINE=MyISAM;

CREATE TABLE `region`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `region` VARCHAR(255),
    `status` INTEGER(11),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `sales_report`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `bower_id` INTEGER(11),
    `total_sales` FLOAT(100),
    `total_skus` INTEGER(11),
    `date` VARCHAR(255),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `sales_report_FI_1` (`bower_id`)
) ENGINE=MyISAM;

CREATE TABLE `sales_report_invoice`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `sales_report_id` INTEGER(11),
    `invoice_id` INTEGER(11),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `sales_report_invoice_FI_1` (`sales_report_id`),
    INDEX `sales_report_invoice_FI_2` (`invoice_id`)
) ENGINE=MyISAM;

CREATE TABLE `promos`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `rule_id` INTEGER(11),
    `name` VARCHAR(255),
    `description` VARCHAR(255),
    `status` INTEGER(11),
    `region_id` INTEGER(1) DEFAULT 0,
    PRIMARY KEY (`id`),
    INDEX `promos_FI_1` (`rule_id`),
    INDEX `promos_FI_2` (`region_id`)
) ENGINE=MyISAM;

CREATE TABLE `rules`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `product_id` INTEGER(11),
    `qty_to_qualify` INTEGER(11),
    `qty_free` INTEGER(11),
    `promo_product_id` INTEGER(11),
    `start_date` VARCHAR(255),
    `end_date` VARCHAR(255),
    `status` INTEGER(11),
    PRIMARY KEY (`id`),
    INDEX `rules_FI_1` (`product_id`),
    INDEX `rules_FI_2` (`promo_product_id`)
) ENGINE=MyISAM;

CREATE TABLE `users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `fname` VARCHAR(255),
    `lname` VARCHAR(255),
    `username` VARCHAR(255),
    `password` VARCHAR(255),
    `level` VARCHAR(255),
    `department` VARCHAR(255),
    `last_login` VARCHAR(255),
    `token` VARCHAR(255),
    `status` INTEGER(11),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `nestle_regions`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `region_code` VARCHAR(255),
    `status` INTEGER(11),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `nestle_distributors`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `distributor_id` VARCHAR(15),
    `distributor` VARCHAR(255),
    `status` INTEGER(11),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `nestle_cycle_plans`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255),
    `date` VARCHAR(255),
    `link` VARCHAR(255),
    `status` INTEGER(15),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE `nestle_official_regions`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nestle_region` VARCHAR(255),
    `status` INTEGER(15),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `accounts`;

DROP TABLE IF EXISTS `area`;

DROP TABLE IF EXISTS `bower`;

DROP TABLE IF EXISTS `bower_account`;

DROP TABLE IF EXISTS `brand`;

DROP TABLE IF EXISTS `brand_product`;

DROP TABLE IF EXISTS `category`;

DROP TABLE IF EXISTS `city`;

DROP TABLE IF EXISTS `product`;

DROP TABLE IF EXISTS `product_category`;

DROP TABLE IF EXISTS `province`;

DROP TABLE IF EXISTS `day`;

DROP TABLE IF EXISTS `invoices`;

DROP TABLE IF EXISTS `invoice_item`;

DROP TABLE IF EXISTS `region`;

DROP TABLE IF EXISTS `sales_report`;

DROP TABLE IF EXISTS `sales_report_invoice`;

DROP TABLE IF EXISTS `promos`;

DROP TABLE IF EXISTS `rules`;

DROP TABLE IF EXISTS `users`;

DROP TABLE IF EXISTS `nestle_regions`;

DROP TABLE IF EXISTS `nestle_distributors`;

DROP TABLE IF EXISTS `nestle_cycle_plans`;

DROP TABLE IF EXISTS `nestle_official_regions`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}