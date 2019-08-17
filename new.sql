ALTER TABLE `product_price` ADD `stop_loss_price_add` VARCHAR(255) NOT NULL DEFAULT '50' COMMENT '最大止损金额增幅' AFTER `stop_loss_price`;
