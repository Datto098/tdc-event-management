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
                'name' => 'Workshop "IoT và các ứng dụng trong cuộc sống"',
                'location' => 'Hội trường D, 53 Võ Văn Ngân, Linh Chiểu, TP. Thủ Đức, TP. Hồ Chí Minh, Trường Cao Đẳng Công Nghệ Thủ Đức',
                'event_photo' => '/storage/uploads/events/1718957834_b3d002079c15ddf.jpg',
                'event_start' => Carbon::create('2024', '06', '26', '14', '00', '00'),
                'event_end' => Carbon::create('2024', '06', '26', '16', '00', '00'),
                'point' => 5,
                'registration_start' => Carbon::create('2024', '06', '20', '00', '00', '00'),
                'registration_end' => Carbon::create('2024', '06', '22', '23', '59', '59'),
                'registration_count' => 50,
                'content' => '<h2><span class="text-huge"><strong>FIT-TDC lập kế hoạch tổ chức Workshop "IoT và các ứng dụng trong cuộc sống" năm 2022</strong></span></h2><p><strong>I. MỤC ĐÍCH</strong><br><span style="color:rgb(51,51,51);">Nhằm mục đích giúp các Giáo viên và Sinh viên ngành Công nghệ thông tin nắm bắt được công nghệ và ứng dụng của IoT trong các lĩnh vực của đời sống, để Sinh viên có thể tiếp cận với các công nghệ và nhu cầu thực tế của Doanh nghiệp.</span><br><span style="color:rgb(51,51,51);">Đồng thời, Công ty kết hợp với Khoa giới thiệu công việc thử việc, thực tập phù hợp nếu ứng viên đủ yêu cầu.</span><br><strong>II. THỜI GIAN - ĐỊA ĐIỂM VÀ THÀNH PHẦN THAM DỰ</strong><br><span style="color:rgb(51,51,51);">1. Thời gian:&nbsp;</span><strong>08h30</strong><span style="color:rgb(51,51,51);">, </span><strong>Thứ bảy </strong><span style="color:rgb(51,51,51);">ngày </span><strong>09 </strong><span style="color:rgb(51,51,51);">tháng </span><strong>04 </strong><span style="color:rgb(51,51,51);">năm </span><strong>2022</strong><br><span style="color:rgb(51,51,51);">2. Địa điểm:&nbsp;</span><strong>Hội trường H.</strong><br><span style="color:rgb(51,51,51);">3. Thành phần tham dự</span><br><span style="color:rgb(51,51,51);">&nbsp; &nbsp;- CBQL khoa Công nghệ Thông tin.</span><br><span style="color:rgb(51,51,51);">&nbsp; &nbsp;- Giảng viên Khoa Công nghệ thông tin ngành TT&amp;MMT và ngành CNTT</span><br><span style="color:rgb(51,51,51);">&nbsp; &nbsp;- Sinh viên ngành&nbsp;Truyền thông và mạng máy tính &amp; ngành&nbsp;Công nghệ thông tin khóa 2019, 2020 và 2021.</span><br><strong>III. HÌNH THỨC VÀ NỘI DUNG BÁO CÁO</strong><br><span style="color:rgb(51,51,51);">1. Hình thức báo cáo</span><br><span style="color:rgb(51,51,51);">- Chuyên đề: IoT và các ứng dụng trong cuộc sống.</span><br><span style="color:rgb(51,51,51);">- Báo cáo viên:</span><br><span style="color:rgb(51,51,51);">&nbsp; &nbsp;1. TS. </span><strong>Lê Trần Hữu Phúc</strong><span style="color:rgb(51,51,51);"> - Giám độc công ty TNHH Công Nghệ Cho Doanh Nghiệp.</span><br><span style="color:rgb(51,51,51);">&nbsp; &nbsp;2. Ông </span><strong>Lê Đức Tài</strong><span style="color:rgb(51,51,51);"> - Giám đốc kỹ thuật công ty TNHH Công Nghệ Cho Doanh Nghiệp.</span><br><span style="color:rgb(51,51,51);">2. Nội dung báo cáo</span><br><span style="color:rgb(51,51,51);">- Giới thiệu về IoT</span><br><span style="color:rgb(51,51,51);">- Đặc tính kỹ thuật</span><br><span style="color:rgb(51,51,51);">- Ưu điểm và nhược điểm</span><br><span style="color:rgb(51,51,51);">- Ứng dụng thực tế</span><br><span style="color:rgb(51,51,51);">- Demo ứng dụng IoT</span></p><figure class="image"><img style="aspect-ratio:2048/1348;" src="/storage/uploads/1718957820_b3d002079c15ddf.jpg" width="2048" height="1348"></figure>',
                'status' => 'Sắp diễn ra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('events')->insert($events);
    }
}