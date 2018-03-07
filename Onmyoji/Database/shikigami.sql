-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 07, 2018 lúc 06:21 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shikigami`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shikigami_list`
--

CREATE TABLE `shikigami_list` (
  `hinh_anh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `loai` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `xep_hang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `xep_hang_id` int(4) DEFAULT NULL,
  `long_tieng` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `danh_gia_User` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `shikigami_list`
--

INSERT INTO `shikigami_list` (`hinh_anh`, `ten`, `loai`, `xep_hang`, `xep_hang_id`, `long_tieng`, `danh_gia_User`) VALUES
('Akashita.png', 'Akashita', 'Support', 'N', 1, 'Showtaro Morikubo', NULL),
('Amanojaku Aka.png', 'Amanojaku Aka', 'Support', 'N', 1, 'N/A', NULL),
('Amanojaku Ao.png', 'Amanojaku Ao', 'Support', 'N', 1, 'N/A', NULL),
('Amanojaku Ki.png', 'Amanojaku Ki', 'Support', 'N', 1, 'N/A', NULL),
('Amanojaku Midori.png', 'Amanojaku Midori', 'ST DPS', 'N', 1, 'N/A', NULL),
('Ame Onna.png', 'Ame Onna', 'Support', 'R', 2, 'Ai Kakuma', NULL),
('Aoandon.png', 'Aoandon', 'Support', 'SSR', 4, 'Nana Mizuki', NULL),
('Aobouzu.png', 'Aobouzu', 'Support', 'SR', 3, 'Hosoya Yoshimasa', NULL),
('Aragawa no Aruji.png', 'Aragawa no Aruji', 'ST DPS', 'SSR', 4, 'Takehito Koyasu', NULL),
('Chin.png', 'Chin', 'AOE DPS', 'SR', 3, 'Tomatsu Haruka', NULL),
('Chouchin Kozou.png', 'Chouchin Kozou', 'AOE DPS', 'N', 1, 'Aoi Yuuki', NULL),
('Chouchin Obake.png', 'Chouchin Obake', 'Support', 'N', 1, 'Takehito Koyasu', NULL),
('Doujo.png', 'Doujo', 'Healer', 'R', 2, 'Ai Kakuma', NULL),
('Doumeki.png', 'Doumeki', 'Unknown', 'SR', 3, 'Hidaka Rina', NULL),
('Ebisu.png', 'Ebisu', 'Healer', 'SR', 3, 'Chafurin', NULL),
('Enenra.png', 'Enenra', 'AOE DPS', 'SR', 3, 'Kaida Yuuko', NULL),
('Enma.png', 'Enma', 'ST CC', 'SSR', 4, 'Mamiko Noto', NULL),
('Futakuchi.png', 'Futakuchi', 'RT DPS', 'SR', 3, 'Mayumi Shintani', NULL),
('Gaki.png', 'Gaki', 'ST DPS', 'R', 2, 'Marina Inoue', NULL),
('Hahakigami.png', 'Hahakigami', 'AOE DPS', 'N', 1, 'N/A', NULL),
('Hakaarashi no Rei.png', 'Hakaarashi no Rei', 'ST DPS', 'N', 1, 'Shintani Mayumi', NULL),
('Hako no Shoujo.png', 'Hako no Shoujo', 'Support', 'SR', 3, 'Koshimizu Ami', NULL),
('Hakuro.png', 'Hakuro', 'ST DPS', 'SR', 3, 'Houko Kuwashima', NULL),
('Hangan.png', 'Hangan', 'AOE DPS', 'SR', 3, 'Akira Ishida', NULL),
('Hannya.png', 'Hannya', 'Support/DPS', 'SR', 3, 'Kaji Yuuki', NULL),
('Heiyou.png', 'Heiyou', 'Support', 'R', 2, 'Akira Ishida', NULL),
('Higanbana.png', 'Higanbana', 'Support', 'SSR', 4, 'Ohara Sayaka', NULL),
('Hitotsume.png', 'Hitotsume', 'Support', 'R', 2, 'Yu Kobayashi', NULL),
('Hiyoribou.png', 'Hiyoribou', 'Unknown', 'SR', 3, 'Mimori Suzuko', NULL),
('Hone Onna.png', 'Hone Onna', 'ST DPS', 'SR', 3, 'Ayaka Suwa', NULL),
('Hououka.png', 'Hououka', 'AOE CC', 'SR', 3, 'Marina Inoue', NULL),
('Ibaraki Doji.png', 'Ibaraki Doji', 'AOE DPS', 'SSR', 4, 'Jun Fukuyama', NULL),
('Ichimoku Ren.png', 'Ichimoku Ren', 'Support', 'SSR', 4, 'Midorikawa Hikaru', NULL),
('Inugami.png', 'Inugami', 'AOE DPS', 'SR', 3, 'Seki Toshihiko', NULL),
('Itsumade.png', 'Itsumade', 'AOE DPS', 'SR', 3, 'Satou Satomi', NULL),
('Jikikaeru.png', 'Jikikaeru', 'ST DPS', 'R', 2, 'Hiroyuki Yoshino', NULL),
('Jorougumo.png', 'Jorougumo', 'AOE DPS', 'SR', 3, 'Inoue Kikuko', NULL),
('Juzu.png', 'Juzu', 'Unknown', 'R', 2, 'Tamura Yukari', NULL),
('Kachou Fuugetsu.png', 'Kachou Fuugetsu', 'Healer', 'SSR', 4, 'Hayami Saori', NULL),
('Kaguyahime.png', 'Kaguyahime', 'Support', 'SSR', 4, 'Taketatsu Ayana', NULL),
('Kairaishi.png', 'Kairaishi', 'ST DPS', 'SR', 3, 'Mamiko Noto', NULL),
('Kamaitachi.png', 'Kamaitachi', 'Support', 'SR', 3, 'Yasuhiro Mamiya', NULL),
('Kamikui.png', 'Kamikui', 'AOE CC', 'R', 2, 'Yasuhiro Mamiya', NULL),
('Kanko.png', 'Kanko', 'ST DPS', 'R', 2, 'Kenichirou Matsuda', NULL),
('Kappa.png', 'Kappa', 'AOE DPS', 'R', 2, 'Soichiro Hoshi', NULL),
('Karakasa Kozou.png', 'Karakasa Kozou', 'AOE DPS', 'N', 1, 'Yu Kobayashi', NULL),
('Karasu Tengu.png', 'Karasu Tengu', 'AOE DPS', 'R', 2, 'Yu Kobayashi', NULL),
('Kingyohime.png', 'Kingyohime', 'Support', 'SR', 3, 'Uchida Maaya', NULL),
('Kisei.png', 'Kisei', 'Unknown', 'SR', 3, 'Kakihara Tetsuya', NULL),
('Kiseirei.png', 'Kiseirei', 'ST DPS', 'N', 1, 'N/A', NULL),
('Kiyohime.png', 'Kiyohime', 'AOE DPS', 'SR', 3, 'Toa Yukinari', NULL),
('Kochou no Sei.png', 'Kochou no Sei', 'Healer', 'R', 2, 'Aoi Yuuki', NULL),
('Kodokushi.png', 'Kodokushi', 'AOE DPS', 'R', 2, 'Yasuhiro Mamiya', NULL),
('Koi.png', 'Koi', 'Support', 'R', 2, 'Aoi Yuki', NULL),
('Komatsumaru.png', 'Komatsumaru', 'Support', 'SR', 3, 'Kayano Ai', NULL),
('Korouka.png', 'Korouka', 'Support', 'R', 2, 'Matsuoka Yoshitsugu', NULL),
('Kosode no Te.png', 'Kosode no Te', 'Unknown', 'R', 2, 'Iguchi Yuka', NULL),
('Kubinashi.png', 'Kubinashi', 'ST DPS', 'R', 2, 'Kaito Ishikawa', NULL),
('Kuro Mujou.png', 'Kuro Mujou', 'AOE DPS', 'SR', 3, 'Kazuya Nakai', NULL),
('Kurodouji.png', 'Kurodouji', 'DPS', 'SR', 3, 'Sugita Tomozaku', NULL),
('Kusa.png', 'Kusa', 'Healer', 'R', 2, 'Ayaka Suwa', NULL),
('Kyonshi Ani.png', 'Kyonshi Ani', 'Support', 'SR', 3, 'Daisuke Endou', NULL),
('Kyonshi Imoto.png', 'Kyonshi Imoto', 'ST DPS', 'R', 2, 'Ayaka Suwa', NULL),
('Kyonshi Ototo.png', 'Kyonshi Ototo', 'AOE DPS', 'R', 2, 'Minami Takayama', NULL),
('Kyonshii Inu.png', 'Kyonshii Inu', 'Unknown', 'R', 2, 'N/A', NULL),
('Kyuuketsuhime.png', 'Kyuuketsuhime', 'ST DPS', 'SR', 3, 'Yukana Nogami', NULL),
('Kyuumei Neko.png', 'Kyuumei Neko', 'ST DPS', 'R', 2, 'Mayumi Shintani', NULL),
('Mannendake.png', 'Mannendake', 'Support', 'SR', 3, 'Tachibana Shinnosuke', NULL),
('Miketsu.png', 'Miketsu', 'Unknown', 'SSR', 4, 'Kawasumi Ayako', NULL),
('Momiji.png', 'Momiji', 'AOE DPS', 'SR', 3, 'Houko Kuwashima', NULL),
('Momo.png', 'Momo', 'Healer', 'SR', 3, 'Nana Mizuki', NULL),
('Mou Baa.png', 'Mou Baa', 'AOE CC', 'SR', 3, 'Rie Kugimiya', NULL),
('Nurikabe.png', 'Nurikabe', 'Support', 'N', 1, 'N/A', NULL),
('Oguna.png', 'Oguna', 'Support', 'R', 2, 'Marina Inoue', NULL),
('Oitsukigami.png', 'Oitsukigami', 'Unknown', 'SR', 3, 'Nazuka Kaori', NULL),
('Ootengu.png', 'Ootengu', 'AOE DPS', 'SSR', 4, 'Tomoaki Maeno', NULL),
('Ryomen.png', 'Ryomen', 'AOE DPS', 'SSR', 4, 'Kazuhiko Inoue', NULL),
('Sakura.png', 'Sakura', 'Healer', 'SR', 3, 'Mamiko Noto', NULL),
('Samurai no Rei.png', 'Samurai no Rei', 'AOE DPS', 'R', 2, 'Kazuhiko Inoue', NULL),
('Sanbi no Kitsune.png', 'Sanbi no Kitsune', 'ST DPS', 'R', 2, 'Miyuki Sawashiro', NULL),
('Satori.png', 'Satori', 'AOE DPS', 'R', 2, 'Nogami Yukana', NULL),
('Shiro Mujou.png', 'Shiro Mujou', 'AOE DPS', 'SR', 3, 'Ken\'ichi Suzumura', NULL),
('Shirodouji.png', 'Shirodouji', 'DPS', 'SR', 3, 'Nakamura Yuuichi', NULL),
('Shishio.png', 'Shishio', 'Support', 'SSR', 4, 'Kengo Kawanishi', NULL),
('Shouzu.png', 'Shouzu', 'Support', 'R', 2, 'Mamiko Noto', NULL),
('Shoyou.png', 'Shoyou', 'Support', 'SR', 3, 'Onosaka Masaya', NULL),
('Shuten Doji.png', 'Shuten Doji', 'ST DPS', 'SSR', 4, 'Shuuhei Sakaguchi', NULL),
('Susabi.png', 'Susabi', 'AOE DPS', 'SSR', 4, 'Hirakawa Daisuke', NULL),
('Tamamo no Mae.png', 'Tamamo no Mae', 'Unknown', 'SSR', 4, 'Park Romi', NULL),
('Tanuki.png', 'Tanuki', 'AOE DPS', 'R', 2, 'Soichiro Hoshi', NULL),
('Tesso.png', 'Tesso', 'Support', 'R', 2, 'Akira Ishida', NULL),
('Ubume.png', 'Ubume', 'AOE DPS', 'SR', 3, 'Toa Yukinari', NULL),
('Usagimaru.png', 'Usagimaru', 'Support', 'R', 2, 'Yonaga Tsubasa', NULL),
('Ushi no Toki.png', 'Ushi no Toki', 'Support', 'R', 2, 'Chiwa Saitou', NULL),
('Yamausagi.png', 'Yamausagi', 'Support', 'R', 2, 'Aki Toyosaki', NULL),
('Yamawaro.png', 'Yamawaro', 'Support', 'R', 2, 'Akira Ishida', NULL),
('Yasha.png', 'Yasha', 'DPS', 'SR', 3, 'Konishi Katsuyuki', NULL),
('Youkinshi.png', 'Youkinshi', 'Support', 'SR', 3, 'Nobunaga Shimazaki', NULL),
('Youko.png', 'Youko', 'ST DPS', 'SR', 3, 'Nobunaga Shimazaki', NULL),
('Youtouhime.png', 'Youtouhime', 'ST DPS', 'SSR', 4, 'Izawa Shiori', NULL),
('Yuki Onna.png', 'Yuki Onna', 'AOE CC', 'SR', 3, 'Ayaka Suwa', NULL),
('Yukidouji.png', 'Yukidouji', 'ST DPS', 'SSR', 4, 'Inoue Marina', NULL),
('Yumekui.png', 'Yumekui', 'AOE CC', 'SR', 3, 'Shuichi Nishitani', NULL),
('Zashiki.png', 'Zashiki', 'Support', 'R', 2, 'Junko Takeuchi', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shikigami_profile_attributes`
--

CREATE TABLE `shikigami_profile_attributes` (
  `Ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `default_img_ATK` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_index_ATK` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_img_ATK` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_index_ATK` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `plus_number_ATK` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_img_HP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_index_HP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_img_HP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_index_HP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `plus_number_HP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_img_DEF` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_index_DEF` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_img_DEF` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_index_DEF` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `plus_number_DEF` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_img_SPD` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_index_SPD` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_img_SPD` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_index_SPD` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `plus_number_SPD` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_img_Crit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_index_Crit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_img_Crit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_index_Crit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `plus_number_Crit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_crit_DMG` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_crit_DMG` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `plus_number_crit_DMG` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_effect_HIT` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_effect_HIT` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `plus_number_effect_HIT` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `default_effect_RES` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `awakened_effect_RES` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `plus_number_effect_RES` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `shikigami_profile_attributes`
--

INSERT INTO `shikigami_profile_attributes` (`Ten`, `default_img_ATK`, `default_index_ATK`, `awakened_img_ATK`, `awakened_index_ATK`, `plus_number_ATK`, `default_img_HP`, `default_index_HP`, `awakened_img_HP`, `awakened_index_HP`, `plus_number_HP`, `default_img_DEF`, `default_index_DEF`, `awakened_img_DEF`, `awakened_index_DEF`, `plus_number_DEF`, `default_img_SPD`, `default_index_SPD`, `awakened_img_SPD`, `awakened_index_SPD`, `plus_number_SPD`, `default_img_Crit`, `default_index_Crit`, `awakened_img_Crit`, `awakened_index_Crit`, `plus_number_Crit`, `default_crit_DMG`, `awakened_crit_DMG`, `plus_number_crit_DMG`, `default_effect_HIT`, `awakened_effect_HIT`, `plus_number_effect_HIT`, `default_effect_RES`, `awakened_effect_RES`, `plus_number_effect_RES`) VALUES
('Momo', 'C', '102', 'B', '2385', '2283', 'B', '960', 'A', '11393', '10433', 'A', '75', 'S', '490', '415', 'D', '90', 'B', '100', '10', 'B', '5', 'B', '5', '0', '150', '150', '0', '0', '0', '0', '0', '0', '0'),
('Sanbi no Kitsune', 'B', '124', 'A', '2921', '2797', 'C', '875', 'B', '10368', '9493', 'B', '68', 'A', '441', '373', 'D', '92', 'B', '102', '10', 'S', '10', 'S', '10', '0', '150', '150', '0', '0', '0', '0', '0', '0', '0'),
('Yuki Onna', 'A', '131', 'S', '3055', '2924', 'C', '886', 'B', '10482', '9596', 'C', '886', 'B', '415', '352', 'C', '99', 'A', '109', '10', 'A', '8', 'A', '8', '0', '150', '150', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soul_list`
--

CREATE TABLE `soul_list` (
  `hinh_anh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `loai` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `soul_list`
--

INSERT INTO `soul_list` (`hinh_anh`, `ten`, `loai`) VALUES
('Harpy.png', 'Âm Ma', 'Tấn Công'),
('Sea Sprite.png', 'Bạng Tinh', 'Chính Xác'),
('Seductress.png', 'Châm Nữ', 'Chí Mạng'),
('Fortune Cat.png', 'Chiêu Tài', 'Phòng Thủ'),
('Priestess.png', 'Chung Linh', 'Máu/Hồi Phục'),
('Nightwing.png', 'Dơi Yêu', 'Tấn Công'),
('Jizo Statue.png', 'Địa Tạng', 'Máu/Hồi Phục'),
('Himeidori.png', 'Hỏa Kê', 'Chí Mạng'),
('Azure Basan.png', 'Hỏa Linh', 'Chính Xác'),
('Mirror Lady.png', 'Kính Cơ', 'Máu/Hồi Phục'),
('Soultaker.png', 'Luân Đạo', 'Tấn Công'),
('Mimic.png', 'Ma Hạp', 'Kháng'),
('Temptress.png', 'Mị Yêu', 'Phòng Thủ'),
('Boroboroton.png', 'Miêu Phục', 'Máu/Hồi Phục'),
('House Imp.png', 'Minh Ốc', 'Tấn Công'),
('Tree Nymph.png', 'Mộc Mị', 'Phòng Thủ'),
('Dawn Fairy.png', 'Nhật Nữ', 'Phòng Thủ'),
('Holy Flame.png', 'Niết Bàn', 'Máu/Hồi Phục'),
('Shadow.png', 'Phá Thế', 'Chí Mạng'),
('Shy Soul.png', 'Phản Chẩm', 'Phòng Thủ'),
('Senecio.png', 'Quỷ Hồn', 'Kháng'),
('Watcher.png', 'Tâm Nhãn', 'Tấn Công'),
('Soul Edge.png', 'Thế Hồn', 'Máu/Hồi Phục'),
('Tree Spirit.png', 'Thụ Yêu', 'Máu/Hồi Phục'),
('Scarlet.png', 'Tranh', 'Tấn Công'),
('Pearl.png', 'Trân Châu', 'Phòng Thủ'),
('Tomb Guard.png', 'Trấn Mộ', 'Chí Mạng'),
('Snow Spirit.png', 'Tuyết Hồn', 'Phòng Thủ'),
('Claws.png', 'Võng Thiết', 'Chí Mạng'),
('Dice Sprite.png', 'Xí Ngầu', 'Kháng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `shikigami_list`
--
ALTER TABLE `shikigami_list`
  ADD PRIMARY KEY (`ten`);

--
-- Chỉ mục cho bảng `shikigami_profile_attributes`
--
ALTER TABLE `shikigami_profile_attributes`
  ADD PRIMARY KEY (`Ten`);

--
-- Chỉ mục cho bảng `soul_list`
--
ALTER TABLE `soul_list`
  ADD PRIMARY KEY (`ten`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
