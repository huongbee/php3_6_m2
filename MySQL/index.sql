CREATE TABLE `php_3_6`.`sanpham`  ( 
	`id` INT NOT NULL AUTO_INCREMENT COMMENT 'cột khóa chính' , 
	`name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
	`price` DOUBLE NOT NULL DEFAULT '0' , 
	`description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , 
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;



CREATE TABLE loaisanpham(
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`create_date` datetime NULL,
	PRIMARY KEY (`id`)
)


INSERT INTO loaisanpham (`name`,`description`) VALUES ('Loại 2', 'Mô tả 2')


UPDATE loaisanpham  SET description = "Đã update lần 3" WHERE id = 2


DELETE FROM loaisanpham WHERE id = 2


/*=================================*/
SELECT ds_cac_cot
FROM ten_bang
[WHERE dieukien]
[GROUP BY cot_gom_nhom]
[HAVING dieukien_nhom]
[ORDER BY dieukien_sort]
[LIMIT vitri,soluong]



--1
SELECT title, image, content, summary,views
FROM tintuc
ORDER BY views DESC


--2
SELECT title, image, content, summary,views 
FROM tintuc 
WHERE title LIKE 'S%'


--3
SELECT * FROM `tintuc` WHERE title LIKE '%học sinh%'

--4
--C1
	SELECT * FROM `tintuc`
	INNER JOIN 	`loaitin`
	ON tintuc.id_loaitin = loaitin.id
	WHERE loaitin.name = 'Du học'
--C2
	SELECT * FROM `tintuc`,`loaitin`
	WHERE tintuc.id_loaitin = loaitin.id
	AND loaitin.name = 'Du học'

--5
SELECT * FROM `tintuc`
INNER JOIN loaitin ON tintuc.id_loaitin = loaitin.id
INNER JOIN theloai ON theloai.id = loaitin.id_theloai
WHERE theloai.name = "Thế Giới"


--6
--c1
SELECT * FROM tintuc WHERE views BETWEEN 444 AND 555

--c2
SELECT * FROM tintuc WHERE views>=444 AND views<=555

--7
SELECT * FROM tintuc WHERE id NOT IN (SELECT DISTINCT id_tintuc FROM comment)


--8
--c1
SELECT * FROM tintuc ORDER BY views DESC LIMIT 0,1
--c2
SELECT * FROM tintuc WHERE views = (SELECT max(views) FROM tintuc)

--9
SELECT * FROM tintuc 
INNER JOIN loaitin ON tintuc.id_loaitin = loaitin.id
WHERE loaitin.name = "Giáo Dục"
ORDER BY views DESC 
LIMIT 0,1

--10
SELECT * FROM tintuc WHERE noibat =1 LIMIT 0,10

--thêm
SELECT theloai.id AS idTheLoai, theloai.name AS tenTheLoai, 
		GROUP_CONCAT(loaitin.id,':', loaitin.name, ':', loaitin.alias) 
FROM theloai 
INNER JOIN loaitin ON theloai.id = loaitin.id_theloai 
GROUP BY theloai.id



--UPDATE
--1
UPDATE tintuc SET views = views + 1 
WHERE title = "Trịnh Kim Chi làm quý bà ăn chơi"


SELECT * FROM `tintuc` WHERE title = "Trịnh Kim Chi làm quý bà ăn chơi"


--2
UPDATE loaitin SET name = "Doanh Nghiệp Việt"
WHERE  name = "Doanh Nghiệp Viết"


--DELETE
--1
DELETE FROM comment WHERE id_tintuc = 12

--2
DELETE FROM tintuc WHERE views<5


--3
DELETE FROM loaitin
WHERE id NOT IN (SELECT DISTINCT id_loaitin FROM tintuc)

--4
--C1
DELETE FROM loaitin
WHERE id_theloai = (SELECT id FROM theloai WHERE name ="Vi tính")

--C2 --sai
/*DELETE FROM loaitin
INNER JOIN theloai ON theloai.id = loaitin.id_theloai
WHERE theloai.name  = "Vi tính"*/



--INSERT

INSERT INTO tintuc(title,summary,content,image,noibat,views,id_loaitin)
VALUES (
	'Công chúa Nhật Bản sẽ du học ở Anh',
	'Đại học Leeds (West Yorkshire, Anh) sẽ chào đón thành viên Hoàng gia Nhật Bản - công chúa Kako vào tháng 9 theo chương trình trao đổi sinh viên',
	'Công chúa Kako (22 tuổi), cháu gái của Hoàng đế Akihito, sẽ sang Anh để tiếp tục việc học tại Đại học Leeds theo chương trình trao đổi sinh viên từ tháng 9 năm nay đến tháng 6 năm sau, Japans Times ngày 24/4 đưa tin từ Cơ quan nội chính Hoàng gia Nhật Bản. Con gái thứ hai của Hoàng tử Akishino và Công nương Kiko vẫn chưa quyết định sẽ học ngành gì. Tuy nhiên, cô khá quan tâm đến ngành tâm lý học và nghệ thuật.Theo trang web của Đại học Leeds, ngôi trường này thành lập năm 1904, hiện thuộc top 100 trường đại học thế giới và là một trong những cơ sở giáo dục lớn nhất nước Anh. Công chúa Kako từng là sinh viên Đại học Gakushuin trước khi chuyển sang Đại học Thiên chúa giáo Quốc tế (ICU) ở Tokyo từ tháng 4/2015. Sau khi kết thúc chương trình học ở Anh vào mùa hè năm 2018, cô sẽ trở lại Nhật Bản.Chị gái Kako, công chúa Mako từng tham gia chương trình trao đổi sinh viên tại  
Đại học Edinburgh (Anh) từ năm 2012 đến năm 2013, khi đang học năm thứ 3 tại ICU.',
	'http://img.f29.vnecdn.net/2017/04/26/cong-chua-kako-4061-1493172249.jpg',
	1,
	10,
	1
)