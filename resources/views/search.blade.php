@extends('layouts.app')

@section('title', 'Tra cứu')

@section('content')
<div class="background-tdc">
    <div class="search-box">
        <h1 class="title"><span>Tra cứu</span><br> tham gia sự kiện</h1>
        <form id="searchForm" method="get" data-url="{{ route('search_events_by_student') }}">
            <div class="flex items-center">
                <input id="studentId" class="input-search rounded-l-lg" name="student_id" placeholder="Nhập mã số sinh viên" type="text">
                <button type="submit" class="btn-search rounded-r-lg"><i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</button>
            </div>
        </form>
        <!-- Modal -->
        <div id="eventsModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg w-full max-w-lg overflow-hidden">
                <div class="flex justify-between items-center px-6 py-4">
                    <h2 class="text-lg font-semibold text-gray-200" id="modalTitle">Kết quả tra cứu</h2>
                    <button class="text-gray-200 hover:text-yellow-400 focus:outline-none p-5 text-2xl" onclick="closeModal()">&times;</button>
                </div>
                <div class="p-6" id="modalBody">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('eventsModal').style.display = 'none';
    }

    // Lấy modal
    var modal = document.getElementById('eventsModal');

    // Khi người dùng click bên ngoài modal, đóng modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    let studentIdRegex = /^\d{5}[a-zA-Z]{2}\d{4}$/;

    let modalBody = document.getElementById("modalBody");
    let modalTitle = document.getElementById("modalTitle");

    // Xử lý sự kiện submit form bằng Ajax
    document.getElementById("searchForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Ngăn không gửi request mặc định

        var studentId = document.getElementById("studentId").value.trim();

        if (studentId === '') {
            modalTitle.parentElement.classList.remove('bg-red-600', 'bg-blue-950')
            modalTitle.parentElement.classList.add('bg-red-600')
            modalTitle.innerHTML = 'Kết quả tra cứu';
            modalBody.innerHTML = '<p class="text-gray-700" id="modalMessage">Vui lòng nhập mã số sinh viên để tra cứu.</p>';
            modal.style.display = "flex";
            return;  
        }

        // Kiểm tra mã số sinh viên với biểu thức chính quy
        if (!studentIdRegex.test(studentId)) {
            modalTitle.parentElement.classList.remove('bg-red-600', 'bg-blue-950')
            modalTitle.parentElement.classList.add('bg-red-600')
            modalTitle.innerHTML = 'Kết quả tra cứu';
            modalBody.innerHTML = 'Mã số sinh viên không hợp lệ.';
            modal.style.display = "flex";
            return;  
        }

        var apiUrl = this.getAttribute('data-url');

        fetch(apiUrl + '?student_id=' + studentId)
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.error) {
                    modalTitle.parentElement.classList.remove('bg-red-600', 'bg-blue-950')
                    modalTitle.parentElement.classList.add('bg-red-600')
                    modalTitle.innerHTML = 'Kết quả tra cứu';
                    modalBody.innerHTML = '<p>' + data.error + '</p>';
            } else {
                modalTitle.parentElement.classList.remove('bg-red-600', 'bg-blue-950')
                modalTitle.parentElement.classList.add('bg-blue-950')
                modalTitle.innerHTML = 'Kết quả tra cứu cho sinh viên ' + data.student.fullname + ' (MSSV: ' + data.student.email.split('@')[0] + ')';

                if (data.events.length > 0) {
                    var html = '<h3 class="text-lg font-semibold mb-2">Các sự kiện sinh viên đã tham gia:</h3>';
                    html += '<div class="overflow-x-auto">';
                    html += '<table class="min-w-full divide-y divide-gray-200">';
                    html += '<thead class="bg-gray-50">';
                    html += '<tr>';
                    html += '<th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-200 bg-blue-800 uppercase tracking-wider">Tên sự kiện</th>';
                    html += '</tr>';
                    html += '</thead>';
                    html += '<tbody class="bg-white divide-y divide-gray-200">';

                    data.events.forEach(function(event, index) {
                            var bgColorClass = index % 2 === 0 ? 'bg-gray-100' : 'bg-blue-400 text-white'; 

                            html += '<tr class="' + bgColorClass + '">';
                            html += '<td class="px-6 py-4 whitespace-nowrap"> <span class="font-medium">' + event.id + '. </span> ' + event.name + '</td>';
                            html += '</tr>';
                        });

                    html += '</tbody>';
                    html += '</table>';
                    html += '</div>';

                    modalBody.innerHTML = html;
                } else {
                    modalBody.innerHTML = '<p>Sinh viên chưa tham gia sự kiện nào.</p>';
                }
            }


                modal.style.display = "flex";

            })
            .catch(function(error) {
                console.error('Đã xảy ra lỗi:', error);
            });
    });
</script>
@endsection