-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table demo2021.infos: ~7 rows (approximately)
/*!40000 ALTER TABLE `infos` DISABLE KEYS */;
INSERT INTO `infos` (`id`, `img`, `title`, `typename`, `quote`, `created_at`, `updated_at`) VALUES
	(1, 'http://localhost:8000\\image\\_Tien_Minh_-1.jpg', 'Nguyễn Tiến Minh', 'Open this select menu', 'Tay vợt số 1 Việt Nam , tuổi tác khống thể cản bước anh . Đã 36 tuổi nhưng anh vẫn rất dẽo dai , đang đứng top 30 thế giới . Vợ của anh cũng là 1 vđv.', '2021-07-22 14:30:56', '2021-07-22 14:30:56'),
	(3, 'http://localhost:8000\\image\\Sang-Dinh-Hanoi-Buffaloes-1.jpg', 'Hanoi buffaloes', 'INSPIRATION', 'Hanoi Buffaloes là một đội bóng rổ chuyên nghiệp có trụ sở tại Hà Nội, Việt Nam. Đội là một trong các đội tham dự giải bóng rổ chuyên nghiệp đầu tiên của Việt Nam VBA 2016', '2021-07-22 15:51:29', '2021-07-22 15:51:29'),
	(5, 'http://localhost:8000\\image\\uefa.jpg', 'Ronalo , sự nỗ lực phi thường .', 'BUSINESS/NATURE', 'Cứ tưởng Cristiano Ronaldo được phổng mũi sau khi khoe cảnh quý tử 7 tuổi Cristianinho nhà anh “cơ bắp cuồn cuộn”', '2021-07-22 17:47:20', '2021-07-22 17:47:20'),
	(6, 'http://localhost:8000\\image\\leechungway.jpg', 'Sô 1 Malaysia', 'CREATIVE/NATURE', 'Lee Chong Wei là một cựu vận động viên cầu lông chuyên nghiệp người Malaysia. Với tư cách tay vợt đánh đơn', '2021-07-22 18:36:07', '2021-07-22 18:36:07'),
	(7, 'http://localhost:8000\\image\\nguoi dep.jpg', 'Người đẹp Việt Nam', 'CREATIVE', 'Quốc muốn có đôi môi dày với sắc màu nổi bật nhưng họ lại không muốn thoa son quá nhiều. Phái đẹp Hàn ưu ái cho cá', '2021-07-22 19:41:26', '2021-07-22 19:41:26'),
	(8, 'http://localhost:8000\\image\\covid.jpg', 'Người dân Hà Nội chen chân chờ tiêm vaccine Covid-19 tại Bệnh viện E', 'BUSINESS/NATURE', 'Việc xét nghiệm sàng lọc người ho, sốt có ý nghĩa rất quan trọng trong phòng chống dịch ở Hà Nội hiện nay; là giải pháp giúp \'bắt\' được F0 lẩn khuất để dập dịch kịp thời', '2021-07-22 19:42:58', '2021-07-22 19:42:58'),
	(9, 'http://localhost:8000\\image\\Du-ngvova-jpeg-2523-1622518374-5790-1596-1626965440.jpg', 'Lê Dũng "Vova" trước khi bị truy nã', 'INSPIRATION', 'Trước đó, ông Dũng, 51 tuổi, bị khởi tố về tội Làm, tàng trữ, phát tán hoặc tuyên truyền thông tin, tài liệu, vật phẩm nhằm chống Nhà nước CHXHCN Việt Nam theo điều 117 Bộ luật Hình sự', '2021-07-22 19:44:40', '2021-07-22 19:44:40'),
	(10, 'http://localhost:8000\\image\\4-tin-nhanh2-15301981219742073555901.jpg', 'Nữ CĐV HÀN QUỐC khuấy đảo khán đài', 'CREATIVE/NATURE', 'Các cô gái Hàn Quốc làm nóng rực khán đài trong trận Hàn Quốc đánh bại đương kim vô địch Đức 2-0 bằng những trang phục bắt mắt, những động tác làm duyên mê hoặc người xem', '2021-07-22 19:45:43', '2021-07-22 19:45:43');
/*!40000 ALTER TABLE `infos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
