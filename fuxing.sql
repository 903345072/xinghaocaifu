-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2019-04-09 22:34:13
-- 服务器版本： 5.7.24
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuxing`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin_account`
--

CREATE TABLE IF NOT EXISTS `admin_account` (
  `admin_id` int(11) NOT NULL COMMENT '用户ID',
  `realname` varchar(100) NOT NULL COMMENT '真实姓名',
  `id_card` varchar(100) NOT NULL COMMENT '身份证号',
  `bank_name` varchar(100) NOT NULL COMMENT '银行名称',
  `bank_card` varchar(100) NOT NULL COMMENT '银行卡号',
  `bank_user` varchar(100) NOT NULL COMMENT '持卡人姓名',
  `bank_mobile` char(11) NOT NULL COMMENT '银行预留手机号',
  `bank_address` varchar(100) DEFAULT NULL COMMENT '开户行地址',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员账户表';

--
-- 转存表中的数据 `admin_account`
--

INSERT INTO `admin_account` (`admin_id`, `realname`, `id_card`, `bank_name`, `bank_card`, `bank_user`, `bank_mobile`, `bank_address`, `created_at`, `updated_at`) VALUES
(35, 'wdfsf', 'xx', '2dsfsdf', 'sdfsdfsdf', 'wdfsf', '234234', '234234', '2019-01-16 22:31:07', '2019-01-16 22:31:07');

-- --------------------------------------------------------

--
-- 表的结构 `admin_menu`
--

CREATE TABLE IF NOT EXISTS `admin_menu` (
  `id` int(11) NOT NULL COMMENT '序号',
  `name` varchar(30) NOT NULL COMMENT '菜单名',
  `pid` int(11) DEFAULT '0' COMMENT '父ID',
  `level` smallint(6) DEFAULT '1' COMMENT '层级',
  `sort` int(11) DEFAULT '1' COMMENT '排序值',
  `url` varchar(250) DEFAULT '' COMMENT '跳转链接',
  `icon` varchar(250) DEFAULT NULL COMMENT '图标',
  `is_show` tinyint(4) DEFAULT '1' COMMENT '是否显示',
  `category` tinyint(4) DEFAULT '1' COMMENT '菜单分类',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COMMENT='菜单表';

--
-- 转存表中的数据 `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `name`, `pid`, `level`, `sort`, `url`, `icon`, `is_show`, `category`, `state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '系统管理', 0, 1, 1, 'system', '<i class="Hui-iconfont">&#xe62e;</i>', 1, 1, 1, '2016-08-22 17:54:31', 1, '2016-10-28 15:03:56', 1),
(2, '系统设置', 1, 2, 2, 'system/setting', '', 1, 1, 1, '2016-08-22 17:54:58', 1, '2016-08-22 17:54:58', 1),
(3, '系统菜单', 1, 2, 3, 'system/menu', '', 1, 1, 1, '2016-08-22 17:55:35', 1, '2016-08-22 18:59:43', 1),
(4, '系统日志', 1, 2, 4, 'system/logList', '', 1, 1, 1, '2016-08-22 18:42:11', 1, '2016-09-02 11:40:45', 1),
(5, '管理员管理', 0, 1, 2, 'admin', '<i class="Hui-iconfont">&#xe62d;</i>', 1, 1, 1, '2016-08-22 18:43:29', 1, '2016-10-28 15:03:56', 1),
(6, '管理员列表', 5, 2, 2, 'admin/list', '', 1, 1, 1, '2016-08-22 18:46:24', 1, '2016-08-22 18:46:24', 1),
(7, '角色列表', 5, 2, 3, 'admin/roleList', '', 1, 1, 1, '2016-08-22 18:46:50', 1, '2016-08-30 18:25:01', 1),
(8, '权限列表', 5, 2, 4, 'admin/permissionList', '', 1, 1, 1, '2016-08-22 18:47:10', 1, '2016-08-30 18:24:58', 1),
(9, '会员管理', 0, 1, 3, 'user', '<i class="Hui-iconfont">&#xe60d;</i>', 1, 1, 1, '2016-08-22 18:47:49', 1, '2016-10-28 15:03:56', 1),
(10, '会员列表', 9, 2, 2, 'user/list', '', 1, 1, 1, '2016-08-22 18:48:13', 1, '2016-08-27 19:45:26', 1),
(11, '资讯管理', 0, 1, 8, 'article', '<i class="Hui-iconfont">&#xe616;</i>', 1, 1, 1, '2016-08-22 18:48:55', 1, '2016-10-28 15:03:56', 1),
(12, '资讯列表', 11, 2, 2, 'article/list', '', 1, 1, 1, '2016-08-22 18:49:15', 1, '2016-08-29 13:13:00', 1),
(13, '体验券管理', 0, 1, 7, 'coupon', '<i class="Hui-iconfont">&#xe613;</i>', 1, 1, 1, '2016-08-22 18:49:39', 1, '2016-10-28 15:07:00', 1),
(14, '体验券列表', 13, 2, 2, 'coupon/list', '', 1, 1, 1, '2016-08-22 18:49:54', 1, '2016-10-28 15:07:04', 1),
(15, '产品管理', 0, 1, 5, 'product', '<i class="Hui-iconfont">&#xe620;</i>', 1, 1, 1, '2016-08-22 18:51:04', 1, '2016-10-28 15:03:56', 1),
(16, '产品列表', 15, 2, 2, 'product/list', '', 1, 1, 1, '2016-08-22 18:51:18', 1, '2016-08-22 18:51:18', 1),
(17, '分销管理', 0, 1, 6, 'sale', '<i class="Hui-iconfont">&#xe622;</i>', 1, 1, 1, '2016-08-22 18:51:35', 1, '2016-10-28 15:03:56', 1),
(18, '经纪人列表', 17, 2, 2, 'sale/managerList', '', 1, 1, 1, '2016-08-22 18:52:10', 1, '2016-10-28 15:48:01', 1),
(19, '订单管理', 0, 1, 4, 'order', '<i class="Hui-iconfont">&#xe61a;</i>', 1, 1, 1, '2016-08-22 19:00:05', 1, '2016-10-28 15:03:56', 1),
(20, '用户持有体验券', 13, 2, 3, 'coupon/ownerList', '', 1, 1, 1, '2016-10-27 14:50:18', 1, '2016-10-28 15:27:50', 1),
(21, '会员持仓列表', 9, 2, 3, 'user/positionList', '', 1, 1, 1, '2016-10-27 15:32:31', 1, '2016-10-28 09:27:38', 1),
(22, '会员充值', 9, 2, 4, 'user/giveList', '', 1, 1, 1, '2016-10-27 15:33:45', 1, '2016-10-27 19:55:55', 1),
(23, '会员出金', 9, 2, 5, 'user/withdrawList', '', 1, 1, 1, '2016-10-27 15:34:11', 1, '2016-10-27 19:55:59', 1),
(24, '会员充值记录', 9, 2, 6, 'user/chargeRecordList', '', 1, 1, 1, '2016-10-27 15:36:04', 1, '2016-10-27 19:56:07', 1),
(25, '订单列表', 19, 2, 2, 'order/list', '', 1, 1, 1, '2016-10-27 21:10:41', 1, '2016-10-27 21:10:41', 1),
(26, '风险管理', 0, 1, 9, 'risk', '<i class="Hui-iconfont">&#xe65a;</i>', 1, 1, 1, '2016-10-29 10:45:01', 1, '2016-10-29 10:50:36', 1),
(27, '风险控制', 26, 2, 2, 'risk/center', '', 1, 1, 1, '2016-10-29 10:45:37', 1, '2016-10-29 10:45:37', 1),
(28, '审核经纪人', 9, 2, 7, 'user/verifyManager', '', 1, 1, -1, '2016-10-31 17:06:34', 1, '2016-10-31 17:06:34', 1),
(29, '返点记录列表', 9, 2, 8, 'user/rebateList', '', 1, 1, -1, '2016-11-14 10:57:39', 1, '2016-11-14 10:57:39', 1),
(30, '代理商管理', 0, 1, 10, 'retail', '<i class="Hui-iconfont"></i>', 1, 1, 1, '2016-11-24 19:12:25', 1, '2016-12-02 16:54:49', 1),
(31, '代理商列表', 30, 2, 2, 'retail/list', '', 1, 1, 1, '2016-11-24 19:12:53', 1, '2016-12-03 15:48:00', 1),
(32, '经纪人列表', 30, 2, 3, 'sale/managerList', NULL, 1, 1, -1, NULL, NULL, NULL, NULL),
(33, '审核经纪人', 30, 2, 4, 'user/verifyManager', '', 1, 1, 1, '2016-12-02 15:10:31', 1, '2016-12-02 15:10:31', 1),
(34, '返点记录列表', 30, 2, 6, 'user/rebateList', '', -1, 1, 1, '2016-12-02 15:11:04', 1, '2019-03-31 21:27:09', 1),
(35, '代理商返点统计', 30, 2, 5, 'sale/managerRebateList', '', -1, 1, 1, '2016-12-05 14:05:49', 1, '2019-03-31 21:27:13', 1),
(36, '公告', 0, 1, 10, 'gonggao', '<i class="Hui-iconfont">&#xe62d;</i>', 1, 1, -1, NULL, NULL, NULL, NULL),
(37, '公告信息编辑', 36, 2, 1, '', NULL, 1, 1, -1, NULL, NULL, NULL, NULL),
(38, '转账明细', 9, 1, 9, 'user/transfer', NULL, 1, 1, 1, '2018-05-20 15:35:50', NULL, '2018-05-20 15:35:54', 1),
(39, '意见反馈', 9, 1, 8, 'user/feedback', NULL, 1, 1, 1, '2018-05-20 15:35:50', NULL, '2018-05-20 15:35:54', 1),
(40, '模拟订单', 19, 2, 3, 'order/listm', '', 1, 1, 1, '2018-05-27 00:15:12', 1, '2018-05-27 03:31:54', 1),
(41, 'sss', 0, 1, 11, '//uploadfile/setting/20180717/', '', 1, 1, -1, '2018-07-17 02:57:33', 1, '2018-07-17 02:57:33', 1),
(42, '代理商出金申请', 11, 2, 9, 'retail/saveWithdraw', '', 1, 1, -1, '2017-12-20 09:17:20', 1, '2017-12-20 09:17:20', 1),
(43, '代理商出金申请', 30, 2, 7, 'retail/saveWithdraw', '', -1, 1, 1, '2019-01-16 22:17:24', 1, '2019-03-31 21:27:10', 1),
(44, '代理商出金记录', 30, 2, 8, 'retail/withdrawList', '', -1, 1, 1, '2019-01-16 22:18:04', 1, '2019-03-31 21:27:11', 1);

-- --------------------------------------------------------

--
-- 表的结构 `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL COMMENT '账号',
  `password` varchar(80) NOT NULL COMMENT '密码',
  `realname` varchar(30) NOT NULL DEFAULT '' COMMENT '真名',
  `power` int(11) DEFAULT '10000' COMMENT '权力值',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COMMENT='后台用户表';

--
-- 转存表中的数据 `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`, `realname`, `power`, `state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'ChisWill', '$2y$13$Ob.Bn/S5.1t7MgXu.AUVmeWdQvu695n9B1PgvFJA6h4ucOBazTy1G', 'ChisWill', 10000, 1, '2016-08-06 23:36:12', 0, '2018-07-17 03:03:10', 1),
(2, 'admin', '$2y$13$qkug8mfQPrfZ.SCaQXt5feY7Ffhj8D7K5/V8M9q/WxbK8L/vyEFH.', 'admin', 9995, 1, '2016-10-26 17:41:00', 1, '2019-02-28 12:12:51', 1),
(9, '总代理商', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '富鼎', 9994, 1, '2016-12-03 15:57:36', 2, '2019-03-31 20:59:16', 1),
(22, '金服科技', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '丁总', 9994, 1, '2019-01-12 08:04:28', 1, '2019-01-12 19:31:44', 1),
(23, 'wz666', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '吴总', 9994, 1, '2019-01-12 08:06:45', 1, '2019-01-14 19:15:48', 23),
(24, 'hz6001', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '张总', 9994, 1, '2019-01-12 08:09:42', 1, '2019-01-12 08:59:40', 1),
(25, '张总666', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '张总', 9994, 1, '2019-01-12 08:35:59', 1, '2019-01-12 08:59:31', 1),
(26, 'wz888', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '吴总 ', 9994, 1, '2019-01-12 08:41:42', 1, '2019-01-12 22:03:24', 26),
(27, '李总', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '李总', 9994, 1, '2019-01-12 08:44:07', 1, '2019-01-18 00:48:01', 1),
(28, 'ceshi', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '测试法人', 9994, 1, '2019-01-13 15:30:35', 1, '2019-01-13 15:30:35', 1),
(29, 'cs02', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '1', 9994, 1, '2019-01-12 17:02:13', 1, '2019-01-12 17:02:13', 1),
(30, 'cs03', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '123123', 9994, 1, '2019-01-12 17:05:19', 2, '2019-01-12 17:05:19', 2),
(31, '张科', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '张', 9994, 1, '2019-01-13 20:53:04', 2, '2019-01-13 20:53:04', 2),
(32, '杭州运营', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '杭州运营', 9994, 1, '2019-01-13 20:54:29', 2, '2019-01-13 20:54:29', 2),
(33, 'w666888', '$2y$13$RfyECWP8GkFkYdSqkwBdf.ti7Jc/otYlQdkznzsgIQ5oRWzZtKoUu', '吴总', 9994, 1, '2019-01-14 12:28:14', 2, '2019-01-14 12:28:14', 2),
(34, 'lz666', '$2y$13$ho2/0NFCttJy8OSqqZBt5O6GeYUzZ.9FQK.fcbPfu5QATl3ngc0qq', '杭吴', 9994, 1, '2019-01-14 20:05:03', 2, '2019-01-18 00:47:04', 1),
(35, 'fang258133', '$2y$13$O28m7VyAVJiWsc8hUNUDle6G4m067FIz2aliKZLtMsHslNYVGPeh6', '方总', 9994, 1, '2019-01-16 17:40:35', 2, '2019-01-16 17:40:35', 2),
(36, 'qwer', '$2y$13$pKaXydd7ak1lLAKsCBpIfel8c50V87pqDEsX609uWKbVJzQF3kyqC', '杭', 9994, 1, '2019-01-17 09:50:35', 2, '2019-01-17 09:50:35', 2),
(37, 'asdf', '$2y$13$djqo6e70iw4aPxj4jal.nuT.rGwlSXbZBicKmqBo2h8s.zfedjRhS', '杭', 9994, 1, '2019-01-17 09:53:56', 1, '2019-01-17 09:53:56', 1),
(38, '金服科技1', '$2y$13$fQ/1S5/ij11nriRjiJiE2.QJwzd77qlt23xZUHq3tQegCtf1DES0W', '丁总', 9994, 1, '2019-01-17 18:20:18', 2, '2019-01-17 18:20:18', 2),
(39, 'hz6002', '$2y$13$MMEGFOkduYkJq/O25z0tO..E2htV.2cxjKMpYVkSuUlrSxaRRbcaq', '张', 9994, 1, '2019-01-17 18:23:13', 2, '2019-01-17 18:23:13', 2),
(40, '张科1', '$2y$13$s.ZNpfv6PaOUdiNkQnLwF.5m4yedclkQNALKWdjnakxNmWLxS0AHy', '张总', 9994, 1, '2019-01-17 18:35:52', 2, '2019-01-17 18:35:52', 2),
(41, '123456a', '$2y$13$eT228.co70darFRm3n.vh.Ru77ZTS4R372JHer/PPjctmhd1bkhC6', '123456', 9994, 1, '2019-03-31 20:56:05', 2, '2019-03-31 20:56:05', 2),
(42, 'wz8881', '$2y$13$Hhs/vsC3GDiK6/PhH.SMkezCLrXPmaEV3mwkwx0PIIIto4V4U83LG', '123456', 9994, 1, '2019-03-31 20:57:54', 2, '2019-03-31 20:57:54', 2);

-- --------------------------------------------------------

--
-- 表的结构 `admin_withdraw`
--

CREATE TABLE IF NOT EXISTS `admin_withdraw` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT '用户ID',
  `amount` decimal(11,2) NOT NULL COMMENT '出金金额',
  `op_state` tinyint(4) DEFAULT '1' COMMENT '操作状态：1待审核，2已操作，-1不通过',
  `created_at` datetime DEFAULT NULL COMMENT '申请时间',
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '审核时间',
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='管理员提款表';

--
-- 转存表中的数据 `admin_withdraw`
--

INSERT INTO `admin_withdraw` (`id`, `admin_id`, `amount`, `op_state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(9, 35, '1000.00', 2, '2019-01-16 22:31:07', 35, '2019-01-16 22:31:30', 1);

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `publish_time` datetime NOT NULL COMMENT '发生时间',
  `category` tinyint(4) DEFAULT '1' COMMENT '分类',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL COMMENT '发布时间',
  `created_by` int(11) DEFAULT NULL COMMENT '发布人',
  `updated_at` datetime DEFAULT NULL COMMENT '更新时间',
  `updated_by` int(11) DEFAULT NULL COMMENT '修改人'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='资讯表';

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `publish_time`, `category`, `state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '『喜讯-入金赠金』友情提示！', '<p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">欢迎莅临融信期货：</span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;"><br/></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">&nbsp; &nbsp; &nbsp; &nbsp;尊敬的贵宾：您好！&nbsp;</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">『喜讯-入金赠金』</span><span style="margin: 0px auto; padding: 0px;">：为感谢广大用户长期以来对<span style="margin: 0px auto; padding: 0px;">融信期货</span>的支持和信赖：凡是采用公司入款【<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">银行转账、支付宝转银行卡、<span style="margin: 0px auto; padding: 0px;">微信转银行卡</span></span>】入金的贵宾，即可尊享该笔入金<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">1%<span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">的<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">返利</span></span></span>，<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">注</span>（<span style="margin: 0px auto; padding: 0px; color: rgb(0, 176, 80);">赠送的返利金系统自动存入用户积分中</span>-<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">积分可抵用交易手续费</span>）。部分用户反馈转入个人账号？<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">无需担忧</span>。转入的都是<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">我司第三方个人账户</span>，资金更安全，优惠更丰富。（主要解决<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">大额入金</span>限额的问题）。如有疑问请您联系我司<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">7*24</span>小时在线客服或客服QQ：<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">99608111</span>、我们将竭诚为您服务，祝您投资顺利、盈利多多！</span></p><p><span style="margin: 0px auto; padding: 0px;"><br/></span></p><p><br/></p>', '2018-05-02 00:00:00', 1, 1, '2018-05-20 17:07:18', 2, '2018-05-20 17:07:18', 2),
(2, '〖富鼎期货〗美原油更换合约通知！', '<p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">欢迎莅临融信期货：</span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;"><br/></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">&nbsp; &nbsp; &nbsp; &nbsp;</span><span style="margin: 0px auto; padding: 0px; font-family: sans-serif;">尊敬的贵宾：您好！<span style="margin: 0px auto; padding: 0px; color: rgb(227, 108, 9);">根据纽约商品交易所主力合约规则</span>，〖<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">美原油CL1806</span>〗主力合约即将<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">到期</span>下线将<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">不再交易</span>，于<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">2018</span>年<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">05</span>月<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">17</span>日(<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周四</span>)我司美原油<span style="margin: 0px auto; padding: 0px; color: rgb(227, 108, 9);">主力合约</span>更换为〖<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">美原油CL1807</span>〗敬请注意新旧合约价格差异。敬请知悉<span style="margin: 0px auto; padding: 0px; font-family: 微软雅黑;">！</span></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px; font-family: sans-serif;"><span style="margin: 0px auto; padding: 0px; font-family: 微软雅黑;"><br/></span></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px; font-family: sans-serif;"><span style="margin: 0px auto; padding: 0px; font-family: 微软雅黑;"><span style="margin: 0px auto; padding: 0px;">融信</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">期货直播吧</span><span style="margin: 0px auto; padding: 0px;">汇聚各大财经大咖专业分析师，{</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周一</span><span style="margin: 0px auto; padding: 0px;">至</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周五</span><span style="margin: 0px auto; padding: 0px;">}每天</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">09:30-11:30</span><span style="margin: 0px auto; padding: 0px;">&nbsp;</span><span style="margin: 0px auto; padding: 0px; color: rgb(0, 112, 192);">13:30-15:30</span><span style="margin: 0px auto; padding: 0px;">&nbsp;</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">15:30-17:30&nbsp;</span><span style="margin: 0px auto; padding: 0px;"></span><span style="margin: 0px auto; padding: 0px; color: rgb(0, 112, 192);">19:00-21:00</span><span style="margin: 0px auto; padding: 0px;">&nbsp;</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">21:00-23:00&nbsp;</span><span style="margin: 0px auto; padding: 0px; color: rgb(0, 112, 192);">23:00-01:00</span><span style="margin: 0px auto; padding: 0px;">&nbsp;权威资深分析师在线直播讲解，为投资</span><span style="margin: 0px auto; padding: 0px;">者提供<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">原油、黄金、白银、德指、恒指、现货、外汇期货</span>等大宗商品<span style="margin: 0px auto; padding: 0px; color: rgb(247, 150, 70);">做单策略和宝贵意见</span>、特邀广大投资者莅临直播吧和老师互动分析全球金融市场行情。敬请相互转告！</span></span></span></p><p><br/></p>', '2018-05-13 00:00:00', 1, 1, '2018-05-20 17:08:14', 2, '2018-05-20 17:08:14', 2),
(3, 'EIA预警公告/美原油更换合约通知！', '<p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">欢迎莅临融信期货：</span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;"><br/></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">&nbsp; &nbsp; &nbsp;&nbsp;</span><span style="margin: 0px auto; padding: 0px;">尊敬的贵宾：您好！今晚</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">22:30</span><span style="margin: 0px auto; padding: 0px;">美国</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">能源信息署</span><span style="margin: 0px auto; padding: 0px;">将发布当周</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">EIA</span><span style="margin: 0px auto; padding: 0px;">原油库存</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">数据</span><span style="margin: 0px auto; padding: 0px;">，届时</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">行情</span><span style="margin: 0px auto; padding: 0px;">走势波动会较为</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">剧烈</span><span style="margin: 0px auto; padding: 0px;">，为降低用户持仓风险，</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">美原油</span><span style="margin: 0px auto; padding: 0px;">履约</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">保证金</span><span style="margin: 0px auto; padding: 0px;">于</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">21:30-23:00</span><span style="margin: 0px auto; padding: 0px;">期间将会提高</span><span style="margin: 0px auto; padding: 0px; color: rgb(0, 176, 80);">(去除前两档)</span><span style="margin: 0px auto; padding: 0px;">。</span><span style="margin: 0px auto; padding: 0px; color: rgb(247, 150, 70);">EIA数据公布时行情波动剧烈，利润空间较大，技术面分析影响较小，行情受库存信息影响较大，预测正确盈利可观，<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">因此本周EIA大数据不容错过。</span></span><span style="margin: 0px auto; padding: 0px; color: rgb(0, 176, 240);">【兵马未动，粮草先行！提前预备“粮草”应战<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">EIA</span>。】</span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px; color: rgb(0, 176, 240);"><br/></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px; color: rgb(0, 176, 240);"><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">『</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">喜讯-入金赠金</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">』为感谢广大用户长期以来对融信期货的支持和信赖：凡是采用公司入款【</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">银行转账、支付宝转银行卡、微信转银行卡】</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">入金的贵宾，即可尊享该笔</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">入金1%</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">的优惠返利。</span></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><br/></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px; color: rgb(0, 176, 240);"><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">尊敬的贵宾：您好！</span><span style="margin: 0px auto; padding: 0px; color: rgb(227, 108, 9);">根据纽约商品交易所主力合约规则</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">，〖</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">美原油CL1806</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">〗主力合约即将</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">到期</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">下线将</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">不再交易</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">，于</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">2018</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">年</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">05</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">月</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">17</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">日(</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周四</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">)我司美原油</span><span style="margin: 0px auto; padding: 0px; color: rgb(227, 108, 9);">主力合约</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">更换为〖</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">美原油CL1807</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">〗敬请注意新旧合约价格差异。敬请知悉</span><span style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153);">！</span></span></p><p><br/></p>', '2018-05-14 00:00:00', 1, 1, '2018-05-20 17:10:35', 2, '2018-05-20 17:10:35', 2),
(4, '〖富鼎期货〗沥青更换合约通知！', '<p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">欢迎莅临融信期货：</span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;"><br/></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">&nbsp; &nbsp; &nbsp;&nbsp;</span><span style="margin: 0px auto; padding: 0px;">尊敬的贵宾：您好！<span style="margin: 0px auto; padding: 0px; color: rgb(250, 192, 143);">根据上海商品交易所主力合约规则</span>，〖<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">沥青BU1806</span>〗主力合约即将<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">到期</span>下线将<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">不再交易</span>，于<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">2018</span>年<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">05</span>月<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">21</span>日(<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周一</span>)我司沥青<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">主力合约</span>更换为:<span style="margin: 0px auto; padding: 0px;">〖</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">沥青BU1812</span><span style="margin: 0px auto; padding: 0px;">〗</span>,敬请注意新旧合约价格差异。敬请知悉 ！</span></p><p><br/></p>', '2018-05-14 00:00:00', 1, 1, '2018-05-20 17:10:54', 2, '2018-05-20 17:10:54', 2),
(5, '德指/恒指/小恒指休市通知！', '<p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">欢迎莅临融信期货：</span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;"><br/></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px;">&nbsp; &nbsp; &nbsp;&nbsp;尊敬的贵宾：您好！</span><span class="s1" style="margin: 0px auto; padding: 0px; font-family: sans-serif;">由于</span><span style="margin: 0px auto; padding: 0px; font-family: sans-serif; color: rgb(255, 0, 0);">2018</span><span class="s1" style="margin: 0px auto; padding: 0px; font-family: sans-serif;">年<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">5</span>月<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">21</span>日（<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周一</span>）为<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">德国圣灵降临节</span>，根据交易所规定，〖<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">德指</span>〗<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">全天休市</span>，其它品种正常交易。<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">2018</span>年<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">5</span>月<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">22</span>日（<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周二</span>）<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">正常开市</span>。</span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span class="s2" style="margin: 0px auto; padding: 0px; font-family: sans-serif;"><br/></span></p><p style="margin: 0px auto; padding: 0px; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; white-space: normal; background-color: rgb(250, 250, 250);"><span class="s2" style="margin: 0px auto; padding: 0px; font-family: sans-serif;">&nbsp;&nbsp;<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">2018</span>年<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">5</span>月<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">22</span>日（<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周二</span>）为<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">中国香港佛诞节</span>，根据交易所规定，〖<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">恒指、小恒指</span>〗<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">全天休市</span>，其它品种正常交易。<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">2018</span>年<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">5</span>月<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">23</span>日（<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">周三</span>）<span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">正常开市</span>，请各位投资者悉知交易时间。<span style="margin: 0px auto; padding: 0px; color: rgb(250, 192, 143);">如有任何疑问，请您咨询我司</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">7*24</span><span style="margin: 0px auto; padding: 0px; color: rgb(250, 192, 143);">小时在线客服 。&nbsp;在线客服QQ：</span><span style="margin: 0px auto; padding: 0px; color: rgb(255, 0, 0);">99608111</span><span style="margin: 0px auto; padding: 0px; color: rgb(250, 192, 143);">、我们将竭诚为您服务。</span></span></p><p><br/></p>', '2018-05-15 00:00:00', 1, 1, '2018-05-20 17:11:12', 2, '2018-05-20 17:11:12', 2);

-- --------------------------------------------------------

--
-- 表的结构 `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('代理商管理', '10', 1483582960),
('代理商管理', '11', 1481091160),
('代理商管理', '12', 1481265661),
('代理商管理', '13', 1481267408),
('代理商管理', '14', 1482229438),
('代理商管理', '15', 1482233632),
('代理商管理', '16', 1482328808),
('代理商管理', '17', 1482888890),
('代理商管理', '18', 1483335121),
('代理商管理', '19', 1483457466),
('代理商管理', '2', 1551327171),
('代理商管理', '20', 1530599957),
('代理商管理', '21', 1531680163),
('代理商管理', '22', 1547251470),
('代理商管理', '23', 1547251606),
('代理商管理', '24', 1547251783),
('代理商管理', '25', 1547253360),
('代理商管理', '26', 1547253703),
('代理商管理', '27', 1547253849),
('代理商管理', '28', 1547364636),
('代理商管理', '29', 1547283734),
('代理商管理', '30', 1547283920),
('代理商管理', '31', 1547383985),
('代理商管理', '32', 1547384071),
('代理商管理', '33', 1547440096),
('代理商管理', '34', 1547467504),
('代理商管理', '35', 1547631636),
('代理商管理', '36', 1547689836),
('代理商管理', '37', 1547690037),
('代理商管理', '38', 1547720420),
('代理商管理', '39', 1547720594),
('代理商管理', '40', 1547721354),
('代理商管理', '41', 1554036965),
('代理商管理', '42', 1554037075),
('代理商管理', '9', 1480751857),
('系统管理员', '2', 1479906453),
('系统管理员', '4', 1477708559),
('超管', '2', 1480050534),
('超管', '5', 1480038214),
('超管', '6', 1480040569),
('超管', '7', 1480044478),
('超管1', '2', 1479906453),
('超级管理员', '2', 1472551696),
('运营管理', '2', 1479906453);

-- --------------------------------------------------------

--
-- 表的结构 `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('frontendAdminAddPermission', 2, '添加权限', NULL, NULL, 1472525853, 1472525853),
('frontendAdminAjaxDeleteAdmin', 2, '删除管理员', NULL, NULL, 1477473346, 1477473346),
('frontendAdminAjaxDeleteRole', 2, '删除角色', NULL, NULL, 1472525853, 1472525853),
('frontendAdminAjaxRoleInfo', 2, '查看角色权限', NULL, NULL, 1472543566, 1472543566),
('frontendAdminAjaxUpdatePermission', 2, '修改权限', NULL, NULL, 1472525853, 1472525853),
('frontendAdminCreateRole', 2, '创建角色', NULL, NULL, 1472525853, 1472525853),
('frontendAdminEditRole', 2, '编辑角色', NULL, NULL, 1472525853, 1472525853),
('frontendAdminList', 2, '管理员列表', NULL, NULL, 1472525853, 1472525853),
('frontendAdminPermissionList', 2, '权限列表', NULL, NULL, 1472525853, 1472525853),
('frontendAdminRoleList', 2, '角色列表', NULL, NULL, 1472525853, 1472525853),
('frontendAdminSaveAdmin', 2, '创建/修改管理员', NULL, NULL, 1477473346, 1477473346),
('frontendArticleDeleteArticle', 2, '删除资讯', NULL, NULL, 1477969402, 1477969402),
('frontendArticleList', 2, '资讯列表', NULL, NULL, 1472720497, 1472723714),
('frontendArticleSaveArticle', 2, '添加/编辑资讯', NULL, NULL, 1477969402, 1477969402),
('frontendCouponCreateCoupon', 2, '添加体验券', NULL, NULL, 1477969402, 1477969402),
('frontendCouponList', 2, '体验券列表', NULL, NULL, 1477969402, 1477969402),
('frontendCouponOwnerList', 2, '会员的体验券列表', NULL, NULL, 1477969402, 1547484006),
('frontendOrderList', 2, '订单列表', NULL, NULL, 1477969402, 1477969402),
('frontendOrderList_', 2, '模拟订单', NULL, NULL, 1527352381, 1527352422),
('frontendOrderListm', 2, 'listm', NULL, NULL, 1547648322, 1547648322),
('frontendProductAjaxAllDown', 2, '一键下架产品', NULL, NULL, 1477969402, 1477969402),
('frontendProductAjaxAllUp', 2, '一键上架产品', NULL, NULL, 1477969402, 1477969402),
('frontendProductDeletePrice', 2, '删除交易设置', NULL, NULL, 1477969402, 1478419805),
('frontendProductList', 2, '产品列表', NULL, NULL, 1477969402, 1477969402),
('frontendProductSetTradePrice', 2, '设置交易价格', NULL, NULL, 1477969402, 1477969402),
('frontendProductSetTradeTime', 2, '设置交易时间', NULL, NULL, 1477969402, 1477969402),
('frontendRetailList', 2, '代理商列表', NULL, NULL, 1479985779, 1479985779),
('frontendRetailSaveRetail', 2, '添加/编辑会员单位', NULL, NULL, 1479985779, 1479985779),
('frontendRetailSaveWithdraw', 2, '添加/编辑代理商出金', NULL, NULL, 1547648322, 1547648322),
('frontendRetailVerifyWithdraw', 2, '代理商出金操作', NULL, NULL, 1547648322, 1547648322),
('frontendRetailWithdrawList', 2, '代理商出金列表', NULL, NULL, 1547648322, 1547648322),
('frontendRiskCenter', 2, '风险控制', NULL, NULL, 1477969402, 1477969402),
('frontendSaleEditPoint', 2, '修改经纪人返点%', NULL, NULL, 1480751158, 1480751158),
('frontendSaleManagerList', 2, '经纪人列表', NULL, NULL, 1477969402, 1477969402),
('frontendSaleManagerRebateList', 2, '代理商返点报表', NULL, NULL, 1480917876, 1480917876),
('frontendSystemAddSetting', 2, '添加系统设置', NULL, NULL, 1472720497, 1472720497),
('frontendSystemDeleteSetting', 2, '删除系统设置', NULL, NULL, 1472720497, 1472720497),
('frontendSystemLogDetail', 2, '查看日志详情', NULL, NULL, 1472794349, 1472794349),
('frontendSystemLogList', 2, '系统日志', NULL, NULL, 1472794349, 1472794349),
('frontendSystemMenu', 2, '系统菜单', NULL, NULL, 1472525853, 1472525853),
('frontendSystemSaveSetting', 2, '修改系统设置', NULL, NULL, 1472720497, 1472720497),
('frontendSystemSetting', 2, '系统设置', NULL, NULL, 1472525853, 1472525853),
('frontendUserAddnotice', 2, '添加/编辑资讯', NULL, NULL, 1526796895, 1526796895),
('frontendUserChargeRecordList', 2, '会员充值记录', NULL, NULL, 1477969402, 1477969402),
('frontendUserDeleteUser', 2, '冻结/恢复用户', NULL, NULL, 1477969402, 1477969402),
('frontendUserEditUserNotice', 2, '发信', NULL, NULL, 1526796895, 1526796895),
('frontendUserEditUserPass', 2, '修改会员密码', NULL, NULL, 1477969402, 1477969402),
('frontendUserFeedback', 2, 'feedback', NULL, NULL, 1526906481, 1526906481),
('frontendUserGiveList', 2, '会员赠金', NULL, NULL, 1477969402, 1477969402),
('frontendUserList', 2, '会员列表', NULL, NULL, 1477969402, 1477969402),
('frontendUserPositionList', 2, '会员持仓列表', NULL, NULL, 1477969402, 1477969402),
('frontendUserReadWithdraw', 2, '查看会员出金详细', NULL, NULL, 1479972780, 1479972780),
('frontendUserRebateList', 2, '返点记录列表', NULL, NULL, 1479972780, 1479972780),
('frontendUserSendCoupon', 2, '赠送优惠券', NULL, NULL, 1477969402, 1477969402),
('frontendUserTransfer', 2, '转账列表', NULL, NULL, 1526829672, 1526953888),
('frontendUserVerifyManager', 2, '审核经纪人', NULL, NULL, 1477969402, 1477969402),
('frontendUserVerifyPay', 2, '转账审核', NULL, NULL, 1526953731, 1526953878),
('frontendUserVerifyWithdraw', 2, '会员出金操作', NULL, NULL, 1477969402, 1477969402),
('frontendUserWithdrawList', 2, '会员出金管理', NULL, NULL, 1477969402, 1477969402),
('homeAdminAddPermission', 2, '添加权限', NULL, NULL, 1527351253, 1527351253),
('homeAdminAjaxDeleteAdmin', 2, '删除管理员', NULL, NULL, 1527351253, 1527351253),
('homeAdminAjaxDeleteRole', 2, '删除角色', NULL, NULL, 1527351253, 1527351253),
('homeAdminAjaxRoleInfo', 2, '查看角色权限', NULL, NULL, 1527351253, 1527351253),
('homeAdminAjaxUpdatePermission', 2, '修改权限', NULL, NULL, 1527351253, 1527351253),
('homeAdminCreateRole', 2, '创建角色', NULL, NULL, 1527351253, 1527351253),
('homeAdminEditRole', 2, '编辑角色', NULL, NULL, 1527351253, 1527351253),
('homeAdminList', 2, '管理员列表', NULL, NULL, 1527351253, 1527351253),
('homeAdminPermissionList', 2, '权限列表', NULL, NULL, 1527351253, 1527351253),
('homeAdminRoleList', 2, '角色列表', NULL, NULL, 1527351253, 1527351253),
('homeAdminSaveAdmin', 2, '创建/修改管理员', NULL, NULL, 1527351253, 1527351253),
('homeArticleDeleteArticle', 2, '删除资讯', NULL, NULL, 1527351253, 1527351253),
('homeArticleList', 2, '资讯列表', NULL, NULL, 1527351253, 1527351253),
('homeArticleSaveArticle', 2, '添加/编辑资讯', NULL, NULL, 1527351253, 1527351253),
('homeCouponCreateCoupon', 2, '添加体验券', NULL, NULL, 1527351253, 1527351253),
('homeCouponList', 2, '体验券列表', NULL, NULL, 1527351253, 1527351253),
('homeCouponOwnerList', 2, '会员持有的体验券列表', NULL, NULL, 1527351253, 1527351253),
('homeOrderList', 2, '订单列表', NULL, NULL, 1527351253, 1527351253),
('homeProductAjaxAllDown', 2, '一键下架产品', NULL, NULL, 1527351253, 1527351253),
('homeProductAjaxAllUp', 2, '一键上架产品', NULL, NULL, 1527351253, 1527351253),
('homeProductDeletePrice', 2, 'deletePrice', NULL, NULL, 1527351253, 1527351253),
('homeProductList', 2, '产品列表', NULL, NULL, 1527351253, 1527351253),
('homeProductSetTradePrice', 2, '设置交易价格', NULL, NULL, 1527351253, 1527351253),
('homeProductSetTradeTime', 2, '设置交易时间', NULL, NULL, 1527351253, 1527351253),
('homeRetailList', 2, '代理商列表', NULL, NULL, 1527351253, 1527351253),
('homeRetailSaveRetail', 2, '添加/编辑会员单位', NULL, NULL, 1527351253, 1527351253),
('homeRiskCenter', 2, '风险控制', NULL, NULL, 1527351253, 1527351253),
('homeSaleEditPoint', 2, '修改经纪人返点%', NULL, NULL, 1527351253, 1527351253),
('homeSaleManagerList', 2, '经纪人列表', NULL, NULL, 1527351253, 1527351253),
('homeSaleManagerRebateList', 2, '代理商返点报表', NULL, NULL, 1527351253, 1527351253),
('homeSystemAddSetting', 2, '添加系统设置', NULL, NULL, 1527351253, 1527351253),
('homeSystemDeleteSetting', 2, '删除系统设置', NULL, NULL, 1527351253, 1527351253),
('homeSystemLogDetail', 2, '查看日志详情', NULL, NULL, 1527351253, 1527351253),
('homeSystemLogList', 2, '系统日志', NULL, NULL, 1527351253, 1527351253),
('homeSystemMenu', 2, '系统菜单', NULL, NULL, 1527351253, 1527351253),
('homeSystemSaveSetting', 2, '修改系统设置', NULL, NULL, 1527351253, 1527351253),
('homeSystemSetting', 2, '查看系统设置', NULL, NULL, 1527351253, 1527351253),
('homeUserChargeRecordList', 2, '会员充值记录', NULL, NULL, 1527351253, 1527351253),
('homeUserDeleteUser', 2, '冻结/恢复用户', NULL, NULL, 1527351253, 1527351253),
('homeUserEditUserPass', 2, '修改会员密码', NULL, NULL, 1527351253, 1527351253),
('homeUserGiveList', 2, '会员赠金', NULL, NULL, 1527351253, 1527351253),
('homeUserList', 2, '会员列表', NULL, NULL, 1527351253, 1527351253),
('homeUserPositionList', 2, '会员持仓列表', NULL, NULL, 1527351253, 1527351253),
('homeUserReadWithdraw', 2, '查看会员出金详细', NULL, NULL, 1527351253, 1527351253),
('homeUserRebateList', 2, '返点记录列表', NULL, NULL, 1527351253, 1527351253),
('homeUserSendCoupon', 2, '赠送优惠券', NULL, NULL, 1527351253, 1527351253),
('homeUserVerifyManager', 2, '审核经纪人', NULL, NULL, 1527351253, 1527351253),
('homeUserVerifyWithdraw', 2, '会员出金操作', NULL, NULL, 1527351253, 1527351253),
('homeUserWithdrawList', 2, '会员出金管理', NULL, NULL, 1527351253, 1527351253),
('代理商管理', 1, 'frontend', NULL, NULL, 1480751149, 1547710781),
('系统管理员', 1, 'frontend', NULL, NULL, 1472433243, 1531813336),
('超管', 1, 'frontend', NULL, NULL, 1479985909, 1528471968),
('超管1', 1, 'frontend', NULL, NULL, 1472527767, 1480905590),
('超级管理员', 1, 'frontend', NULL, NULL, 1472448576, 1547710052),
('运营管理', 1, 'frontend', NULL, NULL, 1478419785, 1547710119);

-- --------------------------------------------------------

--
-- 表的结构 `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('系统管理员', 'frontendAdminAjaxRoleInfo'),
('系统管理员', 'frontendAdminCreateRole'),
('系统管理员', 'frontendAdminEditRole'),
('系统管理员', 'frontendAdminList'),
('超管1', 'frontendAdminList'),
('系统管理员', 'frontendAdminRoleList'),
('超管1', 'frontendAdminRoleList'),
('系统管理员', 'frontendAdminSaveAdmin'),
('超管1', 'frontendAdminSaveAdmin'),
('系统管理员', 'frontendArticleDeleteArticle'),
('运营管理', 'frontendArticleDeleteArticle'),
('系统管理员', 'frontendArticleList'),
('运营管理', 'frontendArticleList'),
('系统管理员', 'frontendArticleSaveArticle'),
('运营管理', 'frontendArticleSaveArticle'),
('运营管理', 'frontendCouponCreateCoupon'),
('运营管理', 'frontendCouponList'),
('运营管理', 'frontendCouponOwnerList'),
('代理商管理', 'frontendOrderList'),
('系统管理员', 'frontendOrderList'),
('超管', 'frontendOrderList'),
('运营管理', 'frontendOrderList'),
('系统管理员', 'frontendOrderList_'),
('超管', 'frontendOrderList_'),
('超级管理员', 'frontendOrderList_'),
('系统管理员', 'frontendProductAjaxAllDown'),
('运营管理', 'frontendProductAjaxAllDown'),
('系统管理员', 'frontendProductAjaxAllUp'),
('运营管理', 'frontendProductAjaxAllUp'),
('系统管理员', 'frontendProductDeletePrice'),
('运营管理', 'frontendProductDeletePrice'),
('系统管理员', 'frontendProductList'),
('运营管理', 'frontendProductList'),
('系统管理员', 'frontendProductSetTradePrice'),
('运营管理', 'frontendProductSetTradePrice'),
('系统管理员', 'frontendProductSetTradeTime'),
('运营管理', 'frontendProductSetTradeTime'),
('系统管理员', 'frontendRetailList'),
('运营管理', 'frontendRetailList'),
('系统管理员', 'frontendRetailSaveRetail'),
('运营管理', 'frontendRetailSaveRetail'),
('代理商管理', 'frontendRetailSaveWithdraw'),
('超级管理员', 'frontendRetailSaveWithdraw'),
('运营管理', 'frontendRetailSaveWithdraw'),
('代理商管理', 'frontendRetailVerifyWithdraw'),
('超级管理员', 'frontendRetailVerifyWithdraw'),
('运营管理', 'frontendRetailVerifyWithdraw'),
('超级管理员', 'frontendRetailWithdrawList'),
('运营管理', 'frontendRetailWithdrawList'),
('系统管理员', 'frontendRiskCenter'),
('运营管理', 'frontendRiskCenter'),
('系统管理员', 'frontendSaleEditPoint'),
('运营管理', 'frontendSaleEditPoint'),
('代理商管理', 'frontendSaleManagerList'),
('系统管理员', 'frontendSaleManagerList'),
('超管', 'frontendSaleManagerList'),
('运营管理', 'frontendSaleManagerList'),
('系统管理员', 'frontendSaleManagerRebateList'),
('运营管理', 'frontendSaleManagerRebateList'),
('系统管理员', 'frontendSystemSaveSetting'),
('系统管理员', 'frontendSystemSetting'),
('系统管理员', 'frontendUserAddnotice'),
('超管', 'frontendUserAddnotice'),
('代理商管理', 'frontendUserChargeRecordList'),
('系统管理员', 'frontendUserChargeRecordList'),
('超管', 'frontendUserChargeRecordList'),
('运营管理', 'frontendUserChargeRecordList'),
('系统管理员', 'frontendUserDeleteUser'),
('超管', 'frontendUserDeleteUser'),
('运营管理', 'frontendUserDeleteUser'),
('系统管理员', 'frontendUserEditUserNotice'),
('超管', 'frontendUserEditUserNotice'),
('系统管理员', 'frontendUserEditUserPass'),
('运营管理', 'frontendUserEditUserPass'),
('系统管理员', 'frontendUserFeedback'),
('运营管理', 'frontendUserFeedback'),
('系统管理员', 'frontendUserGiveList'),
('运营管理', 'frontendUserGiveList'),
('代理商管理', 'frontendUserList'),
('系统管理员', 'frontendUserList'),
('超管', 'frontendUserList'),
('运营管理', 'frontendUserList'),
('代理商管理', 'frontendUserPositionList'),
('系统管理员', 'frontendUserPositionList'),
('超管', 'frontendUserPositionList'),
('运营管理', 'frontendUserPositionList'),
('代理商管理', 'frontendUserReadWithdraw'),
('系统管理员', 'frontendUserReadWithdraw'),
('超管', 'frontendUserReadWithdraw'),
('运营管理', 'frontendUserReadWithdraw'),
('系统管理员', 'frontendUserRebateList'),
('超管', 'frontendUserRebateList'),
('运营管理', 'frontendUserRebateList'),
('系统管理员', 'frontendUserSendCoupon'),
('运营管理', 'frontendUserSendCoupon'),
('系统管理员', 'frontendUserTransfer'),
('超管', 'frontendUserTransfer'),
('代理商管理', 'frontendUserVerifyManager'),
('系统管理员', 'frontendUserVerifyManager'),
('超管', 'frontendUserVerifyManager'),
('运营管理', 'frontendUserVerifyManager'),
('系统管理员', 'frontendUserVerifyPay'),
('超管', 'frontendUserVerifyPay'),
('系统管理员', 'frontendUserVerifyWithdraw'),
('超管', 'frontendUserVerifyWithdraw'),
('运营管理', 'frontendUserVerifyWithdraw'),
('系统管理员', 'frontendUserWithdrawList'),
('超管', 'frontendUserWithdrawList'),
('运营管理', 'frontendUserWithdrawList'),
('超级管理员', '系统管理员'),
('超级管理员', '超管1'),
('超级管理员', '运营管理');

-- --------------------------------------------------------

--
-- 表的结构 `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `coupon`
--

CREATE TABLE IF NOT EXISTS `coupon` (
  `id` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL COMMENT '描述',
  `remark` text COMMENT '备注信息',
  `amount` decimal(11,2) NOT NULL COMMENT '额度',
  `coupon_type` int(11) DEFAULT '0' COMMENT '优惠劵类型',
  `valid_day` int(11) NOT NULL COMMENT '有效时间（天）'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='优惠券表';

--
-- 转存表中的数据 `coupon`
--

INSERT INTO `coupon` (`id`, `desc`, `remark`, `amount`, `coupon_type`, `valid_day`) VALUES
(2, '系统赠送的30元优惠券', '系统赠送的优惠券(30元)', '30.00', 0, 3),
(6, '系统赠送的300元体验券', '系统赠送的300元体验券', '300.00', 0, 5),
(7, '系统赠送的10元体验券', '系统赠送的10元体验券', '10.00', 0, 30);

-- --------------------------------------------------------

--
-- 表的结构 `data_all`
--

CREATE TABLE IF NOT EXISTS `data_all` (
  `symbol` varchar(64) NOT NULL COMMENT '产品代码',
  `name` varchar(20) NOT NULL COMMENT '产品名称',
  `product_name` varchar(32) NOT NULL COMMENT '产品名称',
  `price` varchar(20) DEFAULT '' COMMENT '当前价格',
  `time` datetime DEFAULT NULL COMMENT '当前时间',
  `diff` varchar(32) DEFAULT '0.00' COMMENT '涨跌值',
  `diff_rate` varchar(20) DEFAULT '0.00' COMMENT '涨跌%',
  `open` varchar(20) DEFAULT NULL COMMENT '开盘价',
  `high` varchar(20) DEFAULT NULL COMMENT '最高价',
  `low` varchar(20) DEFAULT NULL COMMENT '最低价',
  `close` varchar(20) DEFAULT NULL COMMENT '昨收价',
  `bp` varchar(32) DEFAULT NULL COMMENT '申买价',
  `sp` varchar(32) DEFAULT NULL COMMENT '申卖价',
  `bv` varchar(32) DEFAULT NULL COMMENT '申买量',
  `sv` varchar(32) DEFAULT NULL COMMENT '申卖量',
  `date` int(10) unsigned NOT NULL COMMENT '时间戳'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='所有产品数据汇总表';

--
-- 转存表中的数据 `data_all`
--

INSERT INTO `data_all` (`symbol`, `name`, `product_name`, `price`, `time`, `diff`, `diff_rate`, `open`, `high`, `low`, `close`, `bp`, `sp`, `bv`, `sv`, `date`) VALUES
('WGCNA0', 'a50', 'A50指数连续', '11240', '2018-07-18 23:27:08', '', '0.222916', '11220', '11245', '11155', '11215', '11240', '11242.5', '41', '10', 1531927737),
('WICMADA0', 'ad', '澳元连续', '0.7385', '2018-07-18 23:27:08', '', '-0.040605', '0.7386', '0.7395', '0.7343', '0.7388', '0.7385', '0.7386', '71', '54', 1531927742),
('SCag0001', 'ag0', '沪银连续', '3673', '2018-07-18 23:27:08', '', '0.218281', '3664', '3677', '3659', '3665', '3672', '3673', '199', '194', 1531927742),
('SCau0001', 'au0', '沪金连续', '269.6', '2018-07-18 23:27:08', '', '0.20443', '269.5', '269.9', '269.2', '269.05', '269.6', '269.65', '103', '108', 1531927742),
('WICMBPA0', 'bp', '英镑连续', '1.3088', '2018-07-18 23:27:08', '', '-0.471489', '1.3147', '1.315', '1.3043', '1.315', '1.3087', '1.3088', '54', '6', 1531927741),
('SCbu0001', 'bu0', '沥青连续', '3220', '2018-07-18 23:27:08', '', '0', '3218', '3224', '3190', '3220', '3220', '3222', '54', '52', 1531926000),
('WICMCDA0', 'cd', '加元连续', '0.75755', '2018-07-18 23:27:08', '', '-0.171309', '0.75865', '0.75875', '0.75495', '0.75885', '0.75755', '0.7576', '11', '7', 1531927737),
('NECLA0', 'cl', '美原油连续', '60.18', '2019-03-31 21:28:47', '', '1.125865', '59.53', '60.73', '59.41', '59.51', '60.13', '60.25', '1', '80', 1553895034),
('SCcu0001', 'cu0', '沪铜连续', '48580', '2018-07-18 23:27:08', '', '0.663075', '48180', '48750', '48170', '48260', '48570', '48580', '30', '17', 1531927742),
('CEDAXA0', 'dax', 'DAX主连', '11564.5', '2019-03-31 21:28:47', '', '0.71413', '11497', '11570', '11456.5', '11482.5', '11562', '11567.5', '0', '0', 1553895335),
('WICMECA0', 'ec', '欧元连续', '1.1696', '2018-07-18 23:27:08', '', '-0.162182', '1.17125', '1.1717', '1.1653', '1.1715', '1.1696', '1.16965', '3', '30', 1531927742),
('CMGCA0', 'gc', '美黄金主力', '1297', '2019-03-31 21:28:47', '', '0.15444', '1295', '1304.6', '1291.3', '1295', '1296.8', '1297.1', '2', '2', 1553895153),
('NENGA0', 'hg', '美天然气连续', '2.673', '2019-03-31 21:28:47', '', '-1.546955', '2.72', '2.728', '2.656', '2.715', '2.665', '2.678', '1', '1', 1553895034),
('HIHSIF', 'hkhsi', '恒指连续', '29196', '2019-03-31 21:28:45', '', '0.409258', '29072', '29196', '29034', '29077', '29190', '29198', '6', '5', 1553878799),
('CENQA0', 'ixic', '小纳指连续', '7404.5', '2018-07-18 23:27:08', '', '-0.276094', '7424.25', '7437.75', '7381.5', '7425', '7404.25', '7404.5', '5', '7', 1531927742),
('DCm0001', 'm0', '豆粕连续', '3097', '2018-07-18 23:27:08', '', '0.323939', '3087', '3099', '3077', '3087', '3096', '3097', '1039', '379', 1531927742),
('HIMHIF', 'mhi', '小恒连续', '29190', '2019-03-31 21:28:45', '', '0.395529', '29073', '29196', '29035', '29075', '29189', '29191', '6', '1', 1553878799),
('DCp0001', 'p0', '棕榈连续', '4678', '2018-07-18 23:27:08', '', '0.515685', '4674', '4688', '4668', '4654', '4676', '4678', '387', '78', 1531927742),
('DCpp0001', 'pp0', '聚丙烯连续', '9333', '2018-07-18 23:27:08', '', '-0.128411', '9345', '9368', '9301', '9345', '9332', '9334', '3', '57', 1531897199),
('SCrb0001', 'rb0', '螺纹连续', '3988', '2018-07-18 23:27:08', '', '1.218274', '3949', '4004', '3944', '3940', '3986', '3988', '26', '289', 1531926000),
('SCru0001', 'ru0', '橡胶连续', '10410', '2018-07-18 23:27:08', '', '0.048054', '10430', '10445', '10395', '10405', '10405', '10410', '21', '28', 1531926000),
('CMSIA0', 'si', '美白银主力', '15.1', '2019-03-31 21:28:47', '', '0.733827', '14.99', '15.18', '14.95', '14.99', '15.095', '15.105', '7', '3', 1553895153),
('ZCSR0001', 'sr0', '白糖连续', '4936', '2018-07-18 23:27:08', '', '-0.161812', '4949', '4949', '4910', '4944', '4935', '4936', '110', '57', 1531927742),
('DCy0001', 'y0', '豆油连续', '5506', '2018-07-18 23:27:08', '', '0.291439', '5504', '5516', '5496', '5490', '5506', '5508', '79', '128', 1531927742);

-- --------------------------------------------------------

--
-- 表的结构 `exuser_withdraw`
--

CREATE TABLE IF NOT EXISTS `exuser_withdraw` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `amount` decimal(11,2) NOT NULL COMMENT '出金金额',
  `op_state` tinyint(4) DEFAULT '1' COMMENT '操作状态：1待审核，2已操作，-1不通过',
  `created_at` datetime DEFAULT NULL COMMENT '申请时间',
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '审核时间',
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员提款表';

-- --------------------------------------------------------

--
-- 表的结构 `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` bigint(20) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_time` double DEFAULT NULL,
  `prefix` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `manual_article`
--

CREATE TABLE IF NOT EXISTS `manual_article` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL COMMENT '菜单ID',
  `content` mediumtext COMMENT '文章内容',
  `state` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COMMENT='手册文章表';

--
-- 转存表中的数据 `manual_article`
--

INSERT INTO `manual_article` (`id`, `menu_id`, `content`, `state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 4, '## PHP 代码规范\n\n> 目标：\n1. 建立节操感、责任感\n2. 减少阅读障碍，降低维护成本\n3. 遵循统一模式的代码更易于扩展\n', 1, '2015-12-09 16:48:18', 1, '2016-09-04 19:37:53', 1),
(24, 26, '>代码格式采用PSR规范，以下是该规范的简练要点\n\n1. 所有变量名尽量控制不出现拼音类型，使用尽量语义化、简单易懂的英文命名\n2. 所有变量都用驼峰法明明，私有方法、私有变量都采用下划线开头，如：`private function _getName()`\n3. `,`号和`;`号后要加空格，其他操作符、关键字前后都要加空格\n4. 双引号中的变量必须使用{}包起来；如果大段文本中包含变量，则采用分界符`<<<EOT`\n5. 所有SQL语句的关键字全部大写，并且必须美化SQL语句格式\n6. if 下即使只有一条语句，也必须用花括号包起来\n7. PHP文件禁止使用`?>`结束标签，每个php文件最后必须是空行\n8. 常量名必须全大写，用下划线分割单词', 1, '2016-01-07 18:08:53', 1, '2016-09-04 19:45:42', 1),
(25, 27, '1. action名和视图名保持一致，如 `function actionViewArticle()` 对应渲染的视图为 `$this->render(''viewArticle'')`\n2. 所有纯ajax请求处理的方法全部以ajax为前缀命名，如 `actionAjaxCreate()`，form表单提交除外\n3. Ajax返回使用`return self::success()`和`return self::error()`，如果是输出模型错误，则`return self::error($model)`即可\n4. 表单的创建与修改，参考以下代码：\n\n\n    public function actionUser($id = null)\n    {\n        $user = User::findModel($id);\n        if ($user->load($_POST)) {\n            if ($user->save()) {\n                return self::success();\n            } else {\n                return self::error($user);\n            }\n        }\n        return $this->render(''user'', compact(''user''));\n    }\n5.列表的创建，参考以下代码：\n\n    public function actionList()\n    {\n        $query = (new User)->search();\n        $html = $query->getTable([\n            ''id'',\n            ''name'' => ''姓名'',\n            ''age'' => function ($row) {\n                return $row[''age''] . ''岁'';\n            },\n            ''reg_time'' => [''header'' => ''注册日期'', ''value'' => function ($row) {\n                return date(''Y-m-d H:i:s'', $row[''reg_time'']);\n            }],\n            [''type'' => [''edit'', ''delete'' => ''deleteUser'']]\n        ]);\n        return $this->render(''list'', compact(''html''));\n    }', 1, '2016-01-08 15:45:30', 1, '2016-09-06 11:13:20', 2),
(26, 28, '1. 模型必须使用生成工具生成！\n2. 表示状态的字段必须使用生成工具生成对应的map方法和value方法，并为该状态字段设置类常量\n3. 每个列表条件都采用一个模型方法进行封装，以便控制器调用，如下所示：\n\n\n    public function listQuery()\n    {\n        return $this->search()\n                    ->with([''user'', ''post'']\n                    ->andWhere([''user.state'' => User::STATE_VALID])\n                    ->orderBy(''post.id DESC'');\n    }\n4.当有字段变动时，同一个模型可反复生成，但必须确保公共父类模型中的`rules()`、`attributeLabels()`、`search()`方法没被修改过，否则所做的修改会被覆盖！\n5.为每一个表单设置一个场景名，并在`scenario()`方法中设定该场景中验证哪些字段。', 1, '2016-01-08 15:47:19', 1, '2016-09-04 20:08:41', 1),
(27, 29, '1. 无特殊情况，不允许直接加载js和css文件，而应使用Yii2的`AssetBundle`对象进行静态资源管理\n2. 使用`if/endif` 语法代替花括号语法\n3. 使用`<?= $name ?>` 代替 `<?php echo $name; ?>`\n4. 无特殊情况，禁止使用`style`属性和`on`系列事件属性\n5. a标签空链接使用href="javascript:;"，禁止使用href="#"\n6. 表单代码按照以下代码所示：\n\n\n    <?php $form = self::beginForm() ?>\n    <?= $model->title(''表单标题'') ?>\n    <?= $form->field($model, ''name'') ?>\n    <?= $form->field($model, ''state'')->radioList() ?>\n    <?= $form->field($model, ''password'')->passwordInput() ?>    \n    <?= $form->submit(''提交按钮名称'') ?>\n    <?php self::endForm() ?>\n', 1, '2016-01-08 15:58:28', 1, '2016-09-04 20:12:06', 1),
(28, 30, '1. 主键必须是id\n2. 字段名和表名用下划线分割\n3. 每个表的 `created_at、created_by、updated_at、updated_by`等字段，分别表示创建时间、创建人id、修改时间、修改人；如无必要，不要主动修改这些字段的值，他们会被框架自动处理\n4. 如果表中含有`state`字段，表示该表采用逻辑删除规则，则查询时必须加上诸如`state=User::STATE_VALID`的条件，来确保逻辑的一致性', 1, '2016-01-08 16:00:31', 1, '2016-09-04 20:18:07', 1),
(29, 31, '>采用PHPDoc文档注释标准\n\n1. 所填写的每个注释标记，必须表达清楚，不然不如不写\n2. 每个公共方法至少要有最基础的汉字说明\n3. 后台的公共action方法，使用自定义的标记 `@authname`来注明权限名称', 1, '2016-01-08 16:04:38', 1, '2016-09-04 20:23:23', 1),
(55, 67, '**一、	业务员**\n**1.	扫描微信（绑定）**\n登录系统，未进行绑定微信的账号会被弹屏要求扫码绑定微信，使用微信的扫一扫功能绑定即可，收到（恭喜您已经成功绑定微信号）这个提示完成绑定。（绑定过的不会再提醒）\n**2.	发起申请**\na)	销售申请：销售已经有库存的产品时，选择此申请；\nb)	采购申请：准备先采购回来，然后再分销的采购，可以选此申请；\nc)	销售申请（以销定采）：一销一采锁定的选择此申请，一销多采先通过销售与采购申请分别进行（后期会增加）。\n**3.	申请进度查看（历史发起）**\n发起申请之后，想了解审批已经进行到哪里了，可以点击“历史发起“菜单，即可查看申请的右边审批人是谁，只需要按提示去催对应人员即可。\na)	如果想查看所有的审批意见，点击该条记录即可；\nb)	如果想查看申请的具体内容，请点击该条记录中的“查看详情”即可。\n历史发起还分“未完结”与“已完结”两种类别：\na)	未完结：该审批还在进行或者有问题不能完结。\n已完结：该审批已经完成了。\n**4.	驳回重新提交**\n如果申请被驳回，会出现在待办任务中，点击处理即可！\n**5.	撤销重新提交**\n提交申请之后，发现自己填写的申请单有错误，可点击“历史发起”中对应记录上的“撤回”（前提：该流程未完结），然后到“待办任务”中进行修改并提交。\n\n**二、	主管及产品经理（风控、财务、高管）**\n**1.	扫描微信（绑定）**\n登录系统，未绑定微信的账号会被弹屏要求扫码绑定微信，使用微信的扫一扫功能绑定即可，收到（恭喜您已经成功绑定微信号）这个提示完成绑定。\n**2.	处理待办任务**\n有业务员发起申请时，主管会收到“待办任务”，只需要点击该条记录，即可进入查看申请内容，填写审批意见，点击“通过”，或“不通过”即可完成本次审批！\n**3.	进度查看（历史处理）**\n如果主管或产品经理想了解某个自己处理过的审批的进度，只需要点击“历史处理”菜单，查看该条审批的右边即可知道当前审批人是哪位，可直接去催对应审批人处理。\n \n历史处理还分“未完结”与“已完结”两种类别：\nb)	未完结：该审批还在进行或者有问题不能完结。\nc)	已完结：该审批已经完成了。\n**4.	转签**\n进行审核时发现该申请需要其他领导进行授权才可以进行审核，所以可以将审批的权力转交给更上级的领导（主要应用于财务，风控无法做决定时，将审批权力转交给业务的高层领导）\n', 1, '2016-03-08 15:06:12', 1, '2016-03-08 15:06:19', 1),
(56, 69, '\n**1.命名规范****\n(1)库名、表名、字段名必须使用小写字母,并采用下划线分割。\n\n(2)库名、表名、字段名禁止超过32个字符。\n\n(3)库名、表名、字段名必须见名知意。命名与业务、产品线等相关联。\n\n(4)库名、表名、字段名禁止使用MySQL保留字。（保留字列表见官方网站）\n\n(5)临时库、表名必须以tmp为前缀,并以日期为后缀。例如 tmp_test01_20130704。\n\n(6)备份库、表必须以bak为前缀,并以日期为后缀。例如 bak_test01_20130704。\n\n**2.基础规范**\n(1)使用INNODB存储引擎。\n\n(2)表字符集使用使用UTF8字符集。\n\n(3)所有表都需要添加注释;除主键外的其他字段都需要增加注释。推荐采用英文标点,避免出现乱码。\n\n(4)禁止在数据库中存储图片、文件等大数据。\n\n(5)每张表数据量建议控制在5000W以内。\n\n(6)禁止在线上做数据库压力测试。\n\n(7)禁止从测试、开发环境直连数据库。\n\n**3.库表设计**\n(1)禁止使用分区表。\n\n(2)将大字段、访问频率低的字段拆分到单独的表中存储,分离冷热数据。\n\n(3)推荐使用HASH进行散表,表名后缀使用十进制数,数字必须从0开始。\n\n(4)按日期时间分表需符合YYYY[MM][DD][HH]格式,例如2013071601。年份必须用4位数字表示。例如按日散表user_20110209、 按月散表user_201102。\n\n(5)采用合适的分库分表策略。例如千库十表、十库百表等。\n\n**4.字段设计**\n(1)建议使用UNSIGNED存储非负数值。\n\n(2)建议使用INT UNSIGNED存储IPV4。\n\n(3)用DECIMAL代替FLOAT和DOUBLE存储精确浮点数。例如与货币、金融相关的数据。\n\n(4)INT类型固定占用4字节存储,例如INT(4)仅代表显示字符宽度为4位,不代表存储长度。\n\n(5)区分使用TINYINT、SMALLINT、MEDIUMINT、INT、BIGINT数据类型。例如取值范围为0-80时,使用TINYINT UNSIGNED。\n\n(6)强烈建议使用TINYINT来代替ENUM类型。\n\n(7)尽可能不使用TEXT、BLOB类型。\n\n(8)禁止在数据库中存储明文密码。\n\n(9)使用VARBINARY存储大小写敏感的变长字符串或二进制内容。\n\n(10)使用尽可能小的VARCHAR字段。VARCHAR(N)中的N表示字符数而非字节数。\n\n(11)区分使用DATETIME和TIMESTAMP。存储年使用YEAR类型。存储日期使用DATE类型。 存储时间(精确到秒)建议使用TIMESTAMP类型。\n\n(12)所有字段均定义为NOT NULL。\n\n** 5.索引规范**\n(1)单张表中索引数量不超过5个。\n\n(2)单个索引中的字段数不超过5个。\n\n(3)索引名必须全部使用小写。\n\n(4)非唯一索引按照“idx_字段名称[_字段名称]”进用行命名。例如idx_age_name。\n\n(5)唯一索引按照“uniq_字段名称[_字段名称]”进用行命名。例如uniq_age_name。\n\n(6)组合索引建议包含所有字段名,过长的字段名可以采用缩写形式。例如idx_age_name_add。\n\n(7)表必须有主键,推荐使用UNSIGNED自增列作为主键。\n\n(8)唯一键由3个以下字段组成,并且字段都是整形时,可使用唯一键作为主键。其他情况下,建议使用自增列作主键。\n\n(9)禁止冗余索引。\n\n(10)禁止重复索引。\n\n(11)禁止使用外键。\n\n(12)联表查询时,JOIN列的数据类型必须相同,并且要建立索引。\n\n(13)不在低基数列上建立索引,例如“性别”。\n\n(14)选择区分度大的列建立索引。组合索引中,区分度大的字段放在最前。\n\n(15)对字符串使用前缀索引,前缀索引长度不超过8个字符。\n\n(16)不对过长的VARCHAR字段建立索引。建议优先考虑前缀索引,或添加CRC32或MD5伪列并建立索引。\n\n(17)合理创建联合索引,(a,b,c) 相当于 (a) 、(a,b) 、(a,b,c)。\n\n(18)合理使用覆盖索引减少IO,避免排序。\n\n**6.SQL设计**\n(1)使用prepared statement,可以提升性能并避免SQL注入。\n\n(2)使用IN代替OR。SQL语句中IN包含的值不应过多,应少于1000个。\n\n(3)禁止隐式转换。数值类型禁止加引号;字符串类型必须加引号。\n\n(4)尽量避免使用JOIN和子查询。必要时推荐用JOIN代替子查询。\n\n(5)禁止在MySQL中进行数学运算和函数运算。\n\n(6)减少与数据库交互次数,尽量采用批量SQL语句。\n\n(7)拆分复杂SQL为多个小SQL,避免大事务。\n\n(8)获取大量数据时,建议分批次获取数据,每次获取数据少于2000条,结果集应小于1M。\n\n(9)使用UNION ALL代替UNION。\n\n(10)统计行数使用COUNT(*)。\n\n(11)SELECT只获取必要的字段,禁止使用SELECT *。\n\n(12)SQL中避免出现now()、rand()、sysdate()、current_user()等不确定结果的函数。\n\n(13)INSERT语句必须指定字段列表,禁止使用 INSERT INTO TABLE()。\n\n(14)禁止单条SQL语句同时更新多个表。\n\n(15)禁止使用存储过程、触发器、视图、自定义函数等。\n\n(16)建议使用合理的分页方式以提高分页效率。\n\n(17)禁止在从库上执行统计类功能的QUERY,必要时申请统计类从库。\n\n(18)程序应有捕获SQL异常的处理机制,必要时通过rollback显式回滚。\n\n(19)重要SQL必须被索引:update、delete的where条件列、order by、group by、distinct字段、多表join字段。\n\n(20)禁止使用%前导查询,例如:like “%abc”,无法利用到索引。\n\n(21)禁止使用负向查询,例如 not in、!=、not like。\n\n(22)使用EXPLAIN判断SQL语句是否合理使用索引,尽量避免extra列出现:Using File Sort、Using Temporary。\n\n(23)禁止使用order by rand()。\n\n**7.行为规范**\n(1)表结构变更必须通知DBA进行审核。\n\n(2)禁止有super权限的应用程序账号存在。\n\n(3)禁止有DDL、DCL权限的应用程序账号存在。\n\n(4)重要项目的数据库方案选型和设计必须提前通知DBA参与。\n\n(5)批量导入、导出数据必须通过DBA审核,并在执行过程中观察服务。\n\n(6)批量更新数据,如UPDATE、DELETE操作,必须DBA进行审核,并在执行过程中观察服务。\n\n(7)产品出现非数据库导致的故障时,如被攻击,必须及时通DBA,便于维护服务稳定。\n\n(8)业务部门程序出现BUG等影响数据库服务的问题,必须及时通知DBA,便于维护服务稳定。\n\n(9)业务部门推广活动或上线新功能,必须提前通知DBA进行服务和访问量评估,并留出必要时间以便DBA完成扩容。\n\n(10)出现业务部门人为误操作导致数据丢失,需要恢复数据的,必须第一时间通知DBA,并提供准确时间点、误操作语句等重要线索。\n\n(11)提交线上建表改表需求,必须详细注明涉及到的所有SQL语句(包括INSERT、DELETE、UPDATE),便于DBA进行审核和优化。\n\n(12)对同一个表的多次alter操作必须合并为一次操作。\n\n(13)不要在MySQL数据库中存放业务逻辑。\n\n注：在DBA未到职前，由系统运维工程师兼职。工程师上线时，涉及到数据结构的变更时，需要写邮件给运维工程师，并抄送上级主管。\n\n**8.FAQ**\n1.库名、表名、字段名必须使用小写字母,并采用下划线分割。\na)MySQL有配置参数lower_case_table_names,不可动态更改,linux系统默认为 0,即库表名以实际情况存储,大小写敏感。如果是1,以小写存储,大小写不敏感。如果是2,以实际情况存储,但以小写比较。\n\nb)如果大小写混合使用,可能存在abc,Abc,ABC等多个表共存,容易导致混乱。\n\nc)字段名显式区分大小写,但实际使用不区分,即不可以建立两个名字一样但大小写不一样的字段。\n\nd)为了统一规范, 库名、表名、字段名使用小写字母。\n\n2.库名、表名、字段名禁止超过32个字符。\n库名、表名、字段名支持最多64个字符,但为了统一规范、易于辨识以及减少传输量,禁止超过32个字符。 \n\n3.使用INNODB存储引擎。\nINNODB引擎是MySQL5.5版本以后的默认引擘,支持事务、行级锁,有更好的数据恢复能力、更好的并发性能,同时对多核、大内存、SSD等硬件支持更好,支持数据热备份等,因此INNODB相比MyISAM有明显优势。\n\n4.库名、表名、字段名禁止使用MySQL保留字。\n当库名、表名、字段名等属性含有保留字时,SQL语句必须用反引号引用属性名称,这将使得SQL语句书写、SHELL脚本中变量的转义等变得非常复杂。\n\n5.禁止使用分区表。\n分区表对分区键有严格要求;分区表在表变大后,执行DDL、SHARDING、单表恢复等都变得更加困难。因此禁止使用分区表,并建议业务端手动SHARDING。\n\n6.建议使用UNSIGNED存储非负数值。\n同样的字节数,非负存储的数值范围更大。如TINYINT有符号为 -128-127,无符号为0-255。\n\n7.建议使用INT UNSIGNED存储IPV4。\nUNSINGED INT存储IP地址占用4字节,CHAR(15)则占用15字节。另外,计算机处理整数类型比字符串类型快。使用INT UNSIGNED而不是CHAR(15)来存储IPV4地址,通过MySQL函数inet_ntoa和inet_aton来进行转化。IPv6地址目前没有转化函数,需要使用DECIMAL或两个BIGINT来存储。\n\n例如:\n\nSELECT INET_ATON(''209.207.224.40''); 3520061480\n\nSELECT INET_NTOA(3520061480); 209.207.224.40\n\n8.强烈建议使用TINYINT来代替ENUM类型。\nENUM类型在需要修改或增加枚举值时,需要在线DDL,成本较大;ENUM列值如果含有数字类型,可能会引起默认值混淆。\n\n9.使用VARBINARY存储大小写敏感的变长字符串或二进制内容。\nVARBINARY默认区分大小写,没有字符集概念,速度快。\n\n10.INT类型固定占用4字节存储,例如INT(4)仅代表显示字符宽度为4位,不代表存储长度。\n数值类型括号后面的数字只是表示宽度而跟存储范围没有关系,比如INT(3)默认显示3位,空格补齐,超出时正常显示,python、java客户端等不具备这个功能。\n\n11.区分使用DATETIME和TIMESTAMP。存储年使用YEAR类型。存储日期使用DATE类型。 存储时间(精确到秒)建议使用TIMESTAMP类型。\nDATETIME和TIMESTAMP都是精确到秒,优先选择TIMESTAMP,因为TIMESTAMP只有4个字节,而DATETIME8个字节。同时TIMESTAMP具有自动赋值以及自动更新的特性。注意:在5.5和之前的版本中,如果一个表中有多个timestamp列,那么最多只能有一列能具有自动更新功能。\n\n如何使用TIMESTAMP的自动赋值属性?\na)自动初始化,并自动更新: column1 TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP\n\nb)只是自动初始化: column1 TIMESTAMP DEFAULT CURRENT_TIMESTAMP\n\nc)自动更新,初始化的值为0: column1 TIMESTAMP DEFAULT 0 ON UPDATE CURRENT_TIMESTAMP\n\nd)初始化的值为0: column1 TIMESTAMP DEFAULT 0\n\n12.所有字段均定义为NOT NULL。\na)对表的每一行,每个为NULL的列都需要额外的空间来标识。\n\nb)B树索引时不会存储NULL值,所以如果索引字段可以为NULL,索引效率会下降。\n\nc)建议用0、特殊值或空串代替NULL值。\n\n13.将大字段、访问频率低的字段拆分到单独的表中存储,分离冷热数据。\n有利于有效利用缓存,防止读入无用的冷数据,较少磁盘IO,同时保证热数据常驻内存提高缓存命中率。 \n\n14.禁止在数据库中存储明文密码。\n采用加密字符串存储密码，并保证密码不可解密，同时采用随机字符串加盐保证密码安全。防止数据库数据被公司内部人员或黑客获取后，采用字典攻击等方式暴力破解用户密码。\n\n15.表必须有主键,推荐使用UNSIGNED自增列作为主键。\n表没有主键,INNODB会默认设置隐藏的主键列;没有主键的表在定位数据行的时候非常困难,也会降低基于行复制的效率。\n\n16.禁止冗余索引。\n索引是双刃剑,会增加维护负担,增大IO压力。(a,b,c)、(a,b),后者为冗余索引。可以利用前缀索引来达到加速目的,减轻维护负担。\n\n17.禁止重复索引。\nprimary key a;uniq index a;重复索引增加维护负担、占用磁盘空间,同时没有任何益处。\n\n18.不在低基数列上建立索引,例如“性别”。\n大部分场景下,低基数列上建立索引的精确查找,相对于不建立索引的全表扫描没有任何优势,而且增大了IO负担。\n\n19.合理使用覆盖索引减少IO,避免排序。\n覆盖索引能从索引中获取需要的所有字段,从而避免回表进行二次查找,节省IO。INNODB存储引擎中, secondary index(非主键索引,又称为辅助索引、二级索引)没有直接存储行地址,而是存储主键值。如果用户需要查询secondary index中所不包含的数据列,则需要先通过secondary index查找到主键值,然后再通过主键查询到其他数据列,因此需要查询两次。覆盖索引则可以在一个索引中获取所有需要的数据,因此效率较高。主键查询是天然的覆盖索引。例如SELECT email,uid FROM user_email WHERE uid=xx,如果uid 不是主键,适当时候可以将索引添加为index(uid,email),以获得性能提升。\n\n20.用IN代替OR。SQL语句中IN包含的值不应过多,应少于1000个。\nIN是范围查找,MySQL内部会对IN的列表值进行排序后查找,比OR效率更高。\n\n21.表字符集使用UTF8,必要时可申请使用UTF8MB4字符集。\na)UTF8字符集存储汉字占用3个字节,存储英文字符占用一个字节。\n\nb)UTF8统一而且通用,不会出现转码出现乱码风险。\n\nc)如果遇到EMOJ等表情符号的存储需求,可申请使用UTF8MB4字符集。\n\n22.用UNION ALL代替UNION。\nUNION ALL不需要对结果集再进行排序。\n\n23.禁止使用order by rand()。\norder by rand()会为表增加一个伪列,然后用rand()函数为每一行数据计算出rand()值,然后基于该行排序, 这通常都会生成磁盘上的临时表,因此效率非常低。建议先使用rand()函数获得随机的主键值,然后通过主键获取数据。\n\n24.建议使用合理的分页方式以提高分页效率。\n第一种分页写法：\n\nselect *  from t where thread_id = 771025 and deleted = 0 order by gmt_create asc limit 0, 15;\n\n 原理：一次性根据过滤条件取出所有字段进行排序返回。\n\n 数据访问开销=索引IO+索引全部记录结果对应的表数据IO\n\n 缺点：该种写法越翻到后面执行效率越差，时间越长，尤其表数据量很大的时候。\n\n适用场景：当中间结果集很小（10000行以下）或者查询条件复杂（指涉及多个不同查询字段或者多表连接）时适用。\n\n第二种分页写法：\n\nselect t.* from ( select id from t where thread_id = 771025 and deleted = 0 order by gmt_create asc limit 0, 15) a, t  where a.id = t.id;\n\n前提：假设t表主键是id列，且有覆盖索引secondary key:(thread_id, deleted, gmt_create)\n\n原理：先根据过滤条件利用覆盖索引取出主键id进行排序，再进行join操作取出其他字段。\n\n数据访问开销=索引IO+索引分页后结果（例子中是15行）对应的表数据IO。\n\n优点：每次翻页消耗的资源和时间都基本相同，就像翻第一页一样。\n\n适用场景：当查询和排序字段（即where子句和order by子句涉及的字段）有对应覆盖索引时，且中间结果集很大的情况时适用。\n\n25.SELECT只获取必要的字段,禁止使用SELECT *。\n减少网络带宽消耗;\n\n能有效利用覆盖索引;\n\n表结构变更对程序基本无影响。\n\n26.SQL中避免出现now()、rand()、sysdate()、current_user()等不确定结果的函数。\n语句级复制场景下,引起主从数据不一致;不确定值的函数,产生的SQL语句无法利用QUERY CACHE。 \n\n27.采用合适的分库分表策略。例如千库十表、十库百表等。\n采用合适的分库分表策略,有利于业务发展后期快速对数据库进行水平拆分,同时分库可以有效利用MySQL的多线程复制特性。\n\n28.减少与数据库交互次数,尽量采用批量SQL语句。\n使用下面的语句来减少和db的交互次数:\n\na)INSERT ... ON DUPLICATE KEY UPDATE\n\nb)REPLACE INTO\n\nc)INSERT IGNORE\n\nd)INSERT INTO VALUES()\n\n29.拆分复杂SQL为多个小SQL,避免大事务。\n简单的SQL容易使用到MySQL的QUERY CACHE;减少锁表时间特别是MyISAM;可以使用多核CPU。\n\n30.对同一个表的多次alter操作必须合并为一次操作。\nmysql对表的修改绝大部分操作都需要锁表并重建表,而锁表则会对线上业务造成影响。为减少这种影响,必须把对表的多次alter操作合并为一次操作。例如,要给表t增加一个字段b,同时给已有的字段aa建立索引, 通常的做法分为两步:\n\nalter table t add column b varchar(10);\n\n然后增加索引:\n\nalter table t add index idx_aa(aa);\n\n正确的做法是:\n\nalter table t add column b varchar(10),add index idx_aa(aa);\n\n31.避免使用存储过程、触发器、视图、自定义函数等。\n这些高级特性有性能问题,以及未知BUG较多。业务逻辑放到数据库会造成数据库的DDL、SCALE OUT、 SHARDING等变得更加困难。\n\n32.禁止有super权限的应用程序账号存在。\n安全第一。super权限会导致read only失效,导致较多诡异问题而且很难追踪。\n\n33.提交线上建表改表需求,必须详细注明涉及到的所有SQL语句(包括INSERT、DELETE、UPDATE),便于DBA进行审核和优化。\n并不只是SELECT语句需要用到索引。UPDATE、DELETE都需要先定位到数据才能执行变更。因此需要业务提供所有的SQL语句便于DBA审核。\n\n34.不要在MySQL数据库中存放业务逻辑。\n数据库是有状态的服务,变更复杂而且速度慢,如果把业务逻辑放到数据库中,将会限制业务的快速发展。建议把业务逻辑提前,放到前端或中间逻辑层,而把数据库作为存储层,实现逻辑与存储的分离。', 1, '2016-03-25 19:08:37', 1, '2016-03-25 19:08:37', 1),
(57, 70, 'Mysql高负载排查命令top\n1. 确定高负载的类型,top命令看负载高是CPU还是IO。 \n2. mysql 下执行查看当前的连接数与执行的sql 语句。 \n3. 检查慢查询日志，可能是慢查询引起负载高。 \n4. 检查硬件问题，是否磁盘故障问题造成的。 \n5. 检查监控平台，对比此机器不同时间的负载。 \n\n**1．确定负载类型(top)**\ntop - 10:14:18 up 23 days, 11:01,  1 user, load average: 124.17, 55.88, 24.70 \nTasks: 138 total,   1 running, 137 sleeping,   0 stopped,   0 zombie \nCpu(s):  2.4%us,  1.0%sy,  0.0%ni, 95.2%id,  2.0%wa,  0.1%hi,  0.2%si,  0.0%st \nMem:   3090528k total,  2965772k used,   124756k free,    93332k buffers \nSwap:  4192956k total,  2425132k used,  1767824k free,   756524k cached \n           \nPID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  COMMAND \n30833 mysql     15   0 6250m 2.5g 4076 S 257.1 49.9 529:34.45 mysqld  \n\n**2．查看当前的连接数与执行的sql 语句**\nshow processlist; \n\n**3. 查看慢查询日志**\ntail /usr/local/mysql/var/slow_queries.log \n \n主要参数 \nQuery_time: 0 Lock_time: 0 Rows_sent: 1 Rows_examined: 54 \n分别意思为:查询时间 锁定时间 查询结果行数 扫描行数,主要看扫描行数多的语句,然后去数据库加上对应的索引,再优化下变态的sql 语句。\n\n**4. 极端情况kill sql进程**\n找出占用cpu时间过长的sql，在mysql 下执行如下命令： \nshow processlist; \n确定后一条sql处于Query状态，且Time时间过长，锁定它的ID，执行如下命令： \nkill QUERY  269815764;  \n\nmysqldumpslow  -s t -t 2 slow_querys.log\n-s, 是表示按照何种方式排序，c、t、l、r分别是按照记录次数、时间、查询时间、返回的记录数来排序，ac、at、al、ar，表示相应的倒叙；\n-t, 是top n的意思，即为返回前面多少条的数据；\n-g, 后边可以写一个正则匹配模式，大小写不敏感的；\nmysqldumpslow -s l -t 5 -g "hsh_bpm" slow_querys_new.log\n\n查看网站访问日志\n查看IP访问次数\n[root@nginx logs]# more huasuhui.access.log| grep news.huasuhui.com  | awk ''{print $1}'' |sort |uniq -c | sort -nr  | more\n查看指定IP访问的url\n[root@nginx logs]# more huasuhui.access.log| grep news.huasuhui.com  | grep 180.175.162.229 | awk ''{print $7}'' |sort |uniq -c | sort -nr  | more\n\n磁盘空间\n[root@exmail qqbackup]# df -hT\nFilesystem     Type   Size  Used Avail Use% Mounted on\n/dev/xvda1     ext4    20G  4.6G   15G  25% /\ntmpfs          tmpfs  3.9G     0  3.9G   0% /dev/shm\n/dev/xvdb1     ext3   197G  6.9G  181G   4% /alidata\n－h：以容易理解的格式印出文件系统大小，例如136KB、2 4MB、21GB\n－T：显示文件系统类型\n－i：显示inode信息而非块使用量\n\n内存空间\n[root@iZ28hmm7lc9Z mysqlLog]# free -m\n               total       used       free     shared    buffers     cached\nMem:         32107      28992       3114          0       1031      18001\n-/+ buffers/cache:       9960      22146 \nSwap:            0          0          0\n可用内存=系统free memory+buffers+cached.\nbuffers是指用来给块设备做的缓冲大小\ncached是用来给文件做缓冲。\n\n进程查询\nps -ef | grep java\n查询当前系统运行多少java\nps -ef| grep -v grep | grep java | wc –l\n-e 显示所有进程\n-f 全格式\n\n域名解析\ndig @8.8.8.8 www.baidu.cn \nnslookup www.baidu.com\n\n文件下载\nwget -S http://www.baidu.cn/test.log\ncurl -O http://www.baidu.cn/test.log\n\n查看端口是否开启\ntelnet 1.1.1.1 22\n\n查看网络连通性\nPing 1.1.1.1\nTraceroute 1.1.1.1\nmtr 1.1.1.1\n\n查看占用cpu最高的进程\n[root@exmail ~]# dstat --top-cpu\n-most-expensive-\n  cpu process   \njava         0.0\njava         0.2\njava         0.5\njava         0.2\njava         1.0\njava         0.5\n\n查看端口\nnetstat –lntp\nlsof –i:80\n\n查看磁盘IO使用情况\niostat -xmt 2 10\n\n字段说明：\nrrqm/s:   每秒进行 merge 的读操作数目\nwrqm/s:   每秒进行 merge 的写操作数目\nr/s:      每秒完成的读 I/O 设备次数\nw/s:      每秒完成的写 I/O 设备次数\nrMB/s:    每秒读M字节数\nwMB/s:    每秒写M字节数\navgrq-sz  平均每次设备I/O的数据大小\navgqu-sz  平均队列长度\nawait     平均每次I/O操作的等待时间(毫秒)\nsvctm     平均每次I/O操作的服务时间(毫秒)\n%util     1秒中有百分之多少时间用于 I/O 操作，如果%util接近 100%，磁盘可能存在瓶颈。\n\n实时排序显示所有运行进程的磁盘I/O情况。 \nIotop\n\n文件操作\n更改文件所属用户和组\nchown –R www.www /home/web\n\n更改文件权限\nchmod 775 /home/web\n-R 递归\n\n执行权限\nchmod a+x   test.sh\n\n创建目录\nmkdir test\n\n创建多级目录\nmkdir –p /test/abc/bbb/cccc/nnnn\n\n创建文件\ntouch 1.txt\necho “helloworld”>1.txt\nvim 1.txt\n\n文件统计\n查看目录大小并重新排序\ndu -sh  /home |sort –nr\n\n统计文件行数\nmore abc.txt | wc -l\n\n删除命令\nrm \n不建议用-f\n参数\n-r 递归\n-f 强制（不提示确认）', 1, '2016-03-25 19:15:42', 1, '2016-03-28 13:36:09', 1),
(58, 71, '# 常识普及：\n\n一、微信公众账号分两种，一种是订阅号，一种是服务号。\n\n    1、订阅号是被动响应用户消息功能，并且每天推送一条消息。\n\n    2、服务号是300元/每年认证，被动响应用户消息，主动给用户发送消息，自定义菜单按钮，网页授权等功能，并且每月推送一条消息。\n\n    3、订阅号适合消息类，新闻类应用，常常需要推送文章给用户的；服务号适合自助查询等。\n\n    4、订阅号被认证后也享用自定义菜单等功能，仍旧是300元/每年', 1, '2016-05-02 15:53:47', 1, '2016-05-02 15:53:47', 1),
(59, 72, '# 常识普及：\n\n一、微信公众账号分两种，一种是订阅号，一种是服务号。\n\n    1、订阅号是被动响应用户消息功能，并且每天推送一条消息。\n\n    2、服务号是300元/每年认证，被动响应用户消息，主动给用户发送消息，自定义菜单按钮，网页授权等功能，并且每月推送一条消息。\n\n    3、订阅号适合消息类，新闻类应用，常常需要推送文章给用户的；服务号适合自助查询等。\n\n    4、订阅号被认证后也享用自定义菜单等功能，仍旧是300元/每年\n    \n    \n   二、专业术语：\n\n    1、OpenId：微信服务器并不会告诉公众号用户的微信ID，即使是你的关注者也不行，为了解决开发中唯一标识的问题，微信使用了OpenId，所谓的OpenId，就是用户和微信公众号之间的一种唯一关系。一个用户在一个公众号面前，享用唯一的OpenId，不会和别人重复。换言之，同一个用户在另一个公众号面前，是拥有另一个OpenId的。再直白些就是$openId = md5(''用户微信ID+公众号ID'')\n\n    2、Access_Token：此项只有认证号的功能才会使用的到，Access_token是一个授权标识，即一个授权验证码，一个标识10分钟内有效，10分钟的有效期内公众号的多个关注者可以使用同一个Access_Token。在使用主动给指定用户发送消息、自定义菜单、用户管理和用户组管理等功能的时候，每次操作需要给微信服务器以参数的形式附带Access_token。\n\n    3、Access_Token网页版：本Access_Token网页版授权时会使用到，和2中的Access_Toekn是不同的东西，不过使用我们的LaneWeChat微信快速开发框架是不需要了解这些的。Access_Token网页版是说在用户打开你的公众号提供的网页的时候，你的网页需要获取用户的OpenId、昵称、头像等信息的时候授权用的。同时，本Access_Token网页版有两种用法，一种是打开网页后弹出一个授权框，让用户点击是否授权，界面像主流的开放平台授权界面（比如QQ登陆某网站，支付宝账号登陆某网站等）；另一种是不需要弹出授权框仍旧可以获取用户信息，用法可以在实例中看到。\n    \n   三、流程分析：\n\n    1、我们给微信服务器发送了一条“hello world”的文本消息。\n    \n    2、微信服务器收到我们的消息后，查找该公众账号所配置的服务器信息中的URL（如何安装部分 - 第5步）。\n\n    3、微信服务器向第二步获取的URL发送请求，参数是微信服务器自己拼接过的XML格式。\n\n    4、mobile根目录下的WxTradeController.php，引入了我们的配置文件，进入了类WxTrade的方法index()。微信的XML数据此时已经被解析为数组，变量名为$request。\n\n    5、然后，我们进入了类WxTrade的方法switchType()，根据不同的消息类型，给予不同的响应。比如用户发送文本消息和关注事件，给出的返回应该是不同的。当然，你要给出同样的提示也不能说是错的。\n\n    6、在第5步中的方法中，是一个switch，根据消息类型（此时是文本类型，微信服务器给我的是text）选择了一个处理文本消息的方法，类WxTrade中的方法text()。该方法的功能是发送文本消息，文本内容是“收到文本”。\n\n    7、此时，我们return了一个数据返回给了上层调用，层层return，此时我们返回的数据被echo出来了。\n\n    8、微信服务器拿到了输出的数据，微信服务器进行分析和处理，将文本发送给了用户的微信客户端。我们就在手机上看到了微信输出的“收到文本”。\n\n    9、流程结束，这就是发送“hello world”，然后返回给用户“收到文本”。\n    ', 1, '2016-05-02 16:02:19', 1, '2016-05-02 16:02:19', 1),
(60, 73, '#接入概述\n\n###接入微信公众平台开发，开发者需要按照如下步骤完成：\n1、填写服务器配置\n2、验证服务器地址的有效性\n3、依据接口文档实现业务逻辑\n下面详细介绍这3个步骤。\n###第一步：填写服务器配置\n登录微信公众平台官网后，在公众平台官网的开发-基本设置页面，勾选协议成为开发者，点击“修改配置”按钮，填写服务器地址（URL）、Token和EncodingAESKey，其中URL是开发者用来接收微信消息和事件的接口URL。Token可由开发者可以任意填写，用作生成签名（该Token会和接口URL中包含的Token进行比对，从而验证安全性）。EncodingAESKey由开发者手动填写或随机生成，将用作消息体加解密密钥。\n同时，开发者可选择消息加解密方式：明文模式、兼容模式和安全模式。模式的选择与服务器配置在提交后都会立即生效，请开发者谨慎填写及选择。加解密方式的默认状态为明文模式，选择兼容模式和安全模式需要提前配置好相关加解密代码，详情请参考消息体签名及加解密部分的文档。\n \n###第二步：验证消息的确来自微信服务器\n开发者提交信息后，微信服务器将发送GET请求到填写的服务器地址URL上，GET请求携带参数如下表所示：\n参数\n描述\nsignature	微信加密签名，signature结合了开发者填写的token参数和请求中的timestamp参数、nonce参数。\ntimestamp	时间戳\nnonce	随机数\nechostr	随机字符串\n\n开发者通过检验signature对请求进行校验（下面有校验方式）。若确认此次GET请求来自微信服务器，请原样返回echostr参数内容，则接入生效，成为开发者成功，否则接入失败。加密/校验流程如下：\n1）将token、timestamp、nonce三个参数进行字典序排序\n2）将三个参数字符串拼接成一个字符串进行sha1加密\n3）开发者获得加密后的字符串可与signature对比，标识该请求来源于微信\n\n检验signature的PHP示例代码：\nprivate function checkSignature()\n{\n        $signature = $_GET["signature"];\n        $timestamp = $_GET["timestamp"];\n        $nonce = $_GET["nonce"];\n        \n$token = TOKEN;\n$tmpArr = array($token, $timestamp, $nonce);\nsort($tmpArr, SORT_STRING);\n$tmpStr = implode( $tmpArr );\n$tmpStr = sha1( $tmpStr );\n\nif( $tmpStr == $signature ){\nreturn true;\n}else{\nreturn false;\n}\n}\nPHP示例代码下载：下载\n###第三步：依据接口文档实现业务逻辑\n验证URL有效性成功后即接入生效，成为开发者。你可以在公众平台网站中申请微信认证，认证成功后，将获得更多接口权限，满足更多业务需求。\n成为开发者后，用户每次向公众号发送消息、或者产生自定义菜单、或产生微信支付订单等情况时，开发者填写的服务器配置URL将得到微信服务器推送过来的消息和事件，开发者可以依据自身业务逻辑进行响应，如回复消息。\n公众号调用各接口时，一般会获得正确的结果，具体结果可见对应接口的说明。返回错误时，可根据返回码来查询错误原因。全局返回码说明\n用户向公众号发送消息时，公众号方收到的消息发送者是一个OpenID，是使用用户微信号加密后的结果，每个用户对每个公众号有一个唯一的OpenID。\n此外，由于开发者经常有需在多个平台（移动应用、网站、公众帐号）之间共通用户帐号，统一帐号体系的需求，微信开放平台（open.weixin.qq.com）提供了UnionID机制。开发者可通过OpenID来获取用户基本信息，而如果开发者拥有多个应用（移动应用、网站应用和公众帐号，公众帐号只有在被绑定到微信开放平台帐号下后，才会获取UnionID），可通过获取用户基本信息中的UnionID来区分用户的唯一性，因为只要是同一个微信开放平台帐号下的移动应用、网站应用和公众帐号，用户的UnionID是唯一的。换句话说，同一用户，对同一个微信开放平台帐号下的不同应用，UnionID是相同的。详情请在微信开放平台的资源中心-移动应用开发-微信登录-授权关系接口调用指引-获取用户个人信息（UnionID机制）中查看。\n另请注意，微信公众号接口必须以http://或https://开头，分别支持80端口和443端口。', 1, '2016-05-02 16:05:12', 1, '2016-05-02 16:05:12', 1),
(61, 74, '#获取access_token\n`access_token是公众号的全局唯一接口调用凭据，公众号调用各接口时都需使用access_token。开发者需要进行妥善保存。access_token的存储至少要保留512个字符空间。access_token的有效期目前为2个小时，需定时刷新，重复获取将导致上次获取的access_token失效。`\n\n###公众平台的API调用所需的access_token的使用及生成方式说明：\n1、为了保密appsecrect，第三方需要一个access_token获取和刷新的中控服务器。而其他业务逻辑服务器所使用的access_token均来自于该中控服务器，不应该各自去刷新，否则会造成access_token覆盖而影响业务；\n\n2、目前access_token的有效期通过返回的expire_in来传达，目前是7200秒之内的值。中控服务器需要根据这个有效时间提前去刷新新access_token。在刷新过程中，中控服务器对外输出的依然是老access_token，此时公众平台后台会保证在刷新短时间内，新老access_token都可用，这保证了第三方业务的平滑过渡；\n\n3、access_token的有效时间可能会在未来有调整，所以中控服务器不仅需要内部定时主动刷新，还需要提供被动刷新access_token的接口，这样便于业务服务器在API调用获知access_token已超时的情况下，可以触发access_token的刷新流程。\n\n    公众号可以使用AppID和AppSecret调用本接口来获取access_token。AppID和AppSecret可在微信公众平台官网-开发页中获得（需要已经成为开发者，且帐号没有异常状态）。注意调用所有微信接口时均需使用https协议。如果第三方不使用中控服务器，而是选择各个业务逻辑点各自去刷新access_token，那么就可能会产生冲突，导致服务不稳定。\n\n接口调用请求说明\n\nhttp请求方式: GET\n`https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET`\n\n###参数说明\n参数	是否必须	说明\ngrant_type	是	获取access_token填写client_credential\nappid	是	第三方用户唯一凭证\nsecret	是	第三方用户唯一凭证密钥，即appsecret\n返回说明\n正常情况下，微信会返回下述JSON数据包给公众号：\n`{"access_token":"ACCESS_TOKEN","expires_in":7200}`\n参数	说明\naccess_token	获取到的凭证\nexpires_in	凭证有效时间，单位：秒\n\n错误时微信会返回错误码等信息，JSON数据包示例如下（该示例为AppID无效错误）:\n`{"errcode":40013,"errmsg":"invalid appid"}`', 1, '2016-05-02 16:07:33', 1, '2016-05-02 16:36:46', 1),
(62, 76, '#自定义菜单创建接口\n    自定义菜单能够帮助公众号丰富界面，让用户更好更快地理解公众号的功能。\n\n请注意：\n1、自定义菜单最多包括3个一级菜单，每个一级菜单最多包含5个二级菜单。\n\n2、一级菜单最多4个汉字，二级菜单最多7个汉字，多出来的部分将会以“...”代替。\n\n3、创建自定义菜单后，菜单的刷新策略是，在用户进入公众号会话页或公众号profile页时，如果发现上一次拉取菜单的请求在5分钟以前，就会拉取一下菜单，如果菜单有更新，就会刷新客户端的菜单。测试时可以尝试取消关注公众账号后再次关注，则可以看到创建后的效果。\n###自定义菜单接口可实现多种类型按钮，如下：\n1. click：点击推事件用户点击click类型按钮后，微信服务器会通过消息接口推送消息类型为event的结构给开发者（参考消息接口指南），并且带上按钮中开发者填写的key值，开发者可以通过自定义的key值与用户进行交互；\n1. view：跳转URL用户点击view类型按钮后，微信客户端将会打开开发者在按钮中填写的网页URL，可与网页授权获取用户基本信息接口结合，获得用户基本信息。\n1. scancode_push：扫码推事件用户点击按钮后，微信客户端将调起扫一扫工具，完成扫码操作后显示扫描结果（如果是URL，将进入URL），且会将扫码的结果传给开发者，开发者可以下发消息。\n1. scancode_waitmsg：扫码推事件且弹出“消息接收中”提示框用户点击按钮后，微信客户端将调起扫一扫工具，完成扫码操作后，将扫码的结果传给开发者，同时收起扫一扫工具，然后弹出“消息接收中”提示框，随后可能会收到开发者下发的消息。\n1. pic_sysphoto：弹出系统拍照发图用户点击按钮后，微信客户端将调起系统相机，完成拍照操作后，会将拍摄的相片发送给开发者，并推送事件给开发者，同时收起系统相机，随后可能会收到开发者下发的消息。\n1. pic_photo_or_album：弹出拍照或者相册发图用户点击按钮后，微信客户端将弹出选择器供用户选择“拍照”或者“从手机相册选择”。用户选择后即走其他两种流程。\n1. pic_weixin：弹出微信相册发图器用户点击按钮后，微信客户端将调起微信相册，完成选择操作后，将选择的相片发送给开发者的服务器，并推送事件给开发者，同时收起相册，随后可能会收到开发者下发的消息。\n1. location_select：弹出地理位置选择器用户点击按钮后，微信客户端将调起地理位置选择工具，完成选择操作后，将选择的地理位置发送给开发者的服务器，同时收起位置选择工具，随后可能会收到开发者下发的消息。\n1. media_id：下发消息（除文本消息）用户点击media_id类型按钮后，微信服务器会将开发者填写的永久素材id对应的素材下发给用户，永久素材类型可以是图片、音频、视频、图文消息。请注意：永久素材id必须是在“素材管理/新增永久素材”接口上传后获得的合法id。\n1. view_limited：跳转图文消息URL用户点击view_limited类型按钮后，微信客户端将打开开发者在按钮中填写的永久素材id对应的图文消息URL，永久素材类型只支持图文消息。请注意：永久素材id必须是在“素材管理/新增永久素材”接口上传后获得的合法id。\n\n请注意，3到8的所有事件，仅支持微信iPhone5.4.1以上版本，和Android5.4以上版本的微信用户，旧版本微信用户点击后将没有回应，开发者也不能正常接收到事件推送。9和10，是专门给第三方平台旗下未微信认证（具体而言，是资质认证未通过）的订阅号准备的事件类型，它们是没有事件推送的，能力相对受限，其他类型的公众号不必使用。\n接口调用请求说明\nhttp请求方式：POST（请使用https协议） `https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN`\n`click和view的请求示例`\n` {`\n`     "button":[`\n`     {	`\n`          "type":"click",`\n`          "name":"今日歌曲",`\n`          "key":"V1001_TODAY_MUSIC"`\n`      },`\n`      {`\n`           "name":"菜单",`\n`           "sub_button":[`\n`           {	`\n`               "type":"view",`\n`               "name":"搜索",`\n`               "url":"http://www.soso.com/"`\n`            },`\n`            {`\n`               "type":"view",`\n`               "name":"视频",`\n`               "url":"http://v.qq.com/"`\n`            },`\n`            {`\n`               "type":"click",`\n`               "name":"赞一下我们",`\n`               "key":"V1001_GOOD"`\n`            }]`\n`       }]`\n` }`\n\n###其他新增按钮类型的请求示例\n`{`\n`    "button": [`\n`        {`\n`            "name": "扫码", `\n`            "sub_button": [`\n`                {`\n`                    "type": "scancode_waitmsg", `\n`                    "name": "扫码带提示", `\n`                    "key": "rselfmenu_0_0", `\n`                    "sub_button": [ ]`\n`                }, `\n`                {`\n`                    "type": "scancode_push", `\n`                    "name": "扫码推事件", `\n`                    "key": "rselfmenu_0_1", `\n`                    "sub_button": [ ]`\n`                }`\n`            ]`\n`        }, `\n`        {`\n`            "name": "发图", `\n`            "sub_button": [`\n`                {`\n`                    "type": "pic_sysphoto", `\n`                    "name": "系统拍照发图", `\n`                    "key": "rselfmenu_1_0", `\n`                   "sub_button": [ ]`\n`                 }, `\n`                {`\n`                    "type": "pic_photo_or_album", `\n`                    "name": "拍照或者相册发图", `\n`                    "key": "rselfmenu_1_1", `\n`                    "sub_button": [ ]`\n`                }, `\n`                {`\n`                    "type": "pic_weixin", `\n`                    "name": "微信相册发图", `\n`                    "key": "rselfmenu_1_2", `\n`                    "sub_button": [ ]`\n`                }`\n`            ]`\n`        }, `\n`        {`\n`            "name": "发送位置", `\n`            "type": "location_select", `\n`            "key": "rselfmenu_2_0"`\n`        },`\n`        {`\n`           "type": "media_id", `\n`           "name": "图片", `\n`           "media_id": "MEDIA_ID1"`\n`        }, `\n`        {`\n`           "type": "view_limited", `\n`           "name": "图文消息", `\n`           "media_id": "MEDIA_ID2"`\n`        }`\n`    ]`\n`}`\n\n参数说明\n参数	是否必须	说明\nbutton	是	一级菜单数组，个数应为1~3个\nsub_button	否	二级菜单数组，个数应为1~5个\ntype	是	菜单的响应动作类型\nname	是	菜单标题，不超过16个字节，子菜单不超过40个字节\nkey	click等点击类型必须	菜单KEY值，用于消息接口推送，不超过128字节\nurl	view类型必须	网页链接，用户点击菜单可打开链接，不超过1024字节\nmedia_id	media_id类型和view_limited类型必须	调用新增永久素材接口返回的合法media_id\n\n返回结果\n正确时的返回JSON数据包如下：\n`{"errcode":0,"errmsg":"ok"}`\n错误时的返回JSON数据包如下（示例为无效菜单名长度）：\n`{"errcode":40018,"errmsg":"invalid button name size"}`', 1, '2016-05-02 16:11:54', 1, '2016-05-02 16:37:14', 1),
(63, 77, '#自定义菜单删除接口\n    使用接口创建自定义菜单后，开发者还可使用接口删除当前使用的自定义菜单。另请注意，在个性化菜单时，调用此接口会删除默认菜单及全部个性化菜单。\n请求说明\nhttp请求方式：GET\nhttps://api.weixin.qq.com/cgi-bin/menu/delete?access_token=ACCESS_TOKEN\n返回说明\n对应创建接口，正确的Json返回结果:\n`{"errcode":0,"errmsg":"ok"}`', 1, '2016-05-02 16:12:30', 1, '2016-05-02 16:37:22', 1),
(64, 78, '#自定义菜单查询接口\n\n    使用接口创建自定义菜单后，开发者还可使用接口查询自定义菜单的结构。另外请注意，在设置了个性化菜单后，使用本自定义菜单查询接口可以获取默认菜单和全部个性化菜单信息。\n请求说明\nhttp请求方式：GET\n`https://api.weixin.qq.com/cgi-bin/menu/get?access_token=ACCESS_TOKEN`\n返回说明（无个性化菜单时）\n对应创建接口，正确的Json返回结果:\n`{`\n`    "menu": {`\n`        "button": [`\n`            {`\n`                "type": "click", `\n`                "name": "今日歌曲", `\n`                "key": "V1001_TODAY_MUSIC", `\n`                "sub_button": [ ]`\n`            }, `\n`            {`\n`                "type": "click", `\n`                "name": "歌手简介", `\n`                "key": "V1001_TODAY_SINGER", `\n`                "sub_button": [ ]`\n`            }, `\n`            {`\n`                "name": "菜单", `\n`                "sub_button": [`\n`                    {`\n`                        "type": "view", `\n`                        "name": "搜索", `\n`                        "url": "http://www.soso.com/", `\n`                        "sub_button": [ ]`\n`                    }, `\n`                    {`\n`                        "type": "view", `\n`                        "name": "视频", `\n`                        "url": "http://v.qq.com/", `\n`                        "sub_button": [ ]`\n`                    }, `\n`                    {`\n`                        "type": "click", `\n`                        "name": "赞一下我们", `\n`                        "key": "V1001_GOOD", `\n`                        "sub_button": [ ]`\n`                    }`\n`                ]`\n`            }`\n`        ]`\n`    }`\n`}`\n\n###返回说明（有个性化菜单时）\n`{`\n`    "menu": {`\n`        "button": [`\n`            {`\n`                "type": "click", `\n`                "name": "今日歌曲", `\n`                "key": "V1001_TODAY_MUSIC", `\n`                "sub_button": [ ]`\n`            }`\n`        ], `\n`        "menuid": 208396938`\n`    }, `\n`    "conditionalmenu": [`\n`        {`\n`            "button": [`\n`                {`\n`                    "type": "click", `\n`                    "name": "今日歌曲", `\n`                    "key": "V1001_TODAY_MUSIC", `\n`                    "sub_button": [ ]`\n`                }, `\n`                {`\n`                    "name": "菜单", `\n`                    "sub_button": [`\n`                        {`\n`                            "type": "view", `\n`                            "name": "搜索", `\n`                            "url": "http://www.soso.com/", `\n`                            "sub_button": [ ]`\n`                        }, `\n`                        {`\n`                            "type": "view", `\n`                            "name": "视频", `\n`                            "url": "http://v.qq.com/", `\n`                            "sub_button": [ ]`\n`                        }, `\n`                        {`\n`                            "type": "click", `\n`                            "name": "赞一下我们", `\n`                            "key": "V1001_GOOD", `\n`                            "sub_button": [ ]`\n`                        }`\n`                    ]`\n`                }`\n`            ], `\n`            "matchrule": {`\n`                "group_id": 2, `\n`                "sex": 1, `\n`                "country": "中国", `\n`                "province": "广东", `\n`                "city": "广州", `\n`                "client_platform_type": 2`\n`            }, `\n`            "menuid": 208396993`\n`        }`\n`    ]`\n`}`\n\n注：menu为默认菜单，conditionalmenu为个性化菜单列表。字段说明请见个性化菜单接口页的说明。', 1, '2016-05-02 16:14:08', 1, '2016-05-02 16:37:28', 1),
(65, 79, '#自定义菜单事件推送\n    用户点击自定义菜单后，微信会把点击事件推送给开发者，请注意，点击菜单弹出子菜单，不会产生上报。请注意，第3个到第8个的所有事件，仅支持微信iPhone5.4.1以上版本，和Android5.4以上版本的微信用户，旧版本微信用户点击后将没有回应，开发者也不能正常接收到事件推送。\n\n\n###推送XML数据包示例：点击菜单拉取消息时的事件推送\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[FromUser]]></FromUserName>`\n`<CreateTime>123456789</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[CLICK]]></Event>`\n`<EventKey><![CDATA[EVENTKEY]]></EventKey>`\n`</xml>`\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，CLICK\nEventKey	事件KEY值，与自定义菜单接口中KEY值对应\n\n###点击菜单跳转链接时的事件推送\n推送XML数据包示例：\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[FromUser]]></FromUserName>`\n`<CreateTime>123456789</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[VIEW]]></Event>`\n`<EventKey><![CDATA[www.qq.com]]></EventKey>`\n`<MenuId>MENUID</MenuId>`\n`</xml>`\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，VIEW\nEventKey	事件KEY值，设置的跳转URL\nMenuID	指菜单ID，如果是个性化菜单，则可以通过这个字段，知道是哪个规则的菜单被点击了。\nscancode_push：扫码推事件的事件推送\n推送XML数据包示例：\n`<xml><ToUserName><![CDATA[gh_e136c6e50636]]></ToUserName>`\n`<FromUserName><![CDATA[oMgHVjngRipVsoxg6TuX3vz6glDg]]></FromUserName>`\n`<CreateTime>1408090502</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[scancode_push]]></Event>`\n`<EventKey><![CDATA[6]]></EventKey>`\n`<ScanCodeInfo><ScanType><![CDATA[qrcode]]></ScanType>`\n`<ScanResult><![CDATA[1]]></ScanResult>`\n`</ScanCodeInfo>`\n`</xml>`\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间（整型）\nMsgType	消息类型，event\nEvent	事件类型，scancode_push\nEventKey	事件KEY值，由开发者在创建菜单时设定\nScanCodeInfo	扫描信息\nScanType	扫描类型，一般是qrcode\nScanResult	扫描结果，即二维码对应的字符串信息\n\nscancode_waitmsg：扫码推事件且弹出“消息接收中”提示框的事件推送\n推送XML数据包示例：\n<xml><ToUserName><![CDATA[gh_e136c6e50636]]></ToUserName>\n<FromUserName><![CDATA[oMgHVjngRipVsoxg6TuX3vz6glDg]]></FromUserName>\n<CreateTime>1408090606</CreateTime>\n<MsgType><![CDATA[event]]></MsgType>\n<Event><![CDATA[scancode_waitmsg]]></Event>\n<EventKey><![CDATA[6]]></EventKey>\n<ScanCodeInfo><ScanType><![CDATA[qrcode]]></ScanType>\n<ScanResult><![CDATA[2]]></ScanResult>\n</ScanCodeInfo>\n</xml>\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，scancode_waitmsg\nEventKey	事件KEY值，由开发者在创建菜单时设定\nScanCodeInfo	扫描信息\nScanType	扫描类型，一般是qrcode\nScanResult	扫描结果，即二维码对应的字符串信息\n\npic_sysphoto：弹出系统拍照发图的事件推送\n推送XML数据包示例：\n``<xml><ToUserName><![CDATA[gh_e136c6e50636]]></ToUserName>``\n``<FromUserName><![CDATA[oMgHVjngRipVsoxg6TuX3vz6glDg]]></FromUserName>``\n``<CreateTime>1408090651</CreateTime>``\n``<MsgType><![CDATA[event]]></MsgType>``\n``<Event><![CDATA[pic_sysphoto]]></Event>``\n``<EventKey><![CDATA[6]]></EventKey>``\n``<SendPicsInfo><Count>1</Count>``\n``<PicList><item><PicMd5Sum><![CDATA[1b5f7c23b5bf75682a53e7b6d163e185]]></PicMd5Sum>``\n``</item>``\n``</PicList>``\n``</SendPicsInfo>``\n``</xml>``\n\n\n参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，pic_sysphoto\nEventKey	事件KEY值，由开发者在创建菜单时设定\nSendPicsInfo	发送的图片信息\nCount	发送的图片数量\nPicList	图片列表\nPicMd5Sum	图片的MD5值，开发者若需要，可用于验证接收到图片\n\npic_photo_or_album：弹出拍照或者相册发图的事件推送\n推送XML数据包示例：\n`<xml><ToUserName><![CDATA[gh_e136c6e50636]]></ToUserName>`\n`<FromUserName><![CDATA[oMgHVjngRipVsoxg6TuX3vz6glDg]]></FromUserName>`\n`<CreateTime>1408090816</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[pic_photo_or_album]]></Event>`\n`<EventKey><![CDATA[6]]></EventKey>`\n`<SendPicsInfo><Count>1</Count>`\n`<PicList><item><PicMd5Sum><![CDATA[5a75aaca956d97be686719218f275c6b]]></PicMd5Sum>`\n`</item>`\n`</PicList>`\n`</SendPicsInfo>`\n`</xml>`\n\n参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，pic_photo_or_album\nEventKey	事件KEY值，由开发者在创建菜单时设定\nSendPicsInfo	发送的图片信息\nCount	发送的图片数量\nPicList	图片列表\nPicMd5Sum	图片的MD5值，开发者若需要，可用于验证接收到图片\n\npic_weixin：弹出微信相册发图器的事件推送\n推送XML数据包示例：\n<xml><ToUserName><![CDATA[gh_e136c6e50636]]></ToUserName>\n<FromUserName><![CDATA[oMgHVjngRipVsoxg6TuX3vz6glDg]]></FromUserName>\n<CreateTime>1408090816</CreateTime>\n<MsgType><![CDATA[event]]></MsgType>\n<Event><![CDATA[pic_weixin]]></Event>\n<EventKey><![CDATA[6]]></EventKey>\n<SendPicsInfo><Count>1</Count>\n<PicList><item><PicMd5Sum><![CDATA[5a75aaca956d97be686719218f275c6b]]></PicMd5Sum>\n</item>\n</PicList>\n</SendPicsInfo>\n</xml>\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，pic_weixin\nEventKey	事件KEY值，由开发者在创建菜单时设定\nSendPicsInfo	发送的图片信息\nCount	发送的图片数量\nPicList	图片列表\nPicMd5Sum	图片的MD5值，开发者若需要，可用于验证接收到图片\n\nlocation_select：弹出地理位置选择器的事件推送\n推送XML数据包示例：\n`<xml><ToUserName><![CDATA[gh_e136c6e50636]]></ToUserName>`\n`<FromUserName><![CDATA[oMgHVjngRipVsoxg6TuX3vz6glDg]]></FromUserName>`\n`<CreateTime>1408091189</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[location_select]]></Event>`\n`<EventKey><![CDATA[6]]></EventKey>`\n`<SendLocationInfo><Location_X><![CDATA[23]]></Location_X>`\n`<Location_Y><![CDATA[113]]></Location_Y>`\n`<Scale><![CDATA[15]]></Scale>`\n`<Label><![CDATA[ 广州市海珠区客村艺苑路 106号]]></Label>`\n`<Poiname><![CDATA[]]></Poiname>`\n`</SendLocationInfo>`\n`</xml>`\n\n参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，location_select\nEventKey	事件KEY值，由开发者在创建菜单时设定\nSendLocationInfo	发送的位置信息\nLocation_X	X坐标信息\nLocation_Y	Y坐标信息\nScale	精度，可理解为精度或者比例尺、越精细的话 scale越高\nLabel	地理位置的字符串信息\nPoiname	朋友圈POI的名字，可能为空\n', 1, '2016-05-02 16:16:58', 1, '2016-05-02 16:37:43', 1),
(66, 80, '#获取自定义菜单配置接口\n    本接口将会提供公众号当前使用的自定义菜单的配置，如果公众号是通过API调用设置的菜单，则返回菜单的开发配置，而如果公众号是在公众平台官网通过网站功能发布菜单，则本接口返回运营者设置的菜单配置。\n请注意：\n1、第三方平台开发者可以通过本接口，在旗下公众号将业务授权给你后，立即通过本接口检测公众号的自定义菜单配置，并通过接口再次给公众号设置好自动回复规则，以提升公众号运营者的业务体验。\n2、本接口与自定义菜单查询接口的不同之处在于，本接口无论公众号的接口是如何设置的，都能查询到接口，而自定义菜单查询接口则仅能查询到使用API设置的菜单配置。\n3、认证/未认证的服务号/订阅号，以及接口测试号，均拥有该接口权限。\n4、从第三方平台的公众号登录授权机制上来说，该接口从属于消息与菜单权限集。\n5、本接口中返回的图片/语音/视频未临时素材（临时素材每次获取都不同，3天内有效，通过素材管理-获取临时素材接口来获取这些素材），本接口返回的图文消息为永久素材素材（通过素材管理-获取永久素材接口来获取这些素材）。\n###接口调用请求说明\nhttp请求方式: GET（请使用https协议）``https://api.weixin.qq.com/cgi-bin/get_current_selfmenu_info?access_token=ACCESS_TOKEN``\n###返回结果说明\n如果公众号是在公众平台官网通过网站功能发布菜单，则本接口返回的自定义菜单配置样例如下：\n`{ `\n`   "is_menu_open": 1, `\n`   "selfmenu_info": { `\n`       "button": [ `\n`           { `\n`               "name": "button", `\n`               "sub_button": { `\n`                   "list": [ `\n`                       { `\n`                           "type": "view", `\n`                           "name": "view_url", `\n`                           "url": "http://www.qq.com"`\n`                       }, `\n`                       { `\n`                           "type": "news", `\n`                           "name": "news", `\n`                           "value":"KQb_w_Tiz-nSdVLoTV35Psmty8hGBulGhEdbb9SKs-o",`\n`                           "news_info": { `\n`                               "list": [ `\n`                                   { `\n`                                       "title": "MULTI_NEWS", `\n`                                       "author": "JIMZHENG", `\n`                                       "digest": "text", `\n`                                       "show_cover": 0, `\n`                                       "cover_url": "http://mmbiz.qpic.cn/mmbiz/GE7et87vE9vicuCibqXsX9GPPLuEtBfXfK0HKuBIa1A1cypS0uY1wickv70iaY1gf3I1DTszuJoS3lAVLvhTcm9sDA/0", `\n`                                       "content_url": "http://mp.weixin.qq.com/s?__biz=MjM5ODUwNTM3Ng==&mid=204013432&idx=1&sn=80ce6d9abcb832237bf86c87e50fda15#rd", `\n`                                       "source_url": ""`\n`                                   }, `\n`                                   { `\n`                                       "title": "MULTI_NEWS1", `\n`                                       "author": "JIMZHENG", `\n`                                       "digest": "MULTI_NEWS1", `\n`                                       "show_cover": 1, `\n`                                       "cover_url": "http://mmbiz.qpic.cn/mmbiz/GE7et87vE9vicuCibqXsX9GPPLuEtBfXfKnmnpXYgWmQD5gXUrEApIYBCgvh2yHsu3ic3anDUGtUCHwjiaEC5bicd7A/0", `\n`                                       "content_url": "http://mp.weixin.qq.com/s?__biz=MjM5ODUwNTM3Ng==&mid=204013432&idx=2&sn=8226843afb14ecdecb08d9ce46bc1d37#rd", `\n`                                       "source_url": ""`\n`                                   }`\n`                               ]`\n`                           }`\n`                       },`\n`                       {`\n`                           "type": "video", `\n`                           "name": "video", `\n`                           "value": "http://61.182.130.30/vweixinp.tc.qq.com/1007_114bcede9a2244eeb5ab7f76d951df5f.f10.mp4?vkey=77A42D0C2015FBB0A3653D29C571B5F4BBF1D243FBEF17F09C24FF1F2F22E30881BD350E360BC53F&sha=0&save=1"`\n`                       }, `\n`                       { `\n`                           "type": "voice",`\n`                           "name": "voice", `\n`                           "value": "nTXe3aghlQ4XYHa0AQPWiQQbFW9RVtaYTLPC1PCQx11qc9UB6CiUPFjdkeEtJicn"`\n`                       }`\n`                   ]`\n`               }`\n`           }, `\n`           { `\n`               "type": "text", `\n`               "name": "text", `\n`               "value": "This is text!"`\n`           }, `\n`           { `\n`               "type": "img", `\n`               "name": "photo", `\n`               "value": "ax5Whs5dsoomJLEppAvftBUuH7CgXCZGFbFJifmbUjnQk_ierMHY99Y5d2Cv14RD"`\n`           }`\n`       ]`\n`   }`\n`}`\n\n如果公众号是通过API调用设置的菜单，自定义菜单配置样例如下：\n`{ `\n`   "is_menu_open": 1, `\n`   "selfmenu_info": { `\n`       "button": [ `\n`           { `\n`               "type": "click", `\n`               "name": "今日歌曲", `\n`               "key": "V1001_TODAY_MUSIC"`\n`           }, `\n`           { `\n`               "name": "菜单", `\n`               "sub_button": { `\n`                   "list": [ `\n`                       { `\n`                           "type": "view", `\n`                           "name": "搜索", `\n`                           "url": "http://www.soso.com/"`\n`                       }, `\n`                       { `\n`                           "type": "view", `\n`                           "name": "视频", `\n`                           "url": "http://v.qq.com/"`\n`                       }, `\n`                       { `\n`                           "type": "click", `\n`                           "name": "赞一下我们", `\n`                           "key": "V1001_GOOD"`\n`                       }`\n`                   ]`\n`               }`\n`           }`\n`       ]`\n`   }`\n`}`\n\n###参数说明\n参数	说明\nis_menu_open	菜单是否开启，0代表未开启，1代表开启\nselfmenu_info	菜单信息\nbutton	菜单按钮\ntype	菜单的类型，公众平台官网上能够设置的菜单类型有view（跳转网页）、text（返回文本，下同）、img、photo、video、voice。使用API设置的则有8种，详见《自定义菜单创建接口》\nname	菜单名称\nvalue、url、key等字段	对于不同的菜单类型，value的值意义不同。官网上设置的自定义菜单：\nText:保存文字到value； Img、voice：保存mediaID到value； Video：保存视频下载链接到value； News：保存图文消息到news_info，同时保存mediaID到value； View：保存链接到url。\n使用API设置的自定义菜单： click、scancode_push、scancode_waitmsg、pic_sysphoto、pic_photo_or_album、	pic_weixin、location_select：保存值到key；view：保存链接到url\nnews_info	图文消息的信息\ntitle	图文消息的标题\ndigest	摘要\nauthor	作者\nshow_cover	是否显示封面，0为不显示，1为显示\ncover_url	封面图片的URL\ncontent_url	正文的URL\nsource_url	原文的URL，若置空则无查看原文入口\n', 1, '2016-05-02 16:19:13', 1, '2016-05-02 16:37:47', 1),
(67, 82, '#接收普通消息\n    当普通微信用户向公众账号发消息时，微信服务器将POST消息的XML数据包到开发者填写的URL上。\n请注意：\n1、关于重试的消息排重，推荐使用msgid排重。\n2、微信服务器在五秒内收不到响应会断掉连接，并且重新发起请求，总共重试三次。假如服务器无法保证在五秒内处理并回复，\n可以直接回复空串，微信服务器不会对此作任何处理，并且不会发起重试。详情请见“发送消息-被动回复消息”。\n3、如果开发者需要对用户消息在5秒内立即做出回应，即使用“发送消息-被动回复消息”接口向用户被动回复消息时，可以在\n\n    公众平台官网的开发者中心处设置消息加密。开启加密后，用户发来的消息和开发者回复的消息都会被加密（但开发者通过客服\n接口等API调用形式向用户发送消息，则不受影响）。关于消息加解密的详细说明，请见“发送消息-被动回复消息加解密说明”。\n各消息类型的推送XML数据包结构如下：\n###文本消息\n`<xml>`\n` <ToUserName><![CDATA[toUser]]></ToUserName>`\n` <FromUserName><![CDATA[fromUser]]></FromUserName>`\n` <CreateTime>1348831860</CreateTime>`\n` <MsgType><![CDATA[text]]></MsgType>`\n` <Content><![CDATA[this is a test]]></Content>`\n` <MsgId>1234567890123456</MsgId>`\n` </xml>`\n\n\n###参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	text\nContent	文本消息内容\nMsgId	消息id，64位整型\n图片消息\n`<xml>`\n` <ToUserName><![CDATA[toUser]]></ToUserName>`\n` <FromUserName><![CDATA[fromUser]]></FromUserName>`\n` <CreateTime>1348831860</CreateTime>`\n` <MsgType><![CDATA[image]]></MsgType>`\n` <PicUrl><![CDATA[this is a url]]></PicUrl>`\n` <MediaId><![CDATA[media_id]]></MediaId>`\n` <MsgId>1234567890123456</MsgId>`\n` </xml>`\n\n\n###参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	image\nPicUrl	图片链接（由系统生成）\nMediaId	图片消息媒体id，可以调用多媒体文件下载接口拉取数据。\nMsgId	消息id，64位整型\n使用网页调试工具调试该接口\n语音消息\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[fromUser]]></FromUserName>`\n`<CreateTime>1357290913</CreateTime>`\n`<MsgType><![CDATA[voice]]></MsgType>`\n`<MediaId><![CDATA[media_id]]></MediaId>`\n`<Format><![CDATA[Format]]></Format>`\n`<MsgId>1234567890123456</MsgId>`\n`</xml>`\n\n\n###参数描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	语音为voice\nMediaId	语音消息媒体id，可以调用多媒体文件下载接口拉取数据。\nFormat	语音格式，如amr，speex等\nMsgID	消息id，64位整型\n使用网页调试工具调试该接口\n\n请注意，开通语音识别后，用户每次发送语音给公众号时，微信会在推送的语音消息XML数据包中，增加一个Recongnition字段（注：由于客户端缓存，开发者开启或者关闭语音识别功能，对新关注者立刻生效，对已关注用户需要24小时生效。开发者可以重新关注此帐号进行测试）。开启语音识别后的语音XML数据包如下：\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[fromUser]]></FromUserName>`\n`<CreateTime>1357290913</CreateTime>`\n`<MsgType><![CDATA[voice]]></MsgType>`\n`<MediaId><![CDATA[media_id]]></MediaId>`\n`<Format><![CDATA[Format]]></Format>`\n`<Recognition><![CDATA[腾讯微信团队]]></Recognition>`\n`<MsgId>1234567890123456</MsgId>`\n`</xml>`\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	语音为voice\nMediaID	语音消息媒体id，可以调用多媒体文件下载接口拉取该媒体\nFormat	语音格式：amr\nRecognition	语音识别结果，UTF8编码\nMsgID	消息id，64位整型\n###视频消息\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[fromUser]]></FromUserName>`\n`<CreateTime>1357290913</CreateTime>`\n`<MsgType><![CDATA[video]]></MsgType>`\n`<MediaId><![CDATA[media_id]]></MediaId>`\n`<ThumbMediaId><![CDATA[thumb_media_id]]></ThumbMediaId>`\n`<MsgId>1234567890123456</MsgId>`\n`</xml>`\n\n\n###参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	视频为video\nMediaId	视频消息媒体id，可以调用多媒体文件下载接口拉取数据。\nThumbMediaId	视频消息缩略图的媒体id，可以调用多媒体文件下载接口拉取数据。\nMsgId	消息id，64位整型\n使用网页调试工具调试该接口\n###小视频消息\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[fromUser]]></FromUserName>`\n`<CreateTime>1357290913</CreateTime>`\n`<MsgType><![CDATA[shortvideo]]></MsgType>`\n`<MediaId><![CDATA[media_id]]></MediaId>`\n`<ThumbMediaId><![CDATA[thumb_media_id]]></ThumbMediaId>`\n`<MsgId>1234567890123456</MsgId>`\n`</xml>`\n\n\n###参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	小视频为shortvideo\nMediaId	视频消息媒体id，可以调用多媒体文件下载接口拉取数据。\nThumbMediaId	视频消息缩略图的媒体id，可以调用多媒体文件下载接口拉取数据。\nMsgId	消息id，64位整型\n使用网页调试工具调试该接口\n###地理位置消息\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[fromUser]]></FromUserName>`\n`<CreateTime>1351776360</CreateTime>`\n`<MsgType><![CDATA[location]]></MsgType>`\n`<Location_X>23.134521</Location_X>`\n`<Location_Y>113.358803</Location_Y>`\n`<Scale>20</Scale>`\n`<Label><![CDATA[位置信息]]></Label>`\n`<MsgId>1234567890123456</MsgId>`\n`</xml>`\n\n\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	location\nLocation_X	地理位置维度\nLocation_Y	地理位置经度\nScale	地图缩放大小\nLabel	地理位置信息\nMsgId	消息id，64位整型\n使用网页调试工具调试该接口\n链接消息\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[fromUser]]></FromUserName>`\n`<CreateTime>1351776360</CreateTime>`\n`<MsgType><![CDATA[link]]></MsgType>`\n`<Title><![CDATA[公众平台官网链接]]></Title>`\n`<Description><![CDATA[公众平台官网链接]]></Description>`\n`<Url><![CDATA[url]]></Url>`\n`<MsgId>1234567890123456</MsgId>`\n`</xml>`\n\n\n###参数	描述\nToUserName	接收方微信号\nFromUserName	发送方微信号，若为普通用户，则是一个OpenID\nCreateTime	消息创建时间\nMsgType	消息类型，link\nTitle	消息标题\nDescription	消息描述\nUrl	消息链接\nMsgId	消息id，64位整型', 1, '2016-05-02 16:22:21', 1, '2016-05-02 16:38:13', 1);
INSERT INTO `manual_article` (`id`, `menu_id`, `content`, `state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(68, 83, '#接收事件推送\n    在微信用户和公众号产生交互的过程中，用户的某些操作会使得微信服务器通过事件推送的形式通知到开发者在开发者中心处设置的服务器地址，从而开发者可以获取到该信息。其中，某些事件推送在发生后，是允许开发者回复用户的，某些则不允许，详细说明请见本页末尾的微信推送消息与事件说明。\n\n###关注/取消关注事件\n用户在关注与取消关注公众号时，微信会把这个事件推送到开发者填写的URL。方便开发者给用户下发欢迎消息或者做帐号的解绑。\n微信服务器在五秒内收不到响应会断掉连接，并且重新发起请求，总共重试三次。\n关于重试的消息排重，推荐使用FromUserName + CreateTime 排重。\n假如服务器无法保证在五秒内处理并回复，可以直接回复空串，微信服务器不会对此作任何处理，并且不会发起重试。\n\n推送XML数据包示例：\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[FromUser]]></FromUserName>`\n`<CreateTime>123456789</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[subscribe]]></Event>`\n`</xml>`\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，subscribe(订阅)、unsubscribe(取消订阅)\n使用网页调试工具调试该接口\n\n###扫描带参数二维码事件\n用户扫描带场景值二维码时，可能推送以下两种事件：\n如果用户还未关注公众号，则用户可以关注公众号，关注后微信会将带场景值关注事件推送给开发者。\n如果用户已经关注公众号，则微信会将带场景值扫描事件推送给开发者。\n1. 用户未关注时，进行关注后的事件推送\n推送XML数据包示例：\n`<xml><ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[FromUser]]></FromUserName>`\n`<CreateTime>123456789</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[subscribe]]></Event>`\n`<EventKey><![CDATA[qrscene_123123]]></EventKey>`\n`<Ticket><![CDATA[TICKET]]></Ticket>`\n`</xml>`\n\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，subscribe\nEventKey	事件KEY值，qrscene_为前缀，后面为二维码的参数值\nTicket	二维码的ticket，可用来换取二维码图片\n2. 用户已关注时的事件推送\n推送XML数据包示例：\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[FromUser]]></FromUserName>`\n`<CreateTime>123456789</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[SCAN]]></Event>`\n`<EventKey><![CDATA[SCENE_VALUE]]></EventKey>`\n`<Ticket><![CDATA[TICKET]]></Ticket>`\n`</xml>`\n\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，SCAN\nEventKey	事件KEY值，是一个32位无符号整数，即创建二维码时的二维码scene_id\nTicket	二维码的ticket，可用来换取二维码图片\n使用网页调试工具调试该接口\n\n###上报地理位置事件\n用户同意上报地理位置后，每次进入公众号会话时，都会在进入时上报地理位置，或在进入会话后每5秒上报一次地理位置，公众号可以在公众平台网站中修改以上设置。上报地理位置时，微信会将上报地理位置事件推送到开发者填写的URL。\n推送XML数据包示例：\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[fromUser]]></FromUserName>`\n`<CreateTime>123456789</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[LOCATION]]></Event>`\n`<Latitude>23.137466</Latitude>`\n`<Longitude>113.352425</Longitude>`\n`<Precision>119.385040</Precision>`\n`</xml>`\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，LOCATION\nLatitude	地理位置纬度\nLongitude	地理位置经度\nPrecision	地理位置精度\n使用网页调试工具调试该接口\n###自定义菜单事件\n用户点击自定义菜单后，微信会把点击事件推送给开发者，请注意，点击菜单弹出子菜单，不会产生上报。\n点击菜单拉取消息时的事件推送\n推送XML数据包示例：\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[FromUser]]></FromUserName>`\n`<CreateTime>123456789</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[CLICK]]></Event>`\n`<EventKey><![CDATA[EVENTKEY]]></EventKey>`\n`</xml>`\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，CLICK\nEventKey	事件KEY值，与自定义菜单接口中KEY值对应\n\n点击菜单跳转链接时的事件推送\n推送XML数据包示例：\n`<xml>`\n`<ToUserName><![CDATA[toUser]]></ToUserName>`\n`<FromUserName><![CDATA[FromUser]]></FromUserName>`\n`<CreateTime>123456789</CreateTime>`\n`<MsgType><![CDATA[event]]></MsgType>`\n`<Event><![CDATA[VIEW]]></Event>`\n`<EventKey><![CDATA[www.qq.com]]></EventKey>`\n`</xml>`\n\n###参数说明：\n参数	描述\nToUserName	开发者微信号\nFromUserName	发送方帐号（一个OpenID）\nCreateTime	消息创建时间 （整型）\nMsgType	消息类型，event\nEvent	事件类型，VIEW\nEventKey	事件KEY值，设置的跳转URL', 1, '2016-05-02 16:25:18', 1, '2016-05-02 16:38:21', 1),
(69, 85, '#微信网页授权\n如果用户在微信客户端中访问第三方网页，公众号可以通过微信网页授权机制，来获取用户基本信息，进而实现业务逻辑。\n###关于网页授权回调域名的说明\n1、在微信公众号请求用户网页授权之前，开发者需要先到公众平台官网中的开发者中心页配置授权回调域名。请注意，这里填写的是域名（是一个字符串），而不是URL，因此请勿加 http:// 等协议头； \n2、授权回调域名配置规范为全域名，比如需要网页授权的域名为：www.qq.com，配置以后此域名下面的页面http://www.qq.com/music.html 、 http://www.qq.com/login.html 都可以进行OAuth2.0鉴权。但http://pay.qq.com 、 http://music.qq.com 、 http://qq.com无法进行OAuth2.0鉴权 \n3、如果公众号登录授权给了第三方开发者来进行管理，则不必做任何设置，由第三方代替公众号实现网页授权即可 \n关于网页授权的两种scope的区别说明\n1、以snsapi_base为scope发起的网页授权，是用来获取进入页面的用户的openid的，并且是静默授权并自动跳转到回调页的。用户感知的就是直接进入了回调页（往往是业务页面）\n2、以snsapi_userinfo为scope发起的网页授权，是用来获取用户的基本信息的。但这种授权需要用户手动同意，并且由于用户同意过，所以无须关注，就可在授权后获取该用户的基本信息。 \n3、用户管理类接口中的“获取用户基本信息接口”，是在用户和公众号产生消息交互或关注后事件推送后，才能根据用户OpenID来获取用户基本信息。这个接口，包括其他微信接口，都是需要该用户（即openid）关注了公众号后，才能调用成功的。 \n###关于网页授权access_token和普通access_token的区别\n1、微信网页授权是通过OAuth2.0机制实现的，在用户授权给公众号后，公众号可以获取到一个网页授权特有的接口调用凭证（网页授权access_token），通过网页授权access_token可以进行授权后接口调用，如获取用户基本信息； \n2、其他微信接口，需要通过基础支持中的“获取access_token”接口来获取到的普通access_token调用。 \n###关于UnionID机制\n1、请注意，网页授权获取用户基本信息也遵循UnionID机制。即如果开发者有在多个公众号，或在公众号、移动应用之间统一用户帐号的需求，需要前往微信开放平台（open.weixin.qq.com）绑定公众号后，才可利用UnionID机制来满足上述需求。 \n2、UnionID机制的作用说明：如果开发者拥有多个移动应用、网站应用和公众帐号，可通过获取用户基本信息中的unionid来区分用户的唯一性，因为同一用户，对同一个微信开放平台下的不同应用（移动应用、网站应用和公众帐号），unionid是相同的。 \n关于特殊场景下的静默授权\n1、上面已经提到，对于以snsapi_base为scope的网页授权，就静默授权的，用户无感知； \n2、对于已关注公众号的用户，如果用户从公众号的会话或者自定义菜单进入本公众号的网页授权页，即使是scope为snsapi_userinfo，也是静默授权，用户无感知。 \n###具体而言，网页授权流程分为四步：\n1、引导用户进入授权页面同意授权，获取code \n2、通过code换取网页授权access_token（与基础支持中的access_token不同） \n3、如果需要，开发者可以刷新网页授权access_token，避免过期 \n4、通过网页授权access_token和openid获取用户基本信息（支持UnionID机制） \n目录\n1 第一步：用户同意授权，获取code\n2 第二步：通过code换取网页授权access_token\n3 第三步：刷新access_token（如果需要）\n4 第四步：拉取用户信息(需scope为 snsapi_userinfo)\n5 附：检验授权凭证（access_token）是否有效\n\n第一步：用户同意授权，获取code\n在确保微信公众账号拥有授权作用域（scope参数）的权限的前提下（服务号获得高级接口后，默认拥有scope参数中的snsapi_base和snsapi_userinfo），引导关注者打开如下页面：\nhttps://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect 若提示“该链接无法访问”，请检查参数是否填写错误，是否拥有scope参数对应的授权作用域权限。 \n尤其注意：由于授权操作安全等级较高，所以在发起授权请求时，微信会对授权链接做正则强匹配校验，如果链接的参数顺序不对，授权页面将无法正常访问\n参考链接(请在微信客户端中打开此链接体验) Scope为snsapi_base https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx520c15f417810387&redirect_uri=https%3A%2F%2Fchong.qq.com%2Fphp%2Findex.php%3Fd%3D%26c%3DwxAdap\nter%26m%3DmobileDeal%26showwxpaytitle%3D1%26vb2ctag%3D4_2030_5_1194_60&response_type=code&scope=snsapi_bas\ne&state=123#wechat_redirect Scope为snsapi_userinfo https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxf0e81c3bee622d60&redirect_uri=http%3A%2F%2Fnba.bluewebgame.com%2Foauth_response.php&response_type=\ncode&scope=snsapi_userinfo&state=STATE#wechat_redirect \n尤其注意：跳转回调redirect_uri，应当使用https链接来确保授权code的安全性。\n\n###参数说明\n参数	是否必须	说明\nappid	是	公众号的唯一标识\nredirect_uri	是	授权后重定向的回调链接地址，请使用urlencode对链接进行处理\nresponse_type	是	返回类型，请填写code\nscope	是	应用授权作用域，snsapi_base （不弹出授权页面，直接跳转，只能获取用户openid），snsapi_userinfo （弹出授权页面，可通过openid拿到昵称、性别、所在地。并且，即使在未关注的情况下，只要用户授权，也能获取其信息）\nstate	否	重定向后会带上state参数，开发者可以填写a-zA-Z0-9的参数值，最多128字节\n#wechat_redirect	是	无论直接打开还是做页面302重定向时候，必须带此参数\n下图为scope等于snsapi_userinfo时的授权页面：\n\n###用户同意授权后\n如果用户同意授权，页面将跳转至 redirect_uri/?code=CODE&state=STATE。\ncode说明 ： code作为换取access_token的票据，每次用户授权带上的code将不一样，code只能使用一次，5分钟未被使用自动过期。 \n第二步：通过code换取网页授权access_token\n首先请注意，这里通过code换取的是一个特殊的网页授权access_token,与基础支持中的access_token（该access_token用于调用其他接口）不同。公众号可通过下述接口来获取网页授权access_token。如果网页授权的作用域为snsapi_base，则本步骤中获取到网页授权access_token的同时，也获取到了openid，snsapi_base式的网页授权流程即到此为止。\n尤其注意：由于公众号的secret和获取到的access_token安全级别都非常高，必须只保存在服务器，不允许传给客户端。后续刷新access_token、通过access_token获取用户信息等步骤，也必须从服务器发起。\n请求方法\n获取code后，请求以下链接获取access_token：  https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=SECRET&code=CODE&grant_type=authorization_code \n参数说明\n参数	是否必须	说明\nappid	是	公众号的唯一标识\nsecret	是	公众号的appsecret\ncode	是	填写第一步获取的code参数\ngrant_type	是	填写为authorization_code   \n返回说明\n正确时返回的JSON数据包如下：\n`{ "access_token":"ACCESS_TOKEN",    `\n` "expires_in":7200,    `\n` "refresh_token":"REFRESH_TOKEN",    `\n` "openid":"OPENID",    `\n` "scope":"SCOPE" } `\n\n参数	描述\naccess_token	网页授权接口调用凭证,注意：此access_token与基础支持的access_token不同\nexpires_in	access_token接口调用凭证超时时间，单位（秒）\nrefresh_token	用户刷新access_token\nopenid	用户唯一标识，请注意，在未关注公众号时，用户访问公众号的网页，也会产生一个用户和公众号唯一的OpenID\nscope	用户授权的作用域，使用逗号（,）分隔\n错误时微信会返回JSON数据包如下（示例为Code无效错误）:\n{"errcode":40029,"errmsg":"invalid code"} \n第三步：刷新access_token（如果需要）\n由于access_token拥有较短的有效期，当access_token超时后，可以使用refresh_token进行刷新，refresh_token有效期为30天，当refresh_token失效的后，需要用户重新授权。\n请求方法\n获取第二步的refresh_token后，请求以下链接获取access_token：  \nhttps://api.weixin.qq.com/sns/oauth2/refresh_token?appid=APPID&grant_type=refresh_token&refresh_token=REFRESH_TOKEN \n\n###参数	是否必须	说明\nappid	是	公众号的唯一标识\ngrant_type	是	填写为refresh_token\nrefresh_token	是	填写通过access_token获取到的refresh_token参数  \n返回说明\n正确时返回的JSON数据包如下：\n`{ "access_token":"ACCESS_TOKEN",  `\n` "expires_in":7200,   `\n` "refresh_token":"REFRESH_TOKEN",   `\n` "openid":"OPENID",   `\n` "scope":"SCOPE" } `\n\n参数	描述\naccess_token	网页授权接口调用凭证,注意：此access_token与基础支持的access_token不同\nexpires_in	access_token接口调用凭证超时时间，单位（秒）\nrefresh_token	用户刷新access_token\nopenid	用户唯一标识\nscope	用户授权的作用域，使用逗号（,）分隔\n错误时微信会返回JSON数据包如下（示例为Code无效错误）:\n{"errcode":40029,"errmsg":"invalid code"} \n第四步：拉取用户信息(需scope为 snsapi_userinfo)\n如果网页授权作用域为snsapi_userinfo，则此时开发者可以通过access_token和openid拉取用户信息了。\n\n###请求方法\nhttp：GET（请使用https协议） https://api.weixin.qq.com/sns/userinfo?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN \n参数说明\n参数	描述\naccess_token	网页授权接口调用凭证,注意：此access_token与基础支持的access_token不同\nopenid	用户的唯一标识\nlang	返回国家地区语言版本，zh_CN 简体，zh_TW 繁体，en 英语\n返回说明\n正确时返回的JSON数据包如下：\n`{    "openid":" OPENID",  `\n` " nickname": NICKNAME,   `\n` "sex":"1",   `\n` "province":"PROVINCE"   `\n` "city":"CITY",   `\n` "country":"COUNTRY",    `\n` "headimgurl":    "http://wx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ`\n`4eMsv84eavHiaiceqxibJxCfHe/46",  `\n`"privilege":[ "PRIVILEGE1" "PRIVILEGE2"     ],    `\n` "unionid": "o6_bmasdasdsad6_2sgVt7hMZOPfL" `\n`} `\n\n###参数	描述\nopenid	用户的唯一标识\nnickname	用户昵称\nsex	用户的性别，值为1时是男性，值为2时是女性，值为0时是未知\nprovince	用户个人资料填写的省份\ncity	普通用户个人资料填写的城市\ncountry	国家，如中国为CN\nheadimgurl	用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空。若用户更换头像，原有头像URL将失效。\nprivilege	用户特权信息，json 数组，如微信沃卡用户为（chinaunicom）\nunionid	只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段。\n错误时微信会返回JSON数据包如下（示例为openid无效）:\n{"errcode":40003,"errmsg":" invalid openid "} \n附：检验授权凭证（access_token）是否有效\n请求方法\nhttp：GET（请使用https协议） https://api.weixin.qq.com/sns/auth?access_token=ACCESS_TOKEN&openid=OPENID \n###参数说明\n参数	描述\naccess_token	网页授权接口调用凭证,注意：此access_token与基础支持的access_token不同\nopenid	用户的唯一标识    \n返回说明\n正确的Json返回结果：\n{ "errcode":0,"errmsg":"ok"} \n错误时的Json返回示例：\n{ "errcode":40003,"errmsg":"invalid openid"}', 1, '2016-05-02 16:29:25', 1, '2016-05-02 16:29:25', 1),
(70, 86, '#微信JS-SDK说明文档\n\n概述\n微信JS-SDK是微信公众平台面向网页开发者提供的基于微信内的网页开发工具包。\n通过使用微信JS-SDK，网页开发者可借助微信高效地使用拍照、选图、语音、位置等手机系统的能力，同时可以直接使用微信分享、扫一扫、卡券、支付等微信特有的能力，为微信用户提供更优质的网页体验。\n此文档面向网页开发者介绍微信JS-SDK如何使用及相关注意事项。\n###JSSDK使用步骤\n步骤一：绑定域名\n先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。\n备注：登录后可在“开发者中心”查看对应的接口权限。\n步骤二：引入JS文件\n在需要调用JS接口的页面引入如下JS文件，（支持https）：http://res.wx.qq.com/open/js/jweixin-1.0.0.js\n如需使用摇一摇周边功能，请引入 http://res.wx.qq.com/open/js/jweixin-1.1.0.js\n备注：支持使用 AMD/CMD 标准模块加载方法加载\n步骤三：通过config接口注入权限验证配置\n所有需要使用JS-SDK的页面必须先注入配置信息，否则将无法调用（同一个url仅需调用一次，对于变化url的SPA的web app可在每次url变化时进行调用,目前Android微信客户端不支持pushState的H5新特性，所以使用pushState来实现web app的页面会导致签名失败，此问题会在Android6.2中修复）。\nwx.config({\n    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。\n    appId: '''', // 必填，公众号的唯一标识\n    timestamp: , // 必填，生成签名的时间戳\n    nonceStr: '''', // 必填，生成签名的随机串\n    signature: '''',// 必填，签名，见附录1\n    jsApiList: [] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2\n});\n步骤四：通过ready接口处理成功验证\nwx.ready(function(){\n    // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。\n});\n步骤五：通过error接口处理失败验证\nwx.error(function(res){\n    // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。\n});\n###接口调用说明\n所有接口通过wx对象(也可使用jWeixin对象)来调用，参数是一个对象，除了每个接口本身需要传的参数之外，还有以下通用参数：\n1.success：接口调用成功时执行的回调函数。\n2.fail：接口调用失败时执行的回调函数。\n3.complete：接口调用完成时执行的回调函数，无论成功或失败都会执行。\n4.cancel：用户点击取消时的回调函数，仅部分有用户取消操作的api才会用到。\n5.trigger: 监听Menu中的按钮点击时触发的方法，该方法仅支持Menu中的相关接口。\n备注：不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回。\n以上几个函数都带有一个参数，类型为对象，其中除了每个接口本身返回的数据之外，还有一个通用属性errMsg，其值格式如下：\n调用成功时："xxx:ok" ，其中xxx为调用的接口名\n用户取消时："xxx:cancel"，其中xxx为调用的接口名\n调用失败时：其值为具体错误信息\n###基础接口\n###判断当前客户端版本是否支持指定JS接口\nwx.checkJsApi({\n    jsApiList: [''chooseImage''], // 需要检测的JS接口列表，所有JS接口列表见附录2,\n    success: function(res) {\n        // 以键值对的形式返回，可用的api值true，不可用为false\n        // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}\n    }\n});\n备注：checkJsApi接口是客户端6.0.2新引入的一个预留接口，第一期开放的接口均可不使用checkJsApi来检测。\n分享接口\n请注意不要有诱导分享等违规行为，对于诱导分享行为将永久回收公众号接口权限，详细规则请查看：朋友圈管理常见问题 。\n\n###获取“分享到朋友圈”按钮点击状态及自定义分享内容接口\nwx.onMenuShareTimeline({\n    title: '''', // 分享标题\n    link: '''', // 分享链接\n    imgUrl: '''', // 分享图标\n    success: function () { \n        // 用户确认分享后执行的回调函数\n    },\n    cancel: function () { \n        // 用户取消分享后执行的回调函数\n    }\n});\n###获取“分享给朋友”按钮点击状态及自定义分享内容接口\nwx.onMenuShareAppMessage({\n    title: '''', // 分享标题\n    desc: '''', // 分享描述\n    link: '''', // 分享链接\n    imgUrl: '''', // 分享图标\n    type: '''', // 分享类型,music、video或link，不填默认为link\n    dataUrl: '''', // 如果type是music或video，则要提供数据链接，默认为空\n    success: function () { \n        // 用户确认分享后执行的回调函数\n    },\n    cancel: function () { \n        // 用户取消分享后执行的回调函数\n    }\n});\n###获取“分享到QQ”按钮点击状态及自定义分享内容接口\nwx.onMenuShareQQ({\n    title: '''', // 分享标题\n    desc: '''', // 分享描述\n    link: '''', // 分享链接\n    imgUrl: '''', // 分享图标\n    success: function () { \n       // 用户确认分享后执行的回调函数\n    },\n    cancel: function () { \n       // 用户取消分享后执行的回调函数\n    }\n});\n###获取“分享到腾讯微博”按钮点击状态及自定义分享内容接口\nwx.onMenuShareWeibo({\n    title: '''', // 分享标题\n    desc: '''', // 分享描述\n    link: '''', // 分享链接\n    imgUrl: '''', // 分享图标\n    success: function () { \n       // 用户确认分享后执行的回调函数\n    },\n    cancel: function () { \n        // 用户取消分享后执行的回调函数\n    }\n});\n###获取“分享到QQ空间”按钮点击状态及自定义分享内容接口\nwx.onMenuShareQZone({\n    title: '''', // 分享标题\n    desc: '''', // 分享描述\n    link: '''', // 分享链接\n    imgUrl: '''', // 分享图标\n    success: function () { \n       // 用户确认分享后执行的回调函数\n    },\n    cancel: function () { \n        // 用户取消分享后执行的回调函数\n    }\n});\n###图像接口\n拍照或从手机相册中选图接口\nwx.chooseImage({\n    count: 1, // 默认9\n    sizeType: [''original'', ''compressed''], // 可以指定是原图还是压缩图，默认二者都有\n    sourceType: [''album'', ''camera''], // 可以指定来源是相册还是相机，默认二者都有\n    success: function (res) {\n        var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片\n    }\n});\n###预览图片接口\nwx.previewImage({\n    current: '''', // 当前显示图片的http链接\n    urls: [] // 需要预览的图片http链接列表\n});\n###上传图片接口\nwx.uploadImage({\n    localId: '''', // 需要上传的图片的本地ID，由chooseImage接口获得\n    isShowProgressTips: 1, // 默认为1，显示进度提示\n    success: function (res) {\n        var serverId = res.serverId; // 返回图片的服务器端ID\n    }\n});\n备注：上传图片有效期3天，可用微信多媒体接口下载图片到自己的服务器，此处获得的 serverId 即 media_id，参考文档 . 目前多媒体文件下载接口的频率限制为10000次/天，如需要调高频率，请邮件weixin-open@qq.com,邮件主题为【申请多媒体接口调用量】，请对你的项目进行简单描述，附上产品体验链接，并对用户量和使用量进行说明。\n###下载图片接口\nwx.downloadImage({\n    serverId: '''', // 需要下载的图片的服务器端ID，由uploadImage接口获得\n    isShowProgressTips: 1, // 默认为1，显示进度提示\n    success: function (res) {\n        var localId = res.localId; // 返回图片下载后的本地ID\n    }\n});\n###音频接口\n开始录音接口\nwx.startRecord();\n停止录音接口\nwx.stopRecord({\n    success: function (res) {\n        var localId = res.localId;\n    }\n});\n###监听录音自动停止接口\nwx.onVoiceRecordEnd({\n    // 录音时间超过一分钟没有停止的时候会执行 complete 回调\n    complete: function (res) {\n        var localId = res.localId; \n    }\n});\n###播放语音接口\nwx.playVoice({\n    localId: '''' // 需要播放的音频的本地ID，由stopRecord接口获得\n});\n###暂停播放接口\nwx.pauseVoice({\n    localId: '''' // 需要暂停的音频的本地ID，由stopRecord接口获得\n});\n###停止播放接口\nwx.stopVoice({\n    localId: '''' // 需要停止的音频的本地ID，由stopRecord接口获得\n});\n###监听语音播放完毕接口\nwx.onVoicePlayEnd({\n    success: function (res) {\n        var localId = res.localId; // 返回音频的本地ID\n    }\n});\n###上传语音接口\nwx.uploadVoice({\n    localId: '''', // 需要上传的音频的本地ID，由stopRecord接口获得\n    isShowProgressTips: 1, // 默认为1，显示进度提示\n        success: function (res) {\n        var serverId = res.serverId; // 返回音频的服务器端ID\n    }\n});\n备注：上传语音有效期3天，可用微信多媒体接口下载语音到自己的服务器，此处获得的 serverId 即 media_id，参考文档 .目前多媒体文件下载接口的频率限制为10000次/天，如需要调高频率，请邮件weixin-open@qq.com,邮件主题为【申请多媒体接口调用量】，请对你的项目进行简单描述，附上产品体验链接，并对用户量和使用量进行说明。\n###下载语音接口\nwx.downloadVoice({\n    serverId: '''', // 需要下载的音频的服务器端ID，由uploadVoice接口获得\n    isShowProgressTips: 1, // 默认为1，显示进度提示\n    success: function (res) {\n        var localId = res.localId; // 返回音频的本地ID\n    }\n});\n###智能接口\n识别音频并返回识别结果接口\nwx.translateVoice({\n   localId: '''', // 需要识别的音频的本地Id，由录音相关接口获得\n    isShowProgressTips: 1, // 默认为1，显示进度提示\n    success: function (res) {\n        alert(res.translateResult); // 语音识别的结果\n    }\n});\n###设备信息\n获取网络状态接口\nwx.getNetworkType({\n    success: function (res) {\n        var networkType = res.networkType; // 返回网络类型2g，3g，4g，wifi\n    }\n});\n###地理位置\n使用微信内置地图查看位置接口\nwx.openLocation({\n    latitude: 0, // 纬度，浮点数，范围为90 ~ -90\n    longitude: 0, // 经度，浮点数，范围为180 ~ -180。\n    name: '''', // 位置名\n    address: '''', // 地址详情说明\n    scale: 1, // 地图缩放级别,整形值,范围从1~28。默认为最大\n    infoUrl: '''' // 在查看位置界面底部显示的超链接,可点击跳转\n});\n###获取地理位置接口\nwx.getLocation({\n    type: ''wgs84'', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入''gcj02''\n    success: function (res) {\n        var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90\n        var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。\n        var speed = res.speed; // 速度，以米/每秒计\n        var accuracy = res.accuracy; // 位置精度\n    }\n});\n###摇一摇周边\n开启查找周边ibeacon设备接口\nwx.startSearchBeacons({\n	ticket:"",  //摇周边的业务ticket, 系统自动添加在摇出来的页面链接后面\n	complete:function(argv){\n		//开启查找完成后的回调函数\n	}\n});\n备注：如需接入摇一摇周边功能，请参考：申请开通摇一摇周边\n关闭查找周边ibeacon设备接口\nwx.stopSearchBeacons({\n	complete:function(res){\n		//关闭查找完成后的回调函数\n	}\n});\n###监听周边ibeacon设备接口\nwx.onSearchBeacons({\n	complete:function(argv){\n		//回调函数，可以数组形式取得该商家注册的在周边的相关设备列表\n	}\n});\n备注：上述摇一摇周边接口使用注意事项及更多返回结果说明，请参考：摇一摇周边获取设备信息\n界面操作\n隐藏右上角菜单接口\nwx.hideOptionMenu();\n显示右上角菜单接口\nwx.showOptionMenu();\n关闭当前网页窗口接口\nwx.closeWindow();\n批量隐藏功能按钮接口\nwx.hideMenuItems({\n    menuList: [] // 要隐藏的菜单项，只能隐藏“传播类”和“保护类”按钮，所有menu项见附录3\n});\n批量显示功能按钮接口\nwx.showMenuItems({\n    menuList: [] // 要显示的菜单项，所有menu项见附录3\n});\n隐藏所有非基础按钮接口\nwx.hideAllNonBaseMenuItem();\n// “基本类”按钮详见附录3\n显示所有功能按钮接口\nwx.showAllNonBaseMenuItem();\n微信扫一扫\n调起微信扫一扫接口\nwx.scanQRCode({\n    needResult: 0, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，\n    scanType: ["qrCode","barCode"], // 可以指定扫二维码还是一维码，默认二者都有\n    success: function (res) {\n    var result = res.resultStr; // 当needResult 为 1 时，扫码返回的结果\n}\n});\n###微信小店\n跳转微信商品页接口\nwx.openProductSpecificView({\n    productId: '''', // 商品id\n    viewType: '''' // 0.默认值，普通商品详情页1.扫一扫商品详情页2.小店商品详情页\n});\n###微信卡券\n微信卡券接口中使用的签名凭证api_ticket，与步骤三中config使用的签名凭证jsapi_ticket不同，开发者在调用微信卡券JS-SDK的过程中需依次完成两次不同的签名，并确保凭证的缓存。\n获取api_ticket\napi_ticket 是用于调用微信卡券JS API的临时票据，有效期为7200 秒，通过access_token 来获取。\n###开发者注意事项：\n1.此用于卡券接口签名的api_ticket与步骤三中通过config接口注入权限验证配置使用的jsapi_ticket不同。\n2.由于获取api_ticket 的api 调用次数非常有限，频繁刷新api_ticket 会导致api调用受限，影响自身业务，开发者需在自己的服务存储与更新api_ticket。\n接口调用请求说明\nhttp请求方式: GET\nhttps://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=ACCESS_TOKEN&type=wx_card\n参数说明\n参数\n是否必须	说明\naccess_token	是	接口调用凭证\n返回数据\n数据示例：\n {\n"errcode":0,\n"errmsg":"ok",\n"ticket":"bxLdikRXVbTPdHSM05e5u5sUoXNKdvsdshFKA",\n"expires_in":7200\n}\n参数名	描述\nerrcode	错误码\nerrmsg	错误信息\nticket	api_ticket，卡券接口中签名所需凭证\nexpires_in		有效时间\n拉取适用卡券列表并获取用户选择信息\nwx.chooseCard({\n    shopId: '''', // 门店Id\n    cardType: '''', // 卡券类型\n    cardId: '''', // 卡券Id\n    timestamp: 0, // 卡券签名时间戳\n    nonceStr: '''', // 卡券签名随机串\n    signType: '''', // 签名方式，默认''SHA1''\n    cardSign: '''', // 卡券签名\n    success: function (res) {\n        var cardList= res.cardList; // 用户选中的卡券列表信息\n    }\n});\n参数名	必填		类型		示例值	描述\nshopId	否	string(24)	1234		门店ID。shopID用于筛选出拉起带有指定location_list(shopID)的卡券列表，非必填。\ncardType	否	string(24)	GROUPON	卡券类型，用于拉起指定卡券类型的卡券列表。当cardType为空时，默认拉起所有卡券的列表，非必填。\ncardId	否	string(32)		p1Pj9jr90_SQRaVqYI239Ka1erk	卡券ID，用于拉起指定cardId的卡券列表，当cardId为空时，默认拉起所有卡券的列表，非必填。\ntimestamp	是	string(32)	14300000000	时间戳。\nnonceStr	是	string(32)	sduhi123	随机字符串。\nsignType	是	string(32)	SHA1	签名方式，目前仅支持SHA1\ncardSign	是	string(64)	abcsdijcous123	签名。				\ncardSign详见附录4。开发者特别注意：签名错误会导致拉取卡券列表异常为空，请仔细检查参与签名的参数有效性。\n###特别提醒\n拉取列表仅与用户本地卡券有关，拉起列表异常为空的情况通常有三种：签名错误、时间戳无效、筛选机制有误。请开发者依次排查定位原因。\n批量添加卡券接口\nwx.addCard({\n    cardList: [{\n        cardId: '''',\n        cardExt: ''''\n    }], // 需要添加的卡券列表\n    success: function (res) {\n        var cardList = res.cardList; // 添加的卡券列表信息\n    }\n});\ncardExt详见附录4，值得注意的是，这里的card_ext参数必须与参与签名的参数一致，格式为字符串而不是Object，否则会报签名错误。\n查看微信卡包中的卡券接口\nwx.openCard({\n    cardList: [{\n        cardId: '''',\n        code: ''''\n    }]// 需要打开的卡券列表\n});\n###微信支付\n发起一个微信支付请求\nwx.chooseWXPay({\n    timestamp: 0, // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符\n    nonceStr: '''', // 支付签名随机串，不长于 32 位\n    package: '''', // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）\n    signType: '''', // 签名方式，默认为''SHA1''，使用新版支付需传入''MD5''\n    paySign: '''', // 支付签名\n    success: function (res) {\n        // 支付成功后的回调函数\n    }\n});\n备注：prepay_id 通过微信支付统一下单接口拿到，paySign 采用统一的微信支付 Sign 签名生成方法，注意这里 appId 也要参与签名，appId 与 config 中传入的 appId 一致，即最后参与签名的参数有appId, timeStamp, nonceStr, package, signType。\n微信支付开发文档：https://pay.weixin.qq.com/wiki/doc/api/index.html\n###附录1-JS-SDK使用权限签名算法\njsapi_ticket\n生成签名之前必须先了解一下jsapi_ticket，jsapi_ticket是公众号用于调用微信JS接口的临时票据。正常情况下，jsapi_ticket的有效期为7200秒，通过access_token来获取。由于获取jsapi_ticket的api调用次数非常有限，频繁刷新jsapi_ticket会导致api调用受限，影响自身业务，开发者必须在自己的服务全局缓存jsapi_ticket 。\n1.参考以下文档获取access_token（有效期7200秒，开发者必须在自己的服务全局缓存access_token）：../15/54ce45d8d30b6bf6758f68d2e95bc627.html\n2.用第一步拿到的access_token 采用http GET方式请求获得jsapi_ticket（有效期7200秒，开发者必须在自己的服务全局缓存jsapi_ticket）：https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=ACCESS_TOKEN&type=jsapi\n成功返回如下JSON：\n{\n"errcode":0,\n"errmsg":"ok",\n"ticket":"bxLdikRXVbTPdHSM05e5u5sUoXNKd8-41ZO3MhKoyN5OfkWITDGgnr2fwJ0m9E8NYzWKVZvdVtaUgWvsdshFKA",\n"expires_in":7200\n}\n获得jsapi_ticket之后，就可以生成JS-SDK权限验证的签名了。\n###签名算法\n签名生成规则如下：参与签名的字段包括noncestr（随机字符串）, 有效的jsapi_ticket, timestamp（时间戳）, url（当前网页的URL，不包含#及其后面部分） 。对所有待签名参数按照字段名的ASCII 码从小到大排序（字典序）后，使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串string1。这里需要注意的是所有参数名均为小写字符。对string1作sha1加密，字段名和字段值都采用原始值，不进行URL 转义。\n即signature=sha1(string1)。 示例：\nnoncestr=Wm3WZYTPz0wzccnW\njsapi_ticket=sM4AOVdWfPE4DxkXGEs8VMCPGGVi4C3VM0P37wVUCFvkVAy_90u5h9nbSlYy3-Sl-HhTdfl2fzFy1AOcHKP7qg\ntimestamp=1414587457\nurl=http://mp.weixin.qq.com?params=value\n步骤1. 对所有待签名参数按照字段名的ASCII 码从小到大排序（字典序）后，使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串string1：\njsapi_ticket=sM4AOVdWfPE4DxkXGEs8VMCPGGVi4C3VM0P37wVUCFvkVAy_90u5h9nbSlYy3-Sl-HhTdfl2fzFy1AOcHKP7qg&noncestr=Wm3WZYTPz0wzccnW&timestamp=1414587457&url=http://mp.weixin.qq.com?params=value\n步骤2. 对string1进行sha1签名，得到signature：\n0f9de62fce790f9a083d5c99e95740ceb90c27ed\n###注意事项\n1.签名用的noncestr和timestamp必须与wx.config中的nonceStr和timestamp相同。\n2.签名用的url必须是调用JS接口页面的完整URL。\n3.出于安全考虑，开发者必须在服务器端实现签名的逻辑。\n如出现invalid signature 等错误详见附录5常见错误及解决办法。\n###附录2-所有JS接口列表\n版本1.0.0接口\nonMenuShareTimeline\nonMenuShareAppMessage\nonMenuShareQQ\nonMenuShareWeibo\nonMenuShareQZone\nstartRecord\nstopRecord\nonVoiceRecordEnd\nplayVoice\npauseVoice\nstopVoice\nonVoicePlayEnd\nuploadVoice\ndownloadVoice\nchooseImage\npreviewImage\nuploadImage\ndownloadImage\ntranslateVoice\ngetNetworkType\nopenLocation\ngetLocation\nhideOptionMenu\nshowOptionMenu\nhideMenuItems\nshowMenuItems\nhideAllNonBaseMenuItem\nshowAllNonBaseMenuItem\ncloseWindow\nscanQRCode\nchooseWXPay\nopenProductSpecificView\naddCard\nchooseCard\nopenCard\n###附录3-所有菜单项列表\n基本类\n举报: "menuItem:exposeArticle"\n调整字体: "menuItem:setFont"\n日间模式: "menuItem:dayMode"\n夜间模式: "menuItem:nightMode"\n刷新: "menuItem:refresh"\n查看公众号（已添加）: "menuItem:profile"\n查看公众号（未添加）: "menuItem:addContact"\n传播类\n发送给朋友: "menuItem:share:appMessage"\n分享到朋友圈: "menuItem:share:timeline"\n分享到QQ: "menuItem:share:qq"\n分享到Weibo: "menuItem:share:weiboApp"\n收藏: "menuItem:favorite"\n分享到FB: "menuItem:share:facebook"\n分享到 QQ 空间/menuItem:share:QZone\n保护类\n编辑标签: "menuItem:editTag"\n删除: "menuItem:delete"\n复制链接: "menuItem:copyUrl"\n原网页: "menuItem:originPage"\n阅读模式: "menuItem:readMode"\n在QQ浏览器中打开: "menuItem:openWithQQBrowser"\n在Safari中打开: "menuItem:openWithSafari"\n邮件: "menuItem:share:email"\n一些特殊公众号: "menuItem:share:brand"\n###附录4-卡券扩展字段及签名生成算法\nJSSDK使用者请读这里，JSAPI用户可以跳过\n卡券签名和JSSDK的签名完全独立，两者的算法和意义完全不同，请不要混淆。JSSDK的签名是使用所有JS接口都需要走的一层鉴权，用以标识调用者的身份，和卡券本身并无关系。其次，卡券的签名考虑到协议的扩展性和简单的防数据擅改，设计了一套独立的签名协议。另外由于历史原因，卡券的JS接口先于JSSDK出现，当时的JSAPI并没有鉴权体系，所以在卡券的签名里也加上了appsecret/api_ticket这些身份信息，希望开发者理解。\n卡券 api_ticket\n卡券 api_ticket 是用于调用卡券相关接口的临时票据，有效期为 7200 秒，通过 access_token 来获取。这里要注意与 jsapi_ticket 区分开来。由于获取卡券 api_ticket 的 api 调用次数非常有限，频繁刷新卡券 api_ticket 会导致 api 调用受限，影响自身业务，开发者必须在自己的服务全局缓存卡券 api_ticket 。\n1.参考以下文档获取access_token（有效期7200秒，开发者必须在自己的服务全局缓存access_token）：../15/54ce45d8d30b6bf6758f68d2e95bc627.html\n2.用第一步拿到的access_token 采用http GET方式请求获得卡券 api_ticket（有效期7200秒，开发者必须在自己的服务全局缓存卡券 api_ticket）：https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=ACCESS_TOKEN&type=wx_card\n卡券扩展字段cardExt说明\ncardExt本身是一个JSON字符串，是商户为该张卡券分配的唯一性信息，包含以下字段：\n字段	是否必填		说明\ncode		否	指定的卡券code码，只能被领一次。use_custom_code字段为true的卡券必须填写，非自定义code和get_custom_code_mode(预存code模式的卡券)不必填写。\nopenid	否	指定领取者的openid，只有该用户能领取。bind_openid字段为true的卡券必须填写，bind_openid字段为false不必填写。\ntimestamp	是	时间戳，商户生成从1970年1月1日00:00:00至今的秒数,即当前的时间,且最终需要转换为字符串形式;由商户生成后传入,不同添加请求的时间戳须动态生成，若重复将会导致领取失败！。\nnonce_str	否	随机字符串，由开发者设置传入，加强签名的安全性。随机字符串，不长于32位。推荐使用大小写字母和数字，不同添加请求的nonce须动态生成，若重复将会导致领取失败！。\nsignature	是	签名，商户将接口列表中的参数按照指定方式进行签名,签名方式使用SHA1,具体签名方案参见下文;由商户按照规范签名后传入。		\n签名说明\n1.将 api_ticket（特别说明：api_ticket 相较 appsecret 安全性更高，同时兼容老版本文档中使用的 appsecret 作为签名凭证。）、timestamp、card_id、code、openid、nonce_str的value值进行字符串的字典序排序。\n2.将所有参数字符串拼接成一个字符串进行sha1加密，得到signature。\n3.signature中的timestamp，nonce字段和card_ext中的timestamp，nonce_str字段必须保持一致。\n4.code=jonyqin_1434008071，timestamp=1404896688，card_id=pjZ8Yt1XGILfi-FUsewpnnolGgZk， api_ticket=ojZ8YtyVyr30HheH3CM73y7h4jJE ，nonce_str=jonyqin 则signature=sha1(1404896688jonyqinjonyqin_1434008071ojZ8YtyVyr30HheH3CM73y7h4jJE pjZ8Yt1XGILfi-FUsewpnnolGgZk)=6b81fbf6af16e856334153b39737556063c82689。\n强烈建议开发者使用卡券资料包中的签名工具SDK进行签名或使用debug工具进行校验：http://mp.weixin.qq.com/debug/cgi-bin/sandbox?t=cardsign\n卡券签名cardSign说明\n1.将 api_ticket（特别说明：api_ticket 相较 appsecret 安全性更高，同时兼容老版本文档中使用的 appsecret 作为签名凭证。）、app_id、location_id、times_tamp、nonce_str、card_id、card_type的value值进行字符串的字典序排序。\n2.将所有参数字符串拼接成一个字符串进行sha1加密，得到cardSign。\n###附录5-常见错误及解决方法\n调用config 接口的时候传入参数 debug: true 可以开启debug模式，页面会alert出错误信息。以下为常见错误及解决方法：\n1.invalid url domain当前页面所在域名与使用的appid没有绑定，请确认正确填写绑定的域名，仅支持80（http）和443（https）两个端口，因此不需要填写端口号（一个appid可以绑定三个有效域名，见 目录1.1.1）。\n2.invalid signature签名错误。建议按如下顺序检查：\n   1.确认签名算法正确，可用 http://mp.weixin.qq.com/debug/cgi-bin/sandbox?t=jsapisign 页面工具进行校验。\n   2.确认config中nonceStr（js中驼峰标准大写S）, timestamp与用以签名中的对应noncestr, timestamp一致。\n   3.确认url是页面完整的url(请在当前页面alert(location.href.split(''#'')[0])确认)，包括''http(s)://''部分，以及''？''后面的GET参数部分,但不包括''#''hash后面的部分。\n   4.确认 config 中的 appid 与用来获取 jsapi_ticket 的 appid 一致。\n   5.确保一定缓存access_token和jsapi_ticket。\n   6.确保你获取用来签名的url是动态获取的，动态页面可参见实例代码中php的实现方式。如果是html的静态页面在前端通过ajax将url传到后台签名，前端需要用js获取当前页面除去''#''hash部分的链接（可用location.href.split(''#'')[0]获取,而且需要encodeURIComponent），因为页面一旦分享，微信客户端会在你的链接末尾加入其它参数，如果不是动态获取当前链接，将导致分享后的页面签名失败。\n3.the permission value is offline verifying这个错误是因为config没有正确执行，或者是调用的JSAPI没有传入config的jsApiList参数中。建议按如下顺序检查：\n   1.确认config正确通过。\n   2.如果是在页面加载好时就调用了JSAPI，则必须写在wx.ready的回调中。\n   3.确认config的jsApiList参数包含了这个JSAPI。\n4.permission denied该公众号没有权限使用这个JSAPI，或者是调用的JSAPI没有传入config的jsApiList参数中（部分接口需要认证之后才能使用）。\n5.function not exist当前客户端版本不支持该接口，请升级到新版体验。\n6.为什么6.0.1版本config:ok，但是6.0.2版本之后不ok（因为6.0.2版本之前没有做权限验证，所以config都是ok，但这并不意味着你config中的签名是OK的，请在6.0.2检验是否生成正确的签名以保证config在高版本中也ok。）\n7.在iOS和Android都无法分享（请确认公众号已经认证，只有认证的公众号才具有分享相关接口权限，如果确实已经认证，则要检查监听接口是否在wx.ready回调函数中触发）\n8.服务上线之后无法获取jsapi_ticket，自己测试时没问题。（因为access_token和jsapi_ticket必须要在自己的服务器缓存，否则上线后会触发频率限制。请确保一定对token和ticket做缓存以减少2次服务器请求，不仅可以避免触发频率限制，还加快你们自己的服务速度。目前为了方便测试提供了1w的获取量，超过阀值后，服务将不再可用，请确保在服务上线前一定全局缓存access_token和jsapi_ticket，两者有效期均为7200秒，否则一旦上线触发频率限制，服务将不再可用）。\n9.uploadImage怎么传多图（目前只支持一次上传一张，多张图片需等前一张图片上传之后再调用该接口）\n10.没法对本地选择的图片进行预览（chooseImage接口本身就支持预览，不需要额外支持）\n11.通过a链接(例如先通过微信授权登录)跳转到b链接，invalid signature签名失败（后台生成签名的链接为使用jssdk的当前链接，也就是跳转后的b链接，请不要用微信登录的授权链接进行签名计算，后台签名的url一定是使用jssdk的当前页面的完整url除去''#''部分）\n12.出现config:fail错误（这是由于传入的config参数不全导致，请确保传入正确的appId、timestamp、nonceStr、signature和需要使用的jsApiList）\n13.如何把jsapi上传到微信的多媒体资源下载到自己的服务器（请参见文档中uploadVoice和uploadImage接口的备注说明）\n14.Android通过jssdk上传到微信服务器，第三方再从微信下载到自己的服务器，会出现杂音（微信团队已经修复此问题，目前后台已优化上线）\n15.绑定父级域名，是否其子域名也是可用的（是的，合法的子域名在绑定父域名之后是完全支持的）\n16.在iOS微信6.1版本中，分享的图片外链不显示，只能显示公众号页面内链的图片或者微信服务器的图片，已在6.2中修复\n17.是否需要对低版本自己做兼容（jssdk都是兼容低版本的，不需要第三方自己额外做更多工作，但有的接口是6.0.2新引入的，只有新版才可调用）\n18.该公众号支付签名无效，无法发起该笔交易（请确保你使用的jweixin.js是官方线上版本，不仅可以减少用户流量，还有可能对某些bug进行修复，拷贝到第三方服务器中使用，官方将不对其出现的任何问题提供保障，具体支付签名算法可参考 JSSDK微信支付一栏）\n19.目前Android微信客户端不支持pushState的H5新特性，所以使用pushState来实现web app的页面会导致签名失败，此问题已在Android6.2中修复\n20.uploadImage在chooseImage的回调中有时候Android会不执行，Android6.2会解决此问题，若需支持低版本可以把调用uploadImage放在setTimeout中延迟100ms解决\n21.require subscribe错误说明你没有订阅该测试号，该错误仅测试号会出现\n22.getLocation返回的坐标在openLocation有偏差，因为getLocation返回的是gps坐标，openLocation打开的腾讯地图为火星坐标，需要第三方自己做转换，6.2版本开始已经支持直接获取火星坐标\n23.查看公众号（未添加）: "menuItem:addContact"不显示，目前仅有从公众号传播出去的链接才能显示，来源必须是公众号\n24.ICP备案数据同步有一天延迟，所以请在第二日绑定\n###附录6-DEMO页面和示例代码\nDEMO页面：\nhttp://demo.open.weixin.qq.com/jssdk\n\n示例代码：\nhttp://demo.open.weixin.qq.com/jssdk/sample.zip\n备注：链接中包含php、java、nodejs以及python的示例代码供第三方参考，第三方切记要对获取的accesstoken以及jsapi_ticket进行缓存以确保不会触发频率限制。', 1, '2016-05-02 16:35:27', 1, '2016-05-02 16:35:27', 1),
(77, 93, '\n* 记得早些年看过一本叫《编程之禅》的小书，是美国的编程大师Geoffrey James写的。书中描写了一位传说中的编程大师，关于他的寓言故事写的非常神秘有趣。尽管有对东方文化存在不了解的地方，甚至将禅宗思想与神秘的西藏还有什么忍者揉到一起。但梳理所讲述的内容都有深刻的寓意。那就是，除了理性的编程思维之外，还存在一种思想的感性升华，一种领悟编程本质的思想境界。这种思想境界就是编程之禅！\n* 其实，编程之禅无处不在。把代码排列得更美观些；让标识符的命名更合理些；让代码更直观和简洁一些；排出一个Bug之后的喜悦；解决一个难题后的领悟。无时无刻不体现着编程之禅。禅本来就如人饮水，冷暖自知。各自的感悟不同，但都能得到自己的快乐。\n* 编程之禅也是一种编程的态度，以一种轻松火大的心态对待编程。无需将编程看成一项工作，而将其看作一种生活方式。领悟了禅机的程序员把程序看成自身思想的延续，他们总喜欢以一种天真快乐的童心来看待现实世界。\n 编程之禅很难用言语来描述。编程之禅机就像生活经验一样不可以传授，只能由自己去经历，去体验，去思索，去领悟。编程之禅完全可以自行修炼，或渐悟，或顿悟，完全看自己的机缘。当然也可以求教禅师指点迷津。\n* 禅师从不会苦口婆心地教人该如何编程，如果人的内心还没有开悟，再多的外来灌输都是枉费心机。有人历经磨难苦苦思索而仍不得其法时，得遇禅师一语点化，或如当头棒喝间的猛然醒悟，或似醍醐灌顶般的豁然开朗，其喜悦的心情是不言而喻的。\n* 禅师自己也还在修炼，因为他知道编程之禅是没有止境的。禅师总是虚心地向所有人学习，因为他知道每一个都有值得学习的地方。禅师从不怕犯错误，当他意识到自己错了的时候，会毫不犹豫地承认自己的错误。禅师也从不为自己的错误辩解，他会在放下错误后立即轻松前进。\n* 禅师之所以能轻松快乐地编程，因为他放下了一切可以放下的东西。名利之争与禅师无关，禅师从来不把这些包袱背在身上。编程之禅从来不拘泥于某种固定的思维模式，禅师们也从来不把思维模式的包袱背在身上。禅师们甚至放下了自我，他们之所以能飞翔，是因为把自我看得很轻很轻。\n* 我们在学习编程的过程中，的确需要来一点清新的禅风。清新的禅风可以净化我们的编程心灵，让我们看到一个更广阔的天地，思想也会更深邃和睿智。我们不会纠缠于无聊的争执中，不会局限于固定的思维模式，也不会受困于狭隘的私心。这道清新的禅风可以让我们自由自在地飞翔在广阔的编程天空中，享受着编程的快乐。', 1, '2016-06-21 11:07:59', 1, '2016-09-06 11:08:02', 2),
(78, 66, '#该部分主要为BPM说明，一般情况不用看', 1, '2016-09-04 20:24:05', 1, '2016-09-04 20:24:05', 1),
(79, 94, '#常规功能的开发示例', 1, '2016-10-04 17:05:21', 1, '2016-10-04 17:05:21', 1),
(80, 95, '以下代码基本是固定模式，可以录制成宏。\n控制器：\n\n    public function actionDetail($id = 0)\n    {\n        $model = User::findModel($id);\n\n        if ($model->load(post()) {\n            if ($model->save()) {\n                return success();\n            } else {\n                return error($model);\n            }\n        }\n\n        return $this->render(''detail'', compact(''model''));\n    }\n\n视图：\n\n    <?php $form = self::beginForm() ?>\n    <?= $model->title(''用户'') ?>\n    <?= $form->field($model, ''username'') ?>\n    <?= $form->submit($model) ?>\n    <?php self::endForm() ?>\n\n    <script>\n    $(function () {\n        $("#submitBtn").click(function () {\n            $("form").ajaxSubmit($.config(''ajaxSubmit'', {\n                success: function (msg) {\n                    if (msg.state) {\n                        $.alert(msg.info || ''操作成功'', function () {\n                            parent.location.reload();\n                        });\n                    } else {\n                        $.alert(msg.info);\n                    }\n                }\n            }));\n            return false;\n        });\n    });\n    </script>\n', 1, '2016-10-04 17:29:34', 1, '2016-10-04 17:29:34', 1),
(81, 100, '1.类名全小写，多单词时以 - 号分隔，如：\n`<div class="main-nav"></div>`\n2.每个层级缩进4个空格，每个层级下如果不是标签，则需要换行显示如：\n\n\n    <ul>\n        <li>a</li>\n        <li>\n            <span>b</span>\n        </li>\n    </ul>\n\n3.不允许使用style属性\n4. a标签的href属性设为“#”', 1, '2016-10-25 15:47:44', 1, '2016-10-25 15:47:44', 1),
(82, 101, '1. 变量驼峰式命名\n2. 每条语句最后必须加上分号\n3. 多条声明语句采用如下格式\n    \n    \n    var a = 1,\n        b = 2,\n        c = 3;\n4.存放jquery对象的变量必须以 $ 符作为前缀命名，如：`$a = $(".link");`\n5.事件绑定方法必须保存当前触发元素到变量中（function关键字右边必须含有一个空格），如：\n\n\n\n    $(".container").on(''click'', ''.btn'', function () {\n        var $this = $(this);\n        // other code...\n    });\n6.标签中存放的变量必须放到data属性中，jquery中使用data方法来获取，如：\n\n\n    Html:\n    <input type="text" data-key="1" id="userInput">\n    Js:\n    var key = $("#userInput").data(''key'');', 1, '2016-10-26 10:40:27', 1, '2016-10-26 10:40:27', 1),
(83, 102, '    1.书写规范，{ 前和 ：后需要空格，每条规则后要加分号，如：\n    .title {\n        color: red;\n    }\n    2.去掉小数点前的 0,如：\n    .font-size: .8em;\n    3.除了常用的缩写，其他尽量不缩写\n    4.16进制颜色代码缩写，如：color: #ebc;\n    5.不要随意使用id属性设置css样式', 1, '2016-10-26 10:48:26', 1, '2016-10-26 10:52:54', 1),
(84, 96, '以下代码基本是固定模式，可以录制成宏。\n控制器：\n\n    public function actionList()\n    {\n        $query = (new User)->search();\n\n        $html = $query->getTable([\n            ''id'',\n            ''username'' => [''search'' => true],\n            ''realname'' => [''search'' => true, ''type'' => ''text''],\n            ''roles'' => [''header'' => ''角色'', ''value'' => function ($user) {\n                $roles = [];\n                foreach ($user->roles as $role) {\n                    $roles[] = Html::likeSpan($role->item_name);\n                }\n                return implode(''，'', $roles);\n            }],\n            ''state'' => [''search'' => ''select''],\n            [''type'' => [''edit'' => ''member'', ''delete'' => ''ajaxDeleteMember'']]\n        ], [\n            ''addBtn'' => [''member'' => ''添加管理员'']\n        ]);\n\n        return $this->render(''list'', compact(''html''));\n    }\n\n视图：\n\n    <?= html ?>\n\n注：控制器中$query->getTable()方法的具体使用，可参看 common\\widgets\\Table 中的说明\n', 1, '2016-10-26 10:59:32', 1, '2016-10-26 10:59:32', 1),
(85, 97, '    $query = User::find()->join(''posts'')->where(''state'' => 1)->limit(5)->orderBy(''id'');\n    $count = $query->count();\n    $model = $query->one();\n    $data = $query->all();', 1, '2016-10-26 11:07:58', 1, '2016-10-26 11:07:58', 1),
(86, 98, '> 本章将使用日期插件资源包作为例子说明一些常规js插件的使用方式\n所有js插件的资源包都放在 common\\assets 目录下\n\n1. 引入资源包（如以下方式是在视图中直接引入日期插件资源包）\n\n\n     <?php common\\assets\\DateAsset::register($this) ?>\n2.通过指定class名使用（如下使用"datepicker"class，即可使该input框点击后出现日期控件）\n\n    <input type="text" class="datepicker">\n3.如需定制该插件的参数，使用如下方式\n\n    <script>\n    ''datepicker''.config({\n        dateFormat: ''yy-mm-dd''\n    });\n    </script>\n\n> 由于每个js插件的实际用途不同，所以 common\\assets 下的类并不都是如上方式使用\n\n如 common\\assets\\JqueryFormAsset，是Ajax提交表单插件\n页面中引入资源包后，按如下方式进行使用：\n    \n    $("form").ajaxSubmit($.config(''ajaxSubmit'', {\n        success: function (msg) {\n            if (msg.state) {\n                $.alert(''操作成功'', function () {\n                    parent.location.reload();\n                });\n            } else {\n                $.alert(msg.info);\n            }\n        }\n    }));', 1, '2016-10-26 11:25:00', 1, '2016-10-26 11:25:00', 1),
(87, 103, '> 统一使用 Navicat 工具操作mysql\n\n1. 数据库名和项目名一致，字符集统一使用 `utf8 -- UTF-8 Unicode`， 排序规则使用默认值（即不用手动选择）\n2. 表名全小写，用下划线连接单词，表名使用单词的单数形式\n3. 每个表必须设有主键，除了拓展表外，主键一律设置为`id`，并且设置自增、非null\n4. 如`user`表的拓展表`user_extend`，主键为`user_id`\n5. 非必填字段必须设置默认值（除了诸如text类型不能设置外），必填字段不必设置默认值\n6. 表示状态的字段一律使用`tinyint`类型，使用正数表示正面状态， 负数表示负面状态\n    如果仅表示有效、无效，则使用`1`表示有效，`-1`表示无效\n7. 预设字段在程序中都会进行相应的自动处理，根据情况设置\n    \n    \n    state: 表示逻辑删除的状态，设置该字段表示该表的所有记录均为逻辑删除，即更改state的值\n    created_at：表示创建时间，类型为datetime\n    created_by：表示创建人ID，类型为int\n    updated_at：表示修改时间\n    updated_by：表示修改人ID', 1, '2016-10-26 11:49:15', 1, '2016-10-26 11:49:15', 1);

-- --------------------------------------------------------

--
-- 表的结构 `manual_collection`
--

CREATE TABLE IF NOT EXISTS `manual_collection` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `menu_id` int(11) NOT NULL COMMENT '收藏的菜单ID',
  `state` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='手册收藏表';

-- --------------------------------------------------------

--
-- 表的结构 `manual_menu`
--

CREATE TABLE IF NOT EXISTS `manual_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '菜单名',
  `pid` int(11) DEFAULT '0' COMMENT '父ID',
  `level` smallint(6) DEFAULT '1' COMMENT '层级',
  `code` varchar(250) DEFAULT NULL COMMENT '从属排序值',
  `sort` int(11) DEFAULT '1' COMMENT '排序值',
  `child_num` int(11) DEFAULT '0' COMMENT '子集数',
  `url` varchar(250) DEFAULT '' COMMENT '跳转链接',
  `is_show` tinyint(4) DEFAULT '1' COMMENT '是否显示',
  `category` tinyint(4) DEFAULT '1' COMMENT '菜单分类',
  `state` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COMMENT='手册菜单表';

--
-- 转存表中的数据 `manual_menu`
--

INSERT INTO `manual_menu` (`id`, `name`, `pid`, `level`, `code`, `sort`, `child_num`, `url`, `is_show`, `category`, `state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(4, 'PHP 代码规范', 0, 1, '1', 1, 6, '', 1, 1, 1, '2015-12-09 16:41:05', 1, '2016-01-07 17:52:50', 1),
(26, '通用规范', 4, 2, '1-1', 0, 0, '', 1, 1, 1, '2016-01-07 17:55:40', 1, '2016-01-07 17:56:46', 1),
(27, '控制器', 4, 2, '1-2', 1, 0, '', 1, 1, 1, '2016-01-07 17:55:55', 1, '2016-01-07 17:58:46', 1),
(28, '模型', 4, 2, '1-3', 2, 0, '', 1, 1, 1, '2016-01-07 17:58:52', 1, '2016-01-07 17:58:52', 1),
(29, '视图', 4, 2, '1-4', 3, 0, '', 1, 1, 1, '2016-01-07 17:59:02', 1, '2016-01-07 17:59:02', 1),
(30, '数据库', 4, 2, '1-5', 4, 0, '', 1, 1, 1, '2016-01-07 17:59:13', 1, '2016-01-07 17:59:13', 1),
(31, '注释', 4, 2, '1-6', 5, 0, '', 1, 1, 1, '2016-01-07 17:59:21', 1, '2016-01-07 17:59:21', 1),
(66, 'BPM', 0, 1, '7', 4, 1, '', 1, 1, 1, '2016-03-08 14:56:51', 1, '2016-03-08 14:56:51', 1),
(67, '用户使用手册', 66, 2, '7-1', 67, 0, '', 1, 1, 1, '2016-03-08 14:57:26', 1, '2016-03-08 14:57:26', 1),
(69, 'mysql开发规范', 0, 1, '8', 5, 0, '', 1, 1, 1, '2016-03-25 19:05:20', 1, '2016-08-10 10:58:30', 1),
(70, '服务器常见故障排查方法', 0, 1, '9', 6, 0, '', 1, 1, 1, '2016-03-25 19:12:39', 1, '2016-03-25 19:13:38', 1),
(71, '微信公众平台开发', 0, 1, '10', 7, 6, '', 1, 1, 1, '2016-05-02 09:35:41', 1, '2016-05-02 09:35:41', 1),
(72, '常识普及', 71, 2, '10-1', 72, 0, '', 1, 1, 1, '2016-05-02 15:54:16', 1, '2016-05-02 15:54:16', 1),
(73, '接入指南', 71, 2, '10-2', 73, 0, '', 1, 1, 1, '2016-05-02 16:03:15', 1, '2016-05-02 16:03:15', 1),
(74, '获取access_token', 71, 2, '10-3', 74, 0, '', 1, 1, 1, '2016-05-02 16:05:05', 1, '2016-05-02 16:05:05', 1),
(75, '自定义菜单', 71, 2, '10-4', 75, 5, '', 1, 1, 1, '2016-05-02 16:08:44', 1, '2016-05-02 16:08:44', 1),
(76, '自定义菜单创建接口', 75, 3, '10-4-1', 76, 0, '', 1, 1, 1, '2016-05-02 16:09:01', 1, '2016-05-02 16:09:01', 1),
(77, '自定义菜单删除', 75, 3, '10-4-2', 77, 0, '', 1, 1, 1, '2016-05-02 16:12:07', 1, '2016-05-02 16:12:07', 1),
(78, '自定义菜单查询', 75, 3, '10-4-3', 78, 0, '', 1, 1, 1, '2016-05-02 16:12:41', 1, '2016-05-02 16:12:41', 1),
(79, '自定义菜单推送', 75, 3, '10-4-4', 79, 0, '', 1, 1, 1, '2016-05-02 16:14:04', 1, '2016-05-02 16:14:04', 1),
(80, '获取自定义菜单配置', 75, 3, '10-4-5', 80, 0, '', 1, 1, 1, '2016-05-02 16:17:43', 1, '2016-05-02 16:17:43', 1),
(81, '消息管理', 71, 2, '10-5', 81, 2, '', 1, 1, 1, '2016-05-02 16:19:44', 1, '2016-05-02 16:19:44', 1),
(82, '接收消息-普通消息', 81, 3, '10-5-1', 82, 0, '', 1, 1, 1, '2016-05-02 16:19:56', 1, '2016-05-02 16:23:07', 1),
(83, '接收消息-事件消息', 81, 3, '10-5-2', 83, 0, '', 1, 1, 1, '2016-05-02 16:22:58', 1, '2016-05-02 16:22:58', 1),
(84, '微信网页开发', 71, 2, '10-6', 84, 2, '', 1, 1, 1, '2016-05-02 16:26:14', 1, '2016-05-02 16:26:14', 1),
(85, '微信网页授权', 84, 3, '10-6-1', 85, 0, '', 1, 1, 1, '2016-05-02 16:26:25', 1, '2016-05-02 16:26:25', 1),
(86, '微信JS-SDK说明', 84, 3, '10-6-2', 86, 0, '', 1, 1, 1, '2016-05-02 16:30:12', 1, '2016-05-02 16:30:12', 1),
(93, '编程之禅', 0, 1, '11', 0, 0, '', 1, 1, 1, '2016-06-21 10:13:26', 1, '2016-06-21 10:13:26', 1),
(94, '项目开发文档', 0, 1, '7', 3, 5, '', 1, 1, 1, '2016-10-04 17:00:31', 1, '2016-10-04 17:00:31', 1),
(95, '表单 - Form', 94, 2, '7-1', 0, 0, '', 1, 1, 1, '2016-10-04 17:00:59', 1, '2016-10-04 17:01:35', 1),
(96, '列表 - List', 94, 2, '7-2', 1, 0, '', 1, 1, 1, '2016-10-04 17:01:24', 1, '2016-10-04 17:01:43', 1),
(97, '查询 - Query', 94, 2, '7-3', 2, 0, '', 1, 1, 1, '2016-10-04 17:03:11', 1, '2016-10-04 17:03:11', 1),
(98, 'JS插件 - Plugin', 94, 2, '7-4', 3, 0, '', 1, 1, 1, '2016-10-04 17:04:15', 1, '2016-10-04 17:04:15', 1),
(99, '前段代码规范', 0, 1, '8', 2, 3, '', 1, 1, 1, '2016-10-25 15:36:23', 1, '2016-10-25 15:36:58', 1),
(100, 'HTML', 99, 2, '8-1', 100, 0, '', 1, 1, 1, '2016-10-25 15:37:04', 1, '2016-10-25 15:37:04', 1),
(101, 'JS', 99, 2, '8-2', 101, 0, '', 1, 1, 1, '2016-10-25 15:37:09', 1, '2016-10-25 15:37:09', 1),
(102, 'CSS', 99, 2, '8-3', 102, 0, '', 1, 1, 1, '2016-10-25 15:37:16', 1, '2016-10-25 15:37:16', 1),
(103, '建表规范', 94, 2, '7-5', 103, 0, '', 1, 1, 1, '2016-10-26 11:33:52', 1, '2016-10-26 11:33:52', 1);

-- --------------------------------------------------------

--
-- 表的结构 `manual_version`
--

CREATE TABLE IF NOT EXISTS `manual_version` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL COMMENT '文章ID',
  `content` mediumtext COMMENT '内容',
  `action` tinyint(4) DEFAULT '1' COMMENT '操作类型：1创建，2更新，3恢复，4删除',
  `state` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='手册版本表';

--
-- 转存表中的数据 `manual_version`
--

INSERT INTO `manual_version` (`id`, `menu_id`, `content`, `action`, `state`, `created_at`, `created_by`) VALUES
(1, 93, '# 编程之禅\n* 记得早些年看过一本叫《编程之禅》的小书，是美国的编程大师Geoffrey James写的。书中描写了一位传说中的编程大师，关于他的寓言故事写的非常神秘有趣。尽管有对东方文化存在不了解的地方，甚至将禅宗思想与神秘的西藏还有什么忍者揉到一起。但梳理所讲述的内容都有深刻的寓意。那就是，除了理性的编程思维之外，还存在一种思想的感性升华，一种领悟编程本质的思想境界。这种思想境界就是编程之禅！\n* 其实，编程之禅无处不在。把代码排列得更美观些；让标识符的命名更合理些；让代码更直观和简洁一些；排出一个Bug之后的喜悦；解决一个难题后的领悟。无时无刻不体现着编程之禅。禅本来就如人饮水，冷暖自知。各自的感悟不同，但都能得到自己的快乐。\n* 编程之禅也是一种编程的态度，以一种轻松火大的心态对待变成。无需将编程看成一项工作，而将其看作一种生活方式。领悟了禅机的程序员把程序看成自身思想的延续，他们总喜欢以一种天真快乐的童心来看待现实世界。\n 编程之禅很难用言语来描述。编程之禅机就像生活经验一样不可以传授，只能由自己去经历，去体验，去思索，去领悟。编程之禅完全可以自行修炼，或渐悟，或顿悟，完全看自己的机缘。当然也可以求教禅师指点迷津。\n* 禅师从不会苦口婆心地教人该如何编程，如果人的内心还没有开悟，再多的外来灌输都是枉费心机。有人历经磨难苦苦思索而仍不得其法时，得遇禅师一语点化，或如当头棒喝间的猛然醒悟，或似醍醐灌顶般的豁然开朗，其喜悦的心情是不言而喻的。\n* 禅师自己也还在修炼，因为他知道编程之禅是没有止境的。禅师总是虚心地向所有人学习，因为他知道每一个都有值得学习的地方。禅师从不怕犯错误，当他意识到自己错了的时候，会毫不犹豫地承认自己的错误。禅师也从不为自己的错误辩解，他会在放下错误后立即轻松前进。\n* 禅师之所以能轻松快乐地编程，因为他放下了一切可以放下的东西。名利之争与禅师无关，禅师从来不把这些包袱背在身上。编程之禅从来不拘泥于某种固定的思维模式，禅师们也从来不把思维模式的包袱背在身上。禅师们甚至放下了自我，他们之所以能飞翔，是因为把自我看得很轻很轻。\n* 我们在学习编程的过程中，的确需要来一点清新的禅风。清新的禅风可以净化我们的编程心灵，让我们看到一个更广阔的天地，思想也会更深邃和睿智。我们不会纠缠于无聊的争执中，不会局限于固定的思维模式，也不会受困于狭隘的私心。这道清新的禅风可以让我们自由自在地飞翔在广阔的编程天空中，享受着编程的快乐。', 2, 1, '2016-09-04 19:35:03', 1),
(2, 93, '# 编程之禅\n* 记得早些年看过一本叫《编程之禅》的小书，是美国的编程大师Geoffrey James写的。书中描写了一位传说中的编程大师，关于他的寓言故事写的非常神秘有趣。尽管有对东方文化存在不了解的地方，甚至将禅宗思想与神秘的西藏还有什么忍者揉到一起。但梳理所讲述的内容都有深刻的寓意。那就是，除了理性的编程思维之外，还存在一种思想的感性升华，一种领悟编程本质的思想境界。这种思想境界就是编程之禅！\n* 其实，编程之禅无处不在。把代码排列得更美观些；让标识符的命名更合理些；让代码更直观和简洁一些；排出一个Bug之后的喜悦；解决一个难题后的领悟。无时无刻不体现着编程之禅。禅本来就如人饮水，冷暖自知。各自的感悟不同，但都能得到自己的快乐。\n* 编程之禅也是一种编程的态度，以一种轻松火大的心态对待编程。无需将编程看成一项工作，而将其看作一种生活方式。领悟了禅机的程序员把程序看成自身思想的延续，他们总喜欢以一种天真快乐的童心来看待现实世界。\n 编程之禅很难用言语来描述。编程之禅机就像生活经验一样不可以传授，只能由自己去经历，去体验，去思索，去领悟。编程之禅完全可以自行修炼，或渐悟，或顿悟，完全看自己的机缘。当然也可以求教禅师指点迷津。\n* 禅师从不会苦口婆心地教人该如何编程，如果人的内心还没有开悟，再多的外来灌输都是枉费心机。有人历经磨难苦苦思索而仍不得其法时，得遇禅师一语点化，或如当头棒喝间的猛然醒悟，或似醍醐灌顶般的豁然开朗，其喜悦的心情是不言而喻的。\n* 禅师自己也还在修炼，因为他知道编程之禅是没有止境的。禅师总是虚心地向所有人学习，因为他知道每一个都有值得学习的地方。禅师从不怕犯错误，当他意识到自己错了的时候，会毫不犹豫地承认自己的错误。禅师也从不为自己的错误辩解，他会在放下错误后立即轻松前进。\n* 禅师之所以能轻松快乐地编程，因为他放下了一切可以放下的东西。名利之争与禅师无关，禅师从来不把这些包袱背在身上。编程之禅从来不拘泥于某种固定的思维模式，禅师们也从来不把思维模式的包袱背在身上。禅师们甚至放下了自我，他们之所以能飞翔，是因为把自我看得很轻很轻。\n* 我们在学习编程的过程中，的确需要来一点清新的禅风。清新的禅风可以净化我们的编程心灵，让我们看到一个更广阔的天地，思想也会更深邃和睿智。我们不会纠缠于无聊的争执中，不会局限于固定的思维模式，也不会受困于狭隘的私心。这道清新的禅风可以让我们自由自在地飞翔在广阔的编程天空中，享受着编程的快乐。', 2, 1, '2016-09-04 19:35:23', 1),
(3, 4, '## PHP 代码规范\n\n> 目标：\n1. 建立节操感、责任感\n2. 减少阅读障碍，降低维护成本\n3. 遵循统一模式的代码更易于扩展\n', 2, 1, '2016-09-04 19:37:53', 1),
(4, 26, '>代码格式采用PSR规范，以下是该规范的简练要点\n\n1. 所有变量名尽量控制不出现拼音类型，使用尽量语义化、简单易懂的英文命名\n2. 所有变量都用驼峰法明明，私有方法、私有变量都采用下划线开头，如：`private function _getName()`\n3. `,`号和`;`号后要加空格，其他操作符、关键字前后都要加空格\n4. 双引号中的变量必须使用{}包起来；如果大段文本中包含变量，则采用分界符`<<<EOT`\n5. 所有SQL语句的关键字全部大写，并且必须美化SQL语句格式\n6. if 下即使只有一条语句，也必须用花括号包起来\n7. PHP文件禁止使用`?>`结束标签，每个php文件最后必须是空行\n8. 常量名必须全大写，用下划线分割单词', 2, 1, '2016-09-04 19:45:42', 1),
(5, 27, '1. action名和视图名保持一致，如 `function actionViewArticle()` 对应渲染的视图为 `$this->render(''viewArticle'')`\n2. 所有纯ajax请求处理的方法全部以ajax为前缀命名，如 `actionAjaxCreate()`，form表单提交除外\n3. Ajax返回使用`self::success`和`self::error()`，如果是输出模型错误，直接self::error($model)即可\n4. 表单的创建与修改，尽量参考以下代码所示：\n\n\n    public function actionUser($id = null)\n    {\n        $user = User::findModel($id);\n        if ($user->load($_POST)) {\n            if ($user->save()) {\n                return self::success();\n            } else {\n                return self::error($user);\n            }\n        }\n        return $this->render(''user'', compact(''user''));\n    }', 2, 1, '2016-09-04 19:47:26', 1),
(6, 27, '1. action名和视图名保持一致，如 `function actionViewArticle()` 对应渲染的视图为 `$this->render(''viewArticle'')`\n2. 所有纯ajax请求处理的方法全部以ajax为前缀命名，如 `actionAjaxCreate()`，form表单提交除外\n3. Ajax返回使用`self::success`和`self::error()`，如果是输出模型错误，直接self::error($model)即可\n4. 表单的创建与修改，参考以下代码：\n\n\n    public function actionUser($id = null)\n    {\n        $user = User::findModel($id);\n        if ($user->load($_POST)) {\n            if ($user->save()) {\n                return self::success();\n            } else {\n                return self::error($user);\n            }\n        }\n        return $this->render(''user'', compact(''user''));\n    }\n5.列表的创建，参考以下代码：\n\n    public function actionList()\n    {\n        $query = (new User)->search();\n        $html = $query->getTable([\n            ''id'',\n            ''name'' => ''姓名'',\n            ''age'' => function ($row) {\n                return $row[''age''] . ''岁'';\n            },\n            ''reg_time'' => [''header'' => ''注册日期'', ''value'' => function ($row) {\n                return date(''Y-m-d H:i:s'', $row[''reg_time'']);\n            }],\n            [''type'' => [''edit'', ''delete'' => ''deleteUser'']]\n        ]);\n        return $this->render(''list'', compact(''html''));\n    }', 2, 1, '2016-09-04 19:53:40', 1),
(7, 28, '1. 模型必须使用生成工具生成！\n2. 表示状态的字段必须使用生成工具生成对应的map方法和value方法，并为该状态字段设置类常量\n3. 每个列表条件都采用一个模型方法进行封装，以便控制器调用，如下所示：\n\n\n    public function listQuery()\n    {\n        return $this->search()\n                    ->with([''user'', ''post'']\n                    ->andWhere([''user.state'' => User::STATE_VALID])\n                    ->orderBy(''post.id DESC'');\n    }\n4.当有字段变动时，同一个模型可反复生成，但必须确保公共父类模型中的`rules()`、`attributeLabels()`、`search()`方法没被修改过，否则所做的修改会被覆盖！\n5.为每一个表单设置一个场景名，并在`scenario()`方法中设定该场景中验证哪些字段。', 2, 1, '2016-09-04 20:08:41', 1),
(8, 29, '1. 无特殊情况，不允许直接加载js和css文件，而应使用Yii2的`AssetBundle`对象进行静态资源管理\n2. 使用`if/endif` 语法代替花括号语法\n3. 使用`<?= $name ?>` 代替 `<?php echo $name; ?>`\n4. 无特殊情况，禁止使用`style`属性和`on`系列事件属性\n5. a标签空链接使用href="javascript:;"，禁止使用href="#"\n6. 表单代码按照以下代码所示：\n\n\n    <?php $form = self::beginForm() ?>\n    <?= $model->title(''表单标题'') ?>\n    <?= $form->field($model, ''name'') ?>\n    <?= $form->field($model, ''state'')->radioList() ?>\n    <?= $form->field($model, ''password'')->passwordInput() ?>    \n    <?= $form->submit(''提交按钮名称'') ?>\n    <?php self::endForm() ?>\n', 2, 1, '2016-09-04 20:12:06', 1),
(9, 30, '1. 主键必须是id\n2. 字段名和表名用下划线分割\n3. 每个表的 `created_at、created_by、updated_at、updated_by`等字段，分别表示创建时间、创建人id、修改时间、修改人；如无必要，不要主动修改这些字段的值，他们会被框架自动处理\n4. 如果表中含有`state`字段，表示该表采用逻辑删除规则，则查询时必须加上诸如`state=User::STATE_VALID`条件，来确保逻辑的一致性', 2, 1, '2016-09-04 20:15:23', 1),
(10, 30, '1. 主键必须是id\n2. 字段名和表名用下划线分割\n3. 每个表的 `created_at、created_by、updated_at、updated_by`等字段，分别表示创建时间、创建人id、修改时间、修改人；如无必要，不要主动修改这些字段的值，他们会被框架自动处理\n4. 如果表中含有`state`字段，表示该表采用逻辑删除规则，则查询时必须加上诸如`state=User::STATE_VALID`的条件，来确保逻辑的一致性', 2, 1, '2016-09-04 20:18:07', 1),
(11, 31, '>采用PHPDoc文档注释标准\n\n1. 所填写的每个注释标记，必须表达清楚，不然不如不写\n2. 每个公共方法至少要有最基础的汉字说明\n3. 后台的公共action方法，使用自定义的标记 `@authname`来注明权限名称', 2, 1, '2016-09-04 20:23:23', 1),
(12, 66, '#该部分主要为BPM说明，一般情况不用看', 2, 1, '2016-09-04 20:24:05', 1),
(13, 93, '\n* 记得早些年看过一本叫《编程之禅》的小书，是美国的编程大师Geoffrey James写的。书中描写了一位传说中的编程大师，关于他的寓言故事写的非常神秘有趣。尽管有对东方文化存在不了解的地方，甚至将禅宗思想与神秘的西藏还有什么忍者揉到一起。但梳理所讲述的内容都有深刻的寓意。那就是，除了理性的编程思维之外，还存在一种思想的感性升华，一种领悟编程本质的思想境界。这种思想境界就是编程之禅！\n* 其实，编程之禅无处不在。把代码排列得更美观些；让标识符的命名更合理些；让代码更直观和简洁一些；排出一个Bug之后的喜悦；解决一个难题后的领悟。无时无刻不体现着编程之禅。禅本来就如人饮水，冷暖自知。各自的感悟不同，但都能得到自己的快乐。\n* 编程之禅也是一种编程的态度，以一种轻松火大的心态对待编程。无需将编程看成一项工作，而将其看作一种生活方式。领悟了禅机的程序员把程序看成自身思想的延续，他们总喜欢以一种天真快乐的童心来看待现实世界。\n 编程之禅很难用言语来描述。编程之禅机就像生活经验一样不可以传授，只能由自己去经历，去体验，去思索，去领悟。编程之禅完全可以自行修炼，或渐悟，或顿悟，完全看自己的机缘。当然也可以求教禅师指点迷津。\n* 禅师从不会苦口婆心地教人该如何编程，如果人的内心还没有开悟，再多的外来灌输都是枉费心机。有人历经磨难苦苦思索而仍不得其法时，得遇禅师一语点化，或如当头棒喝间的猛然醒悟，或似醍醐灌顶般的豁然开朗，其喜悦的心情是不言而喻的。\n* 禅师自己也还在修炼，因为他知道编程之禅是没有止境的。禅师总是虚心地向所有人学习，因为他知道每一个都有值得学习的地方。禅师从不怕犯错误，当他意识到自己错了的时候，会毫不犹豫地承认自己的错误。禅师也从不为自己的错误辩解，他会在放下错误后立即轻松前进。\n* 禅师之所以能轻松快乐地编程，因为他放下了一切可以放下的东西。名利之争与禅师无关，禅师从来不把这些包袱背在身上。编程之禅从来不拘泥于某种固定的思维模式，禅师们也从来不把思维模式的包袱背在身上。禅师们甚至放下了自我，他们之所以能飞翔，是因为把自我看得很轻很轻。\n* 我们在学习编程的过程中，的确需要来一点清新的禅风。清新的禅风可以净化我们的编程心灵，让我们看到一个更广阔的天地，思想也会更深邃和睿智。我们不会纠缠于无聊的争执中，不会局限于固定的思维模式，也不会受困于狭隘的私心。这道清新的禅风可以让我们自由自在地飞翔在广阔的编程天空中，享受着编程的快乐。', 2, 1, '2016-09-06 11:08:02', 2),
(14, 27, '1. action名和视图名保持一致，如 `function actionViewArticle()` 对应渲染的视图为 `$this->render(''viewArticle'')`\n2. 所有纯ajax请求处理的方法全部以ajax为前缀命名，如 `actionAjaxCreate()`，form表单提交除外\n3. Ajax返回使用`return self::success()`和`return self::error()`，如果是输出模型错误，则`return self::error($model)`即可\n4. 表单的创建与修改，参考以下代码：\n\n\n    public function actionUser($id = null)\n    {\n        $user = User::findModel($id);\n        if ($user->load($_POST)) {\n            if ($user->save()) {\n                return self::success();\n            } else {\n                return self::error($user);\n            }\n        }\n        return $this->render(''user'', compact(''user''));\n    }\n5.列表的创建，参考以下代码：\n\n    public function actionList()\n    {\n        $query = (new User)->search();\n        $html = $query->getTable([\n            ''id'',\n            ''name'' => ''姓名'',\n            ''age'' => function ($row) {\n                return $row[''age''] . ''岁'';\n            },\n            ''reg_time'' => [''header'' => ''注册日期'', ''value'' => function ($row) {\n                return date(''Y-m-d H:i:s'', $row[''reg_time'']);\n            }],\n            [''type'' => [''edit'', ''delete'' => ''deleteUser'']]\n        ]);\n        return $this->render(''list'', compact(''html''));\n    }', 2, 1, '2016-09-06 11:13:20', 2),
(15, 94, '', 1, 1, '2016-10-04 17:00:31', 1),
(16, 95, '', 1, 1, '2016-10-04 17:00:59', 1),
(17, 96, '', 1, 1, '2016-10-04 17:01:24', 1),
(18, 97, '', 1, 1, '2016-10-04 17:03:11', 1),
(19, 98, '', 1, 1, '2016-10-04 17:04:15', 1),
(20, 94, '#常规功能的开发示例', 2, 1, '2016-10-04 17:05:21', 1),
(21, 95, '以下代码基本是固定模式，可以录制成宏。\n控制器：\n\n    public function actionDetail($id = 0)\n    {\n        $model = User::findModel($id);\n\n        if ($model->load(post()) {\n            if ($model->save()) {\n                return success();\n            } else {\n                return error($model);\n            }\n        }\n\n        return $this->render(''detail'', compact(''model''));\n    }\n\n视图：\n\n    <?php $form = self::beginForm() ?>\n    <?= $model->title(''用户'') ?>\n    <?= $form->field($model, ''username'') ?>\n    <?= $form->submit($model) ?>\n    <?php self::endForm() ?>\n\n    <script>\n    $(function () {\n        $("#submitBtn").click(function () {\n            $("form").ajaxSubmit($.config(''ajaxSubmit'', {\n                success: function (msg) {\n                    if (msg.state) {\n                        $.alert(msg.info || ''操作成功'', function () {\n                            parent.location.reload();\n                        });\n                    } else {\n                        $.alert(msg.info);\n                    }\n                }\n            }));\n            return false;\n        });\n    });\n    </script>\n', 2, 1, '2016-10-04 17:29:34', 1),
(22, 99, '', 1, 1, '2016-10-25 15:36:23', 1),
(23, 100, '', 1, 1, '2016-10-25 15:37:04', 1),
(24, 101, '', 1, 1, '2016-10-25 15:37:09', 1),
(25, 102, '', 1, 1, '2016-10-25 15:37:16', 1),
(26, 100, '1.类名全小写，多单词时以 - 号分隔，如：\n`<div class="main-nav"></div>`\n2.每个层级缩进4个空格，每个层级下如果不是标签，则需要换行显示如：\n\n\n    <ul>\n        <li>a</li>\n        <li>\n            <span>b</span>\n        </li>\n    </ul>\n\n3.不允许使用style属性\n4. a标签的href属性设为“#”', 2, 1, '2016-10-25 15:47:44', 1),
(27, 101, '1. 变量驼峰式命名\n2. 每条语句最后必须加上分号\n3. 多条声明语句采用如下格式\n    \n    \n    var a = 1,\n        b = 2,\n        c = 3;\n4.存放jquery对象的变量必须以 $ 符作为前缀命名，如：`$a = $(".link");`\n5.事件绑定方法必须保存当前触发元素到变量中（function关键字右边必须含有一个空格），如：\n\n\n\n    $(".container").on(''click'', ''.btn'', function () {\n        var $this = $(this);\n        // other code...\n    });\n6.标签中存放的变量必须放到data属性中，jquery中使用data方法来获取，如：\n\n\n    Html:\n    <input type="text" data-key="1" id="userInput">\n    Js:\n    var key = $("#userInput").data(''key'');', 2, 1, '2016-10-26 10:40:27', 1),
(28, 102, '    1.书写规范，{ 前和 ：后需要空格，每条规则后要加分号，如：\n    .title {\n        color: red;\n    }\n    2.去掉小数点前的 0,如：\n    .font-size: .8em;\n    3.简写命名，必须要让人能看懂你的命名才能简写，如：\n    navigation -> nav\n    button -> btn\n    4.16进制颜色代码缩写，如：color: #ebc;', 2, 1, '2016-10-26 10:48:26', 1),
(29, 102, '    1.书写规范，{ 前和 ：后需要空格，每条规则后要加分号，如：\n    .title {\n        color: red;\n    }\n    2.去掉小数点前的 0,如：\n    .font-size: .8em;\n    3.除了常用的缩写，其他尽量不缩写\n    4.16进制颜色代码缩写，如：color: #ebc;\n    5.不要随意使用id属性设置css样式', 2, 1, '2016-10-26 10:52:54', 1),
(30, 96, '以下代码基本是固定模式，可以录制成宏。\n控制器：\n\n    public function actionList()\n    {\n        $query = (new User)->search();\n\n        $html = $query->getTable([\n            ''id'',\n            ''username'' => [''search'' => true],\n            ''realname'' => [''search'' => true, ''type'' => ''text''],\n            ''roles'' => [''header'' => ''角色'', ''value'' => function ($user) {\n                $roles = [];\n                foreach ($user->roles as $role) {\n                    $roles[] = Html::likeSpan($role->item_name);\n                }\n                return implode(''，'', $roles);\n            }],\n            ''state'' => [''search'' => ''select''],\n            [''type'' => [''edit'' => ''member'', ''delete'' => ''ajaxDeleteMember'']]\n        ], [\n            ''addBtn'' => [''member'' => ''添加管理员'']\n        ]);\n\n        return $this->render(''list'', compact(''html''));\n    }\n\n视图：\n\n    <?= html ?>\n\n注：控制器中$query->getTable()方法的具体使用，可参看 common\\widgets\\Table 中的说明\n', 2, 1, '2016-10-26 10:59:32', 1),
(31, 97, '    $query = User::find()->join(''posts'')->where(''state'' => 1)->limit(5)->orderBy(''id'');\n    $count = $query->count();\n    $model = $query->one();\n    $data = $query->all();', 2, 1, '2016-10-26 11:07:58', 1),
(32, 98, '> 本章将使用日期插件资源包作为例子说明一些常规js插件的使用方式\n所有js插件的资源包都放在 common\\assets 目录下\n\n1. 引入资源包（如以下方式是在视图中直接引入日期插件资源包）\n\n\n     <?php common\\assets\\DateAsset::register($this) ?>\n2.通过指定class名使用（如下使用"datepicker"class，即可使该input框点击后出现日期控件）\n\n    <input type="text" class="datepicker">\n3.如需定制该插件的参数，使用如下方式\n\n    <script>\n    ''datepicker''.config({\n        dateFormat: ''yy-mm-dd''\n    });\n    </script>\n\n> 由于每个js插件的实际用途不同，所以 common\\assets 下的类并不都是如上方式使用\n\n如 common\\assets\\JqueryFormAsset，是Ajax提交表单插件\n页面中引入资源包后，按如下方式进行使用：\n    \n    $("form").ajaxSubmit($.config(''ajaxSubmit'', {\n        success: function (msg) {\n            if (msg.state) {\n                $.alert(''操作成功'', function () {\n                    parent.location.reload();\n                });\n            } else {\n                $.alert(msg.info);\n            }\n        }\n    }));', 2, 1, '2016-10-26 11:25:00', 1),
(33, 103, '', 1, 1, '2016-10-26 11:33:52', 1),
(34, 103, '> 统一使用 Navicat 工具操作mysql\n\n1. 数据库名和项目名一致，字符集统一使用 `utf8 -- UTF-8 Unicode`， 排序规则使用默认值（即不用手动选择）\n2. 表名全小写，用下划线连接单词，表名使用单词的单数形式\n3. 每个表必须设有主键，除了拓展表外，主键一律设置为`id`，并且设置自增、非null\n4. 如`user`表的拓展表`user_extend`，主键为`user_id`\n5. 非必填字段必须设置默认值（除了诸如text类型不能设置外），必填字段不必设置默认值\n6. 表示状态的字段一律使用`tinyint`类型，使用正数表示正面状态， 负数表示负面状态\n    如果仅表示有效、无效，则使用`1`表示有效，`-1`表示无效\n7. 预设字段在程序中都会进行相应的自动处理，根据情况设置\n    \n    \n    state: 表示逻辑删除的状态，设置该字段表示该表的所有记录均为逻辑删除，即更改state的值\n    created_at：表示创建时间，类型为datetime\n    created_by：表示创建人ID，类型为int\n    updated_at：表示修改时间\n    updated_by：表示修改人ID', 2, 1, '2016-10-26 11:49:15', 1);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) unsigned NOT NULL,
  `userid` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `push_time` int(10) unsigned NOT NULL,
  `created_time` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `id` int(11) NOT NULL,
  `version` varchar(80) NOT NULL,
  `apply_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数据库版本迁移表';

-- --------------------------------------------------------

--
-- 表的结构 `option`
--

CREATE TABLE IF NOT EXISTS `option` (
  `id` int(11) unsigned NOT NULL,
  `option_name` varchar(64) NOT NULL DEFAULT '' COMMENT '配置名',
  `option_value` longtext COMMENT '配置值',
  `type` tinyint(4) DEFAULT '1' COMMENT '配置类型',
  `state` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='参数配置表';

--
-- 转存表中的数据 `option`
--

INSERT INTO `option` (`id`, `option_name`, `option_value`, `type`, `state`) VALUES
(1, 'frontend_settings', 'a:30:{i:0;a:10:{s:2:"id";i:1;s:3:"pid";s:1:"0";s:4:"name";s:12:"网站设置";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:1;s:7:"uploads";a:0:{}}i:1;a:10:{s:2:"id";i:2;s:3:"pid";s:1:"0";s:4:"name";s:12:"支付设置";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:1;s:7:"uploads";a:0:{}}i:2;a:10:{s:2:"id";i:13;s:3:"pid";s:1:"0";s:4:"name";s:12:"安全设置";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:1;s:7:"uploads";a:0:{}}i:3;a:10:{s:2:"id";i:20;s:3:"pid";s:1:"0";s:4:"name";s:12:"汇率配置";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:1;s:7:"uploads";a:0:{}}i:4;a:10:{s:2:"id";i:30;s:3:"pid";s:1:"0";s:4:"name";s:12:"转账设置";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:1;s:7:"uploads";a:0:{}}i:5;a:10:{s:2:"id";i:3;s:3:"pid";s:1:"1";s:4:"name";s:12:"公共设置";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:2;s:7:"uploads";a:0:{}}i:6;a:10:{s:2:"id";i:6;s:3:"pid";s:1:"1";s:4:"name";s:9:"SEO设置";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:2;s:7:"uploads";a:0:{}}i:7;a:10:{s:2:"id";i:21;s:3:"pid";s:2:"20";s:4:"name";s:12:"美元汇率";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:2;s:7:"uploads";a:0:{}}i:8;a:10:{s:2:"id";i:23;s:3:"pid";s:2:"20";s:4:"name";s:12:"港元汇率";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:2;s:7:"uploads";a:0:{}}i:9;a:10:{s:2:"id";i:25;s:3:"pid";s:2:"20";s:4:"name";s:12:"欧元汇率";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:2;s:7:"uploads";a:0:{}}i:10;a:10:{s:2:"id";i:31;s:3:"pid";s:2:"30";s:4:"name";s:12:"微信转账";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:2;s:7:"uploads";a:0:{}}i:11;a:10:{s:2:"id";i:32;s:3:"pid";s:2:"30";s:4:"name";s:15:"支付宝转账";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:2;s:7:"uploads";a:0:{}}i:12;a:10:{s:2:"id";i:33;s:3:"pid";s:2:"30";s:4:"name";s:15:"银行卡转账";s:3:"var";N;s:5:"value";N;s:4:"type";N;s:5:"alter";N;s:7:"comment";N;s:5:"level";i:2;s:7:"uploads";a:0:{}}i:13;a:10:{s:2:"id";i:4;s:3:"pid";s:1:"3";s:4:"name";s:12:"网站名称";s:3:"var";s:8:"web_name";s:5:"value";s:6:"福星";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:12:"网站名称";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:14;a:10:{s:2:"id";i:7;s:3:"pid";s:1:"6";s:4:"name";s:9:"关键字";s:3:"var";s:7:"seo_key";s:5:"value";s:13:"期货/外汇";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:24:"SEO关键字的默认值";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:15;a:10:{s:2:"id";i:8;s:3:"pid";s:1:"6";s:4:"name";s:6:"描述";s:3:"var";s:8:"seo_desc";s:5:"value";s:13:"期货/外汇";s:4:"type";s:8:"textarea";s:5:"alter";N;s:7:"comment";s:21:"SEO描述的默认值";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:16;a:10:{s:2:"id";i:9;s:3:"pid";s:1:"6";s:4:"name";s:9:"默认值";s:3:"var";s:11:"seo_default";s:5:"value";s:1:"1";s:4:"type";s:6:"select";s:5:"alter";s:43:"a:2:{i:1;s:6:"显示";i:0;s:9:"不显示";}";s:7:"comment";s:33:"是否开启SEO的默认设置值";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:17;a:10:{s:2:"id";i:15;s:3:"pid";s:1:"3";s:4:"name";s:12:"短信签名";s:3:"var";s:8:"web_sign";s:5:"value";s:6:"福星";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:18:"短信签名验证";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:18;a:10:{s:2:"id";i:16;s:3:"pid";s:1:"3";s:4:"name";s:21:"赠送体验卷金额";s:3:"var";s:10:"web_amount";s:5:"value";s:4:"1000";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:21:"注册赠送体验卷";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:19;a:10:{s:2:"id";i:17;s:3:"pid";s:1:"3";s:4:"name";s:18:"用户赠送张数";s:3:"var";s:8:"web_user";s:5:"value";s:2:"10";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:18:"体验券的数目";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:20;a:10:{s:2:"id";i:18;s:3:"pid";s:1:"3";s:4:"name";s:21:"经纪人赠送张数";s:3:"var";s:11:"web_manager";s:5:"value";s:2:"10";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:18:"体验券的数目";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:21;a:10:{s:2:"id";i:19;s:3:"pid";s:1:"3";s:4:"name";s:22:"分成最大百分比%";s:3:"var";s:9:"web_point";s:5:"value";s:2:"30";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:17:"1-100整数之间";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:22;a:10:{s:2:"id";i:26;s:3:"pid";s:2:"25";s:4:"name";s:12:"欧元汇率";s:3:"var";s:4:"EURO";s:5:"value";s:3:"7.8";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:22:"1欧元兑换人民币";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:23;a:10:{s:2:"id";i:27;s:3:"pid";s:2:"21";s:4:"name";s:12:"美元汇率";s:3:"var";s:3:"USD";s:5:"value";s:3:"7.2";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:22:"1美元兑换人民币";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:24;a:10:{s:2:"id";i:28;s:3:"pid";s:2:"23";s:4:"name";s:12:"港元配置";s:3:"var";s:3:"HKD";s:5:"value";s:5:"0.812";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:22:"1港元兑换人民币";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:25;a:10:{s:2:"id";i:34;s:3:"pid";s:2:"31";s:4:"name";s:15:"收款二维码";s:3:"var";s:9:"wx_qrcode";s:5:"value";s:45:"/uploadfile/setting/20190227/154143784036.jpg";s:4:"type";s:4:"file";s:5:"alter";N;s:7:"comment";s:21:"微信收款二维码";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:26;a:10:{s:2:"id";i:35;s:3:"pid";s:2:"32";s:4:"name";s:15:"收款二维码";s:3:"var";s:10:"ali_qrcode";s:5:"value";s:45:"/uploadfile/setting/20190227/154143163803.jpg";s:4:"type";s:4:"file";s:5:"alter";N;s:7:"comment";s:24:"支付宝收款二维码";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:27;a:10:{s:2:"id";i:36;s:3:"pid";s:2:"33";s:4:"name";s:12:"收款卡号";s:3:"var";s:9:"bank_code";s:5:"value";s:25:"4523923992039420392039203";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:21:"收款人银行卡号";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:28;a:10:{s:2:"id";i:37;s:3:"pid";s:2:"33";s:4:"name";s:15:"收款人姓名";s:3:"var";s:9:"bank_name";s:5:"value";s:9:"周杰伦";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:15:"收款人姓名";s:5:"level";i:3;s:7:"uploads";a:0:{}}i:29;a:10:{s:2:"id";i:38;s:3:"pid";s:2:"33";s:4:"name";s:9:"开户行";s:3:"var";s:13:"bank_position";s:5:"value";s:18:"花旗台北分行";s:4:"type";s:4:"text";s:5:"alter";N;s:7:"comment";s:15:"开户行名称";s:5:"level";i:3;s:7:"uploads";a:0:{}}}', 1, 1),
(2, 'risk_switch', 's:1:"0";', 2, 1),
(3, 'risk_product', 'a:25:{s:2:"cl";s:1:"1";s:2:"gc";s:1:"0";s:2:"si";s:1:"0";s:2:"hg";s:1:"0";s:3:"dax";s:1:"0";s:5:"hkhsi";s:1:"0";s:3:"mhi";s:1:"0";s:3:"a50";s:1:"0";s:4:"ixic";s:1:"0";s:2:"bp";s:1:"0";s:2:"ec";s:1:"0";s:2:"ad";s:1:"0";s:2:"cd";s:1:"0";s:3:"au0";s:1:"0";s:3:"ag0";s:1:"0";s:3:"cu0";s:1:"0";s:3:"ni0";s:1:"0";s:3:"bu0";s:1:"0";s:3:"ru0";s:1:"0";s:3:"rb0";s:1:"0";s:2:"p0";s:1:"0";s:3:"sr0";s:1:"0";s:2:"m0";s:1:"0";s:2:"y0";s:1:"0";s:3:"pp0";s:1:"0";}', 2, 1),
(4, 'console_settings', 'a:0:{}', 1, 1),
(5, 'home_settings', 'a:0:{}', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL COMMENT '买卖品类',
  `hand` int(11) NOT NULL COMMENT '手数',
  `price` varchar(32) NOT NULL DEFAULT '0.00' COMMENT '买入价',
  `one_profit` decimal(11,2) NOT NULL COMMENT '一手盈亏',
  `fee` decimal(11,2) DEFAULT '0.00' COMMENT '手续费',
  `stop_profit_price` varchar(32) DEFAULT '0.00' COMMENT '止盈金额',
  `stop_profit_point` decimal(11,2) DEFAULT '0.00' COMMENT '止盈点数',
  `stop_loss_price` varchar(32) DEFAULT '0.00' COMMENT '止损金额',
  `stop_loss_point` decimal(11,2) DEFAULT '0.00' COMMENT '止损点数',
  `stop_profit_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '止盈金额',
  `stop_loss_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '止损金额',
  `deposit` decimal(11,2) DEFAULT '0.00' COMMENT '保证金',
  `rise_fall` tinyint(4) DEFAULT '1' COMMENT '涨跌：1涨，2跌',
  `model_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-实盘2模拟',
  `sell_price` varchar(32) DEFAULT '0.00' COMMENT '卖出价格',
  `sell_hand` int(11) DEFAULT '0' COMMENT '卖出手数',
  `sell_deposit` decimal(11,2) DEFAULT '0.00' COMMENT '卖出总价',
  `discount` decimal(11,2) DEFAULT '0.00' COMMENT '优惠金额',
  `currency` tinyint(4) DEFAULT '1' COMMENT '币种：1人民币，2美元',
  `profit` decimal(11,2) DEFAULT '0.00' COMMENT '盈亏',
  `is_console` tinyint(4) DEFAULT '-1' COMMENT '是否系统平仓',
  `order_state` tinyint(4) DEFAULT '1' COMMENT '持仓状态，1持仓，2抛出',
  `created_at` datetime DEFAULT NULL COMMENT '下单时间',
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '平仓时间',
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COMMENT='订单表';

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`id`, `user_id`, `product_id`, `hand`, `price`, `one_profit`, `fee`, `stop_profit_price`, `stop_profit_point`, `stop_loss_price`, `stop_loss_point`, `stop_profit_amount`, `stop_loss_amount`, `deposit`, `rise_fall`, `model_type`, `sell_price`, `sell_hand`, `sell_deposit`, `discount`, `currency`, `profit`, `is_console`, `order_state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 100064, 1, 2, '51.11', '40.00', '320.00', '50.61', '100.00', '51.31', '40.00', '4000.00', '1600.00', '2000.00', 2, 1, '51.31', 2, '400.00', '0.00', 1, '-1600.00', 1, 2, '2019-01-15 11:55:28', 100064, '2019-01-15 14:05:20', 0),
(2, 100064, 1, 2, '50.92', '40.00', '320.00', '50.42', '100.00', '51.12', '40.00', '4000.00', '1600.00', '2000.00', 2, 1, '51.12', 2, '400.00', '0.00', 1, '-1600.00', 1, 2, '2019-01-15 18:17:00', 100064, '2019-01-15 18:58:20', 0),
(3, 100064, 1, 2, '51.21', '40.00', '320.00', '50.71', '100.00', '51.41', '40.00', '4000.00', '1600.00', '2000.00', 2, 1, '51.14', 2, '2560.00', '0.00', 1, '560.00', -1, 2, '2019-01-15 19:47:47', 100064, '2019-01-15 20:05:43', 100064),
(4, 100064, 1, 2, '51.06', '40.00', '320.00', '50.56', '100.00', '51.26', '40.00', '4000.00', '1600.00', '2000.00', 2, 1, '51.26', 2, '400.00', '0.00', 1, '-1600.00', 1, 2, '2019-01-15 20:07:57', 100064, '2019-01-15 21:00:04', 0),
(5, 100105, 1, 1, '51.12', '40.00', '160.00', '51.62', '50.00', '50.92', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '51.2', 1, '1320.00', '0.00', 1, '320.00', -1, 2, '2019-01-15 20:34:51', 100105, '2019-01-15 20:54:37', 100105),
(6, 100105, 1, 1, '51.3', '40.00', '160.00', '51.8', '50.00', '51.1', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '51.1', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-01-15 21:02:40', 100105, '2019-01-15 22:00:19', 0),
(7, 100100, 7, 1, '26632', '16.00', '128.00', '26569.5', '62.50', '26657', '25.00', '1000.00', '400.00', '500.00', 2, 1, '26657', 1, '100.00', '0.00', 1, '-400.00', 1, 2, '2019-01-15 21:12:43', 100100, '2019-01-15 22:02:55', 0),
(8, 100100, 1, 1, '51.84', '40.00', '160.00', '52.34', '50.00', '51.64', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '51.64', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-01-15 22:47:04', 100100, '2019-01-15 22:51:51', 0),
(9, 100100, 7, 1, '26714', '16.00', '128.00', '26776.5', '62.50', '26689', '25.00', '1000.00', '400.00', '500.00', 1, 1, '26762', 1, '1268.00', '0.00', 1, '768.00', -1, 2, '2019-01-15 22:55:23', 100100, '2019-01-15 23:02:52', 100100),
(10, 100086, 7, 1, '26692', '16.00', '128.00', '26754.5', '62.50', '26667', '25.00', '1000.00', '400.00', '500.00', 1, 1, '26667', 1, '100.00', '0.00', 1, '-400.00', 1, 2, '2019-01-16 00:06:28', 100086, '2019-01-16 00:11:15', 0),
(11, 100100, 7, 1, '26646', '16.00', '128.00', '26708.5', '62.50', '26621', '25.00', '1000.00', '400.00', '500.00', 1, 1, '26704', 1, '1428.00', '0.00', 1, '928.00', 1, 2, '2019-01-16 00:24:16', 100100, '2019-01-16 00:58:00', 0),
(12, 100119, 6, 1, '26597', '40.00', '280.00', '26509.5', '87.50', '26632', '35.00', '3500.00', '1400.00', '1750.00', 2, 1, '26634', 1, '350.00', '0.00', 1, '-1400.00', 1, 2, '2019-01-16 09:43:52', 100119, '2019-01-16 09:45:50', 0),
(13, 100100, 7, 1, '26708', '16.00', '128.00', '26645.5', '62.50', '26733', '25.00', '1000.00', '400.00', '500.00', 2, 1, '26737', 1, '100.00', '0.00', 1, '-400.00', 1, 2, '2019-01-16 09:53:58', 100100, '2019-01-16 09:55:18', 0),
(14, 100100, 2, 1, '1289', '60.00', '240.00', '1295.1666666667', '61.67', '1286.5', '25.00', '3700.00', '1500.00', '1875.00', 1, 1, '1292.4', 1, '3915.00', '0.00', 1, '2040.00', -1, 2, '2019-01-16 09:56:15', 100100, '2019-01-16 14:10:39', 100100),
(15, 100100, 5, 1, '10923', '2.00', '480.00', '10958', '3500.00', '10909', '1400.00', '7000.00', '2800.00', '3500.00', 1, 1, '10926.5', 1, '4200.00', '0.00', 1, '700.00', -1, 2, '2019-01-16 22:46:50', 100100, '2019-01-16 22:48:33', 100100),
(16, 100064, 1, 3, '52.22', '40.00', '480.00', '51.72', '150.00', '52.42', '60.00', '6000.00', '2400.00', '3000.00', 2, 1, '52.05', 3, '5040.00', '0.00', 1, '2040.00', -1, 2, '2019-01-16 23:30:59', 100064, '2019-01-16 23:34:16', 100064),
(17, 100100, 1, 1, '52.13', '40.00', '160.00', '52.63', '50.00', '51.93', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '51.91', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-01-16 23:32:49', 100100, '2019-01-16 23:35:44', 0),
(18, 100064, 1, 2, '51.74', '40.00', '320.00', '51.24', '100.00', '51.94', '40.00', '4000.00', '1600.00', '2000.00', 2, 1, '51.49', 2, '4000.00', '0.00', 1, '2000.00', -1, 2, '2019-01-16 23:39:36', 100064, '2019-01-16 23:41:47', 100064),
(19, 100100, 1, 1, '51.75', '40.00', '160.00', '52.25', '50.00', '51.55', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '51.55', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-01-16 23:39:58', 100100, '2019-01-16 23:41:23', 0),
(20, 100064, 1, 2, '51.59', '40.00', '320.00', '51.09', '100.00', '51.79', '40.00', '4000.00', '1600.00', '2000.00', 2, 1, '51.79', 2, '400.00', '0.00', 1, '-1600.00', 1, 2, '2019-01-16 23:45:11', 100064, '2019-01-16 23:48:06', 0),
(21, 100100, 1, 1, '51.72', '40.00', '160.00', '51.22', '50.00', '51.92', '20.00', '2000.00', '800.00', '1000.00', 2, 1, '51.68', 1, '1160.00', '0.00', 1, '160.00', -1, 2, '2019-01-16 23:47:19', 100100, '2019-01-16 23:56:06', 100100),
(22, 100064, 1, 2, '51.84', '40.00', '320.00', '52.34', '100.00', '51.64', '40.00', '4000.00', '1600.00', '2000.00', 1, 1, '51.7', 2, '880.00', '0.00', 1, '-1120.00', -1, 2, '2019-01-16 23:51:48', 100064, '2019-01-16 23:53:37', 100064),
(23, 100064, 1, 2, '51.66', '40.00', '320.00', '51.16', '100.00', '51.86', '40.00', '4000.00', '1600.00', '2000.00', 2, 1, '51.33', 2, '4640.00', '0.00', 1, '2640.00', -1, 2, '2019-01-16 23:53:50', 100064, '2019-01-17 00:04:08', 100064),
(24, 100064, 1, 2, '51.69', '40.00', '320.00', '51.19', '100.00', '51.89', '40.00', '4000.00', '1600.00', '2000.00', 2, 1, '51.33', 2, '4880.00', '0.00', 1, '2880.00', -1, 2, '2019-01-16 23:59:29', 100064, '2019-01-17 00:04:08', 100064),
(25, 100100, 1, 1, '51.52', '40.00', '160.00', '52.02', '50.00', '51.32', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '51.32', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-01-17 00:02:20', 100100, '2019-01-17 00:03:55', 0),
(26, 100100, 1, 1, '51.32', '40.00', '160.00', '51.82', '50.00', '51.12', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '51.63', 1, '2240.00', '0.00', 1, '1240.00', -1, 2, '2019-01-17 00:05:08', 100100, '2019-01-17 00:09:44', 100100),
(27, 100100, 1, 1, '51.96', '40.00', '160.00', '52.46', '50.00', '51.76', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '52.13', 1, '1680.00', '0.00', 1, '680.00', -1, 2, '2019-01-17 00:39:17', 100100, '2019-01-17 00:45:05', 100100),
(28, 100100, 4, 1, '3.542', '60.00', '210.00', '3.492', '50.00', '3.562', '20.00', '3000.00', '1200.00', '1500.00', 2, 1, '3.562', 1, '300.00', '0.00', 1, '-1200.00', 1, 2, '2019-01-17 01:04:34', 100100, '2019-01-17 01:08:22', 0),
(29, 100100, 4, 1, '3.498', '60.00', '210.00', '3.548', '50.00', '3.478', '20.00', '3000.00', '1200.00', '1500.00', 1, 1, '3.478', 1, '300.00', '0.00', 1, '-1200.00', 1, 2, '2019-01-17 01:12:40', 100100, '2019-01-17 01:14:33', 0),
(30, 100112, 6, 1, '26734', '40.00', '280.00', '26646.5', '87.50', '26769', '35.00', '3500.00', '1400.00', '1750.00', 2, 1, '26732', 1, '1830.00', '0.00', 1, '80.00', -1, 2, '2019-01-17 09:46:42', 100112, '2019-01-17 09:49:39', 100112),
(31, 100112, 6, 1, '26779', '40.00', '280.00', '26691.5', '87.50', '26814', '35.00', '3500.00', '1400.00', '1750.00', 2, 1, '26814', 1, '350.00', '0.00', 1, '-1400.00', 1, 2, '2019-01-17 10:15:44', 100112, '2019-01-17 10:21:20', 0),
(32, 100100, 7, 1, '26848', '16.00', '128.00', '26785.5', '62.50', '26873', '25.00', '1000.00', '400.00', '500.00', 2, 1, '26874', 1, '100.00', '0.00', 1, '-400.00', 1, 2, '2019-01-17 10:27:12', 100100, '2019-01-17 10:30:36', 0),
(33, 100083, 6, 1, '26841', '40.00', '280.00', '26753.5', '87.50', '26876', '35.00', '3500.00', '1400.00', '1750.00', 2, 1, '26876', 1, '350.00', '0.00', 1, '-1400.00', 1, 2, '2019-01-17 14:22:10', 100083, '2019-01-17 14:26:28', 0),
(34, 100083, 6, 1, '26834', '40.00', '280.00', '26921.5', '87.50', '26799', '35.00', '3500.00', '1400.00', '1750.00', 1, 1, '26851', 1, '2430.00', '0.00', 1, '680.00', -1, 2, '2019-01-17 14:35:29', 100083, '2019-01-17 14:39:25', 100083),
(35, 100112, 5, 1, '10899.5', '2.00', '480.00', '10864.5', '3500.00', '10913.5', '1400.00', '7000.00', '2800.00', '3500.00', 2, 1, '10891.5', 1, '5100.00', '0.00', 1, '1600.00', -1, 2, '2019-01-17 18:36:17', 100112, '2019-01-17 18:37:03', 100112),
(36, 100083, 2, 1, '1293.3', '60.00', '240.00', '1287.1333333333', '61.67', '1295.8', '25.00', '3700.00', '1500.00', '1875.00', 2, 1, '1292.1', 1, '2595.00', '0.00', 1, '720.00', -1, 2, '2019-01-17 21:30:04', 100083, '2019-01-17 21:31:34', 100083),
(37, 100105, 7, 1, '26810', '16.00', '128.00', '26872.5', '62.50', '26785', '25.00', '1000.00', '400.00', '500.00', 1, 1, '26900', 1, '1500.00', '0.00', 1, '1000.00', 1, 2, '2019-01-17 22:03:42', 100105, '2019-01-18 00:50:37', 0),
(38, 100053, 1, 1, '51.56', '40.00', '160.00', '52.06', '50.00', '51.36', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '52.68', 1, '3000.00', '0.00', 1, '2000.00', 1, 2, '2019-01-18 00:51:09', 100053, '2019-01-18 13:22:12', 0),
(39, 100053, 7, 1, '27052', '16.00', '128.00', '27114.5', '62.50', '27027', '25.00', '1000.00', '400.00', '500.00', 1, 1, '27192', 1, '1500.00', '0.00', 1, '1000.00', 1, 2, '2019-01-18 13:30:11', 100053, '2019-01-21 15:37:55', 0),
(40, 100053, 4, 1, '3.351', '60.00', '210.00', '3.401', '50.00', '3.331', '20.00', '3000.00', '1200.00', '1500.00', 1, 1, '3.33', 1, '300.00', '0.00', 1, '-1200.00', 1, 2, '2019-01-21 15:43:10', 100053, '2019-01-21 16:06:25', 0),
(41, 100053, 12, 1, '0.7386', '72.00', '168.00', '0.7436', '50.00', '0.7376', '10.00', '3600.00', '720.00', '1080.00', 1, 1, '0.7385', 1, '1008.00', '0.00', 2, '-72.00', -1, 2, '2019-01-21 16:15:09', 100053, '2019-01-24 19:15:08', 100053),
(42, 100053, 1, 1, '52.51', '40.00', '160.00', '53.01', '50.00', '52.31', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '53.55', 1, '3000.00', '0.00', 1, '2000.00', 1, 2, '2019-01-24 19:14:59', 100053, '2019-01-27 19:51:55', 0),
(43, 100053, 1, 1, '56.43', '40.00', '160.00', '56.93', '50.00', '56.23', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '56.43', 1, '1000.00', '0.00', 1, '0.00', -1, 2, '2019-02-20 11:39:09', 100053, '2019-02-20 11:40:01', 100053),
(44, 100053, 1, 3, '56.43', '40.00', '480.00', '56.93', '150.00', '56.23', '60.00', '6000.00', '2400.00', '3000.00', 1, 1, '56.43', 3, '3000.00', '0.00', 1, '0.00', -1, 2, '2019-02-20 11:46:37', 100053, '2019-02-20 11:51:01', 100053),
(45, 100053, 1, 1, '56.42', '40.00', '160.00', '55.92', '50.00', '56.62', '20.00', '2000.00', '800.00', '1000.00', 2, 1, '57.07', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-02-20 12:47:14', 100053, '2019-02-22 15:27:45', 0),
(46, 100053, 1, 1, '56.43', '40.00', '160.00', '56.93', '50.00', '56.23', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '57.07', 1, '3000.00', '0.00', 1, '2000.00', 1, 2, '2019-02-20 17:42:47', 100053, '2019-02-22 15:27:45', 0),
(47, 100053, 1, 1, '56.42', '40.00', '160.00', '55.92', '50.00', '56.62', '20.00', '2000.00', '800.00', '1000.00', 2, 1, '57.07', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-02-21 14:48:46', 100053, '2019-02-22 15:27:45', 0),
(48, 100053, 14, 1, '269.6', '10.00', '58.00', '267.1', '250.00', '270.1', '50.00', '2500.00', '500.00', '700.00', 2, 1, '269.6', 1, '700.00', '0.00', 1, '0.00', -1, 2, '2019-02-21 14:49:53', 100053, '2019-02-22 15:37:49', 100053),
(49, 100053, 1, 1, '57.1', '40.00', '160.00', '56.6', '50.00', '57.3', '20.00', '2000.00', '800.00', '1000.00', 2, 1, '57.1', 1, '1000.00', '0.00', 1, '0.00', -1, 2, '2019-02-26 16:43:57', 100053, '2019-02-28 00:05:51', 100053),
(50, 100053, 4, 1, '2.683', '60.00', '210.00', '2.633', '50.00', '2.703', '20.00', '3000.00', '1200.00', '1500.00', 2, 1, '2.685', 1, '1380.00', '0.00', 1, '-120.00', -1, 2, '2019-02-28 00:03:23', 100053, '2019-02-28 00:05:44', 100053),
(51, 100053, 3, 1, '15.78', '7.00', '350.00', '16.38', '600.00', '15.48', '300.00', '4200.00', '2100.00', '2625.00', 1, 1, '15.78', 1, '2625.00', '0.00', 1, '0.00', -1, 2, '2019-02-28 12:18:32', 100053, '2019-02-28 13:23:44', 100053),
(52, 100053, 2, 1, '1320.2', '60.00', '240.00', '1326.3666666667', '61.67', '1317.7', '25.00', '3700.00', '1500.00', '1875.00', 1, 1, '1320.1', 1, '1815.00', '0.00', 1, '-60.00', -1, 2, '2019-02-28 12:21:58', 100053, '2019-02-28 12:52:26', 100053),
(53, 100053, 2, 1, '1320.1', '60.00', '240.00', '1326.2666666667', '61.67', '1317.6', '25.00', '3700.00', '1500.00', '1875.00', 1, 1, '1320.3', 1, '1995.00', '0.00', 1, '120.00', -1, 2, '2019-02-28 12:52:15', 100053, '2019-02-28 13:23:38', 100053),
(54, 100053, 1, 1, '56.9', '40.00', '160.00', '57.4', '50.00', '56.7', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '56.9', 1, '1000.00', '0.00', 1, '0.00', -1, 2, '2019-02-28 12:55:24', 100053, '2019-02-28 13:23:47', 100053),
(55, 100053, 3, 1, '15.785', '7.00', '350.00', '16.385', '600.00', '15.485', '300.00', '4200.00', '2100.00', '2625.00', 1, 1, '15.78', 1, '2590.00', '0.00', 1, '-35.00', -1, 2, '2019-02-28 13:04:53', 100053, '2019-02-28 13:21:02', 100053),
(56, 100053, 6, 1, '28777', '40.00', '280.00', '28689.5', '87.50', '28812', '35.00', '3500.00', '1400.00', '1750.00', 2, 1, '28813', 1, '350.00', '0.00', 1, '-1400.00', 1, 2, '2019-02-28 13:06:27', 100053, '2019-02-28 13:10:04', 0),
(57, 100053, 1, 1, '56.86', '40.00', '160.00', '57.36', '50.00', '56.66', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '56.81', 1, '800.00', '0.00', 1, '-200.00', -1, 2, '2019-02-28 13:38:53', 100053, '2019-02-28 13:59:46', 100053),
(58, 100053, 1, 1, '56.77', '40.00', '160.00', '57.27', '50.00', '56.57', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '56.08', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-03-04 12:29:33', 100053, '2019-03-04 12:32:54', 0),
(59, 100053, 2, 1, '1290', '60.00', '240.00', '1296.1666666667', '61.67', '1287.5', '25.00', '3700.00', '1500.00', '1875.00', 1, 1, '1289.2', 1, '1395.00', '0.00', 1, '-480.00', -1, 2, '2019-03-05 11:38:01', 100053, '2019-03-05 12:22:34', 100053),
(60, 100053, 2, 1, '1289.3', '60.00', '240.00', '1295.4666666667', '61.67', '1286.8', '25.00', '3700.00', '1500.00', '1875.00', 1, 1, '1289.3', 1, '1875.00', '0.00', 1, '0.00', -1, 2, '2019-03-05 12:21:42', 100053, '2019-03-05 12:24:06', 100053),
(61, 100053, 2, 1, '1289.3', '60.00', '240.00', '1295.4666666667', '61.67', '1286.8', '25.00', '3700.00', '1500.00', '1875.00', 1, 1, '1298.9', 1, '5575.20', '0.00', 1, '3700.20', 1, 2, '2019-03-05 12:26:31', 100053, '2019-03-11 14:29:44', 0),
(62, 100053, 1, 1, '56.28', '40.00', '160.00', '56.78', '50.00', '56.08', '20.00', '2000.00', '800.00', '1000.00', 1, 1, '56.08', 1, '200.00', '0.00', 1, '-800.00', 1, 2, '2019-03-05 14:10:41', 100053, '2019-03-06 16:05:22', 0),
(63, 100053, 1, 1, '56.22', '40.00', '160.00', '56.72', '50.00', '56.02', '20.00', '2000.00', '800.00', '1000.00', 1, 2, '60.18', 1, '3000.00', '0.00', 1, '2000.00', 1, 2, '2019-03-08 15:46:35', 100053, '2019-03-31 21:19:55', 0);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `table_name` varchar(50) NOT NULL COMMENT '产品对应表名',
  `name` varchar(50) NOT NULL COMMENT '产品名称',
  `identify` varchar(50) NOT NULL COMMENT '标识',
  `simple_identify` varchar(32) NOT NULL,
  `color` varchar(50) NOT NULL COMMENT '背景颜色',
  `deposit` decimal(11,2) NOT NULL COMMENT '保证金',
  `one_profit` int(11) NOT NULL COMMENT '一手盈亏',
  `desc` varchar(50) DEFAULT '' COMMENT '产品描述',
  `fee` decimal(11,2) DEFAULT '0.00' COMMENT '手续费',
  `trade_time` text COMMENT '交易时间',
  `play_rule` text COMMENT '玩法规则',
  `force_sell` tinyint(4) DEFAULT '1' COMMENT '是否强制平仓：1是，-1否',
  `currency` tinyint(4) DEFAULT '1' COMMENT '币种： 1人民币，2美元',
  `hot` tinyint(4) DEFAULT '1' COMMENT '是否是热门期货：1是，-1不是',
  `type` tinyint(4) DEFAULT '1' COMMENT '期货类别：1国内，2国外',
  `on_sale` tinyint(4) DEFAULT '1' COMMENT '上架状态：1上架，-1下架',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态'
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='交易产品表';

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `table_name`, `name`, `identify`, `simple_identify`, `color`, `deposit`, `one_profit`, `desc`, `fee`, `trade_time`, `play_rule`, `force_sell`, `currency`, `hot`, `type`, `on_sale`, `state`) VALUES
(1, 'cl', '美原油', 'NECLF0', 'CL', '#C66EBD', '0.00', 0, '23小时连续交易 纽约商品交易所', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 1, 1, 2, 1, 1),
(2, 'gc', '美黄金', 'CMGCF0', 'GC', '#C2A45F', '0.00', 0, '多空双赢 全球热门品种', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 1, 1, 2, 1, 1),
(3, 'si', '美白银', 'CMSIFO', 'SI', '#8F97B3', '0.00', 0, '投资者青睬的避险品种', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 1, 1, 2, 1, 1),
(4, 'hg', '美天然气', 'NENGF0', 'HG', '#CA7D6D', '0.00', 0, '23小时连续交易 波动规律稳定', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 1, 1, 2, 1, 1),
(5, 'dax', '德指', 'CEDAXH0', 'DAX', '#92A8CB', '0.00', 0, '☆德国法兰克福指数 收益高', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"14:00";s:3:"end";s:5:"04:00";}}', '', 1, 1, 1, 2, 1, 1),
(6, 'hkhsi', '恒指', 'HIHSI01', 'HSI', '#FAE8E8', '0.00', 0, '香港恒生指数 ', '0.00', 'a:3:{i:0;a:2:{s:5:"start";s:5:"09:05";s:3:"end";s:5:"12:00";}i:1;a:2:{s:5:"start";s:5:"13:00";s:3:"end";s:5:"16:20";}i:2;a:2:{s:5:"start";s:5:"17:20";s:3:"end";s:5:"01:00";}}', '', 1, 1, 1, 2, 1, 1),
(7, 'mhi', '小恒指', 'HIMHI01', 'MHI', '#92A8CB', '0.00', 0, '500起投 玩赚外盘', '0.00', 'a:3:{i:0;a:2:{s:5:"start";s:5:"09:15";s:3:"end";s:5:"12:00";}i:1;a:2:{s:5:"start";s:5:"13:05";s:3:"end";s:5:"16:20";}i:2;a:2:{s:5:"start";s:5:"17:20";s:3:"end";s:5:"01:00";}}', '', 1, 1, 1, 1, 1, 1),
(8, 'a50', '富时A50', 'CN1807', 'CN', '#CA7D6D', '0.00', 0, 'A股市场风险对冲利器', '0.00', 'a:2:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"16:20";}i:1;a:2:{s:5:"start";s:5:"17:05";s:3:"end";s:5:"04:50";}}', '', 1, 1, 1, 2, 1, 1),
(9, 'ixic', '小纳指', 'NQ1809', 'NQ', '#C2A45F', '0.00', 0, '低门槛，收益高', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 2, 1, 2, 1, 1),
(10, 'bp', '英镑', 'BP1809', 'BP', '#C66EBD', '0.00', 0, '全球交易量最大的外汇', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 2, 1, 2, 1, 1),
(11, 'ec', '欧元', 'EC1809', 'EC', '#FAE8E8', '0.00', 0, '火爆产品 波幅巨大', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 2, 1, 2, 1, 1),
(12, 'ad', '澳元', 'AD18009', 'AD', '#8F97B3', '0.00', 0, '波动大，够刺激', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 2, 1, 2, 1, 1),
(13, 'cd', '加元', 'CD1809', 'CD', '#C2A45F', '0.00', 0, '23小时连续交易', '0.00', 'a:1:{i:0;a:2:{s:5:"start";s:5:"06:00";s:3:"end";s:5:"05:00";}}', '', 1, 2, 1, 2, 1, 1),
(14, 'au0', '沪黄金', 'AU1812', 'AU', '#C66EBD', '0.00', 0, '热门品种，波动一次赚50元', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"02:30";}}', '', 1, 1, 1, 1, 1, 1),
(15, 'ag0', '沪白银', 'AG1812', 'AG', '#C2A45F', '0.00', 0, '新手最爱品种', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:28";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"02:30";}}', '', 1, 1, 1, 1, 1, 1),
(16, 'cu0', '沪铜', 'CU1808', 'CU', '#8F97B3', '0.00', 0, '最热新品,每天波动上千点', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"01:00";}}', '', 1, 1, 1, 1, 1, 1),
(17, 'ni0', '沪镍', 'NI1809', 'NI', '#CA7D6D', '0.00', 0, '波动大，够刺激', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:00";s:3:"end";s:5:"01:00";}}', '', 1, 1, 1, 1, 1, 1),
(18, 'bu0', '沥青', 'BU1812', 'BU', '#92A8CB', '0.00', 0, '火爆产品 波幅巨大', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"23:00";}}', '', 1, 1, 1, 1, 1, 1),
(19, 'ru0', '天然橡胶', 'RU1809', 'RU', '#FAE8E8', '0.00', 0, '行情好抓，波动一次50元', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"23:00";}}', '', 1, 1, 1, 1, 1, 1),
(20, 'rb0', '螺纹钢', 'RB1810', 'RB', '#92A8CB', '0.00', 0, '行情好抓，赚钱稳定 上交易所产品', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"23:00";}}', '', 1, 1, 1, 1, 1, 1),
(21, 'p0', '棕榈油', 'P1809', 'P', '#CA7D6D', '0.00', 0, '行情好抓，赚钱稳定', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"23:30";}}', '', 1, 1, 1, 1, 1, 1),
(22, 'sr0', '白糖', 'SR1809', 'SR', '#C2A45F', '0.00', 0, '最容易赚钱的品种，盈利稳定', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"23:30";}}', '', 1, 1, 1, 1, 1, 1),
(23, 'm0', '豆粕', 'M1809', 'M', '#C66EBD', '0.00', 0, '行情好抓，赚钱稳定', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"23:30";}}', '', 1, 1, 1, 1, 1, 1),
(24, 'y0', '豆油', 'Y1809', 'Y', '#FAE8E8', '0.00', 0, '大连商品交易所', '0.00', 'a:4:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:35";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:35";s:3:"end";s:5:"14:50";}i:3;a:2:{s:5:"start";s:5:"21:05";s:3:"end";s:5:"23:30";}}', '', 1, 1, 1, 1, 1, 1),
(25, 'pp0', 'PP聚丙烯', 'PP1809', 'PP', '#8F97B3', '0.00', 0, '行情大,超好玩,波动一次5元', '0.00', 'a:3:{i:0;a:2:{s:5:"start";s:5:"09:00";s:3:"end";s:5:"10:15";}i:1;a:2:{s:5:"start";s:5:"10:30";s:3:"end";s:5:"11:20";}i:2;a:2:{s:5:"start";s:5:"13:30";s:3:"end";s:5:"15:00";}}', '', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `product_price`
--

CREATE TABLE IF NOT EXISTS `product_price` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `deposit` double NOT NULL,
  `one_profit` double NOT NULL,
  `fee` double DEFAULT NULL,
  `max_hand` int(11) DEFAULT NULL,
  `hand` int(11) DEFAULT NULL,
  `stop_profit_price` longtext,
  `stop_loss_price` longtext,
  `stop_loss_price_add` longtext NOT NULL,
  `point_unit` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product_price`
--

INSERT INTO `product_price` (`id`, `product_id`, `deposit`, `one_profit`, `fee`, `max_hand`, `hand`, `stop_profit_price`, `stop_loss_price`, `stop_loss_price_add`, `point_unit`) VALUES
(3, 1, 200, 40, 160, 10, 1, '2000,2000', '800,800', '50', '0.01'),
(4, 1, 200, 40, 320, 10, 2, '4000,4000', '1600,1600', '50', '0.01'),
(5, 4, 300, 60, 210, 10, 1, '3000,3000', '1200,1200', '50', '0.001'),
(6, 4, 300, 60, 420, 10, 2, '6000,6000', '2400,2400', '50', '0.001'),
(7, 4, 300, 60, 630, 10, 3, '9000,9000', '3600,3600', '50', '0.001'),
(8, 4, 300, 60, 1050, 10, 5, '15000,15000', '6000,6000', '50', '0.001'),
(11, 9, 50, 0.2, 23.33, 10, 1, '800,1600,2400,4000,6400,8000', '160,320,480,800,1280,1600', '50', '0.01'),
(12, 9, 50, 0.2, 46.67, 10, 2, '1600,3200,4800,8000,12800,16000', '320,640,960,1600,2560,3200', '50', '0.01'),
(15, 16, 200, 50, 58, 10, 1, '2000,4000,6000,10000,16000,20000', '400,800,1200,2000,3200,4000', '50', '10'),
(16, 16, 200, 50, 116, 10, 2, '4000,8000,12000,20000,32000,40000', '800,1600,2400,4000,6400,8000', '50', '10'),
(25, 1, 200, 40, 480, 10, 3, '6000,6000', '2400,2400', '50', '0.01'),
(26, 17, 200, 10, 45, 10, 1, '5000,10000,15000,20000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '10'),
(27, 17, 200, 10, 90, 10, 2, '10000,20000,30000,50000,80000,100000', '2000,4000,6000,10000,16000,20000', '50', '10'),
(28, 17, 200, 10, 145, 10, 3, '15000,30000,45000,75000,120000,150000', '3000,6000,9000,15000,2400,30000', '50', '10'),
(30, 2, 375, 60, 240, 10, 1, '3700,3700', '1500,1500', '50', '0.1'),
(31, 3, 525, 7, 350, 10, 1, '4200,4200', '2100,2100', '50', '0.001'),
(32, 6, 350, 40, 280, 10, 1, '3500,3500', '1400,1400', '50', '1'),
(33, 8, 20, 0.1, 9.44, 10, 1, '500,1000,1500,2500,4000,5000', '50,100,150,250,400,500', '50', '0.1'),
(34, 10, 50, 6.25, 23.33, 10, 1, '1000,2000,3000,5000,8000,10000', '200,400,600,1000,1600,2000', '50', '0.0001'),
(35, 11, 50, 6.25, 23.33, 10, 1, '2000,4000,6000,10000,16000,20000', '400,800,1200,2000,3200,4000', '50', '0.00001'),
(36, 13, 50, 1, 23.33, 10, 1, '250,500,7500,1250,2000,2500', '50,100,150,250,400,500', '50', '0.00001'),
(37, 14, 200, 10, 58, 10, 1, '2500,5000,7500,12500,20000,25000,', '500,1000,1500,2500,4000,5000', '50', '0.01'),
(38, 14, 200, 10, 116, 10, 2, '5000,10000,15000,25000,40000,50000', '1000,1500,3000,5000,8000,10000', '50', '0.01'),
(39, 15, 100, 15, 30, 10, 1, '1000,2000,3000,5000,8000,10000', '200,400,600,1000,1600,2000', '50', '1'),
(40, 18, 100, 10, 38, 10, 1, '1250,2500,3750,5000,6250,7500', '250,500,750,1000,1250,1500', '50', '1'),
(41, 19, 200, 10, 58, 10, 1, '2500,5000,7500,12500,20000,25000', '500,1000,1500,2500,4000,5000', '50', '1'),
(42, 20, 100, 10, 40, 10, 1, '2500,5000,7500,12500,20000,25000', '500,1000,1500,2500,4000,5000', '50', '10'),
(43, 21, 100, 100, 31, 10, 1, '2500,5000,7500,12500,20000,25000', '500,1000,1500,2500,4000,5000', '50', '10'),
(44, 22, 100, 100, 15, 10, 1, '2500,5000,7500,12500,20000,25000', '500,1000,1500,2500,4000,5000', '50', '10'),
(45, 23, 50, 10, 28, 10, 1, '1000,2000,3000,5000,8000,10000', '200,400,600,1000,1600,2000', '50', '10'),
(46, 24, 100, 100, 28, 10, 1, '1000,2000,3000,5000,8000,10000', '200,400,600,1000,1600,2000', '50', '10'),
(47, 25, 100, 1, 30, 10, 1, '2500,5000,7500,12500,20000,25000', '500,1000,1500,2500,4000,5000', '50', '1'),
(48, 14, 200, 10, 174, 10, 3, '7500,15000,22500,37500,60000,75000', '1500,3000,4500,7500,12000,15000', '50', '0.01'),
(49, 14, 200, 10, 290, 10, 5, '12500,25000,37500,62500,100000,125000', '2500,5000,7500,12500,20000,25000', '50', '0.01'),
(50, 14, 200, 10, 464, 10, 8, '20000,40000,60000,100000,160000,200000', '4000,8000,12000,20000,32000,40000', '50', '0.01'),
(51, 14, 200, 10, 580, 10, 10, '25000,50000,75000,125000,200000,250000', '5000,10000,15000,25000,40000,50000', '50', '0.01'),
(52, 1, 200, 40, 800, 10, 5, '10000,10000', '4000,4000', '50', '0.01'),
(53, 1, 200, 40, 1280, 10, 8, '16000,16000', '6400,6400', '50', '0.01'),
(54, 1, 200, 40, 1600, 10, 10, '20000,20000', '8000,8000', '50', '0.01'),
(55, 2, 375, 60, 480, 10, 2, '7400,7400', '3000,3000', '50', '0.1'),
(56, 2, 375, 60, 720, 10, 3, '11100,11100', '4500,4500', '50', '0.1'),
(57, 2, 375, 60, 1200, 10, 5, '18500,18500', '7500,7500', '50', '0.1'),
(58, 2, 375, 60, 1920, 10, 8, '29600,29600', '12000,12000', '50', '0.1'),
(60, 24, 100, 100, 56, 10, 2, '2000,4000,6000,10000,16000,20000', '400,800,1200,2000,3200,4000', '50', '10'),
(61, 24, 100, 100, 84, 10, 3, '3000,6000,9000,15000,24000,30000', '600,1200,1800,3000,4800,6000', '50', '10'),
(62, 24, 100, 100, 140, 10, 5, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '10'),
(63, 24, 100, 100, 224, 10, 8, '8000,16000,24000,40000,64000,80000', '8000,16000,24000,40000,64000,80000', '50', '10'),
(64, 24, 100, 100, 280, 10, 10, '10000,20000,30000,50000,80000,100000', '2000,4000,6000,10000,16000,20000', '50', '10'),
(66, 3, 525, 7, 700, 10, 2, '8400,8400', '4200,4200', '50', '0.001'),
(67, 3, 525, 7, 1050, 10, 3, '12600,12600', '6300,6300', '50', '0.001'),
(68, 3, 525, 7, 1750, 10, 5, '21000,21000', '10500,10500', '50', '0.001'),
(69, 3, 525, 7, 2800, 10, 8, '33600,33600', '16800,16800', '50', '0.001'),
(70, 3, 525, 7, 3500, 10, 10, '42000,42000', '21000,21000', '50', '0.001'),
(71, 4, 300, 60, 1680, 10, 8, '24000,24000', '9600,9600', '50', '0.001'),
(72, 4, 300, 60, 2100, 10, 10, '30000,30000', '12000,12000', '50', '0.001'),
(73, 6, 350, 40, 560, 10, 2, '7000,7000', '2800,2800', '50', '1'),
(74, 6, 350, 40, 840, 10, 3, '10500,10500', '4200,4200', '50', '1'),
(75, 6, 350, 40, 1400, 10, 5, '17500,17500', '7000,7000', '50', '1'),
(76, 6, 350, 40, 2240, 10, 8, '28000,28000', '11200,11200', '50', '1'),
(77, 6, 350, 40, 2800, 10, 10, '35000,35000', '14000,14000', '50', '1'),
(78, 15, 100, 15, 60, 10, 2, '2000,4000,6000,10000,16000,20000', '400,800,1200,2000,3200,4000', '50', '1'),
(79, 15, 100, 15, 90, 10, 3, '3000,6000,9000,15000,24000,30000', '600,1200,1800,3000,4800,6000', '50', '1'),
(80, 15, 100, 15, 150, 10, 5, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '1'),
(81, 15, 100, 15, 240, 10, 8, '8000,16000,24000,40000,64000,80000', '1600,3200,4800,8000,12800,16000', '50', '1'),
(82, 15, 100, 15, 300, 10, 10, '10000,20000,30000,50000,80000,100000', '2000,4000,6000,10000,16000,20000', '50', '1'),
(83, 16, 200, 50, 174, 10, 3, '6000,12000,18000,30000,48000,60000', '1200,2400,3600,6000,9600,12000', '50', '10'),
(84, 16, 200, 50, 290, 10, 5, '10000,20000,30000,50000,80000,100000', '2000,4000,6000,10000,16000,20000', '50', '10'),
(85, 16, 200, 50, 464, 10, 8, '16000,32000,48000,80000,128000，160000', '3200,6400,9600,16000,25600,32000', '50', '10'),
(86, 16, 200, 50, 580, 10, 10, '20000,40000,60000,100000,160000，200000', '4000,8000,12000,20000,32000,40000', '50', '10'),
(87, 13, 50, 1, 46.67, 10, 2, '500,1000,1500,2500,4000,5000', '100,200,300,500,800,1000', '50', '0.00001'),
(88, 13, 50, 1, 70, 10, 3, '750,1500,2250,3750,6000,7500', '150,300,450,750,1200,1500', '50', '0.00001'),
(89, 13, 50, 1, 116.67, 10, 5, '1250,2500,3750,6250,10000,12500', '250,500,750,1250,2000,2500', '50', '0.00001'),
(90, 13, 50, 1, 186.67, 10, 8, '2000,4000,6000,10000,16000,20000', '400,800,1200,2000,3200,4000', '50', '0.00001'),
(91, 13, 50, 1, 233.33, 10, 10, '2500,5000,7500,12500,20000,25000', '500,1000,1500,2500,4000,5000', '50', '0.00001'),
(92, 8, 20, 0.1, 18.89, 10, 2, '1000,2000,3000,5000,8000,10000', '100,200,300,500,800,1000', '50', '0.1'),
(93, 8, 20, 0.1, 28.33, 10, 3, '1500,3000,4500,7500,12000,15000', '150,300,450,750,1200,1500', '50', ' 0.1'),
(94, 8, 20, 0.1, 47.22, 10, 5, '2500,5000,7500,12500,20000,25000', '250,500,750,1250,2000,2500', '50', ' 0.1'),
(95, 8, 20, 0.1, 75.56, 10, 8, '4000,8000,12000,20000,32000,40000', '400,800,1200,2000,3200,4000', '50', ' 0.1'),
(96, 8, 20, 0.1, 94.44, 10, 10, '5000,10000,15000,25000,40000,50000', '500,1000,1500,2500,4000,5000', '50', ' 0.1'),
(97, 11, 50, 6.25, 46.67, 10, 2, '4000,8000,12000,20000,32000,40000', '800,1600,2400,4000,6400,8000', '50', '0.00001'),
(98, 11, 50, 6.25, 70, 10, 3, '6000,12000,18000,30000,48000,60000', '1200,2400,3600,6000,9600,12000', '50', '0.00001'),
(99, 11, 50, 6.25, 116.67, 10, 5, '10000,20000,30000,50000,80000,100000', '2000,4000,6000,10000,16000,20000', '50', '0.00001'),
(100, 11, 50, 6.25, 186.67, 10, 8, '16000,32000,48000,80000,128000,160000', '3200,6400,9600,16000,25600,32000', '50', '0.00001'),
(101, 11, 50, 6.25, 233.33, 10, 10, '20000,40000,60000,100000,160000,200000', '4000,8000,12000,20000,32000,40000', '50', '0.00001'),
(102, 10, 50, 6.25, 46.67, 10, 2, '2000,4000,6000,10000,16000,20000', '400,800,1200,2000,3200,4000', '50', '0.0001'),
(103, 10, 50, 6.25, 70, 10, 3, '3000,6000,9000,15000,24000,30000', '600,1200,1800,3000,4800,6000', '50', '0.0001'),
(104, 10, 50, 6.25, 116.67, 10, 5, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '0.0001'),
(105, 10, 50, 6.25, 186.67, 10, 8, '8000,16000,24000,40000,64000,80000', '1600,3200,4800,8000,12800,16000', '50', '0.0001'),
(106, 10, 50, 6.25, 233.33, 10, 10, '10000,20000,30000,50000,80000,100000', '2000,4000,6000,10000,16000,20000', '50', '0.0001'),
(107, 9, 50, 0.2, 70, 10, 3, '2400,4800,7200,12000,19200,24000', '480,960,1440,2400,3840,4800', '50', '0.01'),
(108, 9, 50, 0.2, 116.67, 10, 5, '4000,8000,12000,20000,32000,40000', '800,1600,2400,4000,6400,8000', '50', '0.01'),
(109, 9, 50, 0.2, 186.67, 10, 8, '6400,5000,7500,12500,20000,25000', '1280,2560,3840,6400,10240,12800', '50', '0.01'),
(110, 9, 50, 0.2, 233.33, 10, 10, '8000,16000,2400,40000,64000,80000', '1600,3200,4800,8000,12800,16000', '50', '0.01'),
(111, 17, 200, 10, 225, 10, 5, '25000,50000,75000,125000,200000,250000', '5000,10000,15000,25000,40000,50000', '50', '10'),
(112, 17, 200, 10, 340, 10, 8, '40000,80000,120000,200000,320000,400000', '8000,16000,24000,40000,64000,80000', '50', '10'),
(113, 17, 200, 10, 450, 10, 10, '50000,100000,150000,250000,400000,500000', '10000,20000,30000,50000,80000,100000', '50', '10'),
(114, 18, 100, 10, 76, 10, 2, '2500,5000,7500,10000,12500,15000', '500,1000,1500,2000,2500,3000', '50', '1'),
(115, 18, 100, 10, 114, 10, 3, '3750,7500,11250,15000,18750,22500', '750,1500,2250,3000,3750,4500', '50', '1'),
(116, 18, 100, 10, 190, 10, 5, '6250,12500,18750,25000,31250,37500', '1250,2500,3750,5000,6250,7500', '50', '1'),
(117, 18, 100, 10, 304, 10, 8, '10000,20000,30000,40000,50000,60000', '2000,4000,6000,8000,10000,12000', '50', '1'),
(118, 18, 100, 10, 380, 10, 10, '12500,55000,37500,50000,62500,75000', '2500,5000,7500,10000,12500,15000', '50', '1'),
(120, 19, 200, 10, 116, 10, 2, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '1'),
(121, 19, 200, 10, 174, 10, 3, '7500,15000,22500,37500,60000,75000', '1500,3000,4500,7500,12000,15000', '50', '1'),
(122, 19, 200, 10, 290, 10, 5, '12500,25000,37500,62500,100000,125000', '2500,5000,7500,12500,20000,25000', '50', '1'),
(123, 19, 200, 10, 464, 10, 8, '20000,40000,60000,100000,160000,200000', '4000,8000,12000,20000,32000,40000', '50', '1'),
(124, 19, 200, 10, 580, 10, 10, '25000,50000,75000,125000,200000,250000', '5000,10000,15000,25000,40000,50000', '50', '1'),
(125, 20, 100, 10, 80, 10, 2, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '10'),
(126, 20, 100, 10, 120, 10, 3, '7500,15000,22500,37500,60000,75000', '1500,3000,4500,7500,12000,15000', '50', '10'),
(127, 20, 100, 10, 200, 10, 5, '12500,25000,37500,62500,100000,125000', '2500,5000,7500,12500,20000,25000', '50', '10'),
(128, 20, 100, 10, 320, 10, 8, '20000,40000,60000,100000,160000,200000', '4000,8000,12000,20000,32000,40000', '50', '10'),
(129, 20, 100, 10, 400, 10, 10, '25000,50000,75000,125000,200000,250000', '5000,10000,15000,25000,40000,50000', '50', '10'),
(130, 21, 100, 100, 62, 10, 2, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '10'),
(131, 21, 100, 100, 93, 10, 3, '7500,15000,22500,37500,60000,75000', '1500,3000,4500,7500,12000,15000', '50', '10'),
(132, 21, 100, 100, 155, 10, 5, '12500,25000,37500,62500,100000,125000', '2500,5000,7500,12500,20000,25000', '50', '10'),
(133, 21, 100, 100, 248, 10, 8, '20000,40000,60000,100000,160000,200000', '4000,8000,12000,20000,32000,40000', '50', '10'),
(134, 21, 100, 100, 310, 10, 10, '25000,50000,75000,125000,200000,250000', '5000,10000,15000,25000,40000,50000', '50', '10'),
(135, 22, 100, 100, 30, 10, 2, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '10'),
(136, 22, 100, 100, 45, 10, 3, '1500,3000,4500,7500,12000,15000', '7500,15000,22500,37500,60000,75000', '50', '10'),
(137, 22, 100, 100, 75, 10, 5, '12500,25000,37500,62500,100000,125000', '2500,5000,7500,12500,20000,25000', '50', '10'),
(138, 22, 100, 100, 120, 10, 8, '20000,40000,60000,100000,160000,200000', '4000,8000,12000,20000,32000,40000', '50', '10'),
(139, 22, 100, 100, 150, 10, 10, '25000,50000,75000,125000,200000,250000', '5000,10000,15000,25000,40000,50000', '50', '10'),
(140, 23, 50, 10, 56, 10, 2, '2000,4000,6000,10000,16000,20000', '400,800,1200,2000,3200,4000', '50', '10'),
(141, 23, 50, 10, 84, 10, 3, '3000,6000,9000,15000,24000,30000', '600,1200,1800,3000,4800,6000', '50', '10'),
(142, 23, 50, 10, 140, 10, 5, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '10'),
(143, 23, 50, 10, 224, 10, 8, '8000,16000,24000,40000,64000,80000', '1600,3200,4800,8000,12800,16000', '50', '10'),
(144, 23, 50, 10, 280, 10, 10, '10000,20000,30000,50000,80000,100000', '2000,4000,6000,10000,16000,20000', '50', '10'),
(145, 25, 100, 1, 60, 10, 2, '5000,10000,15000,25000,40000,50000 ', '1000,2000,3000,5000,8000,10000', '50', '1'),
(146, 25, 100, 1, 90, 10, 3, '7500,15000,22500,37500,60000,75000', '1500,3000,4500,7500,12000,15000', '50', '1'),
(147, 25, 100, 1, 150, 10, 5, '12500,25000,37500,62500,100000,125000', '2500,5000,7500,12500,20000,25000', '50', '1'),
(148, 25, 100, 1, 240, 10, 8, '20000,40000,60000,100000,160000,200000', '4000,8000,12000,20000,32000,40000', '50', '1'),
(149, 25, 100, 1, 300, 10, 10, '25000,50000,75000,125000,200000,250000', '5000,10000,15000,25000,40000,50000', '50', '1'),
(150, 7, 100, 16, 128, 10, 1, '1000,1000', '400,400', '50', '1'),
(151, 7, 100, 16, 256, 10, 2, '2000,2000', '800,800', '50', '10'),
(152, 7, 100, 16, 384, 10, 3, '3000,3000', '1200,1200', '50', '10'),
(153, 7, 100, 16, 640, 10, 5, '5000,5000', '2000,2000', '50', '10'),
(154, 7, 100, 16, 1024, 10, 8, '8000,8000', '3200,3200', '50', '10'),
(155, 7, 100, 16, 1280, 10, 10, '10000,10000', '4000,4000', '50', '10'),
(157, 12, 50, 10, 23.33, 10, 1, '500,1000,1500,2500,4000,1000', '100,200,300,500,800,1000', '50', '0.0001'),
(158, 12, 50, 10, 46.67, 10, 2, '1000,2000,3000,5000,8000,10000', '200,400,600,1000,1600,2000', '50', '0.0001'),
(159, 12, 50, 10, 70, 10, 3, '1500,3000,4500,7500,12000,15000', '300,600,900,1500,2400,3000', '50', '0.0001'),
(160, 12, 50, 10, 116.67, 10, 5, '2500,5000,7500,12500,20000,25000', '500,1000,1500,2500,4000,5000', '50', '0.0001'),
(161, 12, 50, 10, 186.67, 10, 8, '4000,8000,12000,20000,32000,40000', '800,1600,2400,4000,6400,8000', '50', '0.0001'),
(162, 12, 50, 10, 233.33, 10, 10, '5000,10000,15000,25000,40000,50000', '1000,2000,3000,5000,8000,10000', '50', '0.0001'),
(163, 5, 700, 2, 480, 10, 1, '7000,7000', '2800,2800', '50', '0.01'),
(164, 5, 700, 2, 960, 10, 2, '14000,14000', '5600,5600', '50', '0.01'),
(165, 5, 700, 2, 1440, 10, 3, '21000,21000', '8400,8400', '50', '0.01'),
(166, 5, 700, 2, 2400, 10, 5, '35000,35000', '14000,14000', '50', '0.01'),
(167, 5, 700, 2, 3840, 10, 8, '56000,56000', '22400,22400', '50', '0.01'),
(168, 5, 700, 2, 4800, 10, 10, '70000,70000', '28000,28000', '50', '0.01'),
(169, 2, 375, 60, 2400, 10, 10, '37000,37000', '15000,15000', '50', '0.1');

-- --------------------------------------------------------

--
-- 表的结构 `retail`
--

CREATE TABLE IF NOT EXISTS `retail` (
  `id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL COMMENT '登录账号',
  `pass` varchar(20) NOT NULL COMMENT '登录密码',
  `company_name` varchar(50) NOT NULL COMMENT '会员单位名称',
  `realname` varchar(50) NOT NULL COMMENT '法人名称',
  `point` tinyint(3) DEFAULT '0' COMMENT '返点百分比%',
  `total_fee` decimal(11,2) DEFAULT '0.00' COMMENT '手续费总计',
  `deposit` decimal(11,0) DEFAULT '0' COMMENT '保证金',
  `tel` varchar(20) DEFAULT '' COMMENT '联系电话',
  `qq` varchar(20) DEFAULT '' COMMENT 'QQ',
  `id_card` varchar(100) DEFAULT '' COMMENT '法人身份证',
  `paper` varchar(100) DEFAULT '' COMMENT '营业执照',
  `paper2` varchar(100) DEFAULT '' COMMENT '组织机构代码证',
  `paper3` varchar(100) DEFAULT '' COMMENT '税务登记证',
  `code` varchar(100) DEFAULT '' COMMENT '邀请码',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `retail`
--

INSERT INTO `retail` (`id`, `account`, `pass`, `company_name`, `realname`, `point`, `total_fee`, `deposit`, `tel`, `qq`, `id_card`, `paper`, `paper2`, `paper3`, `code`, `created_at`, `created_by`) VALUES
(12, '总代理商', '123456', '总代理商', '宝', 10, '48449.43', '50000', '123456', '123456', '', '', '', '', '344485', '2016-12-03 15:57:36', 2),
(26, '金服科技', '123456', '丁总', '丁总', 90, '0.00', '0', '', '', '', '', '', '', '792679', '2019-01-12 08:04:28', 1),
(27, 'wz666', '123456', '吴总', '吴总', 90, '5036.40', '0', '', '', '', '', '', '', '106064', '2019-01-12 08:06:45', 2),
(28, 'hz6001', '123456', '张总', '张总', 90, '0.00', '0', '', '', '', '', '', '', '540423', '2019-01-12 08:09:41', 1),
(29, '张总666', '123456', '张总', '张总', 90, '0.00', '0', '', '', '', '', '', '', '732453', '2019-01-12 08:35:59', 1),
(30, 'wz888', '123456', '吴总', '吴总 ', 90, '0.00', '0', '', '', '', '', '', '', '582787', '2019-01-12 08:41:42', 1),
(31, '李总', '123456', '李总', '李总', 90, '0.00', '0', '', '', '', '', '', '', '376190', '2019-01-12 08:44:07', 1),
(32, 'ceshi', '123456', '测试', '测试法人', 0, '0.00', '0', '测试电话', '测试QQ', '', '', '', '', '824598', '2019-01-13 15:30:35', 1),
(33, 'cs02', '123123', '123123', '1', 0, '0.00', '0', '1', '1', '', '', '', '', '091744', '2019-01-12 17:02:13', 1),
(34, 'cs03', '123123', '123123', '123123', 0, '0.00', '0', '123123', '123123', '', '', '', '', '156157', '2019-01-12 17:05:19', 2),
(35, '张科', '123456', '123456', '张', 75, '9000.00', '0', '1', '', '', '', '', '', '143532', '2019-01-13 20:53:04', 2),
(36, '杭州运营', '123456', '杭州运营', '杭州运营', 0, '0.00', '0', '杭州运营', '', '', '', '', '', '092240', '2019-01-13 20:54:29', 2),
(37, 'w666888', '123456', '吴总', '吴总', 90, '3024.00', '0', '', '', '', '', '', '', '845228', '2019-01-14 12:28:14', 2),
(38, 'lz666', '123456', '杭吴', '杭吴', 90, '0.00', '0', '', '', '', '', '', '', '131130', '2019-01-14 20:05:02', 2),
(39, 'fang258133', '123456', '方总', '方总', 0, '11100.00', '0', '18177556488', '', '', '', '', '', '302670', '2019-01-16 17:40:35', 2),
(40, 'qwer', '123456', '123', '杭', 0, '0.00', '0', '', '', '', '', '', '', '979347', '2019-01-17 09:50:35', 2),
(41, 'asdf', '123456', '123', '杭', 0, '0.00', '0', '', '', '', '', '', '', '142823', '2019-01-17 09:53:56', 1),
(42, '金服科技1', '123456', '丁总', '丁总', 0, '0.00', '0', '', '', '', '', '', '', '045829', '2019-01-17 18:20:18', 2),
(44, 'hz6002', '123456', '广东', '张', 0, '0.00', '0', '', '', '', '', '', '', '707917', '2019-01-17 18:23:12', 2),
(45, '张科1', '123456', '张总', '张总', 0, '0.00', '0', '', '', '', '', '', '', '918303', '2019-01-17 18:35:52', 2),
(46, '123456a', '123456', '123456', '123456', 0, '0.00', '0', '13800138000', '123456', '', '', '', '', '981799', '2019-03-31 20:56:05', 2),
(47, 'wz8881', '123456', '123456', '123456', 0, '0.00', '0', '13800138000', '123456', '', '', '', '', '870608', '2019-03-31 20:57:54', 2);

-- --------------------------------------------------------

--
-- 表的结构 `retail_rebate`
--

CREATE TABLE IF NOT EXISTS `retail_rebate` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT '订单id',
  `user_id` int(11) NOT NULL COMMENT '返点用户ID',
  `pid` int(11) NOT NULL COMMENT '经纪人用户id',
  `amount` decimal(11,2) NOT NULL COMMENT '返点金额',
  `point` tinyint(4) NOT NULL COMMENT '返点百分比%',
  `created_at` datetime DEFAULT NULL COMMENT '申请时间',
  `updated_at` datetime DEFAULT NULL COMMENT '审核时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='返点记录表';

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` char(11) DEFAULT NULL,
  `title` char(20) DEFAULT NULL,
  `message` text,
  `reg_date` date DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='测试表（表结构可以随意调整）';

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(80) NOT NULL COMMENT '密码',
  `mobile` char(11) DEFAULT '' COMMENT '手机号',
  `nickname` varchar(100) DEFAULT '' COMMENT '昵称',
  `admin_id` int(11) DEFAULT '0' COMMENT '代理商ID',
  `pid` int(11) DEFAULT '0' COMMENT '邀请人ID',
  `invide_code` varchar(20) DEFAULT '' COMMENT '邀请码',
  `account` decimal(13,2) DEFAULT '0.00' COMMENT '账户余额',
  `points` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户积分',
  `moni_acount` decimal(13,2) NOT NULL DEFAULT '0.00' COMMENT '模拟账户',
  `blocked_moni` decimal(13,2) NOT NULL DEFAULT '0.00' COMMENT '模拟账户冻结资金',
  `blocked_account` decimal(13,2) DEFAULT '0.00' COMMENT '冻结金额',
  `profit_account` decimal(13,2) DEFAULT '0.00' COMMENT '总盈利',
  `loss_account` decimal(13,2) DEFAULT '0.00' COMMENT '总亏损',
  `total_fee` decimal(13,2) DEFAULT '0.00' COMMENT '返点总额',
  `point` tinyint(3) DEFAULT '0' COMMENT '经纪人返点百分比%',
  `tem_id` int(11) DEFAULT '0' COMMENT '临时管理员id',
  `fee_detail` varchar(250) DEFAULT '' COMMENT '各级返点详情',
  `login_time` datetime DEFAULT NULL COMMENT '最后登录时间',
  `is_manager` tinyint(4) DEFAULT '-1' COMMENT '是否是经纪人',
  `face` varchar(150) DEFAULT '' COMMENT '头像',
  `open_id` varchar(100) DEFAULT NULL COMMENT '微信的open_id',
  `state` tinyint(4) DEFAULT '1',
  `apply_state` tinyint(4) DEFAULT '1' COMMENT '申请状态：1未申请，2待审核，3审核通过，-1审核不通过',
  `created_at` datetime DEFAULT NULL COMMENT '注册时间',
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100150 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC COMMENT='用户表';

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `mobile`, `nickname`, `admin_id`, `pid`, `invide_code`, `account`, `points`, `moni_acount`, `blocked_moni`, `blocked_account`, `profit_account`, `loss_account`, `total_fee`, `point`, `tem_id`, `fee_detail`, `login_time`, `is_manager`, `face`, `open_id`, `state`, `apply_state`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(100051, '18658112263', '$2y$13$0AtyFxsju1ZTOIIWxmvoIeF4F0iQZkSuedQvPtr/E/g1E8W/tTqCS', '18658112263', '', 9, NULL, '', '0.00', 3600, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 9, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-12 08:48:25', 0, '2019-01-17 18:16:14', 2),
(100052, '15824472037', '$2y$13$VFb8D5Ztwb77r6NwGoQjjucn6owetegk.tSF0p0mi.pUANKP.qYgC', '15824472037', '宇宙', 9, NULL, '', '0.00', 3300, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-12 10:18:23', 0, '2019-01-17 09:34:30', 0),
(100053, '13800138000', '$2y$13$QQuwzZpF7W/fnvwPX.Mct.C9guTJ2BvQ0/Q6LSvTPfdn38KK8SS5O', '13800138000', '测试', 30, NULL, '', '198759.20', 16800, '101840.00', '0.00', '0.00', '10820.20', '-6767.00', '0.00', 0, 30, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-12 17:06:41', 0, '2019-04-09 18:19:47', 0),
(100054, '15715758563', '$2y$13$DE3VHsomvkoIF4PJQV0aY.IFrDJIh8WM1Ps3v8hzVJPlvC27Zbvd6', '15715758563', '彭哥', 9, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 12:42:03', 0, '2019-01-14 12:42:04', 100054),
(100055, '13736004142', '$2y$13$z3ViYYdY6PJ/xfiKCste.eJBCwBX6UeHO.hTYVqgrHYBmJMESVfCq', '13736004142', '王城', 33, NULL, '', '0.00', 2700, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 33, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 13:07:20', 0, '2019-01-16 23:59:29', 100064),
(100056, '15188563311', '$2y$13$VjavHtZkmIwa0sVkpAFdCOYMe0KxbNT2d44R3G/8v3LNrFH1/uA5O', '15188563311', '嗯哼', 25, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 25, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 15:02:01', 0, '2019-01-14 15:08:10', 25),
(100057, '18658143921', '$2y$13$RTKnC0ZNtoX7WBl2CslZ9uwkEy54kzyTIEt4oCPwzTgTKi5bFTfw6', '18658143921', '吴彦霖', 23, NULL, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 23, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 15:04:52', 0, '2019-01-17 22:03:42', 100105),
(100058, '13732258641', '$2y$13$vnZtR1HnL9AY13fbUQeKjemhHwc9XaL/FHi9BNW8z1OyQLQeBr9Se', '13732258641', '多多', 23, NULL, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 23, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 15:05:40', 0, '2019-01-17 18:36:17', 100112),
(100059, '15068828694', '$2y$13$6.BRj9fHny1QnlvxleoHxOH8cVQBsGLh9n0ipqgjeU/E1neU28.Rq', '15068828694', '小朱', 23, NULL, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 23, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 15:05:51', 0, '2019-01-17 21:30:04', 100083),
(100060, '17681802808', '$2y$13$Fmyyk1Ki.qDLIkfXp/JVFu/ffLHiAc9l.BjqztPUinH0Ff.KOzcvi', '17681802808', '洪彩霞', 23, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 15:08:28', 0, '2019-01-14 15:08:31', 100060),
(100061, '15021192598', '$2y$13$cGiH1xaN44VwqB.qbQtqBOHPpUHQ7MAo81LC7duNGNhO269SEYB3G', '15021192598', '小可', 23, NULL, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 23, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 15:08:52', 0, '2019-01-17 09:29:51', 0),
(100062, '13157123017', '$2y$13$lxNy9jl6bg9dSUOcq87t/u4GKzneX5OaZ1sB46riswNSdhe803ck2', '13157123017', '小周', 23, NULL, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 23, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 15:10:25', 0, '2019-01-17 11:55:35', 0),
(100063, '15554059191', '$2y$13$hZntchUwuSexLcU/jco7qOFNkMSJCsM189xELvvgmeykL2zz1zDi.', '15554059191', '张桂林', 9, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 9, '', NULL, -1, NULL, NULL, 1, 2, '2019-01-14 15:12:19', 0, '2019-01-14 15:20:25', 100063),
(100064, '15733898765', '$2y$13$QxCSWoow3meY.vNdYx8aT.FfynjVLbemsFAEOWpQJOT/zXzueIco2', '15733898765', '张振', 33, 100055, '', '10614.00', 5800, '100000.00', '0.00', '0.00', '10120.00', '-7520.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 15:16:41', 0, '2019-01-17 18:19:37', 0),
(100065, '18368033202', '$2y$13$yjG5JL09UyAQ1hDjlaomLeNXykejnjoyvdpVfZP2xa3CRNZ3Czyt6', '18368033202', '果冻', 23, 100058, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 15:18:08', 0, '2019-01-14 15:18:10', 100065),
(100066, '18072726402', '$2y$13$s2LDP/04LQN/nxGiyD0WfuvRxQUr6RZ07I0iHF1OSejeGIMPKAfW.', '18072726402', '小可', 23, 100061, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 15:19:48', 0, '2019-01-14 15:19:49', 100066),
(100067, '17515711885', '$2y$13$xWgWkawyOCkqpacKiC2J5OOea0wL1oimuvKyAcj18utSBw.oFEHT2', '17515711885', '徐荣荣', 9, NULL, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 15:34:17', 0, '2019-01-17 16:14:01', 0),
(100068, '13706714277', '$2y$13$q9Bpb9DHPPmh/07PPEFxGem/TZLKPRog09YrJ4/1BqGGhLLEFO9Ly', '13706714277', '吴', 23, NULL, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 23, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 15:39:34', 0, '2019-01-17 15:26:26', 0),
(100069, '13758258830', '$2y$13$T7KCCX8lZZYZwf.5nC2xyO96opSvUwH6FCllzskrtIyIf/lyUKE1y', '13758258830', '好', 9, NULL, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 15:48:53', 0, '2019-01-17 19:14:42', 0),
(100070, '15257141574', '$2y$13$xFAgptJ374VcRGMm38spYeHHKHeccOMoehBI6wgOi2c4HwHj1G49C', '15257141574', '婷婷', 9, NULL, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 15:53:52', 0, '2019-01-17 16:13:19', 0),
(100071, '18820211599', '$2y$13$pc5t8fKIGLJf2MUO/Eadfeaco93ADCkusxhePe2YDaAOIjZ3wXy8y', '18820211599', '张科', 31, NULL, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 31, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 15:57:10', 0, '2019-01-17 18:32:03', 0),
(100072, '18970085022', '$2y$13$vsqLRTg0kQLrigtlP4xUZeTxbIjTXev4D7TO6aHQowsO60yKzli2G', '18970085022', '飞将', 24, NULL, '', '0.00', 2700, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 16:09:51', 0, '2019-01-17 18:17:05', 0),
(100073, '15818501590', '$2y$13$Y9Q/QO10DSRbjcWyW2YnI.FuLUhIR3WqROkrb3E6yTEEfGW8ece4i', '15818501590', '棒棒糖', 38, NULL, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 38, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-14 16:24:11', 0, '2019-01-17 19:17:09', 38),
(100074, '18055684539', '$2y$13$dO2hCv9nQLrjPPY98A49cOeDNhDJt1HgeD07.CtGblZ07t7R4Cozu', '18055684539', '杨妍丽', 33, 100055, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 16:27:16', 0, '2019-01-15 14:21:04', 0),
(100075, '15770757978', '$2y$13$UnAqUI7m6y6VFn4VZe3eleBeYXFm0ZBWEIjMYI6C.gLfuAhBRRYp6', '15770757978', '许强', 31, 100071, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 16:33:13', 0, '2019-01-14 16:33:14', 100075),
(100076, '15553300979', '$2y$13$QOeZFdSqWqt0n4HCnauPZOSNg6.bljr4LPbTvWaooEqoYeWg6S752', '15553300979', '刘春青', 23, NULL, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 18:57:53', 0, '2019-01-16 09:55:58', 0),
(100077, '15014451395', '$2y$13$hTg9iOjpCKRWf.vHuU1pAuFqJR.4dWRxxmVa9IrW8QaXGhnGvtLUO', '15014451395', '许意乔', 23, 100059, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 18:59:23', 0, '2019-01-14 18:59:25', 100077),
(100078, '18455042316', '$2y$13$bTBUEoI7OQkJ9WqpFNmG7.tEqMsjlJCShZtmLGwabdnhkF5ZNog.q', '18455042316', '方家林', 25, NULL, '', '0.00', 2700, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:16:53', 0, '2019-01-16 00:23:24', 0),
(100079, '15658127999', '$2y$13$fFJIiDj6rUASFIE8jshACO0.wyqwVRJpDX07sMHg.TRYjIqKrr0NC', '15658127999', '赵君', 31, 100071, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:16:54', 0, '2019-01-15 02:45:05', 0),
(100080, '13778247227', '$2y$13$ibP3NgRy11wCYro5w1KpluowcfVWgQPv6o1mzrJdycwJqncA7p.Le', '13778247227', '秦国建', 23, NULL, '', '0.00', 2700, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:26:00', 0, '2019-01-17 19:14:05', 0),
(100081, '15973196760', '$2y$13$NAqeR6r7fbIL8fjQazOR0Om76bEfhjDnaNdssWB/GJaowfBohO6m6', '15973196760', '田志峰', 23, 100059, '', '2000.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:26:10', 0, '2019-01-17 15:57:04', 0),
(100082, '15665833979', '$2y$13$DWl6kbuyOnKZSJZGznCiR.hTNO0VphNuAqwXeLvZfoSHLrFeIg//.', '15665833979', '孙琪', 23, 0, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:33:35', 0, '2019-01-15 20:55:13', 0),
(100083, '18635466069', '$2y$13$Np4Xx0kr97AaSka0RljjpOu8PHjsgxAQrdJ9aRt3nvx1zDqDBImZy', '18635466069', '申立强', 23, 100059, '', '3038.00', 5800, '100000.00', '0.00', '0.00', '1400.00', '-1400.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:37:19', 0, '2019-01-17 21:31:34', 100083),
(100084, '15056977323', '$2y$13$XHIB9NHiCPd65Xe6xUOhSeIWAjficUx..dH/m0GxWhIU36bhZripe', '15056977323', '至尊宝', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:47:14', 0, '2019-01-14 19:47:16', 100084),
(100085, '13303308249', '$2y$13$jjvzVN4fcOvFf0oJ6v0ZgOyz1uMkTF/SDiLYxIQbt3xvQOzeBRm06', '13303308249', '贾天柱', 23, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:48:16', 0, '2019-01-14 19:48:17', 100085),
(100086, '13829669301', '$2y$13$SZ7pm95jZmql1DII8IXxgu3RnPeUOeuxCkU7aRJqdq2ODCGVPVSN2', '13829669301', '蒋大明', 23, NULL, '', '0.00', 5800, '100000.00', '0.00', '0.00', '0.00', '-400.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:53:46', 0, '2019-01-17 00:02:48', 0),
(100087, '15062051801', '$2y$13$ANfBZ7LNyq55rRpa0aa2F.9lR3.oYBfzmHR/tfWkcVO9igSNzP.7S', '15062051801', '侯健', 23, NULL, '', '1998.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 19:57:47', 0, '2019-01-17 20:32:12', 0),
(100088, '13574215067', '$2y$13$0beclWB93ieUGWNszYZNjOWK3vMQ5R/sU93IeaXMCqZkyuSsFhwGS', '13574215067', '文利武', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:02:44', 0, '2019-01-14 20:02:45', 100088),
(100089, '13803467122', '$2y$13$Mgxcil0gPUoa1rCnoCyuveRPbV6YbLtp0qTzkXxb8dubRZ.AsysxC', '13803467122', '王小长', 23, NULL, '', '0.00', 2700, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:04:39', 0, '2019-01-17 06:05:55', 0),
(100090, '13854376209', '$2y$13$FH.gCNNx0NoxqcnX4Oni7ORgxKd1NSlosk2QvRZrb7dpisgJRBRCG', '13854376209', '吕飞', 23, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:05:41', 0, '2019-01-14 20:05:43', 100090),
(100091, '13739153918', '$2y$13$tBDRNoQLuxRJjP4Qtj2zMergLtwz7cZRl724xqygm0XPytU3b4ruG', '13739153918', '丁峰', 23, NULL, '', '0.00', 2700, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:08:39', 0, '2019-01-17 20:13:54', 0),
(100092, '15170972378', '$2y$13$Im1jnn/HOojqXG1LKjzoHeJKJFbFTSWF8UhoBPyyfzymgSD2.R19u', '15170972378', '柯先森', 23, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:08:59', 0, '2019-01-14 20:09:05', 100092),
(100093, '18723702657', '$2y$13$MTTxmdmU20YAlkZILjn5geusxLQ7ZZnYB4/RvsE5kYQmQYvZ3x/Ei', '18723702657', '默默', 9, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:14:18', 0, '2019-01-14 20:14:20', 100093),
(100094, '17602204386', '$2y$13$NptE.9czucar1RYirWhwG.ICx4VccgTxCe0Rxjue.vZURiQFeckIK', '17602204386', '王晓强', 23, 100059, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:25:10', 0, '2019-01-17 08:00:15', 0),
(100095, '18290051166', '$2y$13$zFIsB99Pm/UohagbuFExOOtPiCAyxQcmTjTbehpdoB3eZgpxz0BHW', '18290051166', '邓云', 23, 100059, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:42:14', 0, '2019-01-14 20:42:16', 100095),
(100096, '18088053454', '$2y$13$.Re8T4DvnkJhA5HtXWCnsO517rVpzdqJ7oBsmdRYVZt3DiVaMdoAq', '18088053454', '姜会成', 23, 100061, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:48:12', 0, '2019-01-17 17:36:33', 0),
(100097, '15215814612', '$2y$13$rBb0dO30OuDfhKy4aQQJPOcvaFWzxjzVLo0Opgu0JzMdGG8qcCMsu', '15215814612', '你好', 9, 100061, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 20:50:43', 0, '2019-01-14 20:50:45', 100097),
(100098, '13136154105', '$2y$13$T7.OeiDns8Q65UkqSTSD7eGAlWa.3wdoyPLMEuK5NFaX6tGU5vQCu', '13136154105', '433101199106104015', 23, 100062, '', '0.00', 3000, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 23, '', NULL, -1, NULL, NULL, 1, 2, '2019-01-14 20:52:51', 0, '2019-01-17 14:07:32', 0),
(100099, '18298578927', '$2y$13$doStSxWNlyzdSGPCOKxeSeRgghEsNwDRS5mZgi5ssHW6Kk6bA.hyO', '18298578927', '吴秀梅', 9, 0, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 21:28:47', 0, '2019-01-15 00:05:02', 0),
(100100, '13869753888', '$2y$13$97o3UlT.uX03X3KzqLJANu9FKLbp6ibe14YlQGigCPwBJre.wzoxC', '13869753888', '刘建坊', 23, 100068, '', '5255.00', 5800, '100000.00', '0.00', '0.00', '6516.00', '-6800.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 22:05:05', 0, '2019-01-17 14:56:46', 2),
(100101, '13541937358', '$2y$13$yGoLNvbexybbPTZtEr6MR.pIDZzjnPEMGcj8kUbBE8rHfMbEtjBZS', '13541937358', '谯文利', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 23:17:37', 0, '2019-01-14 23:17:39', 100101),
(100102, '18529177721', '$2y$13$KNf0BSvzp20OpxPUzdci8ud1bLXKX51jvZfQiRTGnKwzahULoqJue', '18529177721', '张敏', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-14 23:31:18', 0, '2019-01-14 23:31:19', 100102),
(100103, '15112684663', '$2y$13$DfVn7UxlZx5qz8v6aObzzeLEbi/LhQcj/haCmHvAL6BxhI8NiPANO', '15112684663', '李亚东', 23, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 09:36:49', 0, '2019-01-15 09:36:51', 100103),
(100104, '18072859460', '$2y$13$1ZVoh5n9r8DmvUXxzjercOPmmUROo.Hj8psV573g7yWJdOC2y4rje', '18072859460', '吴彦祖', 9, 100057, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 09:40:01', 0, '2019-01-15 09:40:03', 100104),
(100105, '15052697905', '$2y$13$BHTYAJN1IuIFFSR7aWDujeVuE3Jyrqfs8Vc4rrYbW17bP5wdrPwly', '15052697905', '伍华萍', 23, 100057, '', '1572.00', 5500, '100000.00', '0.00', '0.00', '1320.00', '-800.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 09:41:10', 0, '2019-01-18 00:50:37', 0),
(100106, '17601241070', '$2y$13$DWIs0TvLAwfSk5TNfspJ6OfUa07ZXOrRxQ77HePgVauR.kLPnJbVm', '17601241070', '', 9, 100068, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 09:44:11', 0, '2019-01-15 09:44:12', 100106),
(100107, '17729884738', '$2y$13$x1LF7crRjNbBieKj6fvtzejbXKY/VoSif2/qtxiMA8OKB5VIyD/OK', '17729884738', '郑平', 23, 100059, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 10:01:30', 0, '2019-01-17 00:43:06', 0),
(100108, '18364385179', '$2y$13$d/nTICgZxPi/6yOm1O0mkeiK2yMHZ88.XC56JMyXMBZUkZm/MACwm', '18364385179', '傅勋先', 9, 0, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 11:45:50', 0, '2019-01-16 11:25:03', 0),
(100109, '13758112392', '$2y$13$LAFy387utMXhqkVR3oRs1Opok9PObCWo5KAq4CmXMBqmj0qDLayo2', '13758112392', '吴彦祖', 9, 100057, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 11:57:11', 0, '2019-01-15 11:57:13', 100109),
(100110, '18870920337', '$2y$13$D88au0WSvnexVKLu9aIS1Ov7IM0IRXWeB2npY6XteDFHxzVXbhmcq', '18870920337', '熊美静', 23, 100057, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 12:02:36', 100109, '2019-01-16 16:05:44', 0),
(100111, '18977368367', '$2y$13$SKkvrbnQa0pK4VLn459P8.AlYkxErdy0jc8c4v1wz.c3mxBwB9XeS', '18977368367', '赵松林', 23, NULL, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 12:16:21', 0, '2019-01-16 10:57:27', 0),
(100112, '13726165102', '$2y$13$zgbBYqFeO1acSAzhknnh6.n70wi026mTZ6cqH/xNivjc.TvHm98OK', '13726165102', '帅小祸', 23, 100058, '', '5130.00', 5500, '100000.00', '0.00', '0.00', '1680.00', '-1400.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 13:11:30', 0, '2019-01-17 18:37:03', 100112),
(100113, '13791369753', '$2y$13$ktIsOAEvhBlti.i3cL3lnexyLd6VhqH94mqL.8VJRjLRmrtWmaFOW', '13791369753', '冬暖夏凉', 9, NULL, '', '0.00', 2700, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 13:56:26', 0, '2019-01-17 14:06:02', 0),
(100114, '18551135860', '$2y$13$R8Kn/LauVT5yw5rEhVpBl.a4PZQLhuG/dfcG1P.03FTSPwAfSSZ62', '18551135860', '周善美', 23, NULL, '', '1046.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 15:09:51', 0, '2019-01-15 15:14:16', 2),
(100115, '13904740792', '$2y$13$7xnE4SO0GFJYPhMQ4rfKu.DLpFkRZ4INhZ2L3wvaQAgN0FsO9YNvq', '13904740792', '王利生', 23, NULL, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 15:31:09', 0, '2019-01-16 14:33:10', 0),
(100116, '17688000771', '$2y$13$6ZTedQRaSjbFIHjCbDyAzOD5eqpWmRBb7zn1/elPCpC9Ljl8iajIu', '17688000771', '谢霆锋', 23, 100059, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 15:40:49', 0, '2019-01-17 13:28:26', 0),
(100117, '18083995069', '$2y$13$yc7wYjnY5cb7I9jK8/SFWua1qS5DTvFc443qP1L1Apg7D/Jc5bmGq', '18083995069', '陈新勇', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 16:31:41', 0, '2019-01-15 16:31:42', 100117),
(100118, '13976624506', '$2y$13$UhR2xLIPvcsOhQPOGKB.hevkkqTs8jfUQCn.e3Ut.OhF7mWRAnMFC', '13976624506', '符国琼', 23, 0, '', '0.00', 2700, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 16:44:14', 0, '2019-01-17 17:38:45', 0),
(100119, '13947185202', '$2y$13$ejZLxjlgfaTOSkoxn5EWDeMOaZ5SMVyBZznPZZbJgRDhILgBQocfe', '13947185202', '郭花芹', 23, 100057, '', '3576.00', 5500, '100000.00', '0.00', '0.00', '0.00', '-1400.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 16:53:26', 0, '2019-01-17 10:16:09', 0),
(100120, '15848159289', '$2y$13$HqDvgiUii0Y/aQo7v0ltMumwH6vRcZhqaRpvvYN89r8iUZvNrpAEy', '15848159289', '王炳红', 23, 100057, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 18:54:00', 0, '2019-01-16 19:42:50', 0),
(100121, '15805205276', '$2y$13$x1WNGED/K3hxtMxC77dKGe9KykaF/W3rT1Aoi4aEq9HfY3f3PTUOm', '15805205276', '雷盛', 23, NULL, '', '5000.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 20:27:44', 0, '2019-01-17 17:56:27', 2),
(100122, '13332441123', '$2y$13$HzBI9HtV0i9VF2Qoi5g2yun3RKLRq6.b05HxS8rSVLtBiOLjgXQ0C', '13332441123', '汪健', 23, 100068, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 20:38:36', 0, '2019-01-15 20:38:37', 100122),
(100123, '17553012745', '$2y$13$cZm9fubhdy5sX4la6PjVHezHV.RHja0Am5O6mzcTa/Zxyg0DjSmPK', '17553012745', '春风十里', 9, NULL, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-15 22:37:45', 0, '2019-01-16 10:02:10', 0),
(100124, '13888547188', '$2y$13$FTQJopn/xLaWQBFFsd7TS.mUefLNHmrmbaCi5sbRt2kQDT4lqThA.', '13888547188', '胡孝均', 23, NULL, '', '2000.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-16 10:49:11', 0, '2019-01-17 09:49:43', 0),
(100125, '18318877291', '$2y$13$.EAxg0ylYIQrsIGrChXtlemz/VjptTWsMDBvuDQgGVpZgNT/LYvne', '18318877291', '胡炎', 23, 100059, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-16 10:50:48', 0, '2019-01-16 10:50:50', 100125),
(100126, '13532122315', '$2y$13$uKOfyJJilfIbeMlz5EPqCuyvGnFSmkKCqA.Dp07td/YggIZ2Cn0Cu', '13532122315', '赵石头', 23, 100061, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 11:46:28', 0, '2019-01-17 11:46:29', 100126),
(100127, '13596064321', '$2y$13$QlTyAKi31R1BMmjwL6eOB.mnsiJ.EF6oZg.AmvooGalfE6gI5ygtS', '13596064321', '任庆伟', 23, 100068, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 11:54:01', 0, '2019-01-17 11:54:02', 100127),
(100128, '13536861905', '$2y$13$3eE8fbNhFdnXaDBhYUaaCOl8uXDF8C9FFMDGDeOLuXo9rK.RhTeA2', '13536861905', '吴保山', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 12:05:32', 0, '2019-01-17 12:05:33', 100128),
(100129, '13159560880', '$2y$13$z/t4OnLGZ1dWRQsmOA8vTuDZTTEBVDR/ohLiysdh6writMAQvXeLG', '13159560880', '武坤', 23, 100068, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 13:11:20', 0, '2019-01-17 13:11:21', 100129),
(100130, '13969411222', '$2y$13$Y0Qk2KrIP7HUTKdpb5ZTP.PJH6.Ma9L5fIKFQhc3yqyiFrwSLW0ZG', '13969411222', '张雷', 23, 100059, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 13:28:59', 0, '2019-01-17 13:29:00', 100130),
(100131, '15196460538', '$2y$13$EY4fLHvyPLY2AU9goZigguMrRcj5.lI0Lm2.Ohl2JRdOL70vzzqk6', '15196460538', '石眉清', 23, 100057, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 15:23:28', 0, '2019-01-17 15:23:29', 100131),
(100132, '15995776255', '$2y$13$yVKr3MTo/P9ahQwk6Tq18uUrIA7l8Oyp7TgXFCecYPQNQR8hEO7Ka', '15995776255', '朱明辉', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 16:59:55', 0, '2019-01-17 16:59:56', 100132),
(100133, '15170636152', '$2y$13$yuipvA5PekuJsbZAoHBhfeLuV2dzN8Rs4zqRvgFsaVYb4ZELL7suK', '15170636152', '宋庆源', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 17:15:26', 0, '2019-01-17 17:15:28', 100133),
(100134, '13803358269', '$2y$13$Yk8gzdDNCoX1z/0Bo3hwIOEaxkD/zJGKv4lyXV222UUmqxiVdofVG', '13803358269', '', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 18:02:28', 0, '2019-01-17 18:02:30', 100134),
(100135, '15154133013', '$2y$13$jtplclq1lQ9eZm7mrhKXtOm76Fwky3oKfjZTe0S0r3f7M3lxmOECm', '15154133013', '张洪岳', 23, 100068, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 18:23:03', 0, '2019-01-17 18:23:04', 100135),
(100136, '17705810693', '$2y$13$I0i5yp7m44kwZXLZ5O/CR.eea7ifp5xCaHaeAa9cC2daOLSaiVog2', '17705810693', '', 38, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, -1, 1, '2019-01-17 18:41:22', 0, '2019-01-17 18:43:26', 2),
(100137, '18969640791', '$2y$13$toMaX.aE1t/07Gcnw.orYu2nwL3rIu3CIeyNFrDhsvraxINisXucS', '18969640791', '陈66', 38, NULL, '', '0.00', 2400, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 38, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-17 19:04:41', 0, '2019-02-22 15:53:24', 0),
(100138, '13735421249', '$2y$13$X0z4o8NA05k/d33.vHcTA.zMPtmd.RcTomZ1Hfm8p00rkOPZQqAcu', '13735421249', '王丹丹', 38, NULL, '', '1.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 38, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-17 19:10:49', 0, '2019-01-17 20:27:50', 2),
(100139, '13735476430', '$2y$13$M0th9W1ntzyv3z01Gago0.Mip9WfO1iOC/S..XQ3ssbUByUldQ/YK', '13735476430', '杨丽', 38, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 38, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-17 19:12:13', 0, '2019-01-17 22:21:29', 38),
(100140, '18072861346', '$2y$13$uYGAMCYWxsjiv2SX0/KaMeMdHTXTE05kMwetLw/ZztrQWDH5vvEEa', '18072861346', '', 38, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 19:14:45', 0, '2019-01-17 19:14:47', 100140),
(100141, '18705814608', '$2y$13$GlpWov24NgwNlAzitNRv2eyiyyug7FlzI9Tl0VPJro3yie2HDWKyK', '18705814608', '婷婷', 38, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 38, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-17 19:15:24', 0, '2019-01-17 19:17:20', 38),
(100142, '13575477739', '$2y$13$DNt4NP8L9UodJcJ3fh7Nb.kBIGDahkekzptV6LEcHCdPDnYRB98Wy', '13575477739', '桔子', 38, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 38, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-17 19:15:39', 0, '2019-01-17 19:19:35', 38),
(100143, '15658089587', '$2y$13$n3dtPWFfFNXqa7Wpaz4gU.NyayQwHmxuFSHs5wZf202eIdO0RghuW', '15658089587', '', 38, NULL, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 38, '', NULL, 1, NULL, NULL, 1, 3, '2019-01-17 19:17:18', 0, '2019-01-17 19:19:39', 38),
(100144, '18067928485', '$2y$13$yFk0FIuKRp3DhYgG.MRAmOrbytx7Xgp0B947Gzdgda4ora1CRzd.i', '18067928485', '宝宝', 38, 100141, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 19:59:13', 0, '2019-01-17 19:59:15', 100144),
(100145, '18258618912', '$2y$13$e/gWt0k2zX8p2XzIe4i6EOhQYIbakkz1nNeSEiHhHZK9gxRDlFDee', '18258618912', '', 23, 100062, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 20:00:50', 0, '2019-01-17 20:00:52', 100145),
(100146, '15397022837', '$2y$13$giZmadqpvgMgV7eotLboSO5CwgBYBrfLCta4yNSHI93UdMbi1XLDy', '15397022837', '薛', 38, 100138, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 20:01:00', 0, '2019-01-17 20:01:02', 100146),
(100147, '15669085923', '$2y$13$w1oSzKfuVJZO2DLSfXEes.GoEQ5YVfgU6BQCnJk3tNAI6ymIGG9/6', '15669085923', '钱多多', 38, 100073, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 20:35:37', 0, '2019-01-17 20:35:39', 100147),
(100148, '18308948453', '$2y$13$d/ZgPNLFMXrQIvUQF4TChuOQXSOyUV29b0lnAC.phfT/NbElLM55.', '18308948453', '开然', 23, 100059, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 20:44:43', 0, '2019-01-17 20:44:45', 100148),
(100149, '15616965147', '$2y$13$BS3RK0jnXGGHHlBgE/A3POkHEF//dO1eK.1Zy40jY2IEwWJMoFhRG', '15616965147', '贺芳', 23, 100061, '', '0.00', 2100, '100000.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, '', NULL, -1, NULL, NULL, 1, 1, '2019-01-17 20:56:05', 0, '2019-01-17 21:03:38', 100149);

-- --------------------------------------------------------

--
-- 表的结构 `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `realname` varchar(100) NOT NULL COMMENT '真实姓名',
  `id_card` varchar(100) NOT NULL COMMENT '身份证号',
  `bank_name` varchar(100) NOT NULL COMMENT '银行名称',
  `bank_card` varchar(100) NOT NULL COMMENT '银行卡号',
  `bank_user` varchar(100) NOT NULL COMMENT '持卡人姓名',
  `bank_mobile` char(11) NOT NULL COMMENT '银行预留手机号',
  `bank_address` varchar(100) DEFAULT '' COMMENT '开户行地址',
  `address` varchar(150) DEFAULT '' COMMENT '地址',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='用户账户表';

--
-- 转存表中的数据 `user_account`
--

INSERT INTO `user_account` (`id`, `user_id`, `realname`, `id_card`, `bank_name`, `bank_card`, `bank_user`, `bank_mobile`, `bank_address`, `address`, `created_at`) VALUES
(1, 100051, '陈南', '33', '33', '11', '陈南', '18658112263', '', '', '2019-01-12 19:29:57'),
(2, 100055, '王城', '532124199508190718', '中国建设银行', '6210811590000457356', '王城', '13736004142', '宁波甬南支行', '', '2019-01-14 13:26:07'),
(3, 100056, '嗯哼', '1', '36', '732453', '嗯哼', '15188563311', '恩', '', '2019-01-14 15:07:51'),
(4, 100059, '霜霜', '123456789112451', '农业银行', '875461325794685', '霜霜', '15068828694', '987546312578946513287', '', '2019-01-14 15:11:28'),
(5, 100061, '小可', '123456789123456789', '123456', '123456789123456789', '小可', '15021192598', '噜啦噜啦嘞', '', '2019-01-14 15:11:43'),
(6, 100057, '吴彦霖', '123456789876543210', '招商银行', '12345643649453784646', '吴彦霖', '18658143921', '✖️', '', '2019-01-14 15:12:05'),
(7, 100058, '郭敏丹', '332624199008210985', '11111141', '56555365556', '郭敏丹', '13732258641', '中国建行银行', '', '2019-01-14 15:12:41'),
(8, 100062, '小周', '412351069785321', '三墩支行', '321436578121', '小周', '13157123017', '浙江省杭州市西湖区三墩镇三墩支行', '', '2019-01-14 15:14:15'),
(9, 100063, '张桂林', '372922199008294431', '农业银行', '622848007542565521', '张桂林', '15554059191', '农业银行曹县支行', '', '2019-01-14 15:20:25'),
(10, 100068, '吴', '1113133131313131', 'nidingmingo', '公公民', '吴', '13706714277', 'omingong', '', '2019-01-14 15:40:33'),
(11, 100071, '张科', '511121198111082171', '工商银行', '6212264000036909337', '张科', '18820211599', '深圳龙翔支行', '', '2019-01-14 15:59:10'),
(12, 100098, '杨正静', '433101199106104015', 'yzo1152672300', '62375757000007443899', '杨正静', '13136154105', 'yzo1152672300', '', '2019-01-14 22:08:12'),
(13, 100086, '落大明', 'xx', '中国建设银行', '6236683100001473046', '落大明', '13829669301', '汕头市杏花支行', '', '2019-01-16 09:26:07'),
(14, 100105, '伍华萍', 'xx', '中国建设银行', '6217001370026172072', '伍华萍', '15052697905', '江苏省南京市孝陵卫分理处', '', '2019-01-16 09:52:24'),
(15, 100137, '陈晴月', '123456', '123456', '123456', '陈晴月', '18969640791', '123456', '', '2019-01-17 19:13:08'),
(16, 100141, '婷婷', '123456', '123456', '123456', '婷婷', '18705814608', '123456', '', '2019-01-17 19:16:24'),
(17, 100073, '徐静', '123456', '招商银行', '123456', '徐静', '15818501590', '', '', '2019-01-17 19:16:43'),
(18, 100138, '王丹丹', '1234567896', '123456', '13456', '王丹丹', '13735421249', '42695', '', '2019-01-17 19:16:48'),
(19, 100142, '黄桔', '123456', '123456', '123456', '黄桔', '13575477739', '', '', '2019-01-17 19:17:49'),
(20, 100143, '钉钉', '123456789', '123456789', '123456789', '钉钉', '15658089587', '农行', '', '2019-01-17 19:18:35'),
(21, 100139, '杨丽', '15387769753698224', '招商银行', '1698756398429', '杨丽', '13735476430', '城 西支行', '', '2019-01-17 22:03:34'),
(22, 100053, '1123', 'xxx', '11', '11111', '1123', '13800138000', '11', '', '2019-02-20 11:41:57');

-- --------------------------------------------------------

--
-- 表的结构 `user_action`
--

CREATE TABLE IF NOT EXISTS `user_action` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `target_id` int(11) NOT NULL COMMENT '目标ID',
  `type` tinyint(4) DEFAULT '1' COMMENT '类型：1资讯',
  `created_at` datetime DEFAULT NULL COMMENT '发生时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user_charge`
--

CREATE TABLE IF NOT EXISTS `user_charge` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `trade_no` varchar(250) NOT NULL DEFAULT '' COMMENT '订单编号',
  `amount` decimal(11,2) NOT NULL COMMENT '充值金额',
  `charge_type` tinyint(4) DEFAULT '1' COMMENT '充值方式：1支付宝，2微信',
  `charge_state` tinyint(4) DEFAULT NULL COMMENT '充值状态：1待付款，2成功，-1失败',
  `created_at` datetime DEFAULT NULL COMMENT '充值时间',
  `updated_at` datetime DEFAULT NULL COMMENT '审核时间'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='充值记录表';

--
-- 转存表中的数据 `user_charge`
--

INSERT INTO `user_charge` (`id`, `user_id`, `trade_no`, `amount`, `charge_type`, `charge_state`, `created_at`, `updated_at`) VALUES
(1, 100064, '100064201901141743009639', '5914.00', 4, 2, '2019-01-14 17:43:00', '2019-01-14 17:43:00'),
(2, 100083, '100083201901142006008300', '3838.00', 4, 2, '2019-01-14 20:06:00', '2019-01-14 20:06:00'),
(3, 100064, '100064201901142006405005', '560.00', 4, 2, '2019-01-14 20:06:40', '2019-01-14 20:06:40'),
(4, 100087, '100087201901151447178459', '1998.00', 4, 2, '2019-01-15 14:47:17', '2019-01-15 14:47:17'),
(5, 100100, '100100201901151503082255', '428.00', 4, 2, '2019-01-15 15:03:08', '2019-01-15 15:03:08'),
(6, 100081, '100081201901151511269250', '2000.00', 4, 2, '2019-01-15 15:11:26', '2019-01-15 15:11:26'),
(7, 100114, '100114201901151514163473', '1046.00', 4, 2, '2019-01-15 15:14:16', '2019-01-15 15:14:16'),
(8, 100100, '100100201901151633411199', '3001.00', 4, 2, '2019-01-15 16:33:41', '2019-01-15 16:33:41'),
(9, 100105, '100105201901151634093613', '1000.00', 4, 2, '2019-01-15 16:34:09', '2019-01-15 16:34:09'),
(10, 100105, '100105201901151702343795', '200.00', 4, 2, '2019-01-15 17:02:34', '2019-01-15 17:02:34'),
(11, 100119, '100119201901151704238199', '2256.00', 4, 2, '2019-01-15 17:04:23', '2019-01-15 17:04:23'),
(12, 100086, '100086201901151946587308', '800.00', 4, 2, '2019-01-15 19:46:58', '2019-01-15 19:46:58'),
(13, 100105, '100105201901161156458594', '300.00', 4, 2, '2019-01-16 11:56:45', '2019-01-16 11:56:45'),
(14, 100112, '100112201901161157193646', '2040.00', 4, 2, '2019-01-16 11:57:19', '2019-01-16 11:57:19'),
(15, 100124, '100124201901161157505529', '2000.00', 4, 2, '2019-01-16 11:57:50', '2019-01-16 11:57:50'),
(16, 100119, '100119201901161502056608', '3000.00', 4, 2, '2019-01-16 15:02:05', '2019-01-16 15:02:05'),
(17, 100064, '100064201901161829525930', '4600.00', 4, 2, '2019-01-16 18:29:52', '2019-01-16 18:29:52'),
(18, 100064, '100064201901161834406990', '300.00', 4, 2, '2019-01-16 18:34:40', '2019-01-16 18:34:40'),
(19, 100112, '100112201901171008244661', '200.00', 4, 2, '2019-01-17 10:08:24', '2019-01-17 10:08:24'),
(20, 100112, '100112201901171040447329', '3650.00', 4, 2, '2019-01-17 10:40:44', '2019-01-17 10:40:44'),
(21, 100105, '100105201901171326543474', '100.00', 4, 2, '2019-01-17 13:26:54', '2019-01-17 13:26:54'),
(22, 100100, '100100201901171456469724', '5010.00', 4, 2, '2019-01-17 14:56:46', '2019-01-17 14:56:46'),
(23, 100121, '100121201901171756275300', '5000.00', 4, 2, '2019-01-17 17:56:27', '2019-01-17 17:56:27'),
(24, 100138, '100138201901172027503877', '1.00', 4, 2, '2019-01-17 20:27:50', '2019-01-17 20:27:50');

-- --------------------------------------------------------

--
-- 表的结构 `user_coupon`
--

CREATE TABLE IF NOT EXISTS `user_coupon` (
  `id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `use_state` tinyint(4) DEFAULT '1' COMMENT '使用状态：1未使用，2已使用，-1已过期',
  `number` int(11) DEFAULT '1' COMMENT '数量',
  `valid_time` datetime DEFAULT NULL COMMENT '过期时间',
  `created_at` datetime DEFAULT NULL COMMENT '获得时间',
  `updated_at` datetime DEFAULT NULL COMMENT '使用时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户持有优惠券表';

-- --------------------------------------------------------

--
-- 表的结构 `user_feedback`
--

CREATE TABLE IF NOT EXISTS `user_feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户反馈表';

--
-- 转存表中的数据 `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `user_id`, `mobile`, `name`, `content`, `time`) VALUES
(5, 100053, '13800138000', '测试', '123', '2019-02-28 13:52:57');

-- --------------------------------------------------------

--
-- 表的结构 `user_notice`
--

CREATE TABLE IF NOT EXISTS `user_notice` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT '1' COMMENT '状态1未看 2已看',
  `user_id` int(10) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='用户信息中心';

--
-- 转存表中的数据 `user_notice`
--

INSERT INTO `user_notice` (`id`, `title`, `content`, `time`, `status`, `user_id`) VALUES
(3, '新人有礼', '<p>你好，感谢您的关注。</p>', '2018-05-20 00:00:00', '2', 100006),
(4, '富鼎欢迎您！', '<p>富鼎欢迎您！</p>', '2018-05-21 00:00:00', '2', 100014),
(5, '晚上有行情，请留意', '<p>晚上有行情，请留意</p>', '2018-05-21 00:00:00', '2', 100013),
(6, '最新行情热爆', '<p style="margin: 0px auto; padding: 0px; box-sizing: border-box; white-space: normal; color: rgb(153, 153, 153); font-size: 14px; font-family: 微软雅黑; background-color: rgb(250, 250, 250);"><span style="margin: 0px auto; padding: 0px; box-sizing: border-bo', '2018-06-28 00:00:00', '2', 100032),
(7, '最新行情热播', '<p>亲爱的股民，请关注最新的行情动态。</p><p>接口了方法的，的方法克里斯方法，的咖啡馆哦的，的，的，哦封口费的，的都的订单看到订单，的法师快乐风纪扣 &nbsp; 房间开房间记录了房间爱看啊了了 。</p>', '2018-06-28 00:00:00', '2', 100032),
(8, '你好', '<p>飞 l订单的订单的的的艾丝凡个个的</p>', '2018-06-27 00:00:00', '2', 100032),
(9, '您好', '<p>富鼎期货欢迎您</p>', '2018-07-18 00:00:00', '1', 100044),
(10, '富鼎欢迎您', '<p>富鼎欢迎您，实盘交易。</p>', '2018-07-18 00:00:00', '1', 100040),
(11, 'test', '<p>test</p>', '2019-02-28 00:00:00', '2', 100053);

-- --------------------------------------------------------

--
-- 表的结构 `user_payment`
--

CREATE TABLE IF NOT EXISTS `user_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT '1' COMMENT '支付方式 1微信 2支付宝 3银行卡',
  `info` varchar(255) DEFAULT NULL COMMENT '账号或银行卡',
  `money` float(11,2) DEFAULT NULL COMMENT '金额',
  `status` int(1) DEFAULT '1' COMMENT '状态 1未审核 2审核通过 3审核失败'
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COMMENT='支付提交信息';

--
-- 转存表中的数据 `user_payment`
--

INSERT INTO `user_payment` (`id`, `user_id`, `type`, `info`, `money`, `status`) VALUES
(35, 100053, 1, '111111', 10000.00, 2),
(36, 100053, 2, '1111111111111', 20000.00, 2);

-- --------------------------------------------------------

--
-- 表的结构 `user_points`
--

CREATE TABLE IF NOT EXISTS `user_points` (
  `id` int(10) unsigned NOT NULL COMMENT 'id主键',
  `user_id` int(10) unsigned NOT NULL COMMENT '用户ID',
  `type` tinyint(3) unsigned NOT NULL COMMENT '类别(1-使用积分，2-注册成功赠送，3-首次充值成功赠送，4-首次模拟交易赠送，5-首次实盘交易赠送)',
  `points` int(10) unsigned NOT NULL COMMENT '积分值',
  `points_amount` int(10) unsigned NOT NULL COMMENT '当前积分账号余额',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '操作时间'
) ENGINE=InnoDB AUTO_INCREMENT=491 DEFAULT CHARSET=utf8 COMMENT='用户积分表';

--
-- 转存表中的数据 `user_points`
--

INSERT INTO `user_points` (`id`, `user_id`, `type`, `points`, `points_amount`, `datetime`) VALUES
(150, 100051, 6, 300, 300, '2019-01-12 00:48:26'),
(151, 100051, 2, 1800, 2100, '2019-01-12 00:48:26'),
(152, 100052, 6, 300, 300, '2019-01-12 02:18:25'),
(153, 100052, 2, 1800, 2100, '2019-01-12 02:18:25'),
(154, 100053, 6, 300, 300, '2019-01-12 09:06:43'),
(155, 100053, 2, 1800, 2100, '2019-01-12 09:06:43'),
(156, 100051, 6, 300, 2400, '2019-01-13 12:33:10'),
(157, 100052, 6, 300, 2400, '2019-01-14 02:12:20'),
(158, 100054, 6, 300, 300, '2019-01-14 04:42:04'),
(159, 100054, 2, 1800, 2100, '2019-01-14 04:42:04'),
(160, 100055, 6, 300, 300, '2019-01-14 05:07:21'),
(161, 100055, 2, 1800, 2100, '2019-01-14 05:07:21'),
(162, 100051, 6, 300, 2700, '2019-01-14 06:56:11'),
(163, 100056, 6, 300, 300, '2019-01-14 07:02:03'),
(164, 100056, 2, 1800, 2100, '2019-01-14 07:02:03'),
(165, 100057, 6, 300, 300, '2019-01-14 07:04:53'),
(166, 100057, 2, 1800, 2100, '2019-01-14 07:04:53'),
(167, 100058, 6, 300, 300, '2019-01-14 07:05:42'),
(168, 100058, 2, 1800, 2100, '2019-01-14 07:05:42'),
(169, 100059, 6, 300, 300, '2019-01-14 07:05:52'),
(170, 100059, 2, 1800, 2100, '2019-01-14 07:05:52'),
(171, 100060, 6, 300, 300, '2019-01-14 07:08:31'),
(172, 100060, 2, 1800, 2100, '2019-01-14 07:08:31'),
(173, 100061, 6, 300, 300, '2019-01-14 07:08:54'),
(174, 100061, 2, 1800, 2100, '2019-01-14 07:08:55'),
(175, 100062, 6, 300, 300, '2019-01-14 07:10:29'),
(176, 100062, 2, 1800, 2100, '2019-01-14 07:10:29'),
(177, 100063, 6, 300, 300, '2019-01-14 07:12:21'),
(178, 100063, 2, 1800, 2100, '2019-01-14 07:12:21'),
(179, 100064, 6, 300, 300, '2019-01-14 07:16:43'),
(180, 100064, 2, 1800, 2100, '2019-01-14 07:16:43'),
(181, 100065, 6, 300, 300, '2019-01-14 07:18:10'),
(182, 100065, 2, 1800, 2100, '2019-01-14 07:18:10'),
(183, 100066, 6, 300, 300, '2019-01-14 07:19:49'),
(184, 100066, 2, 1800, 2100, '2019-01-14 07:19:49'),
(185, 100067, 6, 300, 300, '2019-01-14 07:34:19'),
(186, 100067, 2, 1800, 2100, '2019-01-14 07:34:19'),
(187, 100068, 6, 300, 300, '2019-01-14 07:39:35'),
(188, 100068, 2, 1800, 2100, '2019-01-14 07:39:35'),
(189, 100069, 6, 300, 300, '2019-01-14 07:48:54'),
(190, 100069, 2, 1800, 2100, '2019-01-14 07:48:54'),
(191, 100070, 6, 300, 300, '2019-01-14 07:53:53'),
(192, 100070, 2, 1800, 2100, '2019-01-14 07:53:53'),
(193, 100071, 6, 300, 300, '2019-01-14 07:57:12'),
(194, 100071, 2, 1800, 2100, '2019-01-14 07:57:12'),
(195, 100072, 6, 300, 300, '2019-01-14 08:09:53'),
(196, 100072, 2, 1800, 2100, '2019-01-14 08:09:53'),
(197, 100073, 6, 300, 300, '2019-01-14 08:24:12'),
(198, 100073, 2, 1800, 2100, '2019-01-14 08:24:12'),
(199, 100074, 6, 300, 300, '2019-01-14 08:27:17'),
(200, 100074, 2, 1800, 2100, '2019-01-14 08:27:17'),
(201, 100075, 6, 300, 300, '2019-01-14 08:33:14'),
(202, 100075, 2, 1800, 2100, '2019-01-14 08:33:14'),
(203, 100076, 6, 300, 300, '2019-01-14 10:57:55'),
(204, 100076, 2, 1800, 2100, '2019-01-14 10:57:55'),
(205, 100077, 6, 300, 300, '2019-01-14 10:59:25'),
(206, 100077, 2, 1800, 2100, '2019-01-14 10:59:25'),
(207, 100078, 6, 300, 300, '2019-01-14 11:16:54'),
(208, 100078, 2, 1800, 2100, '2019-01-14 11:16:54'),
(209, 100079, 6, 300, 300, '2019-01-14 11:16:56'),
(210, 100079, 2, 1800, 2100, '2019-01-14 11:16:56'),
(211, 100080, 6, 300, 300, '2019-01-14 11:26:02'),
(212, 100080, 2, 1800, 2100, '2019-01-14 11:26:02'),
(213, 100081, 6, 300, 300, '2019-01-14 11:26:12'),
(214, 100081, 2, 1800, 2100, '2019-01-14 11:26:12'),
(215, 100082, 6, 300, 300, '2019-01-14 11:33:37'),
(216, 100082, 2, 1800, 2100, '2019-01-14 11:33:37'),
(217, 100083, 6, 300, 300, '2019-01-14 11:37:20'),
(218, 100083, 2, 1800, 2100, '2019-01-14 11:37:20'),
(219, 100084, 6, 300, 300, '2019-01-14 11:47:16'),
(220, 100084, 2, 1800, 2100, '2019-01-14 11:47:16'),
(221, 100085, 6, 300, 300, '2019-01-14 11:48:17'),
(222, 100085, 2, 1800, 2100, '2019-01-14 11:48:17'),
(223, 100086, 6, 300, 300, '2019-01-14 11:53:48'),
(224, 100086, 2, 1800, 2100, '2019-01-14 11:53:48'),
(225, 100087, 6, 300, 300, '2019-01-14 11:57:49'),
(226, 100087, 2, 1800, 2100, '2019-01-14 11:57:49'),
(227, 100088, 6, 300, 300, '2019-01-14 12:02:45'),
(228, 100088, 2, 1800, 2100, '2019-01-14 12:02:45'),
(229, 100089, 6, 300, 300, '2019-01-14 12:04:41'),
(230, 100089, 2, 1800, 2100, '2019-01-14 12:04:41'),
(231, 100090, 6, 300, 300, '2019-01-14 12:05:43'),
(232, 100090, 2, 1800, 2100, '2019-01-14 12:05:43'),
(233, 100091, 6, 300, 300, '2019-01-14 12:08:40'),
(234, 100091, 2, 1800, 2100, '2019-01-14 12:08:40'),
(235, 100092, 6, 300, 300, '2019-01-14 12:09:04'),
(236, 100092, 2, 1800, 2100, '2019-01-14 12:09:05'),
(237, 100093, 6, 300, 300, '2019-01-14 12:14:20'),
(238, 100093, 2, 1800, 2100, '2019-01-14 12:14:20'),
(239, 100094, 6, 300, 300, '2019-01-14 12:25:12'),
(240, 100094, 2, 1800, 2100, '2019-01-14 12:25:12'),
(241, 100095, 6, 300, 300, '2019-01-14 12:42:16'),
(242, 100095, 2, 1800, 2100, '2019-01-14 12:42:16'),
(243, 100096, 6, 300, 300, '2019-01-14 12:48:14'),
(244, 100096, 2, 1800, 2100, '2019-01-14 12:48:14'),
(245, 100097, 6, 300, 300, '2019-01-14 12:50:45'),
(246, 100097, 2, 1800, 2100, '2019-01-14 12:50:45'),
(247, 100098, 6, 300, 300, '2019-01-14 12:52:52'),
(248, 100098, 2, 1800, 2100, '2019-01-14 12:52:52'),
(249, 100099, 6, 300, 300, '2019-01-14 13:28:48'),
(250, 100099, 2, 1800, 2100, '2019-01-14 13:28:49'),
(251, 100100, 6, 300, 300, '2019-01-14 14:05:07'),
(252, 100100, 2, 1800, 2100, '2019-01-14 14:05:07'),
(253, 100101, 6, 300, 300, '2019-01-14 15:17:39'),
(254, 100101, 2, 1800, 2100, '2019-01-14 15:17:39'),
(255, 100102, 6, 300, 300, '2019-01-14 15:31:19'),
(256, 100102, 2, 1800, 2100, '2019-01-14 15:31:19'),
(257, 100099, 6, 300, 2400, '2019-01-14 16:05:02'),
(258, 100086, 6, 300, 2400, '2019-01-14 17:59:47'),
(259, 100079, 6, 300, 2400, '2019-01-14 18:45:05'),
(260, 100061, 6, 300, 2400, '2019-01-14 22:32:23'),
(261, 100069, 6, 300, 2400, '2019-01-14 23:01:33'),
(262, 100100, 6, 300, 2400, '2019-01-15 00:04:07'),
(263, 100064, 6, 300, 2400, '2019-01-15 00:25:35'),
(264, 100094, 6, 300, 2400, '2019-01-15 01:17:21'),
(265, 100068, 6, 300, 2400, '2019-01-15 01:21:04'),
(266, 100057, 6, 300, 2400, '2019-01-15 01:23:42'),
(267, 100103, 6, 300, 300, '2019-01-15 01:36:51'),
(268, 100103, 2, 1800, 2100, '2019-01-15 01:36:51'),
(269, 100104, 6, 300, 300, '2019-01-15 01:40:03'),
(270, 100104, 2, 1800, 2100, '2019-01-15 01:40:03'),
(271, 100105, 6, 300, 300, '2019-01-15 01:41:12'),
(272, 100105, 2, 1800, 2100, '2019-01-15 01:41:12'),
(273, 100106, 6, 300, 300, '2019-01-15 01:44:12'),
(274, 100106, 2, 1800, 2100, '2019-01-15 01:44:12'),
(275, 100058, 6, 300, 2400, '2019-01-15 01:45:33'),
(276, 100107, 6, 300, 300, '2019-01-15 02:01:32'),
(277, 100107, 2, 1800, 2100, '2019-01-15 02:01:32'),
(278, 100072, 6, 300, 2400, '2019-01-15 02:14:23'),
(279, 100081, 6, 300, 2400, '2019-01-15 02:21:20'),
(280, 100062, 6, 300, 2400, '2019-01-15 02:41:09'),
(281, 100059, 6, 300, 2400, '2019-01-15 02:43:21'),
(282, 100052, 6, 300, 2700, '2019-01-15 02:59:31'),
(283, 100055, 6, 300, 2400, '2019-01-15 03:33:55'),
(284, 100108, 6, 300, 300, '2019-01-15 03:45:52'),
(285, 100108, 2, 1800, 2100, '2019-01-15 03:45:52'),
(286, 100064, 5, 2800, 5200, '2019-01-15 03:55:29'),
(287, 100087, 6, 300, 2400, '2019-01-15 03:56:12'),
(288, 100109, 6, 300, 300, '2019-01-15 03:57:13'),
(289, 100109, 2, 1800, 2100, '2019-01-15 03:57:13'),
(290, 100110, 6, 300, 300, '2019-01-15 04:02:38'),
(291, 100110, 2, 1800, 2100, '2019-01-15 04:02:38'),
(292, 100111, 6, 300, 300, '2019-01-15 04:16:22'),
(293, 100111, 2, 1800, 2100, '2019-01-15 04:16:22'),
(294, 100112, 6, 300, 300, '2019-01-15 05:11:31'),
(295, 100112, 2, 1800, 2100, '2019-01-15 05:11:31'),
(296, 100067, 6, 300, 2400, '2019-01-15 05:12:27'),
(297, 100113, 6, 300, 300, '2019-01-15 05:56:28'),
(298, 100113, 2, 1800, 2100, '2019-01-15 05:56:28'),
(299, 100051, 6, 300, 3000, '2019-01-15 06:11:09'),
(300, 100074, 6, 300, 2400, '2019-01-15 06:21:04'),
(301, 100114, 6, 300, 300, '2019-01-15 07:09:53'),
(302, 100114, 2, 1800, 2100, '2019-01-15 07:09:53'),
(303, 100115, 6, 300, 300, '2019-01-15 07:31:10'),
(304, 100115, 2, 1800, 2100, '2019-01-15 07:31:10'),
(305, 100116, 6, 300, 300, '2019-01-15 07:40:51'),
(306, 100116, 2, 1800, 2100, '2019-01-15 07:40:51'),
(307, 100098, 6, 300, 2400, '2019-01-15 08:04:38'),
(308, 100117, 6, 300, 300, '2019-01-15 08:31:42'),
(309, 100117, 2, 1800, 2100, '2019-01-15 08:31:42'),
(310, 100080, 6, 300, 2400, '2019-01-15 08:35:24'),
(311, 100118, 6, 300, 300, '2019-01-15 08:44:16'),
(312, 100118, 2, 1800, 2100, '2019-01-15 08:44:16'),
(313, 100119, 6, 300, 300, '2019-01-15 08:53:28'),
(314, 100119, 2, 1800, 2100, '2019-01-15 08:53:28'),
(315, 100096, 6, 300, 2400, '2019-01-15 09:15:47'),
(316, 100083, 6, 300, 2400, '2019-01-15 10:01:11'),
(317, 100120, 6, 300, 300, '2019-01-15 10:54:01'),
(318, 100120, 2, 1800, 2100, '2019-01-15 10:54:01'),
(319, 100121, 6, 300, 300, '2019-01-15 12:27:45'),
(320, 100121, 2, 1800, 2100, '2019-01-15 12:27:45'),
(321, 100105, 5, 2800, 4900, '2019-01-15 12:34:51'),
(322, 100122, 6, 300, 300, '2019-01-15 12:38:37'),
(323, 100122, 2, 1800, 2100, '2019-01-15 12:38:37'),
(324, 100082, 6, 300, 2400, '2019-01-15 12:55:13'),
(325, 100100, 5, 2800, 5200, '2019-01-15 13:12:43'),
(326, 100078, 6, 300, 2400, '2019-01-15 13:33:02'),
(327, 100123, 6, 300, 300, '2019-01-15 14:37:47'),
(328, 100123, 2, 1800, 2100, '2019-01-15 14:37:47'),
(329, 100086, 5, 2800, 5200, '2019-01-15 16:06:28'),
(330, 100078, 6, 300, 2700, '2019-01-15 16:23:24'),
(331, 100100, 6, 300, 5500, '2019-01-15 17:23:47'),
(332, 100083, 6, 300, 2700, '2019-01-16 00:23:07'),
(333, 100064, 6, 300, 5500, '2019-01-16 00:32:54'),
(334, 100061, 6, 300, 2700, '2019-01-16 01:17:39'),
(335, 100119, 6, 300, 2400, '2019-01-16 01:24:29'),
(336, 100057, 6, 300, 2700, '2019-01-16 01:24:41'),
(337, 100052, 6, 300, 3000, '2019-01-16 01:28:32'),
(338, 100062, 6, 300, 2700, '2019-01-16 01:30:37'),
(339, 100112, 6, 300, 2400, '2019-01-16 01:39:48'),
(340, 100119, 5, 2800, 5200, '2019-01-16 01:43:52'),
(341, 100105, 6, 300, 5200, '2019-01-16 01:44:02'),
(342, 100113, 6, 300, 2400, '2019-01-16 01:52:37'),
(343, 100076, 6, 300, 2400, '2019-01-16 01:55:58'),
(344, 100123, 6, 300, 2400, '2019-01-16 02:02:10'),
(345, 100069, 6, 300, 2700, '2019-01-16 02:25:12'),
(346, 100118, 6, 300, 2400, '2019-01-16 02:27:36'),
(347, 100059, 6, 300, 2700, '2019-01-16 02:31:32'),
(348, 100096, 6, 300, 2700, '2019-01-16 02:34:14'),
(349, 100081, 6, 300, 2700, '2019-01-16 02:44:08'),
(350, 100124, 6, 300, 300, '2019-01-16 02:49:12'),
(351, 100124, 2, 1800, 2100, '2019-01-16 02:49:12'),
(352, 100125, 6, 300, 300, '2019-01-16 02:50:50'),
(353, 100125, 2, 1800, 2100, '2019-01-16 02:50:50'),
(354, 100111, 6, 300, 2400, '2019-01-16 02:57:27'),
(355, 100086, 6, 300, 5500, '2019-01-16 03:00:02'),
(356, 100108, 6, 300, 2400, '2019-01-16 03:25:03'),
(357, 100098, 6, 300, 2700, '2019-01-16 04:15:20'),
(358, 100091, 6, 300, 2400, '2019-01-16 04:19:48'),
(359, 100067, 6, 300, 2700, '2019-01-16 05:12:45'),
(360, 100115, 6, 300, 2400, '2019-01-16 06:33:10'),
(361, 100110, 6, 300, 2400, '2019-01-16 08:05:44'),
(362, 100058, 6, 300, 2700, '2019-01-16 08:06:54'),
(363, 100087, 6, 300, 2700, '2019-01-16 08:15:17'),
(364, 100089, 6, 300, 2400, '2019-01-16 09:06:52'),
(365, 100055, 6, 300, 2700, '2019-01-16 09:18:01'),
(366, 100068, 6, 300, 2700, '2019-01-16 09:27:49'),
(367, 100051, 6, 300, 3300, '2019-01-16 09:37:00'),
(368, 100120, 6, 300, 2400, '2019-01-16 11:42:50'),
(369, 100094, 6, 300, 2700, '2019-01-16 13:17:24'),
(370, 100086, 6, 300, 5800, '2019-01-16 16:02:48'),
(371, 100107, 6, 300, 2400, '2019-01-16 16:43:06'),
(372, 100089, 6, 300, 2700, '2019-01-16 22:05:55'),
(373, 100094, 6, 300, 3000, '2019-01-17 00:00:15'),
(374, 100061, 6, 300, 3000, '2019-01-17 01:29:51'),
(375, 100058, 6, 300, 3000, '2019-01-17 01:33:33'),
(376, 100052, 6, 300, 3300, '2019-01-17 01:34:30'),
(377, 100057, 6, 300, 3000, '2019-01-17 01:36:24'),
(378, 100112, 6, 300, 2700, '2019-01-17 01:39:07'),
(379, 100112, 5, 2800, 5500, '2019-01-17 01:46:42'),
(380, 100124, 6, 300, 2400, '2019-01-17 01:49:43'),
(381, 100105, 6, 300, 5500, '2019-01-17 01:51:06'),
(382, 100119, 6, 300, 5500, '2019-01-17 02:16:10'),
(383, 100051, 6, 300, 3600, '2019-01-17 02:22:22'),
(384, 100100, 6, 300, 5800, '2019-01-17 02:26:26'),
(385, 100059, 6, 300, 3000, '2019-01-17 02:33:30'),
(386, 100126, 6, 300, 300, '2019-01-17 03:46:29'),
(387, 100126, 2, 1800, 2100, '2019-01-17 03:46:29'),
(388, 100127, 6, 300, 300, '2019-01-17 03:54:02'),
(389, 100127, 2, 1800, 2100, '2019-01-17 03:54:02'),
(390, 100062, 6, 300, 3000, '2019-01-17 03:55:35'),
(391, 100128, 6, 300, 300, '2019-01-17 04:05:33'),
(392, 100128, 2, 1800, 2100, '2019-01-17 04:05:33'),
(393, 100129, 6, 300, 300, '2019-01-17 05:11:21'),
(394, 100129, 2, 1800, 2100, '2019-01-17 05:11:21'),
(395, 100116, 6, 300, 2400, '2019-01-17 05:28:26'),
(396, 100130, 6, 300, 300, '2019-01-17 05:29:00'),
(397, 100130, 2, 1800, 2100, '2019-01-17 05:29:00'),
(398, 100113, 6, 300, 2700, '2019-01-17 06:06:02'),
(399, 100098, 6, 300, 3000, '2019-01-17 06:07:32'),
(400, 100083, 5, 2800, 5500, '2019-01-17 06:22:10'),
(401, 100131, 6, 300, 300, '2019-01-17 07:23:29'),
(402, 100131, 2, 1800, 2100, '2019-01-17 07:23:29'),
(403, 100068, 6, 300, 3000, '2019-01-17 07:26:26'),
(404, 100081, 6, 300, 3000, '2019-01-17 07:57:04'),
(405, 100070, 6, 300, 2400, '2019-01-17 08:13:19'),
(406, 100067, 6, 300, 3000, '2019-01-17 08:14:01'),
(407, 100083, 6, 300, 5800, '2019-01-17 08:15:08'),
(408, 100132, 6, 300, 300, '2019-01-17 08:59:56'),
(409, 100132, 2, 1800, 2100, '2019-01-17 08:59:56'),
(410, 100133, 6, 300, 300, '2019-01-17 09:15:28'),
(411, 100133, 2, 1800, 2100, '2019-01-17 09:15:28'),
(412, 100121, 6, 300, 2400, '2019-01-17 09:29:08'),
(413, 100096, 6, 300, 3000, '2019-01-17 09:36:33'),
(414, 100118, 6, 300, 2700, '2019-01-17 09:38:45'),
(415, 100134, 6, 300, 300, '2019-01-17 10:02:30'),
(416, 100134, 2, 1800, 2100, '2019-01-17 10:02:30'),
(417, 100072, 6, 300, 2700, '2019-01-17 10:17:05'),
(418, 100064, 6, 300, 5800, '2019-01-17 10:19:37'),
(419, 100135, 6, 300, 300, '2019-01-17 10:23:04'),
(420, 100135, 2, 1800, 2100, '2019-01-17 10:23:04'),
(421, 100071, 6, 300, 2400, '2019-01-17 10:32:03'),
(422, 100136, 6, 300, 300, '2019-01-17 10:41:24'),
(423, 100136, 2, 1800, 2100, '2019-01-17 10:41:24'),
(424, 100073, 6, 300, 2400, '2019-01-17 10:48:58'),
(425, 100137, 6, 300, 300, '2019-01-17 11:04:43'),
(426, 100137, 2, 1800, 2100, '2019-01-17 11:04:43'),
(427, 100138, 6, 300, 300, '2019-01-17 11:10:51'),
(428, 100138, 2, 1800, 2100, '2019-01-17 11:10:51'),
(429, 100139, 6, 300, 300, '2019-01-17 11:12:15'),
(430, 100139, 2, 1800, 2100, '2019-01-17 11:12:15'),
(431, 100080, 6, 300, 2700, '2019-01-17 11:14:05'),
(432, 100069, 6, 300, 3000, '2019-01-17 11:14:42'),
(433, 100140, 6, 300, 300, '2019-01-17 11:14:47'),
(434, 100140, 2, 1800, 2100, '2019-01-17 11:14:47'),
(435, 100141, 6, 300, 300, '2019-01-17 11:15:26'),
(436, 100141, 2, 1800, 2100, '2019-01-17 11:15:26'),
(437, 100142, 6, 300, 300, '2019-01-17 11:15:41'),
(438, 100142, 2, 1800, 2100, '2019-01-17 11:15:41'),
(439, 100143, 6, 300, 300, '2019-01-17 11:17:20'),
(440, 100143, 2, 1800, 2100, '2019-01-17 11:17:20'),
(441, 100144, 6, 300, 300, '2019-01-17 11:59:15'),
(442, 100144, 2, 1800, 2100, '2019-01-17 11:59:15'),
(443, 100145, 6, 300, 300, '2019-01-17 12:00:52'),
(444, 100145, 2, 1800, 2100, '2019-01-17 12:00:52'),
(445, 100146, 6, 300, 300, '2019-01-17 12:01:02'),
(446, 100146, 2, 1800, 2100, '2019-01-17 12:01:02'),
(447, 100091, 6, 300, 2700, '2019-01-17 12:13:54'),
(448, 100087, 6, 300, 3000, '2019-01-17 12:32:12'),
(449, 100147, 6, 300, 300, '2019-01-17 12:35:39'),
(450, 100147, 2, 1800, 2100, '2019-01-17 12:35:39'),
(451, 100148, 6, 300, 300, '2019-01-17 12:44:45'),
(452, 100148, 2, 1800, 2100, '2019-01-17 12:44:45'),
(453, 100149, 6, 300, 300, '2019-01-17 12:56:08'),
(454, 100149, 2, 1800, 2100, '2019-01-17 12:56:08'),
(455, 100053, 6, 300, 2400, '2019-01-17 16:50:02'),
(456, 100053, 5, 2800, 5200, '2019-01-17 16:51:09'),
(457, 100053, 6, 300, 5500, '2019-01-19 07:21:36'),
(458, 100053, 6, 300, 5800, '2019-01-20 16:31:38'),
(459, 100053, 6, 300, 6100, '2019-01-22 06:35:54'),
(460, 100053, 6, 300, 6400, '2019-01-24 11:14:43'),
(461, 100053, 6, 300, 6700, '2019-01-28 11:54:18'),
(462, 100053, 6, 300, 7000, '2019-01-29 11:48:00'),
(463, 100053, 6, 300, 7300, '2019-01-31 13:04:18'),
(464, 100053, 6, 300, 7600, '2019-02-04 02:14:54'),
(465, 100053, 6, 300, 7900, '2019-02-07 14:20:15'),
(466, 100053, 6, 300, 8200, '2019-02-10 10:04:31'),
(467, 100053, 6, 300, 8500, '2019-02-11 04:17:12'),
(468, 100053, 6, 300, 8800, '2019-02-15 13:18:11'),
(469, 100053, 6, 300, 9100, '2019-02-18 12:28:27'),
(470, 100053, 6, 300, 9400, '2019-02-20 03:28:44'),
(471, 100053, 6, 300, 9700, '2019-02-21 06:48:21'),
(472, 100053, 6, 300, 10000, '2019-02-22 07:33:48'),
(473, 100137, 6, 300, 2400, '2019-02-22 07:53:24'),
(474, 100053, 6, 300, 10300, '2019-02-26 03:02:25'),
(475, 100053, 6, 300, 10600, '2019-02-27 07:33:04'),
(476, 100053, 3, 1800, 12400, '2019-02-27 07:37:12'),
(477, 100053, 6, 300, 12700, '2019-02-28 04:09:56'),
(478, 100053, 6, 300, 13000, '2019-03-02 10:26:21'),
(479, 100053, 6, 300, 13300, '2019-03-03 09:36:37'),
(480, 100053, 6, 300, 13600, '2019-03-04 04:27:37'),
(481, 100053, 6, 300, 13900, '2019-03-05 03:36:49'),
(482, 100053, 6, 300, 14200, '2019-03-07 03:52:32'),
(483, 100053, 6, 300, 14500, '2019-03-08 07:36:26'),
(484, 100053, 4, 500, 15000, '2019-03-08 07:46:35'),
(485, 100053, 6, 300, 15300, '2019-03-11 06:29:55'),
(486, 100053, 6, 300, 15600, '2019-03-13 09:59:33'),
(487, 100053, 6, 300, 15900, '2019-03-14 11:42:47'),
(488, 100053, 6, 300, 16200, '2019-03-31 13:19:26'),
(489, 100053, 6, 300, 16500, '2019-04-06 04:07:10'),
(490, 100053, 6, 300, 16800, '2019-04-09 10:19:47');

-- --------------------------------------------------------

--
-- 表的结构 `user_rebate`
--

CREATE TABLE IF NOT EXISTS `user_rebate` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT '订单id',
  `user_id` int(11) NOT NULL COMMENT '返点用户ID',
  `pid` int(11) NOT NULL COMMENT '经纪人用户id',
  `amount` decimal(11,2) NOT NULL COMMENT '返点金额',
  `point` tinyint(4) NOT NULL COMMENT '返点百分比%',
  `created_at` datetime DEFAULT NULL COMMENT '申请时间',
  `updated_at` datetime DEFAULT NULL COMMENT '审核时间'
) ENGINE=InnoDB AUTO_INCREMENT=1541 DEFAULT CHARSET=utf8 COMMENT='返点记录表';

--
-- 转存表中的数据 `user_rebate`
--

INSERT INTO `user_rebate` (`id`, `order_id`, `user_id`, `pid`, `amount`, `point`, `created_at`, `updated_at`) VALUES
(1001, 549, 100013, 9, '14.60', 10, '2018-06-05 11:05:37', '2018-06-05 11:05:37'),
(1002, 550, 100009, 9, '16.80', 10, '2018-06-05 11:09:50', '2018-06-05 11:09:50'),
(1003, 551, 100009, 9, '16.80', 10, '2018-06-05 11:10:49', '2018-06-05 11:10:49'),
(1004, 560, 100013, 100011, '20.16', 12, '2018-06-05 13:32:07', '2018-06-05 13:32:07'),
(1005, 560, 100013, 9, '16.80', 10, '2018-06-05 13:32:07', '2018-06-05 13:32:07'),
(1006, 561, 100009, 9, '16.80', 10, '2018-06-05 14:44:36', '2018-06-05 14:44:36'),
(1007, 562, 100009, 9, '16.80', 10, '2018-06-05 14:45:33', '2018-06-05 14:45:33'),
(1008, 599, 100019, 9, '16.80', 10, '2018-06-07 00:33:10', '2018-06-07 00:33:10'),
(1009, 600, 100019, 9, '15.80', 10, '2018-06-07 00:35:44', '2018-06-07 00:35:44'),
(1010, 602, 100019, 9, '15.80', 10, '2018-06-07 08:33:34', '2018-06-07 08:33:34'),
(1011, 603, 100019, 9, '16.80', 10, '2018-06-07 09:07:46', '2018-06-07 09:07:46'),
(1012, 604, 100019, 9, '16.80', 10, '2018-06-07 09:07:56', '2018-06-07 09:07:56'),
(1013, 605, 100019, 9, '14.60', 10, '2018-06-07 11:13:31', '2018-06-07 11:13:31'),
(1014, 608, 100013, 100011, '20.16', 12, '2018-06-07 13:15:47', '2018-06-07 13:15:47'),
(1015, 608, 100013, 9, '16.80', 10, '2018-06-07 13:15:47', '2018-06-07 13:15:47'),
(1016, 610, 100019, 9, '16.80', 10, '2018-06-07 13:21:53', '2018-06-07 13:21:53'),
(1017, 612, 100013, 100011, '20.16', 12, '2018-06-07 13:42:57', '2018-06-07 13:42:57'),
(1018, 612, 100013, 9, '16.80', 10, '2018-06-07 13:42:57', '2018-06-07 13:42:57'),
(1019, 614, 100013, 100011, '18.96', 12, '2018-06-07 13:46:58', '2018-06-07 13:46:58'),
(1020, 614, 100013, 9, '15.80', 10, '2018-06-07 13:46:58', '2018-06-07 13:46:58'),
(1021, 619, 100009, 9, '16.80', 10, '2018-06-07 15:15:21', '2018-06-07 15:15:21'),
(1022, 621, 100013, 100011, '18.96', 12, '2018-06-07 15:49:38', '2018-06-07 15:49:38'),
(1023, 621, 100013, 9, '15.80', 10, '2018-06-07 15:49:38', '2018-06-07 15:49:38'),
(1024, 624, 100019, 9, '47.40', 10, '2018-06-07 19:46:01', '2018-06-07 19:46:01'),
(1025, 626, 100013, 100011, '18.96', 12, '2018-06-08 21:14:33', '2018-06-08 21:14:33'),
(1026, 626, 100013, 9, '15.80', 10, '2018-06-08 21:14:33', '2018-06-08 21:14:33'),
(1027, 627, 100013, 100011, '6.96', 12, '2018-06-08 21:14:51', '2018-06-08 21:14:51'),
(1028, 627, 100013, 9, '5.80', 10, '2018-06-08 21:14:51', '2018-06-08 21:14:51'),
(1029, 628, 100013, 100011, '201.60', 12, '2018-06-08 21:44:15', '2018-06-08 21:44:15'),
(1030, 628, 100013, 9, '168.00', 10, '2018-06-08 21:44:15', '2018-06-08 21:44:15'),
(1031, 629, 100013, 100011, '100.80', 12, '2018-06-08 21:44:53', '2018-06-08 21:44:53'),
(1032, 629, 100013, 9, '84.00', 10, '2018-06-08 21:44:53', '2018-06-08 21:44:53'),
(1033, 630, 100013, 100011, '60.48', 12, '2018-06-08 21:45:26', '2018-06-08 21:45:26'),
(1034, 630, 100013, 9, '50.40', 10, '2018-06-08 21:45:26', '2018-06-08 21:45:26'),
(1035, 631, 100013, 100011, '151.68', 12, '2018-06-08 21:46:08', '2018-06-08 21:46:08'),
(1036, 631, 100013, 9, '126.40', 10, '2018-06-08 21:46:08', '2018-06-08 21:46:08'),
(1037, 632, 100013, 100011, '37.92', 12, '2018-06-08 21:46:27', '2018-06-08 21:46:27'),
(1038, 632, 100013, 9, '31.60', 10, '2018-06-08 21:46:27', '2018-06-08 21:46:27'),
(1039, 633, 100013, 100011, '60.48', 12, '2018-06-08 21:47:28', '2018-06-08 21:47:28'),
(1040, 633, 100013, 9, '50.40', 10, '2018-06-08 21:47:28', '2018-06-08 21:47:28'),
(1041, 634, 100013, 100011, '5.52', 12, '2018-06-08 21:48:57', '2018-06-08 21:48:57'),
(1042, 634, 100013, 9, '4.60', 10, '2018-06-08 21:48:57', '2018-06-08 21:48:57'),
(1043, 635, 100013, 100011, '20.16', 12, '2018-06-08 21:49:46', '2018-06-08 21:49:46'),
(1044, 635, 100013, 9, '16.80', 10, '2018-06-08 21:49:47', '2018-06-08 21:49:47'),
(1045, 637, 100013, 100011, '20.16', 12, '2018-06-09 08:56:03', '2018-06-09 08:56:03'),
(1046, 637, 100013, 9, '16.80', 10, '2018-06-09 08:56:03', '2018-06-09 08:56:03'),
(1047, 638, 100013, 100011, '20.16', 12, '2018-06-09 08:56:21', '2018-06-09 08:56:21'),
(1048, 638, 100013, 9, '16.80', 10, '2018-06-09 08:56:21', '2018-06-09 08:56:21'),
(1049, 649, 100013, 100011, '20.16', 12, '2018-06-13 07:03:10', '2018-06-13 07:03:10'),
(1050, 649, 100013, 9, '16.80', 10, '2018-06-13 07:03:10', '2018-06-13 07:03:10'),
(1051, 650, 100013, 100011, '201.60', 12, '2018-06-13 12:47:57', '2018-06-13 12:47:57'),
(1052, 650, 100013, 9, '168.00', 10, '2018-06-13 12:47:57', '2018-06-13 12:47:57'),
(1053, 651, 100013, 100011, '20.16', 12, '2018-06-13 12:48:30', '2018-06-13 12:48:30'),
(1054, 651, 100013, 9, '16.80', 10, '2018-06-13 12:48:30', '2018-06-13 12:48:30'),
(1055, 652, 100013, 100011, '20.16', 12, '2018-06-13 12:49:31', '2018-06-13 12:49:31'),
(1056, 652, 100013, 9, '16.80', 10, '2018-06-13 12:49:31', '2018-06-13 12:49:31'),
(1057, 655, 100021, 9, '168.00', 10, '2018-06-13 13:39:36', '2018-06-13 13:39:36'),
(1058, 656, 100021, 9, '68.00', 10, '2018-06-14 09:02:12', '2018-06-14 09:02:12'),
(1059, 658, 100021, 9, '168.00', 10, '2018-06-14 10:45:24', '2018-06-14 10:45:24'),
(1060, 659, 100021, 9, '158.00', 10, '2018-06-14 10:45:35', '2018-06-14 10:45:35'),
(1061, 660, 100021, 9, '158.00', 10, '2018-06-14 10:45:45', '2018-06-14 10:45:45'),
(1062, 661, 100021, 9, '158.00', 10, '2018-06-14 10:45:53', '2018-06-14 10:45:53'),
(1063, 662, 100021, 9, '134.40', 10, '2018-06-14 10:46:21', '2018-06-14 10:46:21'),
(1064, 663, 100021, 9, '168.00', 10, '2018-06-14 10:47:26', '2018-06-14 10:47:26'),
(1065, 664, 100021, 9, '168.00', 10, '2018-06-14 10:47:41', '2018-06-14 10:47:41'),
(1066, 665, 100021, 9, '145.80', 10, '2018-06-14 10:47:56', '2018-06-14 10:47:56'),
(1067, 666, 100021, 9, '168.00', 10, '2018-06-14 10:48:05', '2018-06-14 10:48:05'),
(1068, 667, 100021, 9, '46.10', 10, '2018-06-14 10:48:15', '2018-06-14 10:48:15'),
(1069, 668, 100021, 9, '168.00', 10, '2018-06-14 10:48:39', '2018-06-14 10:48:39'),
(1070, 669, 100013, 100011, '20.16', 12, '2018-06-14 22:36:04', '2018-06-14 22:36:04'),
(1071, 669, 100013, 9, '16.80', 10, '2018-06-14 22:36:04', '2018-06-14 22:36:04'),
(1072, 670, 100013, 100011, '20.16', 12, '2018-06-14 23:24:33', '2018-06-14 23:24:33'),
(1073, 670, 100013, 9, '16.80', 10, '2018-06-14 23:24:33', '2018-06-14 23:24:33'),
(1074, 671, 100013, 100011, '20.16', 12, '2018-06-14 23:27:04', '2018-06-14 23:27:04'),
(1075, 671, 100013, 9, '16.80', 10, '2018-06-14 23:27:04', '2018-06-14 23:27:04'),
(1076, 672, 100013, 100011, '20.16', 12, '2018-06-14 23:29:49', '2018-06-14 23:29:49'),
(1077, 672, 100013, 9, '16.80', 10, '2018-06-14 23:29:49', '2018-06-14 23:29:49'),
(1078, 673, 100013, 100011, '20.16', 12, '2018-06-14 23:33:25', '2018-06-14 23:33:25'),
(1079, 673, 100013, 9, '16.80', 10, '2018-06-14 23:33:25', '2018-06-14 23:33:25'),
(1080, 674, 100013, 100011, '20.16', 12, '2018-06-15 00:01:25', '2018-06-15 00:01:25'),
(1081, 674, 100013, 9, '16.80', 10, '2018-06-15 00:01:25', '2018-06-15 00:01:25'),
(1082, 675, 100013, 100011, '20.16', 12, '2018-06-15 00:03:15', '2018-06-15 00:03:15'),
(1083, 675, 100013, 9, '16.80', 10, '2018-06-15 00:03:15', '2018-06-15 00:03:15'),
(1084, 676, 100021, 9, '168.00', 10, '2018-06-15 15:43:57', '2018-06-15 15:43:57'),
(1085, 677, 100013, 100011, '20.16', 12, '2018-06-15 18:05:51', '2018-06-15 18:05:51'),
(1086, 677, 100013, 9, '16.80', 10, '2018-06-15 18:05:51', '2018-06-15 18:05:51'),
(1087, 678, 100013, 100011, '20.16', 12, '2018-06-15 18:08:01', '2018-06-15 18:08:01'),
(1088, 678, 100013, 9, '16.80', 10, '2018-06-15 18:08:01', '2018-06-15 18:08:01'),
(1089, 679, 100013, 100011, '20.16', 12, '2018-06-15 18:08:06', '2018-06-15 18:08:06'),
(1090, 679, 100013, 9, '16.80', 10, '2018-06-15 18:08:06', '2018-06-15 18:08:06'),
(1091, 680, 100013, 100011, '20.16', 12, '2018-06-15 18:08:13', '2018-06-15 18:08:13'),
(1092, 680, 100013, 9, '16.80', 10, '2018-06-15 18:08:13', '2018-06-15 18:08:13'),
(1093, 681, 100013, 100011, '20.16', 12, '2018-06-15 18:08:18', '2018-06-15 18:08:18'),
(1094, 681, 100013, 9, '16.80', 10, '2018-06-15 18:08:18', '2018-06-15 18:08:18'),
(1095, 682, 100013, 100011, '20.16', 12, '2018-06-16 22:26:42', '2018-06-16 22:26:42'),
(1096, 682, 100013, 9, '16.80', 10, '2018-06-16 22:26:42', '2018-06-16 22:26:42'),
(1097, 683, 100013, 100011, '20.16', 12, '2018-06-20 00:34:33', '2018-06-20 00:34:33'),
(1098, 683, 100013, 9, '16.80', 10, '2018-06-20 00:34:33', '2018-06-20 00:34:33'),
(1099, 684, 100013, 100011, '20.16', 12, '2018-06-20 00:35:31', '2018-06-20 00:35:31'),
(1100, 684, 100013, 9, '16.80', 10, '2018-06-20 00:35:31', '2018-06-20 00:35:31'),
(1101, 685, 100013, 100011, '18.96', 12, '2018-06-20 01:55:38', '2018-06-20 01:55:38'),
(1102, 685, 100013, 9, '15.80', 10, '2018-06-20 01:55:38', '2018-06-20 01:55:38'),
(1103, 686, 100013, 100011, '18.96', 12, '2018-06-20 11:12:50', '2018-06-20 11:12:50'),
(1104, 686, 100013, 9, '15.80', 10, '2018-06-20 11:12:50', '2018-06-20 11:12:50'),
(1105, 687, 100013, 100011, '18.96', 12, '2018-06-20 11:12:59', '2018-06-20 11:12:59'),
(1106, 687, 100013, 9, '15.80', 10, '2018-06-20 11:12:59', '2018-06-20 11:12:59'),
(1107, 688, 100013, 100011, '18.96', 12, '2018-06-20 11:13:24', '2018-06-20 11:13:24'),
(1108, 688, 100013, 9, '15.80', 10, '2018-06-20 11:13:24', '2018-06-20 11:13:24'),
(1109, 689, 100013, 100011, '18.96', 12, '2018-06-20 11:13:29', '2018-06-20 11:13:29'),
(1110, 689, 100013, 9, '15.80', 10, '2018-06-20 11:13:29', '2018-06-20 11:13:29'),
(1111, 690, 100013, 100011, '3.60', 12, '2018-06-20 14:07:30', '2018-06-20 14:07:30'),
(1112, 690, 100013, 9, '3.00', 10, '2018-06-20 14:07:30', '2018-06-20 14:07:30'),
(1113, 691, 100021, 9, '58.00', 10, '2018-06-20 14:42:19', '2018-06-20 14:42:19'),
(1114, 692, 100021, 9, '30.00', 10, '2018-06-20 14:42:27', '2018-06-20 14:42:27'),
(1115, 693, 100021, 9, '58.00', 10, '2018-06-20 14:42:34', '2018-06-20 14:42:34'),
(1116, 694, 100021, 9, '45.00', 10, '2018-06-20 14:42:44', '2018-06-20 14:42:44'),
(1117, 695, 100021, 9, '38.00', 10, '2018-06-20 14:42:51', '2018-06-20 14:42:51'),
(1118, 696, 100021, 9, '58.00', 10, '2018-06-20 14:43:04', '2018-06-20 14:43:04'),
(1119, 697, 100021, 9, '40.00', 10, '2018-06-20 14:43:12', '2018-06-20 14:43:12'),
(1120, 698, 100021, 9, '1.50', 10, '2018-06-20 14:43:22', '2018-06-20 14:43:22'),
(1121, 699, 100021, 9, '3.10', 10, '2018-06-20 14:43:31', '2018-06-20 14:43:31'),
(1122, 700, 100021, 9, '28.00', 10, '2018-06-20 14:43:38', '2018-06-20 14:43:38'),
(1123, 701, 100021, 9, '28.00', 10, '2018-06-20 14:43:47', '2018-06-20 14:43:47'),
(1124, 702, 100021, 9, '30.00', 10, '2018-06-20 14:43:57', '2018-06-20 14:43:57'),
(1125, 703, 100021, 9, '168.00', 10, '2018-06-20 14:44:11', '2018-06-20 14:44:11'),
(1126, 704, 100021, 9, '158.00', 10, '2018-06-20 14:44:51', '2018-06-20 14:44:51'),
(1127, 705, 100021, 9, '158.00', 10, '2018-06-20 14:45:01', '2018-06-20 14:45:01'),
(1128, 706, 100021, 9, '158.00', 10, '2018-06-20 14:45:09', '2018-06-20 14:45:09'),
(1129, 707, 100021, 9, '168.00', 10, '2018-06-20 14:45:21', '2018-06-20 14:45:21'),
(1130, 708, 100021, 9, '145.80', 10, '2018-06-20 14:45:28', '2018-06-20 14:45:28'),
(1131, 709, 100021, 9, '168.00', 10, '2018-06-20 14:45:39', '2018-06-20 14:45:39'),
(1132, 710, 100021, 9, '168.00', 10, '2018-06-20 14:45:51', '2018-06-20 14:45:51'),
(1133, 711, 100021, 9, '168.00', 10, '2018-06-20 14:45:58', '2018-06-20 14:45:58'),
(1134, 712, 100021, 9, '68.00', 10, '2018-06-20 14:46:07', '2018-06-20 14:46:07'),
(1135, 713, 100021, 9, '46.10', 10, '2018-06-20 14:46:27', '2018-06-20 14:46:27'),
(1136, 714, 100013, 100011, '20.16', 12, '2018-06-22 00:07:17', '2018-06-22 00:07:17'),
(1137, 714, 100013, 9, '16.80', 10, '2018-06-22 00:07:17', '2018-06-22 00:07:17'),
(1138, 715, 100013, 100011, '20.16', 12, '2018-06-22 00:07:45', '2018-06-22 00:07:45'),
(1139, 715, 100013, 9, '16.80', 10, '2018-06-22 00:07:45', '2018-06-22 00:07:45'),
(1140, 716, 100013, 100011, '20.16', 12, '2018-06-22 00:12:01', '2018-06-22 00:12:01'),
(1141, 716, 100013, 9, '16.80', 10, '2018-06-22 00:12:01', '2018-06-22 00:12:01'),
(1142, 717, 100013, 100011, '20.16', 12, '2018-06-22 00:16:22', '2018-06-22 00:16:22'),
(1143, 717, 100013, 9, '16.80', 10, '2018-06-22 00:16:22', '2018-06-22 00:16:22'),
(1144, 718, 100013, 100011, '20.16', 12, '2018-06-22 00:16:37', '2018-06-22 00:16:37'),
(1145, 718, 100013, 9, '16.80', 10, '2018-06-22 00:16:37', '2018-06-22 00:16:37'),
(1146, 719, 100021, 9, '58.00', 10, '2018-06-22 11:20:04', '2018-06-22 11:20:04'),
(1147, 720, 100021, 9, '168.00', 10, '2018-06-22 12:42:59', '2018-06-22 12:42:59'),
(1148, 721, 100021, 9, '158.00', 10, '2018-06-22 12:43:06', '2018-06-22 12:43:06'),
(1149, 722, 100021, 9, '158.00', 10, '2018-06-22 12:43:17', '2018-06-22 12:43:17'),
(1150, 723, 100021, 9, '158.00', 10, '2018-06-22 12:43:29', '2018-06-22 12:43:29'),
(1151, 724, 100021, 9, '68.00', 10, '2018-06-22 12:44:01', '2018-06-22 12:44:01'),
(1152, 725, 100021, 9, '168.00', 10, '2018-06-22 12:44:09', '2018-06-22 12:44:09'),
(1153, 726, 100021, 9, '168.00', 10, '2018-06-22 12:44:18', '2018-06-22 12:44:18'),
(1154, 727, 100021, 9, '168.00', 10, '2018-06-22 12:44:27', '2018-06-22 12:44:27'),
(1155, 728, 100021, 9, '168.00', 10, '2018-06-22 12:44:37', '2018-06-22 12:44:37'),
(1156, 729, 100021, 9, '168.00', 10, '2018-06-22 12:44:46', '2018-06-22 12:44:46'),
(1157, 730, 100021, 9, '168.00', 10, '2018-06-22 12:54:54', '2018-06-22 12:54:54'),
(1158, 731, 100021, 9, '58.00', 10, '2018-06-22 13:49:57', '2018-06-22 13:49:57'),
(1159, 732, 100021, 9, '30.00', 10, '2018-06-22 13:50:03', '2018-06-22 13:50:03'),
(1160, 733, 100021, 9, '58.00', 10, '2018-06-22 13:50:11', '2018-06-22 13:50:11'),
(1161, 734, 100021, 9, '34.00', 10, '2018-06-22 13:50:19', '2018-06-22 13:50:19'),
(1162, 735, 100021, 9, '38.00', 10, '2018-06-22 13:50:26', '2018-06-22 13:50:26'),
(1163, 736, 100021, 9, '30.00', 10, '2018-06-22 13:50:33', '2018-06-22 13:50:33'),
(1164, 737, 100021, 9, '28.00', 10, '2018-06-22 13:50:40', '2018-06-22 13:50:40'),
(1165, 738, 100021, 9, '28.00', 10, '2018-06-22 13:50:48', '2018-06-22 13:50:48'),
(1166, 739, 100021, 9, '15.00', 10, '2018-06-22 13:50:55', '2018-06-22 13:50:55'),
(1167, 740, 100021, 9, '31.00', 10, '2018-06-22 13:51:04', '2018-06-22 13:51:04'),
(1168, 741, 100021, 9, '40.00', 10, '2018-06-22 13:51:12', '2018-06-22 13:51:12'),
(1169, 742, 100021, 9, '168.00', 10, '2018-06-22 15:54:12', '2018-06-22 15:54:12'),
(1170, 743, 100013, 100011, '20.16', 12, '2018-06-23 00:06:38', '2018-06-23 00:06:38'),
(1171, 743, 100013, 9, '16.80', 10, '2018-06-23 00:06:38', '2018-06-23 00:06:38'),
(1172, 744, 100013, 100011, '20.16', 12, '2018-06-23 00:07:29', '2018-06-23 00:07:29'),
(1173, 744, 100013, 9, '16.80', 10, '2018-06-23 00:07:29', '2018-06-23 00:07:29'),
(1174, 745, 100013, 100011, '20.16', 12, '2018-06-23 00:07:47', '2018-06-23 00:07:47'),
(1175, 745, 100013, 9, '16.80', 10, '2018-06-23 00:07:47', '2018-06-23 00:07:47'),
(1176, 746, 100013, 100011, '20.16', 12, '2018-06-23 00:08:00', '2018-06-23 00:08:00'),
(1177, 746, 100013, 9, '16.80', 10, '2018-06-23 00:08:00', '2018-06-23 00:08:00'),
(1178, 747, 100021, 9, '168.00', 10, '2018-06-25 09:51:01', '2018-06-25 09:51:01'),
(1179, 748, 100021, 9, '168.00', 10, '2018-06-25 11:31:33', '2018-06-25 11:31:33'),
(1180, 749, 100021, 9, '68.00', 10, '2018-06-25 11:33:11', '2018-06-25 11:33:11'),
(1181, 750, 100021, 9, '168.00', 10, '2018-06-25 11:33:59', '2018-06-25 11:33:59'),
(1182, 752, 100021, 9, '158.00', 10, '2018-06-26 12:21:42', '2018-06-26 12:21:42'),
(1183, 753, 100021, 9, '158.00', 10, '2018-06-26 17:45:42', '2018-06-26 17:45:42'),
(1184, 754, 100023, 100021, '336.00', 20, '2018-06-26 21:11:22', '2018-06-26 21:11:22'),
(1185, 754, 100023, 9, '168.00', 10, '2018-06-26 21:11:22', '2018-06-26 21:11:22'),
(1186, 755, 100023, 100021, '316.00', 20, '2018-06-26 21:11:29', '2018-06-26 21:11:29'),
(1187, 755, 100023, 9, '158.00', 10, '2018-06-26 21:11:29', '2018-06-26 21:11:29'),
(1188, 756, 100023, 100021, '316.00', 20, '2018-06-26 21:11:36', '2018-06-26 21:11:36'),
(1189, 756, 100023, 9, '158.00', 10, '2018-06-26 21:11:36', '2018-06-26 21:11:36'),
(1190, 757, 100023, 100021, '316.00', 20, '2018-06-26 21:11:44', '2018-06-26 21:11:44'),
(1191, 757, 100023, 9, '158.00', 10, '2018-06-26 21:11:44', '2018-06-26 21:11:44'),
(1192, 758, 100023, 100021, '336.00', 20, '2018-06-26 21:11:50', '2018-06-26 21:11:50'),
(1193, 758, 100023, 9, '168.00', 10, '2018-06-26 21:11:50', '2018-06-26 21:11:50'),
(1194, 759, 100023, 100021, '336.00', 20, '2018-06-26 21:11:59', '2018-06-26 21:11:59'),
(1195, 759, 100023, 9, '168.00', 10, '2018-06-26 21:11:59', '2018-06-26 21:11:59'),
(1196, 760, 100023, 100021, '336.00', 20, '2018-06-26 21:12:09', '2018-06-26 21:12:09'),
(1197, 760, 100023, 9, '168.00', 10, '2018-06-26 21:12:09', '2018-06-26 21:12:09'),
(1198, 761, 100023, 100021, '92.20', 20, '2018-06-26 21:12:19', '2018-06-26 21:12:19'),
(1199, 761, 100023, 9, '46.10', 10, '2018-06-26 21:12:19', '2018-06-26 21:12:19'),
(1200, 762, 100023, 100021, '336.00', 20, '2018-06-26 21:12:47', '2018-06-26 21:12:47'),
(1201, 762, 100023, 9, '168.00', 10, '2018-06-26 21:12:47', '2018-06-26 21:12:47'),
(1202, 763, 100023, 100021, '116.00', 20, '2018-06-26 21:13:44', '2018-06-26 21:13:44'),
(1203, 763, 100023, 9, '58.00', 10, '2018-06-26 21:13:44', '2018-06-26 21:13:44'),
(1204, 764, 100023, 100021, '136.00', 20, '2018-06-26 21:16:02', '2018-06-26 21:16:02'),
(1205, 764, 100023, 9, '68.00', 10, '2018-06-26 21:16:02', '2018-06-26 21:16:02'),
(1206, 765, 100023, 100021, '336.00', 20, '2018-06-26 21:16:11', '2018-06-26 21:16:11'),
(1207, 765, 100023, 9, '168.00', 10, '2018-06-26 21:16:11', '2018-06-26 21:16:11'),
(1208, 766, 100023, 100021, '291.60', 20, '2018-06-26 21:16:19', '2018-06-26 21:16:19'),
(1209, 766, 100023, 9, '145.80', 10, '2018-06-26 21:16:19', '2018-06-26 21:16:19'),
(1210, 767, 100023, 100021, '336.00', 20, '2018-06-26 21:16:28', '2018-06-26 21:16:28'),
(1211, 767, 100023, 9, '168.00', 10, '2018-06-26 21:16:28', '2018-06-26 21:16:28'),
(1212, 768, 100023, 100021, '60.00', 20, '2018-06-26 21:16:43', '2018-06-26 21:16:43'),
(1213, 768, 100023, 9, '30.00', 10, '2018-06-26 21:16:43', '2018-06-26 21:16:43'),
(1214, 769, 100023, 100021, '116.00', 20, '2018-06-26 21:16:51', '2018-06-26 21:16:51'),
(1215, 769, 100023, 9, '58.00', 10, '2018-06-26 21:16:51', '2018-06-26 21:16:51'),
(1216, 770, 100023, 100021, '90.00', 20, '2018-06-26 21:16:58', '2018-06-26 21:16:58'),
(1217, 770, 100023, 9, '45.00', 10, '2018-06-26 21:16:58', '2018-06-26 21:16:58'),
(1218, 771, 100023, 100021, '76.00', 20, '2018-06-26 21:17:06', '2018-06-26 21:17:06'),
(1219, 771, 100023, 9, '38.00', 10, '2018-06-26 21:17:06', '2018-06-26 21:17:06'),
(1220, 772, 100023, 100021, '116.00', 20, '2018-06-26 21:17:13', '2018-06-26 21:17:13'),
(1221, 772, 100023, 9, '58.00', 10, '2018-06-26 21:17:13', '2018-06-26 21:17:13'),
(1222, 773, 100023, 100021, '80.00', 20, '2018-06-26 21:17:23', '2018-06-26 21:17:23'),
(1223, 773, 100023, 9, '40.00', 10, '2018-06-26 21:17:23', '2018-06-26 21:17:23'),
(1224, 774, 100023, 100021, '62.00', 20, '2018-06-26 21:17:30', '2018-06-26 21:17:30'),
(1225, 774, 100023, 9, '31.00', 10, '2018-06-26 21:17:30', '2018-06-26 21:17:30'),
(1226, 775, 100023, 100021, '30.00', 20, '2018-06-26 21:17:37', '2018-06-26 21:17:37'),
(1227, 775, 100023, 9, '15.00', 10, '2018-06-26 21:17:38', '2018-06-26 21:17:38'),
(1228, 776, 100023, 100021, '56.00', 20, '2018-06-26 21:17:45', '2018-06-26 21:17:45'),
(1229, 776, 100023, 9, '28.00', 10, '2018-06-26 21:17:45', '2018-06-26 21:17:45'),
(1230, 777, 100023, 100021, '56.00', 20, '2018-06-26 21:17:52', '2018-06-26 21:17:52'),
(1231, 777, 100023, 9, '28.00', 10, '2018-06-26 21:17:52', '2018-06-26 21:17:52'),
(1232, 781, 100024, 9, '16.80', 10, '2018-06-27 15:10:25', '2018-06-27 15:10:25'),
(1233, 782, 100021, 9, '168.00', 10, '2018-06-27 15:17:22', '2018-06-27 15:17:22'),
(1234, 783, 100021, 9, '46.10', 10, '2018-06-27 15:17:32', '2018-06-27 15:17:32'),
(1235, 784, 100021, 9, '168.00', 10, '2018-06-27 15:19:07', '2018-06-27 15:19:07'),
(1236, 785, 100024, 9, '13.80', 10, '2018-06-28 00:26:58', '2018-06-28 00:26:58'),
(1237, 786, 100024, 9, '15.80', 10, '2018-06-28 00:30:49', '2018-06-28 00:30:49'),
(1238, 787, 100029, 9, '13.80', 10, '2018-06-28 08:57:28', '2018-06-28 08:57:28'),
(1239, 789, 100021, 9, '46.10', 10, '2018-06-28 10:01:35', '2018-06-28 10:01:35'),
(1240, 790, 100032, 9, '16.80', 10, '2018-06-28 10:27:52', '2018-06-28 10:27:52'),
(1241, 791, 100032, 9, '12.80', 10, '2018-06-28 10:29:48', '2018-06-28 10:29:48'),
(1242, 792, 100021, 9, '65.00', 10, '2018-06-28 10:34:57', '2018-06-28 10:34:57'),
(1243, 793, 100032, 9, '16.80', 10, '2018-06-28 10:36:44', '2018-06-28 10:36:44'),
(1244, 794, 100023, 100021, '336.00', 20, '2018-06-28 10:37:02', '2018-06-28 10:37:02'),
(1245, 794, 100023, 9, '168.00', 10, '2018-06-28 10:37:02', '2018-06-28 10:37:02'),
(1246, 795, 100023, 100021, '330.00', 20, '2018-06-28 10:37:33', '2018-06-28 10:37:33'),
(1247, 795, 100023, 9, '165.00', 10, '2018-06-28 10:37:33', '2018-06-28 10:37:33'),
(1248, 798, 100032, 9, '15.80', 10, '2018-06-28 11:38:15', '2018-06-28 11:38:15'),
(1249, 799, 100032, 9, '15.80', 10, '2018-06-28 14:33:07', '2018-06-28 14:33:07'),
(1250, 800, 100013, 100011, '20.16', 12, '2018-06-28 14:40:08', '2018-06-28 14:40:08'),
(1251, 800, 100013, 9, '16.80', 10, '2018-06-28 14:40:08', '2018-06-28 14:40:08'),
(1252, 801, 100032, 9, '14.80', 10, '2018-06-28 14:46:11', '2018-06-28 14:46:11'),
(1253, 802, 100032, 9, '4.80', 10, '2018-06-28 14:47:54', '2018-06-28 14:47:54'),
(1254, 804, 100026, 9, '15.80', 10, '2018-06-28 14:53:28', '2018-06-28 14:53:28'),
(1255, 806, 100026, 9, '16.80', 10, '2018-06-28 15:00:04', '2018-06-28 15:00:04'),
(1256, 807, 100026, 9, '13.60', 10, '2018-06-28 15:00:47', '2018-06-28 15:00:47'),
(1257, 808, 100026, 9, '14.80', 10, '2018-06-28 15:02:47', '2018-06-28 15:02:47'),
(1258, 809, 100026, 9, '15.80', 10, '2018-06-28 15:03:10', '2018-06-28 15:03:10'),
(1259, 810, 100026, 9, '16.80', 10, '2018-06-28 15:06:30', '2018-06-28 15:06:30'),
(1260, 811, 100026, 9, '16.80', 10, '2018-06-28 15:06:41', '2018-06-28 15:06:41'),
(1261, 812, 100026, 9, '16.80', 10, '2018-06-28 15:23:46', '2018-06-28 15:23:46'),
(1262, 813, 100026, 9, '16.80', 10, '2018-06-28 15:24:00', '2018-06-28 15:24:00'),
(1263, 814, 100026, 9, '16.80', 10, '2018-06-28 16:02:05', '2018-06-28 16:02:05'),
(1264, 815, 100026, 9, '16.80', 10, '2018-06-28 16:02:54', '2018-06-28 16:02:54'),
(1265, 816, 100013, 100011, '20.16', 12, '2018-06-28 16:36:37', '2018-06-28 16:36:37'),
(1266, 816, 100013, 9, '16.80', 10, '2018-06-28 16:36:37', '2018-06-28 16:36:37'),
(1267, 817, 100026, 9, '15.80', 10, '2018-06-28 16:50:34', '2018-06-28 16:50:34'),
(1268, 818, 100026, 9, '15.80', 10, '2018-06-28 16:50:41', '2018-06-28 16:50:41'),
(1269, 819, 100026, 9, '16.80', 10, '2018-06-28 16:50:53', '2018-06-28 16:50:53'),
(1270, 820, 100026, 9, '16.80', 10, '2018-06-28 16:50:58', '2018-06-28 16:50:58'),
(1271, 821, 100026, 9, '16.80', 10, '2018-06-28 16:52:22', '2018-06-28 16:52:22'),
(1272, 822, 100026, 9, '16.80', 10, '2018-06-28 16:52:29', '2018-06-28 16:52:29'),
(1273, 823, 100026, 9, '16.80', 10, '2018-06-28 17:02:41', '2018-06-28 17:02:41'),
(1274, 824, 100026, 9, '16.80', 10, '2018-06-28 17:03:04', '2018-06-28 17:03:04'),
(1275, 825, 100026, 9, '15.80', 10, '2018-06-28 17:04:01', '2018-06-28 17:04:01'),
(1276, 826, 100026, 9, '15.80', 10, '2018-06-28 17:04:16', '2018-06-28 17:04:16'),
(1277, 827, 100021, 9, '168.00', 10, '2018-06-28 17:14:08', '2018-06-28 17:14:08'),
(1278, 828, 100021, 9, '168.00', 10, '2018-06-28 17:14:18', '2018-06-28 17:14:18'),
(1279, 829, 100021, 9, '68.00', 10, '2018-06-28 17:14:27', '2018-06-28 17:14:27'),
(1280, 830, 100021, 9, '68.00', 10, '2018-06-28 17:42:06', '2018-06-28 17:42:06'),
(1281, 831, 100021, 9, '68.00', 10, '2018-06-28 21:42:40', '2018-06-28 21:42:40'),
(1282, 832, 100021, 9, '40.00', 10, '2018-06-28 21:44:31', '2018-06-28 21:44:31'),
(1283, 833, 100021, 9, '58.00', 10, '2018-06-28 21:44:40', '2018-06-28 21:44:40'),
(1284, 834, 100021, 9, '168.00', 10, '2018-06-29 09:08:53', '2018-06-29 09:08:53'),
(1285, 835, 100021, 9, '54.40', 10, '2018-06-29 09:09:05', '2018-06-29 09:09:05'),
(1286, 836, 100021, 9, '168.00', 10, '2018-06-29 09:18:41', '2018-06-29 09:18:41'),
(1287, 837, 100026, 9, '16.80', 10, '2018-06-29 10:45:07', '2018-06-29 10:45:07'),
(1288, 838, 100009, 9, '6.80', 10, '2018-06-29 17:38:02', '2018-06-29 17:38:02'),
(1289, 839, 100021, 9, '168.00', 10, '2018-07-02 08:45:37', '2018-07-02 08:45:37'),
(1290, 840, 100021, 9, '168.00', 10, '2018-07-02 08:46:17', '2018-07-02 08:46:17'),
(1291, 841, 100021, 9, '58.00', 10, '2018-07-02 10:11:52', '2018-07-02 10:11:52'),
(1292, 842, 100021, 9, '168.00', 10, '2018-07-02 10:24:21', '2018-07-02 10:24:21'),
(1293, 843, 100013, 100011, '20.16', 12, '2018-07-03 10:04:17', '2018-07-03 10:04:17'),
(1294, 843, 100013, 9, '16.80', 10, '2018-07-03 10:04:17', '2018-07-03 10:04:17'),
(1295, 844, 100013, 100011, '20.16', 12, '2018-07-03 10:04:22', '2018-07-03 10:04:22'),
(1296, 844, 100013, 9, '16.80', 10, '2018-07-03 10:04:22', '2018-07-03 10:04:22'),
(1297, 845, 100013, 100011, '18.96', 12, '2018-07-03 10:04:36', '2018-07-03 10:04:36'),
(1298, 845, 100013, 9, '15.80', 10, '2018-07-03 10:04:36', '2018-07-03 10:04:36'),
(1299, 846, 100013, 100011, '18.96', 12, '2018-07-03 10:04:42', '2018-07-03 10:04:42'),
(1300, 846, 100013, 9, '15.80', 10, '2018-07-03 10:04:42', '2018-07-03 10:04:42'),
(1301, 847, 100013, 100011, '20.16', 12, '2018-07-03 10:04:55', '2018-07-03 10:04:55'),
(1302, 847, 100013, 9, '16.80', 10, '2018-07-03 10:04:55', '2018-07-03 10:04:55'),
(1303, 848, 100013, 100011, '20.16', 12, '2018-07-03 10:05:01', '2018-07-03 10:05:01'),
(1304, 848, 100013, 9, '16.80', 10, '2018-07-03 10:05:01', '2018-07-03 10:05:01'),
(1305, 849, 100013, 100011, '8.16', 12, '2018-07-03 10:05:13', '2018-07-03 10:05:13'),
(1306, 849, 100013, 9, '6.80', 10, '2018-07-03 10:05:13', '2018-07-03 10:05:13'),
(1307, 850, 100013, 100011, '8.16', 12, '2018-07-03 10:05:18', '2018-07-03 10:05:18'),
(1308, 850, 100013, 9, '6.80', 10, '2018-07-03 10:05:18', '2018-07-03 10:05:18'),
(1309, 851, 100013, 100011, '18.96', 12, '2018-07-03 10:05:30', '2018-07-03 10:05:30'),
(1310, 851, 100013, 9, '15.80', 10, '2018-07-03 10:05:30', '2018-07-03 10:05:30'),
(1311, 852, 100013, 100011, '18.96', 12, '2018-07-03 10:05:35', '2018-07-03 10:05:35'),
(1312, 852, 100013, 9, '15.80', 10, '2018-07-03 10:05:35', '2018-07-03 10:05:35'),
(1313, 853, 100013, 100011, '20.16', 12, '2018-07-03 10:05:53', '2018-07-03 10:05:53'),
(1314, 853, 100013, 9, '16.80', 10, '2018-07-03 10:05:53', '2018-07-03 10:05:53'),
(1315, 854, 100013, 100011, '20.16', 12, '2018-07-03 10:06:02', '2018-07-03 10:06:02'),
(1316, 854, 100013, 9, '16.80', 10, '2018-07-03 10:06:02', '2018-07-03 10:06:02'),
(1317, 855, 100013, 100011, '20.16', 12, '2018-07-03 10:06:14', '2018-07-03 10:06:14'),
(1318, 855, 100013, 9, '16.80', 10, '2018-07-03 10:06:14', '2018-07-03 10:06:14'),
(1319, 856, 100013, 100011, '20.16', 12, '2018-07-03 10:06:26', '2018-07-03 10:06:26'),
(1320, 856, 100013, 9, '16.80', 10, '2018-07-03 10:06:26', '2018-07-03 10:06:26'),
(1321, 857, 100013, 100011, '6.96', 12, '2018-07-03 10:07:07', '2018-07-03 10:07:07'),
(1322, 857, 100013, 9, '5.80', 10, '2018-07-03 10:07:07', '2018-07-03 10:07:07'),
(1323, 858, 100013, 100011, '6.96', 12, '2018-07-03 10:07:16', '2018-07-03 10:07:16'),
(1324, 858, 100013, 9, '5.80', 10, '2018-07-03 10:07:16', '2018-07-03 10:07:16'),
(1325, 859, 100013, 100011, '3.60', 12, '2018-07-03 10:07:29', '2018-07-03 10:07:29'),
(1326, 859, 100013, 9, '3.00', 10, '2018-07-03 10:07:29', '2018-07-03 10:07:29'),
(1327, 860, 100013, 100011, '3.60', 12, '2018-07-03 10:10:40', '2018-07-03 10:10:40'),
(1328, 860, 100013, 9, '3.00', 10, '2018-07-03 10:10:41', '2018-07-03 10:10:41'),
(1329, 861, 100013, 100011, '6.96', 12, '2018-07-03 10:10:51', '2018-07-03 10:10:51'),
(1330, 861, 100013, 9, '5.80', 10, '2018-07-03 10:10:51', '2018-07-03 10:10:51'),
(1331, 862, 100013, 100011, '6.96', 12, '2018-07-03 10:10:57', '2018-07-03 10:10:57'),
(1332, 862, 100013, 9, '5.80', 10, '2018-07-03 10:10:57', '2018-07-03 10:10:57'),
(1333, 863, 100013, 100011, '5.40', 12, '2018-07-03 10:11:07', '2018-07-03 10:11:07'),
(1334, 863, 100013, 9, '4.50', 10, '2018-07-03 10:11:07', '2018-07-03 10:11:07'),
(1335, 864, 100013, 100011, '5.40', 12, '2018-07-03 10:11:29', '2018-07-03 10:11:29'),
(1336, 864, 100013, 9, '4.50', 10, '2018-07-03 10:11:29', '2018-07-03 10:11:29'),
(1337, 865, 100013, 100011, '1.80', 12, '2018-07-03 10:11:44', '2018-07-03 10:11:44'),
(1338, 865, 100013, 9, '1.50', 10, '2018-07-03 10:11:44', '2018-07-03 10:11:44'),
(1339, 866, 100013, 100011, '1.80', 12, '2018-07-03 10:11:50', '2018-07-03 10:11:50'),
(1340, 866, 100013, 9, '1.50', 10, '2018-07-03 10:11:50', '2018-07-03 10:11:50'),
(1341, 867, 100013, 100011, '3.36', 12, '2018-07-03 10:12:05', '2018-07-03 10:12:05'),
(1342, 867, 100013, 9, '2.80', 10, '2018-07-03 10:12:05', '2018-07-03 10:12:05'),
(1343, 868, 100013, 100011, '3.36', 12, '2018-07-03 10:12:10', '2018-07-03 10:12:10'),
(1344, 868, 100013, 9, '2.80', 10, '2018-07-03 10:12:10', '2018-07-03 10:12:10'),
(1345, 869, 100013, 100011, '17.52', 12, '2018-07-03 10:12:22', '2018-07-03 10:12:22'),
(1346, 869, 100013, 9, '14.60', 10, '2018-07-03 10:12:22', '2018-07-03 10:12:22'),
(1347, 870, 100013, 100011, '17.52', 12, '2018-07-03 10:12:28', '2018-07-03 10:12:28'),
(1348, 870, 100013, 9, '14.60', 10, '2018-07-03 10:12:28', '2018-07-03 10:12:28'),
(1349, 871, 100013, 100011, '5.52', 12, '2018-07-03 10:14:07', '2018-07-03 10:14:07'),
(1350, 871, 100013, 9, '4.60', 10, '2018-07-03 10:14:07', '2018-07-03 10:14:07'),
(1351, 872, 100013, 100011, '5.52', 12, '2018-07-03 10:14:15', '2018-07-03 10:14:15'),
(1352, 872, 100013, 9, '4.60', 10, '2018-07-03 10:14:15', '2018-07-03 10:14:15'),
(1353, 873, 100013, 100011, '17.52', 12, '2018-07-03 10:14:56', '2018-07-03 10:14:56'),
(1354, 873, 100013, 9, '14.60', 10, '2018-07-03 10:14:56', '2018-07-03 10:14:56'),
(1355, 874, 100013, 100011, '17.52', 12, '2018-07-03 10:15:01', '2018-07-03 10:15:01'),
(1356, 874, 100013, 9, '14.60', 10, '2018-07-03 10:15:01', '2018-07-03 10:15:01'),
(1357, 875, 100013, 100011, '17.52', 12, '2018-07-03 10:17:06', '2018-07-03 10:17:06'),
(1358, 875, 100013, 9, '14.60', 10, '2018-07-03 10:17:06', '2018-07-03 10:17:06'),
(1359, 876, 100013, 100011, '17.52', 12, '2018-07-03 10:17:16', '2018-07-03 10:17:16'),
(1360, 876, 100013, 9, '14.60', 10, '2018-07-03 10:17:16', '2018-07-03 10:17:16'),
(1361, 877, 100013, 100011, '20.16', 12, '2018-07-03 10:17:53', '2018-07-03 10:17:53'),
(1362, 877, 100013, 9, '16.80', 10, '2018-07-03 10:17:53', '2018-07-03 10:17:53'),
(1363, 878, 100013, 100011, '5.52', 12, '2018-07-03 10:20:24', '2018-07-03 10:20:24'),
(1364, 878, 100013, 9, '4.60', 10, '2018-07-03 10:20:24', '2018-07-03 10:20:24'),
(1365, 879, 100013, 100011, '5.52', 12, '2018-07-03 10:20:35', '2018-07-03 10:20:35'),
(1366, 879, 100013, 9, '4.60', 10, '2018-07-03 10:20:35', '2018-07-03 10:20:35'),
(1367, 880, 100013, 100011, '20.16', 12, '2018-07-03 10:22:10', '2018-07-03 10:22:10'),
(1368, 880, 100013, 9, '16.80', 10, '2018-07-03 10:22:10', '2018-07-03 10:22:10'),
(1369, 881, 100013, 100011, '20.16', 12, '2018-07-03 10:22:46', '2018-07-03 10:22:46'),
(1370, 881, 100013, 9, '16.80', 10, '2018-07-03 10:22:46', '2018-07-03 10:22:46'),
(1371, 882, 100013, 100011, '20.16', 12, '2018-07-03 14:29:22', '2018-07-03 14:29:22'),
(1372, 882, 100013, 9, '16.80', 10, '2018-07-03 14:29:22', '2018-07-03 14:29:22'),
(1373, 883, 100013, 100011, '20.16', 12, '2018-07-03 14:29:27', '2018-07-03 14:29:27'),
(1374, 883, 100013, 9, '16.80', 10, '2018-07-03 14:29:27', '2018-07-03 14:29:27'),
(1375, 884, 100013, 100011, '20.16', 12, '2018-07-03 14:35:39', '2018-07-03 14:35:39'),
(1376, 884, 100013, 9, '16.80', 10, '2018-07-03 14:35:39', '2018-07-03 14:35:39'),
(1377, 885, 100013, 100011, '20.16', 12, '2018-07-03 14:35:47', '2018-07-03 14:35:47'),
(1378, 885, 100013, 9, '16.80', 10, '2018-07-03 14:35:47', '2018-07-03 14:35:47'),
(1379, 886, 100013, 100011, '20.16', 12, '2018-07-03 15:10:22', '2018-07-03 15:10:22'),
(1380, 886, 100013, 9, '16.80', 10, '2018-07-03 15:10:22', '2018-07-03 15:10:22'),
(1381, 887, 100013, 100011, '20.16', 12, '2018-07-03 15:10:35', '2018-07-03 15:10:35'),
(1382, 887, 100013, 9, '16.80', 10, '2018-07-03 15:10:35', '2018-07-03 15:10:35'),
(1383, 888, 100013, 100011, '20.16', 12, '2018-07-03 16:47:15', '2018-07-03 16:47:15'),
(1384, 888, 100013, 9, '16.80', 10, '2018-07-03 16:47:15', '2018-07-03 16:47:15'),
(1385, 889, 100013, 100011, '20.16', 12, '2018-07-03 16:47:21', '2018-07-03 16:47:21'),
(1386, 889, 100013, 9, '16.80', 10, '2018-07-03 16:47:21', '2018-07-03 16:47:21'),
(1387, 890, 100013, 100011, '20.16', 12, '2018-07-03 16:47:51', '2018-07-03 16:47:51'),
(1388, 890, 100013, 9, '16.80', 10, '2018-07-03 16:47:51', '2018-07-03 16:47:51'),
(1389, 891, 100013, 100011, '20.16', 12, '2018-07-03 16:48:00', '2018-07-03 16:48:00'),
(1390, 891, 100013, 9, '16.80', 10, '2018-07-03 16:48:00', '2018-07-03 16:48:00'),
(1391, 892, 100013, 100011, '20.16', 12, '2018-07-03 17:07:41', '2018-07-03 17:07:41'),
(1392, 892, 100013, 9, '16.80', 10, '2018-07-03 17:07:41', '2018-07-03 17:07:41'),
(1393, 893, 100013, 100011, '20.16', 12, '2018-07-03 17:07:50', '2018-07-03 17:07:50'),
(1394, 893, 100013, 9, '16.80', 10, '2018-07-03 17:07:50', '2018-07-03 17:07:50'),
(1395, 894, 100034, 9, '30.60', 10, '2018-07-16 09:28:06', '2018-07-16 09:28:06'),
(1396, 895, 100034, 9, '4.60', 10, '2018-07-16 09:33:16', '2018-07-16 09:33:16'),
(1397, 896, 100038, 100037, '0.00', 0, '2018-07-16 11:41:43', '2018-07-16 11:41:43'),
(1398, 896, 100038, 21, '87.60', 60, '2018-07-16 11:41:43', '2018-07-16 11:41:43'),
(1399, 897, 100038, 100037, '0.00', 0, '2018-07-16 11:41:55', '2018-07-16 11:41:55'),
(1400, 897, 100038, 21, '87.60', 60, '2018-07-16 11:41:55', '2018-07-16 11:41:55'),
(1401, 898, 100038, 100037, '0.00', 0, '2018-07-16 13:06:10', '2018-07-16 13:06:10'),
(1402, 898, 100038, 21, '94.80', 60, '2018-07-16 13:06:10', '2018-07-16 13:06:10'),
(1403, 899, 100037, 100036, '0.00', 0, '2018-07-16 14:04:25', '2018-07-16 14:04:25'),
(1404, 899, 100037, 21, '100.80', 60, '2018-07-16 14:04:25', '2018-07-16 14:04:25'),
(1405, 900, 100037, 100036, '0.00', 0, '2018-07-16 14:30:05', '2018-07-16 14:30:05'),
(1406, 900, 100037, 21, '94.80', 60, '2018-07-16 14:30:05', '2018-07-16 14:30:05'),
(1407, 901, 100037, 100036, '0.00', 0, '2018-07-16 15:46:06', '2018-07-16 15:46:06'),
(1408, 901, 100037, 21, '100.80', 60, '2018-07-16 15:46:06', '2018-07-16 15:46:06'),
(1409, 902, 100037, 100036, '0.00', 0, '2018-07-16 17:05:29', '2018-07-16 17:05:29'),
(1410, 902, 100037, 21, '94.80', 60, '2018-07-16 17:05:29', '2018-07-16 17:05:29'),
(1411, 904, 100021, 9, '167.00', 10, '2018-07-16 19:27:37', '2018-07-16 19:27:37'),
(1412, 905, 100021, 9, '157.00', 10, '2018-07-16 19:28:25', '2018-07-16 19:28:25'),
(1413, 906, 100021, 9, '168.00', 10, '2018-07-16 19:28:52', '2018-07-16 19:28:52'),
(1414, 908, 100039, 9, '168.00', 10, '2018-07-16 20:21:17', '2018-07-16 20:21:17'),
(1415, 909, 100039, 9, '168.00', 10, '2018-07-16 20:22:01', '2018-07-16 20:22:01'),
(1416, 910, 100039, 9, '158.00', 10, '2018-07-16 20:23:24', '2018-07-16 20:23:24'),
(1417, 911, 100039, 9, '158.00', 10, '2018-07-16 20:23:32', '2018-07-16 20:23:32'),
(1418, 912, 100039, 9, '158.00', 10, '2018-07-16 20:27:57', '2018-07-16 20:27:57'),
(1419, 913, 100039, 9, '158.00', 10, '2018-07-16 20:29:12', '2018-07-16 20:29:12'),
(1420, 914, 100039, 9, '158.00', 10, '2018-07-16 20:29:25', '2018-07-16 20:29:25'),
(1421, 915, 100013, 100011, '20.16', 12, '2018-07-17 01:05:27', '2018-07-17 01:05:27'),
(1422, 915, 100013, 9, '16.80', 10, '2018-07-17 01:05:27', '2018-07-17 01:05:27'),
(1423, 916, 100013, 100011, '18.96', 12, '2018-07-17 01:19:33', '2018-07-17 01:19:33'),
(1424, 916, 100013, 9, '15.80', 10, '2018-07-17 01:19:33', '2018-07-17 01:19:33'),
(1425, 919, 100039, 9, '165.00', 10, '2018-07-17 13:36:38', '2018-07-17 13:36:38'),
(1426, 920, 100039, 9, '166.00', 10, '2018-07-17 13:38:40', '2018-07-17 13:38:40'),
(1427, 924, 100042, 9, '32.60', 10, '2018-07-18 01:14:30', '2018-07-18 01:14:30'),
(1428, 926, 100044, 9, '168.00', 10, '2018-07-18 11:17:08', '2018-07-18 11:17:08'),
(1429, 927, 100044, 9, '168.00', 10, '2018-07-18 11:17:29', '2018-07-18 11:17:29'),
(1430, 928, 100044, 9, '30.00', 10, '2018-07-18 11:21:52', '2018-07-18 11:21:52'),
(1431, 929, 100044, 9, '158.00', 10, '2018-07-18 11:26:22', '2018-07-18 11:26:22'),
(1432, 930, 100044, 9, '158.00', 10, '2018-07-18 11:26:34', '2018-07-18 11:26:34'),
(1433, 931, 100044, 9, '158.00', 10, '2018-07-18 11:26:44', '2018-07-18 11:26:44'),
(1434, 932, 100044, 9, '145.80', 10, '2018-07-18 11:27:02', '2018-07-18 11:27:02'),
(1435, 933, 100044, 9, '4.60', 10, '2018-07-18 11:27:12', '2018-07-18 11:27:12'),
(1436, 934, 100044, 9, '68.00', 10, '2018-07-18 11:27:22', '2018-07-18 11:27:22'),
(1437, 935, 100044, 9, '168.00', 10, '2018-07-18 11:27:34', '2018-07-18 11:27:34'),
(1438, 936, 100044, 9, '168.00', 10, '2018-07-18 11:27:46', '2018-07-18 11:27:46'),
(1439, 937, 100044, 9, '168.00', 10, '2018-07-18 11:27:56', '2018-07-18 11:27:56'),
(1440, 938, 100044, 9, '168.00', 10, '2018-07-18 11:28:05', '2018-07-18 11:28:05'),
(1441, 939, 100044, 9, '168.00', 10, '2018-07-18 11:28:22', '2018-07-18 11:28:22'),
(1442, 940, 100044, 9, '158.00', 10, '2018-07-18 12:17:19', '2018-07-18 12:17:19'),
(1443, 1, 100064, 100055, '0.00', 0, '2019-01-15 11:55:29', '2019-01-15 11:55:29'),
(1444, 1, 100064, 33, '288.00', 90, '2019-01-15 11:55:29', '2019-01-15 11:55:29'),
(1445, 2, 100064, 100055, '0.00', 0, '2019-01-15 18:17:00', '2019-01-15 18:17:00'),
(1446, 2, 100064, 33, '288.00', 90, '2019-01-15 18:17:00', '2019-01-15 18:17:00'),
(1447, 3, 100064, 100055, '0.00', 0, '2019-01-15 19:47:47', '2019-01-15 19:47:47'),
(1448, 3, 100064, 33, '288.00', 90, '2019-01-15 19:47:47', '2019-01-15 19:47:47'),
(1449, 4, 100064, 100055, '0.00', 0, '2019-01-15 20:07:57', '2019-01-15 20:07:57'),
(1450, 4, 100064, 33, '288.00', 90, '2019-01-15 20:07:57', '2019-01-15 20:07:57'),
(1451, 5, 100105, 100057, '0.00', 0, '2019-01-15 20:34:51', '2019-01-15 20:34:51'),
(1452, 5, 100105, 23, '144.00', 90, '2019-01-15 20:34:51', '2019-01-15 20:34:51'),
(1453, 6, 100105, 100057, '0.00', 0, '2019-01-15 21:02:40', '2019-01-15 21:02:40'),
(1454, 6, 100105, 23, '144.00', 90, '2019-01-15 21:02:40', '2019-01-15 21:02:40'),
(1455, 7, 100100, 100068, '0.00', 0, '2019-01-15 21:12:43', '2019-01-15 21:12:43'),
(1456, 7, 100100, 23, '115.20', 90, '2019-01-15 21:12:43', '2019-01-15 21:12:43'),
(1457, 8, 100100, 100068, '0.00', 0, '2019-01-15 22:47:04', '2019-01-15 22:47:04'),
(1458, 8, 100100, 23, '144.00', 90, '2019-01-15 22:47:04', '2019-01-15 22:47:04'),
(1459, 9, 100100, 100068, '0.00', 0, '2019-01-15 22:55:23', '2019-01-15 22:55:23'),
(1460, 9, 100100, 23, '115.20', 90, '2019-01-15 22:55:23', '2019-01-15 22:55:23'),
(1461, 10, 100086, 23, '115.20', 90, '2019-01-16 00:06:28', '2019-01-16 00:06:28'),
(1462, 11, 100100, 100068, '0.00', 0, '2019-01-16 00:24:16', '2019-01-16 00:24:16'),
(1463, 11, 100100, 23, '115.20', 90, '2019-01-16 00:24:16', '2019-01-16 00:24:16'),
(1464, 12, 100119, 100057, '0.00', 0, '2019-01-16 09:43:52', '2019-01-16 09:43:52'),
(1465, 12, 100119, 23, '252.00', 90, '2019-01-16 09:43:52', '2019-01-16 09:43:52'),
(1466, 13, 100100, 100068, '0.00', 0, '2019-01-16 09:53:58', '2019-01-16 09:53:58'),
(1467, 13, 100100, 23, '115.20', 90, '2019-01-16 09:53:58', '2019-01-16 09:53:58'),
(1468, 14, 100100, 100068, '0.00', 0, '2019-01-16 09:56:15', '2019-01-16 09:56:15'),
(1469, 14, 100100, 23, '216.00', 90, '2019-01-16 09:56:15', '2019-01-16 09:56:15'),
(1470, 15, 100100, 100068, '0.00', 0, '2019-01-16 22:46:51', '2019-01-16 22:46:51'),
(1471, 15, 100100, 23, '432.00', 90, '2019-01-16 22:46:51', '2019-01-16 22:46:51'),
(1472, 16, 100064, 100055, '0.00', 0, '2019-01-16 23:30:59', '2019-01-16 23:30:59'),
(1473, 16, 100064, 33, '432.00', 90, '2019-01-16 23:30:59', '2019-01-16 23:30:59'),
(1474, 17, 100100, 100068, '0.00', 0, '2019-01-16 23:32:49', '2019-01-16 23:32:49'),
(1475, 17, 100100, 23, '144.00', 90, '2019-01-16 23:32:49', '2019-01-16 23:32:49'),
(1476, 18, 100064, 100055, '0.00', 0, '2019-01-16 23:39:37', '2019-01-16 23:39:37'),
(1477, 18, 100064, 33, '288.00', 90, '2019-01-16 23:39:37', '2019-01-16 23:39:37'),
(1478, 19, 100100, 100068, '0.00', 0, '2019-01-16 23:39:58', '2019-01-16 23:39:58'),
(1479, 19, 100100, 23, '144.00', 90, '2019-01-16 23:39:58', '2019-01-16 23:39:58'),
(1480, 20, 100064, 100055, '0.00', 0, '2019-01-16 23:45:11', '2019-01-16 23:45:11'),
(1481, 20, 100064, 33, '288.00', 90, '2019-01-16 23:45:11', '2019-01-16 23:45:11'),
(1482, 21, 100100, 100068, '0.00', 0, '2019-01-16 23:47:19', '2019-01-16 23:47:19'),
(1483, 21, 100100, 23, '144.00', 90, '2019-01-16 23:47:19', '2019-01-16 23:47:19'),
(1484, 22, 100064, 100055, '0.00', 0, '2019-01-16 23:51:48', '2019-01-16 23:51:48'),
(1485, 22, 100064, 33, '288.00', 90, '2019-01-16 23:51:48', '2019-01-16 23:51:48'),
(1486, 23, 100064, 100055, '0.00', 0, '2019-01-16 23:53:50', '2019-01-16 23:53:50'),
(1487, 23, 100064, 33, '288.00', 90, '2019-01-16 23:53:50', '2019-01-16 23:53:50'),
(1488, 24, 100064, 100055, '0.00', 0, '2019-01-16 23:59:29', '2019-01-16 23:59:29'),
(1489, 24, 100064, 33, '288.00', 90, '2019-01-16 23:59:29', '2019-01-16 23:59:29'),
(1490, 25, 100100, 100068, '0.00', 0, '2019-01-17 00:02:20', '2019-01-17 00:02:20'),
(1491, 25, 100100, 23, '144.00', 90, '2019-01-17 00:02:20', '2019-01-17 00:02:20'),
(1492, 26, 100100, 100068, '0.00', 0, '2019-01-17 00:05:08', '2019-01-17 00:05:08'),
(1493, 26, 100100, 23, '144.00', 90, '2019-01-17 00:05:08', '2019-01-17 00:05:08'),
(1494, 27, 100100, 100068, '0.00', 0, '2019-01-17 00:39:17', '2019-01-17 00:39:17'),
(1495, 27, 100100, 23, '144.00', 90, '2019-01-17 00:39:17', '2019-01-17 00:39:17'),
(1496, 28, 100100, 100068, '0.00', 0, '2019-01-17 01:04:34', '2019-01-17 01:04:34'),
(1497, 28, 100100, 23, '189.00', 90, '2019-01-17 01:04:34', '2019-01-17 01:04:34'),
(1498, 29, 100100, 100068, '0.00', 0, '2019-01-17 01:12:40', '2019-01-17 01:12:40'),
(1499, 29, 100100, 23, '189.00', 90, '2019-01-17 01:12:40', '2019-01-17 01:12:40'),
(1500, 30, 100112, 100058, '0.00', 0, '2019-01-17 09:46:42', '2019-01-17 09:46:42'),
(1501, 30, 100112, 23, '252.00', 90, '2019-01-17 09:46:42', '2019-01-17 09:46:42'),
(1502, 31, 100112, 100058, '0.00', 0, '2019-01-17 10:15:44', '2019-01-17 10:15:44'),
(1503, 31, 100112, 23, '252.00', 90, '2019-01-17 10:15:44', '2019-01-17 10:15:44'),
(1504, 32, 100100, 100068, '0.00', 0, '2019-01-17 10:27:12', '2019-01-17 10:27:12'),
(1505, 32, 100100, 23, '115.20', 90, '2019-01-17 10:27:12', '2019-01-17 10:27:12'),
(1506, 33, 100083, 100059, '0.00', 0, '2019-01-17 14:22:10', '2019-01-17 14:22:10'),
(1507, 33, 100083, 23, '252.00', 90, '2019-01-17 14:22:10', '2019-01-17 14:22:10'),
(1508, 34, 100083, 100059, '0.00', 0, '2019-01-17 14:35:29', '2019-01-17 14:35:29'),
(1509, 34, 100083, 23, '252.00', 90, '2019-01-17 14:35:29', '2019-01-17 14:35:29'),
(1510, 35, 100112, 100058, '0.00', 0, '2019-01-17 18:36:17', '2019-01-17 18:36:17'),
(1511, 35, 100112, 23, '432.00', 90, '2019-01-17 18:36:17', '2019-01-17 18:36:17'),
(1512, 36, 100083, 100059, '0.00', 0, '2019-01-17 21:30:04', '2019-01-17 21:30:04'),
(1513, 36, 100083, 23, '216.00', 90, '2019-01-17 21:30:04', '2019-01-17 21:30:04'),
(1514, 37, 100105, 100057, '0.00', 0, '2019-01-17 22:03:42', '2019-01-17 22:03:42'),
(1515, 37, 100105, 23, '115.20', 90, '2019-01-17 22:03:42', '2019-01-17 22:03:42'),
(1516, 38, 100053, 30, '0.00', 0, '2019-01-18 00:51:09', '2019-01-18 00:51:09'),
(1517, 39, 100053, 30, '0.00', 0, '2019-01-18 13:30:11', '2019-01-18 13:30:11'),
(1518, 40, 100053, 30, '0.00', 0, '2019-01-21 15:43:10', '2019-01-21 15:43:10'),
(1519, 41, 100053, 30, '0.00', 0, '2019-01-21 16:15:10', '2019-01-21 16:15:10'),
(1520, 42, 100053, 30, '0.00', 0, '2019-01-24 19:14:59', '2019-01-24 19:14:59'),
(1521, 43, 100053, 30, '0.00', 0, '2019-02-20 11:39:09', '2019-02-20 11:39:09'),
(1522, 44, 100053, 30, '0.00', 0, '2019-02-20 11:46:37', '2019-02-20 11:46:37'),
(1523, 45, 100053, 30, '0.00', 0, '2019-02-20 12:47:14', '2019-02-20 12:47:14'),
(1524, 46, 100053, 30, '0.00', 0, '2019-02-20 17:42:47', '2019-02-20 17:42:47'),
(1525, 47, 100053, 30, '0.00', 0, '2019-02-21 14:48:46', '2019-02-21 14:48:46'),
(1526, 48, 100053, 30, '0.00', 0, '2019-02-21 14:49:53', '2019-02-21 14:49:53'),
(1527, 49, 100053, 30, '0.00', 0, '2019-02-26 16:43:57', '2019-02-26 16:43:57'),
(1528, 50, 100053, 30, '0.00', 0, '2019-02-28 00:03:23', '2019-02-28 00:03:23'),
(1529, 51, 100053, 30, '0.00', 0, '2019-02-28 12:18:32', '2019-02-28 12:18:32'),
(1530, 52, 100053, 30, '0.00', 0, '2019-02-28 12:21:58', '2019-02-28 12:21:58'),
(1531, 53, 100053, 30, '0.00', 0, '2019-02-28 12:52:15', '2019-02-28 12:52:15'),
(1532, 54, 100053, 30, '0.00', 0, '2019-02-28 12:55:24', '2019-02-28 12:55:24'),
(1533, 55, 100053, 30, '0.00', 0, '2019-02-28 13:04:53', '2019-02-28 13:04:53'),
(1534, 56, 100053, 30, '0.00', 0, '2019-02-28 13:06:27', '2019-02-28 13:06:27'),
(1535, 57, 100053, 30, '0.00', 0, '2019-02-28 13:38:53', '2019-02-28 13:38:53'),
(1536, 58, 100053, 30, '0.00', 0, '2019-03-04 12:29:33', '2019-03-04 12:29:33'),
(1537, 59, 100053, 30, '0.00', 0, '2019-03-05 11:38:02', '2019-03-05 11:38:02'),
(1538, 60, 100053, 30, '0.00', 0, '2019-03-05 12:21:43', '2019-03-05 12:21:43'),
(1539, 61, 100053, 30, '0.00', 0, '2019-03-05 12:26:31', '2019-03-05 12:26:31'),
(1540, 62, 100053, 30, '0.00', 0, '2019-03-05 14:10:41', '2019-03-05 14:10:41');

-- --------------------------------------------------------

--
-- 表的结构 `user_withdraw`
--

CREATE TABLE IF NOT EXISTS `user_withdraw` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `amount` decimal(11,2) NOT NULL COMMENT '出金金额',
  `account_id` tinyint(4) NOT NULL COMMENT '出金账号ID',
  `op_state` tinyint(4) DEFAULT '1' COMMENT '操作状态：1待审核，2已操作，-1不通过',
  `created_at` datetime DEFAULT NULL COMMENT '申请时间',
  `updated_at` datetime DEFAULT NULL COMMENT '审核时间'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户提款表';

--
-- 转存表中的数据 `user_withdraw`
--

INSERT INTO `user_withdraw` (`id`, `user_id`, `amount`, `account_id`, `op_state`, `created_at`, `updated_at`) VALUES
(1, 100086, '272.00', 13, 2, '2019-01-16 09:26:07', '2019-01-17 10:14:26'),
(2, 100105, '100.00', 14, 2, '2019-01-16 09:52:24', '2019-01-17 09:59:31'),
(3, 100053, '100.00', 22, 2, '2019-02-20 11:41:57', '2019-02-20 11:43:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `admin_withdraw`
--
ALTER TABLE `admin_withdraw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amount` (`amount`,`coupon_type`);

--
-- Indexes for table `data_all`
--
ALTER TABLE `data_all`
  ADD PRIMARY KEY (`name`),
  ADD KEY `symbol` (`symbol`);

--
-- Indexes for table `exuser_withdraw`
--
ALTER TABLE `exuser_withdraw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`user_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_log_level` (`level`),
  ADD KEY `idx_log_category` (`category`);

--
-- Indexes for table `manual_article`
--
ALTER TABLE `manual_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `manual_collection`
--
ALTER TABLE `manual_collection`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`menu_id`);

--
-- Indexes for table `manual_menu`
--
ALTER TABLE `manual_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manual_version`
--
ALTER TABLE `manual_version`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`table_name`);

--
-- Indexes for table `product_price`
--
ALTER TABLE `product_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retail`
--
ALTER TABLE `retail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `retail_rebate`
--
ALTER TABLE `retail_rebate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`) USING BTREE;

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_action`
--
ALTER TABLE `user_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_charge`
--
ALTER TABLE `user_charge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_coupon`
--
ALTER TABLE `user_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `time` (`time`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_notice`
--
ALTER TABLE `user_notice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `user_points`
--
ALTER TABLE `user_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_rebate`
--
ALTER TABLE `user_rebate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `user_withdraw`
--
ALTER TABLE `user_withdraw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `admin_withdraw`
--
ALTER TABLE `admin_withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `exuser_withdraw`
--
ALTER TABLE `exuser_withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manual_article`
--
ALTER TABLE `manual_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `manual_collection`
--
ALTER TABLE `manual_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manual_menu`
--
ALTER TABLE `manual_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `manual_version`
--
ALTER TABLE `manual_version`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migration`
--
ALTER TABLE `migration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `product_price`
--
ALTER TABLE `product_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT for table `retail`
--
ALTER TABLE `retail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `retail_rebate`
--
ALTER TABLE `retail_rebate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100150;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user_action`
--
ALTER TABLE `user_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_charge`
--
ALTER TABLE `user_charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user_coupon`
--
ALTER TABLE `user_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_notice`
--
ALTER TABLE `user_notice`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user_points`
--
ALTER TABLE `user_points`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id主键',AUTO_INCREMENT=491;
--
-- AUTO_INCREMENT for table `user_rebate`
--
ALTER TABLE `user_rebate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1541;
--
-- AUTO_INCREMENT for table `user_withdraw`
--
ALTER TABLE `user_withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- 限制导出的表
--

--
-- 限制表 `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- 限制表 `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
