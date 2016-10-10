<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1476096335.
 * Generated on 2016-10-10 18:45:35 by jarnielcataluna
 */
class PropelMigration_1476096335
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

ALTER TABLE `accounts` CHANGE `area_id` `area_id` INTEGER(11);

ALTER TABLE `accounts` CHANGE `city_id` `city_id` INTEGER(11);

ALTER TABLE `accounts` CHANGE `category_id` `category_id` INTEGER(11);

ALTER TABLE `accounts` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `area` CHANGE `city_id` `city_id` INTEGER(11);

ALTER TABLE `area` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `bower` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `bower` CHANGE `nestle_region` `nestle_region` INTEGER(11);

ALTER TABLE `bower` CHANGE `distributor_id` `distributor_id` INTEGER(11);

ALTER TABLE `bower_account` CHANGE `bower_id` `bower_id` INTEGER(11);

ALTER TABLE `bower_account` CHANGE `account_id` `account_id` INTEGER(11);

ALTER TABLE `bower_account` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `category` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `city` CHANGE `province_id` `province_id` INTEGER(11);

ALTER TABLE `city` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `day` CHANGE `bracket_number` `bracket_number` INTEGER(11);

ALTER TABLE `nestle_distributors` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `nestle_regions` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `product` CHANGE `type` `type` INTEGER(11);

ALTER TABLE `promos` CHANGE `rule_id` `rule_id` INTEGER(11);

ALTER TABLE `promos` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `province` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `region` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `rules` CHANGE `product_id` `product_id` INTEGER(11);

ALTER TABLE `rules` CHANGE `qty_to_qualify` `qty_to_qualify` INTEGER(11);

ALTER TABLE `rules` CHANGE `qty_free` `qty_free` INTEGER(11);

ALTER TABLE `rules` CHANGE `promo_product_id` `promo_product_id` INTEGER(11);

ALTER TABLE `rules` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `sales_report_invoice` CHANGE `sales_report_id` `sales_report_id` INTEGER(11);

ALTER TABLE `sales_report_invoice` CHANGE `invoice_id` `invoice_id` INTEGER(11);

ALTER TABLE `sales_report_invoice` CHANGE `status` `status` INTEGER(11);

ALTER TABLE `users` CHANGE `status` `status` INTEGER(11);

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

DROP TABLE IF EXISTS `invoices`;

DROP TABLE IF EXISTS `invoice_item`;

DROP TABLE IF EXISTS `sales_report`;

ALTER TABLE `accounts` CHANGE `area_id` `area_id` INTEGER;

ALTER TABLE `accounts` CHANGE `city_id` `city_id` INTEGER;

ALTER TABLE `accounts` CHANGE `category_id` `category_id` INTEGER;

ALTER TABLE `accounts` CHANGE `status` `status` INTEGER;

ALTER TABLE `area` CHANGE `city_id` `city_id` INTEGER;

ALTER TABLE `area` CHANGE `status` `status` INTEGER;

ALTER TABLE `bower` CHANGE `status` `status` INTEGER;

ALTER TABLE `bower` CHANGE `nestle_region` `nestle_region` INTEGER;

ALTER TABLE `bower` CHANGE `distributor_id` `distributor_id` INTEGER;

ALTER TABLE `bower_account` CHANGE `bower_id` `bower_id` INTEGER;

ALTER TABLE `bower_account` CHANGE `account_id` `account_id` INTEGER;

ALTER TABLE `bower_account` CHANGE `status` `status` INTEGER;

ALTER TABLE `category` CHANGE `status` `status` INTEGER;

ALTER TABLE `city` CHANGE `province_id` `province_id` INTEGER;

ALTER TABLE `city` CHANGE `status` `status` INTEGER;

ALTER TABLE `day` CHANGE `bracket_number` `bracket_number` INTEGER;

ALTER TABLE `nestle_distributors` CHANGE `status` `status` INTEGER;

ALTER TABLE `nestle_regions` CHANGE `status` `status` INTEGER;

ALTER TABLE `product` CHANGE `type` `type` INTEGER;

ALTER TABLE `promos` CHANGE `rule_id` `rule_id` INTEGER;

ALTER TABLE `promos` CHANGE `status` `status` INTEGER;

ALTER TABLE `province` CHANGE `status` `status` INTEGER;

ALTER TABLE `region` CHANGE `status` `status` INTEGER;

ALTER TABLE `rules` CHANGE `product_id` `product_id` INTEGER;

ALTER TABLE `rules` CHANGE `qty_to_qualify` `qty_to_qualify` INTEGER;

ALTER TABLE `rules` CHANGE `qty_free` `qty_free` INTEGER;

ALTER TABLE `rules` CHANGE `promo_product_id` `promo_product_id` INTEGER;

ALTER TABLE `rules` CHANGE `status` `status` INTEGER;

ALTER TABLE `sales_report_invoice` CHANGE `sales_report_id` `sales_report_id` INTEGER;

ALTER TABLE `sales_report_invoice` CHANGE `invoice_id` `invoice_id` INTEGER;

ALTER TABLE `sales_report_invoice` CHANGE `status` `status` INTEGER;

ALTER TABLE `users` CHANGE `status` `status` INTEGER;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}