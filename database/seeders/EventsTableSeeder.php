<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        $events = [
            [
                'name' => 'Workshop 1',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '07', '10', '08', '00', '00'),
                'event_end' => Carbon::create('2024', '07', '10', '12', '00', '00'),
                'point' => 5,
                'registration_start' => Carbon::create('2024', '07', '01', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '07', '05', '23', '59', '59'),
                'registration_count' => 50,
                'content' => '<h2>Workshop IoT cơ bản</h2><p>Nội dung chi tiết về IoT và các ứng dụng.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Seminar Blockchain',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '07', '15', '09', '00', '00'),
                'event_end' => Carbon::create('2024', '07', '15', '11', '00', '00'),
                'point' => 7,
                'registration_start' => Carbon::create('2024', '07', '05', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '07', '12', '23', '59', '59'),
                'registration_count' => 100,
                'content' => '<h2>Seminar về Blockchain</h2><p>Các khái niệm và ứng dụng của Blockchain trong đời sống.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hội thảo AI và Machine Learning',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '07', '20', '13', '00', '00'),
                'event_end' => Carbon::create('2024', '07', '20', '16', '00', '00'),
                'point' => 8,
                'registration_start' => Carbon::create('2024', '07', '10', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '07', '18', '23', '59', '59'),
                'registration_count' => 150,
                'content' => '<h2>Hội thảo AI và Machine Learning</h2><p>Khám phá AI và ứng dụng thực tiễn của Machine Learning.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hackathon 2024',
               'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '07', '25', '08', '00', '00'),
                'event_end' => Carbon::create('2024', '07', '27', '20', '00', '00'),
                'point' => 15,
                'registration_start' => Carbon::create('2024', '07', '10', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '07', '20', '23', '59', '59'),
                'registration_count' => 200,
                'content' => '<h2>Hackathon 2024</h2><p>Tham gia cuộc thi lập trình kéo dài 3 ngày.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tech Talk về An ninh mạng',
               'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '08', '05', '14', '00', '00'),
                'event_end' => Carbon::create('2024', '08', '05', '17', '00', '00'),
                'point' => 10,
                'registration_start' => Carbon::create('2024', '07', '25', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '08', '02', '23', '59', '59'),
                'registration_count' => 120,
                'content' => '<h2>Tech Talk về An ninh mạng</h2><p>Cập nhật các xu hướng và giải pháp an ninh mạng mới nhất.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Workshop về lập trình di động',
               'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '08', '12', '09', '00', '00'),
                'event_end' => Carbon::create('2024', '08', '12', '12', '00', '00'),
                'point' => 6,
                'registration_start' => Carbon::create('2024', '08', '01', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '08', '10', '23', '59', '59'),
                'registration_count' => 60,
                'content' => '<h2>Workshop về lập trình di động</h2><p>Học lập trình Android và iOS cơ bản.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hội thảo về Điện toán đám mây',
                'location' => 'Hội trường H',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '08', '18', '10', '00', '00'),
                'event_end' => Carbon::create('2024', '08', '18', '14', '00', '00'),
                'point' => 9,
                'registration_start' => Carbon::create('2024', '08', '05', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '08', '15', '23', '59', '59'),
                'registration_count' => 100,
                'content' => '<h2>Hội thảo về Điện toán đám mây</h2><p>Khám phá các dịch vụ và giải pháp đám mây hiện đại.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Seminar về Dữ liệu lớn',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '08', '25', '13', '00', '00'),
                'event_end' => Carbon::create('2024', '08', '25', '16', '00', '00'),
                'point' => 8,
                'registration_start' => Carbon::create('2024', '08', '15', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '08', '22', '23', '59', '59'),
                'registration_count' => 120,
                'content' => '<h2>Seminar về Dữ liệu lớn</h2><p>Phân tích và ứng dụng của dữ liệu lớn trong kinh doanh.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Workshop về UX/UI Design',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '09', '02', '09', '00', '00'),
                'event_end' => Carbon::create('2024', '09', '02', '12', '00', '00'),
                'point' => 7,
                'registration_start' => Carbon::create('2024', '08', '22', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '08', '30', '23', '59', '59'),
                'registration_count' => 70,
                'content' => '<h2>Workshop về UX/UI Design</h2><p>Thiết kế giao diện người dùng và trải nghiệm người dùng.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tech Conference 2024',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '09', '10', '08', '00', '00'),
                'event_end' => Carbon::create('2024', '09', '11', '17', '00', '00'),
                'point' => 12,
                'registration_start' => Carbon::create('2024', '08', '15', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '09', '05', '23', '59', '59'),
                'registration_count' => 300,
                'content' => '<h2>Tech Conference 2024</h2><p>Hội nghị công nghệ lớn nhất trong năm với nhiều diễn giả nổi tiếng.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hội thảo về Công nghệ sinh học',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '09', '20', '13', '00', '00'),
                'event_end' => Carbon::create('2024', '09', '20', '16', '00', '00'),
                'point' => 8,
                'registration_start' => Carbon::create('2024', '09', '10', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '09', '18', '23', '59', '59'),
                'registration_count' => 100,
                'content' => '<h2>Hội thảo về Công nghệ sinh học</h2><p>Các tiến bộ trong công nghệ sinh học và ứng dụng thực tế.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Workshop về IoT nâng cao',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '09', '25', '08', '00', '00'),
                'event_end' => Carbon::create('2024', '09', '25', '12', '00', '00'),
                'point' => 10,
                'registration_start' => Carbon::create('2024', '09', '15', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '09', '23', '23', '59', '59'),
                'registration_count' => 50,
                'content' => '<h2>Workshop IoT nâng cao</h2><p>Nội dung chi tiết về IoT nâng cao và các ứng dụng thực tiễn.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Seminar về Trí tuệ nhân tạo',
               'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '09', '30', '09', '00', '00'),
                'event_end' => Carbon::create('2024', '09', '30', '11', '00', '00'),
                'point' => 9,
                'registration_start' => Carbon::create('2024', '09', '20', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '09', '28', '23', '59', '59'),
                'registration_count' => 100,
                'content' => '<h2>Seminar về Trí tuệ nhân tạo</h2><p>Các khái niệm và ứng dụng của AI trong đời sống.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tech Expo 2024',
               'location' => 'Hội trường B',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '10', '05', '09', '00', '00'),
                'event_end' => Carbon::create('2024', '10', '07', '17', '00', '00'),
                'point' => 12,
                'registration_start' => Carbon::create('2024', '09', '20', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '10', '02', '23', '59', '59'),
                'registration_count' => 500,
                'content' => '<h2>Tech Expo 2024</h2><p>Triển lãm công nghệ lớn nhất với nhiều sản phẩm và giải pháp mới.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hội thảo về An toàn thông tin',
                'location' => 'Hội trường B',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '10', '10', '13', '00', '00'),
                'event_end' => Carbon::create('2024', '10', '10', '16', '00', '00'),
                'point' => 8,
                'registration_start' => Carbon::create('2024', '10', '01', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '10', '08', '23', '59', '59'),
                'registration_count' => 100,
                'content' => '<h2>Hội thảo về An toàn thông tin</h2><p>Các biện pháp và chiến lược bảo vệ thông tin cá nhân và tổ chức.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Workshop về phát triển web',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '10', '15', '09', '00', '00'),
                'event_end' => Carbon::create('2024', '10', '15', '12', '00', '00'),
                'point' => 6,
                'registration_start' => Carbon::create('2024', '10', '05', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '10', '13', '23', '59', '59'),
                'registration_count' => 60,
                'content' => '<h2>Workshop về phát triển web</h2><p>Các công cụ và công nghệ mới nhất trong phát triển web.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hội thảo về blockchain',
                'location' => 'Hội trường D',
                'event_photo' => '/storage/uploads/events/banner.webp',
                'event_start' => Carbon::create('2024', '10', '20', '09', '00', '00'),
                'event_end' => Carbon::create('2024', '10', '20', '12', '00', '00'),
                'point' => 7,
                'registration_start' => Carbon::create('2024', '10', '10', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '10', '18', '23', '59', '59'),
                'registration_count' => 80,
                'content' => '<h2>Hội thảo về blockchain</h2><p>Ứng dụng và triển vọng của công nghệ blockchain.</p>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];


        DB::table('events')->insert($events);
    }
}